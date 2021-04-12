<?php


namespace App\Controller;


use App\Entity\Campus;
use App\Entity\City;
use App\Entity\Inscription;
use App\Entity\Outing;
use App\Entity\OutingStatus;
use App\Entity\Place;
use App\Entity\User;
use App\Form\OutingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="Inscription/", name="inscripton_")
 */
class InscriptionController extends AbstractController
{

    /**
     * @Route(path="add", name="add")
     */
    public function add(Request $request, EntityManagerInterface $entityManager) {
        $inscription = new Inscription();
        $inscription->setStatus('Registered');
        $inscription->setDate(new \DateTime('now'));
        $inscription->setUser($entityManager->getRepository(User::class)->findOneBy(['username' => $this->getUser()->getUsername()]));
        $outing = $entityManager->getRepository(Outing::class)->find($_POST['outing']);
        $inscription->setOuting($outing);
//        $outing->setStartingTime(new \DateTime());
//        $outing->setMaxDateInscription(new \DateTime());
//        $outing->setNbOfRegistrations(0);
//
//        $form = $this->createForm(OutingType::class, $outing);
//
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $outing->setPlanner($this->getDoctrine()->getRepository(User::class)
//                ->findOneBy(['username' => $this->getUser()->getUsername()]));
//
//            if(isset($_POST['campus'])) {
//                $outing->setCampus($this->getDoctrine()->getRepository(Campus::class)
//                    ->find($_POST['campus']));
//            }
//
//            $outing->setStatus($this->getDoctrine()->getRepository(OutingStatus::class)
//                ->findOneBy(['description'=> 'Created']));
//
//            if(isset($_POST['place'])) {
//                $outing->setPlace($this->getDoctrine()->getRepository(Place::class)
//                    ->findOneBy(['id' => $_POST['place']]));
//            }
//
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($outing);
//            $entityManager->flush();
//
//            $this->addFlash('success', 'Outing successfully added !');
//
//            return $this->redirectToRoute('home_home');
//        }
//
//        return $this->render('outing/add.html.twig', ['outingForm' => $form->createView(),
//            'listCampus' => $this->getDoctrine()->getRepository(Campus::class)->findAll(),
//            'listCities' => $this->getDoctrine()->getRepository(City::class)->findAll(),
//            'listPlaces' => $this->getDoctrine()->getRepository(Place::class)->findAll()
//        ]);
    }

    /**
     * @Route(path="detail/{id}", requirements={"id" : "\d+"}, name="detail")
     */
    public function detail(Request $request, EntityManagerInterface $entityManager) {
//        $id = $request->get('id');
//
//        $outing = $entityManager->getRepository(Outing::class)->find($id);
//
//        if (is_null($outing)) {
//            return $this->render('error/outingNotFound.html.twig');
//        }
//
//        return $this->render('outing/detail.html.twig', ['outing' => $outing]);
    }
}