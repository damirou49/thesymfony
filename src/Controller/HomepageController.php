<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="app_homepage")
     * @Template("Homepage/index.html.twig")
     */
    public function index()
    {   
    }


}