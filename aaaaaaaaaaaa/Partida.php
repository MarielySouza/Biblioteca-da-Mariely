<?php

require_once 'Jogador.php';
require_once 'Inimigo.php';

class Partida
{
    private string $nome;
    private Jogador $jogador;
    private $inimigos = [];
    private int $rodada;

    public function __construct(string $nome, Jogador $jogador, int $rodada)
    {
        $this->nome = $nome;
        $this->$jogador = $jogador;
    }


    public function adicionarInimigo(Inimigo $inimigo)
    {
        $this->inimigos[] = $inimigo;

    }

   

    public function atacarInimigo()
    {

    }

    public function mostrarInimigos() {
        foreach ($this->inimigos as $inimigo) {
            $inimigo->Inimigo->mostrarDados();  
            echo '<br';
        }
    }

     public function iniciar()
    {
        echo 'Seja bem vindo player: ' . $this->jogador->getNome() . '. Os seus inimigos são: ' . $this->mostrarInimigos() . '<br>';

    }

    public function verificarFim() 
    {
        if($this->jogador->estaVivo() == false)
            {
                echo 'O player faleceu, fim da partida!';
            }elseif($this->inimigo->estaVivo() == false)
            {
                echo 'Inimigos derrotados, fim da partida!';

            }

    }

    

    public function relatorio()
    {
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Jogador: ' . $this->jogador . '<br>';
        echo 'Inimigos: ' . $this->mostrarInimigos() . '<br>';
        echo 'Nome: ' . $this->nome . '<br>';
    }

    









    /**
     * Dale mais encapsulamento
     */ 
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

    }

    
    public function getJogador()
    {
        return $this->jogador;
    }
    public function setJogador(Jogador $jogador)
    {
        $this->jogador = $jogador;

    }


    public function getRodada()
    {
        return $this->rodada;
    }
    public function setRodada($rodada)
    {
        $this->rodada = $rodada;

    }

    
    public function getInimigos()
    {
        return $this->inimigos;
    }
    public function setInimigos($inimigos)
    {
        $this->inimigos = $inimigos;


    }
}