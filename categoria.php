<html>
    <head>
        <meta charset="utf-8">
        <style>
             input[type="radio"] {
            display: none;
    
        }
        input[type="submit"],a {
         width: 100%;
         padding: 10px;
         background-color: #28a745;
         color: white;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         font-size: 16px;}

         #borda{
            border: 1px dashed #FFFFFF;
         }


        /* Estilos para os rótulos */
        .radio-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 30px;
            font-family: Arial, Helvetica, sans-serif;
        }

        /*Estilos para as imagens de rótulo*/ 
        label {
            display: block;
            position: relative;
            border: 2px solid transparent;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        /* Quando o rádio está selecionado */
        input[type="radio"]:checked + label {
            border-color: #007BFF; /* Cor azul para borda do item selecionado */
            box-shadow: 0 8px 16px rgba(0, 123, 255, 0.3); /* Efeito de sombra suave */
            transform: translateY(-5px); /* Pequeno "levantar" ao ser selecionado */
        }

        /* Estilo ao passar o mouse */
        label:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Texto abaixo da imagem para cada rótulo */
        label .caption {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 5px 0;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.5px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
         </style>
    </head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION["user"])){
                header('Location:loginf.php?erro=true');
                exit;
            }
        ?>
        <div aling="center"class="radio-container">
            <form action="novela.php" method="GET">
                <div class="input-group">
                    <h2>Categorias Novelas Brasileiras</h2>
                    <fieldset id="borda">
                        <input type="radio" id="radio1"name="novela" value="memes">Top 5 memes
                        <label for="radio1" class="caption">
                        <img src="memes.jpeg">
                    </fieldset>
                    <fieldset id="borda">
                        <input type="radio" name="novela" id="radio2" value="casais">top 5 casais
                        <label for="radio2" class="caption">
                        <img src="casais.jpeg" alt="">
                    </fieldset>
                    <fieldset id="borda">
                        <input type="radio" name="novela" id="radio3" value="vila">Vilãs icônicas:
                        <label for="radio3" class="caption">
                        <img src="vilas.jpeg" alt="">
                    </fieldset>
                    <fieldset id="borda">
                        <input type="radio" name="novela" id="radio4" value="plot">Reviravoltas/Plot twist
                        <label for="radio4" class="caption">
                        <img src="plow.jpeg" alt="">
                        
                    </fieldset>
                    <fieldset id="borda">
                        <input type="radio" name="novela" id="radio5" value="epoca">Ambientadas em épocas passadas
                        <label for="radio5" class="caption">
                        <img src="epoca.jpeg" alt="">
                    </fieldset>

                    <div>
                        
                        <input type="submit" value="Ver o top!"></br>
                        </br><a href="logout.php">Sair</a></br></br>
                        </br><a href="index.php">Página direcionada ao index</a>

                    </div>
                    
                </diva>
            </form>

        </div>
    </body>

</html>