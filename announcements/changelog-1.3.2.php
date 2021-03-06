<?php
  $page_title ='KOffice 1.3.2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.3.1.
</p>

<h3><a name="i18n">Languages</a></h3>
<ul>
  <li>
    New: Upper Sorbian (hsb), as preview (only KWord-related translations)
  </li>
</ul>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<h4>KOfficeCore:</h4>
<ul>
<li>
  Give the backup file the same permissions as the original file 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=54459">#54459</a>)
</li>
<li>Save window settings also when using File/Close</li>
<li>
 Fix <a href="http://bugs.kde.org/show_bug.cgi?id=83972">#83972</a>
 (KOffice compiles fine under Qt 3.1 and KDE 3.1) </li>
</ul>

<h4>KOfficeUI:</h4>
<ul>
<li>Improved unit widgets</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>
  Changing a style in the style manager remembered a wrong "following style",
  so later changes in the style manager wouldn't propagate correctly
  (<a href="http://bugs.kde.org/show_bug.cgi?id=47377">#47377</a>)
</li>
<li>
  Fixed wrong position of suffix in numbered right-to-left paragraphs 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=47178">#47178</a>)
</li>
<li>
  Fixed formatting bug, where an inline formula or any other big character after
  the paragraph counter, would make the paragraph counter disappear
  (<a href="http://bugs.kde.org/show_bug.cgi?id=82609">#82609</a>).
</li>
<li>
  Fixed wrong alignment when using numbered paragraphs and a tab as first character
  (<a href="http://bugs.kde.org/show_bug.cgi?id=83489">#83489</a>)
</li>
<li>
  Added newParagraph DCOP call (see <a href="http://www.koffice.org/developer/dcop/">this short howto</a>)
</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>
  Fixed wrong printing of frame borders due to excessive clipping
  (<a href="http://bugs.kde.org/show_bug.cgi?id=81222">#81222</a>)
</li>
<li>Turning off the "Create backup file" option now works.</li>
</ul>


<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Fixed crash in infinite loop presentation mode when first slide is not shown</li>
<li>Fixed show the duration for the correct page if not all slides are shown</li>
<li>Fixes for vertical alignment of text inside text objects.</li>
<li>
  Fixed bug 
  <a href="http://bugs.kde.org/show_bug.cgi?id=76286">#76286</a>
  export web presentation into network
</li>
<li>Turning off the "Create backup file" option now works.</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>Fix condition cell attribute (multi condition)</li>
<li>
  Fix 
  <a href="http://bugs.kde.org/show_bug.cgi?id=69798">#69798</a>
  (KSpread SEXDEC parse error)
</li>
<li>Fix enable/disable action into validation dialogbox</li>
<li>Fix disable/enable "show table" menu item</li>
<li>
  Fix crash when viewing a KSpread document in Konqueror
  (<a href="http://bugs.kde.org/show_bug.cgi?id=69066">bug #69066</a>)
</li>
</ul>

<h3><a name="kchart">KChart</a></h3>
<ul>
<li>Fix crash <a href="http://bugs.kde.org/show_bug.cgi?id=82149">bug#82149</a></li>
<li>Fix <a href="http://bugs.kde.org/show_bug.cgi?id=83465">#83465</a></li>
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>### TODO</li>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<ul>
</ul>
-->

<h3><a name="karbon">Karbon</a></h3>
<ul>
<li>Fixed <a href="http://bugs.kde.org/show_bug.cgi?id=32574">bug #32574 "Unable to close or fill bezier curves"</a></li>
<li>Fixed <a href="http://bugs.kde.org/show_bug.cgi?id=75035">bug #75035 "new objects do not appear immediately in layers list"</a></li>
<li>Fixed <a href="http://bugs.kde.org/show_bug.cgi?id=78343">bug #78343 "changing zoom setting freezes application"</a></li>
</ul>

<h3><a name="filters">Filters</a></h3>

<h4>KWord's RTF import filter:</h4>
<ul>
<li>
    Avoid crashing if more cells are defined than declared on a row 
    (partially <a href="http://bugs.kde.org/show_bug.cgi?id=82905">#82905</a>
    and <a href="http://bugs.kde.org/show_bug.cgi?id=83923">#83923</a>)
</li>
<li>
  Allow ampersands in font names 
  (partially <a href="http://bugs.kde.org/show_bug.cgi?id=82905">#82905</a>)
</li>
</ul>

<h4>KPresenter's OOImpress import filter:</h4>
<ul>
<li>Import rotate object</li>
<li>Fix load end/start line</li>
<li>Import hide/show slide</li>
<li>Import randow page effect</li>
<li>Import duration slide transition</li>
<li>Import sticky objects</li>
<li>
  Fix <a href="http://bugs.kde.org/show_bug.cgi?id=67087">#67087</a>,
  allow to load template file
</li>
<li>Fix import background style</li>
</ul>

<h4>KPresenter's OOImpress export filter:</h4>
<ul>
<li>Export polygone/polyline object</li>
<li>Export pie/chord/arc object</li>
<li>Export rotate object</li>
<li>Export object name</li>
<li>Export picture object</li>
</ul>


<h4>KSpread's OOCalc import filter:</h4>
<ul>
<li>Import support for protect document</li>
<li>
  Fix <a href="http://bugs.kde.org/show_bug.cgi?id=67087">#67087</a>
  import template document
</li>
<li>Import load print attribute</li>
<li>Import validation attribute</li>
<li>Import column width</li>
<li>Import text indent</li>
<li>Fix import note with multiline</li>
</ul>

<h4>KSpread's OOCalc export filter:</h4>
<ul>
<li>Fix export header/footer</li>
<li>Export print range</li>
<li>Fix export don't print cell</li>
</ul>

<h4>Karbon's EPS filter:</h4>
<ul>
<li>
  Fix <a href="http://bugs.kde.org/show_bug.cgi?id=82964">#82964</a>
  (Fix parsing of boundingbox in the presence of "%ALDBoundingBox")
</li>
</ul>

<h3>Previous changelogs</h3>
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
