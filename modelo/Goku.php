<?php
require_once("IGuerreiro.php");

class Goku implements IGuerreiro
{
    public function atacar() {
        $dados = $this->ataque . "!!! \n";
        return $dados;
    }
    public function transformar() {
        $base = $this->transformacao;
        return $base;
    }

    private string $ataque;
    private string $transformacao;

    public function getAtaque(): string
    {
        return $this->ataque;
    }

    public function setAtaque(string $ataque): self
    {
        $this->ataque = $ataque;

        return $this;
    }

    public function getTransformacao(): string
    {
        return $this->transformacao;
    }

    public function setTransformacao(string $transformacao): self
    {
        $this->transformacao = $transformacao;

        return $this;
    }
}
