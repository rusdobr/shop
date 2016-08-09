<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use AppBundle\Form\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CategoryController extends Controller
{
    /**
     * @Route("/category/{id}", name="category")
     * @ParamConverter("product", class="AppBundle:Category")
     */
    public function indexAction(Category $category)
    {
        return new JsonResponse(['id' => $category->getCategoryid(), 'name' => $category->getName()]);
    }

    /**
     * @Route("/category/new/", name="category_new")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $category = new Category();
        $category->setName('Write a blog post');
        $category->setDescription('Write a blog description');
        $category->setProductsCountAdmin(3);

        $form = $this->createFormBuilder($category)
            ->add('name', TextType::class)
            ->add('description', TextareaType::class)
            ->add('products_count_admin', IntegerType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Category'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
