<?php

namespace Siteruffecarde\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * Page d'accueil du site
     * @Route("/",name="Home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * 
     * Page Terms & Conditions
     * @Route("/Terms&Conditions",name="TermsConditions")
     * @Template()
     * 
     */
    public function TermsconditionAction(){
        return array();
    }
    
}
