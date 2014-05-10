<?php

namespace Snork\MyFirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Snork\MyFirstBundle\Entity,
    Symfony\Component\HttpFoundation\Response,
    Symfony\Component\HttpFoundation\Request;

class MyFirstController extends Controller{

    public function indexAction($lang, $name) {
        switch(strtolower($lang)) {
            case 'en':
                return $this->render('SnorkMyFirstBundle:MyFirst:index_en.html.twig', ['name' => $name]);
            case 'ru':
                return $this->render('SnorkMyFirstBundle:MyFirst:index_ru.html.twig', ['name' => $name]);
            case 'redirect':
                return $this->redirect($this->generateUrl('redirectTest'));
            default:
                return $this->render('SnorkMyFirstBundle:MyFirst:index_ru.html.twig', ['name' => $name]);
        }
    }

    public function redAction() {
        return new Response('this is redirect!');
    }

    public function showBlogNoteAction($blogNoteId) {
        $blogNote = $this->getDoctrine()
            ->getRepository('SnorkMyFirstBundle:BlogNote')
            ->find($blogNoteId);
        if (!$blogNote) {
            return new Response('<html>fuck!</html>');
        }

        return $this->render('SnorkMyFirstBundle:MyFirst:blog.html.twig', ['blogNote' => $blogNote]);
    }

    public function createBlogNoteAction() {

        $blogNote = new Entity\BlogNote();
        $blogNote->setTitle('My first note');
        $blogNote->setAuthorId(1);
        $blogNote->setContent('This is my very first note in this blog!');
        $blogNote->setCreatedAt((new \DateTime())->format('H:i d-m-Y'));

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($blogNote);
        $entityManager->flush();

    }
}