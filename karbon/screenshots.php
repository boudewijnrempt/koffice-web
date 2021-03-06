<?php
  $page_title="Karbon14 Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("Karbon14 Screenshots");
$gallery->addImage("pics/basicgradsthumb.png", "pics/basicgrads.png", "211", "202", "[Screenshot]", 0 , "Some gradients");
$gallery->addImage("pics/insert_knotsthumb.png", "pics/insert_knots.png", "203", "200", "[Screenshot]", 0 , "Insertion of extra nodes while keeping the overall shape of the path");
$gallery->startNewRow();
$gallery->addImage("pics/karbon_sm.png", "pics/karbon.png", "270", "190", "[Screenshot]", 0 , "An imported SVG file");
$gallery->addImage("pics/sunflower_2005_09_270.png", "pics/sunflower_2005_09.png", "270", "200", "[Screenshot]", 0 , "An imported Open Clipart file");
$gallery->show();
?>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>

