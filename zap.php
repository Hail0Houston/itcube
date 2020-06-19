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
                  <div class="grand_zag">Набор детей</div>
               </div>
               <span class="textbox">Все наши образовательные программы стартуют в сентябре-октябре 2020 года. Мы открываем предварительную запись на них уже сейчас, чтобы все успели приготовиться. Кроме того, на некоторые курсы учащиеся проходят отбор, и те, кто запишутся раньше, получат некоторое преимущество.</span>
               <hr>
               <div class="box_zag">
                  <div class="grand_zag">Предварительная запись</div>
               </div>
               <span class="textbox">По всем направлениям у нас будут сформированы платные и бесплатные группы. Обратите внимание, что на некоторые, даже платные группы, будет вестись конкурсный отбор и/или собеседование.
               Регистрация на образовательные программы от "Яндекс.Лицея" и "IT школы SAMSUNG" откроется ближе к осени. Тем не менее, вы можете обозначить свой интерес в нашей анкете, и, когда придет время, мы напомним вам, чтобы вы зашли на сайты наших партнеров и успели подать заявку.</span>
               <hr>
               <div class = "form">
                     <form action="bd.php" method="POST">
                     
                      <input name="name" id="name" type="text" placeholder="Имя">
                      <input name="fam" id="fam" type="text" placeholder="Фамилия">
                      <input name="otch" id="otch" type="text" placeholder="Отчество">
                      <input name="email" id="email" type="text" placeholder="Почта">
                      <input name="num" id="num" type="text"placeholder="Номер телефона">
                      <input type = "submit"  value="Добавить">
                  </form>
               </div>
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