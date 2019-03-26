<?php

	$con= mysqli_connect("localhost", "root", "", "gota_de_esperanca");


	if (!$con) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	
	$nome= $_POST["Nome"];
	$idade= $_POST["Idade"];
	$hospital= $_POST["Hospital"];
	$cidade= $_POST["Cidade"];
	$tipo_sanguineo= $_POST["TipoSanguineo"];
	$telefone= $_POST["Telefone"];

	$sql= "INSERT INTO tb_pedidos VALUES (NULL, '$nome', '$idade', '$hospital', '$cidade', '$tipo_sanguineo', '$telefone')";
	$res= mysqli_query($con, $sql);

	mysqli_close($con);

?>

<html>

	<head>

		<title>Solicitar Doação</title>
		<link rel="icon" type="image/png" href="Img/logo.png">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>

	</head>

	<body>

		<div class="head">
			<header>
				<a href="index.html">
					<div class="imgLogo">
						<img src="Img/logo.png" class="Logo">
						<p class="TituloLogo">Gota de Esperança</p>
					</div>	
				</a>
			</header>
		</div>

		<div class="menu">
			<nav>
				<a href="index.html"><div class="link">Home</div></a>
				<a href="fazer_pedidos.html"><div class="link">Solicitar Doação</div></a>
				<a href="pedidos.php"><div class="link">Solicitações Feitas</div></a>
				<a href="locais_de_doacao.html"><div class="link">Locais de Doação</div></a>
				<a href="quem_somos.html"><div class="link">Quem Somos</div></a>
				<a href="frase_do_dia.html"><div class="link">Frase do Dia</div></a>
				<a href="perguntas_frequentes.html"><div class="link">Perguntas Frequentes</div></a>
			</nav>
		</div>	

		<div class="section">
			<section>
				<form class="FazerPedidos" method="post" action="fazerpedidos.php">
					<br>

					<label class="lblFazerPedidos">Nome:</label>
					<input type="text" name="Nome" placeholder="seu Nome" style="margin-left: 28px" readonly="true">
					

					<label class="lblFazerPedidos">Idade:</label>
					<input type="text" name="Idade" placeholder="sua Idade" style="margin-left: 13px" readonly="true">
					

					<label class="lblFazerPedidos">Telefone:</label>
					<input type="text" name="Telefone" placeholder="Telefone" style="margin-left: 10px" readonly="true">
					<br><br><br>	

					<label class="lblFazerPedidos">Hospital:</label>
					<input type="text" name="Hospital" placeholder="Hospital" style="margin-left: 10px" readonly="true">
					

					<label class="lblFazerPedidos">Cidade:</label>
					<input type="text" name="Cidade" placeholder="Cidade" style="margin-left: 0px" readonly="true">
					<br><br><br>

					<label class="lblFazerPedidos">Tipo Sanguineo:</label>
					<select style="margin-left: 10px" name="TipoSanguineo">
					  <option value="A-">A-</option>
					  <option value="A+">A+</option>
					  <option value="B-">B-</option>
					  <option value="B+">B+</option>
					  <option value="AB-">AB-</option>
					  <option value="AB+">AB+</option>
					  <option value="O-">O-</option>
					  <option value="O+">O+</option>
					  <option value="Todos">Todos</option>
					</select>
					<br><br><br><br>

					<label id="pedidoCadastrado">
						<?php

							echo("Pedido Cadastrado");

						?>	
					</label>	
				</form>
			</section>
		</div>

	</body>

</html>



