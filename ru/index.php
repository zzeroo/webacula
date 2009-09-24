<?php require_once("header.php"); ?>

<!-- menu -->
<div id="menu">
  <ul>
    <li id="first" class="active"><a href="<?php echo $base_url; ?>">Главная</a></li>
    <li><a href="<?php echo $base_url; ?>/screenshot.php">Скриншоты</a></li>
    <li><a href="<?php echo $base_url; ?>/download.php">Скачать</a></li>
    <li><a href="<?php echo $base_url; ?>/contact.php">Контакты</a></li>
    <li><a href="<?php echo $base_url; ?>/../index.php">English</a></li>
  </ul>
	<div></div>
</div>



<div id="container">
  <div id="primarycontainer">
    <div id="primarycontent">
      <!-- Primary content start -->
	<br />
      <h3>О программе</h3>

      <p><strong>
	<a href="http://sourceforge.net/projects/webacula" name="webacula" target="_blank">
	Webacula</a></strong> - <strong>We</strong>b + <strong>Bacula</strong> - веб-интерфейс для
	<a href="http://www.bacula.org/" name="Bacula" target="_blank">Bacula backup system</a>.
	</p>

<br />
   <h3>Новое в версии 3.2</h3>
         <ul>
			<li><b>Полная поддержка MySQL, PostgreSQL и Sqlite</b>. <font  style="color : #ff0000;">NEW!</font></li>
         <li>Для веб дизайнеров : теперь лекго создать новый скин. <font  style="color : #ff0000;">NEW!</font></li>
         <li>Перенумерация версий. Основные номера версий WeBacula будут совпадать с Bacula</li>
          <li>Восстановление самого свежего бэкапа для Клиента</li>
          <li>Восстановление бэкапа для Клиента, сделанного перед указанным временем</li>
          <li>Улучшенный дизайн </li>
          <li>RSS лента </li>
         </ul>


	<br />
	<h3>Возможности</h3>
      	<p>Основные возможности :</p>
	<ul>
    <li>Запуск Заданий</li>
    <li>Восстановление всех файлов или выбранных файлов для указанного Id Задания</li>
	 <li>Восстановление самого свежего бэкапа для клиента</li>
	 <li>Восстановление бэкапа, сделанного перед указанным временем</li>
    <li>Построение временной диаграмы выполнения Заданий</li>
    <li>Монтирование, размонтирование Хранилищ</li>
    <li>Показ Заданий, завершившихся с ошибками, сбоями (за последние 7 дней)</li>
	<li>Показ состояния ваших Томов</li>
	<li>Показ запланированных Заданий (на ближайшие 24 часа)</li>
	<li>Показ всех выполняющихся Заданий</li>
	<li>Показ завершившихся Заданий (выполненных за последние 24 часа)</li>
	<li>Поиск Заданий по нескольким критериям</li>
	<li>Выдача детальной информации о Пулах, Томах, Хранилищах и Клиентах</li>
   <li>RSS лента </li>
   <li>Добавлен скрипт  install/check_system_requirements.php </li>
	<li>Мультиязычность. В настоящее время поддерживаются языки: английский, немецкий, французский, бразильский португальский, русский.</li>
	</ul>

	<br />
	<h3>Журнал</h3>
<p>Журнал - простой электронный журнал для записей о бэкапах. Оператор вручную работает с журналом: добавляет,
изменяет, удаляет записи.
Записи могут содержать ссылки (обычные веб-ссылки по которым можно кликать) на Задания Bacula или ссылки
на другие записи в журнале.</p>
<p>В журнал записывается информация, например, о различных сбоях в Заданиях, и других нештатных ситуациях.</p>
<p><a href="<?php echo $base_url; ?>/screenshot.php">Смотрите скриншоты</a> для подробной информации.</p>
<p>Журнал хранится в отдельной БД "webacula", теперь поддерживаются MySQL, PostgreSQL и Sqlite.</p>

	<br />
      <h3>Системные требования</h3>
      <p>
	<ul>
	<li>Bacula 3.0 или выше</li>
    <li>Поддерживается СУБД <b>MySQL, PostgreSQL и Sqlite</b></li>
	<li>Zend Framework версии 1.8.3 или выше</li>
	<li>Zend Framework требует PHP 5 версии 5.2.4 или выше с установленным расширением PDO. Смотрите
<a href="http://framework.zend.com/manual/ru/requirements.html" target="_blank">Приложение A. System Requirements</a>
для более детальной информации.</li>
	<li>Apache и модуль mod_rewrite</li>
	<li>Установленный пакет php-gd</li>
	<li>Создать отдельную БД "webacula" (скриптом из каталога install) для возможности ведения Журнала и восстановления Заданий</li>
	<li>Включенный JavaScript для Журнала и запуска Заданий для восстановления</li>
	<li>http://php.net/dom для RSS ленты</li>
	<li><a href="http://docs.jquery.com/Browser_Compatibility" target="_blank">Совместимость с браузерами</a>.</li>
	</ul>
	</p>

	<br />
      <h3>Авторы</h3>
      <p>
Здесь перечислены все, кто прямо или косвенно участвовал в создании проекта. Спасибо всем.
Если я кого-то не упомянул, напишите пожалуйста по адресу <a href="mailto:tim4dev@gmail.com">tim4dev@gmail.com</a>
</p>
<p>Авторы:</p>
	<ul>
	<li>Alexandre Boily, alexandreboily@gmail.com : перевод на французский язык.</li>
	<li> John Resig : jQuery JavaScript Library.</li>
	<li> Joel Birch : Superfish jQuery menu widget.</li>
    <li>Kern Sibbald, kern@sibbald.com : создатель Bacula.</li>
	 <li>Reynier Perez Mira rperezm@uci.cu : испанский перевод INSTALL.es.</li>
	 <li>Samuel Rios Carvalho : перевод на бразильский португальский.</li>
    <li>Sven-Hendrik Haase, sh@lutzhaase.com : перевод на немецкий язык.</li>
    <li>Carsten Menke, Carsten.Menke@prozesse-im-unternehmen.de : перевод на немецкий язык, патчи.</li>
    <li>Yuri Timofeev, tim4dev@gmail.com : разработчик Webacula.</li>
	</ul>
	</p>

   <br />
   <h3>Зеркала</h3>
   <ul>
   <li><a href="http://webacula.sourceforge.net/">http://webacula.sourceforge.net/</a></li>
   <li><a href="http://github.com/tim4dev/webacula/">http://github.com/tim4dev/webacula/</a></li>
   </ul>
   <p>
   </p>      

<p>&nbsp;</p><p>&nbsp;</p>

<hr>
<p>Copyright 2007, 2008, 2009 Yuri Timofeev <a href="mailto:tim4dev@gmail.com">tim4dev@gmail.com</a></p>

<a href="http://www.gnu.org/licenses/gpl-3.0.html" target="_blank">
<IMG src="<?php echo $base_url; ?>/../images/other/gplv3-127x51.png" alt="GPL3" width="127" height="51" hspace="15" vspace="15" align="left" border="0">
</a>

<p>Webacula - это свободная программа; вы можете повторно распространять её и/или модифицировать
её в соответствии со Стандартной Общественной Лицензей GNU, опубликованной Фондом Свободного ПО; либо версии 3,
либо (по вашему выбору) любой более поздней версии.</p>

<p>Webacula распространяется в надежде, что она будет полезной, но БЕЗ КАКИХ-ЛИБО ГАРАНТИЙ;
даже без подразумеваемых гарантий КОММЕРЧЕСКОЙ ЦЕННОСТИ или ПРИГОДНОСТИ ДЛЯ КОНКРЕТНОЙ
ЦЕЛИ. Для получения подробных сведений смотрите Стандартную Общественную Лицензию GNU.</p>

<p>Вы должны были получить копию Стандартной Общественной Лицензии GNU вместе с этой
программой; если нет, смотрите
<a href="http://www.gnu.org/licenses/" name="GPL3" target="_blank">http://www.gnu.org/licenses/</a>.
</p>

<p>&nbsp;</p>
<div align="left">
<a href="http://framework.zend.com/" target="zfwindow"><img src="<?php echo $base_url; ?>/../images/other/PoweredBy_ZF_4LightBG.png" border="0
"></a>
&nbsp;&nbsp;&nbsp;
<a href="http://jquery.com/" target="_blank"><img src="<?php echo $base_url; ?>/../images/other/jquery_logo.png" border="0"></a>
</div>
</div>
      <!-- Primary content end -->
    </div>
  </div>
  <div id="secondarycontent">
    <!-- Secondary content start -->
<!--    <h4>Header</h4>
    <p>Body.</p>
    <ul>
      <li><a href="#">Link1</a></li>
      <li><a href="#">Link2</a></li>
    </ul>
-->
    <!-- Secondary content end -->
  </div>
  <div class="clearit"></div>
</div>

<?php require_once("footer.php"); ?>
