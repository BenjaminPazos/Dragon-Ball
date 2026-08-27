<?php
require_once("modelo/Goku.php");
require_once("modelo/Vegeta.php");
require_once("modelo/Freeza.php");

$forma = "base";

echo "> (1) Goku   <\n";
echo "> (2) Vegeta <\n";
echo "> (3) Freeza <\n";
$resposta = readline("Escolha um personagem: ");
switch ($resposta) {
    case '1':
        echo "Você escolheu Goku!!! \n";
        $Goku = new Goku();
        $Goku->setAtaque("Kamehameha");
        $Goku->setTransformacao("Super Saiyajin 1");
        do {
            echo "----> Goku <------\n";
            echo "Forma: " . $forma . "\n";
            echo "(1) Ataque \n";
            echo "(2) Transformação \n";
            echo "(0) Sair \n";
            $a = readline("Opção: ");
            switch ($a) {
                case '1':
                    echo $Goku->atacar();
                    break;
                case '2':
                    echo "Transformando em Super Saiyajin 1!!! \n";
                    $forma = $Goku->getTransformacao();
                    break;
                case '0':
                    echo "Saindo...\n";
                    break;
                default:
                    echo "Opção indisponível \n";
                    break;
            }
        } while ($a != 0);
        break;
    case '2':
        echo "Você escolheu Vegeta!!! \n";
        $Vegeta = new Vegeta();
        $Vegeta->setAtaque("Final Flash");
        $Vegeta->setTransformacao("Majin Vegeta");
        do {
            echo "----> Vegeta <------\n";
            echo "Forma: " . $forma . "\n";
            echo "(1) Ataque \n";
            echo "(2) Transformação \n";
            echo "(0) Sair \n";
            $a = readline("Opção: ");
            switch ($a) {
                case '1':
                    echo $Vegeta->atacar();
                    break;
                case '2':
                    echo "Transformando em Majin Vegeta!!! \n";
                    $forma = $Vegeta->getTransformacao();
                    break;
                case '0':
                    echo "Saindo...\n";
                    break;
                default:
                    echo "Opção indisponível \n";
                    break;
            }
        } while ($a != 0);
        break;
    case '3':
        echo "Você escolheu Freeza!!! \n";
        $Freeza = new Freeza();
        $Freeza->setAtaque("Death Ball");
        $Freeza->setTransformacao("Golden Freeza");
        do {
            echo "----> Freeza <------\n";
            echo "Forma: " . $forma . "\n";
            echo "(1) Ataque \n";
            echo "(2) Transformação \n";
            echo "(0) Sair \n";
            $a = readline("Opção: ");
            switch ($a) {
                case '1':
                    echo $Freeza->atacar();
                    break;
                case '2':
                    echo "Transformando em Golden Freeza!!! \n";
                    $forma = $Freeza->getTransformacao();
                    break;
                case '0':
                    echo "Saindo...\n";
                    break;
                default:
                    echo "Opção indisponível \n";
                    break;
            }
        } while ($a != 0);
        break;
    default:
        echo "Personagem não existe \n";
        break;
}
