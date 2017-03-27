<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/formas", name="Formas")
     */
    public function formAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/forms.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/chart", name="Chart")
     */
    public function chartAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/charts.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/tables", name="Tables")
     */
    public function tablesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/tables.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/grid", name="Grid")
     */
    public function gridAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/grid.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/bootstrap", name="Bootstrap")
     */
    public function bootstrapAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/bootstrap.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
