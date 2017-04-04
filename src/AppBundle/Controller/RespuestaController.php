<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Respuesta;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Doctrine\DBAL\DriverManager;
use Symfony\Doctrine\DBAL\Connection;

class RespuestaController extends Controller
{
  /**
   * @Route("/respuesta/{id}", name="Respuesta")
   */
  public function MostrarElementos($id)
  {
    $respuestas = $this->getDoctrine()->getManager()->getConnection()->prepare("Select r.Descripcion from indicadores i,items m,ambitos a, respuesta r where i.id_item_id=m.id and m.id_ambito_id=a.id and r.id_indicador_id=i.id and r.id_indicador_id=".$id);
    $respuestas->execute();
    $pregunta = $this->getDoctrine()->getManager()->getConnection()->prepare("Select i.Descripcion, m.NombreItem, p.NombrePregunta from indicadores i,items m,ambitos a, pregunta p where i.id_item_id=m.id and m.id_ambito_id=a.id and p.id_indicador_id=i.id and p.id_indicador_id=".$id." LIMIT 1");
    $pregunta->execute();
      //$item = $this->getDoctrine()
        //->getRepository('AppBundle:Items')
        //->Find($sql);
      return $this->render('pregunta/index.html.twig', array(
        'respuesta' => $respuestas,'pregunta'=>$pregunta));
  }
}
