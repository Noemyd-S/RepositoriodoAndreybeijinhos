<?php
if(isset($_POST['submit']))
{
    include_once('../../config.php');
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_de_nascimento'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,cpf,email,senha,data_de_nascimento) 
        VALUES('$nome','$sobrenome','$cpf','$email','$senha','$data_nasc')");
    
// header('Location: ../../html\telas\entrar.html');

}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de cadastro</title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600;700;800;900&family=Oswald:wght@500&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #d1617346;
}

.container {
    width: 80%;
    height: 80vh;
    display: flex;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, .212);
}

.form-image {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0d6db;
    padding: 1rem;
}

.form-image img {
    width: 55rem;
}

.form {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #fff;
    padding: 3rem;
}

.form-header {
    margin-bottom: 3rem;
    display: flex;
    justify-content: space-between;
}

.login-button {
    display: flex;
    align-items: center;
}

.login-button button {
    border: none;
    background-color: #be44779f;
    padding: 0.4rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.login-button button:hover {
    background-color: #be44779f;
}

.login-button button a {
    text-decoration: none;
    font-weight: 500;
    color: #ffe2e2;
}

.form-header h1::after {
    content: '';
    display: block;
    width: 5rem;
    height: 0.3rem;
    background-color: #be44779f;
    margin: 0 auto;
    position: absolute;
    border-radius: 10px;
}

.input-group {
    display: flex;
    flex-wrap:wrap;
    justify-content: space-between;
    padding: 1rem 0;
}

.input-box {
    display: flex;
    flex-direction: column;
    margin-bottom: 1.1rem;
}

.input-box input {
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #00001c;
}

.input-box input:hover {
    background-color: #eeeeee75;
}

.input-box input:focus-visible {
    outline: 1px solid #be44779f;
}

.input-box label,
.gender-title h3 {
    font-size: 0.75rem;
    font-weight: 600;
    color: #000000c0;
}

.input-box input::placeholder {
    color: #000000be;
}

.gender-group {
    display: flex;
    justify-content: space-between;
    margin-top: 0.62rem;
    padding: 0 0.5rem;
}

.gender-input {
    display: flex;
    align-items: center;
}

.gender-input input {
    margin-right: 0.35rem ;
}

.gender-input label {
    font-size: 0.81rem;
    font-weight: 600;
    color: #000000c0;
}

.submit {
    width: 100%;
    margin-top: 2.5rem;
    border: none;
    background-color: #be44779f;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}

.submit:hover {
    background-color: #ef6fee;
}


@media screen and (max-width: 1330px) {
     .form-image {
        display: none;
     }

     .container {
        width: 50%;
     }

     .form {
        width: 100%;
     }
}
.confirmar button {
    width: 100%;
    margin-top: 2.5rem;
    border: none;
    background-color: #be44779f;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}

.confirmar button:hover {
    background-color: #be44779f;
}

.confirmar button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}

    </style>
    <body>
        <div class="container">
            <div class="form-image">
               <img src="../../css\assets\real DN.png" alt=""> 
            </div>
            <div class="form">
                <form action="cadastro.php" method="POST" >
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre-se</h1>
                        </div>
                        <!-- <div class="login-button">
                            <button onclick="Clicar()"><a href="../../html\telas\entrar.html">Entrar</a></button>
                        </div> -->
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome">Primeiro nome</label>
                            <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                        </div>

                        <div class="input-box">
                            <label for="sobrenome">Segundo nome</label>
                            <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu segundo nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu Email" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="xxx.xxx.xxx-(xx)" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <!-- <div class="input-box">
                        <label for="Confirmpassaword">Confirme sua senha</label>
                        <input id="Confirmpassaword" type="password" name="Confirmpassaword" placeholder="Confirme sua senha" required>
                    </div> -->

                    <div class="input-box">
                        <label for="data_de_nascimento"> Data de nascimento: </label>
                        <input id="data_de_nascimento" type="date" name="data_de_nascimento" required>
                    
                    </div>

                    <input type="submit" class="submit" name="submit" id="submit">
                    
                        
                  <!-- botão para fazer ir para a próxima página de finalizar -->
                    <!-- <div class="continue-button">
                        <button onclick="Clicar()"><a href="../../html\telas\entrar.html">Continuar</a></button>
                        <p id="demo"></p>
                    </div> -->
                    
                   
                </form>
            </div>
        </div>
    </body>
</html>
<!-- função clicar botão continuar
<script type="text/javascript"> 
function Clicar() {
    document.getElementById("demo").innerHTML = <a href="../html\telas\entrar.html"> Entrar </a>
}
</script> -->

 <!-- Mostrar senha  (erro) -->
<!-- <script> type="text/javascript">
function mostrarOcultarSenha(){
var senha= document.getElementById("password");
if(senha.type=="password"){
    senha.type="text";
}else{
    senha.type="password";
}
}
 </script> -->