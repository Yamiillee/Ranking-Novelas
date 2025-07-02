<?php
    


?>

<html>
    <head>
        <meta charset="utf-8">
        <style>
            /* Estilo básico para a página de login */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    font-size: 14px;
    color: #333;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="sutmit"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button,
input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #218838;
}

#error-message {
    color: red;
    margin-top: 10px;
}

        </style>
        
    </head>
    <body>
          <div class = "login-container">
                <h2>Login</h2>
                 <form method = "POST" action = "login.php" id="loginForm">
                     <div class = "input-group">
                        <amg src = "site_novela/teste_site.jpeg" alt="logo que contém o título do site">
                        <label>Nome de usuário:</label><br/>
                        <input type = "text" name="user" maxlength="20" placeholder="Nome de usuário" required id="username"/></br>
                    </div>
                    <div class="input-group">
                        <label>Email desejado:</label><br/>
                        <input id ="email" type="email" placeholder="Email desejado" name = "email" required/></br>
                    </div>
                    <div class="input-group">
                        <label i>Senha:</label>
                        <input id = "password" type ="password" size = "25"  name ="senha" maxlength ="16" required ><br/>
                    </div>
                    <div class="input-group">
                    <input id="botom" type="submit" value="Enviar">
                    </div>
                    <div class="input-group">
                        <label>Link direcionado a</label>
                        <a href="index.php">página index</a>
                    </div>

            </form>
     </div>
    </body>
<html>