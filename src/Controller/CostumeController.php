<?php

namespace App\Controller;

use App\Entity\Costume;
use App\Form\CostumeType;
use App\Form\ModelType;
use App\Repository\CostumeRepository;
use App\Repository\ModelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/costume")
 */
class CostumeController extends AbstractController
{
    /**
     * @Route("/", name="costume_index", methods={"GET"})
     */
    public function index(CostumeRepository $costumeRepository): Response
    {
        return $this->render('costume/index.html.twig', [
            'costumes' => $costumeRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{nummodel}/add", name="costume_add", methods={"GET","POST"})
     * @param CostumeRepository $costumeRepository
     * @param ModelRepository $modelRepository
     * @param $nummodel
     * @return Response
     */

    public function add(Request $request, CostumeRepository $costumeRepository,ModelRepository $modelRepository, $nummodel): Response
    {
        $model = $modelRepository->find($nummodel);
        $quantity = $model->getQuantity();
        $date = date('m/d/Y h:i:s a', time());

        if($request->get('addcostume') == 'Add'){
            $costume = new Costume();
            $sizerows = $request->get('sizerows');

            $entityManager = $this->getDoctrine()->getManager();

            foreach(explode("\n", $sizerows) as $sizerow) {
                $sizerow = preg_replace("/[^a-zA-Z 0-9]+/", "", $sizerow );
                $costume = new Costume($sizerow);
                $costume->setSize($sizerow);
                $costume->setModels($model);
                $entityManager->persist($costume);

                echo 'Saved with size '.$sizerow;

            }
            $entityManager->flush();
            return $this->redirectToRoute('costume_index');


        }

        return $this->render('costume/add.html.twig', [
            'model' => $model,
            'quantity' => $quantity,
        ]);


    }



    /**
     * @Route("/new", name="costume_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $costume = new Costume();
        $form = $this->createForm(CostumeType::class, $costume);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($costume);
            $entityManager->flush();

            return $this->redirectToRoute('costume_index');
        }

        return $this->render('costume/new.html.twig', [
            'costume' => $costume,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="costume_show", methods={"GET"})
     */
    public function show(Costume $costume): Response
    {
        return $this->render('costume/show.html.twig', [
            'costume' => $costume,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="costume_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Costume $costume): Response
    {
        $form = $this->createForm(CostumeType::class, $costume);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('costume_index');
        }

        return $this->render('costume/edit.html.twig', [
            'costume' => $costume,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="costume_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Costume $costume): Response
    {
        if ($this->isCsrfTokenValid('delete'.$costume->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($costume);
            $entityManager->flush();
        }

        return $this->redirectToRoute('costume_index');
    }
}
