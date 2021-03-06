<?php
  $page_title='Release Highlights: KOffice 1.5 Tour';
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<!--
<p align="justify">
  DATELINE APRIL 11, 2006<br />
  FOR IMMEDIATE RELEASE
</p>
-->

 <p>
 This tour accompanies the KOffice 1.5 release and shows its most important highlights
 and gorgeous features. It is a comprehensive and easy to read tour through the major
 changes since the release of KOffice 1.4.
 </p>
 <p>
 You can find the <a href="/announcements/announce-1.5.php">full announcement of KOffice 1.5 here</a>.
 </p>

 <h2>Diving into KOffice</h2>

 <p>
 With recent releases KOffice has established its status as the most comprehensive office suite in existence.
 No other office suite provides as many integrated and diverse components as KOffice. At the same time, KOffice
 requires only little memory and provides good performance, making it suitable even for old hardware and avoiding
 the need for expensive upgrades.
 </p>
 <p>
 The list of stunning improvements for the 1.5 release is simply huge, and all of them were implemented
 just within a couple of months. KOffice is picking up momentum, quite a lot as well. This tour gives a
 comprehensive overview of recent highlights. Make yourself comfortable, and enjoy the KOffice Tour.
 </p>

 <!-- the following is by no means complete, just a skeleton, will be improved later -->

 <h2>Core Technology Highlights</h2>

 <h3>Starting up - It's all new</h3>

 <p>Usability experts worked together on a complete new design of the KOffice startup dialog. It is now
 easier to use, more powerful and flexible. And above all, it's nice as well:</p>

 <img src="startup.png" alt="" width="519" height="416" />

 <h3>Native OASIS OpenDocument Format support</h3>

 <p>Finally, OASIS OpenDocument is the default native format for all major KOffice applications.
 This is a major step towards interoperability of major office suites on the basis of an open
 industry standard. OpenOffice.org also uses OpenDocument as native file format, other office suites
 support it as well. Supporting the OASIS OpenDocument thus contributes to the open and free global standard
 for office files.</p>

 <h3>Enhanced Accessibility</h3>

<p>
KWord, KSpread, and KPresenter include some enhancements for near blind users 
to have the text spoken of widgets under the mouse pointer and/or widgets 
that have the focus. It also adds a <strong>Speak Text</strong> option in the context menu 
of the KWord Document Structure Area, which is useful for speaking a 
document.
</p>

<img src="tts.png" alt="" width="545" height="408" />

<p>
In addition, all KOffice programs were enhanced for mouseless operation with 
additional shortcuts and keyboard extensions.  For instance, you can press 
Alt+F8 (customizable) and up pops a dialog which you can use to place focus 
on any widget that can receive focus.
</p>

<img src="kbd-focus-ext.png" alt="" width="435" height="301" />

<p>
See <strong>For Users with Disabilities</strong> in the KWord, KSpread, or KPresenter 
handbooks for additional information.
</p>

 <h3>Unified Scripting Support</h3>

 <p>KOffice finally provides an unified scripting approach called Kross. With Kross you can write
 Python and Ruby scripts for your KOffice documents.</p>


 <h2>KWord</h2>
    <ul type="disc">
      <li>
        <div align="justify">
         Text selecting greatly optimized.
<!--
- we made the textview indented and you can now select left of the text 
to select the left most char
  - we made the frames easier to click on (larger hit-area)
  - we made the frame-borders clickable which will move the caret if the 
caret was inside the frame already.
-->
        </div>
      </li>
      <li>
        <div align="justify">
        Fit to width zoom mode is saved between sessions and resizing the window 
will mean that the zoom is automatically changed now.
        </div>
      </li>
      <li>
        <div align="justify">
	 KWord makes selecting/moving/resizing frames easier.
        </div>
      </li>
      <li>
        <div align="justify">
	 Center page on screen.
        </div>
      </li>
    </ul>

 <h2>KSpread</h2>

    <ul>
      <li>
        <div align="justify">
	 <a href="http://ariya.blogspot.com/2006/01/percent-featurelet.html">Percent in the formula.</a>
        </div>
      </li>
      <li>
        <div align="justify">
	 <a href="http://ariya.blogspot.com/2006/01/last-minute-function-tip.html">Function tip when editing formula.</a>
        </div>
      </li>
      <li>
        <div align="justify">
	 <a href="http://ariya.blogspot.com/2005/10/function-autocomplete.html">Autocomplete for function name.</a>
        </div>
      </li>
      <li>
        <div align="justify">
	 <a href="http://ariya.blogspot.com/2005/10/highlight-is-cool-dragging-is-sweet.html">Range highlighting.</a>
        </div>
      </li>
      <li>
        <div align="justify">
	 Directly convert Excel files to OpenDocument Spreadsheets on the command line without even starting KSpread:
         <strong>koconverter report.xls report.ods</strong>
        </div>
      </li>
    </ul>

 <h2>KPresenter</h2>

    <ul>
      <li>
        <div align="justify">
	 Snapping guide lines (if you move an object to the guide line, the objects 
will snap to the guide line).
        </div>
      </li>
      <li>
        <div align="justify">
	 Auto guide lines (automatically have guides to snap an object during moving 
to other objects boarders).<br/>
         <img src="guide.png" alt="" width="626" height="482" />
        </div>
      </li>
      <li>
        <div align="justify">
	 As KWord also make selecting/moving/resizing objects easier by implementing 
most features from <a href="http://www.koffice.org/developer/keyboardmodifiers.php">http://www.koffice.org/developer/keyboardmodifiers.php</a>.
        </div>
      </li>
    </ul>


 <h2>Kexi</h2>

<p>
KOffice 1.5 contains the much expected final 1.0 version of Kexi - data 
management application that is the KOffice counterpart to MS Access or 
FileMaker. It is designed from the ground up as a standard KDE database 
application.
Kexi can store it's data and design in a single database on a database server 
of file. This version focuses on the data exchangeability and server support.
</p>

<img src="http://kexi-project.org/pics/1.0/simple_printouts_m.png" alt="" width="250" height="181" />
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/simple_printouts.png">
-->

<p>
Simple printouts allow you to quickly get high quality without a need of 
exporting data to external tools. Tabular layout is currently supported, with 
several printing options and fast print preview. The latter, unlike standard 
print preview in KDE, does not require to preprocess all the data before 
showing the result!
</p>

<p><strong>Example printout:</strong></p>
<img src="http://kexi-project.org/pics/1.0/example_printout_m.png" alt="" width="250" height="181" />
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/example_printout.png">
-->

<p>
The feature takes advantage of KDE printing system, what means export to PDF 
is available as well.
</p>

<p>
CSV import and export makes your Kexi database interoperable with any 
application supporting CSV format (Comma-separated values). Thanks to unique 
format autodetection, Kexi automatically recognizes delimiters, text quote 
characters and even data types including date or time. All the options can be 
changed by user before data importing or exporting.
</p>

<img src="http://kexi-project.org/pics/1.0/csv_import_m.png" alt="" width="250" height="181" />
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/csv_import.png">
-->

<p>
Forms are getting richer with every Kexi release. This time forms are fully 
data-aware, handle read-only and read-write data. Special right-hand Data 
Source Pane has been added to ease assigning data source to inserted text 
boxes. Images can be now inserted from file onto the form or pasted from 
clipboard and then saved within the single database losslessly.
</p>

<img src="http://kexi-project.org/pics/1.0/image_box_m.png" alt="" width="250" height="181" />
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/image_box.png">
-->

<p>
As the Kexi Team listens to its users, MS Access (MDB, MDE) files 
support has been greatly improved. Files can be just clicked and then Kexi 
will propose importing using special Database Importing Wizard. MS Access 
database tables can be now imported with more accurately converted data types.
</p>

<p>
<strong>Importing Northwind sample Microsoft Access (.mdb) database using Kexi on Linux:</strong>
</p>
<img src="northwind_mdb_import_sm.png" alt="" width="878" height="363" />
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/northwind_mdb_import/northwind_mdb_import.png">
-->

<p>
In addition to the new features, Kexi contains hundreds of small 
improvements and fixes making everyday use easier. Table, Query and Form 
designer are now smoother in usage. Despite so many features, Kexi still
starts fast, because only needed functionality is loaded.
</p>

<p>
Unlike other database envirinments, the application communicates with users 
very verbosely when needed (it contains over translated 1500 messages), 
without cryptic warnings or error numbers. Kexi is already translated to 20 
languages and another about 40 translations are in progress. This makes it as 
ideal also for educational purposes.
</p>

<p>
Kexi provides extensive scripting support. You can find more information on
scripting Kexi here: <a href="http://kross.dipe.org/kexiscriptingoverview/">http://kross.dipe.org/kexiscriptingoverview/</a>
</p>

<!-- TODO copy some content on kexi scripting, the above target is subject to changes... -->

 <h2>Kivio</h2>

    <ul>
      <li>
        <div align="justify">
	 New improved dockers which are shared with Krita and Karbon14.
        </div>
      </li>
      <li>
        <div align="justify">
	 A more powerful text edit dialog.
        </div>
      </li>
      <li>
        <div align="justify">
	 New docker that shows all objects on the page.
        </div>
      </li>
      <li>
        <div align="justify">
	 Automatic guide lines which is shared with KPresenter.
        </div>
      </li>
    </ul>

 <h2>Karbon14</h2>

    <ul>
      <li>
        <div align="justify">
	 Tight selection of objects.
        </div>
      </li>
      <li>
        <div align="justify">
	 Gradient and pattern fill can be edited directly on the canvas.
        </div>
      </li>
      <li>
        <div align="justify">
	 Much improved dockers by using the KoPalette library.
        </div>
      </li>
      <li>
        <div align="justify">
	 Major svg improvements and basic odf support.
        </div>
      </li>
      <li>
        <div align="justify">
	 User interface polishing all around.
        </div>
      </li>
      <li>
        <div align="justify">
	 Printing fixes.
        </div>
      </li>
    </ul>

 <h2>Krita</h2>

<p>
Krita 1.5.0 has a host of features unique in the free software graphical
application arena. Let's begin with the beginning:
</p>

<img src="colorspaces.png" alt="" width="878" height="568" />

<p>
As you can see, Krita offers you a choice of colorspaces: 8 and 16 bit cmyk,
8 and 16 bit integer RGB, 16 and 32 bit floating point RGB, 8 and 16 bit grayscale,
16 bit L*a*b -- and even some more exotic colorspaces like LMS cone space or
a watercolor simulation (the latter is still experimental). In future versions
of Krita we will ad YCbCr (already used in the tiff file format filter)
and more artistic colorspaces. All colorspaces (except watercolor and LMS)
are color corrected using <a href="http://www.littlecms.com">lcms</a>. All tools, from painting
to gradients and almost all filters are usable in all colorspaces. Read about
your colorspace choices in the Krita manual, completely new in Krita 1.5.
</p>

<img src="histogram_layertooltips.png" alt="" width="878" height="568" />

<p>
As you can see, Krita's palettes have been expanded and now include an Overview
palette with zoom and panning control, a permanently updated Histogram palette
and the brand new layers palette. Here, you can see a thumbnail of each layer,
and if you let your mouse hover over the layer, you get an informative tooltip
with a larger icon.
</p>

<img src="adjustment_layers.png" alt="" width="525" height="538" />

<p>
Non destructive effects have finally arrived: Krita makes it easy for you by
allowing you to use nearly all filters in the new adjustment layer feature.
From artistic to color correction -- and note the new curve widget.
</p>

<img src="layergroups.png" alt="" width="705" height="456" />

<p>
Organize your complex layered images using layer groups for performance and
easy handling. This image has a basic layer, and artistic oilpaint filter
adjustment layer grouped together, with two more layers on top. We offer a grid
in several sizes for easy placement of layers.
</p>

<p>
Krita is fully integrated with KOffice, and that means that you can create object
layers that embed documents you can create in any KOffice application. Here we
add a small text to our Krita image:
</p>

<img src="embedding.png" alt="" width="878" height="568" />

<p>
And here is how it looks when the embedded KWord is no longer active. You can
even apply adjustment layers over embedded layers!
</p>

<img src="embedding1.png" alt="" width="636" height="476" />

<p>
Using the innovative and flexible Kross scripting technology, first featured in Kexi,
Krita is fully scriptable in Python and Ruby. A number of example scripts are provided:
</p>

<img src="scripting.png" alt="" width="510" height="377" />

<p>
And when all is said and done, you can save your image using the new png, tiff and jpeg
export filters. Krita now can load raw, png, tiff, jpeg, photoshop (limited to version
6), gimp (limited) and many other file types. Krita can save in png, tiff, jpeg, bmp, gif
and many other file formats.
</p>

 <h2>KPlato</h2>

<img src="/kplato/pics/gantt_small_2006_01.png" alt="" width="881" height="513" />

<p>
KOffice 1.5 is the first version to include KPlato, the KOffice Planning Tool.
Please look at <a href="/kplato/">http://www.koffice.org/kplato/</a> for some details.
</p>

 <h2>KChart</h2>

 <p>
 KChart is the charting component of KOffice. It can be embedded into almost 
 any other KOffice application, such as KWord or KSpread. It supports 8 
 different types of charts, among them bar, line, area, pie, ring and polar 
 charts.  Almost every aspect of the chart can be customized after the chart 
 is created, such as colors, fonts and placement of different entities like 
 the legend.
 </p>

<!--

 <h2>KFormula</h2>

 <h2>Kugar</h2>

-->

<?php include("footer.inc"); ?>
