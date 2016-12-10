<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{

    private $suppliers = [
        [ 'id' => 1, 'name' => 'ABC Motors', 'location' => 'Port Louis' ],
        [ 'id' => 2, 'name' => 'Blendax', 'location' => 'Bonne Terre' ],
        [ 'id' => 2, 'name' => 'Mauvillac', 'location' => 'Pailles' ],
        [ 'id' => 4, 'name' => 'Subana', 'location' => 'Port Louis' ],
        [ 'id' => 5, 'name' => 'Harel Mallac', 'location' => 'Pailles' ]
    ];

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

        //See in profiler debug
        dump($employees);

        return $this->render('EcommerceBundle:Default:index.html.twig', [
            'id' => $id,
            'employees' => $employees,
            'hobby' => $hobby
        ]);
    }

    public function planningAction()
    {
        return $this->render('EcommerceBundle:Default:planning.html.twig');
    }

    public function contactAction()
    {
        return $this->render('EcommerceBundle:Default:contact.html.twig');
    }

    public function suppliersAction()
    {
        return $this->render('EcommerceBundle:Default:suppliers.html.twig', ['suppliers' => $this->suppliers]);
    }

    public function clientsAction()
    {
        return $this->render('EcommerceBundle:Default:clients.html.twig');
    }

    public function aboutAction()
    {
        return new JsonResponse(array('name' => 'Yovan Juggoo'));
    }

    public function supplierAction($id) {
        foreach ($this->suppliers as $supplier) {
            if($id == $supplier['id']) {
                return new JsonResponse($supplier, 200);
            }
        }
        return new JsonResponse(['Error' => 'Not found'], 400);
    }

}
