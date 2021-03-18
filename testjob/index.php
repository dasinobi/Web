<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<title>Калькулятор</title>
</head>
<body>
	<div class="container">


<!-- Header -->
		<div class="header">
			<div class="logo">
				<a href="/">
    				<img src="style/img/logo.png">
				</a>
			</div>
			<div class="phonenumber">
				<div class="msk">8-800-1100-5005</div>
				<div class="tmn">+7(34552)522-000</div>
			</div>
		</div>

<!-- Navigation -->

		<nav class="nav">
			<a class="nav_link" href="#">Кредитные карты</a>
			<a class="nav_link" href="#">Вклады</a>
			<a class="nav_link" href="#">Дебетовая карта</a>
			<a class="nav_link" href="#">Страхование</a>
			<a class="nav_link" href="#">Друзья</a>
			<a class="nav_link" href="#">Интернет-банк</a>
		</nav>

<!-- Breadcrumbs -->

		<div class="breadcrumbs">
			<a class="breadcrumbs_link" href="#">Главная</a>
			<a class="breadcrumbs_link" href="#">Вклады</a>
			<a class="breadcrumbs_link">Калькулятор</a>
		</div>

<!-- Main_block -->

		<div class="main_block">
			<h1 class="title">Калькулятор</h1>

			<form class="wrapper" method="post">
				<div class="main_inner">
					<label for="date">Дата оформления вклада</label>
					<input class="input" type="date" id="date"></input>
				</div>

				<div class="main_inner">
					<label for="deposit">Сумма вклада</label>
					<input class="input" type="number" id="deposit"></input>
				</div>

				<div class="main_inner">
					<label for="period">Срок вклада</label>
					<?php
						echo '<select class="input" name = "" id ="period">';
							for ($year = 1; $year <= 5; $year++){
							echo '<option value="select_period">' . $year . ' год';
							echo '</option>';
							}
						echo '</select>'; 
					?>
				</div>

				<div class="main_inner">
					<label for="radio">Пополнение вклада</label>
					<input type="radio" name="radio" checked>Нет</input>
					<input type="radio" name="radio">Да</input>
				</div>

				<div class="main_inner">
					<label for="payment">Сумма пополнения вклада</label>
					<input class="input" type="number" id="payment" name="summadd" min="1000" max="3000000"></input>
				</div>


				<div class="result">
					<button class="btn" type="submit">Рассчитать</button>
				</div>

			</form>
		</div>
	</div>


<!-- Footer -->
	<footer class="footer">
				<a class="footer_link" href="#">Кредитные карты</a>
				<a class="footer_link" href="#">Вклады</a>
				<a class="footer_link" href="#">Дебетовая карта</a>
				<a class="footer_link" href="#">Страхование</a>
				<a class="footer_link" href="#">Друзья</a>
				<a class="footer_link" href="#">Интернет-банк</a>
	</footer>

</body>
</html>