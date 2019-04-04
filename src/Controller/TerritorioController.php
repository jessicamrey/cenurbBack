<?php

namespace App\Controller;


use App\Entity\TipoPropiedad;
use App\Entity\TipoEdificio;
use App\Entity\TipoTerritorio;

use App\Entity\Territorio;
use App\Entity\LocNidosNoCol;
use App\Entity\OtrasEspecies;
use App\Entity\VisitasColonia;
use App\Entity\Temporada;
use App\Util\Util;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\OptionsResolver\Exception\InvalidArgumentException;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use PDO;

class TerritorioController extends Controller{
	
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
	
	public function newTerritorio(Request $request)
	{
		
		//obtenemos los parámetros del cuerpo de la peticion
		$params=json_decode($request->getContent(), true);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$newTerritorio= new Territorio();
		
		
		if (isset($params["usuario"]) && isset($params["especie"])){
		
		//con el campo usuario, comprobamos primero que exista en la base de datos.
		
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		
		//con el campo especie, comprobamos que nos han pasado el id correctamente.
		
		//$existeEspecie=Util::existeEspecie($params["especie"]);
		}else{
			throw new InvalidArgumentException("No se ha especificado el usuaio o la especie");
		}
		
		if ($params && count($params) /*&& $existeUsuario  && $existeEspecie*/){
			
			
			$newTerritorio->setUsuario("usuario");
			$newTerritorio->setEspecie($params["especie"]);
			$newTerritorio->setVacio(false);
			
			if (isset($params["nombre"])){
				$newTerritorio->setNombre($params["nombre"]);
			}
			
			if (isset($params["nombreCentro"])){
				$newTerritorio->setNombreCentro($params["nombreCentro"]);
			}
			if (isset($params["amenazada"])){
				$newTerritorio->setAmenazada($params["amenazada"]);
			}
			if (isset($params["barrio"])){
				$newTerritorio->setBarrio($params["barrio"]);
			}
			
			if (isset($params["calleNumPiso"])){
				$newTerritorio->setCalleNumPiso($params["calleNumPiso"]);
			}
			
			if (isset($params["tipoPropiedadId"])){
				$propiedad=$this->getDoctrine()->getRepository(TipoPropiedad::class)->find($params["tipoPropiedadId"]);
				if ($propiedad!=null){
					$newTerritorio->setTipoPropiedad($propiedad);
				}else{
					throw new NotFoundHttpException();
				}
				
			}
			
			if (isset($params["tipoEdificioId"])){
				$edificio=$this->getDoctrine()->getRepository(TipoEdificio::class)->find($params["tipoEdificioId"]);
				if ($edificio!=null){
					$newTerritorio->setTipoEdificio($edificio);
				}else{
					throw new NotFoundHttpException();
				}
				
			}
			
			if (isset($params["tipoTerritorioId"])){
				$tipo=$this->getDoctrine()->getRepository(TipoTerritorio::class)->find($params["tipoTerritorioId"]);
				if ($tipo!=null){
					$newTerritorio->setTipo($tipo);
				}else{
					throw new NotFoundHttpException();
				}
			
			}
			
			if (isset($params["anno"])){
				$temporada=$this->getDoctrine()->getRepository(Temporada::class)->findOneBy(['anno'=>$params["anno"]]);
				if ($temporada){
					$newTerritorio->setTemporada($temporada);
				}else{
					throw new InvalidArgumentException("Temporada incorrecta");
				}
				
			}
			
			if (isset($params["ccaa"])){
				$newTerritorio->setCcaa($params["ccaa"]);
			}
			
			if (isset($params["provincia"])){
				$newTerritorio->setProvincia($params["provincia"]);
			}
			
			if (isset($params["municipio"])){
				$newTerritorio->setMunicipio($params["municipio"]);
			}
			
			
				$locNidos= new LocNidosNoCol();
				$locNidos->setUsuario($params["usuario"]);
				$newTerritorio->setLocNidos($locNidos);
			
			
			
			//En este punto ya podemos persistir el territorio
			
			$entityManager->persist($newTerritorio);
			$entityManager->flush();
			
		
			
		}
		
		$entityManager->close();
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$newTerritorio, 'json', ['groups' => ['territorio']]
				)
		);

	
	}
	
	public function completaNidos(Request $request, $id)
	{
		
		//obtenemos los parámetros del cuerpo de la peticion
		$params=json_decode($request->getContent(), true);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$territorio=$this->getDoctrine()->getRepository(Territorio::class)->find($id);
		if ($territorio!=null){
			$locNidos= $territorio->getLocNidos();
				$locNidos->setUsuario($params["usuario"]);
				$locNidos->setFachada($params["fachada"]);
				$locNidos->setTrasera($params["trasera"]);
				$locNidos->setLateralDerecho($params["latDer"]);
				$locNidos->setLateralIzquierdo($params["latIzq"]);
				$locNidos->setPatioInferior($params["patio"]);
				$locNidos->setNumPiso($params["numPiso"]);
				$locNidos->setLat($params["lat"]);
				$locNidos->setLon($params["lon"]);
				if (isset($params["emplazamientoId"])){
					$emplazamiento=$this->getDoctrine()->getRepository(Emplazamiento::class)->find($params["emplazamientoId"]);
					if ($emplazamiento!=null){
						$locNidos->setEmplazamiento($emplazamiento);
					}else{
						throw new NotFoundHttpException();
					}
						
				}
				//TODO: Set HUso horario
				
				$entityManager->persist($locNidos);
				$entityManager->flush();
				$entityManager->close();
				
				return new JsonResponse(
						$this->normalizer->normalize(
								$colonia, 'json', ['groups' => ['colonia']]
						)
				);
				
		}else{
			throw new NotFoundHttpException();
		}
	}
	
	
	/*public function completaEspecies(Request $request, $id)
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
							$colonia, 'json', ['groups' => ['colonia']]
					)
			);
		
		}else{
			throw new NotFoundHttpException();
		}
	}
	
	public function getColoniasCercanas(Request $request){
		$lat = $request->query->get("lat");
		$lon = $request->query->get("lon");
		$rad = $request->query->get("rad");
		$especie = $request->query->get("especie");
		$colonias = new ArrayCollection();
		if($rad != NULL)
		{
		
			$colonias= $this->getDoctrine()->getRepository(Colonia::class)->findByRadius($rad, $lat, $lon, $especie);
		}
		
		return new JsonResponse(
			$this->normalizer->normalize(
				$colonias, 'json', ['groups' => ['colonia']]
		));
	}
	
	public function getFavoritos(Request $request, $id){
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$sql = "
		SELECT
			t.`colonia`
		FROM
			cenurb.FavoritosCol t
		WHERE
			t.usuario = :id
		";
		
		$stmt = $entityManager->getConnection()->prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_STR);
		
		$stmt->execute();
		$array= new ArrayCollection();
		$array=$stmt->fetchAll();
		
		$colonias=array();
		//ahora recuperamos los datos de todas las colonias marcadas como favoritas
		foreach ($array as &$group) {
			$colonia=$this->getDoctrine()->getRepository(Colonia::class)->find($group['colonia']);
			array_push($colonias, $colonia);
		}
		
		return new JsonResponse(
			$this->normalizer->normalize(
				$colonias, 'json', ['groups' => ['colonia']]
		));
	}
	
	public function getVisits(Request $request, $id){
		
		//Creamos este método para comprobar el usuario, sino se podría utilizar el API default
		
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		
		$colonia = $request->query->get("colonia");
		
		$colonia ? $visits=$this->getDoctrine()->getRepository(VisitasColonia::class)->findBy(['usuario'=>$id, 'colonia'=>$colonia]) :
					$visits=$this->getDoctrine()->getRepository(VisitasColonia::class)->findBy(['usuario'=>$id]);
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$visits, 'json', ['groups' => ['visita']]
				));
	}
	
	
	public function newVisit(Request $request, $id){
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
	
		$colonia=$this->getDoctrine()->getRepository(Colonia::class)->find($id);
		$params=json_decode($request->getContent(), true);
		$entityManager = $this->getDoctrine()->getManager('default');
		
		if ($colonia!=null){
			$visita=new VisitasColonia();
			$visita->setUsuario($params["usuario"]);
			$visita->setNombreUsuario($params["nombreUsuario"]);
			$visita->setNumVisita($params["numVisita"]);
			$visita->setNumNidos($params["numNidos"]);
			$visita->setNumNidosExito($params["numNidosExito"]);
			$visita->setNumNidosOcupados($params["numNidosOcupados"]);
			$visita->setNumNidosVacios($params["numNidosVacios"]);
			$visita->setFecha(new DateTime($params["fecha"]));
			
			//TODO: Falta ver que hacemos con este campo
			$visita->setCompleto(false);
			$visita->setColonia($colonia);
			
			$entityManager->persist($visita);
			$entityManager->flush();
			$entityManager->close();
			
		}
	
		return new JsonResponse(
				$this->normalizer->normalize(
						$visita, 'json', ['groups' => ['visita']]
				));
	}
	
	//TODO: borrar y editar visita deberan comprobar el usuario
	public function newFavorito(Request $request){
		$params=json_decode($request->getContent(), true);
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		//existe colonia= buscar colonia
		//if existeColonia and existeUsuario->seguir
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
	
		$sql = "
		INSERT INTO
			cenurb.FavoritosCol
			(colonia, usuario)
		VALUES
			(:colonia, :usuario)
		";
	
		$stmt = $entityManager->getConnection()->prepare($sql);
		$stmt->bindParam(':usuario', $params["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(':colonia', $params["colonia"], PDO::PARAM_INT);
	
		$stmt->execute();
		
	
		return new Response(
				    'Se ha guardado el favorito',
				    Response::HTTP_OK,
				    array('content-type' => 'text/html')
				);
	}*/
	
	//-------------------ESTADISTICAS-------------------------------
	
	
	/*public function estadisticasAnno(Request $request, $id){
		$stats=$this->getDoctrine()->getRepository(Colonia::class)->statAnno($id);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasCcaa(Request $request, $id){
		$anno = $request->query->get("temporada");
		$temporada=$this->getDoctrine()->getRepository(Temporada::class)->findBy(['anno'=>$anno]);
		$stats=$this->getDoctrine()->getRepository(Colonia::class)->statCcaa($id, $temporada);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasProvincia(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$temporada=$this->getDoctrine()->getRepository(Temporada::class)->findBy(['anno'=>$anno]);
		$stats=$this->getDoctrine()->getRepository(Colonia::class)->statProvincia($id, $temporada, $ccaa);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}*/
	

	
	public function getTemporadas(Request $request){
		$temporadas=$this->getDoctrine()->getRepository(Temporada::class)->findAll();
		return new JsonResponse(
				$this->normalizer->normalize(
						$temporadas, 'json', []
				));
	}
	
}