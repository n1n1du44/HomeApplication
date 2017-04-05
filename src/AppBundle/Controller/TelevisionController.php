<?php

namespace AppBundle\Controller;

use AppBundle\Controller\RestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Television;

class TelevisionController extends RestController
{

  /**
     * @Rest\View()
     * @Rest\Get("/api/televisions")
     */
  public function getTelevisionsAction(Request $request)
  {
      $televisions = $this->getDoctrine()->getRepository('AppBundle:Television')->findAll();

      // Création d'une vue FOSRestBundle
       $view = View::create($televisions);
       $view->setFormat('json');
       $view->setStatusCode(RestController::STATUS_CODE_OK);

       return $view;
  }


}
