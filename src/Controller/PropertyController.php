<?php

namespace App\Controller;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController{


    /**
     * @route ("/biens" , name="property.index")
     * @return Response
     * 
     * 
     * 
     */
public function index(): Response
{
  
    $property = new Property();
    $property->setTitle('Mon premier bien');
    $property->setPrice(200000);
    $property->setRooms(4);
    $property->setBedrooms(3);
    $property->setDescription('Une petite description');
    $property->setSurface(60);
    $property->setFloor(4);
    $property->setHeat(1);
    $property->setCity('Montpellier');
    $property->setAdress('15 boulevard Gambetta');
    $property->setPostalCode(34000);
    $em = $this->getDoctrine()->getManager();
    $em->persist($property);
    //$em->flush();




    return $this->render('property/index.html.twig',['current_menu' => 'properties']);



}




}






?>