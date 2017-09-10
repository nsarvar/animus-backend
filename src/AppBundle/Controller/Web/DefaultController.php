<?php

namespace AppBundle\Controller\Web;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/web/about", name="about")
     */
    public function aboutAction(Request $request)
    {

        $cookies = $request->cookies;

//        $token = $request->request->get('sarvar.nishonboyev@gmail.com');

//        die($token);

//        $csrf = $this->get('security.csrf.token_manager');
//        $token = $csrf->refreshToken("Dsa");
//        return new Response($token);

        echo "<pre>";
        print_r($request->cookies);

//        print_r($this->get('security.csrf.token_manager'));

        die("Sa");
//        exit;
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//        ]);
    }


}
