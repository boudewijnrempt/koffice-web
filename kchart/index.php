<?php
  $page_title="KChart";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("KChart");
  $appinfo->setIcon( "pics/hi48-app-kchart.png", "48", "48");
  $appinfo->setVersion($kchartversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("1998", "the KChart Team");
  $appinfo->addAuthor("Kalle Dalheimer", "kalle@kde.org");
  $appinfo->addAuthor("Torben Weis", "weis@kde.org");
  $appinfo->addContributor("Laurent Montel", "montel@kde.org");
  $appinfo->addContributor("Karl-Heinz Zimmer", "khz@kde.org");
  $appinfo->show();
?>

<h2>Description</h2>

      <p><b>Description:</b><br>
      KChart is the KOffice chart drawing application.  Use it to embed charts
      into your KOffice documents, e.g. a report written with KWord.</p>

      <p><b>Easy to Use:</b><br />
      <ul>
        <li>default values for all parameters</li>
        <li>automatical ordinate axis computation based on highest/lowest data value</li>
        <li>default sizes (fonts, line widths...) relative to the window size</li>
      </ul>
      </p>


      <p><b>Highly Configurable:</b><br />
      <ul>
        <li>All of the parameters may be changed after configuring/drawing the chart.</li>
        <li>Size values (axis/grid line width, font sizes, bar width, dataset gap,
          pie chart radius ... ) may be specified in either absolute pixels or
          relative to the window size.  This makes your chart layout-independent
          since such values are being recalculated automatically when the window
          dimensions have changed.</li>
      </ul>
      </p>
      
      <p><b>Flexible Layout:</b><br />
      <ul>
        <li>Legends may be centered at a chart edge or in a corner with the chart
          making way in vertical and/or in horizontal direction thus offering
          16 legend/chart relationships to choose from</li>
        <li>Header and footer texts have special font type/size and color settings</li>
      </ul>
      </p>

      <p><b>Axes and Data:</b><br />
      <ul>
        <li>Automatical ordinate axis computation based on highest/lowest data value
          which can be easily replaced by programmer-defined start, end and delta
          value settings.
        <li>Abscissa labels may be taken either from data cells containing the
          respective strings or from programmer-defined QStringLists or calculated
          automatically based on a format chosen by the user and values found
          in the cells
        <li>Up to 8 axes: 2 left, 2 right, 2 top, 2 bottom
        <li>A chart may have 2 different ordinates: e.g. left axis for series 1,2,3
          right axis for data series 4
        <li>Each axis may draw (sub-)grid lines using their own color, line width,
          style
      </ul>
      </p>

      <p><b>Chart Combinations:</b><br />
      <ul>
        <li>sharing the same abscissa axis or using different ones (e.g Top and
          Bottom axis)
        <li>sharing the same ordinate or using different ones (e.g Left and Right
          axis)
        <li>Axes may use the same line color / line width as the bars (or the lines,
          resp.) which they belong to.
      </ul>
      </p>

      <p><b>Chart Types:</b><br />
      <ul>
        <li>Bar:    normal | stacked | percent, 2D | 3D-Look
        <li>Line:   normal | stacked | percent, 2D | 3D-Look,
                  show marker: circle | square | diamond
        <li>Area:   normal | stacked | percent
        <li>HiLo:   normal | open-close
        <li>Pie:    normal | exploded | some exploded, 2D | 3D
        <li>Ring:   normal | exploded | some exploded,
                  fixed thickness | relative thickness
        <li>Polar:  normal | stacked | percent
      </ul>
      </p>


<?php include("footer.inc"); ?>
