<?php

namespace App\Controller;

use App\Entity\Sousscategorie;
use App\Form\SousscategorieType;
use App\Repository\SousscategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/sousscategorie")
 */
class SousscategorieController extends AbstractController
{
    /**
     * @Route("/", name="sousscategorie_index", methods={"GET"})
     */
    public function index(SousscategorieRepository $sousscategorieRepository): Response
    {
        return $this->render('sousscategorie/index.html.twig', [
            'sousscategories' => $sousscategorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="sousscategorie_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $sousscategorie = new Sousscategorie();
        $form = $this->createForm(SousscategorieType::class, $sousscategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sousscategorie);
            $entityManager->flush();

            return $this->redirectToRoute('sousscategorie_index');
        }

        return $this->render('sousscategorie/new.html.twig', [
            'sousscategorie' => $sousscategorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sousscategorie_show", methods={"GET"})
     */
    public function show(Sousscategorie $sousscategorie): Response
    {
        return $this->render('sousscategorie/show.html.twig', [
            'sousscategorie' => $sousscategorie,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sousscategorie_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Sousscategorie $sousscategorie): Response
    {
        $form = $this->createForm(SousscategorieType::class, $sousscategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sousscategorie_index');
        }

        return $this->render('sousscategorie/edit.html.twig', [
            'sousscategorie' => $sousscategorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sousscategorie_delete", methods={"POST"})
     */
    public function delete(Request $request, Sousscategorie $sousscategorie): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sousscategorie->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sousscategorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sousscategorie_index');
    }
}
