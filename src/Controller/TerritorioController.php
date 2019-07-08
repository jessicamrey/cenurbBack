<?php

namespace App\Controller;


use App\Entity\TipoPropiedad;
use App\Entity\TipoEdificio;
use App\Entity\TipoTerritorio;

use App\Entity\Territorio;
use App\Entity\LocNidosNoCol;
use App\Entity\OtrasEspecies;
use App\Entity\VisitasTerritorio;
use App\Entity\VisitaTerritorioImages;
use App\Entity\VisitasColonia;
use App\Entity\Temporada;
use App\Entity\Emplazamiento;
use App\Entity\ObservacionesTerritorio;
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
		//obtenemos el usuario logeado
		$user=$this->getUser();
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$newTerritorio= new Territorio();
		
		
		if ( isset($params["especie"])){
		
		//con el campo especie, comprobamos que nos han pasado el id correctamente.
		
		//$existeEspecie=Util::existeEspecie($params["especie"]);
		}else{
			throw new InvalidArgumentException("No se ha especificado la especie");
		}
		
		if ($params && count($params) /*&& $existeUsuario  && $existeEspecie*/){
			
			
			$newTerritorio->setUsuario($user->getIdUsu());
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
				$locNidos->setUsuario($user->getIdUsu());
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
		//obtenemos el usuario logeado
		$user=$this->getUser();
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');

		$territorio=$this->getDoctrine()->getRepository(Territorio::class)->find($id);
		if ($territorio!=null){
			$locNidos= $territorio->getLocNidos();
				$locNidos->setUsuario($user->getIdUsu());
				$locNidos->setFachada($params["fachada"]);
				$locNidos->setTrasera($params["trasera"]);
				$locNidos->setLateralDerecho($params["latDer"]);
				$locNidos->setLateralIzquierdo($params["latIzq"]);
				$locNidos->setPatioInterior($params["patio"]);
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
				if (isset($params["huso"])){
						$locNidos->setHuso($params["huso"]);
					}
				
				$entityManager->persist($locNidos);
				$entityManager->flush();
				$entityManager->close();
				
				return new JsonResponse(
						$this->normalizer->normalize(
								$territorio, 'json', ['groups' => ['territorio']]
						)
				);
				
		}else{
			throw new NotFoundHttpException();
		}
	}
	
	

	//TODO: Persistir esta entidad
	public function getFavoritos(Request $request, $id){
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$sql = "
		SELECT
			t.`territorio`
		FROM
			cenurb.FavoritosTerr t
		WHERE
			t.usuario = :id
		";
		
		$stmt = $entityManager->getConnection()->prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_STR);
		
		$stmt->execute();
		$array= new ArrayCollection();
		$array=$stmt->fetchAll();
		
		$territorios=array();
		//ahora recuperamos los datos de todos los territorios marcados como favoritos
		foreach ($array as &$group) {
			$territorio=$this->getDoctrine()->getRepository(Territorio::class)->find($group['territorio']);
			array_push($territorios, $territorio);
		}
		
		return new JsonResponse(
			$this->normalizer->normalize(
				$territorios, 'json', ['groups' => ['territorio']]
		));
	}
	
	/*public function getVisits(Request $request, $id){
		
		//Creamos este método para comprobar el usuario, sino se podría utilizar el API default
		
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		
		$colonia = $request->query->get("colonia");
		
		$colonia ? $visits=$this->getDoctrine()->getRepository(VisitasColonia::class)->findBy(['usuario'=>$id, 'colonia'=>$colonia]) :
					$visits=$this->getDoctrine()->getRepository(VisitasColonia::class)->findBy(['usuario'=>$id]);
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$visits, 'json', ['groups' => ['visita']]
				));
	}*/
	
	//TODO: Persisitir esta entidad
	public function removeFavorito(Request $request, $id){
		$id=intval($id);
		$usuario = $request->query->get("usuario");
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		//existe colonia= buscar colonia
		//if existeColonia and existeUsuario->seguir
	
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
	
		$sql = "
		DELETE FROM
			cenurb.FavoritosTerr
		WHERE
			usuario = :usuario
			AND
			territorio = :terr
		";
	
		$stmt = $entityManager->getConnection()->prepare($sql);
		$stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
		$stmt->bindParam(':terr', $id, PDO::PARAM_INT);
	
		$stmt->execute();
	
	
		return new Response(
				'Se ha borrado el favorito',
				Response::HTTP_OK,
				array('content-type' => 'text/html')
		);
	
	
	}
	
	public function newVisit(Request $request, $id){
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
	
		$territorio=$this->getDoctrine()->getRepository(Territorio::class)->find($id);
		$params=json_decode($request->getContent(), true);
		//obtenemos el usuario logeado
		$user=$this->getUser();
		$entityManager = $this->getDoctrine()->getManager('default');
		
		if ($territorio!=null){
			$visita=new VisitasTerritorio();
			$visita->setUsuario($user->getIdUsu());
			$visita->setFecha(new DateTime($params["fecha"]));
			$visita->setHora(new DateTime($params["hora"]));
			
			if (isset($params["huso"])){
				$visita->setHuso($params["huso"]);
			}
			$visita->setLat($params["lat"]);
			$visita->setLon($params["lon"]);
			if (isset($params["observacionId"])){
				$observacion=$this->getDoctrine()->getRepository(ObservacionesTerritorio::class)->find($params["observacionId"]);
				if ($observacion!=null){
					$visita->setObservaciones($observacion);
				}else{
					throw new NotFoundHttpException();
				}
			
			}
			
			$visita->setTerritorio($territorio);
			
			$entityManager->persist($visita);
			$entityManager->flush();
			$entityManager->close();
			
		}
	
		return new JsonResponse(
				$this->normalizer->normalize(
						$visita, 'json', ['groups' => ['visitaTerr']]
				));
	}
	
	
	public function editVisit(Request $request, $id){
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
	
		
		$params=json_decode($request->getContent(), true);
		//obtenemos el usuario logeado
		$user=$this->getUser();
		
		//Buscamos solo la visita si pertenece al usuario
		$visita=$this->getDoctrine()->getRepository(VisitasTerritorio::class)->findOneBy([
                                                                                            'id'=>$id,
                                                                                            'usuario'=>$user->getIdUsu()]);
		
		$entityManager = $this->getDoctrine()->getManager('default');
	
		if ($visita!=null){
	
				
			if (isset($params["huso"])){
				$visita->setHuso($params["huso"]);
			}
			if (isset($params["lat"])){
				$visita->setLat($params["lat"]);
			}
			if (isset($params["lon"])){
				$visita->setLon($params["lon"]);
			}
			
			
			if (isset($params["observacionId"])){
				$observacion=$this->getDoctrine()->getRepository(ObservacionesTerritorio::class)->find($params["observacionId"]);
				if ($observacion!=null){
					$visita->setObservaciones($observacion);
				}else{
					throw new NotFoundHttpException();
				}
					
			}
								
			$entityManager->persist($visita);
			$entityManager->flush();
			$entityManager->close();
				
		}
	
		return new JsonResponse(
				$this->normalizer->normalize(
						$visita, 'json', ['groups' => ['visitaTerr']]
				));
	}
	
	//TODO: Crear metodo borrar entidad que borre solo si pertenece al usuario
	
	//TODO: Persistir esta entidad
	public function newFavorito(Request $request){
		$params=json_decode($request->getContent(), true);
		//$existeUsuario=Util::existeUsuario($params["usuario"]);
		//existe territorio= buscar territorio
		//if existeTerritorio and existeUsuario->seguir
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
	
		$sql = "
		INSERT INTO
			cenurb.FavoritosTerr
			(territorio, usuario)
		VALUES
			(:territorio, :usuario)
		";
	
		$stmt = $entityManager->getConnection()->prepare($sql);
		$stmt->bindParam(':usuario', $params["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(':territorio', $params["territorio"], PDO::PARAM_INT);
	
		$stmt->execute();
		
	
		return new Response(
				    'Se ha guardado el favorito',
				    Response::HTTP_OK,
				    array('content-type' => 'text/html')
				);
	}
	
	//-------------------ESTADISTICAS-------------------------------
	
	
	public function estadisticasAnno(Request $request, $id){
		$anno = $request->query->get("temporada");
		$stats=$this->getDoctrine()->getRepository(Territorio::class)->statAnno($id, $anno);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasCcaa(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$stats=$this->getDoctrine()->getRepository(Territorio::class)->statCcaa($id, $anno, $ccaa);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasProvincia(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$prov = $request->query->get("provincia");
		$stats=$this->getDoctrine()->getRepository(Territorio::class)->statProvincia($id, $anno, $ccaa, $prov);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasGeneral(Request $request){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$provincia = $request->query->get("provincia");
		$especie = $request->query->get("especie");
		$tipo= $request->query->get("tipo");
		
		$temporada=$this->getDoctrine()->getRepository(Temporada::class)->findBy(['anno'=>$anno]);
		
		
		
		$stats=$this->getDoctrine()->getRepository(Territorio::class)->stats($temporada, $ccaa, $provincia, $especie, $tipo);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function getTemporadas(Request $request){
		$temporadas=$this->getDoctrine()->getRepository(Temporada::class)->findAll();
		return new JsonResponse(
				$this->normalizer->normalize(
						$temporadas, 'json', []
				));
	}
	
	
	//---------------------FUNCIONES DE SUBIDA Y ELIMINADO DE IMAGENES POR VISITAS------------------------------------
	
	
	
	
	
	public function uploadImageAction(Request $request, $id)
	{
		$uploadedFiles = $request->files->get('file');
	
		$visita=$this->getDoctrine()->getRepository(VisitasTerritorio::class)->find($id);
	
		for($i=0;$i<count($uploadedFiles); $i++){
				
			$visitaImage=new VisitaTerritorioImages();
			if (file_exists($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITATERR'). $id .'/' .$visitaImage->getImage()) &&
					is_writable($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITATERR'). $id .'/' .$visitaImage->getImage()))
			{
				unlink($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITATERR'). $id .'/' .$visitaImage->getImage());
			}
			$visitaImage->setImageFile($uploadedFiles[$i]);
	
			$visita->addVisitaTerritorioImage($visitaImage);
		}
		$em = $this->getDoctrine()->getManager();
	
		$em->persist($visita);
		$em->flush();
		return new JsonResponse(
				$this->normalizer->normalize(
						$visita, 'json', ['visita']
				)
		);
	}
	
	public function removeImageAction(Request $request, $id, $idImg) {
	
		$fileName = $request->query->get("fileName");
	
		$visita=$this->getDoctrine()->getRepository(VisitasTerritorio::class)->find($id);
	
		if (file_exists($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITATERR'). $id .'/' .$fileName) &&
				is_writable($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITATERR'). $id .'/' .$fileName))
		{
			unlink($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITARERR'). $id .'/' .$fileName);
		}
		$visitaImage=$this->getDoctrine()->getRepository(VisitaTerritorioImages::class)->find($idImg);
		if ($visitaImage!=null){
			$em = $this->getDoctrine()->getManager();
			$em->remove($visitaImage);
			$em->flush();
			return new JsonResponse(
					$this->normalizer->normalize(
							$visita, 'json', ['visita']
					)
			);
		}
		throw new NotFoundHttpException();
	}
	
	//-------------------ESTADISTICAS POR TERRITORIO-------------------------------
	

	
	/*public function estadisticasTerr(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$prov = $request->query->get("provincia");
		$mun = $request->query->get("municipio");
		$temporada=$this->getDoctrine()->getRepository(Temporada::class)->findBy(['anno'=>$anno]);
		$stats=$this->getDoctrine()->getRepository(VisitasTerritorio::class)->stats($id, $temporada, $ccaa, $prov, $mun);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}*/
	
	
	public function getTerritoriosCercanos(Request $request){
		$lat = $request->query->get("lat");
		$lon = $request->query->get("lon");
		$rad = $request->query->get("rad");
		$especie = $request->query->get("especie");
		$territorios = new ArrayCollection();
		if($rad != NULL)
		{
		
			$territorios= $this->getDoctrine()->getRepository(Territorio::class)->findByRadius($rad, $lat, $lon, $especie);
		}
		
		return new JsonResponse(
				$this->normalizer->normalize(
						count($territorios), 'json', []
				));
		
	}
	
}
