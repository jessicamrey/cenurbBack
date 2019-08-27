<?php

namespace App\Controller;


use App\Entity\TipoPropiedad;
use App\Entity\TipoEdificio;
use App\Entity\TipoTerritorio;

use App\Entity\Territorio;
use App\Entity\LocNidosNoCol;
use App\Entity\FavoritosTerr;
use App\Entity\OtrasEspecies;
use App\Entity\VisitasTerritorio;
use App\Entity\VisitaTerritorioImages;
use App\Entity\VisitasColonia;
use App\Entity\Temporada;
use App\Entity\Emplazamiento;
use App\Entity\ObservacionesTerritorio;
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
	
	
/**
     * https://stackoverflow.com/questions/2820723/how-to-get-base-url-with-php
     * 
     * @return string
     */
    
	    function url(){
		return sprintf(
		    "%s://%s%s",
		    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		    $_SERVER['SERVER_NAME'],
		    '/public/files/nocol/'
		    );
	    }
	
	/*
	*	https://www.php.net/manual/es/function.scandir.php
	*/
	public function getDocs(Request $request){
		$ficheros=scandir('../public/files/nocol');
		
		foreach ($ficheros as &$fichero) {
		    $fichero = TerritorioController::url() . $fichero ;
		}
		
		
		return new JSONResponse(
				$ficheros,
				Response::HTTP_OK,
				array('content-type' => 'text/html')
		);
		
	}	
	public function putTerritorio(Request $request, $id){
	    
	    //obtenemos los parámetros del cuerpo de la peticion
	    $params=json_decode($request->getContent(), true);
	    //obtenemos el usuario logeado
	    $user=$this->getUser();
	    
	    
	    //Solo podremos modificar cuando es el mismo usuario
	    $territorio=$this->getDoctrine()->getRepository(Territorio::class)->find($id);
	    if ($territorio){
	        //abrimos nuestro manager
	        $entityManager = $this->getDoctrine()->getManager('default');
	        if($territorio->getUsuario()==$user->getIdUsu()){
	            
	            
	            if (isset($params["tipoTerritorioId"])){
	                $tipo=$this->getDoctrine()->getRepository(TipoTerritorio::class)->find($params["tipoTerritorioId"]);
	                if ($tipo!=null){
	                    $territorio->setTipo($tipo);
	                }else{
	                    throw new NotFoundHttpException();
	                }
	                
	            }
	            if (isset($params["amenazada"])){
	                $territorio->setAmenazada($params["amenazada"]);
	            }
	            
	            if (isset($params["vacio"])){
	                $territorio->setVacio($params["vacio"]);
	            }
	            if (isset($params["nombre"])){
	                $territorio->setNombre($params["nombre"]);
	            }
	            
	            if (isset($params["nombreCentro"])){
	                $territorio->setNombreCentro($params["nombreCentro"]);
	            }
	            if (isset($params["locNidos"])){
	                $locNidos=$territorio->getLocNidos();
	                $locNidos->setFachada($params["locNidos"]["fachada"]);
	                $locNidos->setTrasera($params["locNidos"]["trasera"]);
	                $locNidos->setLateralDerecho($params["locNidos"]["latDer"]);
	                $locNidos->setLateralIzquierdo($params["locNidos"]["latIzq"]);
	                $locNidos->setPatioInterior($params["locNidos"]["patio"]);
	                $locNidos->setNumPiso($params["locNidos"]["numPiso"]);
	                if (isset($params["locNidos"]["emplazamientoId"])){
	                    $emplazamiento=$this->getDoctrine()->getRepository(Emplazamiento::class)->find($params["locNidos"]["emplazamientoId"]);
	                    if ($emplazamiento!=null){
	                        $locNidos->setEmplazamiento($emplazamiento);
	                    }else{
	                        throw new NotFoundHttpException();
	                    }
	                    
	                }
	                //$locNidos->setHuso($params["locNidos"]["huso"]);
	                
	                $entityManager->persist($locNidos);
	            }
	            
	           
	        }
	       
	        
	        $entityManager->persist($territorio);
	        $entityManager->flush();
	        $entityManager->close();
	        return new JsonResponse(
	            $this->normalizer->normalize(
	                $territorio, 'json', ['groups' => ['territorio']]
	                )
	            );
	        
	    }else{
	        throw new InvalidArgumentException("No creaste este territorio para poder modificarlaro");
	    }
	    
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
		
		/*$existeEspecie=SeoApisController::existeEspecie($params["especie"]);
		}else{
			throw new InvalidArgumentException("No se ha especificado la especie");
		}*/
		
		if ($params && count($params) ){
			
			
			$newTerritorio->setUsuario($user->getIdUsu());
			$newTerritorio->setEspecie($params["especie"]);
			$newTerritorio->setVacio(false);
			
			if (isset($params["codTerritorio"])){
				$newTerritorio->setCodTerritorio($params["codTerritorio"]);
			}
			
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
			
			if (!isset($params["codTerritorio"])){
			    $newTerritorio->setCodTerritorio($newTerritorio->getId());
			    $entityManager->persist($newTerritorio);
			}
			
			$entityManager->flush();
			
		
			
		}
		
		$entityManager->close();
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$newTerritorio, 'json', ['groups' => ['territorio']]
				)
		);

	
	}
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
				if (isset($params["numPiso"])){
				    $locNidos->setNumPiso($params["numPiso"]);
				}
				
				
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
	

	public function getFavoritos(Request $request, $id){
		$user=$this->getUser();
		$territorios=$user->getTerritoriosFavoritos();
		
		return new JsonResponse(
			$this->normalizer->normalize(
				$territorios, 'json', ['groups' => ['territorio']]
		));
	}
	
	public function getVisitasTerr(Request $request){
		
		//Podemos obtener todas las visitas, o todas las visitas de un territorio
		$territorio = $request->query->get("territorio");
		$user=$this->getUser();
		
		$territorio ? $visitas=$this->getDoctrine()->getRepository(VisitasTerritorio::class)->findBy(['usuario'=>$user->getIdUsu(), 'territorio'=>$territorio]) :
				$visitas=$this->getDoctrine()->getRepository(VisitasTerritorio::class)->findBy(['usuario'=>$user->getIdUsu()]);
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$visitas, 'json', ['groups' => ['visitaTerr']]
				));
	}
	
	public function getVisitaTerr(Request $request, $id){
		$user=$this->getUser();
		
		$visita=$this->getDoctrine()->getRepository(VisitasTerritorio::class)->findOneBy(['usuario'=>$user->getIdUsu(), 'id'=>$id]) ;
		
		return new JsonResponse(
				$this->normalizer->normalize(
						$visita, 'json', ['groups' => ['visitaTerr']]
				));
	}
	
	
	public function removeFavorito(Request $request, $id){
		$id=intval($id);
		$user =$this->getUser();		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		
		$fav=$this->getDoctrine()->getRepository(FavoritosTerr::class)->find($id);
		$entityManager->remove($fav);
		$entityManager->flush();
		$entityManager->close();
	
		return new Response(
				'Se ha borrado el favorito',
				Response::HTTP_OK,
				array('content-type' => 'text/html')
		);
	
	
	}
	
	public function newVisit(Request $request, $id){
	
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
	
	public function deleteVisitaTerr(Request $request, $id){
		
		$params=json_decode($request->getContent(), true);
		//obtenemos el usuario logeado
		$user=$this->getUser();
		
		//Buscamos solo la visita si pertenece al usuario
		$visita=$this->getDoctrine()->getRepository(VisitasTerritorio::class)->findOneBy([
                                                                                            'id'=>$id,
                                                                                            'usuario'=>$user->getIdUsu()]);
		
		$entityManager = $this->getDoctrine()->getManager('default');
	
		if ($visita!=null){
								
			$entityManager->remove($visita);
			$entityManager->flush();
			$entityManager->close();
				
		}
	
		return new Response(
					    '',
					    Response::HTTP_NO_CONTENT,
					    array('content-type' => 'text/html')
					);
	}
	
	public function newFavorito(Request $request){
		$params=json_decode($request->getContent(), true);
		
		$territorio=$this->getDoctrine()->getRepository(Territorio::class)->find($params["territorio"]);
		
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
	
		if ($territorio!=null){
			//abrimos nuestro manager
			$entityManager = $this->getDoctrine()->getManager('default');
			
			$favEntity=new FavoritosTerr();
			$favEntity->setTerritorio($territorio);
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
			
			
			$visitaImage->setImageFile($uploadedFiles[$i]);
	
			$visitaImage->setFileName(sprintf(
			    "%s://%s%s",
			    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
			    $_SERVER['SERVER_NAME'],
			    '/public/images/VisitasTerr/'
			    )
			    
			    );
			
			$visita->addVisitaTerritorioImage($visitaImage);
		}
		$em = $this->getDoctrine()->getManager();
	
		$em->persist($visita);
		$em->flush();
		return new JsonResponse(
				$this->normalizer->normalize(
				    $visita, 'json', ['groups' => ['visitaTerr']]
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
