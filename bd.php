<?php

try {
// Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль,
$db = new PDO('mysql:host=localhost;dbname=cube', "root", "");
// Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Переносим данные из полей формы в переменные.
$name_n= $_POST['name'];
$fam_n= $_POST['fam'];
$otch_n= $_POST['otch'];
$email_n= $_POST['email'];
$num_n= $_POST['num'];

// Создаем ассоциативный массив для подстановки данных в запрос.
$data = array(

'name' => "$name_n",
'fam' => "$fam_n",
'otch' => "$otch_n",
'email ' => "$email_n",
'num' => "$num_n",
);

// Запрос на создание записи в таблице
$sql = "INSERT INTO zap(Имя, Фамилия, Отчество, Почта, Телефон)"."VALUES (name, fam, otch, email, num)";

// Подготовка запроса (замена псевдо переменных :title, :author и т.п. на реальные данные)
//$statement = $db->prepare($sql);
// Выполняем запрос
//$statement->execute($data);

echo "Запись успешно создана!";
}

catch(PDOException $e) {
echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}

// Закрываем соединение
$db = null;

?>