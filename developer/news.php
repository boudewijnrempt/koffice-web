<?php
  // Header
  $page_title="KOffice Developer News";
  $site_root="../";
  include("koffice.inc");
  include("header.inc");

  // Document
  include("rss2.inc");
  kde_general_news_rss2("./news.rdf", 25, false);
?>

<p>
<a href="http://feedvalidator.org/check?url=http://kde.org/areas/koffice/developer/news.rdf">
 <img src="../pics/valid-rss.png" alt="[Valid RSS]" title="Validate my RSS feed" width="88" height="31" />
</a>
</p>

<?php
  // Footer
  include("footer.inc");
?>

