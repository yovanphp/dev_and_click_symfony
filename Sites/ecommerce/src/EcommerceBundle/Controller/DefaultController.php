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

        return $this->render('EcommerceBundle:Default:index.html.twig', [
        	'id' => $id,
        	'employees' => $employees,
        ]);
    }
}
