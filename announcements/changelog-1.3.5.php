<?php
  $page_title ='KOffice 1.3.5 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>



<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.3.4.
</p>

<h3><a name="i18n">Languages</a></h3>
<ul>
  <li>New: Breton (br), as preview</li>
  <li>Fix for Danish documentation to be processed on KDE 3.1.5.</li>
</ul>
<p>
  <em>Note:</em> improved translations are not listed in this section.
</p>

<?php /*

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<h4>KOfficeCore</h4>
<ul>
</ul>

<h4>KOfficeUI</h4>
<ul>
</ul>

<h4>KoText library features (shared between KWord and KPresenter)</h4>
<ul>
</ul>

<h3><a name="allapps">All Applications</a></h3>
<ul>
</ul>

*/ ?>

<h3><a name="kword">KWord</a></h3>
<ul>
  <li>
    Fix image inserting
    (<a href="http://bugs.kde.org/show_bug.cgi?id=72827">#72827</a>)
  </li>
  <li>
    Fixes when changing properties of multiple frames at once.
    Also allow changing "protect-size" for multiple frames.
  </li>
</ul>


<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
  <li>Ignore sticky objects when duplicating a page</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
  <li>
    Fix un-merging of cells
    (<a href="http://bugs.kde.org/show_bug.cgi?id=87700">#87700</a>)
  </li>
</ul>

<?php /*

<h3><a name="kchart">KChart</a></h3>
<ul>
</ul>

<h3><a name="kugar">Kugar</a></h3>
<ul>
</ul>

<h3><a name="kivio">Kivio</a></h3>
<ul>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<ul>
</ul>

<h3><a name="karbon">Karbon</a></h3>
<ul>
</ul>

*/ ?>

<h3><a name="filters">Filters</a></h3>

<?php /*

<h4>KWord's OpenOffice.org Writer Export Filter</h4>
<ul>
</ul>

<h4>KWord's RTF Import Filter</h4>
<ul>
</ul>

*/ ?>

<h4>KWord's PDF Import Filter</h4>
<ul>
  <li>
    <strong>SECURITY:</strong>
    more robust fix for the integer overflow vulnerability
  </li>
</ul>

<?php /*
<h4>KPresenter's OpenOffice.org Impress Import Filter</h4>
<ul>
</ul>
*/ ?>

<h4>KPresenter's OpenOffice.org Impress Export Filter</h4>
<ul>
  <li>
	Export Group object
  </li>
  <li>
	Export Text Vertical Alignment
  </li>
  <li>
	Export Text Margins
  </li>
  <li>
        <a href="http://bugs.kde.org/show_bug.cgi?id=92061">Fix #92061</a>
	"KPresenter export bad horizontal lines in Open Office"
  </li>
  <li>
  	Fix export vertical line
  </li>
</ul>

<h3>Previous changelogs</h3>
<a href="changelog-1.3.4.php">1.3.4</a> |
<a href="changelog-1.3.3.php">1.3.3</a> |
<a href="changelog-1.3.2.php">1.3.2</a> |
<a href="changelog-1.3.1.php">1.3.1</a> |
<a href="changelog-1.3.php">1.3</a> |
<a href="changelog-1.3rc1.php">1.3rc1</a> |
<a href="changelog-1.3beta4.php">1.3beta4</a> |
<a href="changelog-1.3beta3.php">1.3beta3</a> |
<a href="changelog-1.3beta2.php">1.3beta2</a> |
<a href="changelog-1.3beta1.php">1.3beta1</a>

<?php
  include("footer.inc");
?>
