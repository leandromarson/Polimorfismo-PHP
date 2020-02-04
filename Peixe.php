<?php
require_once 'Animal.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Peixe
 *
 * @author Killer
 */
class Peixe extends Animal{
    protected $corEscama;

    function __construct($peso, $idade, $membros, $corEscama) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
        $this->corEscama = $corEscama;
    }




    public function alimentar() {
       echo "<p>O peixe está se alimentando</p>"; 
    }

    public function emitirSom() {
        echo "<p>Som de peixe!</p>";
    }

    public function locomover() {
        echo "<p>O peixe está nadando</p>";
    }
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
    
    public function soltarBolha(){
        echo "<p>O peixe soltou uma bolha!</p>";
    }

    public function status(){
        echo "<p>PEIXE</p>";
        echo "<table><tr><td><p>Peso: </p></td><td>".$this->getPeso()." kg</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()." anos</td></tr>";
        echo "<tr><td><p>Membros: </p></td><td>".$this->getMembros()."</td></tr>";
        echo "<tr><td><p>Cor da Escama: </p></td><td>".$this->getCorEscama()."</td></tr></table><br>";
    }

}
