<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaffdashController extends AbstractController
{
    #[Route('/staffdash', name: 'app_staffdash')]
    public function index(): Response
    {
        return $this->render('staffdash/index.html.twig', [
            'controller_name' => 'StaffdashController',
        ]);
    }

    #[Route('/staff',name:'staff_app')]
    public function indexastaff():Response
    {
        return $this->render('staffdash/staff/staff.html.twig');
    }

    #[Route('/staffPro',name:'staffPro_app')]
    public function indexstaffPro():Response
    {
        return $this->render('staffdash/profile/staff-profile.html.twig');
    }

    #[Route('/staffCon',name:'staffCon_app')]
    public function indestaffContact():Response
    {
        return $this->render('staffdash/contact/satff-contact.html.twig');
    }
}
