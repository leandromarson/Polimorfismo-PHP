<?php
require_once 'Mamifero.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cachorro
 *
 * @author Killer
 */
class Cachorro extends Mamifero{
    
    public function __construct($peso, $idade, $corPelo) {
        parent::__construct($peso, $idade, 4, $corPelo);       
    }
    
    public function enterrarOsso(){
        echo "<p>O cachorro está enterrando o osso</p>";
    }
    
    public function abanarRabo(){
        echo "<p>O cachorro está abanando o rabo</p>";
    }
    
    public function emitirSom() {
        echo "<p>Au au au!</p>";
    }

        public function status(){
        echo "<p>Cachorro</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor do Pelo: </p></td><td>".$this->getCorPelo()."</td></tr></table><br>";
    }
    
    
}
