<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use DateTime;
use App\Entity\TipoEdificio;
use App\Entity\TipoPropiedad;
use App\Entity\LocNidosCol;
use App\Entity\OtrasEspecies;
use App\Entity\VisitasColonia;
use App\Entity\Temporada;
use App\Entity\CensoMunicipio;
use App\Entity\Colonia;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Description of ColoniaTest
 *
 * @author jessica
 */
class ColoniaTest extends TestCase{
	
	public function testCodColonia()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setCodColonia($testResult);
        //getting data
        $getterResult = $myEntity->getCodColonia();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    public function testUsuario()
    {
        //mock results
        $testResult = "Usuario";
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setUsuario($testResult);
        //getting data
        $getterResult = $myEntity->getUsuario();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testNombre()
    {
        //mock results
        $testResult = "nombre";
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setNombre($testResult);
        //getting data
        $getterResult = $myEntity->getNombre();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testBarrio()
    {
        //mock results
        $testResult = "barrio";
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setBarrio($testResult);
        //getting data
        $getterResult = $myEntity->getBarrio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testCalleNumPiso()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setCalleNumPiso($testResult);
        //getting data
        $getterResult = $myEntity->getCalleNumPiso();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function nombreCentro()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setNombreCentro($testResult);
        //getting data
        $getterResult = $myEntity->getNombreCentro();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testTipoPropiedad()
    {
        //mock results
        $testResult = new TipoPropiedad();
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setTipoPropiedad($testResult);
        //getting data
        $getterResult = $myEntity->getTipoPropiedad();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
     public function testTipoEdificio()
    {
        //mock results
        $testResult = new TipoEdificio();
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setTipoEdificio($testResult);
        //getting data
        $getterResult = $myEntity->getTipoEdificio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
     public function testLocNidosCol()
    {
        //mock results
        $testResult = new LocNidosCol();
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setLocNidos($testResult);
        //getting data
        $getterResult = $myEntity->getLocNidos();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
    public function testVacio()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setVacio($testResult);
        //getting data
        $getterResult = $myEntity->getVacio();
        //test result
        parent::assertTrue($testResult);
    }
    
    public function testCcaa()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setCcaa($testResult);
        //getting data
        $getterResult = $myEntity->getCcaa();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    public function testProvincia()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setProvincia($testResult);
        //getting data
        $getterResult = $myEntity->getProvincia();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    public function testMunicipio()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setMunicipio($testResult);
        //getting data
        $getterResult = $myEntity->getMunicipio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testEspecie()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setEspecie($testResult);
        //getting data
        $getterResult = $myEntity->getEspecie();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testOtrasEspecies()
    {
        //mock result
        $otras= new OtrasEspecies();

        $myEntity = new Colonia();
        
        $myEntity->addOtrasEspecy($otras);
        $testResult = new ArrayCollection([$otras]);
        //getting data
        $getterResult= $myEntity->getOtrasEspecies();
        
        //test result
        parent::assertEquals($testResult, $getterResult);
        
        //Test add and remove 
        $otras2= new OtrasEspecies();
        
        $myEntity->addOtrasEspecy($otras2);
        
        $getterResult = $myEntity->getOtrasEspecies();
        parent::assertEquals(new ArrayCollection([$otras, $otras2]), $getterResult, "Test add ");
        $myEntity->removeOtrasEspecy($otras);
        $getterResult = $myEntity->getOtrasEspecies();
        parent::assertEquals(new ArrayCollection([1 => $otras2]), $getterResult, "Test remove one ");
        $myEntity->removeOtrasEspecy($otras2);
        $getterResult = $myEntity->getOtrasEspecies();
        parent::assertEquals(new ArrayCollection([]), $getterResult, "Test remove one ");
    }
    
      public function testVisitasColonia()
    {
        //mock result
        $otras= new VisitasColonia();

        $myEntity = new Colonia();
        
        $myEntity->addVisitasColonia($otras);
        $testResult = new ArrayCollection([$otras]);
        //getting data
        $getterResult= $myEntity->getVisitasColonias();
        
        //test result
        parent::assertEquals($testResult, $getterResult);
        
        //Test add and remove 
        $otras2= new VisitasColonia();
        
        $myEntity->addVisitasColonia($otras2);
        
        $getterResult = $myEntity->getVisitasColonias();
        parent::assertEquals(new ArrayCollection([$otras, $otras2]), $getterResult, "Test add ");
        $myEntity->removeVisitasColonia($otras);
        $getterResult = $myEntity->getVisitasColonias();
        parent::assertEquals(new ArrayCollection([1 => $otras2]), $getterResult, "Test remove one ");
        $myEntity->removeVisitasColonia($otras2);
        $getterResult = $myEntity->getVisitasColonias();
        parent::assertEquals(new ArrayCollection([]), $getterResult, "Test remove one ");
    }
    
     public function testTemporada()
    {
        //mock results
        $testResult = new Temporada();
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setTemporada($testResult);
        //getting data
        $getterResult = $myEntity->getTemporada();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
    public function testValidada()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setValidada($testResult);
        //getting data
        $getterResult = $myEntity->getValidada();
        //test result
        parent::assertTrue($testResult);
    }
    
     public function testMunicipioAsignado()
    {
        //mock results
        $testResult = new CensoMunicipio();
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setMunicipioAsignado($testResult);
        //getting data
        $getterResult = $myEntity->getMunicipioAsignado();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
     public function testCompleto()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new Colonia();
        $myEntity->setCompleto($testResult);
        //getting data
        $getterResult = $myEntity->getCompleto();
        //test result
        parent::assertTrue($testResult);
    }
    
}
