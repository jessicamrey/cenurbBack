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
use App\Entity\LocNidosNoCol;
use App\Entity\VisitasTerritorio;
use App\Entity\Temporada;
use App\Entity\TipoTerritorio;
use App\Entity\Territorio;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Description of TerritorioTest
 *
 * @author jessica
 */
class TerritorioTest extends TestCase{
	
	public function testCodTerritorio()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new Territorio();
        $myEntity->setCodTerritorio($testResult);
        //getting data
        $getterResult = $myEntity->getCodTerritorio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    public function testUsuario()
    {
        //mock results
        $testResult = "Usuario";
        //creating and setting data
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
        $myEntity->setTipoEdificio($testResult);
        //getting data
        $getterResult = $myEntity->getTipoEdificio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
     public function testLocNidosNoCol()
    {
        //mock results
        $testResult = new LocNidosNoCol();
        //creating and setting data
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
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
        $myEntity = new Territorio();
        $myEntity->setEspecie($testResult);
        //getting data
        $getterResult = $myEntity->getEspecie();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
      public function testVisitasTerritorio()
    {
        //mock result
        $otras= new VisitasTerritorio();

        $myEntity = new Territorio();
        
        $myEntity->addVisitasTerritorio($otras);
        $testResult = new ArrayCollection([$otras]);
        //getting data
        $getterResult= $myEntity->getVisitasTerritorios();
        
        //test result
        parent::assertEquals($testResult, $getterResult);
        
        //Test add and remove 
        $otras2= new VisitasTerritorio();
        
        $myEntity->addVisitasTerritorio($otras2);
        
        $getterResult = $myEntity->getVisitasTerritorios();
        parent::assertEquals(new ArrayCollection([$otras, $otras2]), $getterResult, "Test add ");
        $myEntity->removeVisitasTerritorio($otras);
        $getterResult = $myEntity->getVisitasTerritorios();
        parent::assertEquals(new ArrayCollection([1 => $otras2]), $getterResult, "Test remove one ");
        $myEntity->removeVisitasTerritorio($otras2);
        $getterResult = $myEntity->getVisitasTerritorios();
        parent::assertEquals(new ArrayCollection([]), $getterResult, "Test remove one ");
    }
    
     public function testTemporada()
    {
        //mock results
        $testResult = new Temporada();
        //creating and setting data
        $myEntity = new Territorio();
        $myEntity->setTemporada($testResult);
        //getting data
        $getterResult = $myEntity->getTemporada();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
    public function testValidado()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new Territorio();
        $myEntity->setValidado($testResult);
        //getting data
        $getterResult = $myEntity->getValidado();
        //test result
        parent::assertTrue($testResult);
    }
    
    
    
     public function testAmenazada()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new Territorio();
        $myEntity->setAmenazada($testResult);
        //getting data
        $getterResult = $myEntity->getAmenazada();
        //test result
        parent::assertTrue($testResult);
    }
    
    
     public function testTipo()
    {
        //mock results
        $testResult = new TipoTerritorio();
        //creating and setting data
        $myEntity = new Territorio();
        $myEntity->setTipo($testResult);
        //getting data
        $getterResult = $myEntity->getTipo();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
}
