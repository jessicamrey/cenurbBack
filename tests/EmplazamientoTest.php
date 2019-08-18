<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\Emplazamiento;

class EmplazamientoTest extends TestCase{
	
	 public function testTipo()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new Emplazamiento();
        $myEntity->setTipo($testResult);
        //getting data
        $getterResult = $myEntity->getTipo();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
}
