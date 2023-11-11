﻿<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
   <title>Форма обратной связи</title>
  </head>
  <body>



    <!-- Контейнер выравнивает по ширине и по центру -->
    <div class="container">

      <!-- content содержит содержимое формы -->
      <div class="content">

        <!-- Левая колонка: адрес, телефоны, email. Можете добавить свое -->
        <div class="left-side">
          <div class="address details">

            <!-- Вместо классов: название шрифтовых иконок (fontawesome.com) -->
            <i class="fas fa-map-marker-alt"></i>

            <!-- topic - заголовок, text-one, text-two - текст -->
            <div class="topic">Адрес</div>
            <div class="text-one">г. Москва</div>
            <div class="text-two">Пресненская наб., 8 стр. 1</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Телефон</div>
            <div class="text-one">8-800-000-00-00</div>
            <div class="text-two">8-900-000-00-00</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">support@site.com</div>
            <div class="text-two">admin@site.com</div>
          </div>
        </div>

        <!-- Правая колонка: сама форма -->
        <div class="right-side">

          <!-- Заголовок для формы -->
          <div class="topic-text">Отправьте нам сообщение</div>

          <!-- Какой-то дополнительный текст -->
          <p>
            Если у вас есть какие-то вопросы или предложения по сотрудничеству -
            заполните форму ниже
          </p>

          <!-- Форма обратной связи -->
          <form action="new_3.html" method="post">

           <!-- Каждый input для выравнивания вкладываем в блок input-box -->
            <div class="input-box">
              <input type="text" name="имя" placeholder="Ваше имя" />
            </div>
            <div class="input-box">
              <input type="email" name="email" placeholder="Введите email" />
            </div>
            <div class="input-box">
              <input type="text" name="phone" placeholder="Введите телефон" />
            </div>
            <div class="input-box message-box">
              <textarea placeholder="Сообщение" placeholder="Введите сообщение"></textarea>
            </div>
            <div class="button">
              <input type="submit" value="Отправить" />
            </div>
          </form>
        </div>
      </div>
    </div>
<style>
@import url("https:/*fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

/* Убираем все отступы */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

*,
*::after,
*::before {
  box-sizing: inherit;
}

/* При расчете размеров инпутов учитываем внутренние отступы и границы */
input,
textarea {
  box-sizing: border-box;
}

/* В body устанавливаем шрифт, ширину и высоту, а также фон */
body {
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  line-height: 1.2;
  width: 100%;
  min-height: 100vh;
  background: linear-gradient(45deg, #fff1eb, #ace0f9);
  display: flex;
  justify-content: center; /* чтобы контейнер */
  align-items: center; /* был по центру */
}

/* Ограничиваем контейнер по ширине 1000px */
.container {
  width: 100%;
  max-width: 1000px;
  padding: 0 20px;
}

/* Стили самой формы */
.content {
  display: flex; /* делаем колонки в ряд */
  align-items: center; /* выравниваем по центру */
  justify-content: space-between; /* колонки растянутся на всю ширину */
  background: #fff;
  padding: 40px;
  border-radius: 5px;
  box-shadow: 4px 4px 8px 0 rgba(34, 60, 80, 0.2);
}

/* Стили левой колонки */
.left-side {
  width: 25%; /* занимает 25% общей ширины */
  height: 100%; /* растягиваем на всю высоту */
  position: relative; /* позиционирование относительное (для ::before) */
  display: flex;
  flex-direction: column; /* внутри элементы располагаем в колонку */
}

/* Стили разделительной линии между левой и правой колонкой */
.left-side::before {
  content: ""; /* контент нам не нужен */
  position: absolute; /* позиционируем относительно .left-side */
  height: 70%; /* высота 70% от .left-side */
  width: 2px; /* ширина 2px */
  background: #afafb6;
  right: -15px; /* позиционируем справа + отступ 15px (справа) */
  top: 50%; /* выравниваем по центру */
  transform: translateY(-50%); /* выравниваем по центру */
}

/* Стили правой колонки */
.right-side {
  width: 75%; /* занимает 75% общей ширины */
  margin-left: 75px;
}

/* Элементы левой колонки: адрес, телефон, email */
.details {
  margin-bottom: 15px;
  text-align: center;
}

/* Общие стили для иконок */
.details i {
  font-size: 25px; /* задаем размер */
  color: #3e2093; /* задаем цвет */
  margin-bottom: 10px;
}

/* Стили для заголовков левой колонки */
.topic {
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 7px; /* отступ снизу 7px */
}

/* Стили для текста левой колонки */
.text-one,
.text-two {
  font-size: 14px;
  color: #afafb6;
}

/* Заголовок правой колонки */
.topic-text {
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
  margin-bottom: 10px;
}

/* Текст правой колонки */
.right-side p {
  margin-bottom: 20px;
}

/* Контейнер для input'ов формы */
.input-box {
  height: 50px; /* по сути задаем высоту input'а */
  width: 100%; /* ширина на всю ширину правой колонки (с учетом padding) */
  margin-bottom: 20px; /* отступаем снизу 20px */
}

/* Стили для input и textarea (поле сообщение) */
.input-box input,
.input-box textarea {
  height: 100%; /* растягиваем на всю высоту контейнера 50px */
  width: 100%; /* растягиваем на всю ширину */
  border: none; /* убираем внешние края */
  border-radius: 5px; /* скругляем края */
  background: #f0f1f8; /* задаем цвет фона */
  padding: 0 20px; /* отступ справа и слева 20px */
}

/* Отдельно стилизуем поле сообщение */
.input-box textarea {
  resize: none; /* чтобы нельзя было менять высоту */
  padding: 20px;
  font-family: "Roboto", sans-serif;
}

/* Это контейнер для поля сообщение */
.message-box {
  min-height: 110px; /* минимальная высота 110px */
}

/* Стили для контейнера кнопки */
.button {
  display: inline-block; /* делаем блочно-строчный элемент */
}

/* Стили для самой кнопки */
.button input[type="button"] {
  color: #fff;
  font-size: 18px;
  background: #3e2093;
  outline: none;
  border: none;
  padding: 10px 20px;
  border-radius: 7px;
  transition: 0.2s; /* чтобы плавно менялся цвет при наведении (:hover) */
}

/* Меняем цвет фона при наведении на кнопку */
.button input[type="button"]:hover {
  background: rgb(0, 0, 207);
}

* Меняем стили при ширине экрана меньше 800px */
@media (max-width: 800px) {
  /* Теперь форма (правая колонка) будет сверху, а элементы (левая колонка) снизу */
  .content {
    height: 100%;
    flex-direction: column-reverse; /* располагаем в колонку и реверсивно */
  }

  /* Внутри левой колонки внутренние элементы располагаем в ряд */
  .left-side {
    margin-top: 50px;
    flex-direction: row; /* располагаем элементы (адрес, телефон, email) в ряд */
    width: 100%; /* левая колонка на всю ширину */
    justify-content: center;
    flex-wrap: wrap; /* перенос элементов, если не хватит места */
  }
  .details {
    margin-right: 20px;
  }
  .details:last-child {
    margin-right: 0;
  }

  /* Убираем разделительную линию */
  .left-side::before {
    display: none;
  }

  /* Правая колонка теперь на всю ширину и не имеет отступа слева */
  .right-side {
    width: 100%;
    margin-left: 0;
  }
}

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["имя"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["сообщение"];

    $to = "jk122@yandex.ru";
    $subject = "Сообщение с вашего сайта";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>

</style>
    
    <script
      src="https://kit.fontawesome.com/fce9a50d02.js"
      crossorigin="anonymous"
    ></script>
  </body>

</html
</head>