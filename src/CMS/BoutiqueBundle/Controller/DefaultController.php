<?php

namespace CMS\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CMSBoutiqueBundle:Default:index.html.twig', array());
    }
}
