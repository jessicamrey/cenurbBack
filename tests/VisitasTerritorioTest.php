<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\VisitasTerritorio;
use App\Entity\
vacionesTerritorio;
use App\Entity\VisitaTerritorioImages;
use App\Entity\Territorio;
use DateTime;
use App\Entity\ObservacionesTerritorio;
use Doctrine\Common\Collections\ArrayCollection;

class VisitasTerritorioTest extends TestCase{
	
	  public function testUsuario()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new VisitasTerritorio();
        $myEntity->setUsuario($testResult);
        //getting data
        $getterResult = $myEntity->getUsuario();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testHuso()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new VisitasTerritorio();
        $myEntity->setHuso($testResult);
        //getting data
        $getterResult = $myEntity->getHuso();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testLat()
    {
        //mock results
        $testResult = 12.12;
        //creating and setting data
        $myEntity = new VisitasTerritorio();
        $myEntity->setLat($testResult);
        //getting data
        $getterResult = $myEntity->getLat();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testLon()
    {
        //mock results
        $testResult = 12.12;
        //creating and setting data
        $myEntity = new VisitasTerritorio();
        $myEntity->setLon($testResult);
        //getting data
        $getterResult = $myEntity->getLon();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testObservaciones()
    {
        //mock results
        $testResult = new ObservacionesTerritorio();
        //creating and setting data
        $myEntity = new VisitasTerritorio();
        $myEntity->setObservaciones($testResult);
        //getting data
        $getterResult = $myEntity->getObservaciones();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testVisitasTerritorio()
    {
        //mock results
        $testResult = new Territorio();
        //creating and setting data
        $myEntity = new VisitasTerritorio();
        $myEntity->setTerritorio($testResult);
        //getting data
        $getterResult = $myEntity->getTerritorio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
     public function testFecha()
    {
        //mock results
        $testResult = new DateTime('2019-01-01');
        //creating and setting data
        $myEntity = new VisitasTerritorio();
        $myEntity->setFecha($testResult);
        //getting data
        $getterResult = $myEntity->getFecha();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testHora()
    {
        //mock results
        $testResult = new DateTime('17:00:00');
        //creating and setting data
        $myEntity = new VisitasTerritorio();
        $myEntity->setHora($testResult);
        //getting data
        $getterResult = $myEntity->getHora();
        //test result
        parent::assertEquals($testResult, $getterResult);
    } 

    public function testVisitaTerritorioImages()
    {
        //mock result
        $otras= new VisitaTerritorioImages();

        $myEntity = new VisitasTerritorio();
        
        $myEntity->addVisitaTerritorioImage($otras);
        $testResult = new ArrayCollection([$otras]);
        //getting data
        $getterResult= $myEntity->getVisitaTerritorioImages();
        
        //test result
        parent::assertEquals($testResult, $getterResult);
        
        //Test add and remove 
        $otras2= new VisitaTerritorioImages();
        
        $myEntity->addVisitaTerritorioImage($otras2);
        
        $getterResult = $myEntity->getVisitaTerritorioImages();
        parent::assertEquals(new ArrayCollection([$otras, $otras2]), $getterResult, "Test add ");
        $myEntity->removeVisitaTerritorioImage($otras);
        $getterResult = $myEntity->getVisitaTerritorioImages();
        parent::assertEquals(new ArrayCollection([1 => $otras2]), $getterResult, "Test remove one ");
        $myEntity->removeVisitaTerritorioImage($otras2);
        $getterResult = $myEntity->getVisitaTerritorioImages();
        parent::assertEquals(new ArrayCollection([]), $getterResult, "Test remove one ");
    }
    
}
