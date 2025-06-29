<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="principal">
        <div class="forumulario">
            <div class="titulos">
                <div class="titulo_login">Login</div>
                <div class="titulo_registro">Registro</div>
            </div>
        </div>    
        <!--Inicio do Login-->
            <form action="#" class="formulario_login" autocomplete="off">
                <!--caixas de texto e as labels-->
                    <div class="input">
                       <input type="text" class="input_field" id="log-email" required> 
                       <label for="log-email" class="label">E-mail</label> 
                       <i class='bxr  bx-envelope icon'></i> 
                    </div>
                    <div class="input">
                       <input type="password" class="input_field" id="log-pass" required>
                       <label for="log-pass" class="label">Password</label> 
                       <i class='bxr  bx-lock icon'></i> 
                    </div>
                    <!--Recuperar senha-->
                    <div class="form_cols">
                        <div class="col-1"></div>
                        <div class="col-2"><a href="#">Esqueceu a senha?</a></div>
                    </div>
                    <div class="input">
                        <button class="btn_salvar" id="btn_salvar">Logar <i class='bxr  bx-arrow-in-right-square-half icon'  ></i> </button>
                    </div>
                    <!--Fim da recuperacao da senha-->
                    <!--Troca de formulario-->
                    <div class="troca_form">
                        <span>Nao tem uma conta? <a href="#" onclick="funcaoregistro()">Registre-se</a></span>
                    </div>
                <!--Fim das caixas de texto-->    
            </form>
            <!--fim do Login-->
            
             <!--Inicio do Registro-->
            <form action="#" class="formulario_Registro" autocomplete="off">
                <!--caixas de texto e as labels-->
                    <div class="input">
                       <input type="text" class="input_field" id="reg-nome" required> 
                       <label for="reg-nome" class="label">Nome do usuario</label> 
                       <i class='bxr  bx-user icon'></i> 
                    </div>
                    <div class="input">
                       <input type="text" class="input_field" id="reg-email" required> 
                       <label for="reg-email" class="label">E-mail</label> 
                       <i class='bxr  bx-envelope icon'></i> 
                    </div>
                    <div class="input">
                       <input type="password" class="input_field" id="reg-pass" required>
                       <label for="reg-pass" class="label">Password</label> 
                       <i class='bxr  bx-lock icon'></i> 
                    </div>
                    <!--Recuperar senha-->
                    <div class="form_cols">
                        <div class="col_1">
                            <input type="checkbox" id="aceita">
                            <label for="aceita">Aceita os termos & condicoes?</label>
                        </div>
                        <div class="col_2"></div>
                    </div>
                    <div class="input">
                        <button class="btn_salvar" id="btn_cadastro">Cadastrar <i class='bxr  bx-user-check icon'></i>  </button>
                    </div>
                    <!--Fim da recuperacao da senha-->
                    <!--Troca de formulario-->
                    <div class="troca_form">
                        <span>Ja tem uma conta? <a href="#" onclick="funcaologin()">Entrar</a></span>
                    </div>
                <!--Fim das caixas de texto-->    
            </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>