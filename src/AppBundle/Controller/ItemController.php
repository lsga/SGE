<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Items;
use AppBundle\Entity\Ambitos;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Doctrine\DBAL\DriverManager;
use Symfony\Doctrine\DBAL\Connection;

class ItemController extends Controller
{
  /**
   * @Route("/items/{id}", name="Items")
   */
  public function MostrarItems($id)
  {
    $items = $this->getDoctrine()->getManager()->getConnection()->prepare("Select * from items i,ambitos a where i.id_ambito_id=a.id and id_ambito_id=".$id);
    $items->execute();
    $ambito = $this->getDoctrine()->getManager()->getConnection()->prepare("Select NombreAmbito from ambitos a, items i where i.id_ambito_id=a.id and id_ambito_id=".$id." LIMIT 1");
    $ambito->execute();
      //$item = $this->getDoctrine()
        //->getRepository('AppBundle:Items')
        //->Find($sql);
      return $this->render('item/index.html.twig', array(
        'items' => $items,'ambitos'=>$ambito
      ));
  }
}
