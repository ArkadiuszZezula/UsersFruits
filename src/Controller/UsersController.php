<?php

namespace App\Controller;

use App\Entity\Fruits;
use App\Entity\Users;
use App\Entity\UsersFruits;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    /**
     * @Route("/", name="users_fruits")
     */
    public function list()
    {
        $fruits = $this->getDoctrine()->getRepository(Fruits::class)->findAll();
        $users = $this->getDoctrine()->getRepository(Users::class)->findAll();
        $users_fruits = $this->getDoctrine()->getRepository(UsersFruits::class)->findAll();

        $users_list = array();
        foreach ($users as $key => $row) {
            $users_list[$row->getId()] = $row->getName();
        }
        $fruits_list = array();
        foreach ($fruits as $key => $row) {
            $fruits_list[$row->getId()] = $row->getName();
        }
        $users_fruits_list = array();
        foreach ($users_fruits as $key => $row) {
            $users_fruits_list[$row->getId()] = array('id' => $row->getUsersId(), 'user' => $users_list[$row->getUsersId()], 'fruit' => $fruits_list[$row->getFruitsId()]);
        }

        $list = array();
        foreach ($users_fruits_list as $key => $row) {
            if (!array_key_exists($row['id'], $list)) {
                $list[$row['id']] = [];
                $list[$row['id']]['user'] = $row['user'];
                $list[$row['id']]['fruit'] = $row['fruit'];
            } else {
                $list[$row['id']]['fruit'] .= ' ,' . $row['fruit'];
            }
        }
        return $this->render('index.html.twig', array(
            'list' => $list,
        ));

        return new Response('');
    }
}
