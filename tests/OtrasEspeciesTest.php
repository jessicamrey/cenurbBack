<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\OtrasEspecies;
use App\Entity\Colonia;

class OtrasEspeciesTest extends TestCase{
	
	 public function testEspecie()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new OtrasEspecies();
        $myEntity->setEspecie($testResult);
        //getting data
        $getterResult = $myEntity->getEspecie();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    public function testColonia()
    {
        //mock results
        $testResult = new Colonia();
        //creating and setting data
        $myEntity = new OtrasEspecies();
        $myEntity->setColonia($testResult);
        //getting data
        $getterResult = $myEntity->getColonia();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
}
