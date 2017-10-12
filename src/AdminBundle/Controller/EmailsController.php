<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Emails;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Email controller.
 *
 */
class EmailsController extends Controller
{
    /**
     * Lists all email entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $emails = $em->getRepository('AdminBundle:Emails')->findAll();

        return $this->render('emails/index.html.twig', array(
            'emails' => $emails,
        ));
    }

    /**
     * Finds and displays a email entity.
     *
     */
    public function showAction(Emails $email)
    {

        return $this->render('emails/show.html.twig', array(
            'email' => $email,
        ));
    }
}
