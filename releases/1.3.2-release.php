<?php
  $page_title='KOffice 1.3.2 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the second bugfix version in KOffice 1.3 series.</p>

      <h2>Changelog</h2>
      <ul>
        <li><a href="/announcements/changelog-1.3.2.php">Changes done after 1.3.1 (1.3.2 -- 1.3.1)</a></li>
        <li><a href="/announcements/changelog-1.3.1.php">Changes done after 1.3 (1.3.1 -- 1.3)</a></li>
	<li><a href="/announcements/changelog-1.3.php">Complete 1.3 changelog</a></li>
      </ul>

      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/download/source.php">Source code</a></li>
      <li><a href="/download/">Binary packages</a></li>
      </ul>
      
      <p>
        <em>Note:</em> the source language packages unpack as directories
        whose names start with "kde-i18n" instead of "koffice-i18n"
        (as KOffice 1.3.1 did.
      </p>
      
      <h2>MD5 sums</h2>
      <p>
       The MD5 sums for the tarballs are:
      </p>
<?php
  include "md5-koffice-1.3.2.inc"
?>

      <p>
       Also provided: <a href="md5-pgp-koffice-1.3.2.txt">a PGP-signed version of the MD5 sums</a>.
      </p>
      
      <p><em>Note:</em>the PGP key for signing is new,
        <a href="/download/signatures.php#goutte">please see the signing key overview.</a>
      </p>

<?php include("footer.inc"); ?>
