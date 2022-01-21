<?php

    /*
    Comentário em bloco
    */
    //Comentário em linha

    //Comando para escrever um conteúdo na tela
    // echo('Testando o PHP');
    //Comando para escrever um conteúdo na tela
    // print_r('Testando outra forma de escrever');

    //isset() permite verificar a existência de uma variável ou objeto
    //Verificar se o botão foi clicado e disponibilzado na ação do GET
    if(isset($_GET['btnSalvar'])){

    
    //Recuperando dados via GET do formulário
    
    $nome = $_GET['txtNome'];
    $cidade = $_GET['sltCidade'];
    $sexo = $_GET['rdoSexo'];
    $obs = $_GET['txtObs'];

    //Foram criadas essas variáveis para resolver o problema de variável indefinida na hora de recupera os dados do checkBox
    $idiomaPortugues = null;
    $idiomaIngles = null;
    $idiomaItaliano = null;
    $idiomaFrances = null;

    //Verificando os checkBox que foram marcados para poder recuperar seus dados
    if(isset($_GET['chkPortugues'])){
        $idiomaPortugues = $_GET['chkPortugues'];
    }
    if(isset($_GET['chkIngles'])){
        $idiomaIngles = $_GET['chkIngles'];
    }
    if(isset($_GET['chkItaliano'])){
        $idiomaItaliano = $_GET['chkItaliano'];
    }
    if(isset($_GET['chkFrances'])){
        $idiomaFrances = $_GET['chkFrances'];
    }
    //Escrevendo o conteúdo das variáveis no navegador

    //Concatenação é represantada pelo . 
    echo($nome . '<br>');
    echo($cidade. '<br>');
    echo($sexo. '<br>');
    echo($idiomaPortugues.' '.$idiomaIngles.' '.$idiomaItaliano.' '.$idiomaFrances. '<br>');
    echo($obs. '');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <style>
    /*Código para desativar o redirecionamento da textarea */
        textarea{
            resize: none;
        }
    </style>
</head>
<body>

    <!-- GET -> permite retirar os dados do formulário e disponibiliza-los na URL da página 

    POST -> permite retirar os dados do formulário e disponibiliza-los em variáveis locais 

    action é utilizado para especificar em qual arquivo ou página será disponibilizados os arquivos do form

    input type= "text" permite colocar uma caixa do tipo texto

            size="" permite espeificar o tamanho da caixa de texto

            maxlength permite especificar o número máximo de caracteres 

    <select> permite criar uma lista de opções
        <option> é através dela que podemos criar itens dentro da lista
            <option value = ""> a propriedade value é obrigatória para que o formulário consiga resgatar o valor do item selecionado pelo usuário e dsponibilzar para o Back-end

    <input type="radio". permite criar opções de escolha. 
                Obs: para configurar o radio fazendo com que permita somente uma escolha , é necessário que eles tenham o mesmo nome. Contudo seus values devem ser diferentes.

-->
<h1>Formulário de Cadastro</h1>
    <form name= "frmCadastro" method="GET" action="formularios.php">
        nome:
        <input type="text" name="txtNome" size="50" maxlength="50" id=""><br>
        cidade:
        <select name="sltCidade" id="">
            <option value="" selected>Selecione um item</option>
            <option value="itapevi">Itapevi</option>
            <option value="jandira">Jandira</option>
            <option value="barueri">Barueri</option>
            <option value="carapicuíba">Carapicuíba</option>
            <option value="osasco">Osasco</option>
        </select>
        <br>
        Sexo:
        <input type="radio" name="rdoSexo" value="M" checked>Masculino
        <input type="radio" name="rdoSexo" value="F">Feminino
        <input type="radio" name="rdoSexo" value="O">Outros <br>
        Idiomas:
        <input type="checkbox" name="chkPortugues" value="pt">Português
        <input type="checkbox" name="chkIngles" value="en">Inglês
        <input type="checkbox" name="chkItaliano" value="it">Italiano
        <input type="checkbox" name="chkFrances" value="fr">Francês <br>
       Observação:
        <textarea name="txtObs" id="" cols="30" rows="10"></textarea><br>

        <!-- <input type ="submit"> permite retirar os dados através do próprio HTML, fazendo um submit dos dados
            
            <input type="button"> só é possível retirar os dados do formulário atráves do JavaScript

            <input type="reset"> Permite limpar todos os elementos do formulário
        -->
        <input type="submit" name= "btnSalvar" value="Salvar">
        <input type="reset" name= "btnLimpar" value="Limpar">
    </form>
</body>
</html>