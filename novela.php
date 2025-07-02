                <?php
    session_start();
    $_SESSION ["novela"]= $_GET["novela"];
    if(isset($_GET));
    if(($_SESSION["novela"] == 'memes') || ($_SESSION["novela"] == 'casais') ||($_SESSION["novela"] == 'epoca') ||($_SESSION["novela"] == 'epoca') ||($_SESSION["novela"] == 'vila')|| ($_SESSION["novela"] == 'plot')){
    switch ($_SESSION["novela"]) {
        case 'memes':
            echo "<html>
                    <head>
                         <style>  
                            div {
				                width: 350px;
				                height: auto;
				                border: 8px inset #152238;
				                border-radius:25px;
				                padding: 30px;
				                margin: auto;
				                }
                        </style>
                    </head>
                    <body>
                        <div>
                        <h3>Memes e Bordões
                        <ol>
                            <li>Salguei a Santa Ceia! de Félix em Amor à Vida (2013)</li>
                            <li>Inshalá! de Khadija em O Clone (2001)</li>
                            <li>Eu sou rica! de Norma em Beleza Pura (2008)</li>
                            <li>Oxente, My God! de Maria Altiva em A indomada (1997)</li>
                            <li>Epa, epa, epa, epa, muita calma nessa hora! de Juvenal Antena em Duas caras (2007)</li>
                        </h3>
                        </ol>
                        </div>
                    </body>
                  </html>";
            break;
        case 'casais';            
        echo "<html>
                <head>
                     <style>  
                        div {
				            width: 350px;
				            height: auto;
				            border: 8px inset #152238;
				            border-radius:25px;
				            padding: 30px;
				            margin: auto;
				            }
                    </style>
                </head>
                <body>
                    <div>
                    <h3> Casais mais amados
                    <ol>
                        <li>Jade e Lucas - O clone (2001)</li>
                        <li>Maya e Raj - Caminho das Indias (2009)</li>
                        <li>Milena e Nando - Por amor (1997)</li>
                        <li>Niko e Félix - Amor à vida (2013)</li>
                        <li>Rafael e Serena - Alma Gêmea (2005)</li>
                     </h3>
                    </ol>
                    </div>
                </body>
              </html>";
            break;
        case 'epoca':
            echo "<html>
                    <head>
                        <style>  
                            div {
				                width: 350px;
				                height: auto;
				                border: 8px inset #152238;
				                border-radius:25px;
				                padding: 30px;
				                margin: auto;
				                }
                        </style>
                    </head>
                    <body>
                        <div>
                        <h3> Ambientadas em epócas passadas
                        <ol>
                            <li>O cravo e a rosa (2000)</li>
                            <li>Chocolate com pimenta (2003)</li>
                            <li>Além do tempo (2015)</li>
                            <li>Eta mundo bom (2016)</li>
                            <li>A casa das sete mulheres (2003)</li>
                        <h3>
                        </ol>
                        </div>
                    </body>
                  </html>";
            break;
        case 'vila':
            echo "<html>
                      <head>
                         <style>  
                             div {
				                  width: 350px;
				                  height: auto;
				                  border: 8px inset #152238;
				                  border-radius:25px;
				                  padding: 30px;
				                  margin: auto;
				                }
                         </style>
                      </head>
                      <body>
                        <div>
                        <h3> Vilãs Icônicas
                        <ol>
                            <li>Carminha - Avenida Brasil (2012)</li>
                            <li>Nazáre - Senhora do Destino (2004)</li>
                            <li>Flora - A Favorita (2008)</li>
                            <li>Odete Roitman - Vale Tudo (1988)</li>
                            <li>Tereza Cristina - Fina Estampa (2011)</li>
                        </h3>
                        </ol>
                        </div>
                      </body>
                    </html>";
            break;
        case 'plot':
            echo "<html>
                    <head>
                        <style>  
                            div {
				                 width: 350px;
				                 height: auto;
				                 border: 8px inset #152238;
				                 border-radius:25px;
				                 padding: 30px;
				                 margin: auto;
				                }
                        </style>
                    </head>
                    <body>
                        <div>
                        <h3> Revivoltas e Plot Twist
                        <ol>
                            <li>Tieta (1989)</li>
                            <li>Roque Santeiro (1985)</li>
                            <li>A Próxima Vítima (1995)</li>
                            <li>Celebridade (2003)</li>
                            <li>O Outro Lado do Paraiso (2017)</li>
                        </h3>
                        </ol>
                        </div>
                    </body>
                  </html>";
            break;
        
        default:
            echo 'Nada escolhido';
            break;
    }
}else{header('Location: categoria.php?erro=escolhacategoria');
    exit;}
?>


<html>
    <head>
        <meta charset="utf-8">
        <style>

            a{width: 100%;
              padding: 6px;
              background-color: #28a745;
              color: white;
              border: none;
              border-radius: 5px;
              cursor: pointer;
              font-size: 16px;
              font-family: Arial, Helvetica, sans-serif;
            }
            li{
                display: flex;
                 justify-content: center;
                 align-items: center;
                  gap: 20px;
                  margin-top: 30px;
                  font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
        <a href="categoria.php">Voltar para categorias</a></br>
        </br><a href="logout.php">Sair</a></br>
        </br><a href="index.php"> Redirecionamneto ao index</a>

    </body>
</html>