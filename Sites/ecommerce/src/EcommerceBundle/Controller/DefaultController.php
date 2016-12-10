<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
    	$employees = [
    		[
    			'first_name' => 'Yovan',
    			'last_name' => 'Juggoo',
    			'age' => 33
    		],
    		[
    			'first_name' => 'John',
    			'last_name' => 'Doe',
    			'age' => 25
    		],
    		[
    			'first_name' => 'Paul',
    			'last_name' => 'Smith',
    			'age' => 78
    		],
    		[
    			'first_name' => 'Jane',
    			'last_name' => 'Micheal',
    			'age' => 45
    		],
    	];

    	$hobby = [
    	    'name' => 'Football',
            'type' => 'Outdoor',
            'mode' => 'Multi-player',
            'is_dangerous' => true
        ];

    	dump($employees);

        return $this->render('EcommerceBundle:Default:index.html.twig', [
        	'id' => $id,
        	'employees' => $employees,
            'hobby' => $hobby
        ]);
    }

    public function planningAction() {
        return $this->render('EcommerceBundle:Default:planning.html.twig');
    }

    public function contactAction() {
        return $this->render('EcommerceBundle:Default:contact.html.twig');
    }

    public function suppliersAction() {
        return $this->render('EcommerceBundle:Default:suppliers.html.twig');
    }

    public function clientsAction() {
        return $this->render('EcommerceBundle:Default:clients.html.twig');
    }

    public function aboutAction() {
        return $this->render('EcommerceBundle:Default:about.html.twig');
    }

}
