<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use DateTime;
use App\Entity\CensoMunicipio;
use App\Entity\Colonia;
use App\Entity\Temporada;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Description of ColoniaTest
 *
 * @author jessica
 */
class CensoMunicipioTest extends TestCase{


	public function testUsuario()
    {
        //mock results
        $testResult = "Usuario";
        //creating and setting data
        $myEntity = new CensoMunicipio();
        $myEntity->setUsuario($testResult);
        //getting data
        $getterResult = $myEntity->getUsuario();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    public function testMunicipio()
    {
        //mock results
        $testResult = "test";
        //creating and setting data
        $myEntity = new CensoMunicipio();
        $myEntity->setMunicipio($testResult);
        //getting data
        $getterResult = $myEntity->getMunicipio();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
    public function testEspecie()
    {
        //mock results
        $testResult = 12;
        //creating and setting data
        $myEntity = new CensoMunicipio();
        $myEntity->setEspecie($testResult);
        //getting data
        $getterResult = $myEntity->getEspecie();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
     public function testCompleto()
    {
        //mock results
        $testResult = true;
        //creating and setting data
        $myEntity = new CensoMunicipio();
        $myEntity->setCompleto($testResult);
        //getting data
        $getterResult = $myEntity->getCompleto();
        //test result
        parent::assertTrue($testResult);
    }
    
     public function testTemporada()
    {
        //mock results
        $testResult = new Temporada();
        //creating and setting data
        $myEntity = new CensoMunicipio();
        $myEntity->setTemporada($testResult);
        //getting data
        $getterResult = $myEntity->getTemporada();
        //test result
        parent::assertEquals($testResult, $getterResult);
    }
    
       public function testColoniasAsignadas()
    {
        //mock result
        $otras= new Colonia();

        $myEntity = new CensoMunicipio();
        
        $myEntity->addColoniasAsignada($otras);
        $testResult = new ArrayCollection([$otras]);
        //getting data
        $getterResult= $myEntity->getColoniasAsignadas();
        
        //test result
        parent::assertEquals($testResult, $getterResult);
        
        //Test add and remove 
        $otras2= new Colonia();
        
        $myEntity->addColoniasAsignada($otras2);
        
        $getterResult = $myEntity->getColoniasAsignadas();
        parent::assertEquals(new ArrayCollection([$otras, $otras2]), $getterResult, "Test add ");
        $myEntity->removeColoniasAsignada($otras);
        $getterResult = $myEntity->getColoniasAsignadas();
        parent::assertEquals(new ArrayCollection([1 => $otras2]), $getterResult, "Test remove one ");
        $myEntity->removeColoniasAsignada($otras2);
        $getterResult = $myEntity->getColoniasAsignadas();
        parent::assertEquals(new ArrayCollection([]), $getterResult, "Test remove one ");
    }
    
}
