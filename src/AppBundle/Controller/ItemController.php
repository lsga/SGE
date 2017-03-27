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
    $sql = $this->getDoctrine()->getManager()->getConnection()->prepare("Select NombreItem,NombreAmbito from items i,ambitos a where i.id_ambito_id=a.id and id_ambito_id=".$id);
    $sql->execute();

      //$item = $this->getDoctrine()
        //->getRepository('AppBundle:Items')
        //->Find($sql);
      return $this->render('item/index.html.twig', array(
        'items' => $sql
      ));
  }
}
