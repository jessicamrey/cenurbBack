<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\TipoTerritorio;

class TipoTerritorioTest extends TestCase{
	
	 public function testDescripcion()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new TipoTerritorio();
        $myEntity->setDescripcion($testResult);
        //getting data
        $getterResult = $myEntity->getDescripcion();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
}
