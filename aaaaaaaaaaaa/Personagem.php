<?php

abstract class Personagem{
    private string $nome;
    private int $nivel;
    private int $vida;
    private int $vidaMaxima;


    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima)
    {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->vida = $vida;
        $this->vidaMaxima = $vidaMaxima;
    }

    public function mostrarDados()
    {
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Nivel: ' . $this->nivel . '<br>';
        echo 'Vida: ' . $this->vida . '<br>';
        echo 'Vida Máxima: ' . $this->nome . '<br>';
    }

    public function interagir()
    {
        echo 'Oi, meu nome é ' . $this->nome . '<br>';
    }

    public function receberDano(int $dano)
    {
        $this->vida -= $dano;
    }

    public function estaVivo() : bool
    {
        if($this->vida > 0){
            return true;
        }else{
            return false;
        }

    }

    public function ganharExperiencia(int $experiencia)
    {
        if($experiencia = 100)
            {
                $experiencia += $experiencia;
                $this->nivel += 1;
                $experiencia -= 100;
                $this->vidaMaxima += 20;
                $this->vida = $this->vidaMaxima;
                echo 'Parabéns! Você subiu de nível. <br>';
            }

    }





















    /**
     * Encapsulamento
     */ 
    public function getVidaMaxima()
    {
        return $this->vidaMaxima;
    }
    public function setVidaMaxima($vidaMaxima)
    {
        $this->vidaMaxima = $vidaMaxima;

    }

    
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

    }

    
    public function getNivel()
    {
        return $this->nivel;
    }
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

    }


    public function getVida()
    {
        return $this->vida;
    }
    public function setVida($vida)
    {
        $this->vida = $vida;

    }
}