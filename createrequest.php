<!DOCTYPE HTML>
<!--Создание заявки ФГБУ ФВЦМР ФМБА-->
<html>
	<head>
		<title>Создание заявки ФГБУ ФВЦМР ФМБА</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <style type="text/css" media="print">
            button {display: none; }
        </style>
    </head>
	<body class="is-preload">

		<!-- Wrapper -->
		<div id="wrapper">

			<?php
               require_once("auth_block.php");
            ?>

			<!-- Main -->
				<div id="main">
					<div class="inner">

						<!-- Header -->
							<header id="header">
								<a href="createrequest.php" class="logo"><strong>Создание заявки</strong> ФГБУ ФВЦМР ФМБА</a>
							</header>

						<!-- Banner -->
							<section id="banner">
								<div class="request">

									<!-- Form -->
										<h3>Введите данные</h3>
                                                <form method="post" action="request.php">
                                                    <div class="row gtr-uniform">
                                                        <div class="col-6 col-12">
                                                            <h5 align='right' style="color: rgba(245,106,106,0.95)">* Все поля являются обязательными!</h5>
                                                            <input type="text" name="guest_name" id="guest_name" title="Фамилия Имя Отчество посетителя" placeholder="Фамилия Имя Отчество посетителя"  minlength="4" maxlength="60" required="required" />
                                                        </div>
                                                        <div class="col-6 col-12-xsmall">
                                                            <input type="date" id="visit_date" name="visit_date" title="Дата посещения"  min="2020-01-21" max="2020-12-31" required="required" >
                                                            <input type="time" id="visit_time" name="visit_time" title="Время посещения" min="08:00" max="16:00" required="required">
                                                        </div>
                                                        <div class="col-6 col-12-xsmall">
                                                            <input  type="tel" name="guest_tel"  id="guest_tel" title="Контактный телефон посетителя" placeholder="Контактный телефон посетителя" onkeydown="return checkPhoneKey(event.key)"  minlength="4" maxlength="19" required="required"/>
                                                        </div>
                                                        <div class="col-6 col-12">
                                                            <input type="text" name="responsible_face" id="responsible_face" title="Фамилия Имя Отчество ответственного лица" placeholder="Фамилия Имя Отчество ответственного лица"  required="required" minlength="4" maxlength="60" required="required"/>
                                                        </div>
                                                        <div class="col-6 col-12-xsmall">
                                                            <input type="tel" name="responsible_phone" id="responsible_phone" title="Телефон ответственного лица" placeholder="Телефон ответственного лица" onkeydown="return checkPhoneKey(event.key)"  minlength="4" maxlength="19" required="required"/>
                                                        </div>
                                                        <div class="col-6 col-12-xsmall">
                                                            <select name="corps" id="corps" title="Название корпуса" required="required">
                                                                <option value="">- Корпус -</option>
                                                                <option value="К1 Центральная проходная">К1 Центральная проходная</option>
                                                                <option value="К2 Стационар клинический">К2 Стационар клинический</option>
                                                                <option value="К3 Радиологический корпус">К3 Радиологический корпус</option>
                                                                <option value="К4 Корпус радионуклидной терапии">К4 Корпус радионуклидной терапии</option>
                                                                <option value="К5 Реабилитационный корпус">К5 Реабилитационный корпус</option>
                                                                <option value="К6 Консультативная поликлиника">К6 Консультативная поликлиника</option>
                                                                <option value="К7 Административный корпус">К7 Административный корпус</option>
                                                                <option value="К8 Пэт-центр">К8 Пэт-центр</option>
                                                                <option value="К9 Протонный центр">К9 Протонный центр</option>
                                                                <option value="К10 Здание для размещения пищеблока">К10 Здание для размещения пищеблока</option>
                                                                <option value="К11 Вспомогательные и медицинские подразделения">К11 Вспомогательные и медицинские подразделения</option>
                                                                <option value="К13 Здание для размещения аптеки">К13 Здание для размещения аптеки</option>
                                                                <option value="К14 Гараж">К14 Гараж</option>
                                                                <option value="К15 Патологоанатомический корпус">К15 Патологоанатомический корпус</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6 col-12-xsmall">
                                                            <input type="number" name="floor" id="floor" title="Этаж" placeholder="Этаж" required/>
                                                        </div>
                                                        <div class="col-6 col-12-xsmall">
                                                            <input type="number" name="cabinet" id="cabinet" title="Кабинет" placeholder="Кабинет" required/>
                                                        </div>
                                                        <!-- Break -->
                                                        <div class="col-12">
                                                            <textarea name="comment" id="comment" placeholder="Цель посещения" title="Цель посещения" rows="6" required></textarea>
                                                        </div>
                                                        <!-- Break -->
                                                        <div class="col-12">
                                                            <ul class="actions">
                                                                <li><input type="submit" value="Отправить" class="primary" /></li>
                                                                <li><input type="reset" value="Сброс" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
											</form>

								</div>
							</section>
					</div>
				</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

                            <!-- Logo -->
                            <section id="logo" class="alt">

                                <div class="align-center">
                                    <header>
										<img src="images/logo-dark.PNG" style="float: left; margin: 0 10px; max-width: 100%; height: auto;" alt="ФГБУ ФВЦМР ФМБА"  />
                                    </header>
                                </div>

							</section>

                            <section>
                            </section>
										<!-- Menu -->

											<nav id="menu">

												<header class="major">
													<h2>Меню</h2>
												</header>

													<ul>
														<li><a href="rsrequest.php">Заявки ФГБУ ФВЦМР ФМБА</a></li>
													</ul>
											</nav>

							<!-- Footer -->
							<footer id="footer">

                                <ul class="actions">
                                    <li><a href="reports.php" class="button">Отчет по заявкам</a></li>
                                </ul>

								<p class="copyright">&copy;ФГБУ ФВЦМР ФМБА России  <a href="https://"> </a> <a href="https://"> </a> </p>

							</footer>
						</div>
					</div>
		</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
    <script>
		//<input> ниже ожидает телефонный номер, ничего кроме чисел, +, () или - принято не будет
        function checkPhoneKey(key) {
            return (key >= '0' && key <= '9') || key == '+' || key == '(' || key == ')' || key == '-' ||
                key == 'ArrowLeft' || key == 'ArrowRight' || key == 'Delete' || key == 'Backspace';
        }
    </script>
    </body>
</html>