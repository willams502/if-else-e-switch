<?php
    /* IF ELSE ELSEIF funciona igual java script

    if(concicao){
        o que acontece se verdadeira
    }else{
        o que acontece se falso
    }

    if (condicao){
        oque acontece se verdadeira
    }elseif{
        oque acontece se a primeira for falso e essa for verdadeira
    }else{
        oque acontece se todas as condições forem falsas.
    }
    */
   /* $hora = 2;

    if ($hora < 12){
        echo "Boa Dia!";
    }elseif ($hora < 18){
        echo "Bom Tarde!";
    }else{
        echo "Boa noite";
    }  */

    //switch 
    
    $cor = "bege";

    switch($cor){
        case "vermelho":
            echo "A cor é vermelho";
            break;
        case "azul";
            echo "a cor é azul";
            break;
        case "rosa";
            echo"A cor é rosa";
            break;
        default:
        echo "A cor ".$cor." não é conhecida";
    }
?>