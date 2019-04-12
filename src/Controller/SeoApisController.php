<?php

namespace App\Controller;


use App\Entity\TempUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\OptionsResolver\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use PDO;

class SeoApisController extends Controller{
    
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
    
    function url($type,$id){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            '/public/images/'.$type.'/'.$id. '/profile/' . $id . '.gif'
            );
    }
    
    public function listCol(Request $request)
    {
            //abrimos el manager de Seo
            $entityManager = $this->getDoctrine()->getManager('seo');
                   
            $sql = "
                SELECT 
                    t.`ID_ESP`, 
                    t.`DEN_ESP_CAS`, 
                    t.`DEN_ESP_LAT`, 
                    t.`DEN_ESP_ING`,
                    t.`DEN_ESP_CAT`,
                    t.`DEN_ESP_GAL`, 
                    t.`DEN_ESP_VAS` 
                FROM   
                    tablas_seo.t_especies t,
                    tablas_seo.t_esp_grupo tg
                WHERE
                    tg.ID_ESP=t.ID_ESP AND
                    tg.`ID_GRU`=13 AND tg.`ID_SUBG`=29
            ";
            
            $stmt = $entityManager->getConnection()->prepare($sql);
            $stmt->execute();
            $array= new ArrayCollection();
            $array=$stmt->fetchAll();
            
            //ahora añadimos a cada grupo del array el campo de la imagen
            foreach ($array as &$group) {
                $group["image"] = SeoApisController::url('col', $group['ID_ESP']);
            }

            return new Response(
                json_encode(  $array) , 200, ['content-type' => 'text/html; charset=UTF-8']
                );
    }
    
    public function listOneCol(Request $request, $id) 
    {
        //abrimos el manager de Seo
        $entityManager = $this->getDoctrine()->getManager('seo');
        
        $sql = "
                SELECT
                    t.`ID_ESP`,
                    t.`DEN_ESP_CAS`,
                    t.`DEN_ESP_LAT`,
                    t.`DEN_ESP_ING`,
                    t.`DEN_ESP_CAT`,
                    t.`DEN_ESP_GAL`,
                    t.`DEN_ESP_VAS`
                FROM
                    tablas_seo.t_especies t,
                    tablas_seo.t_esp_grupo tg
                WHERE
                    tg.ID_ESP=t.ID_ESP AND
                    t.ID_ESP = :id AND
                    tg.`ID_GRU`=13 AND tg.`ID_SUBG`=29
            ";
        
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();
        $array= new ArrayCollection();
        $array=$stmt->fetchAll();
        
        //ahora añadimos a cada grupo del array el campo de la imagen
        foreach ($array as &$group) {
            $group["image"] =SeoApisController:: url('col', $group['ID_ESP']);
        }
        
        return new Response(
            json_encode( $array), 200, ['content-type' => 'text/html; charset=UTF-8']
            );
    }
    
    public function listNoCol(Request $request) 
    {
        //abrimos el manager de Seo
        $entityManager = $this->getDoctrine()->getManager('seo');
        
        $sql = "
                SELECT
                    t.`ID_ESP`,
                    t.`DEN_ESP_CAS`,
                    t.`DEN_ESP_LAT`,
                    t.`DEN_ESP_ING`,
                    t.`DEN_ESP_CAT`,
                    t.`DEN_ESP_GAL`,
                    t.`DEN_ESP_VAS`
                FROM
                    tablas_seo.t_especies t,
                    tablas_seo.t_esp_grupo tg
                WHERE
                    tg.ID_ESP=t.ID_ESP AND
                    tg.`ID_GRU`=13 AND tg.`ID_SUBG`=30
            ";
        
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->execute();
        $array= new ArrayCollection();
        $array=$stmt->fetchAll();
        
        //ahora añadimos a cada grupo del array el campo de la imagen
        foreach ($array as &$group) {
            $group["image"] = SeoApisController::url('nocol', $group['ID_ESP']);
        }
        
        return new Response(
            json_encode(  $array ) , 200, ['content-type' => 'text/html; charset=UTF-8']
            );
    }
    
    public function listOneNoCol(Request $request, $id) //Las imagenes habra que añadir un listado con las fotos subidas por la gente
    {
        //abrimos el manager de Seo
        $entityManager = $this->getDoctrine()->getManager('seo');
        
        $sql = "
                SELECT
                    t.`ID_ESP`,
                    t.`DEN_ESP_CAS`,
                    t.`DEN_ESP_LAT`,
                    t.`DEN_ESP_ING`,
                    t.`DEN_ESP_CAT`,
                    t.`DEN_ESP_GAL`,
                    t.`DEN_ESP_VAS`
                FROM
                    tablas_seo.t_especies t,
                    tablas_seo.t_esp_grupo tg
                WHERE
                    tg.ID_ESP=t.ID_ESP AND
                    t.ID_ESP = :id AND
                    tg.`ID_GRU`=13 AND tg.`ID_SUBG`=30
            ";
        
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
       
        $stmt->execute();
        $array= new ArrayCollection();
        $array=$stmt->fetchAll();
        
        //ahora añadimos a cada grupo del array el campo de la imagen
        foreach ($array as &$group) {
            $group["image"] =SeoApisController:: url('nocol', $group['ID_ESP']);
        }
        
        return new Response(
            json_encode(  $array ) , 200, ['content-type' => 'text/html; charset=UTF-8']
            );
    }
    
    public function ccaa(Request $request) 
    {
        //abrimos el manager de Seo
        $entityManager = $this->getDoctrine()->getManager('seo');
        
        $sql = "
               SELECT * 
                FROM tablas_seo.comunidades
            ";
        
        $stmt = $entityManager->getConnection()->prepare($sql);
        
        $stmt->execute();
        $array= new ArrayCollection();
        $array=$stmt->fetchAll();
        
        return new Response(
            json_encode(  $array ) , 200, ['content-type' => 'text/html; charset=UTF-8']
            );
    }
    
    public function provincias(Request $request, $id)
    {
        //abrimos el manager de Seo
        $entityManager = $this->getDoctrine()->getManager('seo');
        
        $sql = "
                SELECT ID_PROV, DEN_PROV 
                FROM tablas_seo.provincias 
                WHERE id_com=:id
            ";
        
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();
        $array= new ArrayCollection();
        $array=$stmt->fetchAll();
        
        
        
        return new Response(
            json_encode(  $array ) , 200, ['content-type' => 'text/html; charset=UTF-8']
            );
    }
    
    public function municipios(Request $request, $id) 
    {
        //abrimos el manager de Seo
        $entityManager = $this->getDoctrine()->getManager('seo');
        
        $sql = "
                SELECT ID_POB, DEN_POB 
                FROM tablas_seo.poblaciones 
                WHERE id_prov=:id
            ";
        
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();
        $array= new ArrayCollection();
        $array=$stmt->fetchAll();
      
        return new Response(
            json_encode(  $array ) , 200, ['content-type' => 'text/html; charset=UTF-8']
            );
    }
    
    
}