<?php
  $page_title='KSpread';
  $site_root="../";
  include("koffice.inc");
  include("header.inc");
?>

<?php
   include("kspread.inc");
   $appinfo->showIconAndCopyright();
?>

<p>KSpread is a scriptable spreadsheet program which provides both
table-oriented sheets and support for complex mathematical formulas and
statistics.</p>

<center>
  <?php
    $gallery = new ImageGallery("KSpread- Screenshot");
    $gallery->addImage("pics/sheet_2005_09_330.png",
                       "pics/sheet_2005_09.png",
                       330, 288,
                       "[Screenshot]", "",
                       "KSpread");
    $gallery->show();
  ?>
</center>
<p>KSpread's features include:</p>
<ul>
<li>multiple tables/sheets per document;</li>
<li>templates; </li>
<li>multiple chart formats for displaying data graphically;</li> 
<li>headers and footers; </li>
<li>Almost 400 formulas, including standard deviation, variance, present value of annuities and much more; </li>
<li>sorting; </li>
<li>scripting; </li>
<li>lists; </li>
<li>cell data validity checking with configurable warnings/actions;</li> 
<li>comments; </li>
<li>series (days of week, months of year, numbers, etc.);</li> 
<li>conditional coloring of cells; </li>
<li>hyperlinks; </li>
<li>row and column customization (size, show/hide, font type, style and size, etc.);</li> 
<li>cell customization (data/number format, precision, border, alignment, rotation, background color and pattern, 
font type, style and size, etc.). </li>
</ul>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>




