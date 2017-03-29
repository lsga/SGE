<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuarios;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Doctrine\DBAL\DriverManager;
use Symfony\Doctrine\DBAL\Connection;

class UsuarioController extends Controller
{
  /**
   * @Route("/usuario/{id}", name="Usuario")
   */
  public function MostrarUsuario($id)
  {
   $usuario = $this->getDoctrine()
     ->getRepository('AppBundle:Usuarios')
     ->Find($id);
   return $this->render('usuario/detalle.html.twig', array(
     'usuario' => $usuario
   ));
 }
}
