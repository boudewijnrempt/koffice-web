<?php
  $page_title = "KOffice - Integrated Office Suite";
  $site_root = "./";
  $site_menus = 2;
  include("koffice.inc");
  include("header.inc");
?>

    <p><b>KOffice</b> is a free, integrated office suite for <a href="http://www.kde.org">KDE</a>, the K Desktop Environment.</p>

    <p><b>KOffice <?php echo $currentversion ?></b> is the current official KOffice release. Please see the <a class="sidebar" href="/releases/<?php echo $currentversion; ?>-release.phtml">release notes</a> for further details.</p>
    
    <p>There is also an unstable, testing version <?php echo $develversion ?> which you may try out. See the
    <a class="sidebar" href="/releases/<?php echo $develversion ?>-release.phtml">notes</a> for this release.</p>

    <p>In the KOffice suite the following parts are being developed:</p>

    <table width="90%">
    <tr>
    <td><a href="kword/"><img src="pics/hi32-app-kword.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kword/">KWord</a></b> - A frame-based word processor capable of professional standard documents</i></td>
    </tr>
    <tr>
    <td><a href="kspread/"><img src="pics/hi32-app-kspread.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kspread/">KSpread</a></b> - A powerful spreadsheet application.</td>
    </tr>
    <tr>
    <td><a href="kpresenter/"><img src="pics/hi32-app-kpresenter.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kpresenter/">KPresenter</a></b> - A full-featured presentation program.</td>
    </tr>
    <tr>
    <td><a href="kivio/"><img src="pics/hi32-app-kivio.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kivio/">Kivio</a></b> - A <i>Visio&reg;</i>-style flowcharting application.</td>
    </tr>
    <tr>
    <td><a href="karbon/"><img src="pics/hi32-app-karbon.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="karbon/">Karbon14</a></b> - A vector drawing application.</td>
    </tr>
    <tr>
    <td><a href="krita/"><img src="pics/hi32-app-krita.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="krita/">Krita</a></b> - A pixel-based image manipulation program like <i>The GIMP</i> or <i>Adobe&copy; Photoshop&reg;.</i></td>
    </tr>
    <tr>
    <td><a href="kugar/"><img src="pics/hi32-app-kugar.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kugar/" target="_new">Kugar</a></b> - A tool for generating business quality reports.</td>
    </tr>
    <tr>
    <td><a href="kchart/"><img src="pics/hi32-app-kchart.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kchart">KChart</a></b> - An integrated graph and chart drawing tool.</td>
    </tr>

    <tr>
    <td><a href="kformula/"><img src="pics/hi32-app-kformula.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kformula">KFormula</a></b> - A powerful formula editor.</td>
    </tr>

    <tr>
    <td><a href="kexi/"><img src="pics/cr32-app-kexi.png" width="32" height="32" border="0" /></a></td>
    <td><b><a href="kexi/">Kexi</a></b> - Integrated Database Environment Access.</td>
    </tr>


    </table>


<!--    <a name="schedule"><h2>Release Schedule</h2></a> -->

    <p>All parts of KOffice have seen a major upgrade in both usability and stability with the recent KOffice 1.2.1 release. 
    <!--All info text has moved to the info section. We will need
    some short intro here... -->

    <p>For information about the import or export filters available in KOffice,
    <a href="/filters/">please click here</a></p>

<?php
 kde_general_news("./news.rdf", 5, true);
?>

<?php
  include("footer.inc");
?>

