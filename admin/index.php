<!--Bloco responsavel por mandar os resgistros a base de dados-->
<?php
 if(isset($_POST['submit']))
 {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $provincia = $_POST['provincia'];
    $cidade = $_POST['cidade'];
    $morada = $_POST['morada'];

    $result = mysqli_query($conexao, "insert into cliente(nome, email, telefone, sexo, data_nascimento, provincia, cidade, morada)
    values ('$nome', '$email', '$telefone', '$sexo', '$data_nascimento', '$provincia', '$cidade', '$morada')");
 }
?>
<!--Fim do bloco de registro dos dados na base de dados-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
    <title>Formulario Registro</title>
</head>
<body>
     <div class="principal">
         <form action="index.php" method="POST">
              <fieldset>
                     <legend><b>Formulario Do Cliente</b></legend>
                        <br>
                        <div class="input">
                            <i class='bxr  bxs-user icon'></i> 
                            <input type="text" name="nome" id="nome" class="input_user" required>
                            <label for="nome" class="label">Nome Completo</label>
                        </div> 
                        <br>
                        <div class="input">
                            <i class='bxr  bx-envelope icon'></i> 
                            <input type="text" name="email" id="email" class="input_user" required>
                            <label for="email" class="label">E-mail</label>
                        </div>
                        <br>
                        <div class="input">
                            <i class='bxr  bx-phone icon'></i>
                            <input type="text" name="telefone" id="telefone" class="input_user" required>
                            <label for="telefone" class="label">Telefone</label>
                        </div>
                        <br>
                         <div class="sexo_container">
                            <p>Sexo</p>
                            <div class="sexo_option">
                                <input type="radio" id="feminino" name="sexo" value="Feminino" required>
                                <label for="feminino" class="label"><i class='bx bxs-female'></i> Feminino</label>
                            </div>
                            <div class="sexo_option">
                                <input type="radio" id="masculino" name="sexo" value="Masculino" required>
                                <label for="masculino" class="label"><i class='bx bxs-male'></i> Masculino</label>
                            </div>
                        </div>
                        <br>
                        <div class="input">
                            <input type="date" id="data_nascimento" name="data_nascimento" value="" class="input_user" required>
                            <label for="data_nascimento" class="label"><b>Data de Nascimento</b></label>
                        </div>
                        <br>
                        <div class="input">
                            <i class='bxr  bxs-flag-alt-3 icon'></i> 
                            <input type="text" name="provincia" id="provincia" class="input_user" required>
                            <label for="provincia" class="label">Provincia</label>
                        </div> 
                        <br>
                        <div class="input">
                            <i class='bxr  bxs-city icon'></i> 
                            <input type="text" name="cidade" id="cidade" class="input_user" required>
                            <label for="cidade" class="label">Cidade</label>
                        </div> 
                        <br>
                        <div class="input">
                            <i class='bxr  bxs-home-alt icon'></i>  
                            <input type="text" name="morada" id="morada" class="input_user" required>
                            <label for="morada" class="label">Morada</label>
                        </div>
                        <br>
                        <input type="submit" name="submit" id="submit">
                        <br><br>
              </fieldset>
         </form>
     </div>
</body>
</html>