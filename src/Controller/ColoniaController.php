<?php

namespace App\Controller;


use App\Entity\TipoPropiedad;
use App\Entity\TipoEdificio;

use App\Entity\Colonia;
use App\Entity\LocNidosCol;
use App\Entity\OtrasEspecies;
use App\Util\Util;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\OptionsResolver\Exception\InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use PDO;

class ColoniaController extends Controller{
	
	/**
	 * @var NormalizerInterface
	 */
	private $normalizer;
	
	/**
	 * @param NormalizerInterface $normalizer
	 */
	public function __construct(
			NormalizerInterface $normalizer
	) {
		$this->normalizer = $normalizer;
	}
	
	public function newColonia(Request $request)
	{
		
		//obtenemos los parámetros del cuerpo de la peticion
		$params=json_decode($request->getContent(), true);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$newColonia= new Colonia();
		
		
		if (isset($params["usuario"]) && isset($params["especie"])){
		
		//con el campo usuario, comprobamos primero que exista en la base de datos.
		
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		
		//con el campo especie, comprobamos que nos han pasado el id correctamente.
		
		//$existeEspecie=Util::existeEspecie($params["especie"]);
		}else{
			throw new InvalidArgumentException("No se ha especificado el usuaio o la especie");
		}
		
		if ($params && count($params) /*&& $existeUsuario  && $existeEspecie*/){
			
			
			$newColonia->setUsuario("usuario");
			$newColonia->setEspecie($params["especie"]);
			$newColonia->setVacio(false);
			
			if (isset($params["nombre"])){
				$newColonia->setNombre($params["nombre"]);
			}
			
			if (isset($params["nombreCentro"])){
				$newColonia->setNombreCentro($params["nombreCentro"]);
			}
			
			if (isset($params["barrio"])){
				$newColonia->setBarrio($params["barrio"]);
			}
			
			if (isset($params["calleNumPiso"])){
				$newColonia->setCalleNumPiso($params["calleNumPiso"]);
			}
			
			if (isset($params["tipoPropiedadId"])){
				$propiedad=$this->getDoctrine()->getRepository(TipoPropiedad::class)->find($params["tipoPropiedadId"]);
				if ($propiedad!=null){
					$newColonia->setTipoPropiedad($propiedad);
				}else{
					throw new NotFoundHttpException();
				}
				
			}
			
			if (isset($params["tipoEdificioId"])){
				$edificio=$this->getDoctrine()->getRepository(TipoEdificio::class)->find($params["tipoEdificioId"]);
				if ($edificio!=null){
					$newColonia->setTipoEdificio($edificio);
				}else{
					throw new NotFoundHttpException();
				}
				
			}
			
			if (isset($params["temporada"])){
				$newColonia->setTemporada($params["temporada"]);
			}
			
			if (isset($params["ccaa"])){
				$newColonia->setCcaa($params["ccaa"]);
			}
			
			if (isset($params["provincia"])){
				$newColonia->setProvincia($params["provincia"]);
			}
			
			if (isset($params["municipio"])){
				$newColonia->setMunicipio($params["municipio"]);
			}
			
			if (isset($params["locNidos"])){
				$locNidos= new LocNidosCol();
				$locNidos->setUsuario($params["usuario"]);
				$locNidos->setFachada($params["locNidos"]["fachada"]);
				$locNidos->setTrasera($params["locNidos"]["trasera"]);
				$locNidos->setLateralDerecho($params["locNidos"]["latDer"]);
				$locNidos->setLateralIzquierdo($params["locNidos"]["latIzq"]);
				
				$newColonia->setLocNidos($locNidos);
			}else{
				$locNidos= new LocNidosCol();
				$locNidos->setUsuario($params["usuario"]);
				$newColonia->setLocNidos($locNidos);
			}
			
			
			//En este punto ya podemos persistir la colonia, ya que otras especies es opcional e irrelevante para la creacion
			
			$entityManager->persist($newColonia);
			$entityManager->flush();
			
			/*Formato de otras especies en el json:
			 * otrasEspecies:{
			 * 		"1": "510",
			 * 		"2": "200"
			 * }
			 */
			
			if (isset($params["otrasEspecies"])){
				//Comprobamos que exista cada id en la lista
				foreach($params["otrasEspecies"] as $clave=> $valor){
					if (!Util::existeEspecie($valor)){
						throw new InvalidArgumentException("La especie ". $valor . " no es correcta");
					}else{
						$nuevaEspecie= new OtrasEspecies();
						$nuevaEspecie->setColonia($newColonia);
						$nuevaEspecie->setEspecie($valor);
						$entityManager->persist($nuevaEspecie);
						$entityManager->flush();
						
					}
				}
			}
			
		}
		
		$entityManager->close();
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$newColonia, 'json', ['colonia']
				)
		);

	
	}
	
	public function completaNidos(Request $request, $id)
	{
		
		//obtenemos los parámetros del cuerpo de la peticion
		$params=json_decode($request->getContent(), true);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$colonia=$this->getDoctrine()->getRepository(Colonia::class)->find($id);
		if ($colonia!=null){
			$locNidos= $colonia->getLocNidos();
				$locNidos->setUsuario($params["usuario"]);
				$locNidos->setFachada($params["fachada"]);
				$locNidos->setTrasera($params["trasera"]);
				$locNidos->setLateralDerecho($params["latDer"]);
				$locNidos->setLateralIzquierdo($params["latIzq"]);
				$locNidos->setPatioInferior($params["patio"]);
				
				//FALTAN LAS COORDENADAS
				
				$entityManager->persist($locNidos);
				$entityManager->flush();
				$entityManager->close();
				
				return new JsonResponse(
						$this->normalizer->normalize(
								$colonia, 'json', ['colonia']
						)
				);
				
		}else{
			throw new NotFoundHttpException();
		}
	}
	
	
	public function completaEspecies(Request $request, $id)
	{
	
		//obtenemos los parámetros del cuerpo de la peticion
		$params=json_decode($request->getContent(), true);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$colonia=$this->getDoctrine()->getRepository(Colonia::class)->find($id);
		
		if ($colonia!=null){
			
			
				$otrasEspecies= new OtrasEspecies();
				$otrasEspecies->setColonia($colonia);
				$otrasEspecies->setEspecie($params["especie"]);
				$entityManager->persist($otrasEspecies);
				
			
			$entityManager->flush();
			$entityManager->close();
			
			return new JsonResponse(
					$this->normalizer->normalize(
							$colonia, 'json', ['colonia']
					)
			);
		
		}else{
			throw new NotFoundHttpException();
		}
	}
	
}