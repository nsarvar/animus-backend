<?php
/**
 * Created by PhpStorm.
 * User: nsarvar
 * Date: 08/09/17
 * Time: 04:29
 */

namespace AppBundle\Controller\Api;


use AppBundle\Entity\Apartment;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;


class ApartmentController extends FOSRestController
{
    /**
     * @Rest\Get("/api/apartments")
     */
    public function getAllAction()
    {
        $restresult = $this->getDoctrine()->getRepository('AppBundle:Apartment')->findAll();
        if ($restresult === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $restresult;
    }


    /**
     * @Rest\Get("/api/apartment/{id}")
     */
    public function getAction($id)
    {
        $singleresult = $this->getDoctrine()->getRepository('AppBundle:Apartment')->find($id);
        if ($singleresult === null) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }
        return $singleresult;
    }

    /**
    * @Rest\Post("/api/apartment")
    */

    public function postAction(Request $request)
    {
        $data = new Apartment();
        $email = $request->get('email');
        $street = $request->get('street');
        $town = $request->get('town');
        $country = $request->get('country');
        $postcode = $request->get('postcode');
        $moveInDate = $request->get('moveInDate');

        if(empty($country) || empty($email) || empty($town))
        {
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setEmail($email);
        $data->setStreet($street);
        $data->setTown($town);
        $data->setCountry($country);
        $data->setPostcode($postcode);
        $data->setMoveInDate($moveInDate);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        return new View("User Added Successfully", Response::HTTP_OK);
 }

    /**
     * @Rest\Delete("/apartment/{id}")
     */
    public function deleteAction($id)
    {
//        $data = new User;
        $sn = $this->getDoctrine()->getManager();
        $data = $this->getDoctrine()->getRepository('AppBundle:Apartment')->find($id);
        if (empty($data)) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
        }
        else {
            $sn->remove($data);
            $sn->flush();
        }
        return new View("deleted successfully", Response::HTTP_OK);
    }

    public function sendEmailAction($name, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody('You should see me from the profiler!')
        ;

        $mailer->send($message);

//        return $this->render();
    }
}