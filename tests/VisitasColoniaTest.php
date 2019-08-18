<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\VisitasColonia;
use App\Entity\Colonia;
use App\Entity\VisitaColoniaImages;
use App\Entity\Temporada;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;

class VisitasColoniaTest extends TestCase{
	
	 public function testUsuario()
    {
        //mock results
        $testResult = "Usuario";
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setUsuario($testResult);
        //getting data
        $getterResult = $myEntity->getUsuario();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testFecha()
    {
        //mock results
        $testResult = new DateTime('2019-01-01');
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setFecha($testResult);
        //getting data
        $getterResult = $myEntity->getFecha();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testNumVisita()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setNumVisita($testResult);
        //getting data
        $getterResult = $myEntity->getNumVisita();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testNumNidos()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setNumNidos($testResult);
        //getting data
        $getterResult = $myEntity->getNumNidos();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testNumNidosOcupados()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setNumNidosOcupados($testResult);
        //getting data
        $getterResult = $myEntity->getNumNidosOcupados();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testNumNidosExito()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setNumNidosExito($testResult);
        //getting data
        $getterResult = $myEntity->getNumNidosExito();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testNumNidosVacios()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setNumNidosVacios($testResult);
        //getting data
        $getterResult = $myEntity->getNumNidosVacios();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
        public function testCompleto()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setCompleto($testResult);
        //getting data
        $getterResult = $myEntity->getCompleto();
        //test result
        parent::assertTrue($testResult);
    }
    
     public function testNombreUsuario()
    {
        //mock results
        $testResult = "Usuario";
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setNombreUsuario($testResult);
        //getting data
        $getterResult = $myEntity->getNombreUsuario();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
     public function testColonia()
    {
        //mock results
        $testResult = new Colonia();
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setColonia($testResult);
        //getting data
        $getterResult = $myEntity->getColonia();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testTemporada()
    {
        //mock results
        $testResult = new Temporada();
        //creating and setting data
        $myEntity = new VisitasColonia();
        $myEntity->setTemporada($testResult);
        //getting data
        $getterResult = $myEntity->getTemporada();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
    public function testVisitaColoniaImages()
    {
        //mock result
        $otras= new VisitaColoniaImages();

        $myEntity = new VisitasColonia();
        
        $myEntity->addVisitaColoniaImage($otras);
        $testResult = new ArrayCollection([$otras]);
        //getting data
        $getterResult= $myEntity->getVisitaColoniaImages();
        
        //test result
        parent::assertEquals($testResult, $getterResult);
        
        //Test add and remove 
        $otras2= new VisitaColoniaImages();
        
        $myEntity->addVisitaColoniaImage($otras2);
        
        $getterResult = $myEntity->getVisitaColoniaImages();
        parent::assertEquals(new ArrayCollection([$otras, $otras2]), $getterResult, "Test add ");
        $myEntity->removeVisitaColoniaImage($otras);
        $getterResult = $myEntity->getVisitaColoniaImages();
        parent::assertEquals(new ArrayCollection([1 => $otras2]), $getterResult, "Test remove one ");
        $myEntity->removeVisitaColoniaImage($otras2);
        $getterResult = $myEntity->getVisitaColoniaImages();
        parent::assertEquals(new ArrayCollection([]), $getterResult, "Test remove one ");
    }
}
