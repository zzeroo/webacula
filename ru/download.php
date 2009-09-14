
<?php require_once("header.php"); ?>

<!-- menu -->
<div id="menu">
  <ul>
    <li><a href="<?php echo $base_url; ?>">Главная</a></li>
    <li><a href="<?php echo $base_url; ?>/screenshot.php">Скриншоты</a></li>
    <li id="first" class="active"><a href="<?php echo $base_url; ?>/download.php">Скачать</a></li>
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
      <h3>Скачать</h3>

    <p>Получить новую стабильную версию : </p>
    <pre>
    git clone git://webacula.git.sourceforge.net/gitroot/webacula/webacula
    </pre>
    или
    <pre>
    git clone git://github.com/tim4dev/webacula.git
    </pre>

   <br />
    <h3>Файлы последних релизов</h3>
    <p>
    <ul>
      <li><a href="http://sourceforge.net/project/showfiles.php?group_id=201199">Файлы последних релизов на Source Forge</a></li>
    </ul>  
    </p>

   <br />
    <h3>Домашняя страница проекта Webacula</h3>
    <p>
    <ul>
      <li><a href="http://sourceforge.net/projects/webacula/">Webacula на Source Forge</a></li>
    </ul>  
    </p>


   <br />
    <h3>Инструкции по установке</h3>
    <p>См. файл install/INSTALL для подробной информации.</p>

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
