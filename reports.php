<!DOCTYPE HTML>
<!--Отчет ФГБУ ФВЦМР ФМБА-->
<html>
<head>
    <title>Отчет ФГБУ ФВЦМР ФМБА</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
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

                <a href="request.php" class="logo"><strong>Отчет по заявкам </strong>ФГБУ ФВЦМР ФМБА </a>

            </header>

            <!-- Content -->
            <section>

                <div id="sort" class ="sort"></div>

                <h3>Отчет</h3>

                <form>

                    <div id="print-content">
                        <?php
                        require_once 'rb-mysql.php'; // подключаем скрипт

                        $host ='127.0.0.1';
                        $user ='root';
                        $password ='';
                        $database ='request';
                        $link = mysqli_connect($host, $user, $password, $database)
                        or die("Ошибка " . mysqli_error($link));

                        $query ="SELECT * FROM requests WHERE remove != true";

                        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                        if($result)
                        {
                            $cols = mysqli_num_rows($result); // количество полученных строк
                            echo "<table><tr><th>ID</th><th>ФИО посетителя</th><th>Дата посещения</th><th>Время посещения</th><th>Контактный телефон посетителя</th><th>ФИО ответственного лица</th><th>Телефон ответственного лица</th><th>Корпус</th></tr>";
                            for ($i = 0 ; $i < $cols ; ++$i)
                            {
                                $col = mysqli_fetch_row($result);
                                for ($j = 0 ; $j < 8 ; ++$j) echo "<td data-type=\"text\">$col[$j]</td>";

                                echo "</tr>";
                            }

                            echo "</table>";

                            // очищаем результат
                            mysqli_free_result($result);
                        }

                        ?>

                    </div>

                </form>

                <div>
                    <button type="button" onClick="javascript:CallPrint('print-content');" title="Печать" >Печать</button>
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

            <section></section>

            <!-- Menu -->
            <nav id="menu">

                <header class="major">
                    <h2>Меню</h2>
                </header>

                <ul>

                    <li><a href="createrequest.php">Вернуться на главную</a></li>
                    <li><a href="rsrequest.php">Заявки ФГБУ ФВЦМР ФМБА</a></li>

                </ul>

            </nav>

            <!-- Footer -->
            <footer id="footer">

                <ul class="actions">
                </ul>
                <p class="copyright">&copy;ФГБУ ФВЦМР ФМБА России  <a href="https://"> </a> <a href="https://"> </a> </p>

            </footer>

        </div>

        <div id="topStr"><img src="images/topStr.png" width="30px" height="30px"  alt="Вверх"/></div>

    </div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="script.js"></script>
<script src="topStr.js"></script>
<script>
    //<input> ожидает телефонный номер, ничего кроме чисел, +, () или - принято не будет
    function checkPhoneKey(key) {
        return (key >= '0' && key <= '9') || key == '+' || key == '(' || key == ')' || key == '-' ||
            key == 'ArrowLeft' || key == 'ArrowRight' || key == 'Delete' || key == 'Backspace';
    }
</script>
</body>
</html>