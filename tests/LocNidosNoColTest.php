<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\LocNidosNoCol;
use App\Entity\Emplazamiento;
use App\Entity\Territorio;
use Doctrine\Common\Collections\ArrayCollection;

class LocNidosNoColTest extends TestCase{
	
	 public function testUsuario()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setUsuario($testResult);
        //getting data
        $getterResult = $myEntity->getUsuario();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testFachada()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setFachada($testResult);
        //getting data
        $getterResult = $myEntity->getFachada();
        //test result
        parent::assertTrue($testResult);
    }
    
      public function testTrasera()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setTrasera($testResult);
        //getting data
        $getterResult = $myEntity->getTrasera();
        //test result
        parent::assertTrue($testResult);
    }
    
    
      public function testLateralDerecho()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setLateralDerecho($testResult);
        //getting data
        $getterResult = $myEntity->getLateralDerecho();
        //test result
        parent::assertTrue($testResult);
    }
    
      public function testLateralIzquierdo()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setLateralIzquierdo($testResult);
        //getting data
        $getterResult = $myEntity->getLateralIzquierdo();
        //test result
        parent::assertTrue($testResult);
    }
    
      public function testPatioInterior()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setPatioInterior($testResult);
        //getting data
        $getterResult = $myEntity->getPatioInterior();
        //test result
        parent::assertTrue($testResult);
    }
    
    
     public function testNumPiso()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setNumPiso($testResult);
        //getting data
        $getterResult = $myEntity->getNumPiso();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
      public function testEmplazamiento()
    {
        //mock results
        $testResult = new Emplazamiento();
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setEmplazamiento($testResult);
        //getting data
        $getterResult = $myEntity->getEmplazamiento();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testTerritorio()
    {
        //mock results
        $testResult = new Territorio();
        //creating and setting data
        $myEntity = new LocNidosNoCol();
        $myEntity->setTerritorio($testResult);
        //getting data
        $getterResult = $myEntity->getTerritorio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    
          public function testHuso()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new LocNidosNoCol();
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
        $myEntity = new LocNidosNoCol();
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
        $myEntity = new LocNidosNoCol();
        $myEntity->setLon($testResult);
        //getting data
        $getterResult = $myEntity->getLon();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
}
