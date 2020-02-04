<?php
require_once 'Animal.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reptil
 *
 * @author Killer
 */
class Reptil extends Animal{
    protected $corEscama;
    
    
    public function alimentar() {
       echo "<p>O reptil está se alimentando</p>";  
    }

    public function emitirSom() {
       echo "<p>Som de reptil!</p>";  
    }

    public function locomover() {
       echo "<p>O reptil está se alimentando</p>";  
    }
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

        
    function __construct($peso, $idade, $membros, $corEscama) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
        $this->corEscama = $corEscama;
    }
    
    public function status(){
        echo "<p>REPTIL</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor da Escama: </p></td><td>".$this->getCorEscama()."</td></tr></table><br>";
    }

}
