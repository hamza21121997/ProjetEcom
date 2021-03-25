<?php

namespace App\Controller;

use App\Entity\Souscategorie;
use App\Form\SouscategorieType;
use App\Repository\SouscategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/souscategorie")
 */
class SouscategorieController extends AbstractController
{
    /**
     * @Route("/", name="souscategorie_index", methods={"GET"})
     */
    public function index(SouscategorieRepository $souscategorieRepository): Response
    {
        return $this->render('souscategorie/index.html.twig', [
            'souscategories' => $souscategorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="souscategorie_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $souscategorie = new Souscategorie();
        $form = $this->createForm(SouscategorieType::class, $souscategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($souscategorie);
            $entityManager->flush();

            return $this->redirectToRoute('souscategorie_index');
        }

        return $this->render('souscategorie/new.html.twig', [
            'souscategorie' => $souscategorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="souscategorie_show", methods={"GET"})
     */
    public function show(Souscategorie $souscategorie): Response
    {
        return $this->render('souscategorie/show.html.twig', [
            'souscategorie' => $souscategorie,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="souscategorie_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Souscategorie $souscategorie): Response
    {
        $form = $this->createForm(SouscategorieType::class, $souscategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('souscategorie_index');
        }

        return $this->render('souscategorie/edit.html.twig', [
            'souscategorie' => $souscategorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="souscategorie_delete", methods={"POST"})
     */
    public function delete(Request $request, Souscategorie $souscategorie): Response
    {
        if ($this->isCsrfTokenValid('delete'.$souscategorie->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($souscategorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('souscategorie_index');
    }
}
