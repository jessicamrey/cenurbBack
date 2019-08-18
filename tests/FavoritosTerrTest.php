<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use App\Entity\FavoritosTerr;
use App\Entity\Territorio;
use App\Entity\SegUsu;
use Doctrine\Common\Collections\ArrayCollection;

class FavoritosTerrTest extends TestCase{
	 
	 
	  public function testTerritorio()
    {
        //mock results
        $testResult = new Territorio();
        //creating and setting data
        $myEntity = new FavoritosTerr();
        $myEntity->setTerritorio($testResult);
        //getting data
        $getterResult = $myEntity->getTerritorio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
      public function testUsuario()
    {
        //mock results
        $testResult = new SegUsu();
        //creating and setting data
        $myEntity = new FavoritosTerr();
        $myEntity->setUsuario($testResult);
        //getting data
        $getterResult = $myEntity->getUsuario();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
}
