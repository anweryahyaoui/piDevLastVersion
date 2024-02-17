<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmindashController extends AbstractController
{
    #[Route('/admindash', name: 'app_admindash')]
    public function index(): Response
    {
        return $this->render('admindash/index.html.twig', [
            'controller_name' => 'AdmindashController',
        ]);
    }

    #[Route('/admin',name:'admin_app')]
    public function indexadmin():Response
    {
        return $this->render('admindash/admin/admin.html.twig');
    }

    #[Route('/adminPro',name:'adminPro_app')]
    public function indexadminPro():Response
    {
        return $this->render('admindash/profile/users-profile.html.twig');
    }

    #[Route('/adminCon',name:'adminCon_app')]
    public function indexadminContact():Response
    {
        return $this->render('admindash/contact/pages-contact.html.twig');
    }
}
