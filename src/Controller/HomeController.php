<?php

namespace App\Controller;

use App\Entity\Course;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        $courses = $this->getDoctrine()->getRepository(Course::class)->findBy([]);
        $user = $this->getUser();
        return $this->render('home/index.html.twig', [
            'courses' => $courses,
        ]);
    }
}
