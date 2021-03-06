<?php
  $page_title="KOffice Developer Resources";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
   <p>This section provides useful links, information and resources for developers that are intending to work on KOffice.</p>

   <h2>General Resources</h2>
      
   <ul>
     <li><a href="http://wiki.koffice.org">Developer wiki</a></li>
     <li><a href="generalinfo/">General developer information</a></li>
     <li><a href="apidocmain.php"><strong>KOffice API reference</strong></a></li>
     <li><a href="tasks/">Tasks</a> (Volunteers needed!)</li>
     <li><a href="filters/">Filters</a></li>
     <li><a href="fileformat/">OASIS OpenDocument file format</a>
         (also useful for filters)</li>
     <li><a href="http://developer.kde.org/development-versions/koffice-features.html">KOffice Feature Plan</a></li>
     <li><a href="http://techbase.kde.org/Schedules/KOffice_1.6_Release_Schedule">KOffice 1.6 Release Plan</a></li>
     <li><a href="http://techbase.kde.org/Schedules/KOffice_2.0_Release_Schedule">KOffice 2.0 Release Plan</a></li>
     <li><a href="website/">KOffice web site development</a></li>
   </ul>

   <h2>Application specific pages</h2>

   <ul>
     <li><a href="http://www.kexi-project.org/">Kexi Project Wiki</a></li>
     <li><a href="krita/">Krita development</a> and it's 
         <a href="http://wiki.koffice.org/index.php?title=Krita/ToDo">TODO list</a></li>
   </ul>

   <h2>Specific Resources</h2>
   <ul>
     <li><a href="dcop/">Scripting with DCOP</a></li>
     <li><a href="constructive/">Constructive Critics</a></li>
     <li><a href="icons/">Icon list</a> and the related <a href="icons/koffice_interface.odp">FOSDEM 2006 talk</a></li>
   </ul>
   
   
   <h2>Pages About KOffice on the KDE Wiki</h2>
   
   <ul>
     <?php /* Note: the following URL is really Koffice (with lower case o) */	?>
     <li><a href="http://wiki.kde.org/tiki-index.php?page=Quality+Team+KDE+Koffice">KOffice Quality</a></li>

     <li><a href="http://wiki.koffice.org/index.php?title=Build_KOffice">Compiling KOffice Step By Step</a></li>
   </ul>
   
   <h2>External Sites And Pages About KOffice</h2>
   
   <ul>
     <li><a href="http://www.rule-project.org/?q=node/6">The RULE Mini Kde page</a></li>
   </ul>

   <hr />

   <p><a href="news.php">The formerly KOffice Developer News do not exist anymore.</a></p>

<?php
   include("footer.inc");
?>
