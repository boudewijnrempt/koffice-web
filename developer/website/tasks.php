<?php
  $page_title="KOffice Web Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<p>The following tasks for koffice.org would need some volunteers.</p>

<p>If you send patches for the koffice.org, be careful to use the source in the CVS directory:
www/areas/koffice</p>

<ul>
    <li>Some web pages are still in HTML 4 but the KDE Web is using XHTML 1.0 in the 
    meantime. Such pages should be migrated to XHTML 1.0.</li>
    
    <li>Some pages are supposed to be XHTML 1.0 but they still contain error. Such
    sites should be fixed.</li>
</ul>

<?php
   include("footer.inc");
?>