
<?php require_once("header.php"); ?>

<!-- menu -->
<div id="menu">
  <ul>
    <li><a href="<?php echo $base_url; ?>">Home</a></li>
    <li><a href="<?php echo $base_url; ?>/screenshot.php">Screenshots</a></li>
    <li id="first" class="active"><a href="<?php echo $base_url; ?>/download.php">Downloads</a></li>
    <li><a href="<?php echo $base_url; ?>/contact.php">Contact Us</a></li>
    <li><a href="<?php echo $base_url; ?>/ru/index.php">Русский</a></li>
  </ul>
	<div></div>
</div>



<div id="container">
  <div id="primarycontainer">
    <div id="primarycontent">
      <!-- Primary content start -->
	<br />
      <h3>Downloads</h3>

    <p>Receive the newest stable version : </p>
    <pre>
    git clone git://webacula.git.sourceforge.net/gitroot/webacula/webacula
    </pre>
    or
    <pre>
    git clone git://github.com/tim4dev/webacula.git
    </pre>

   <br />
    <h3>Latest File Releases</h3>
    <p>
    <ul>
      <li><a href="http://sourceforge.net/project/showfiles.php?group_id=201199">Latest File Releases on Source Forge</a></li>
    </ul>  
    </p>

   <br />
    <h3>Webacula project home</h3>
    <p>
    <ul>
      <li><a href="http://sourceforge.net/projects/webacula/">Webacula project on Source Forge</a></li>
    </ul>  
    </p>

   <br />
    <h3>Installation Instructions</h3>
    <p>See install/INSTALL file for details.</p>

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
