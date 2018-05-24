<?php
$nome_1 = $_POST['nome1'];
$N1 = $_POST['n01'];
$N2 = $_POST['n02'];
$N3 = $_POST['n03'];

$media_1 = ($N1 + $N2 + $N3)/3;

if($media_1 >= 7){
	$situacao1 = "Aprovado";
}else{
	$situacao1 = "Reprovado";
}
$nome_2 = $_POST['nome2'];
$N4 = $_POST['n04'];
$N5 = $_POST['n05'];
$N6 = $_POST['n06'];

$media_2 = ($N4 + $N5 + $N6)/3;

if($media_2 >= 7){
	$situacao2 = "Aprovado";
}else{
	$situacao2 = "Reprovado";
}

$nome_3 = $_POST['nome3'];
$N7 = $_POST['n07'];
$N8 = $_POST['n08'];
$N9 = $_POST['n09'];

$media_3 = ($N4 + $N5 + $N6)/3;
$nome_1 = $_POST['nome1'];
$N1 = $_POST['n01'];
$N2 = $_POST['n02'];
$N3 = $_POST['n03'];

$media_1 = ($N1 + $N2 + $N3)/3;

if($media_1 >= 7){
	$situacao1 = "Aprovado";
}else{
	$situacao1 = "Reprovado";
}
$nome_2 = $_POST['nome2'];
$N4 = $_POST['n04'];
$N5 = $_POST['n05'];
$N6 = $_POST['n06'];

$media_2 = ($N4 + $N5 + $N6)/3;

if($media_2 >= 7){
	$situacao2 = "Aprovado";
}else{
	$situacao2 = "Reprovado";
}

$nome_3 = $_POST['nome3'];
$N7 = $_POST['n07'];
$N8 = $_POST['n08'];
$N9 = $_POST['n09'];

$media_3 = ($N4 + $N5 + $N6)/3;

if($media_3 >= 7){
	$situacao3 = "Aprovado";
}else{
	$situacao3 = "Reprovado";
}

$nome_4 = $_POST['nome4'];
$N10 = $_POST['n10'];
$N11 = $_POST['n11'];
$N12 = $_POST['n12'];

$media_4 = ($N10 + $N11 + $N12)/3;

if($media_4 >= 7){
	$situacao4 = "Aprovado";
}else{
	$situacao4 = "Reprovado";
}

$nome_5 = $_POST['nome5'];
$N13 = $_POST['n13'];
$N14 = $_POST['n14'];
$N15 = $_POST['n15'];

$media_5 = ($N13 + $N14 + $N15)/3;

if($media_5 >= 7){
	$situacao5 = "Aprovado";
}else{
	$situacao5 = "Reprovado";
}

$nome_6 = $_POST['nome6'];
$N16 = $_POST['n16'];
$N17 = $_POST['n17'];
$N18 = $_POST['n18'];

$media_6 = ($N16 + $N17 + $N18)/3;

if($media_6 >= 7){
	$situacao6 = "Aprovado";
}else{
	$situacao6 = "Reprovado";
}

$nome_7 = $_POST['nome7'];
$N19 = $_POST['n19'];
$N20 = $_POST['n20'];
$N21 = $_POST['n21'];

$media_7 = ($N19 + $N20 + $N21)/3;

if($media_7 >= 7){
	$situacao7 = "Aprovado";
}else{
	$situacao7 = "Reprovado";
}
$nome_8= $_POST['nome8'];
$N22 = $_POST['n22'];
$N23 = $_POST['n23'];
$N24 = $_POST['n24'];

$media_8 = ($N22 + $N23 + $N24)/3;

if($media_8 >= 7){
	$situacao8 = "Aprovado";
}else{
	$situacao8 = "Reprovado";
}
$nome_9 = $_POST['nome9'];
$N25 = $_POST['n25'];
$N26 = $_POST['n26'];
$N27 = $_POST['n27'];

$media_9 = ($N25 + $N26 + $N27)/3;

if($media_9 >= 7){
	$situacao9 = "Aprovado";
}else{
	$situacao9 = "Reprovado";
}
$nome_10 = $_POST['nome10'];
$N28 = $_POST['n28'];
$N29 = $_POST['n29'];
$N30 = $_POST['n30'];

$media_10 = ($N28 + $N29 + $N30)/3;

if($media_10 >= 7){
	$situacao10 = "Aprovado";
}else{
	$situacao10 = "Reprovado";
}
?>
!DOCTYPE>
<html>
	<head>
		<title>Sistema Escolar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/ifma.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">Jarlas N Alves</a></h1>
					<p>IFMA Instituto Federal de Tecnologia do MARANHÃO<br />
					Ensino Integral e Subsequente</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="index.html" class="active">Home</a></li>
						<li><a href="boletimescolar.html">Boletim Escolar</a></li>
						<li><a href="#one">Portal IFMA</a></li>
						<li><a href="#two">Conhecimentos Aplicados</a></li>
						<li><a href="#three">Eventos do Campus</a></li>
						<li><a href="#four">Contato</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="container">
									<header class="major">
										<h2>Boletim Escolar</h2>
										<p>Preencha os campos com as notas dos alunos:</p>
							</header>
<form id="formulario" name="formulario" method="post" action="media_post.php">
<table border="2" id="border">	
	<tr id="linha1">
		<td align="center"><strong>Nº</strong></td>
		<td align="center"><strong>NOME</strong></td>
		<td align="center"><strong>N1</strong></td>
		<td align="center"><strong>N2</strong></td>
		<td align="center"><strong>N3</strong></td>
		<td align="center"><strong>Media</strong></td>
		<td align="center"><strong>Situação</strong></td>
	</tr>
<?php
echo "<tr> <td>1</td> <td>$nome_1</td> <td>$N1</td> <td>$N2</td> <td>$N3</td> <td>$media_1</td> <td>$situacao1</td></tr>";
echo "<tr> <td>2</td> <td>$nome_2</td> <td>$N4</td> <td>$N5</td> <td>$N6</td> <td>$media_2</td> <td>$situacao2</td></tr>";
echo "<tr> <td>3</td> <td>$nome_3</td> <td>$N7</td> <td>$N8</td> <td>$N9</td> <td>$media_3</td> <td>$situacao3</td></tr>";
echo "<tr> <td>4</td> <td>$nome_4</td> <td>$N10</td> <td>$N11</td> <td>$N12</td> <td>$media_4</td> <td>$situacao4</td></tr>";
echo "<tr> <td>5</td> <td>$nome_5</td> <td>$N13</td> <td>$N14</td> <td>$N15</td> <td>$media_5</td> <td>$situacao5</td></tr>";
echo "<tr> <td>6</td> <td>$nome_6</td> <td>$N16</td> <td>$N17</td> <td>$N18</td> <td>$media_6</td> <td>$situacao6</td></tr>";
echo "<tr> <td>7</td> <td>$nome_7</td> <td>$N19</td> <td>$N20</td> <td>$N21</td> <td>$media_7</td> <td>$situacao7</td></tr>";
echo "<tr> <td>8</td> <td>$nome_8</td> <td>$N22</td> <td>$N23</td> <td>$N24</td> <td>$media_8</td> <td>$situacao8</td></tr>";
echo "<tr> <td>9</td> <td>$nome_9</td> <td>$N25</td> <td>$N26</td> <td>$N27</td> <td>$media_9</td> <td>$situacao9</td></tr>";
echo "<tr> <td>10</td> <td>$nome_10</td> <td>$N28</td> <td>$N29</td> <td>$N30</td> <td>$media_10</td> <td>$situacao10</td></tr>";
?>

		</table>

	<br />
<td><button type="submit">Enviar Notas</button></td>
</form>
								</div>
							</section>

							<!-- Four -->
							<section id="four">
								<div class="container">
									<h3>Entre em Contato</h3>
									<p>Através das nossas redes sociais você pode tirar suas duvidas sobre o campus e editais lançados, fique de olho por que sempre ter novidades.</p>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Nome" /></div>
											<div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><input type="text" name="subject" id="subject" placeholder="Assunto" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="message" id="message" placeholder="Mensagem" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Enviar Mensagem" /></li>
													<li><input type="reset" value="Limpar" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</section>
					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; JNA ConsultoriaWeb</li><li>Design: JarlasWebDesigner</li>
							</ul>
						</div>
					</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>