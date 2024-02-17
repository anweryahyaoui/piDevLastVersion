<?php

namespace App\Controller;

use App\Entity\Myinvest;
use App\Form\ClientinvestType;
use App\Repository\MyinvestRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InvstingController extends AbstractController
{
    #[Route('/invsting', name: 'app_invsting')]
    public function index(): Response
    {
        return $this->render('invsting/index.html.twig', [
            'controller_name' => 'InvstingController',
        ]);
    }

    #[Route('/fetch', name: 'fetch')]
    public function fetch(MyinvestRepository $repo):Response
    {
        $result=$repo->findAll();
        return $this->render('invsting/test.html.twig',[
            'response' =>$result
        ]);
    }

    #[Route('/fetch2', name: 'fetch2')]
    public function fetch2(ManagerRegistry $mr):Response
    {
        $repo=$mr->getRepository(Myinvest::class);
        $result=$repo->findAll();
        return $this->render('invsting/test.html.twig',[
            'response' =>$result
        ]);
    }
    #[Route('/add', name: 'add')]
    public function add(ManagerRegistry $mr): Response
    {
        $s=new Myinvest();

        $s->setNom('test');

        $s->setAmount(50);


        $em=$mr->getManager();
        $em->persist($s);
        $em->flush();
        return $this->redirectToRoute('fetch');
    }
    #[Route('/addF', name: 'addF')]
    public function addF(ManagerRegistry $mr,Request $req): Response
    {
        $s=new Myinvest();   // 1- instance
        $form=$this->createForm(ClientinvestType::class,$s);//2- creation formulaire
        $form->handleRequest($req); //anlasyser la requette http et récuperer les données
        if($form->isSubmitted())
        {
            $em=$mr->getManager();    //3- persist+flush
            $em->persist($s);
            $em->flush();
            return $this->redirectToRoute('fetch');
        };

        return $this->render('invsting/add.html.twig',[
            'f'=>$form->createView()
        ]);
    }

    #[Route('/update/{id}', name: 'update')]
    public function update(ManagerRegistry $mr, MyinvestRepository $repo,Request $req,$id): Response
    {
        $s= $repo->find($id); // 1- récupération
        $form=$this->createForm(ClientinvestType::class,$s);//2- creation formulaire
        $form->handleRequest($req);
        if($form->isSubmitted())
        {
            $em=$mr->getManager();    //3- persist+flush
            $em->persist($s);
            $em->flush();
            return $this->redirectToRoute('fetch');
        };

        return $this->renderForm('invsting/update.html.twig',[
            'f'=>$form
        ]);
    }

}
