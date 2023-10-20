<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="../imagens/icon.png" type="image/x-icon">
	 <!--Google link-->
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&family=Poppins:ital,wght@0,400;1,200;1,300&display=swap" rel="stylesheet">  

	<title>Administrador</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="voluntários.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Administrador</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Inicio</span>
				</a>
			</li>
			<li class="active">
				<a href="voluntários.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Voluntários</span>
				</a>
			</li>
			<li>
				<a href="projetos.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Projetos</span>
				</a>
			</li>
			<li>
				<a href="equipe.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Equipe</span>
				</a>
			</li>
			<li>
				<a href="certificados.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Certificados</span>
				</a>
			</li>
			<li>
				<a href="usuário.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Eu</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="configurações.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Configuração</span>
				</a>
			</li>
			<li>
				<a href="../index.html" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Sair</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="voluntários.html" class="nav-link">Itens</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Procurar...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num"></span><!--PEDIR HELP PARA O PROFESSOR-->
			</a>
			<a href="usuário.html" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Voluntários</h1>
					<ul class="breadcrumb">
						<li>
							<a href="voluntários.html">Voluntários</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="inicio.html">Início</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Voluntários</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-receipt'></i>
					<span class="text">
						<h3>4</h3>
						<p>Projetos</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-timer'></i>
					<span class="text">
						<h3>2543</h3>
						<p>Horas trabalhadas</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Últimos voluntários cadastrados</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Usuário</th>
								<th>Data da inscrição</th>
								<th>Projetos trabalhados</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Leticia França</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">2</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Maria Eduarda</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">1</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Mayra Bruno</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">2</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Melissa Lopes</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">2</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Samira Melo</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">2</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Projetos</h3>
						<a href="projetos.html"><i class='bx bx-plus' ></i></a>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Tampinhas</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Protec</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Hortec</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Help-me</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Homenagem</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="js/script.js"></script>
</body>
</html>