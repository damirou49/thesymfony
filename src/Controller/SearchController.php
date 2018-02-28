<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Flight
use App\Entity\Airport




class SearchController  extends Controller
{

	/**
     * @Route("/search/results", name="app_search")
     * @Template("Search.html.twig")
     */

     public function search (Request $request)


{


	$cityDeparture = $request->query->get('city-departure');

	$cityArrival = $request->query->get('city-arrival');

	$dateDeparture = $request->query->get('date-departure')

	$dateArrival = $request->query->get('date-arrival')

	$em = $this->getDoctrine()-> getManager();


	$airportFrom =$em->getRepository(Airport::class)->findOneBy(
		['city' => $cityDeparture]
	);
	$airportTo =$em->getRepository(Airport::class)->findOneBy(
		['city' => $cityDeparture]
	);
	$dateFrom =$em->getRepository(Flight::class)->findOneBy(
		['city' => $cityDeparture]
	);
	$dateTo =$em->getRepository(Flight::class)->findOneBy(
		['city' => $cityDeparture]
	);


	if(!is_null($cityArrival) && $cityArrival !== ){

	}
   }


     


}


