<?php
    $nome=$_POST['nome'];
    $estado=$_POST['uf'];
    $cidade=$_POST['cidade'];
    $telefone=$_POST['telefone'];

    include "cabecalho.inc";

    $SQL = "INSERT INTO dados (Nome, Estado, Cidade, Telefone) 

                VALUE ('$nome', '$estado', '$cidade', '$telefone')";



        echo'<center><h2 class="">Pessoa cadastrada com sucesso!<h2>';

        

        include "rodape.inc";


?>