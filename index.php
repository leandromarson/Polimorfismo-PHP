<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Polimorfismo PHP Poo</title>
    </head>
    <body>
        <div id = "interface">
            <header id ="cabecalho">
            	<hgroup>
                    <h1>Site Animal</h1>
                        <h2>POO em PHP</h2>
		</hgroup>						
            </header>
            <pre>
            <?php
                
                require_once 'Animal.php';
                require_once 'Ave.php';
                require_once 'Reptil.php';
                require_once 'Peixe.php';
                require_once 'Mamifero.php';
                require_once 'Arara.php';
                require_once 'Cachorro.php';
                require_once 'Canguru.php';
                require_once 'Cobra.php';
                require_once 'Goldfish.php';
                require_once 'Tartaruga.php';
                
                $ave = new Ave(10, 5, 6, "Branco");
                $reptil = new Reptil(5.3, 4, 2, "Verde");
                $peixe = new Peixe(0.2, 1, 0, "Azul");
                $mam = new Mamifero(4, 2, 3, "Preto");
                
                $mam->alimentar();
                $mam->locomover();
                $mam->emitirSom();
                echo "<br>";
                $ave->alimentar();
                $ave->locomover();
                $ave->emitirSom();
                echo "<br>";
                $reptil->alimentar();
                $reptil->locomover();
                $reptil->emitirSom();
                echo "<br>";
                $peixe->alimentar();
                $peixe->locomover();
                $peixe->emitirSom();
                echo "<br>";                
                $mam->status();
                $ave->status();
                $reptil->status();
                $peixe->status();
                
                $arara = new Arara(3, 2, "Amarelo");
                $canguru = new Canguru(7, 10, "Marrom");
                $cachorro = new Cachorro(10, 15, "Marrom Escuro");
                $cobra = new Cobra(20, 5, "Verde Escuro");
                $gf = new Goldfish(0.2, 1);
                $tart = new Tartaruga(20, 100, "Verde Marrom");
                echo "<br>";
                $arara->alimentar();
                $arara->locomover();
                $arara->emitirSom();
                echo "<br>";
                $canguru->alimentar();
                $canguru->locomover();
                $canguru->emitirSom();
                $canguru->usarBolsa();
                echo "<br>";
                $cachorro->alimentar();
                $cachorro->locomover();
                $cachorro->emitirSom();
                $cachorro->enterrarOsso();
                $cachorro->abanarRabo();
                echo "<br>";
                $cobra->alimentar();
                $cobra->locomover();
                $cobra->emitirSom();
                echo "<br>";
                $gf->alimentar();
                $gf->locomover();
                $gf->emitirSom();
                echo "<br>";
                $tart->alimentar();
                $tart->locomover();
                $tart->emitirSom();
                echo "<br>";                
                $arara->status();
                $canguru->status();
                $cachorro->status();
                $cobra->status();
                $gf->status();
                $tart->status();
                
                
                
                
                
                
            ?>
            </pre>
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>    
    </body>
</html>
