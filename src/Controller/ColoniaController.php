<?php

namespace App\Controller;


use App\Entity\TipoPropiedad;
use App\Entity\TipoEdificio;

use App\Entity\Colonia;
use App\Entity\LocNidosCol;
use App\Entity\FavoritosCol;
use App\Entity\OtrasEspecies;
use App\Entity\VisitasColonia;
use App\Entity\VisitaColoniaImages;
use App\Entity\Temporada;
use App\Controller\SeoApisController;
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
		//obtenemos el usuario logeado
		$user=$this->getUser();
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$newColonia= new Colonia();
		
		
		if (isset($params["especie"])){
		
		
		//con el campo especie, comprobamos que nos han pasado el id correctamente.
		
		$existeEspecie=SeoApisController::existeEspecie($params["especie"]);
		}else{
			throw new InvalidArgumentException("No se ha especificado la especie");
		}
		
		if ($params && count($params) && $existeEspecie){
			
			
			$newColonia->setUsuario($user->getIdUsu());
			$newColonia->setEspecie($params["especie"]);
			
			$newColonia->setVacio(false);
			
			if (isset($params["codColonia"])){
				$newColonia->setCodColonia($params["codColonia"]);
			}
			
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
			
			if (isset($params["anno"])){
				$temporada=$this->getDoctrine()->getRepository(Temporada::class)->findOneBy(['anno'=>$params["anno"]]);
				if ($temporada){
					$newColonia->setTemporada($temporada);
				}else{
					throw new InvalidArgumentException("Temporada incorrecta");
				}
				
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
			
			
				$locNidos= new LocNidosCol();
				$locNidos->setUsuario($user->getIdUsu());
				$newColonia->setLocNidos($locNidos);
			
			
			
			//En este punto ya podemos persistir la colonia, ya que otras especies es opcional e irrelevante para la creacion
			
			$entityManager->persist($newColonia);
			$entityManager->flush();
			
		
			
		}
		
		$entityManager->close();
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$newColonia, 'json', ['groups' => ['colonia']]
				)
		);

	
	}
	
	public function completaNidos(Request $request, $id)
	{
		
		//obtenemos los parámetros del cuerpo de la peticion
		$params=json_decode($request->getContent(), true);
		$user=$this->getUser();
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$colonia=$this->getDoctrine()->getRepository(Colonia::class)->find($id);
		if ($colonia!=null){
			$locNidos= $colonia->getLocNidos();
				$locNidos->setUsuario($user->getIdUsu());
				$locNidos->setFachada($params["fachada"]);
				$locNidos->setTrasera($params["trasera"]);
				$locNidos->setLateralDerecho($params["latDer"]);
				$locNidos->setLateralIzquierdo($params["latIzq"]);
				$locNidos->setPatioInferior($params["patio"]);
				$locNidos->setLat($params["lat"]);
				$locNidos->setLon($params["lon"]);
				
				if (isset($params["huso"])){
						$locNidos->setHuso($params["huso"]);
					}
				
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
	
	
	public function completaEspecies(Request $request, $id)
	{
	
		//obtenemos los parámetros del cuerpo de la peticion
		$params=json_decode($request->getContent(), true);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		//Comprobamos que exista la especie indicada
		$existeEspecie=SeoApisController::existeEspecie($params["especie"]);
		
		$colonia=$this->getDoctrine()->getRepository(Colonia::class)->find($id);
		
		if ($colonia!=null && $existeEspecie){
			
			
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
		
		$user=$this->getUser();
		
		$colonias=$user->getColoniasFavoritas();
		
		return new JsonResponse(
			$this->normalizer->normalize(
				$colonias, 'json', ['groups' => ['colonia']]
		));
	}
	
	public function getVisits(Request $request, $id){
		
		//Creamos este método para comprobar el usuario, sino se podría utilizar el API default
		
		//TODO: modificar ruta pues id ya no sera necesario
		$colonia = $request->query->get("colonia");
		$user=$this->getUser();
		$colonia ? $visits=$this->getDoctrine()->getRepository(VisitasColonia::class)->findBy(['usuario'=>$user->getIdUsu(), 'colonia'=>$colonia]) :
					$visits=$this->getDoctrine()->getRepository(VisitasColonia::class)->findBy(['usuario'=>$user->getIdUsu()]);
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$visits, 'json', ['groups' => ['visita']]
				));
	}
	
	
	public function newVisit(Request $request, $id){
		$colonia=$this->getDoctrine()->getRepository(Colonia::class)->find($id);
		$params=json_decode($request->getContent(), true);
		$user=$this->getUser();
		$entityManager = $this->getDoctrine()->getManager('default');
		$temporada=$this->getDoctrine()->getRepository(Temporada::class)->findOneBy(['anno'=>$params["anno"]]);
		if ($colonia!=null){
			$visita=new VisitasColonia();
			$visita->setUsuario($user->getIdUsu());
			$visita->setNombreUsuario($params["nombreUsuario"]);
			$visita->setNumVisita($params["numVisita"]);
			$visita->setNumNidos($params["numNidos"]);
			$visita->setNumNidosExito($params["numNidosExito"]);
			$visita->setNumNidosOcupados($params["numNidosOcupados"]);
			$visita->setNumNidosVacios($params["numNidosVacios"]);
			$visita->setFecha(new DateTime($params["fecha"]));
			$visita->setTemporada($temporada);
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
		$user=$this->getUser();
		
		$colonia=$this->getDoctrine()->getRepository(Colonia::class)->find($params["colonia"]);
		
		
		if ($colonia!=null){
			//abrimos nuestro manager
			$entityManager = $this->getDoctrine()->getManager('default');
			
			$favEntity=new FavoritosCol();
			$favEntity->setColonia($colonia);
			$favEntity->setUsuario($user);
			
			$entityManager->persist($favEntity);
			$entityManager->flush();
			$entityManager->close();
			
			return new Response(
					    'Se ha guardado el favorito',
					    Response::HTTP_OK,
					    array('content-type' => 'text/html')
					);
		}else{
			throw new NotFoundHttpException();
		}
		
		
	}
	
	public function removeFavorito(Request $request, $id){
		
		$id=intval($id);
		$user =$this->getUser();		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$fav=$this->getDoctrine()->getRepository(FavoritosCol::class)->find($id);
		$entityManager->remove($fav);
		$entityManager->flush();
		$entityManager->close();

		return new Response(
				'Se ha borrado el favorito',
				Response::HTTP_OK,
				array('content-type' => 'text/html')
		);
		
		
	}
	
	
	
	//-------------------ESTADISTICAS-------------------------------
	
	
	public function estadisticasAnno(Request $request, $id){
		$anno = $request->query->get("temporada");
		$stats=$this->getDoctrine()->getRepository(Colonia::class)->statAnno($id, $anno);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasCcaa(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$stats=$this->getDoctrine()->getRepository(Colonia::class)->statCcaa($id, $anno, $ccaa);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasProvincia(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$prov = $request->query->get("provincia");
		$stats=$this->getDoctrine()->getRepository(Colonia::class)->statProvincia($id, $anno, $ccaa, $prov);
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
	
		$temporada=$this->getDoctrine()->getRepository(Temporada::class)->findBy(['anno'=>$anno]);
	
	
		$stats=$this->getDoctrine()->getRepository(Colonia::class)->stats($temporada, $ccaa, $provincia, $especie);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	//-------------------ESTADISTICAS POR COLONIA-------------------------------
	
	public function estadisticasAnnoCol(Request $request, $id){
		$anno = $request->query->get("temporada");
		$stats=$this->getDoctrine()->getRepository(VisitasColonia::class)->statAnno($id, $anno);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasCcaaCol(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$stats=$this->getDoctrine()->getRepository(VisitasColonia::class)->statCcaa($id, $anno, $ccaa);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasProvinciaCol(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$prov = $request->query->get("provincia");
		$stats=$this->getDoctrine()->getRepository(VisitasColonia::class)->statProvincia($id, $anno, $ccaa, $prov);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasMunicipioCol(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$prov = $request->query->get("provincia");
		$mun = $request->query->get("municipio");
		$stats=$this->getDoctrine()->getRepository(VisitasColonia::class)->statMunicipio($id, $anno, $ccaa, $prov, $mun);
		return new JsonResponse(
				$this->normalizer->normalize(
						$stats, 'json', []
				));
	}
	
	public function estadisticasTipoEdificioCol(Request $request, $id){
		$anno = $request->query->get("temporada");
		$ccaa = $request->query->get("ccaa");
		$prov = $request->query->get("provincia");
		$mun = $request->query->get("municipio");
		$tipo= $request->query->get("tipoEdificio");
		
		$stats=$this->getDoctrine()->getRepository(VisitasColonia::class)->statTipoEdificio($id, $anno, $ccaa, $prov, $mun, $tipo);
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
	
		$visita=$this->getDoctrine()->getRepository(VisitasColonia::class)->find($id);
		
		for($i=0;$i<count($uploadedFiles); $i++){
			
			$visitaImage=new VisitaColoniaImages();
			if (file_exists($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITACOL'). $id .'/' .$visitaImage->getImage()) &&
					is_writable($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITACOL'). $id .'/' .$visitaImage->getImage()))
			{
				unlink($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITACOL'). $id .'/' .$visitaImage->getImage());
			}
			$visitaImage->setImageFile($uploadedFiles[$i]);
	
			$visita->addVisitaColoniaImage($visitaImage);
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

		$visita=$this->getDoctrine()->getRepository(VisitasColonia::class)->find($id);
	
		if (file_exists($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITACOL'). $id .'/' .$fileName) &&
				is_writable($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITACOL'). $id .'/' .$fileName))
		{
			unlink($this->get('kernel')->getRootDir().'/public/'.getEnv('APP_IMAGE_VISITACOL'). $id .'/' .$fileName);
		}
		$visitaImage=$this->getDoctrine()->getRepository(VisitaColoniaImages::class)->find($idImg);
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
	
	
}
