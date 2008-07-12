<?php
  $page_title ='KOffice 2.0 Alpha 9 Visual Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
  ?>

<p>
The following screenshots allow to visualize some of the major changes that have
happen since the release ofKOffice 2.0 Alpha 8.
</p>

<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<!-- <li><a href="#kword">KWord</a></li> -->
<!-- <li><a href="#kspread">KSpread</a></li> -->
<!-- <li><a href="#kpresenter">KPresenter</a></li> -->
<li><a href="#kexi">Kexi</a></li>
<!-- <li><a href="#kplato">KPlato</a></li> -->
<li><a href="#krita">Krita</a></li>
<!-- <li><a href="#karbon">Karbon</a></li> -->
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<?php

$generalGallery = new ImageGallery("KOffice Libraries");
$generalGallery->addImage("pics/2008_07_16_kotext_paragraph_tool_sm.png", "pics/2008_07_16_kotext_paragraph_tool.png", "200","121", "[Screenshot]", 0, "An experimental paragraph tool for visual editing of the layout of a paragraph.");
$generalGallery->show();
?>

<h3 id="kexi">Kexi</h3>
<?php
$kexiGallery = new ImageGallery("Kexi");
$kexiGallery->addImage("pics/2008_07_16_kexi_to_kspread_sm.png", "pics/2008_07_16_kexi_to_kspread.png", "200","125", "[Screenshot]", 0, "The report plugins of kexi can export to a spread sheet file that is then loaded in KSpread");
$kexiGallery->addImage("pics/2008_07_16_kexi_to_html_sm.png", "pics/2008_07_16_kexi_to_html.png", "200", "125", "[Screenshot]", 0, "The report plugins of kexi can export to HTML.");
$kexiGallery->show();

?>

<h3 id="krita">Krita</h3>
<?
$kritaGallery = new ImageGallery("Krita");
$kritaGallery->addImage("pics/2008_07_16_krita_shapelayer_with_filter_layer_sm.png", "pics/2008_07_16_krita_shapelayer_with_filter_layer.png", "200", "119", "[Screenshot]", 0, "In Krita, it is possible to have a filter layer on top of a vector layer, this give access to a wide range of effects on vectors.");
$kritaGallery->addImage("pics/2008_07_16_krita_sumi-e_sm.png", "pics/2008_07_16_krita_sumi-e.png", "200", "121", "[Screenshot]", 0, "The new sumi-e painting operation.");
$kritaGallery->show();

?>
