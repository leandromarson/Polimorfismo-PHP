<?php
require_once 'Ave.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Arara
 *
 * @author Killer
 */
class Arara extends Ave{
    
    function __construct($peso, $idade, $corPena) {
        parent::__construct($peso, $idade, 4, $corPena);
        
    }
    
    public function status(){
        echo "<p>ARARA</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor da Pena: </p></td><td>".$this->getCorPena()."</td></tr></table><br>";
    }

    
    
}
