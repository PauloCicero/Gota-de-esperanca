<?php

	$con= mysqli_connect("localhost", "root", "", "gota_de_esperanca");


	if (!$con) {
    	die("Connection failed: " . mysqli_connect_error());
	}

?>

<html>

	<head>

		<title>Solicitações Feitas</title>
		<link rel="icon" type="image/png" href="Img/logo.png">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>

	</head>

	<body>

		<div class="head">
			<header>
				<a href="index.html">
					<img src="Img/homeButton.jpg" class="Voltar">
				</a>
				<a href="index.html">
					<div class="imgLogo" >
						<img src="Img/logo.png" class="LogoX">
						<p class="TituloLogo">Gota de Esperança</p>
					</div>	
				</a>
			</header>
		</div>

		<div class="section">
			<section>
		
				<?php

					$sql= "SELECT * FROM tb_pedidos ORDER BY id DESC";
					$res_pedidos= mysqli_query($con, $sql);

					while ($row_pedidos= mysqli_fetch_assoc($res_pedidos)) { 
				?>

					<div class="Pedidos">
						<br>
						<label class="lblpedidos"> Nome: </label><label class="oPedido"> <?php echo $row_pedidos['Nome']; ?> <br></label>
						<label class="lblpedidos"> Telefone: </label><label class="oPedido"> <?php echo $row_pedidos['Telefone']; ?> <br></label>
						<label class="lblpedidos"> Idade: </label><label class="oPedido"> <?php echo $row_pedidos['Idade']; ?> <br></label>
						<label class="lblpedidos"> Hospital: </label><label class="oPedido"> <?php echo $row_pedidos['Hospital']; ?> <br></label>
						<label class="lblpedidos"> Cidade: </label><label class="oPedido"> <?php echo $row_pedidos['Cidade']; ?> <br></label>
						<label class="lblpedidos"> Tipo Sanguineo: </label><label class="oPedido"> <?php echo $row_pedidos['Tipo Sanguineo']; ?> <br></label>
					</div>	

				<?php
					}

					mysqli_close($con);
				?>	

			</section>
		</div>

	</body>

</html>