<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ProductController extends Controller
{
    /**
     * @Route("/product/{id}", name="product")
     * @ParamConverter("product", class="AppBundle:Category")
     */
    public function indexAction(Product $product)
    {
        return new JsonResponse(['id' => $product->getCategoryid(), 'name' => $product->getName()]);
    }

    /**
     * @Route("/product/showAll/", name="product_showall")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $data = [
            'categories' => [],
            'products' => []
        ];
        $this->getCategories($data['categories'], 0);
        $response = (new JsonResponse($data))->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Content-Type', 'application/json; charset=utf-8');

        return $response;
    }

    function getCategories(&$cnt, $parentCategory)
    {
        $categories = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->findBy(
                ['parent' => $parentCategory],
                ['name' => 'ASC']
            );
        $me = $this;
        $protect_hash = []; // protect from recurcive nether-ending circle
        array_walk($categories, function (Category $category) use (&$cnt, $me, &$protect_hash) {
            $categoryId = $category->getCategoryid();
            if (isset($protect_hash[$categoryId])) {
                return;
            }
            $protect_hash[$categoryId] = true;
            $data = [
                'name' => $category->getName(),
                'id' => $category->getCategoryid(),
                'categories' => [],
                'products' => $me->getProductsForCatalgue($category->getCategoryid())
            ];
            $me->getCategories($data['categories'], $categoryId);
            $cnt[] = $data;
        });
    }

    private function getProductsForCatalgue($categoryId)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM AppBundle:Product p
            WHERE p.price > 0
             AND p.categoryid = :categoryID
            AND p.enabled = 1
            ORDER BY p.name ASC'
        )->setParameter('categoryID', $categoryId);
        $products = $query->getResult();
        $result = [];
        array_walk($products, function (Product $product) use (&$result) {
            $result[] = [
                'id' => $product->getProductid(),
                'name' => $product->getName(),
                'price' => $product->getPrice()
            ];
        });
        return $result;
    }

}
