<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $productId = 1;
        $products = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($productId);
        print_r($products->getName() .'</br>');
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    /**
     * @Route("/product/{id}", name="product")
     * @ParamConverter("product", class="AppBundle:Product")
     */
    public function productAction(Product $product)
    {
        /*
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $productId
            );
        }
        */
        print($product->getName() .'</br>');
        print($product->getCategory()->getName() . '</br>');
        foreach($product->getCategory()->getProducts() as $product) {
            print($product->getName() . '</br>');
        }
        return new JsonResponse(['name' => $product->getName()], 200);
    }

    /**
     *
     */
    public function categoryAction(){

    }
}
