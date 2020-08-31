<!DOCTYPE HTML>
<!--Создание заявки ФГБУ ФВЦМР ФМБА-->
<html>
<head>
    <title>Создание служебной записки ФГБУ ФВЦМР ФМБА</title>
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
                <a href="create_service_memo.php" class="logo"><strong>Создание служебной записки</strong> ФГБУ ФВЦМР ФМБА</a>
            </header>

            <!-- Banner -->
            <section id="banner">
                <div class="service_memo">

                    <!-- Form -->
                    <form method="post" action="">
                        <div class="row gtr-uniform">
                            <!--                            <h5 align='right' style="color: rgba(245,106,106,0.95)">* Все поля являются обязательными!</h5>-->
                            <div class="col-6 col-12-xsmall">
                                <h4>Новая служебная записка</h4>
                                <label> От кого:
                                    <input type="text" name="memo_to_name" id="memo_to_name" title="Фамилия Имя Отчество составителя" placeholder="Фамилия Имя Отчество составителя"  minlength="4" maxlength="60" required="required" />
                                </label>
                                <label> Кому:
                                    <input type="text" name="memo_from_name" id="memo_from_name" title="Фамилия Имя Отчество адресата" placeholder="Фамилия Имя Отчество адресата"  minlength="4" maxlength="60" required="required" />
                                </label>
                                <label for="memo_date"> Дата составления:
                                    <input type="date" id="memo_date" name="memo_date" title="Дата составления"  min="2020-01-21" max="2020-12-31" required="required" >
                                </label>
                                <label for="memo_per"> Дата резолюции:
                                    <input type="date" id="memo_rez" name="memo_rez" title="Дата резолюции"  min="2020-01-21" max="2020-12-31" required="required" >
                                </label>
                                <label>Файл служебной записки:
                                    <input type="file" name="download" id="download" placeholder="Файл служебной записки"
                                           title="Загрузка" required/>
                                </label>
                                <label for="number_memo">Номер регистрации служ. записки:
                                    <input type="text" name="number_memo" id="number_memo" placeholder="№_регистрации"
                                           title="№_регистрации" required/>
                                </label>
                                    <label>Описание:
                                        <textarea name="comment" id="comment" placeholder="Описание..." title="Описание..." rows="6" cols="19" required></textarea>
                                    </label>

                            </div>
                                <div class="col-6 col-12-xsmall">
                                    <h4>Согласующие лица</h4>
                                    <div style=" border:  1px dotted #c8cccf;">
                                        <label> Согласующее лицо:
                                            <input type="text" name="memo_from_name" id="memo_from_name" title="Фамилия Имя Отчество согласующего" placeholder="Фамилия Имя Отчество согласующего"  minlength="4" maxlength="60" required="required" />
                                        </label>
                                        <input type="checkbox" name="agreed" id="agreed" title="Cогласовано" value="false" required="required" />
                                        <label for="agreed">Cогласовано</label>
                                        <label for="memo_s"> Дата согласования:
                                            <input type="date" id="memo_s" name="memo_s" title="Дата согласования"  min="2020-01-21" max="2020-12-31" required="required" >
                                        </label>
                                        <label>Файл резолюции:
                                            <input type="file" name="download" id="download" placeholder="Файл резолюции"
                                                   title="Загрузка" required/>
                                        </label>
                                        <label for="memo_rez"> Дата резолюции:
                                            <input type="date" id="memo_rez" name="memo_rez" title="Дата резолюции"  min="2020-01-21" max="2020-12-31" required="required" >
                                        </label>
                                    </div>
                                    <div id="add_agr_div" class="add" style="border: 1px dotted #c8cccf">

                                    </div>
                                        <button id="add_in" type="button" title="Добавить согласующего" class="primary" onClick="Add_agr();" >Добавить согласующего</button>


<!--                                <label> Исполнитель (-и):-->
<!--                                    <input type="text" name="memo_performers" id="memo_performers" title="Фамилия Имя Отчество исполнителя (-ей)" placeholder="Фамилия Имя Отчество исполнителя (-ей)"  minlength="4" maxlength="60" required="required" />-->
<!--                                    <ol id="add">-->
<!--                                        <li>Иванов И.И.-->
<!--                                            <a href='' title="Удалить" >  ✖ </a>-->
<!--                                        </li>-->
<!--                                    </ol>-->
<!--                                </label>-->
                            </div>
                            <!-- Break -->
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Отправить" class="primary" /></li>
                                    <li><input type="reset" value="Очистить" /></li>
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
<script src="script.js"></script>
<script>
    //<input> ниже ожидает телефонный номер, ничего кроме чисел, +, () или - принято не будет
    function checkPhoneKey(key) {
        return (key >= '0' && key <= '9') || key == '+' || key == '(' || key == ')' || key == '-' ||
            key == 'ArrowLeft' || key == 'ArrowRight' || key == 'Delete' || key == 'Backspace';
    }
</script>
</body>
