<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\Temporada;

class TemporadaTest extends TestCase{
	
	 public function testAnno()
    {
        //mock results
        $testResult = 2019;
        //creating and setting data
        $myEntity = new Temporada();
        $myEntity->setAnno($testResult);
        //getting data
        $getterResult = $myEntity->getAnno();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testAbierta()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new Temporada();
        $myEntity->setAbierta($testResult);
        //getting data
        $getterResult = $myEntity->getAbierta();
        //test result
        parent::assertTrue($testResult);
    }
}
