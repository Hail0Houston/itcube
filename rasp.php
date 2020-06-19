<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="utf-8">
      <title>it-cube Оренбург</title>
      <link rel="stylesheet" href="main.css">
   </head>
   <body>
      <div ID = "toTop" > ^ Наверх </div>
      <div class="all">
         <div class= "header"><?php include("const.php");?></div>
         <div id="content">
            <div class="infobox">
               <div class="box_zag">
                  <span class="grand_zag">Расписание занятий на 2020 год</span>
               </div>
               <hr>
               <table class="checklist">
                  <tr>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
                  <?php
                     $host = 'localhost'; // адрес сервера 
                     $database = 'cube'; // имя базы данных
                     $user = 'root'; // имя пользователя
                     $password = ''; // пароль
                      
                     $link = mysqli_connect($host, $user, $password, $database) 
                         or die("Ошибка " . mysqli_error($link)); 
                          
                     $query ="SELECT * FROM Расписание";
                      
                     $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                     if($result)
                     {
                         $rows = mysqli_num_rows($result); // количество полученных строк
                          
                         echo "<table><tr><th>Дата</th><th>Группа</th><th>Предмет</th><th>Преподаватель</th><th>Аудитория</th></tr>";
                         for ($i = 0 ; $i < $rows ; ++$i)
                         {
                             $row = mysqli_fetch_row($result);
                             echo "<tr>";
                                 for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
                             echo "</tr>";
                         }
                         echo "</table>";
                          
                         // очищаем результат
                         mysqli_free_result($result);
                     }
                      
                     mysqli_close($link);
                        ?>
               </table>
               <hr>
            </div>
         </div>
      </div>
      <!-- Подключаем jQuery -->
      <script src="../js/jq.js"></script>
      <!-- Подключаем слайдер Slick -->
      <script src="../js/slick.min.js"></script>
      <!-- Подключаем файл скриптов -->
      <script src="../js/script.js"></script>
   </body>
</html>