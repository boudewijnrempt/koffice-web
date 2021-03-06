<?php
  $page_title="Krita";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("krita.inc");
  $appinfo->showIconAndCopyright();
?>

<p><b><i>Winner of the <a href="http://dot.kde.org/1159194107/">2006 Akademy Award for Best Application</a></i></b></p>


<p><b>Krita</b> is a painting and image editing application for KOffice. Krita
is part of KOffice since version 1.4. Krita contains both ease-of-use and fun features
like guided painting (never before has it been so easy to airbrush a straight
line!) and high-end features like support for 16 bit images, CMYK, L*a*b and even
<a href="http://www.openexr.org">OpenEXR</a> HDR images.</p>

<center>
  <?php
    $gallery = new ImageGallery("Krita- Screenshot");
    $gallery->addImage("pics/girl_by_enkhitan_sm.png",
                       "pics/girl_by_enkhitan.png",
                       "300", "225",
                       "[Screenshot]", "",
                       "Krita 2.0 alpha 10 -- painting by Enkhitan using Lukas Tvrdy's brush engine");
    $gallery->show();
  ?>
</center>

<!--h3>Libre Graphics Meeting</h3>

<p>The Libre Graphics Meeting 2008 will be held in Wroclaw, Poland this year. Krita developers,
generously sponsored by KDE e.V., will attend this event, which is the most important meeting
for developers and users of Free graphics software. Funding is low, and we really want to have
as broad as possible a meeting, so the organizers ask your help with organizing this
year's meeting:</p>

<a href='http://pledgie.com/campaigns/613'><img alt='Click here to lend your support to: Support the Libre Graphics Meeting and make a donation at www.pledgie.com !' src='http://www.pledgie.com/campaigns/613.png?skin_name=chrome' border='0' /></a>

<p>In only two years, the Libre Graphics Meeting has become a hugely important meeting place for free software graphics developers. With surveys showing that the main gaps in the Linux desktop offering now are graphics applications (Photoshop, Illustrator, Visio, AutoCAD), the conference becomes even more vital to the advancement of the free software desktop.</p>

<p>Thank you for your help!</p-->

<h3>Press</h3>

<p>Dan Sawyer reviews Krita in Linux Journal:<b>"Build from the ground up on LCMS</b>, Krita's 32-bit color management system is flanked by well-built, sophisticated tools for accessing it... making it suitable for a broad range of professional graphics demands...This workflow streaming is great...The number of drawing tools is rivaled only by Photoshop and there a few nifty enhancements in this area where Krita outdoes the venerated veteran from Adobe." <a href="http://www.linuxjournal.com/article/9706">(Dan Sawyer, "Deep Images", Linux Journal 159, July 2007)</a></p>

    <h3>Help the Krita Team!</h3>

    <p>The Krita team needs a new set of advanced Wacom Intuos graphics tablets so we can
develop painting tools that make use of stylus tilt and the new advanced 6 degrees of freedom
Art Pen -- that allows you to rotate your stylus. Please see our <a href="http://dot.kde.org/1180352311/">Dot story</a>
or donate directly:</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="kde-ev-paypal@kde.org">
<input type="hidden" name="item_name" value="Krita">
<input type="hidden" name="item_number" value="2000">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="cn" value="Your message here:">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="lc" value="EN">
<input type="hidden" name="bn" value="PP-DonationsBF">
<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

    <h3>Features</h3>

      <p>Development on Krita was started in 1999. However, due to frequent changes of maintainer and long
         pauses between bursts of development wasn't ready for use until 2005.
         Now Krita is a reasonably capable image editor and a great platform for
         future development.

      <p>Krita supports many managed colorspaces, like rgb, grayscale, cmyk, lab, ycbcr and lms, in 8 and
      16 bits per channel. Some colorspaces even support 32 bits per channel! With the development
      of KOffice 2.0, all these colorspaces will be available to all KOffice applications that
      need color management. An experimental watercolor colorspace that tries to follows the physics
      of paint is included in 1.5.</p>

      <p>Krita can import RAW images in 8 and 16 bits per channel and load and save the usual image
      formats: tiff, png, jpeg. Other image formats, like xcf, can be imported and sometimes exported
      through the GraphicsMagick import/export plugin, but are not fully supported.</p>

      <p>Krita has a large array of tools. The 1.6 release contains freehand, line, rectangle, ellipse,
      polygon, polyline, star, bezier curve, duplicate, paint-with-filters, crop, move, transform,
      perspective transform, contiguous fill, gradient, text, color picker, pan, zoom, perspective grid,
      selection paint, selection erase, rectangular select, elliptical select, polygonal select, contiguous
      area (magic wand), outline, magnetic selection, bezier curve select and select by similar colors.
      All paint tools can be used in soft brushes, hard pencil, airbrush or eraser mode. SIOX-like foreground
      extraction is in the works.</p>

      <p>Krita has image layers, group layers, adjustment layers and the innovative part layers: any
      KOffice document can be embedded as a layer in Krita.</p>

      <p>Krita is scriptable in Python and Ruby and offers a small, but useful DCOP interface. Krita 2.0
      will also be dbus-enabled.

      <p>There is a rich set of filters for image enhancement, color enhancement and artistic reinterpretation
      of your image.</p>

      <p>Krita is a very modular application and if you want, you can easily extend Krita by creating
      new tools, paint modes, filters, dialogs, colorspaces and import and export filters. Most
      of these plugins are described in the "Developing Krita Plugins" document. Krita also has an extensive
      user manual.</p>

	<h3>Documentation</h3>

      <ul>
        <li><a href="Developing%20Krita%20Plugins.html">Developing Krita Plugins</a> - also a work in progress.
           A manual on writing C++ plugins for Krita.</li>
        <li><a href="http://docs.kde.org/development/en/koffice/krita/"  target="_blank">Manual</a> - a work in
            progress, but rapid progress. By Sander Koning, Boudewijn Rempt, Casper Boemann and Cyrille Berger.</li>
	<li><a href="faq.php">FAQs</a></li>

      </ul>
    <h3>Plugins</h3>
    <ul>
      <li><a href="http://www.krita-plugins.org/">Krita-Plugins</a>, this project contains tools and filters for 1.6 which extends the feature set of Krita.</li>
    </ul>
    <h3>Presentations</h3>

        <ul>
            <li><a href="/presentations/natural_media.odp">Natural media: An Overview"</a>, presentation given by
Boudewijn Rempt at LGM 2008. (<a href="http://www.river-valley.tv/conferences/lgm2008/#0201-Boudewijn_Rempt">Video</a>)</li>
            <li><a href="/presentations/KritaLGM2007.odp">The presentation  Boudewijn Rempt and Cyrille Berger gave at the 2007 Libre Graphics Meeting. (As ogg: <a href="http://people.xiph.org/~giles/2007/lgm/LGM_20070505-4-Rempt_Berger.ogg">http://people.xiph.org/~giles/2007/lgm/LGM_20070505-4-Rempt_Berger.ogg</a></li>
            <li><a href="talk_krita_25.03.2006.pdf">Michael Thaler's 2006 presentation on Krita at Linux
        Info Tag in Augsburg. (German)</a></li>
            <li><a href="krita-fosdem2006.pdf">The slides for Bart Coppens' Krita presentation at Fosdem
        2006.</a></li>
            <li><a href="akademy2005.pdf">The slides for the Krita presentation at aKademy 2005.</a></li>
        </ul>


    <h3>Blogs</h3>

        <ul>
        <li><a href="http://www.valdyas.org/fading/index.cgi/hacking/krita">Fading Memories blog on Krita, by Boudewijn Rempt</a></li>
        <li><a href="http://cyrilleberger.blogspot.com">News from development on Krita, by Cyrille Berger</a></li>
        <li><a href="http://www.kdedevelopers.org/blog/1471">Bart Coppens' Blog</a></li>
        <li><a href="http://www.kdedevelopers.org/blog/1236">Boemann's Blog</a></li>
        </ul>

<h3>Development</h3>
	<p>Who's working on what, and what's planned to be done can be found on the
    <a href="http://wiki.koffice.org/index.php?title=Krita%2FToDo">
	Krita TODO and who's doing what</a> page.</p>

      <p>
      To join the development, contact one of the developers or join the
      KImageShop (Krita) mailing list.  To join the list, send mail to
      <a href="m&#x61;&#0105;l&#116;&#111;&#58;&#x6b;&#105;&#x6d;a&#x67;e&#x73;&#104;&#0111;p-req&#x75;e&#115;&#116;&#64;k&#100;e&#0046;&#111;&#x72;g">kimageshop-re&#113;&#117;e&#115;&#x74;&#x40;&#x6b;&#x64;e.&#0111;&#114;&#x67;</a>
      with the subject &quot;subscribe <i>your email address</i>&quot;. Please
      don't include a signature or other information that would confuse the
      list server that processes your request.
      There is a mailing list archive at
      <a href="http://lists.kde.org/?l=kde-kimageshop">http://lists.kde.org/?l=kde-kimageshop</a>.
      </p>

      <p>Read also the <a href="../developer/krita/index.php">Developing Krita</a> document
      for a high-level overview of the architecture of Krita, and <a href="/developer/krita/painters.php">Painters
      and Paint Devices</a> for information on the 2D canvas library that is at the heart of
      Krita.</p>

      <h3>Libraries Krita currently uses</h3>

      <p>Krita depends on the following libraries, apart from
         what KOffice needs itself:</p>

      <ul><li><a href="http://www.imagemagick.org/">Image
              Magick X11 Image Processing and Display Package</a></li>
          <li><a href="http://www.littlecms.com">Little CMS &mdash; a free color
management system in 100K</a></li>
		<li><a href="http://www.openexr.com">OpenEXR</a></li>
      </ul>

      <h3>Inspiration</h3>
        <p>The following applications, not all of them free, provided some inspiration
            for Krita:</p>

      <p>Free:</p>
      <ul>
        <li><a href="http://www.gimp.org">The Gimp</a> (The GNU Image Manipulation Program)</li>
        <li><a href="http://www.gtk.org/~otaylor/gsumi/">GSumi</a> (Simulation of brush or pen and ink drawing)</li>
        <li><a href="http://www.levien.com/gimp/wetdream.html">Wet Dream</a> (Watercolor paint simulation), see
            also <a href="http://www.levien.com/gimp/brush-arch.html">An Architecture for "natural" brush types</a>.</li>
	<li><a href="http://members.ozemail.com.au/~hodsond/gimpbrush.html">A Gimp Brush Proposal</a> -- never
	implemented, I guess, but interesting nonetheless.</li>
      </ul>

      <p>(Non free:)</p>
      <ul>
        <li><a href="http://www.corel.com/servlet/Satellite/us/en/Product/1190317151777">Corel Painter (the descendant of Fractal Painter)</a></li>
        <li><a href="http://www.squirreldome.com/cyberop.htm">DogWaffle</a></li>
        <li><a href="http://www.mindworkshop.com/alchemy/paint.html">e-Paint</a></li>
        <li><a href="http://jijigaga.com/product/index.htm">Smoothdraw</a></li>
        <li><a href="http://www.pixarra.com/">Pixarra Sketchbook</a></li>
      </ul>

	<p>Academic:</p>

<p>(These dissertations are made available for non-commercial purposes by Bill Baxter on his <a href="http://www.cs.unc.edu/~baxter/projects/index.html">projects webpage</a>)</p>
<ul>
        <li><a href="http://www.billbaxter.com/refs/Cockshott-Dissertation.pdf">Wet &amp; Sticky</a> -- dissertation by Tunde Cockshott on modelling wet paint.</li>
        <li><a href="http://www.billbaxter.com/refs/Fishkin-Dissertation.pdf">Applying Color Science to Computer Graphics</a> -- dissertation by Kenneth Paul Fishkin.</li>
        <li><a href="http://www.billbaxter.com/dissertation/Baxter-dissertation.pdf">Physically based interactive painting</a> -- dissertation by Bill Baxter.</li>
	<li><a href="http://www.cs.unc.edu/Research/geom/dab/">dAb Interactive Haptic Painting with 3D Virtual Brushes</a></li>
	<li><a href="http://gamma.cs.unc.edu/impasto/">IMPaSTo - A realistic, Interactive
Model for Paint</a></li>
</ul>
<?php include("footer.inc"); ?>
