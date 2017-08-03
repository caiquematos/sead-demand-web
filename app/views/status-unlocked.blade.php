<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demanda SEAD</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome center">
		<h2>Olá, {{$username}}.</h2>
		<p>Seu supervisor aprovou seu pedido de registro, agora você já tem acesso ao nosso aplicativo.</p>
		<p>Atenciosamente,</p>
		<a href="http://sead.univasf.edu.br/" title="Versão Web">
			Demanda SEAD
		</a>
	</div>
</body>
</html>