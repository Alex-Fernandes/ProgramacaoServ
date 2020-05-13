<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12/05/2020
 * Time: 10:31
 */

class Tabuleiro
{
    private $dado;
    public $resultadoDado1, $resultadoDado2;
    public $numerosBloqueioP1 , $numerosBloqueioP2;

    public function rolarDados(){
        $valorDado = new Dado();
        $dado = array($valorDado->rolarDado(),$valorDado->rolarDado());

        return $dado;
    }

    public function checkFinalJogadaP1($soma){

    }

    public function checkFinalJogadaP2($soma){

    }

    public function getVencedor(){

    }

    public function getPointsVencedor(){

    }

}