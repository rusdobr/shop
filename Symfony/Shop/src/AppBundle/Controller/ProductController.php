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
        $data = [];
        $this->getCategories($data, 0);
        $response = (new JsonResponse($data))->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Content-Type', 'application/json; charset=utf-8');

        return $response;
    }

    function getCategories(&$cnt, $parentCategory){
        $categories = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->findBy(
                array('parent' => $parentCategory)
            );
        $me = $this;
        array_walk($categories, function (Category $category) use (&$cnt, $me){
            $data = [
                'name'  => $category->getName(),
                'description'   => $category->getDescription(),
                'id'    => $category->getCategoryid(),
                'categories' => [],
                'products'  => []
            ];
            $me->getCategories($data['categories'], $category->getCategoryid());
            $cnt[]= $data;
        });
    }

}
