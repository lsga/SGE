<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class LogginController extends Controller
{
    /**
     * @Route("/", name="ingresar")
     */
    public function LogginAction(Request $request){
      $em = $this->getDoctrine()->getManager();
      $repository = $em->getRepository('AppBundle:Usuarios');
      if($request->getMethod()=='POST'){
        $usuario= $request->get('usuario');
        $pass=$request->get('contraseña');
        $us = $repository->findOneBy(array('user'=>$usuario, 'password'=>$pass));
        if ($us) {
          return $this->render('principal/principal.html.twig', array('user' =>$us));
        }else {
            return $this->render('base.html.twig');
          }
      }
      else {
        return $this->render('base.html.twig');
      }
    }
    /**
     * @Route("/home", name="Recargar")
     */
    public function RecargarAction(Request $request){
      return $this->render('principal/principal.html.twig');
    }
}
