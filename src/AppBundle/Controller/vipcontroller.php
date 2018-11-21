<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ProducType;
use AppBundle\Entity\vip;

class vipcontroller extends Controller
{
        /**
     * @Route("/home/", name="vip")
     */
    public function vipAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(vip::class);
        $vip = $repository->findAll();
        return $this->render('vip.html.twig', array('vip' => $vip));
    }
       /**
     * @Route("/buscarid/{id}", name="buscarid_id")
     */
    public function buscaridAction(Request $request,$id)
    {
        $repository = $this->getDoctrine()->getRepository(buscarid::class);
        $ropa = $repository->findOneByid($id);
        return $this->render('buscarid.html.twig', array('buscarid' => $buscarid));
    }
}
