<?php
require_once 'Animal.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ave
 *
 * @author Killer
 */
class Ave extends Animal{
    protected $corPena;
   
   
   public function fazerNinho(){
     echo "<p>O animal do tipo Ave fez um ninho!</p>";  
   }

   function __construct($peso, $idade, $membros, $corPena) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
        $this->corPena = $corPena;
    }

   public function alimentar() {
       echo "<p>A ave está se alimentando</p>";  
    }

    public function emitirSom() {
       echo "<p>Som de ave!</p>";  
    }

    public function locomover() {
       echo "<p>A ave está voando</p>";  
    }
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

        
    public function status(){
        echo "<p>AVE</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor da Pena: </p></td><td>".$this->getCorPena()."</td></tr></table><br>";
    }
    
    

}
