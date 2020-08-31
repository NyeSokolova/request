<!DOCTYPE HTML>
<!--Создание заявки ФГБУ ФВЦМР ФМБА-->
<html>
<head>
    <title>Просмотр списка служебных записок ФГБУ ФВЦМР ФМБА</title>
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
                <a href="" class="logo"><strong>Просмотр списка служебных записок</strong> ФГБУ ФВЦМР ФМБА</a>
            </header>

            <!-- Banner -->
            <section id="banner">
                <div class="request">

                    <!-- Form -->

                    <form method="post" action="">
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12">
                                <table>
                                    <tr><th>
                                        </th>
                                        <th>ID</th>
                                        <th class='noedit' >От кого</th>
                                        <th class='noedit' >Кому</th>
                                        <th class='noedit' >Дата составления</th>
                                        <th class='noedit' >Дата резолюции</th>
                                        <th class='noedit'>Номер служебной записки</th>
                                    </tr>
                                    <td>
                                        <div class="col-12">
                                            <ul class="actions">
                                                <li><input type="submit" value="Редактировать" class="primary" /></li></ul>
<!--                                                <ul class="actions"><li><input type="reset" value="Удалить" /></li>-->
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td data-type='text'>
                                        Иванов Иван Иванович
                                        ivanov@fvcmrfmba.ru
                                    </td>
                                    <td data-type='text'>
                                        Иванов Иннокентий Ильич
                                        ivanovii@fvcmrfmba.ru
                                    </td>
                                    <td data-type='data'>
                                        10.03.2020
                                    </td>
                                    <td data-type='data'>
                                        13.03.2020
                                    </td>
                                    <td data-type='text'>
                                        ВН-125485
                                        / 13.03.2020
                                    </td>
                                    <td>
                                        <div class="col-12">
                                            <ul class="actions">
<!--                                                <li><input type="submit" value="Редактировать" class="primary" /></li></ul>-->
                                            <ul class="actions"><li><input type="reset" value="Удалить" /></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <tr><td>
                                        <div class="col-12">
                                            <ul class="actions">
                                                <li><input type="submit" value="Редактировать" class="primary" /></li></ul>
                                            <!--                                                <ul class="actions"><li><input type="reset" value="Удалить" /></li>-->
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td data-type='text'>
                                        Иванов И. И.
                                    </td>
                                    <td data-type='text'>
                                        Иванов И. И.
                                    </td>
                                    <td data-type='data'>
                                        10.03.2020
                                    </td>
                                    <td data-type='data'>
                                        13.03.2020
                                    </td>
                                    <td data-type='text'>
                                        ВН125485
                                    </td>
                                    <td>
                                        <div class="col-12">
                                            <ul class="actions">
                                                <!--                                                <li><input type="submit" value="Редактировать" class="primary" /></li></ul>-->
                                                <ul class="actions"><li><input type="reset" value="Удалить" /></li>
                                                </ul>
                                        </div>
                                    </td></tr>
                                    <tr><td>
                                        <div class="col-12">
                                            <ul class="actions">
                                                <li><input type="submit" value="Редактировать" class="primary" /></li></ul>
                                            <!--                                                <ul class="actions"><li><input type="reset" value="Удалить" /></li>-->
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td data-type='text'>
                                        Иванов И. И.
                                    </td>
                                    <td data-type='text'>
                                        Иванов И. И.
                                    </td>
                                    <td data-type='data'>
                                        10.03.2020
                                    </td>
                                    <td data-type='data'>
                                        13.03.2020
                                    </td>
                                    <td data-type='text'>
                                        ВН125485
                                    </td>
                                    <td>
                                        <div class="col-12">
                                            <ul class="actions">
                                                <!--                                                <li><input type="submit" value="Редактировать" class="primary" /></li></ul>-->
                                                <ul class="actions"><li><input type="reset" value="Удалить" /></li>
                                                </ul>
                                        </div>
                                    </td></tr>
                                </table>
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