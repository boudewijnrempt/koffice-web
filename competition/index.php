<?php
  $page_title="Competitions";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<h3>Current competition</h3>
<p>The current competition <a href="guiKOffice.php">GUI and Functionality Design Competition for KOffice 2</a> started on December 08 2005 and will last until January 2006. Prize is $1000 (US dollars).</p>

<a name="news" />
<?php
  kde_general_news("./news.rdf", 5, true);
 ?>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
