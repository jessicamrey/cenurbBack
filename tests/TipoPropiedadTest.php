<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\TipoPropiedad;

class TipoPropiedadTest extends TestCase{
	
	 public function testDescription()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new TipoPropiedad();
        $myEntity->setDescription($testResult);
        //getting data
        $getterResult = $myEntity->getDescription();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
}
