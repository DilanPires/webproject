<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        :root{
            --primary-color: #0d1936;
            --secondary-color: #535354;
            --background-color: #Efefef;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --White-color: #ffffff;
            --input-border-color: #e3e4e6;
            --transition-3s: 0.3s;
        }
        body{
            font-family: 'poppins', sans-serif;
            background-color: var(--secondary-color);
            text-align: center;
            color: var(--White-color);
        }
        .principal{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -50%);
            background-color: var(--background-color);
            width: 15%;
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            border-radius: 5px;
            padding: 10px;
        }
        a:hover{
            background-color: var(--secondary-color);
            color: white;
        }
    </style>
</head>
<body>
      <h1>Registro de Clientes na Pagina de Teste</h1>
      <h2>Faca o seu registro e mantenha-se ligado a nos! }:)</h2>

      <div class="principal">
        <a href="admin/login.php">Login</a>
        <a href="admin/index.php">Cadastre-se</a>
      </div>
</body>
</html>