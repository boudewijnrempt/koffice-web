<?php
  $page_title = "KOffice - Integrated Office Suite";
  $site_root = "./";
  $site_menus = 2;
  include("koffice.inc");
  include("header.inc");
?>

    <p><b>KOffice</b> is a free, integrated office suite for <a href="http://www.kde.org">KDE</a>, the K Desktop Environment.</p>

    <p><b>KOffice <?php echo $currentversion ?></b> is the current official KOffice release. Please see the 
    <a class="sidebar" href="/releases/<?php echo $currentversion; ?>-release.php">release notes</a> for further details.</p>
    
    <!--
    <p>There is also an unstable, testing version <?php echo $develversion ?> which you may try out. See the
    <a class="sidebar" href="/releases/<?php echo $develversion ?>-release.php">notes</a> for this release.</p>
    -->

    <p>In the KOffice suite the following parts are being developed:</p>

    <table width="90%">
    
    <tr>
    <td><a href="kword/"><img src="pics/hi32-app-kword.png" alt="KWord logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kword/">KWord</a></b> - A frame-based word processor capable of professional standard documents</td>
    </tr>
    <tr>
    <td><a href="kspread/"><img src="pics/hi32-app-kspread.png" alt="KSpread logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kspread/">KSpread</a></b> - A powerful spreadsheet application.</td>
    </tr>
    <tr>
    <td><a href="kpresenter/"><img src="pics/hi32-app-kpresenter.png" alt="KPresenter logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kpresenter/">KPresenter</a></b> - A full-featured presentation program.</td>
    </tr>
    <tr>
    <td><a href="kivio/"><img src="pics/hi32-app-kivio.png" alt="Kivio logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kivio/">Kivio</a></b> - A <i>Visio&reg;</i>-style flowcharting application.</td>
    </tr>
    <tr>
    <td><a href="karbon/"><img src="pics/hi32-app-karbon.png" alt="Karbon14 logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="karbon/">Karbon14</a></b> - A vector drawing application.</td>
    </tr>
    <tr>
    <td><a href="krita/"><img src="pics/hi32-app-krita.png" alt="Krita logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="krita/">Krita</a></b> - A pixel-based image manipulation program like <i>The GIMP</i> or <i>Adobe&copy; Photoshop&reg;.</i></td>
    </tr>
    <tr>
    <td><a href="kugar/"><img src="pics/hi32-app-kugar.png" alt="Kugar logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kugar/">Kugar</a></b> - A tool for generating business quality reports.</td>
    </tr>
    <tr>
    <td><a href="kchart/"><img src="pics/hi32-app-kchart.png" alt="KChart logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kchart">KChart</a></b> - An integrated graph and chart drawing tool.</td>
    </tr>

    <tr>
    <td><a href="kformula/"><img src="pics/hi32-app-kformula.png" alt="KFormula logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kformula">KFormula</a></b> - A powerful formula editor.</td>
    </tr>

    <tr>
    <td><a href="kexi/"><img src="pics/cr32-app-kexi.png" alt="Kexi logo" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kexi/">Kexi</a></b> - Integrated Database Environment Access.</td>
    </tr>

    <tr>
    <td><a href="filters/"><img src="pics/cr32-mime-document.png" alt="Logo for KOffice filters" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kexi/">Filters</a></b> - Import and Export Filters for KOffice.</td>
    </tr>

    </table>


<!--    <a name="schedule"><h2>Release Schedule</h2></a> -->

    <!--All info text has moved to the info section. We will need
    some short intro here... -->

<?php
 kde_general_news("./news.rdf", 5, true);
?>

<?php
  include("footer.inc");
?>
