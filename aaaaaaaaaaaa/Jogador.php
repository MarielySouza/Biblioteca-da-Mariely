<?php

require_once 'Personagem.php';

class Jogador extends Personagem
{
    private string $classe;
    private int $mana;
    private int $manaMaxima = 150;
    

    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima, string $classe, int $mana, int $manaMaxima)
    {
        parent::__construct($nome, $nivel, $vida, $vidaMaxima);
        $this->classe = $classe;
        $this->mana = $mana;
        $this->manaMaxima = $manaMaxima;

    }

    public function interagir()
    {
        parent::interagir();
    }

    public function atacar(int $dano)
    {
        $dano = $this->getNivel() * 10;

        return $dano;
    }

    public function usarHabilidade()
    {
        if($this->mana >= 30)
            {
                $dano = $this->getNivel() * 20;

                return $dano;
            }else{
                return 0;
                echo 'Você não possui mana o suficiente. <br>';
            }
    }

    public function recuperarMana()
    {
        $this->manaMaxima = 150;
    }

















    /**
     * Encapsulamento
     */ 
    public function getClasse()
    {
        return $this->classe;
    }
    public function setClasse($classe)
    {
        $this->classe = $classe;

    }

    
    public function getMana()
    {
        return $this->mana;
    }
    public function setMana($mana)
    {
        $this->mana = $mana;

    }

    
    public function getManaMaxima()
    {
        return $this->manaMaxima;
    }
    public function setManaMaxima($manaMaxima)
    {
        $this->manaMaxima = $manaMaxima;

    }
}