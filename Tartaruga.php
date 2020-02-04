<?php
require_once 'Reptil.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tartaruga
 *
 * @author Killer
 */
class Tartaruga extends Reptil{
    public function __construct($peso, $idade, $corEscama) {
        parent::__construct($peso, $idade, 4, $corEscama);
    }
    
    public function locomover(){
        echo "<p>A tartaruga está locomovendo devagar</p>";
    }    

    
    public function status(){
        echo "<p>TARTARUGA</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor da Escama: </p></td><td>".$this->getCorEscama()."</td></tr></table><br>";
    }
    
    
    
    
    
    
}
