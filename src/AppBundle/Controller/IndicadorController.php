<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Items;
use AppBundle\Entity\Ambitos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Doctrine\DBAL\DriverManager;
use Symfony\Doctrine\DBAL\Connection;

class IndicadorController extends Controller
{
  /**
   * @Route("/indicadores/{id}", name="Indicadores")
   */
  public function MostrarIndicadores($id)
  {
    $indicadores = $this->getDoctrine()->getManager()->getConnection()->prepare("Select Descripcion, i.id from indicadores i,items m,ambitos a where i.id_item_id=m.id and m.id_ambito_id=a.id and id_item_id=".$id);
    $indicadores->execute();
    $items = $this->getDoctrine()->getManager()->getConnection()->prepare("Select m.NombreItem, a.NombreAmbito, a.id from items m, indicadores i,ambitos a where i.id_item_id=m.id and m.id_ambito_id=a.id and id_item_id=".$id." LIMIT 1");
    $items->execute();
      //$item = $this->getDoctrine()
        //->getRepository('AppBundle:Items')
        //->Find($sql);
      return $this->render('indicador/index.html.twig', array(
        'indicadores' => $indicadores,'items'=>$items
      ));
  }
}
