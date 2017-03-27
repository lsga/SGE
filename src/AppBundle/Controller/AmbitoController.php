<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ambitos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AmbitoController extends Controller
{
    /**
     * @Route("/ambitos", name="Ambitos")
     */
    public function MostrarControladores()
    {
        $ambito = $this->getDoctrine()
          ->getRepository('AppBundle:Ambitos')
          ->FindAll();
        return $this->render('ambito/index.html.twig', array(
          'ambitos' => $ambito
        ));
    }

}
