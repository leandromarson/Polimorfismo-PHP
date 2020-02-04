<?php
require_once 'Reptil.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cobra
 *
 * @author Killer
 */
class Cobra extends Reptil{
    public function __construct($peso, $idade, $corEscama) {
        parent::__construct($peso, $idade, 0, $corEscama);
    }
    
    public function locomover(){
        echo "<p>O cobra está rastejando</p>";
    }
    
    public function status(){
        echo "<p>COBRA</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor da Escama: </p></td><td>".$this->getCorEscama()."</td></tr></table><br>";
    }

}
