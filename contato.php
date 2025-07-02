<?php
//contato.php
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<style>
		div {
			font-family: Arial, Helvetica, sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			gap: 100px;
			margin-top: 100px;
			background-color: #FFFFFF;
			border-radius: 25px;
			padding: 10px;
		}

		#borda {
			border: 1px dashed #28a745;
		}

		input[type="submit"],
		a {
			width: 10%;
			padding: 8px;
			background-color: #28a745;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 10px;
		}
	</style>

	<meta charset="UTF-8">
	<title>Página de Contato</title>
</head>

<body>
	<div>
		<fieldset id="borda">
			<h1>Sobre Nós:</h1>
			<hr>
			<p> Somos três alunas de Ciência da Computação da universidade UNICID (Universidade Cidade De São Paulo) e orientadas pelo docente Paulo Henrique criamos um projeto de um site.
				Nos unimos para explorar o fascinante mundo das novelas!
				Nossa paixão por contar histórias e entender narrativas nos levou a criar este espaço onde você encontrará análises,
				resenhas, curiosidades e tudo sobre novelas, as mais acolhida pelo público e entre outras.
				Sinta-se à vontade para interagir, comentar e compartilhar suas experiências com as novelas que amamos! </p>
			<h1> Fale Conosco: </h1>
			<hr>
			<form action="seu-script.php" method="post">
				<label>Nome:
					<input type="text" name="nome" /><br />
					<label>E-mail:
						<input type="text" name="email" /><br />
						<label>Mensagem:<br />
							<textarea name="mensagem" rows="5" cols="20" placeholder="Escreva aqui..."></textarea><br />
							<input type="submit" value="Enviar">
							<h1>Visite Nossa Sede:</h1>

							<hr>
							<p>Estamos localizados em:</p>

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7315.788859622009!2d-46.562793723788886!3d-23.53629916067372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5fdcd8db398f%3A0x97014393e4ef19b8!2sUNICID%20-%20Universidade%20de%20S%C3%A3o%20Paulo%20-%20Campus%20Tatuap%C3%A9!5e0!3m2!1spt-BR!2sbr!4v1750796193042!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<hr>
							<h1>Lógica Utilizada:</h1>
							<p>
								O site foi criado com o intuito de divertir o usuário com categorias singulares. Para isso, definimos categorias que abrangem <strong>memes, casais populares, vilãs famosas, reviravoltas e novelas de época </strong>.
							</p>

							<h3>Início da Sessão e Parâmetro "novela":</h3>
							<p>
								A sessão é iniciada com <code>session_start()</code>, permitindo o uso de variáveis de sessão.<br>
								A variável <code>$_SESSION["novela"]</code> é definida a partir do parâmetro <code>$_GET["novela"]</code>, indicando qual categoria o usuário escolheu pela URL.
							</p>

							<h3>Verificação da Categoria:</h3>
							<p>
								O código verifica se o parâmetro <code>$_GET</code> foi definido corretamente e se <code>$_SESSION["novela"]</code> corresponde a uma das categorias válidas: <strong>memes</strong>, <strong>casais</strong>, <strong>época</strong>, <strong>vilã</strong> ou <strong>plot</strong>.<br>
								Caso contrário, redireciona para <code>categoria.php?erro=escolhacategoria</code>.
							</p>

							<h3>Switch para Determinar a Categoria e Gerar Conteúdo:</h3>
							<p>
								Um <code>switch</code> é usado com base no valor de <code>$_SESSION["novela"]</code> para exibir a lista correta:<br>
								<strong>memes</strong>: Frases icônicas de personagens.<br>
								<strong>casais</strong>: Casais famosos de novelas.<br>
								<strong>época</strong>: Novelas ambientadas no passado.<br>
								<strong>vilã</strong>: Vilãs marcantes.<br>
								<strong>plot</strong>: Novelas com grandes reviravoltas.
							</p>

							<h3>Estilo do HTML:</h3>
							<p>
								Após o switch, o HTML inclui um estilo com elementos visuais:<br>
								- Links com fundo verde, bordas arredondadas e texto branco.<br>
								- Itens da lista centralizados, com espaçamento e fonte Arial.
							</p>

							<h3>Login:</h3>
							<p>
								O login usa <code>session_start()</code> para armazenar dados do usuário.<br>
								Validação com <code>isset()</code> verifica se <code>user</code>, <code>email</code> e <code>senha</code> foram enviados via <code>POST</code>.<br><br>
								Requisitos para acesso:<br>
								- User: <code>paulo</code> ou <code>Paulo</code><br>
								- Email: <code>paulohenri@gmail.com</code><br>
								- Senha: <code>projetosite</code><br><br>
								Se correto, redireciona para <code>categoria.php</code>. Caso contrário, volta para <code>loginf.php?erro=true</code>.
							</p>

							<h3>Logout:</h3>
							<p>
								Utiliza novamente <code>session_start()</code>, seguido por <code>session_destroy()</code> para encerrar a sessão atual.<br>
								O usuário é redirecionado para <code>loginf.php</code> com <code>header('Location: loginf.php')</code>.
							</p>

							<h3>Observação Final:</h3>
							<p>
								Nenhum dos códigos usa estrutura de repetição. As decisões são feitas apenas com <code>if</code> e <code>else</code>.<br><br>
								Recomendamos acessar as páginas pela barra de navegação. Apenas a página de contato está acessível sem login.
							</p>
							<hr>


							<h1>Alunas(o):</h1>
							<p>
								</br>Kevilyn Silva</br>
								</br>Jacqueline Sousa</br>
								</br>Yamille Nascimento</br></br>
								<hr>

								<a href="index.php">Redirecionamento para Index</a>
								<a href="loginf">Login</a>
		</fieldset>
		</form>
	</div>
</body>

</html>