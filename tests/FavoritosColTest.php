<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\FavoritosCol;
use App\Entity\Colonia;
use App\Entity\SegUsu;
use Doctrine\Common\Collections\ArrayCollection;

class FavoritosColTest extends TestCase{
	 
	 
	  public function testColonia()
    {
        //mock results
        $testResult = new Colonia();
        //creating and setting data
        $myEntity = new FavoritosCol();
        $myEntity->setColonia($testResult);
        //getting data
        $getterResult = $myEntity->getColonia();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testUsuario()
    {
        //mock results
        $testResult = new SegUsu();
        //creating and setting data
        $myEntity = new FavoritosCol();
        $myEntity->setUsuario($testResult);
        //getting data
        $getterResult = $myEntity->getUsuario();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
}
