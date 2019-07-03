<?php


namespace App\Controller;


use App\Entity\Univer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class UniverController extends AbstractController
{

    public function listing(){
        $univers = $this->getDoctrine()->getRepository(Univer::class)
            ->findAll();
        return $this->render('univer_listing.html.twig', ["univers" => $univers]);
    }

    public function view($univer_id){
        $univer = $this->getDoctrine()->getRepository(Univer::class)
            ->find($univer_id);
        return $this->render('univer_view.html.twig', ["univer" => $univer]);
    }

    public function create(Request $request){
        $univer = new Univer();

        $form = $this->createFormBuilder($univer)
            ->add('name', TextType::class)
            ->add('description', TextType::class)
            ->add('rule', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Univer'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $univer = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($univer);
            $entityManager->flush();

            return $this->redirectToRoute('univer_listing');
        }

        return $this->render('univer_create.html.twig', [
            'form' => $form->createView(),
        ]);

    }


}