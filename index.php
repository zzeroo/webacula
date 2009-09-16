<?php require_once("header.php"); ?>

<!-- menu -->
<div id="menu">
  <ul>
    <li id="first" class="active"><a href="<?php echo $base_url; ?>">Home</a></li>
    <li><a href="<?php echo $base_url; ?>/screenshot.php">Screenshots</a></li>
    <li><a href="<?php echo $base_url; ?>/download.php">Downloads</a></li>
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
      <h3>About</h3>

      <p><strong>
	<a href="http://sourceforge.net/projects/webacula" name="webacula" target="_blank">
	Webacula</a></strong> - <strong>We</strong>b + <strong>Bacula</strong> - web interface of a
	<a href="http://www.bacula.org/" name="Bacula" target="_blank">Bacula backup system</a>.
	</p>

<br />
	<h3>News v.3.1</h3>
		<p>Change log :</p>
			<ul>
			<li><b>Full supported MySQL, PostgreSQL and Sqlite databases</b>. <font  style="color : #ff0000;">NEW!</font></li>
			<li>Renumbering versions. Now major version number of WeBacula will match the version number of Bacula</li>
			 <li>Restore the most recent backup for a client</li>
			 <li>Restore backup for a client before a specified time</li>
			 <li>Improved design </li>
			 <li>RSS feed </li>
			</ul>


	<br />
	<h3>Features</h3>
      	<p>The basic features of the program :</p>
	<ul>
    <li>Run Job</li>
    <li>Restore all files or selected files from Job by JobId</li>
	 <li>Restore the most recent backup for a client</li>
	 <li>Restore backup for a client before a specified time</li>
    <li>Show Timeline for Jobs</li>
    <li>Mount, umount Storages</li>
	<li>Show Jobs which executed with errors (during last 7 days)</li>
	<li>Show a condition of your Volumes</li>
	<li>Show scheduled Jobs (at 24 hours forward)</li>
	<li>Show all running Jobs</li>
	<li>Show terminated Jobs (executed in last 24 hours)</li>
	<li>Search Jobs on several conditions</li>
	<li>The detailed information on Pools, Volumes, Storages and Clients</li>
   <li>RSS feed </li>
	<li>Multilingual support - standard gettext (*.mo) files. Currently supported languages: English, French, German, Portuguese Brazil, Russian.</li>
	</ul>

	<br />
	<h3>Logbook</h3>
      	<p>Logbook - is simple electronic journal of backups. Records in logbook are insert, modify, delete manually by the operator.
Records can contain links (usual web-links on which it is possible to click) to Bacula Jobs or links to other records of this logbook.</p>
<p>In logbook insert  records, for example, about Jobs, failures of the equipment, supernumerary situations, etc.</p>
<p><a href="<?php echo $base_url; ?>/screenshot.php">See screenshots</a> for details.</p>
<p>Logbook stored in a separate database "webacula", now it is supported MySQL, PostgreSQL and Sqlite.</p>

	<br />
      <h3>System Requirements</h3>
      <p>
	<ul>
	<li>Bacula 3.0 or later</li>
    <li>Supported <b>MySQL, PostgreSQL and Sqlite</b> databases</li>
	<li>Zend Framework version 1.8.3</li>
	<li>Zend Framework is built with object-oriented PHP 5 and requires PHP 5.2.4 or later with PDO extension active. Please see
   	<a href="http://framework.zend.com/manual/en/requirements.html" target="_blank"> the system requirements appendix</a> for
  	more detailed information</li>
	<li>Apache and mod_rewrite</li>
	<li>Installed php-gd package. GD is an open source code library for the dynamic creation of images</li>
	<li>Create separate database "webacula" (script in install/ directory) for use Logbook and Restore Job features</li>
	<li>Enable JavaScript for Logbook and Restore Job</li>
	<li>http://php.net/dom for RSS feed</li>
	<li><a href="http://docs.jquery.com/Browser_Compatibility" target="_blank">Browser Compatibility</a>.</li>
	</ul>
	</p>


	<br />
      <h3>Authors</h3>
      <p>
This a list of the people who have contributed code, language translation to the Webacula project.
Thanks to all of you.  Without your participation, Webacula would not be the success it is today.
If you have made a contribution and do not find your name on this list, please send a note to me: <a href="mailto:tim4dev@gmail.com">tim4dev@gmail.com</a>
</p>
<p>
Contributors:
</p>
	<ul>
	<li>Alexandre Boily, alexandreboily@gmail.com : French translation.</li>
	<li> John Resig : jQuery JavaScript Library.</li>
	<li> Joel Birch : Superfish jQuery menu widget.</li>
    <li>Kern Sibbald, kern@sibbald.com : Bacula developer.</li>
	 <li>Reynier Perez Mira rperezm@uci.cu : INSTALL.es translation</li>
	 <li>Samuel Rios Carvalho : Portuguese Brazil translation.</li>
    <li>Sven-Hendrik Haase, sh@lutzhaase.com : German translation.</li>
    <li>Carsten Menke, Carsten.Menke@prozesse-im-unternehmen.de : German translation, patches.</li>
    <li>Yuri Timofeev, tim4dev@gmail.com : Webacula developer.</li>
	</ul>
	</p>

   <br />
   <h3>Mirrors</h3>
   <ul>
   <li><a href="http://webacula.sourceforge.net/">http://webacula.sourceforge.net/</a></li>
   <li><a href="http://github.com/tim4dev/webacula/">http://github.com/tim4dev/webacula/</a></li>
   </ul>
   <p>
   </p>      


<p>&nbsp;</p><p>&nbsp;</p>

<hr>
<p>Copyright 2007, 2008, 2009 Yuri Timofeev <a href="mailto:tim4dev@gmail.com">tim4dev@gmail.com</a></p>

<a href="http://www.gnu.org/licenses/gpl-3.0.html" target="_blank"><IMG src="<?php echo $base_url; ?>/images/other/gplv3-127x51.png" alt="GPL3" width="127" height="51" hspace="15" vspace="15" align="left" border="0"></a>

<p>Webacula is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License
as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.</p>

<p>Webacula is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty
of MERCHANT ABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.</p>

<p>You should have received a copy of the GNU General Public License along with this program.  If not, see
<a href="http://www.gnu.org/licenses/" name="GPL3" target="_blank">http://www.gnu.org/licenses/</a>.
</p>

<p>&nbsp;</p>
<div align="left">
<a href="http://framework.zend.com/" target="zfwindow"><img src="<?php echo $base_url; ?>/images/other/PoweredBy_ZF_4LightBG.png" border="0
"></a>
&nbsp;&nbsp;&nbsp;
<a href="http://jquery.com/" target="_blank"><img src="<?php echo $base_url; ?>/images/other/jquery_logo.png" border="0"></a>
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
