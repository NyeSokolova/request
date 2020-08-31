<?php

echo '<html>
<head>
    <title>Редактирование заявки ФГБУ ФВЦМР ФМБА</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body  class="is-preload">';


require_once 'rb-mysql.php'; // подключаем скрипт
// подключаемся к серверу

$host ='127.0.0.1';
$user ='root';
$password ='';
$database ='request';
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

// если запрос POST
if(isset($_POST['id']) && isset($_POST['guest_name']) && isset($_POST['visit_date']) && isset($_POST['visit_time'])&& isset($_POST['guest_tel']) && isset($_POST['responsible_face'])&& isset($_POST['responsible_phone']) && isset($_POST['corps'])&& isset($_POST['floor']) && isset($_POST['cabinet'])&& isset($_POST['comment'])){

    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $guest_name = htmlentities(mysqli_real_escape_string($link, $_POST['guest_name']));
    $visit_date = htmlentities(mysqli_real_escape_string($link, $_POST['visit_date']));
    $visit_time = htmlentities(mysqli_real_escape_string($link, $_POST['visit_time']));
    $guest_tel = htmlentities(mysqli_real_escape_string($link, $_POST['guest_tel']));
    $responsible_face = htmlentities(mysqli_real_escape_string($link, $_POST['responsible_face']));
    $responsible_phone = htmlentities(mysqli_real_escape_string($link, $_POST['responsible_phone']));
    $corps = htmlentities(mysqli_real_escape_string($link, $_POST['corps']));
    $floor = htmlentities(mysqli_real_escape_string($link, $_POST['floor']));
    $cabinet = htmlentities(mysqli_real_escape_string($link, $_POST['cabinet']));
    $comment = htmlentities(mysqli_real_escape_string($link, $_POST['comment']));

    $query ="UPDATE requests SET guest_name='$guest_name', visit_date='$visit_date', visit_time='$visit_time', guest_tel='$guest_tel', responsible_face='$responsible_face', responsible_phone='$responsible_phone', corps='$corps', floor='$floor', cabinet='$cabinet', comment='$comment', remove='0' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
        echo "<script type='text/javascript'> alert( 'Данные обновлены!' );</script>";
}

// если запрос GET
if(isset($_GET['id']))
{

    $id = htmlentities(mysqli_real_escape_string($link, $_GET['id']));

    // создание строки запроса
    $query ="SELECT * FROM requests WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $guest_name = $row[1];
        $visit_date = $row[2];
        $visit_time = $row[3];
        $guest_tel = $row[4];
        $responsible_face = $row[5];
        $responsible_phone = $row[6];
        $corps = $row[7];
        $floor = $row[8];
        $cabinet = $row[9];
        $comment = $row[10];

        echo " 
<div id='wrapper'>";

        require_once("auth_block.php");

        echo "    
    <div id='main'>
	    <div class='inner'>
	    
            <header id='header'>
	            <a href='rsrequest.php' class='logo'><strong>Редактирование заявки</strong> ФГБУ ФВЦМР ФМБА</a>
            </header>

                <section>
				   
                        <h3>Изменить заявку</h3>
                         <form method='POST' name='edit'>
                         
                            <div class='row gtr-uniform'>
                            
                                <div class='col-6 col-12'>
                                
                                <h5 align='right' style='color: rgba(245,106,106,0.95)'>* Все поля являются обязательными!</h5>
                                    <input type='hidden' name='id' value='$id' />
                                    <input type='text' name='guest_name' id='guest_name' title='Фамилия Имя Отчество посетителя' placeholder='Фамилия Имя Отчество посетителя'  minlength='4' maxlength='60' required='required' value='$guest_name'/>
                                </div>
                                
                                <div class='col-6 col-12-xsmall'>
                                    <input type='date' id='visit_date' name='visit_date' title='Дата посещения' min='2020-01-21' max='2020-12-31' required='required' value='$visit_date'/>
                                    <input type='time' id='visit_time' name='visit_time' title='Время посещения' min='08:00' max='16:00' required='required' value='$visit_time'/>
                                </div>
                                
                                    <div class='col-6 col-12-xsmall'>
                                        <input  type='tel' name='guest_tel'  id='guest_tel' title='Контактный телефон посетителя' placeholder='Контактный телефон посетителя' onkeydown='return checkPhoneKey(event.key)'  minlength='4' maxlength='18' required='required' value='$guest_tel'/>
                                    </div>
                                    
                                        <div class='col-6 col-12'>
                                            <input type='text' name='responsible_face' id='responsible_face' title='Фамилия Имя Отчество ответственного лица' placeholder='Фамилия Имя Отчество ответственного лица'  required='required' minlength='4' maxlength='60' required='required' value='$responsible_face'/>
                                        </div>
                                        
                                            <div class='col-6 col-12-xsmall'>
                                                <input type='tel' name='responsible_phone' id='responsible_phone' title='Телефон ответственного лица' placeholder='Телефон ответственного лица' onkeydown='return checkPhoneKey(event.key)'  minlength='4' maxlength='18' required='required' value='$responsible_phone'/>
                                            </div>
                                            
                                                <div class='col-6 col-12-xsmall'>
                                                    <select name='corps' id='corps' title='Название корпуса' required='required'>
                                                    
                                                        <option>$corps 
                                                        </option>
                                                        <option value='К1 Центральная проходная'>К1 Центральная проходная</option>
                                                        <option value='К2 Стационар клинический'>К2 Стационар клинический</option>
                                                        <option value='К3 Радиологический корпус'>К3 Радиологический корпус</option>
                                                        <option value='К4 Корпус радионуклидной терапии'>К4 Корпус радионуклидной терапии</option>
                                                        <option value='К5 Реабилитационный корпус'>К5 Реабилитационный корпус</option>
                                                        <option value='К6 Консультативная поликлиника'>К6 Консультативная поликлиника</option>
                                                        <option value='К7 Административный корпус'>К7 Административный корпус</option>
                                                        <option value='К8 Пэт-центр'>К8 Пэт-центр</option>
                                                        <option value='К9 Протонный центр'>К9 Протонный центр</option>
                                                        <option value='К10 Здание для размещения пищеблока'>К10 Здание для размещения пищеблока</option>
                                                        <option value='К11 Вспомогательные и медицинские подразделения'>К11 Вспомогательные и медицинские подразделения</option>
                                                        <option value='К13 Здание для размещения аптеки'>К13 Здание для размещения аптеки</option>
                                                        <option value='К14 Гараж'>К14 Гараж</option>
                                                        <option value='К15 Патологоанатомический корпус'>К15 Патологоанатомический корпус</option>
                                                    
                                                    </select> 
                                                </div>
                                                
                                                    <div class='col-6 col-12-xsmall'>
                                                        <input type='number' name='floor' id='floor' title='Этаж' placeholder='Этаж' required value='$floor'/>
                                                    </div>
                                                    
                                                        <div class='col-6 col-12-xsmall'>
                                                            <input type='number' name='cabinet' id='cabinet' title='Кабинет' placeholder='Кабинет' required value='$cabinet'/>
                                                        </div>
                                                        
                                                            <div class='col-12'>
                                                                <textarea name='comment' id='comment' placeholder='Цель посещения' title='Цель посещения' required rows='6' >$comment</textarea>
                                                            </div>
                                                            
                                         <div class='col-12'>
                                         
                                            <ul class='actions'>
                                                <li><input type='submit' value='Сохранить' title='Сохранить' class='primary'/></li>
                                                <li><input type='reset' value='Сброс' title='Сброс'/></li> 
                                                 <li><button type='button' class='primary' id='send_req_del' title='Удалить'/> Удалить </button></li> 
                                            </ul>
                                                                                    
                                        </div> 
                                        
                                         <div>  
                                            <h5 align='left' style='color: rgba(245,106,106,0.95)'>* Пожалуйста, будьте внимательны! При сохранении / удалении заявки изменения вступят в силу сразу же.</h5>  
                                        </div>
                                        
                            </div>
                            
                         </form> 



                    </section>
                    
                            </div>  
    </div>  
    
                   <div id='sidebar'>
                <div class='inner'>
                
                              <!-- Logo -->
					    <section id='logo' class='alt'>
					    
						    <div class='align - center'>
						    
							    <header>
								    <img src='images/logo-dark.PNG' style='float: left; margin: 0 10px; max-width: 100%; height: auto;' alt='ФГБУ ФВЦМР ФМБА'  />
								</header>
								
							</div>
							
						</section>
					<!-- Menu -->
					    <nav id='menu'>
					    
						    <header class='major'>
							    <h2>Меню</h2>
							</header>
							
								<ul>
									<li><a href='createrequest.php'>Вернуться на главную</a></li>
									<li><a href='rsrequest.php'>Заявки ФГБУ ФВЦМР ФМБА</a></li>
								</ul>
						</nav>

					<!-- Footer -->
					    <footer id='footer'>
					    
							<ul class='actions'>
								<li><a href='reports.php' class='button'>Отчет по заявкам</a></li>
							</ul>
							
								<p class='copyright'>&copy;ФГБУ ФВЦМР ФМБА России  <a href='https://'> </a> <a href='https://'> </a> </p>
						
						</footer >
						
						</div >
					
					</div >               
                                                  
</div>";

        mysqli_free_result($result);
    }
}
// закрываем подключение
mysqli_close($link);

echo '<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="script.js"></script>
<script src="remove.js"></script>

</body>

</html>'
?>