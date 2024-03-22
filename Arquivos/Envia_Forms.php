<?php

    $nome = addslashes($_POST['Nome_SobreNome']);
    $email = addslashes($_POST['Email']);
    $telefone = addslashes($_POST['Telefones']);
    $pessoa = addslashes($_POST['TipoDepessoa']);
    $mensagem = addslashes($_POST['Mensagem']);

    // colocar o email da lility
    $enviar = "lilitysearchtruth.kigap@gmail.com";
    $contato = "Para Contato - Lility Search Truth";

    $corpo = "Nome Usuário: ".$nome."\n"."Email: ".$email."\n"."Telefone(Contato): ".$telefone."\n"."Tipo de pessoa: ".$pessoa."\n"."Mensagem (Adicional): ".$mensagem;

    $cabecalho = "From: willianchiquinato@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail($enviar, $contato, $corpo, $cabecalho)) 
    {
        echo("Formulário enviado com sucesso");
    }
    else {
        echo("Houve um erro ao enviar o formulario");
    }
?>