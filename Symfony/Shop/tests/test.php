<?php
use AppBundle\Entity\Products;
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 24.07.2016
 * Time: 19:25
 */
class test
{
    public function getAction()
    {
        $productId = 1;
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Products')
            ->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $productId
            );
        }
    }
}

$t = new test;
$t->getAction();