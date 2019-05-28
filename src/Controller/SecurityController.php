<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\SegUsu;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;
use PDO;

class SecurityController extends AbstractController
{
	/**
	 * @var UserPasswordEncoderInterface
	 */
	private $encoder;
	
	/**
	 * @var NormalizerInterface
	 */
	private $normalizer;
	
	public function __construct(
			UserPasswordEncoderInterface $encoder,
			NormalizerInterface $normalizer
	
	) {
		$this->encoder = $encoder;
		$this->normalizer = $normalizer;
	}
	
	
	public function register(Request $request)
	{
		$user = new SegUsu();
		//obtenemos los parámetros del cuerpo de la peticion
		$params=json_decode($request->getContent(), true);
		
		$plainPassword = $params["password"];
		$encoded = $this->encoder->encodePassword($user, $plainPassword);
	
		$user->setPassword($encoded);
		
		$user->setEmail($params["email"]);
		//En principio siempre tienen el rol ROLE_USER
		$user->setIdCoord(0);
		$user->setIdUsu($params["id_usu"]);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		$entityManager->persist($user);
		$entityManager->flush();
		
		$entityManager->close();
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$user->getId(), 'json'
				)
		);
		
	}
	
	public function login(AuthenticationUtils $authenticationUtils)
	{
		// get the login error if there is one
		$error = $authenticationUtils->getLastAuthenticationError();
	
		// last username entered by the user
		$lastUsername = $authenticationUtils->getLastUsername();
	
		return $this->render('security/login.html.twig', [
				'last_username' => $lastUsername,
				'error'         => $error,
				]);
	}
	
}
