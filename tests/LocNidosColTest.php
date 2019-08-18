<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\LocNidosCol;
use App\Entity\Colonia;
use Doctrine\Common\Collections\ArrayCollection;

class LocNidosColTest extends TestCase{
	
	 public function testUsuario()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new LocNidosCol();
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
        $myEntity = new LocNidosCol();
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
        $myEntity = new LocNidosCol();
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
        $myEntity = new LocNidosCol();
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
        $myEntity = new LocNidosCol();
        $myEntity->setLateralIzquierdo($testResult);
        //getting data
        $getterResult = $myEntity->getLateralIzquierdo();
        //test result
        parent::assertTrue($testResult);
    }
    
      public function testPatioInferior()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new LocNidosCol();
        $myEntity->setPatioInferior($testResult);
        //getting data
        $getterResult = $myEntity->getPatioInferior();
        //test result
        parent::assertTrue($testResult);
    }
    
    
              public function testHuso()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new LocNidosCol();
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
        $myEntity = new LocNidosCol();
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
        $myEntity = new LocNidosCol();
        $myEntity->setLon($testResult);
        //getting data
        $getterResult = $myEntity->getLon();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
}
