<?php

require_once 'Personagem.php';

class Inimigo extends Personagem
{
    private string $tipo;
    private int $ataque = 30;


    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima, string $tipo, int $ataque)
    {
        parent::__construct($nome, $nivel, $vida, $vidaMaxima);
        $this->tipo = $tipo;
        $this->ataque = $ataque;
    }


    public function interagir()
    {
        parent::interagir();
    }

    public function atacar()
    {
        return $this->ataque;
    }


    public function mostrarDados()
    {
        parent::mostrarDados();
        echo 'Tipo do inimigo: ' . $this->tipo . '<br>';
        echo 'Valor de Ataque: ' . $this->ataque . '<br>';
    }

    public function __toString() {
        return "Inimigo: " . $this->getNome() . " Tipo: " . $this->tipo . "<br>";
    }
















    /**
     * Receba o Encapsulamento
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;

    }

   
    public function getAtaque()
    {
        return $this->ataque;
    }
    public function setAtaque(int $ataque)
    {
        $this->ataque = $ataque;

    }
}