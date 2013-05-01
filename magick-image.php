<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html version="-//W3C//DTD XHTML 1.1//EN"
      xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.w3.org/1999/xhtml
                          http://www.w3.org/MarkUp/SCHEMA/xhtml11.xsd">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4"/>
  <title>ImageMagick: MagickWand, C API for ImageMagick: Image Methods</title>
  <meta http-equiv="content-language" content="en-US"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <meta http-equiv="reply-to" content="magick-users@imagemagick.org"/>
  <meta name="application-name" content="ImageMagick"/>
  <meta name="description" content="Use ImageMagick to convert, edit, or compose bitmap images in a variety of formats.  In addition, resize, rotate, shear, distort or transform images automagically."/>
  <meta name="application-url" content="http://www.imagemagick.org"/>
  <meta name="generator" content="PHP"/>
  <meta name="keywords" content="magickwc, api, for, imagemagick:, image, methods, ImageMagick, PerlMagick, image processing, OpenMP, software development library, image, photo, software, Magick++, MagickWand"/>
  <meta name="rating" content="GENERAL"/>
  <meta name="robots" content="INDEX, FOLLOW"/>
  <meta name="generator" content="ImageMagick Studio LLC"/>
  <meta name="author" content="ImageMagick Studio LLC"/>
  <meta name="revisit-after" content="2 DAYS"/>
  <meta name="resource-type" content="document"/>
  <meta name="copyright" content="Copyright (c) 1999-2012 ImageMagick Studio LLC"/>
  <meta name="distribution" content="Global"/>
  <link rel="icon" href="/api/../image/wand.png"/>
  <link rel="shortcut icon" href="/api/../image/wand.ico"  type="image/x-icon"/>
  <link rel="canonical" href="http://www.imagemagick.org" />
  <link rel="meta" type="application/rdf+xml" title="ICI" href="http://imagemagick.org/ici.rdf"/>

  <!-- Add jQuery library -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  
  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="http://www.imagemagick.org/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
  
  <!-- Add fancyBox -->
  <link rel="stylesheet" href="http://www.imagemagick.org/fancybox/source/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
  <script type="text/javascript" src="http://www.imagemagick.org/fancybox/source/jquery.fancybox.pack.js?v=2.0.6"></script>
  
  <!-- Optionally add helpers - button, thumbnail and/or media -->
  <link rel="stylesheet" href="http://www.imagemagick.org/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.2" type="text/css" media="screen" />
  <script type="text/javascript" src="http://www.imagemagick.org/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
  <script type="text/javascript" src="http://www.imagemagick.org/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.0"></script>
  
  <link rel="stylesheet" href="http://www.imagemagick.org/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
  <script type="text/javascript" src="http://www.imagemagick.org/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>
  
  <script type="text/javascript">
  	$(document).ready(function() {
  		$(".fancybox").fancybox();
  	});
  </script>

  <!-- ImageMagick style -->
  <style type="text/css" media="all">
    @import url("/api/../style/magick.php");
  </style>
</head>

<body id="www-imagemagick-org">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40133312-1', 'imagemagick.org');
  ga('send', 'pageview');
</script>

<div class="titlebar">
<div style="margin: 17px auto; float: left;">
  <script type="text/javascript">
  <!--
    google_ad_client = "pub-3129977114552745";
    google_ad_slot = "5439289906";
    google_ad_width = 728;
    google_ad_height = 90;
  //-->
  </script>
  <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script>
</div>
<a href="http://www.imagemagick.org/discourse-server/">
  <img src="/api/../image/logo.jpg"
  alt="ImageMagick Logo"
  style="width: 123px; height: 118px; border: 0px; float: right;" /></a>
<a href="/api/../index.php">
  <img src="/api/../image/sprite.jpg"
  alt="ImageMagick Sprite"
  style="width: 114px; height: 118px; border: 0px; float: right;" /></a>
</div>

<div class="westbar">

<div class="menu">
  <a title="About ImageMagick" href="/api/../index.php">About ImageMagick</a>
</div>
<div class="menu">
  <a title="Binary Releases" href="/api/../script/binary-releases.php">Binary Releases</a>
</div>
<div class="sub">
    <a title="Binary Release: Unix" href="/api/../script/binary-releases.php#unix">Unix</a>
</div>
<div class="sub">
    <a title="Binary Release: MacOS X" href="/api/../script/binary-releases.php#macosx">Mac OS X</a>
</div>
<div class="sub">
    <a title="Binary Release: iOS" href="/api/../script/binary-releases.php#iOS">iOS</a>
</div>
<div class="sub">
    <a title="Binary Release: Windows" href="/api/../script/binary-releases.php#windows">Windows</a>
</div>
<div class="sep"></div>
<div class="menu">
  <a title="Command-line Tools" href="/api/../script/command-line-tools.php">Command-line Tools</a>
</div>
<div class="sub">
    <a title="Command-line Tools: Processing" href="/api/../script/command-line-processing.php">Processing</a>
</div>
<div class="sub">
    <a title="Command-line Tools: Options" href="/api/../script/command-line-options.php">Options</a>
</div>
<div class="sub">
    <a title="Command-line Tools: Usage" href="http://www.imagemagick.org/Usage/">Usage</a>
</div>
<div class="menu">
  <a title="Program Interfaces" href="/api/../script/api.php">Program Interfaces</a>
</div>
<div class="sub">
    <a title="Program Interface: MagickWand" href="/api/../script/magick-wand.php">MagickWand</a>
</div>
<div class="sub">
    <a title="Program Interface: MagickCore" href="/api/../script/magick-core.php">MagickCore</a>
</div>
<div class="sub">
    <a title="Program Interface: PerlMagick" href="/api/../script/perl-magick.php">PerlMagick</a>
</div>
<div class="sub">
    <a title="Program Interface: Magick++" href="/api/../script/magick++.php">Magick++</a>
</div>
<div class="sep"></div>
<div  class="menu">
   <a title="Install from Source" href="/api/../script/install-source.php">Install from Source</a>
</div>
<div class="sub">
    <a title="Install from Source: Unix" href="/api/../script/install-source.php#unix">Unix</a>
</div>
<div class="sub">
    <a title="Install from Source: Windows" href="/api/../script/install-source.php#windows">Windows</a>
 </div>
<div class="menu">
  <a title="Resources" href="/api/../script/resources.php">Resources</a>
</div>
<div class="menu">
  <a title="Architecture" href="/api/../script/architecture.php">Architecture</a>
</div>
<div class="menu">
  <a title="Download" href="/api/../script/download.php">Download</a>
</div>
<div class="sep"></div>
<div class="menu">
  <a title="Search" href="/api/../script/search.php">Search</a>
</div>
<div class="sep"></div>
<div class="menu">
  <a title="Site Map" href="/api/../script/sitemap.php">Site Map</a>
</div>
<div  class="sub">
  <a title="Site Map: Links" href="/api/../script/links.php">Links</a>
</div>
<div class="sep"></div>
<div class="menu">
  <a title="Sponsors" href="/api/../script/sponsors.php">Sponsors</a>
</div>
</div>

<div class="eastbar">
  <div class="g-plusone" id="gplusone"></div>
  <script type="text/javascript">
    window.___gcfg = {
      lang: 'en-US'
    };

    (function() {
      var po = document.createElement('script');
      po.type = 'text/javascript';
      po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var script = document.getElementsByTagName('script')[0];
      script.parentNode.insertBefore(po, script);
    })();
    var gplusone = document.getElementById("gplusone");
    gplusone.setAttribute("data-size","medium");
    gplusone.setAttribute("data-count","false");
  </script>
  <a href="http://flattr.com/thing/947300/Convert-Edit-And-Compose-Images"><img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Click to flattr ImageMagick" title="Click to flattr ImageMagick" width="93" height="20" /></a>
</div>

<div class="main">

<h1>Module magick-image Methods</h1>
<p class="navigation-index">[<a href="#GetImageFromMagickWand">GetImageFromMagickWand</a> &bull; <a href="#MagickAdaptiveBlurImage">MagickAdaptiveBlurImage</a> &bull; <a href="#MagickAdaptiveResizeImage">MagickAdaptiveResizeImage</a> &bull; <a href="#MagickAdaptiveSharpenImage">MagickAdaptiveSharpenImage</a> &bull; <a href="#MagickAdaptiveThresholdImage">MagickAdaptiveThresholdImage</a> &bull; <a href="#MagickAddImage">MagickAddImage</a> &bull; <a href="#MagickAddNoiseImage">MagickAddNoiseImage</a> &bull; <a href="#MagickAffineTransformImage">MagickAffineTransformImage</a> &bull; <a href="#MagickAnnotateImage">MagickAnnotateImage</a> &bull; <a href="#MagickAnimateImages">MagickAnimateImages</a> &bull; <a href="#MagickAppendImages">MagickAppendImages</a> &bull; <a href="#MagickAutoGammaImage">MagickAutoGammaImage</a> &bull; <a href="#MagickAutoLevelImage">MagickAutoLevelImage</a> &bull; <a href="#MagickBlackThresholdImage">MagickBlackThresholdImage</a> &bull; <a href="#MagickBlueShiftImage">MagickBlueShiftImage</a> &bull; <a href="#MagickBlurImage">MagickBlurImage</a> &bull; <a href="#MagickBorderImage">MagickBorderImage</a> &bull; <a href="#Use MagickBrightnessContrastImage">Use MagickBrightnessContrastImage</a> &bull; <a href="#MagickCharcoalImage">MagickCharcoalImage</a> &bull; <a href="#MagickChopImage">MagickChopImage</a> &bull; <a href="#MagickClampImage">MagickClampImage</a> &bull; <a href="#MagickClipImage">MagickClipImage</a> &bull; <a href="#MagickClipImagePath">MagickClipImagePath</a> &bull; <a href="#MagickClutImage">MagickClutImage</a> &bull; <a href="#MagickCoalesceImages">MagickCoalesceImages</a> &bull; <a href="#MagickColorDecisionListImage">MagickColorDecisionListImage</a> &bull; <a href="#MagickColorizeImage">MagickColorizeImage</a> &bull; <a href="#MagickColorMatrixImage">MagickColorMatrixImage</a> &bull; <a href="#MagickCombineImages">MagickCombineImages</a> &bull; <a href="#MagickCommentImage">MagickCommentImage</a> &bull; <a href="#MagickCompareImageChannels">MagickCompareImageChannels</a> &bull; <a href="#MagickCompareImageLayers">MagickCompareImageLayers</a> &bull; <a href="#MagickCompareImages">MagickCompareImages</a> &bull; <a href="#MagickCompositeImage">MagickCompositeImage</a> &bull; <a href="#MagickCompositeLayers">MagickCompositeLayers</a> &bull; <a href="#MagickContrastImage">MagickContrastImage</a> &bull; <a href="#MagickContrastStretchImage">MagickContrastStretchImage</a> &bull; <a href="#MagickConvolveImage">MagickConvolveImage</a> &bull; <a href="#MagickCropImage">MagickCropImage</a> &bull; <a href="#MagickCycleColormapImage">MagickCycleColormapImage</a> &bull; <a href="#MagickConstituteImage">MagickConstituteImage</a> &bull; <a href="#MagickDecipherImage">MagickDecipherImage</a> &bull; <a href="#MagickDeconstructImages">MagickDeconstructImages</a> &bull; <a href="#MagickDeskewImage">MagickDeskewImage</a> &bull; <a href="#MagickDespeckleImage">MagickDespeckleImage</a> &bull; <a href="#MagickDestroyImage">MagickDestroyImage</a> &bull; <a href="#MagickDisplayImage">MagickDisplayImage</a> &bull; <a href="#MagickDisplayImages">MagickDisplayImages</a> &bull; <a href="#MagickDistortImage">MagickDistortImage</a> &bull; <a href="#MagickDrawImage">MagickDrawImage</a> &bull; <a href="#MagickEdgeImage">MagickEdgeImage</a> &bull; <a href="#MagickEmbossImage">MagickEmbossImage</a> &bull; <a href="#MagickEncipherImage">MagickEncipherImage</a> &bull; <a href="#MagickEnhanceImage">MagickEnhanceImage</a> &bull; <a href="#MagickEqualizeImage">MagickEqualizeImage</a> &bull; <a href="#MagickEvaluateImage">MagickEvaluateImage</a> &bull; <a href="#MagickExportImagePixels">MagickExportImagePixels</a> &bull; <a href="#MagickExtentImage">MagickExtentImage</a> &bull; <a href="#MagickFilterImage">MagickFilterImage</a> &bull; <a href="#MagickFlipImage">MagickFlipImage</a> &bull; <a href="#MagickFloodfillPaintImage">MagickFloodfillPaintImage</a> &bull; <a href="#MagickFlopImage">MagickFlopImage</a> &bull; <a href="#MagickForwardFourierTransformImage">MagickForwardFourierTransformImage</a> &bull; <a href="#MagickFrameImage">MagickFrameImage</a> &bull; <a href="#MagickFunctionImage">MagickFunctionImage</a> &bull; <a href="#MagickFxImage">MagickFxImage</a> &bull; <a href="#MagickGammaImage">MagickGammaImage</a> &bull; <a href="#MagickGaussianBlurImage">MagickGaussianBlurImage</a> &bull; <a href="#MagickGetImage">MagickGetImage</a> &bull; <a href="#MagickGetImageAlphaChannel">MagickGetImageAlphaChannel</a> &bull; <a href="#MagickGetImageClipMask">MagickGetImageClipMask</a> &bull; <a href="#MagickGetImageBackgroundColor">MagickGetImageBackgroundColor</a> &bull; <a href="#MagickGetImageBlob">MagickGetImageBlob</a> &bull; <a href="#MagickGetImageBlob">MagickGetImageBlob</a> &bull; <a href="#MagickGetImageBluePrimary">MagickGetImageBluePrimary</a> &bull; <a href="#MagickGetImageBorderColor">MagickGetImageBorderColor</a> &bull; <a href="#MagickGetImageChannelDepth">MagickGetImageChannelDepth</a> &bull; <a href="#MagickGetImageChannelDistortion">MagickGetImageChannelDistortion</a> &bull; <a href="#MagickGetImageChannelDistortions">MagickGetImageChannelDistortions</a> &bull; <a href="#MagickGetImageChannelFeatures">MagickGetImageChannelFeatures</a> &bull; <a href="#MagickGetImageChannelKurtosis">MagickGetImageChannelKurtosis</a> &bull; <a href="#MagickGetImageChannelMean">MagickGetImageChannelMean</a> &bull; <a href="#MagickGetImageChannelRange">MagickGetImageChannelRange</a> &bull; <a href="#MagickGetImageChannelStatistics">MagickGetImageChannelStatistics</a> &bull; <a href="#MagickGetImageColormapColor">MagickGetImageColormapColor</a> &bull; <a href="#MagickGetImageColors">MagickGetImageColors</a> &bull; <a href="#MagickGetImageColorspace">MagickGetImageColorspace</a> &bull; <a href="#MagickGetImageCompose">MagickGetImageCompose</a> &bull; <a href="#MagickGetImageCompression">MagickGetImageCompression</a> &bull; <a href="#MagickGetImageCompressionQuality">MagickGetImageCompressionQuality</a> &bull; <a href="#MagickGetImageDelay">MagickGetImageDelay</a> &bull; <a href="#MagickGetImageDepth">MagickGetImageDepth</a> &bull; <a href="#MagickGetImageDistortion">MagickGetImageDistortion</a> &bull; <a href="#MagickGetImageDispose">MagickGetImageDispose</a> &bull; <a href="#MagickGetImageEndian">MagickGetImageEndian</a> &bull; <a href="#MagickGetImageFilename">MagickGetImageFilename</a> &bull; <a href="#MagickGetImageFormat">MagickGetImageFormat</a> &bull; <a href="#MagickGetImageFuzz">MagickGetImageFuzz</a> &bull; <a href="#MagickGetImageGamma">MagickGetImageGamma</a> &bull; <a href="#MagickGetImageGravity">MagickGetImageGravity</a> &bull; <a href="#MagickGetImageGreenPrimary">MagickGetImageGreenPrimary</a> &bull; <a href="#MagickGetImageHeight">MagickGetImageHeight</a> &bull; <a href="#MagickGetImageHistogram">MagickGetImageHistogram</a> &bull; <a href="#MagickGetImageInterlaceScheme">MagickGetImageInterlaceScheme</a> &bull; <a href="#MagickGetImageInterpolateMethod">MagickGetImageInterpolateMethod</a> &bull; <a href="#MagickGetImageIterations">MagickGetImageIterations</a> &bull; <a href="#MagickGetImageLength">MagickGetImageLength</a> &bull; <a href="#MagickGetImageMatteColor">MagickGetImageMatteColor</a> &bull; <a href="#MagickGetImageOrientation">MagickGetImageOrientation</a> &bull; <a href="#MagickGetImagePage">MagickGetImagePage</a> &bull; <a href="#MagickGetImagePixelColor">MagickGetImagePixelColor</a> &bull; <a href="#MagickGetImageRedPrimary">MagickGetImageRedPrimary</a> &bull; <a href="#MagickGetImageRegion">MagickGetImageRegion</a> &bull; <a href="#MagickGetImageRenderingIntent">MagickGetImageRenderingIntent</a> &bull; <a href="#MagickGetImageResolution">MagickGetImageResolution</a> &bull; <a href="#MagickGetImageScene">MagickGetImageScene</a> &bull; <a href="#MagickGetImageSignature">MagickGetImageSignature</a> &bull; <a href="#MagickGetImageTicksPerSecond">MagickGetImageTicksPerSecond</a> &bull; <a href="#MagickGetImageType">MagickGetImageType</a> &bull; <a href="#MagickGetImageUnits">MagickGetImageUnits</a> &bull; <a href="#MagickGetImageVirtualPixelMethod">MagickGetImageVirtualPixelMethod</a> &bull; <a href="#MagickGetImageWhitePoint">MagickGetImageWhitePoint</a> &bull; <a href="#MagickGetImageWidth">MagickGetImageWidth</a> &bull; <a href="#MagickGetNumberImages">MagickGetNumberImages</a> &bull; <a href="#MagickGetImageTotalInkDensity">MagickGetImageTotalInkDensity</a> &bull; <a href="#MagickHaldClutImage">MagickHaldClutImage</a> &bull; <a href="#MagickHasNextImage">MagickHasNextImage</a> &bull; <a href="#MagickHasPreviousImage">MagickHasPreviousImage</a> &bull; <a href="#MagickIdentifyImage">MagickIdentifyImage</a> &bull; <a href="#MagickImplodeImage">MagickImplodeImage</a> &bull; <a href="#MagickImportImagePixels">MagickImportImagePixels</a> &bull; <a href="#MagickInverseFourierTransformImage">MagickInverseFourierTransformImage</a> &bull; <a href="#MagickLabelImage">MagickLabelImage</a> &bull; <a href="#MagickLevelImage">MagickLevelImage</a> &bull; <a href="#MagickLinearStretchImage">MagickLinearStretchImage</a> &bull; <a href="#MagickLiquidRescaleImage">MagickLiquidRescaleImage</a> &bull; <a href="#MagickMagnifyImage">MagickMagnifyImage</a> &bull; <a href="#MagickMergeImageLayers">MagickMergeImageLayers</a> &bull; <a href="#MagickMinifyImage">MagickMinifyImage</a> &bull; <a href="#MagickModulateImage">MagickModulateImage</a> &bull; <a href="#MagickMontageImage">MagickMontageImage</a> &bull; <a href="#MagickMorphImages">MagickMorphImages</a> &bull; <a href="#MagickMorphologyImage">MagickMorphologyImage</a> &bull; <a href="#MagickMotionBlurImage">MagickMotionBlurImage</a> &bull; <a href="#MagickNegateImage">MagickNegateImage</a> &bull; <a href="#MagickNewImage">MagickNewImage</a> &bull; <a href="#MagickNextImage">MagickNextImage</a> &bull; <a href="#MagickNormalizeImage">MagickNormalizeImage</a> &bull; <a href="#MagickOilPaintImage">MagickOilPaintImage</a> &bull; <a href="#MagickOpaquePaintImage">MagickOpaquePaintImage</a> &bull; <a href="#MagickOptimizeImageLayers">MagickOptimizeImageLayers</a> &bull; <a href="#MagickOptimizeImageTransparency">MagickOptimizeImageTransparency</a> &bull; <a href="#MagickOrderedPosterizeImage">MagickOrderedPosterizeImage</a> &bull; <a href="#MagickPingImage">MagickPingImage</a> &bull; <a href="#MagickPingImageBlob">MagickPingImageBlob</a> &bull; <a href="#MagickPingImageFile">MagickPingImageFile</a> &bull; <a href="#MagickPolaroidImage">MagickPolaroidImage</a> &bull; <a href="#MagickPosterizeImage">MagickPosterizeImage</a> &bull; <a href="#MagickPreviewImages">MagickPreviewImages</a> &bull; <a href="#MagickPreviousImage">MagickPreviousImage</a> &bull; <a href="#MagickQuantizeImage">MagickQuantizeImage</a> &bull; <a href="#MagickQuantizeImages">MagickQuantizeImages</a> &bull; <a href="#MagickRadialBlurImage">MagickRadialBlurImage</a> &bull; <a href="#MagickRaiseImage">MagickRaiseImage</a> &bull; <a href="#MagickRandomThresholdImage">MagickRandomThresholdImage</a> &bull; <a href="#MagickReadImage">MagickReadImage</a> &bull; <a href="#MagickReadImageBlob">MagickReadImageBlob</a> &bull; <a href="#MagickReadImageFile">MagickReadImageFile</a> &bull; <a href="#MagickRemapImage">MagickRemapImage</a> &bull; <a href="#MagickRemoveImage">MagickRemoveImage</a> &bull; <a href="#MagickResampleImage">MagickResampleImage</a> &bull; <a href="#MagickResetImagePage">MagickResetImagePage</a> &bull; <a href="#MagickResizeImage">MagickResizeImage</a> &bull; <a href="#MagickRollImage">MagickRollImage</a> &bull; <a href="#MagickRotateImage">MagickRotateImage</a> &bull; <a href="#MagickSampleImage">MagickSampleImage</a> &bull; <a href="#MagickScaleImage">MagickScaleImage</a> &bull; <a href="#MagickSegmentImage">MagickSegmentImage</a> &bull; <a href="#MagickSelectiveBlurImage">MagickSelectiveBlurImage</a> &bull; <a href="#MagickSeparateImageChannel">MagickSeparateImageChannel</a> &bull; <a href="#MagickSepiaToneImage">MagickSepiaToneImage</a> &bull; <a href="#MagickSetImage">MagickSetImage</a> &bull; <a href="#MagickSetImageAlphaChannel">MagickSetImageAlphaChannel</a> &bull; <a href="#MagickSetImageBackgroundColor">MagickSetImageBackgroundColor</a> &bull; <a href="#MagickSetImageBias">MagickSetImageBias</a> &bull; <a href="#MagickSetImageBluePrimary">MagickSetImageBluePrimary</a> &bull; <a href="#MagickSetImageBorderColor">MagickSetImageBorderColor</a> &bull; <a href="#MagickSetImageChannelDepth">MagickSetImageChannelDepth</a> &bull; <a href="#MagickSetImageClipMask">MagickSetImageClipMask</a> &bull; <a href="#MagickSetImageColor">MagickSetImageColor</a> &bull; <a href="#MagickSetImageColormapColor">MagickSetImageColormapColor</a> &bull; <a href="#MagickSetImageColorspace">MagickSetImageColorspace</a> &bull; <a href="#MagickSetImageCompose">MagickSetImageCompose</a> &bull; <a href="#MagickSetImageCompression">MagickSetImageCompression</a> &bull; <a href="#MagickSetImageCompressionQuality">MagickSetImageCompressionQuality</a> &bull; <a href="#MagickSetImageDelay">MagickSetImageDelay</a> &bull; <a href="#MagickSetImageDepth">MagickSetImageDepth</a> &bull; <a href="#MagickSetImageDispose">MagickSetImageDispose</a> &bull; <a href="#MagickSetImageEndian">MagickSetImageEndian</a> &bull; <a href="#MagickSetImageExtent">MagickSetImageExtent</a> &bull; <a href="#MagickSetImageFilename">MagickSetImageFilename</a> &bull; <a href="#MagickSetImageFormat">MagickSetImageFormat</a> &bull; <a href="#MagickSetImageFuzz">MagickSetImageFuzz</a> &bull; <a href="#MagickSetImageGamma">MagickSetImageGamma</a> &bull; <a href="#MagickSetImageGravity">MagickSetImageGravity</a> &bull; <a href="#MagickSetImageGreenPrimary">MagickSetImageGreenPrimary</a> &bull; <a href="#MagickSetImageInterlaceScheme">MagickSetImageInterlaceScheme</a> &bull; <a href="#MagickSetImageInterpolateMethod">MagickSetImageInterpolateMethod</a> &bull; <a href="#MagickSetImageIterations">MagickSetImageIterations</a> &bull; <a href="#MagickSetImageMatte">MagickSetImageMatte</a> &bull; <a href="#MagickSetImageMatteColor">MagickSetImageMatteColor</a> &bull; <a href="#MagickSetImageOpacity">MagickSetImageOpacity</a> &bull; <a href="#MagickSetImageOrientation">MagickSetImageOrientation</a> &bull; <a href="#MagickSetImagePage">MagickSetImagePage</a> &bull; <a href="#MagickSetImageProgressMonitor">MagickSetImageProgressMonitor</a> &bull; <a href="#MagickSetImageRedPrimary">MagickSetImageRedPrimary</a> &bull; <a href="#MagickSetImageRenderingIntent">MagickSetImageRenderingIntent</a> &bull; <a href="#MagickSetImageResolution">MagickSetImageResolution</a> &bull; <a href="#MagickSetImageScene">MagickSetImageScene</a> &bull; <a href="#MagickSetImageTicksPerSecond">MagickSetImageTicksPerSecond</a> &bull; <a href="#MagickSetImageType">MagickSetImageType</a> &bull; <a href="#MagickSetImageUnits">MagickSetImageUnits</a> &bull; <a href="#MagickSetImageVirtualPixelMethod">MagickSetImageVirtualPixelMethod</a> &bull; <a href="#MagickSetImageWhitePoint">MagickSetImageWhitePoint</a> &bull; <a href="#MagickShadeImage">MagickShadeImage</a> &bull; <a href="#MagickShadowImage">MagickShadowImage</a> &bull; <a href="#MagickSharpenImage">MagickSharpenImage</a> &bull; <a href="#MagickShaveImage">MagickShaveImage</a> &bull; <a href="#MagickShearImage">MagickShearImage</a> &bull; <a href="#MagickSigmoidalContrastImage">MagickSigmoidalContrastImage</a> &bull; <a href="#MagickSimilarityImage">MagickSimilarityImage</a> &bull; <a href="#MagickSketchImage">MagickSketchImage</a> &bull; <a href="#MagickSmushImages">MagickSmushImages</a> &bull; <a href="#MagickSolarizeImage">MagickSolarizeImage</a> &bull; <a href="#MagickSparseColorImage">MagickSparseColorImage</a> &bull; <a href="#MagickSpliceImage">MagickSpliceImage</a> &bull; <a href="#MagickSpreadImage">MagickSpreadImage</a> &bull; <a href="#MagickStatisticImage">MagickStatisticImage</a> &bull; <a href="#MagickSteganoImage">MagickSteganoImage</a> &bull; <a href="#MagickStereoImage">MagickStereoImage</a> &bull; <a href="#MagickStripImage">MagickStripImage</a> &bull; <a href="#MagickSwirlImage">MagickSwirlImage</a> &bull; <a href="#MagickTextureImage">MagickTextureImage</a> &bull; <a href="#MagickThresholdImage">MagickThresholdImage</a> &bull; <a href="#MagickThumbnailImage">MagickThumbnailImage</a> &bull; <a href="#MagickTintImage">MagickTintImage</a> &bull; <a href="#MagickTransformImage">MagickTransformImage</a> &bull; <a href="#MagickTransformImageColorspace">MagickTransformImageColorspace</a> &bull; <a href="#MagickTransparentPaintImage">MagickTransparentPaintImage</a> &bull; <a href="#MagickTransposeImage">MagickTransposeImage</a> &bull; <a href="#MagickTransverseImage">MagickTransverseImage</a> &bull; <a href="#MagickTrimImage">MagickTrimImage</a> &bull; <a href="#MagickUniqueImageColors">MagickUniqueImageColors</a> &bull; <a href="#MagickUnsharpMaskImage">MagickUnsharpMaskImage</a> &bull; <a href="#MagickVignetteImage">MagickVignetteImage</a> &bull; <a href="#MagickWaveImage">MagickWaveImage</a> &bull; <a href="#MagickWhiteThresholdImage">MagickWhiteThresholdImage</a> &bull; <a href="#MagickWriteImage">MagickWriteImage</a> &bull; <a href="#MagickWriteImageFile">MagickWriteImageFile</a> &bull; <a href="#MagickWriteImages">MagickWriteImages</a> &bull; <a href="#MagickWriteImagesFile">MagickWriteImagesFile</a>]</p>

<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="GetImageFromMagickWand">GetImageFromMagickWand</a></h2>
<div class="doc-section">

<p>GetImageFromMagickWand() returns the current image from the magick wand.</p>

<p>The format of the GetImageFromMagickWand method is:</p>

<pre class="code">
  Image *GetImageFromMagickWand(const MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAdaptiveBlurImage">MagickAdaptiveBlurImage</a></h2>
<div class="doc-section">

<p>MagickAdaptiveBlurImage() adaptively blurs the image by blurring less intensely near image edges and more intensely far from edges. We blur the image with a Gaussian operator of the given radius and standard deviation (sigma).  For reasonable results, radius should be larger than sigma.  Use a radius of 0 and MagickAdaptiveBlurImage() selects a suitable radius for you.</p>

<p>The format of the MagickAdaptiveBlurImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAdaptiveBlurImage(MagickWand *wand,
    const double radius,const double sigma)
  MagickBooleanType MagickAdaptiveBlurImageChannel(MagickWand *wand,
    const ChannelType channel,const double radius,const double sigma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAdaptiveResizeImage">MagickAdaptiveResizeImage</a></h2>
<div class="doc-section">

<p>MagickAdaptiveResizeImage() adaptively resize image with data dependent triangulation.</p>

<p>MagickBooleanType MagickAdaptiveResizeImage(MagickWand *wand, const size_t columns,const size_t rows)</p>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>the number of columns in the scaled image.</p>

<h5>rows</h5>
<p>the number of rows in the scaled image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAdaptiveSharpenImage">MagickAdaptiveSharpenImage</a></h2>
<div class="doc-section">

<p>MagickAdaptiveSharpenImage() adaptively sharpens the image by sharpening more intensely near image edges and less intensely far from edges. We sharpen the image with a Gaussian operator of the given radius and standard deviation (sigma).  For reasonable results, radius should be larger than sigma.  Use a radius of 0 and MagickAdaptiveSharpenImage() selects a suitable radius for you.</p>

<p>The format of the MagickAdaptiveSharpenImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAdaptiveSharpenImage(MagickWand *wand,
    const double radius,const double sigma)
  MagickBooleanType MagickAdaptiveSharpenImageChannel(MagickWand *wand,
    const ChannelType channel,const double radius,const double sigma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAdaptiveThresholdImage">MagickAdaptiveThresholdImage</a></h2>
<div class="doc-section">

<p>MagickAdaptiveThresholdImage() selects an individual threshold for each pixel based on the range of intensity values in its local neighborhood.  This allows for thresholding of an image whose global intensity histogram doesn't contain distinctive peaks.</p>

<p>The format of the AdaptiveThresholdImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAdaptiveThresholdImage(MagickWand *wand,
    const size_t width,const size_t height,const ssize_t offset)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the width of the local neighborhood.</p>

<h5>height</h5>
<p>the height of the local neighborhood.</p>

<h5>offset</h5>
<p>the mean offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAddImage">MagickAddImage</a></h2>
<div class="doc-section">

<p>MagickAddImage() adds a clone of the images from the second wand and inserts them into the first wand.</p>

<p>Use MagickSetLastIterator(), to append new images into an existing wand, current image will be set to last image so later adds with also be appened to end of wand.</p>

<p>Use MagickSetFirstIterator() to prepend new images into wand, any more images added will also be prepended before other images in the wand. However the order of a list of new images will not change.</p>

<p>Otherwise the new images will be inserted just after the current image, and any later image will also be added after this current image but before the previously added images.  Caution is advised when multiple image adds are inserted into the middle of the wand image list.</p>

<p>The format of the MagickAddImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAddImage(MagickWand *wand,
    const MagickWand *add_wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>add_wand</h5>
<p>A wand that contains the image list to be added</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAddNoiseImage">MagickAddNoiseImage</a></h2>
<div class="doc-section">

<p>MagickAddNoiseImage() adds random noise to the image.</p>

<p>The format of the MagickAddNoiseImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAddNoiseImage(MagickWand *wand,
    const NoiseType noise_type)
  MagickBooleanType MagickAddNoiseImageChannel(MagickWand *wand,
    const ChannelType channel,const NoiseType noise_type)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>noise_type</h5>
<p>The type of noise: Uniform, Gaussian, Multiplicative, Impulse, Laplacian, or Poisson.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAffineTransformImage">MagickAffineTransformImage</a></h2>
<div class="doc-section">

<p>MagickAffineTransformImage() transforms an image as dictated by the affine matrix of the drawing wand.</p>

<p>The format of the MagickAffineTransformImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAffineTransformImage(MagickWand *wand,
    const DrawingWand *drawing_wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>drawing_wand</h5>
<p>the draw wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAnnotateImage">MagickAnnotateImage</a></h2>
<div class="doc-section">

<p>MagickAnnotateImage() annotates an image with text.</p>

<p>The format of the MagickAnnotateImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAnnotateImage(MagickWand *wand,
    const DrawingWand *drawing_wand,const double x,const double y,
    const double angle,const char *text)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>drawing_wand</h5>
<p>the draw wand.</p>

<h5>x</h5>
<p>x ordinate to left of text</p>

<h5>y</h5>
<p>y ordinate to text baseline</p>

<h5>angle</h5>
<p>rotate text relative to this angle.</p>

<h5>text</h5>
<p>text to draw</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAnimateImages">MagickAnimateImages</a></h2>
<div class="doc-section">

<p>MagickAnimateImages() animates an image or image sequence.</p>

<p>The format of the MagickAnimateImages method is:</p>

<pre class="code">
  MagickBooleanType MagickAnimateImages(MagickWand *wand,
    const char *server_name)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>server_name</h5>
<p>the X server name.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAppendImages">MagickAppendImages</a></h2>
<div class="doc-section">

<p>MagickAppendImages() append the images in a wand from the current image onwards, creating a new wand with the single image result.  This is affected by the gravity and background settings of the first image.</p>

<p>Typically you would call either MagickResetIterator() or MagickSetFirstImage() before calling this function to ensure that all the images in the wand's image list will be appended together.</p>

<p>The format of the MagickAppendImages method is:</p>

<pre class="code">
  MagickWand *MagickAppendImages(MagickWand *wand,
    const MagickBooleanType stack)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>stack</h5>
<p>By default, images are stacked left-to-right. Set stack to MagickTrue to stack them top-to-bottom.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAutoGammaImage">MagickAutoGammaImage</a></h2>
<div class="doc-section">

<p>MagickAutoGammaImage() extracts the 'mean' from the image and adjust the image to try make set its gamma appropriatally.</p>

<p>The format of the MagickAutoGammaImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAutoGammaImage(MagickWand *wand)
  MagickBooleanType MagickAutoGammaImageChannel(MagickWand *wand,
    const ChannelType channel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickAutoLevelImage">MagickAutoLevelImage</a></h2>
<div class="doc-section">

<p>MagickAutoLevelImage() adjusts the levels of a particular image channel by scaling the minimum and maximum values to the full quantum range.</p>

<p>The format of the MagickAutoLevelImage method is:</p>

<pre class="code">
  MagickBooleanType MagickAutoLevelImage(MagickWand *wand)
  MagickBooleanType MagickAutoLevelImageChannel(MagickWand *wand,
    const ChannelType channel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickBlackThresholdImage">MagickBlackThresholdImage</a></h2>
<div class="doc-section">

<p>MagickBlackThresholdImage() is like MagickThresholdImage() but  forces all pixels below the threshold into black while leaving all pixels above the threshold unchanged.</p>

<p>The format of the MagickBlackThresholdImage method is:</p>

<pre class="code">
  MagickBooleanType MagickBlackThresholdImage(MagickWand *wand,
    const PixelWand *threshold)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>threshold</h5>
<p>the pixel wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickBlueShiftImage">MagickBlueShiftImage</a></h2>
<div class="doc-section">

<p>MagickBlueShiftImage() mutes the colors of the image to simulate a scene at nighttime in the moonlight.</p>

<p>The format of the MagickBlueShiftImage method is:</p>

<pre class="code">
  MagickBooleanType MagickBlueShiftImage(MagickWand *wand,
    const double factor)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>factor</h5>
<p>the blue shift factor (default 1.5)</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickBlurImage">MagickBlurImage</a></h2>
<div class="doc-section">

<p>MagickBlurImage() blurs an image.  We convolve the image with a gaussian operator of the given radius and standard deviation (sigma).  For reasonable results, the radius should be larger than sigma.  Use a radius of 0 and BlurImage() selects a suitable radius for you.</p>

<p>The format of the MagickBlurImage method is:</p>

<pre class="code">
  MagickBooleanType MagickBlurImage(MagickWand *wand,const double radius,
    const double sigma)
  MagickBooleanType MagickBlurImageChannel(MagickWand *wand,
    const ChannelType channel,const double radius,const double sigma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>radius</h5>
<p>the radius of the , in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the , in pixels.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickBorderImage">MagickBorderImage</a></h2>
<div class="doc-section">

<p>MagickBorderImage() surrounds the image with a border of the color defined by the bordercolor pixel wand.</p>

<p>The format of the MagickBorderImage method is:</p>

<pre class="code">
  MagickBooleanType MagickBorderImage(MagickWand *wand,
    const PixelWand *bordercolor,const size_t width,
    const size_t height)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>bordercolor</h5>
<p>the border color pixel wand.</p>

<h5>width</h5>
<p>the border width.</p>

<h5>height</h5>
<p>the border height.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="Use_MagickBrightnessContrastImage">Use MagickBrightnessContrastImage</a></h2>
<div class="doc-section">

<p>Use MagickBrightnessContrastImage() to change the brightness and/or contrast of an image.  It converts the brightness and contrast parameters into slope and intercept and calls a polynomical function to apply to the image.</p>

<p>The format of the MagickBrightnessContrastImage method is:</p>

<pre class="code">
  MagickBooleanType MagickBrightnessContrastImage(MagickWand *wand,
    const double brightness,const double contrast)
  MagickBooleanType MagickBrightnessContrastImageChannel(MagickWand *wand,
    const ChannelType channel,const double brightness,
    const double contrast)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>brightness</h5>
<p>the brightness percent (-100 .. 100).</p>

<h5>contrast</h5>
<p>the contrast percent (-100 .. 100).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCharcoalImage">MagickCharcoalImage</a></h2>
<div class="doc-section">

<p>MagickCharcoalImage() simulates a charcoal drawing.</p>

<p>The format of the MagickCharcoalImage method is:</p>

<pre class="code">
  MagickBooleanType MagickCharcoalImage(MagickWand *wand,
    const double radius,const double sigma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickChopImage">MagickChopImage</a></h2>
<div class="doc-section">

<p>MagickChopImage() removes a region of an image and collapses the image to occupy the removed portion</p>

<p>The format of the MagickChopImage method is:</p>

<pre class="code">
  MagickBooleanType MagickChopImage(MagickWand *wand,const size_t width,
    const size_t height,const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the region width.</p>

<h5>height</h5>
<p>the region height.</p>

<h5>x</h5>
<p>the region x offset.</p>

<h5>y</h5>
<p>the region y offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickClampImage">MagickClampImage</a></h2>
<div class="doc-section">

<p>MagickClampImage() restricts the color range from 0 to the quantum depth.</p>

<p>The format of the MagickClampImage method is:</p>

<pre class="code">
  MagickBooleanType MagickClampImage(MagickWand *wand)
  MagickBooleanType MagickClampImageChannel(MagickWand *wand,
    const ChannelType channel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the channel.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickClipImage">MagickClipImage</a></h2>
<div class="doc-section">

<p>MagickClipImage() clips along the first path from the 8BIM profile, if present.</p>

<p>The format of the MagickClipImage method is:</p>

<pre class="code">
  MagickBooleanType MagickClipImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickClipImagePath">MagickClipImagePath</a></h2>
<div class="doc-section">

<p>MagickClipImagePath() clips along the named paths from the 8BIM profile, if present. Later operations take effect inside the path.  Id may be a number if preceded with #, to work on a numbered path, e.g., "#1" to use the first path.</p>

<p>The format of the MagickClipImagePath method is:</p>

<pre class="code">
  MagickBooleanType MagickClipImagePath(MagickWand *wand,
    const char *pathname,const MagickBooleanType inside)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>pathname</h5>
<p>name of clipping path resource. If name is preceded by #, use clipping path numbered by name.</p>

<h5>inside</h5>
<p>if non-zero, later operations take effect inside clipping path. Otherwise later operations take effect outside clipping path.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickClutImage">MagickClutImage</a></h2>
<div class="doc-section">

<p>MagickClutImage() replaces colors in the image from a color lookup table.</p>

<p>The format of the MagickClutImage method is:</p>

<pre class="code">
  MagickBooleanType MagickClutImage(MagickWand *wand,
    const MagickWand *clut_wand)
  MagickBooleanType MagickClutImageChannel(MagickWand *wand,
    const ChannelType channel,const MagickWand *clut_wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>clut_image</h5>
<p>the clut image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCoalesceImages">MagickCoalesceImages</a></h2>
<div class="doc-section">

<p>MagickCoalesceImages() composites a set of images while respecting any page offsets and disposal methods.  GIF, MIFF, and MNG animation sequences typically start with an image background and each subsequent image varies in size and offset.  MagickCoalesceImages() returns a new sequence where each image in the sequence is the same size as the first and composited with the next image in the sequence.</p>

<p>The format of the MagickCoalesceImages method is:</p>

<pre class="code">
  MagickWand *MagickCoalesceImages(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickColorDecisionListImage">MagickColorDecisionListImage</a></h2>
<div class="doc-section">

<p>MagickColorDecisionListImage() accepts a lightweight Color Correction Collection (CCC) file which solely contains one or more color corrections and applies the color correction to the image.  Here is a sample CCC file:</p>

<pre class="text">
      <ColorCorrectionCollection xmlns="urn:ASC:CDL:v1.2">
      <ColorCorrection id="cc03345">
            <SOPNode>
                 <Slope> 0.9 1.2 0.5 </Slope>
                 <Offset> 0.4 -0.5 0.6 </Offset>
                 <Power> 1.0 0.8 1.5 </Power>
            </SOPNode>
            <SATNode>
                 <Saturation> 0.85 </Saturation>
            </SATNode>
      </ColorCorrection>
      </ColorCorrectionCollection>
</pre>

<p>which includes the offset, slope, and power for each of the RGB channels as well as the saturation.</p>

<p>The format of the MagickColorDecisionListImage method is:</p>

<pre class="code">
  MagickBooleanType MagickColorDecisionListImage(MagickWand *wand,
    const char *color_correction_collection)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>color_correction_collection</h5>
<p>the color correction collection in XML.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickColorizeImage">MagickColorizeImage</a></h2>
<div class="doc-section">

<p>MagickColorizeImage() blends the fill color with each pixel in the image.</p>

<p>The format of the MagickColorizeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickColorizeImage(MagickWand *wand,
    const PixelWand *colorize,const PixelWand *opacity)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>colorize</h5>
<p>the colorize pixel wand.</p>

<h5>opacity</h5>
<p>the opacity pixel wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickColorMatrixImage">MagickColorMatrixImage</a></h2>
<div class="doc-section">

<p>MagickColorMatrixImage() apply color transformation to an image. The method permits saturation changes, hue rotation, luminance to alpha, and various other effects.  Although variable-sized transformation matrices can be used, typically one uses a 5x5 matrix for an RGBA image and a 6x6 for CMYKA (or RGBA with offsets).  The matrix is similar to those used by Adobe Flash except offsets are in column 6 rather than 5 (in support of CMYKA images) and offsets are normalized (divide Flash offset by 255).</p>

<p>The format of the MagickColorMatrixImage method is:</p>

<pre class="code">
  MagickBooleanType MagickColorMatrixImage(MagickWand *wand,
    const KernelInfo *color_matrix)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>color_matrix</h5>
<p>the color matrix.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCombineImages">MagickCombineImages</a></h2>
<div class="doc-section">

<p>MagickCombineImages() combines one or more images into a single image.  The grayscale value of the pixels of each image in the sequence is assigned in order to the specified  hannels of the combined image.   The typical ordering would be image 1 => Red, 2 => Green, 3 => Blue, etc.</p>

<p>The format of the MagickCombineImages method is:</p>

<pre class="code">
  MagickWand *MagickCombineImages(MagickWand *wand,
    const ChannelType channel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the channel.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCommentImage">MagickCommentImage</a></h2>
<div class="doc-section">

<p>MagickCommentImage() adds a comment to your image.</p>

<p>The format of the MagickCommentImage method is:</p>

<pre class="code">
  MagickBooleanType MagickCommentImage(MagickWand *wand,
    const char *comment)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>comment</h5>
<p>the image comment.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCompareImageChannels">MagickCompareImageChannels</a></h2>
<div class="doc-section">

<p>MagickCompareImageChannels() compares one or more image channels of an image to a reconstructed image and returns the difference image.</p>

<p>The format of the MagickCompareImageChannels method is:</p>

<pre class="code">
  MagickWand *MagickCompareImageChannels(MagickWand *wand,
    const MagickWand *reference,const ChannelType channel,
    const MetricType metric,double *distortion)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>reference</h5>
<p>the reference wand.</p>

<h5>channel</h5>
<p>the channel.</p>

<h5>metric</h5>
<p>the metric.</p>

<h5>distortion</h5>
<p>the computed distortion between the images.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCompareImageLayers">MagickCompareImageLayers</a></h2>
<div class="doc-section">

<p>MagickCompareImageLayers() compares each image with the next in a sequence and returns the maximum bounding region of any pixel differences it discovers.</p>

<p>The format of the MagickCompareImageLayers method is:</p>

<pre class="code">
  MagickWand *MagickCompareImageLayers(MagickWand *wand,
    const ImageLayerMethod method)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>method</h5>
<p>the compare method.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCompareImages">MagickCompareImages</a></h2>
<div class="doc-section">

<p>MagickCompareImages() compares an image to a reconstructed image and returns the specified difference image.</p>

<p>The format of the MagickCompareImages method is:</p>

<pre class="code">
  MagickWand *MagickCompareImages(MagickWand *wand,
    const MagickWand *reference,const MetricType metric,double *distortion)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>reference</h5>
<p>the reference wand.</p>

<h5>metric</h5>
<p>the metric.</p>

<h5>distortion</h5>
<p>the computed distortion between the images.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCompositeImage">MagickCompositeImage</a></h2>
<div class="doc-section">

<p>MagickCompositeImage() composite one image onto another at the specified offset.</p>

<p>The format of the MagickCompositeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickCompositeImage(MagickWand *wand,
    const MagickWand *source_wand,const CompositeOperator compose,
    const ssize_t x,const ssize_t y)
  MagickBooleanType MagickCompositeImageChannel(MagickWand *wand,
    const ChannelType channel,const MagickWand *composite_wand,
    const CompositeOperator compose,const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand holding the destination images</p>

<h5>source_image</h5>
<p>the magick wand holding source image.</p>

<h5>compose</h5>
<p>This operator affects how the composite is applied to the image.  The default is Over.  These are some of the compose methods availble.</p>

<p>OverCompositeOp       InCompositeOp         OutCompositeOp AtopCompositeOp       XorCompositeOp        PlusCompositeOp MinusCompositeOp      AddCompositeOp        SubtractCompositeOp DifferenceCompositeOp BumpmapCompositeOp    CopyCompositeOp DisplaceCompositeOp</p>

<h5>x</h5>
<p>the column offset of the composited image.</p>

<h5>y</h5>
<p>the row offset of the composited image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCompositeLayers">MagickCompositeLayers</a></h2>
<div class="doc-section">

<p>MagickCompositeLayers() composite the images in the source wand over the images in the destination wand in sequence, starting with the current image in both lists.</p>

<p>Each layer from the two image lists are composted together until the end of one of the image lists is reached.  The offset of each composition is also adjusted to match the virtual canvas offsets of each layer. As such the given offset is relative to the virtual canvas, and not the actual image.</p>

<p>Composition uses given x and y offsets, as the 'origin' location of the source images virtual canvas (not the real image) allowing you to compose a list of 'layer images' into the destiantioni images.  This makes it well sutiable for directly composing 'Clears Frame Animations' or 'Coaleased Animations' onto a static or other 'Coaleased Animation' destination image list.  GIF disposal handling is not looked at.</p>

<p>Special case:- If one of the image sequences is the last image (just a single image remaining), that image is repeatally composed with all the images in the other image list.  Either the source or destination lists may be the single image, for this situation.</p>

<p>In the case of a single destination image (or last image given), that image will ve cloned to match the number of images remaining in the source image list.</p>

<p>This is equivelent to the "-layer Composite" Shell API operator.</p>

<p>The format of the MagickCompositeLayers method is:</p>

<pre class="code">
  MagickBooleanType MagickCompositeLayers(MagickWand *wand,
    const MagickWand *source_wand, const CompositeOperator compose,
    const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand holding destaintion images</p>

<h5>source_wand</h5>
<p>the wand holding the source images</p>

<h5>compose, x, y</h5>
<p>composition arguments</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickContrastImage">MagickContrastImage</a></h2>
<div class="doc-section">

<p>MagickContrastImage() enhances the intensity differences between the lighter and darker elements of the image.  Set sharpen to a value other than 0 to increase the image contrast otherwise the contrast is reduced.</p>

<p>The format of the MagickContrastImage method is:</p>

<pre class="code">
  MagickBooleanType MagickContrastImage(MagickWand *wand,
    const MagickBooleanType sharpen)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>sharpen</h5>
<p>Increase or decrease image contrast.</p>


 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickContrastStretchImage">MagickContrastStretchImage</a></h2>
<div class="doc-section">

<p>MagickContrastStretchImage() enhances the contrast of a color image by adjusting the pixels color to span the entire range of colors available. You can also reduce the influence of a particular channel with a gamma value of 0.</p>

<p>The format of the MagickContrastStretchImage method is:</p>

<pre class="code">
  MagickBooleanType MagickContrastStretchImage(MagickWand *wand,
    const double black_point,const double white_point)
  MagickBooleanType MagickContrastStretchImageChannel(MagickWand *wand,
    const ChannelType channel,const double black_point,
    const double white_point)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>black_point</h5>
<p>the black point.</p>

<h5>white_point</h5>
<p>the white point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickConvolveImage">MagickConvolveImage</a></h2>
<div class="doc-section">

<p>MagickConvolveImage() applies a custom convolution kernel to the image.</p>

<p>The format of the MagickConvolveImage method is:</p>

<pre class="code">
  MagickBooleanType MagickConvolveImage(MagickWand *wand,
    const size_t order,const double *kernel)
  MagickBooleanType MagickConvolveImageChannel(MagickWand *wand,
    const ChannelType channel,const size_t order,
    const double *kernel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>order</h5>
<p>the number of columns and rows in the filter kernel.</p>

<h5>kernel</h5>
<p>An array of doubles representing the convolution kernel.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCropImage">MagickCropImage</a></h2>
<div class="doc-section">

<p>MagickCropImage() extracts a region of the image.</p>

<p>The format of the MagickCropImage method is:</p>

<pre class="code">
  MagickBooleanType MagickCropImage(MagickWand *wand,
    const size_t width,const size_t height,const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the region width.</p>

<h5>height</h5>
<p>the region height.</p>

<h5>x</h5>
<p>the region x-offset.</p>

<h5>y</h5>
<p>the region y-offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickCycleColormapImage">MagickCycleColormapImage</a></h2>
<div class="doc-section">

<p>MagickCycleColormapImage() displaces an image's colormap by a given number of positions.  If you cycle the colormap a number of times you can produce a psychodelic effect.</p>

<p>The format of the MagickCycleColormapImage method is:</p>

<pre class="code">
  MagickBooleanType MagickCycleColormapImage(MagickWand *wand,
    const ssize_t displace)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>pixel_wand</h5>
<p>the pixel wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickConstituteImage">MagickConstituteImage</a></h2>
<div class="doc-section">

<p>MagickConstituteImage() adds an image to the wand comprised of the pixel data you supply.  The pixel data must be in scanline order top-to-bottom. The data can be char, short int, int, float, or double.  Float and double require the pixels to be normalized [0..1], otherwise [0..Max],  where Max is the maximum value the type can accomodate (e.g. 255 for char).  For example, to create a 640x480 image from unsigned red-green-blue character data, use</p>

<p>MagickConstituteImage(wand,640,640,"RGB",CharPixel,pixels);</p>

<p>The format of the MagickConstituteImage method is:</p>

<pre class="code">
  MagickBooleanType MagickConstituteImage(MagickWand *wand,
    const size_t columns,const size_t rows,const char *map,
    const StorageType storage,void *pixels)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>width in pixels of the image.</p>

<h5>rows</h5>
<p>height in pixels of the image.</p>

<h5>map</h5>
<p>This string reflects the expected ordering of the pixel array. It can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent), O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.</p>

<h5>storage</h5>
<p>Define the data type of the pixels.  Float and double types are expected to be normalized [0..1] otherwise [0..QuantumRange].  Choose from these types: CharPixel, DoublePixel, FloatPixel, IntegerPixel, LongPixel, QuantumPixel, or ShortPixel.</p>

<h5>pixels</h5>
<p>This array of values contain the pixel components as defined by map and type.  You must preallocate this array where the expected length varies depending on the values of width, height, map, and type.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDecipherImage">MagickDecipherImage</a></h2>
<div class="doc-section">

<p>MagickDecipherImage() converts cipher pixels to plain pixels.</p>

<p>The format of the MagickDecipherImage method is:</p>

<pre class="code">
  MagickBooleanType MagickDecipherImage(MagickWand *wand,
    const char *passphrase)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>passphrase</h5>
<p>the passphrase.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDeconstructImages">MagickDeconstructImages</a></h2>
<div class="doc-section">

<p>MagickDeconstructImages() compares each image with the next in a sequence and returns the maximum bounding region of any pixel differences it discovers.</p>

<p>The format of the MagickDeconstructImages method is:</p>

<pre class="code">
  MagickWand *MagickDeconstructImages(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDeskewImage">MagickDeskewImage</a></h2>
<div class="doc-section">

<p>MagickDeskewImage() removes skew from the image.  Skew is an artifact that occurs in scanned images because of the camera being misaligned, imperfections in the scanning or surface, or simply because the paper was not placed completely flat when scanned.</p>

<p>The format of the MagickDeskewImage method is:</p>

<pre class="code">
  MagickBooleanType MagickDeskewImage(MagickWand *wand,
    const double threshold)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>threshold</h5>
<p>separate background from foreground.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDespeckleImage">MagickDespeckleImage</a></h2>
<div class="doc-section">

<p>MagickDespeckleImage() reduces the speckle noise in an image while perserving the edges of the original image.</p>

<p>The format of the MagickDespeckleImage method is:</p>

<pre class="code">
  MagickBooleanType MagickDespeckleImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDestroyImage">MagickDestroyImage</a></h2>
<div class="doc-section">

<p>MagickDestroyImage() dereferences an image, deallocating memory associated with the image if the reference count becomes zero.</p>

<p>The format of the MagickDestroyImage method is:</p>

<pre class="code">
  Image *MagickDestroyImage(Image *image)
</pre>

<p>A description of each parameter follows:</p>

<h5>image</h5>
<p>the image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDisplayImage">MagickDisplayImage</a></h2>
<div class="doc-section">

<p>MagickDisplayImage() displays an image.</p>

<p>The format of the MagickDisplayImage method is:</p>

<pre class="code">
  MagickBooleanType MagickDisplayImage(MagickWand *wand,
    const char *server_name)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>server_name</h5>
<p>the X server name.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDisplayImages">MagickDisplayImages</a></h2>
<div class="doc-section">

<p>MagickDisplayImages() displays an image or image sequence.</p>

<p>The format of the MagickDisplayImages method is:</p>

<pre class="code">
  MagickBooleanType MagickDisplayImages(MagickWand *wand,
    const char *server_name)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>server_name</h5>
<p>the X server name.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDistortImage">MagickDistortImage</a></h2>
<div class="doc-section">

<p>MagickDistortImage() distorts an image using various distortion methods, by mapping color lookups of the source image to a new destination image usally of the same size as the source image, unless 'bestfit' is set to true.</p>

<p>If 'bestfit' is enabled, and distortion allows it, the destination image is adjusted to ensure the whole source 'image' will just fit within the final destination image, which will be sized and offset accordingly.  Also in many cases the virtual offset of the source image will be taken into account in the mapping.</p>

<p>The format of the MagickDistortImage method is:</p>

<pre class="code">
  MagickBooleanType MagickDistortImage(MagickWand *wand,
    const DistortImageMethod method,const size_t number_arguments,
    const double *arguments,const MagickBooleanType bestfit)
</pre>

<p>A description of each parameter follows:</p>

<h5>image</h5>
<p>the image to be distorted.</p>

<h5>method</h5>
<p>the method of image distortion.</p>

<p>ArcDistortion always ignores the source image offset, and always 'bestfit' the destination image with the top left corner offset relative to the polar mapping center.</p>

<p>Bilinear has no simple inverse mapping so it does not allow 'bestfit' style of image distortion.</p>

<p>Affine, Perspective, and Bilinear, do least squares fitting of the distortion when more than the minimum number of control point pairs are provided.</p>

<p>Perspective, and Bilinear, falls back to a Affine distortion when less that 4 control point pairs are provided. While Affine distortions let you use any number of control point pairs, that is Zero pairs is a no-Op (viewport only) distrotion, one pair is a translation and two pairs of control points do a scale-rotate-translate, without any shearing.</p>

<h5>number_arguments</h5>
<p>the number of arguments given for this distortion method.</p>

<h5>arguments</h5>
<p>the arguments for this distortion method.</p>

<h5>bestfit</h5>
<p>Attempt to resize destination to fit distorted source.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickDrawImage">MagickDrawImage</a></h2>
<div class="doc-section">

<p>MagickDrawImage() renders the drawing wand on the current image.</p>

<p>The format of the MagickDrawImage method is:</p>

<pre class="code">
  MagickBooleanType MagickDrawImage(MagickWand *wand,
    const DrawingWand *drawing_wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>drawing_wand</h5>
<p>the draw wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickEdgeImage">MagickEdgeImage</a></h2>
<div class="doc-section">

<p>MagickEdgeImage() enhance edges within the image with a convolution filter of the given radius.  Use a radius of 0 and Edge() selects a suitable radius for you.</p>

<p>The format of the MagickEdgeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickEdgeImage(MagickWand *wand,const double radius)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>radius</h5>
<p>the radius of the pixel neighborhood.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickEmbossImage">MagickEmbossImage</a></h2>
<div class="doc-section">

<p>MagickEmbossImage() returns a grayscale image with a three-dimensional effect.  We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma).  For reasonable results, radius should be larger than sigma.  Use a radius of 0 and Emboss() selects a suitable radius for you.</p>

<p>The format of the MagickEmbossImage method is:</p>

<pre class="code">
  MagickBooleanType MagickEmbossImage(MagickWand *wand,const double radius,
    const double sigma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickEncipherImage">MagickEncipherImage</a></h2>
<div class="doc-section">

<p>MagickEncipherImage() converts plaint pixels to cipher pixels.</p>

<p>The format of the MagickEncipherImage method is:</p>

<pre class="code">
  MagickBooleanType MagickEncipherImage(MagickWand *wand,
    const char *passphrase)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>passphrase</h5>
<p>the passphrase.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickEnhanceImage">MagickEnhanceImage</a></h2>
<div class="doc-section">

<p>MagickEnhanceImage() applies a digital filter that improves the quality of a noisy image.</p>

<p>The format of the MagickEnhanceImage method is:</p>

<pre class="code">
  MagickBooleanType MagickEnhanceImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickEqualizeImage">MagickEqualizeImage</a></h2>
<div class="doc-section">

<p>MagickEqualizeImage() equalizes the image histogram.</p>

<p>The format of the MagickEqualizeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickEqualizeImage(MagickWand *wand)
  MagickBooleanType MagickEqualizeImageChannel(MagickWand *wand,
    const ChannelType channel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickEvaluateImage">MagickEvaluateImage</a></h2>
<div class="doc-section">

<p>MagickEvaluateImage() applys an arithmetic, relational, or logical expression to an image.  Use these operators to lighten or darken an image, to increase or decrease contrast in an image, or to produce the "negative" of an image.</p>

<p>The format of the MagickEvaluateImage method is:</p>

<pre class="code">
  MagickBooleanType MagickEvaluateImage(MagickWand *wand,
    const MagickEvaluateOperator operator,const double value)
  MagickBooleanType MagickEvaluateImages(MagickWand *wand,
    const MagickEvaluateOperator operator)
  MagickBooleanType MagickEvaluateImageChannel(MagickWand *wand,
    const ChannelType channel,const MagickEvaluateOperator op,
    const double value)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the channel(s).</p>

<h5>op</h5>
<p>A channel operator.</p>

<h5>value</h5>
<p>A value value.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickExportImagePixels">MagickExportImagePixels</a></h2>
<div class="doc-section">

<p>MagickExportImagePixels() extracts pixel data from an image and returns it to you.  The method returns MagickTrue on success otherwise MagickFalse if an error is encountered.  The data is returned as char, short int, int, ssize_t, float, or double in the order specified by map.</p>

<p>Suppose you want to extract the first scanline of a 640x480 image as character data in red-green-blue order:</p>

<pre class="text">
  MagickExportImagePixels(wand,0,0,640,1,"RGB",CharPixel,pixels);
</pre>

<p>The format of the MagickExportImagePixels method is:</p>

<pre class="code">
  MagickBooleanType MagickExportImagePixels(MagickWand *wand,
    const ssize_t x,const ssize_t y,const size_t columns,
    const size_t rows,const char *map,const StorageType storage,
    void *pixels)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x, y, columns, rows</h5>
<p>These values define the perimeter of a region of pixels you want to extract.</p>

<h5>map</h5>
<p>This string reflects the expected ordering of the pixel array. It can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent), O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.</p>

<h5>storage</h5>
<p>Define the data type of the pixels.  Float and double types are expected to be normalized [0..1] otherwise [0..QuantumRange].  Choose from these types: CharPixel, DoublePixel, FloatPixel, IntegerPixel, LongPixel, QuantumPixel, or ShortPixel.</p>

<h5>pixels</h5>
<p>This array of values contain the pixel components as defined by map and type.  You must preallocate this array where the expected length varies depending on the values of width, height, map, and type.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickExtentImage">MagickExtentImage</a></h2>
<div class="doc-section">

<p>MagickExtentImage() extends the image as defined by the geometry, gravity, and wand background color.  Set the (x,y) offset of the geometry to move the original wand relative to the extended wand.</p>

<p>The format of the MagickExtentImage method is:</p>

<pre class="code">
  MagickBooleanType MagickExtentImage(MagickWand *wand,const size_t width,
    const size_t height,const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the region width.</p>

<h5>height</h5>
<p>the region height.</p>

<h5>x</h5>
<p>the region x offset.</p>

<h5>y</h5>
<p>the region y offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickFilterImage">MagickFilterImage</a></h2>
<div class="doc-section">

<p>MagickFilterImage() applies a custom convolution kernel to the image.</p>

<p>The format of the MagickFilterImage method is:</p>

<pre class="code">
  MagickBooleanType MagickFilterImage(MagickWand *wand,
    const KernelInfo *kernel)
  MagickBooleanType MagickFilterImageChannel(MagickWand *wand,
    const ChannelType channel,const KernelInfo *kernel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>kernel</h5>
<p>An array of doubles representing the convolution kernel.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickFlipImage">MagickFlipImage</a></h2>
<div class="doc-section">

<p>MagickFlipImage() creates a vertical mirror image by reflecting the pixels around the central x-axis.</p>

<p>The format of the MagickFlipImage method is:</p>

<pre class="code">
  MagickBooleanType MagickFlipImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickFloodfillPaintImage">MagickFloodfillPaintImage</a></h2>
<div class="doc-section">

<p>MagickFloodfillPaintImage() changes the color value of any pixel that matches target and is an immediate neighbor.  If the method FillToBorderMethod is specified, the color value is changed for any neighbor pixel that does not match the bordercolor member of image.</p>

<p>The format of the MagickFloodfillPaintImage method is:</p>

<pre class="code">
  MagickBooleanType MagickFloodfillPaintImage(MagickWand *wand,
    const ChannelType channel,const PixelWand *fill,const double fuzz,
    const PixelWand *bordercolor,const ssize_t x,const ssize_t y,
    const MagickBooleanType invert)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the channel(s).</p>

<h5>fill</h5>
<p>the floodfill color pixel wand.</p>

<h5>fuzz</h5>
<p>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill.</p>

<h5>bordercolor</h5>
<p>the border color pixel wand.</p>

<h5>x,y</h5>
<p>the starting location of the operation.</p>

<h5>invert</h5>
<p>paint any pixel that does not match the target color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickFlopImage">MagickFlopImage</a></h2>
<div class="doc-section">

<p>MagickFlopImage() creates a horizontal mirror image by reflecting the pixels around the central y-axis.</p>

<p>The format of the MagickFlopImage method is:</p>

<pre class="code">
  MagickBooleanType MagickFlopImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickForwardFourierTransformImage">MagickForwardFourierTransformImage</a></h2>
<div class="doc-section">

<p>MagickForwardFourierTransformImage() implements the discrete Fourier transform (DFT) of the image either as a magnitude / phase or real / imaginary image pair.</p>

<p>The format of the MagickForwardFourierTransformImage method is:</p>

<pre class="code">
  MagickBooleanType MagickForwardFourierTransformImage(MagickWand *wand,
    const MagickBooleanType magnitude)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>magnitude</h5>
<p>if true, return as magnitude / phase pair otherwise a real / imaginary image pair.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickFrameImage">MagickFrameImage</a></h2>
<div class="doc-section">

<p>MagickFrameImage() adds a simulated three-dimensional border around the image.  The width and height specify the border width of the vertical and horizontal sides of the frame.  The inner and outer bevels indicate the width of the inner and outer shadows of the frame.</p>

<p>The format of the MagickFrameImage method is:</p>

<pre class="code">
  MagickBooleanType MagickFrameImage(MagickWand *wand,
    const PixelWand *matte_color,const size_t width,
    const size_t height,const ssize_t inner_bevel,
    const ssize_t outer_bevel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>matte_color</h5>
<p>the frame color pixel wand.</p>

<h5>width</h5>
<p>the border width.</p>

<h5>height</h5>
<p>the border height.</p>

<h5>inner_bevel</h5>
<p>the inner bevel width.</p>

<h5>outer_bevel</h5>
<p>the outer bevel width.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickFunctionImage">MagickFunctionImage</a></h2>
<div class="doc-section">

<p>MagickFunctionImage() applys an arithmetic, relational, or logical expression to an image.  Use these operators to lighten or darken an image, to increase or decrease contrast in an image, or to produce the "negative" of an image.</p>

<p>The format of the MagickFunctionImage method is:</p>

<pre class="code">
  MagickBooleanType MagickFunctionImage(MagickWand *wand,
    const MagickFunction function,const size_t number_arguments,
    const double *arguments)
  MagickBooleanType MagickFunctionImageChannel(MagickWand *wand,
    const ChannelType channel,const MagickFunction function,
    const size_t number_arguments,const double *arguments)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the channel(s).</p>

<h5>function</h5>
<p>the image function.</p>

<h5>number_arguments</h5>
<p>the number of function arguments.</p>

<h5>arguments</h5>
<p>the function arguments.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickFxImage">MagickFxImage</a></h2>
<div class="doc-section">

<p>MagickFxImage() evaluate expression for each pixel in the image.</p>

<p>The format of the MagickFxImage method is:</p>

<pre class="code">
  MagickWand *MagickFxImage(MagickWand *wand,const char *expression)
  MagickWand *MagickFxImageChannel(MagickWand *wand,
    const ChannelType channel,const char *expression)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>expression</h5>
<p>the expression.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGammaImage">MagickGammaImage</a></h2>
<div class="doc-section">

<p>MagickGammaImage() gamma-corrects an image.  The same image viewed on different devices will have perceptual differences in the way the image's intensities are represented on the screen.  Specify individual gamma levels for the red, green, and blue channels, or adjust all three with the gamma parameter.  Values typically range from 0.8 to 2.3.</p>

<p>You can also reduce the influence of a particular channel with a gamma value of 0.</p>

<p>The format of the MagickGammaImage method is:</p>

<pre class="code">
  MagickBooleanType MagickGammaImage(MagickWand *wand,const double gamma)
  MagickBooleanType MagickGammaImageChannel(MagickWand *wand,
    const ChannelType channel,const double gamma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the channel.</p>

<h5>level</h5>
<p>Define the level of gamma correction.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGaussianBlurImage">MagickGaussianBlurImage</a></h2>
<div class="doc-section">

<p>MagickGaussianBlurImage() blurs an image.  We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, the radius should be larger than sigma.  Use a radius of 0 and MagickGaussianBlurImage() selects a suitable radius for you.</p>

<p>The format of the MagickGaussianBlurImage method is:</p>

<pre class="code">
  MagickBooleanType MagickGaussianBlurImage(MagickWand *wand,
    const double radius,const double sigma)
  MagickBooleanType MagickGaussianBlurImageChannel(MagickWand *wand,
    const ChannelType channel,const double radius,const double sigma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImage">MagickGetImage</a></h2>
<div class="doc-section">

<p>MagickGetImage() gets the image at the current image index.</p>

<p>The format of the MagickGetImage method is:</p>

<pre class="code">
  MagickWand *MagickGetImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageAlphaChannel">MagickGetImageAlphaChannel</a></h2>
<div class="doc-section">

<p>MagickGetImageAlphaChannel() returns MagickFalse if the image alpha channel is not activated.  That is, the image is RGB rather than RGBA or CMYK rather than CMYKA.</p>

<p>The format of the MagickGetImageAlphaChannel method is:</p>

<pre class="code">
  size_t MagickGetImageAlphaChannel(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageClipMask">MagickGetImageClipMask</a></h2>
<div class="doc-section">

<p>MagickGetImageClipMask() gets the image clip mask at the current image index.</p>

<p>The format of the MagickGetImageClipMask method is:</p>

<pre class="code">
  MagickWand *MagickGetImageClipMask(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageBackgroundColor">MagickGetImageBackgroundColor</a></h2>
<div class="doc-section">

<p>MagickGetImageBackgroundColor() returns the image background color.</p>

<p>The format of the MagickGetImageBackgroundColor method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageBackgroundColor(MagickWand *wand,
    PixelWand *background_color)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>background_color</h5>
<p>Return the background color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageBlob">MagickGetImageBlob</a></h2>
<div class="doc-section">

<p>MagickGetImageBlob() implements direct to memory image formats.  It returns the image as a blob (a formatted "file" in memory) and its length, starting from the current position in the image sequence.  Use MagickSetImageFormat() to set the format to write to the blob (GIF, JPEG,  PNG, etc.).</p>

<p>Utilize MagickResetIterator() to ensure the write is from the beginning of the image sequence.</p>

<p>Use MagickRelinquishMemory() to free the blob when you are done with it.</p>

<p>The format of the MagickGetImageBlob method is:</p>

<pre class="code">
  unsigned char *MagickGetImageBlob(MagickWand *wand,size_t *length)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>length</h5>
<p>the length of the blob.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageBlob">MagickGetImageBlob</a></h2>
<div class="doc-section">

<p>MagickGetImageBlob() implements direct to memory image formats.  It returns the image sequence as a blob and its length.  The format of the image determines the format of the returned blob (GIF, JPEG,  PNG, etc.).  To return a different image format, use MagickSetImageFormat().</p>

<p>Note, some image formats do not permit multiple images to the same image stream (e.g. JPEG).  in this instance, just the first image of the sequence is returned as a blob.</p>

<p>The format of the MagickGetImagesBlob method is:</p>

<pre class="code">
  unsigned char *MagickGetImagesBlob(MagickWand *wand,size_t *length)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>length</h5>
<p>the length of the blob.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageBluePrimary">MagickGetImageBluePrimary</a></h2>
<div class="doc-section">

<p>MagickGetImageBluePrimary() returns the chromaticy blue primary point for the image.</p>

<p>The format of the MagickGetImageBluePrimary method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageBluePrimary(MagickWand *wand,double *x,
    double *y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the chromaticity blue primary x-point.</p>

<h5>y</h5>
<p>the chromaticity blue primary y-point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageBorderColor">MagickGetImageBorderColor</a></h2>
<div class="doc-section">

<p>MagickGetImageBorderColor() returns the image border color.</p>

<p>The format of the MagickGetImageBorderColor method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageBorderColor(MagickWand *wand,
    PixelWand *border_color)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>border_color</h5>
<p>Return the border color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageChannelDepth">MagickGetImageChannelDepth</a></h2>
<div class="doc-section">

<p>MagickGetImageChannelDepth() gets the depth for one or more image channels.</p>

<p>The format of the MagickGetImageChannelDepth method is:</p>

<pre class="code">
  size_t MagickGetImageChannelDepth(MagickWand *wand,
    const ChannelType channel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageChannelDistortion">MagickGetImageChannelDistortion</a></h2>
<div class="doc-section">

<p>MagickGetImageChannelDistortion() compares one or more image channels of an image to a reconstructed image and returns the specified distortion metric.</p>

<p>The format of the MagickGetImageChannelDistortion method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageChannelDistortion(MagickWand *wand,
    const MagickWand *reference,const ChannelType channel,
    const MetricType metric,double *distortion)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>reference</h5>
<p>the reference wand.</p>

<h5>channel</h5>
<p>the channel.</p>

<h5>metric</h5>
<p>the metric.</p>

<h5>distortion</h5>
<p>the computed distortion between the images.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageChannelDistortions">MagickGetImageChannelDistortions</a></h2>
<div class="doc-section">

<p>MagickGetImageChannelDistortions() compares one or more image channels of an image to a reconstructed image and returns the specified distortion metrics.</p>

<p>Use MagickRelinquishMemory() to free the metrics when you are done with them.</p>

<p>The format of the MagickGetImageChannelDistortion method is:</p>

<pre class="code">
  double *MagickGetImageChannelDistortion(MagickWand *wand,
    const MagickWand *reference,const MetricType metric)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>reference</h5>
<p>the reference wand.</p>

<h5>metric</h5>
<p>the metric.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageChannelFeatures">MagickGetImageChannelFeatures</a></h2>
<div class="doc-section">

<p>MagickGetImageChannelFeatures() returns features for each channel in the image in each of four directions (horizontal, vertical, left and right diagonals) for the specified distance.  The features include the angular second moment, contrast, correlation, sum of squares: variance, inverse difference moment, sum average, sum varience, sum entropy, entropy, difference variance, difference entropy, information measures of correlation 1, information measures of correlation 2, and maximum correlation coefficient.  You can access the red channel contrast, for example, like this:</p>

<pre class="text">
  channel_features=MagickGetImageChannelFeatures(wand,1);
  contrast=channel_features[RedChannel].contrast[0];
</pre>

<p>Use MagickRelinquishMemory() to free the statistics buffer.</p>

<p>The format of the MagickGetImageChannelFeatures method is:</p>

<pre class="code">
  ChannelFeatures *MagickGetImageChannelFeatures(MagickWand *wand,
    const size_t distance)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>distance</h5>
<p>the distance.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageChannelKurtosis">MagickGetImageChannelKurtosis</a></h2>
<div class="doc-section">

<p>MagickGetImageChannelKurtosis() gets the kurtosis and skewness of one or more image channels.</p>

<p>The format of the MagickGetImageChannelKurtosis method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageChannelKurtosis(MagickWand *wand,
    const ChannelType channel,double *kurtosis,double *skewness)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>kurtosis</h5>
<p>The kurtosis for the specified channel(s).</p>

<h5>skewness</h5>
<p>The skewness for the specified channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageChannelMean">MagickGetImageChannelMean</a></h2>
<div class="doc-section">

<p>MagickGetImageChannelMean() gets the mean and standard deviation of one or more image channels.</p>

<p>The format of the MagickGetImageChannelMean method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageChannelMean(MagickWand *wand,
    const ChannelType channel,double *mean,double *standard_deviation)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>mean</h5>
<p>The mean pixel value for the specified channel(s).</p>

<h5>standard_deviation</h5>
<p>The standard deviation for the specified channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageChannelRange">MagickGetImageChannelRange</a></h2>
<div class="doc-section">

<p>MagickGetImageChannelRange() gets the range for one or more image channels.</p>

<p>The format of the MagickGetImageChannelRange method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageChannelRange(MagickWand *wand,
    const ChannelType channel,double *minima,double *maxima)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>minima</h5>
<p>The minimum pixel value for the specified channel(s).</p>

<h5>maxima</h5>
<p>The maximum pixel value for the specified channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageChannelStatistics">MagickGetImageChannelStatistics</a></h2>
<div class="doc-section">

<p>MagickGetImageChannelStatistics() returns statistics for each channel in the image.  The statistics include the channel depth, its minima and maxima, the mean, the standard deviation, the kurtosis and the skewness. You can access the red channel mean, for example, like this:</p>

<pre class="text">
  channel_statistics=MagickGetImageChannelStatistics(wand);
  red_mean=channel_statistics[RedChannel].mean;
</pre>

<p>Use MagickRelinquishMemory() to free the statistics buffer.</p>

<p>The format of the MagickGetImageChannelStatistics method is:</p>

<pre class="code">
  ChannelStatistics *MagickGetImageChannelStatistics(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageColormapColor">MagickGetImageColormapColor</a></h2>
<div class="doc-section">

<p>MagickGetImageColormapColor() returns the color of the specified colormap index.</p>

<p>The format of the MagickGetImageColormapColor method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageColormapColor(MagickWand *wand,
    const size_t index,PixelWand *color)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>index</h5>
<p>the offset into the image colormap.</p>

<h5>color</h5>
<p>Return the colormap color in this wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageColors">MagickGetImageColors</a></h2>
<div class="doc-section">

<p>MagickGetImageColors() gets the number of unique colors in the image.</p>

<p>The format of the MagickGetImageColors method is:</p>

<pre class="code">
  size_t MagickGetImageColors(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageColorspace">MagickGetImageColorspace</a></h2>
<div class="doc-section">

<p>MagickGetImageColorspace() gets the image colorspace.</p>

<p>The format of the MagickGetImageColorspace method is:</p>

<pre class="code">
  ColorspaceType MagickGetImageColorspace(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageCompose">MagickGetImageCompose</a></h2>
<div class="doc-section">

<p>MagickGetImageCompose() returns the composite operator associated with the image.</p>

<p>The format of the MagickGetImageCompose method is:</p>

<pre class="code">
  CompositeOperator MagickGetImageCompose(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageCompression">MagickGetImageCompression</a></h2>
<div class="doc-section">

<p>MagickGetImageCompression() gets the image compression.</p>

<p>The format of the MagickGetImageCompression method is:</p>

<pre class="code">
  CompressionType MagickGetImageCompression(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageCompressionQuality">MagickGetImageCompressionQuality</a></h2>
<div class="doc-section">

<p>MagickGetImageCompressionQuality() gets the image compression quality.</p>

<p>The format of the MagickGetImageCompressionQuality method is:</p>

<pre class="code">
  size_t MagickGetImageCompressionQuality(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageDelay">MagickGetImageDelay</a></h2>
<div class="doc-section">

<p>MagickGetImageDelay() gets the image delay.</p>

<p>The format of the MagickGetImageDelay method is:</p>

<pre class="code">
  size_t MagickGetImageDelay(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageDepth">MagickGetImageDepth</a></h2>
<div class="doc-section">

<p>MagickGetImageDepth() gets the image depth.</p>

<p>The format of the MagickGetImageDepth method is:</p>

<pre class="code">
  size_t MagickGetImageDepth(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageDistortion">MagickGetImageDistortion</a></h2>
<div class="doc-section">

<p>MagickGetImageDistortion() compares an image to a reconstructed image and returns the specified distortion metric.</p>

<p>The format of the MagickGetImageDistortion method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageDistortion(MagickWand *wand,
    const MagickWand *reference,const MetricType metric,
    double *distortion)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>reference</h5>
<p>the reference wand.</p>

<h5>metric</h5>
<p>the metric.</p>

<h5>distortion</h5>
<p>the computed distortion between the images.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageDispose">MagickGetImageDispose</a></h2>
<div class="doc-section">

<p>MagickGetImageDispose() gets the image disposal method.</p>

<p>The format of the MagickGetImageDispose method is:</p>

<pre class="code">
  DisposeType MagickGetImageDispose(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageEndian">MagickGetImageEndian</a></h2>
<div class="doc-section">

<p>MagickGetImageEndian() gets the image endian.</p>

<p>The format of the MagickGetImageEndian method is:</p>

<pre class="code">
  EndianType MagickGetImageEndian(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageFilename">MagickGetImageFilename</a></h2>
<div class="doc-section">

<p>MagickGetImageFilename() returns the filename of a particular image in a sequence.</p>

<p>The format of the MagickGetImageFilename method is:</p>

<pre class="code">
  char *MagickGetImageFilename(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageFormat">MagickGetImageFormat</a></h2>
<div class="doc-section">

<p>MagickGetImageFormat() returns the format of a particular image in a sequence.</p>

<p>The format of the MagickGetImageFormat method is:</p>

<pre class="code">
  char *MagickGetImageFormat(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageFuzz">MagickGetImageFuzz</a></h2>
<div class="doc-section">

<p>MagickGetImageFuzz() gets the image fuzz.</p>

<p>The format of the MagickGetImageFuzz method is:</p>

<pre class="code">
  double MagickGetImageFuzz(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageGamma">MagickGetImageGamma</a></h2>
<div class="doc-section">

<p>MagickGetImageGamma() gets the image gamma.</p>

<p>The format of the MagickGetImageGamma method is:</p>

<pre class="code">
  double MagickGetImageGamma(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageGravity">MagickGetImageGravity</a></h2>
<div class="doc-section">

<p>MagickGetImageGravity() gets the image gravity.</p>

<p>The format of the MagickGetImageGravity method is:</p>

<pre class="code">
  GravityType MagickGetImageGravity(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageGreenPrimary">MagickGetImageGreenPrimary</a></h2>
<div class="doc-section">

<p>MagickGetImageGreenPrimary() returns the chromaticy green primary point.</p>

<p>The format of the MagickGetImageGreenPrimary method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageGreenPrimary(MagickWand *wand,double *x,
    double *y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the chromaticity green primary x-point.</p>

<h5>y</h5>
<p>the chromaticity green primary y-point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageHeight">MagickGetImageHeight</a></h2>
<div class="doc-section">

<p>MagickGetImageHeight() returns the image height.</p>

<p>The format of the MagickGetImageHeight method is:</p>

<pre class="code">
  size_t MagickGetImageHeight(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageHistogram">MagickGetImageHistogram</a></h2>
<div class="doc-section">

<p>MagickGetImageHistogram() returns the image histogram as an array of PixelWand wands.</p>

<p>The format of the MagickGetImageHistogram method is:</p>

<pre class="code">
  PixelWand **MagickGetImageHistogram(MagickWand *wand,
    size_t *number_colors)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>number_colors</h5>
<p>the number of unique colors in the image and the number of pixel wands returned.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageInterlaceScheme">MagickGetImageInterlaceScheme</a></h2>
<div class="doc-section">

<p>MagickGetImageInterlaceScheme() gets the image interlace scheme.</p>

<p>The format of the MagickGetImageInterlaceScheme method is:</p>

<pre class="code">
  InterlaceType MagickGetImageInterlaceScheme(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageInterpolateMethod">MagickGetImageInterpolateMethod</a></h2>
<div class="doc-section">

<p>MagickGetImageInterpolateMethod() returns the interpolation method for the sepcified image.</p>

<p>The format of the MagickGetImageInterpolateMethod method is:</p>

<pre class="code">
  InterpolatePixelMethod MagickGetImageInterpolateMethod(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageIterations">MagickGetImageIterations</a></h2>
<div class="doc-section">

<p>MagickGetImageIterations() gets the image iterations.</p>

<p>The format of the MagickGetImageIterations method is:</p>

<pre class="code">
  size_t MagickGetImageIterations(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageLength">MagickGetImageLength</a></h2>
<div class="doc-section">

<p>MagickGetImageLength() returns the image length in bytes.</p>

<p>The format of the MagickGetImageLength method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageLength(MagickWand *wand,
    MagickSizeType *length)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>length</h5>
<p>the image length in bytes.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageMatteColor">MagickGetImageMatteColor</a></h2>
<div class="doc-section">

<p>MagickGetImageMatteColor() returns the image matte color.</p>

<p>The format of the MagickGetImageMatteColor method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImagematteColor(MagickWand *wand,
    PixelWand *matte_color)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>matte_color</h5>
<p>Return the matte color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageOrientation">MagickGetImageOrientation</a></h2>
<div class="doc-section">

<p>MagickGetImageOrientation() returns the image orientation.</p>

<p>The format of the MagickGetImageOrientation method is:</p>

<pre class="code">
  OrientationType MagickGetImageOrientation(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImagePage">MagickGetImagePage</a></h2>
<div class="doc-section">

<p>MagickGetImagePage() returns the page geometry associated with the image.</p>

<p>The format of the MagickGetImagePage method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImagePage(MagickWand *wand,
    size_t *width,size_t *height,ssize_t *x,ssize_t *y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the page width.</p>

<h5>height</h5>
<p>the page height.</p>

<h5>x</h5>
<p>the page x-offset.</p>

<h5>y</h5>
<p>the page y-offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImagePixelColor">MagickGetImagePixelColor</a></h2>
<div class="doc-section">

<p>MagickGetImagePixelColor() returns the color of the specified pixel.</p>

<p>The format of the MagickGetImagePixelColor method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImagePixelColor(MagickWand *wand,
    const ssize_t x,const ssize_t y,PixelWand *color)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x,y</h5>
<p>the pixel offset into the image.</p>

<h5>color</h5>
<p>Return the colormap color in this wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageRedPrimary">MagickGetImageRedPrimary</a></h2>
<div class="doc-section">

<p>MagickGetImageRedPrimary() returns the chromaticy red primary point.</p>

<p>The format of the MagickGetImageRedPrimary method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageRedPrimary(MagickWand *wand,double *x,
    double *y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the chromaticity red primary x-point.</p>

<h5>y</h5>
<p>the chromaticity red primary y-point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageRegion">MagickGetImageRegion</a></h2>
<div class="doc-section">

<p>MagickGetImageRegion() extracts a region of the image and returns it as a a new wand.</p>

<p>The format of the MagickGetImageRegion method is:</p>

<pre class="code">
  MagickWand *MagickGetImageRegion(MagickWand *wand,
    const size_t width,const size_t height,const ssize_t x,
    const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the region width.</p>

<h5>height</h5>
<p>the region height.</p>

<h5>x</h5>
<p>the region x offset.</p>

<h5>y</h5>
<p>the region y offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageRenderingIntent">MagickGetImageRenderingIntent</a></h2>
<div class="doc-section">

<p>MagickGetImageRenderingIntent() gets the image rendering intent.</p>

<p>The format of the MagickGetImageRenderingIntent method is:</p>

<pre class="code">
  RenderingIntent MagickGetImageRenderingIntent(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageResolution">MagickGetImageResolution</a></h2>
<div class="doc-section">

<p>MagickGetImageResolution() gets the image X and Y resolution.</p>

<p>The format of the MagickGetImageResolution method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageResolution(MagickWand *wand,double *x,
    double *y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the image x-resolution.</p>

<h5>y</h5>
<p>the image y-resolution.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageScene">MagickGetImageScene</a></h2>
<div class="doc-section">

<p>MagickGetImageScene() gets the image scene.</p>

<p>The format of the MagickGetImageScene method is:</p>

<pre class="code">
  size_t MagickGetImageScene(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageSignature">MagickGetImageSignature</a></h2>
<div class="doc-section">

<p>MagickGetImageSignature() generates an SHA-256 message digest for the image pixel stream.</p>

<p>The format of the MagickGetImageSignature method is:</p>

<pre class="code">
  char *MagickGetImageSignature(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageTicksPerSecond">MagickGetImageTicksPerSecond</a></h2>
<div class="doc-section">

<p>MagickGetImageTicksPerSecond() gets the image ticks-per-second.</p>

<p>The format of the MagickGetImageTicksPerSecond method is:</p>

<pre class="code">
  size_t MagickGetImageTicksPerSecond(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageType">MagickGetImageType</a></h2>
<div class="doc-section">

<p>MagickGetImageType() gets the potential image type:</p>

<p>Bilevel        Grayscale       GrayscaleMatte Palette        PaletteMatte    TrueColor TrueColorMatte ColorSeparation ColorSeparationMatte</p>

<p>To ensure the image type matches its potential, use MagickSetImageType():</p>

<pre class="text">
      (void) MagickSetImageType(wand,MagickGetImageType(wand));
</pre>

<p>The format of the MagickGetImageType method is:</p>

<pre class="code">
  ImageType MagickGetImageType(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageUnits">MagickGetImageUnits</a></h2>
<div class="doc-section">

<p>MagickGetImageUnits() gets the image units of resolution.</p>

<p>The format of the MagickGetImageUnits method is:</p>

<pre class="code">
  ResolutionType MagickGetImageUnits(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageVirtualPixelMethod">MagickGetImageVirtualPixelMethod</a></h2>
<div class="doc-section">

<p>MagickGetImageVirtualPixelMethod() returns the virtual pixel method for the sepcified image.</p>

<p>The format of the MagickGetImageVirtualPixelMethod method is:</p>

<pre class="code">
  VirtualPixelMethod MagickGetImageVirtualPixelMethod(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageWhitePoint">MagickGetImageWhitePoint</a></h2>
<div class="doc-section">

<p>MagickGetImageWhitePoint() returns the chromaticy white point.</p>

<p>The format of the MagickGetImageWhitePoint method is:</p>

<pre class="code">
  MagickBooleanType MagickGetImageWhitePoint(MagickWand *wand,double *x,
    double *y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the chromaticity white x-point.</p>

<h5>y</h5>
<p>the chromaticity white y-point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageWidth">MagickGetImageWidth</a></h2>
<div class="doc-section">

<p>MagickGetImageWidth() returns the image width.</p>

<p>The format of the MagickGetImageWidth method is:</p>

<pre class="code">
  size_t MagickGetImageWidth(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetNumberImages">MagickGetNumberImages</a></h2>
<div class="doc-section">

<p>MagickGetNumberImages() returns the number of images associated with a magick wand.</p>

<p>The format of the MagickGetNumberImages method is:</p>

<pre class="code">
  size_t MagickGetNumberImages(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickGetImageTotalInkDensity">MagickGetImageTotalInkDensity</a></h2>
<div class="doc-section">

<p>MagickGetImageTotalInkDensity() gets the image total ink density.</p>

<p>The format of the MagickGetImageTotalInkDensity method is:</p>

<pre class="code">
  double MagickGetImageTotalInkDensity(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickHaldClutImage">MagickHaldClutImage</a></h2>
<div class="doc-section">

<p>MagickHaldClutImage() replaces colors in the image from a Hald color lookup table.   A Hald color lookup table is a 3-dimensional color cube mapped to 2 dimensions.  Create it with the HALD coder.  You can apply any color transformation to the Hald image and then use this method to apply the transform to the image.</p>

<p>The format of the MagickHaldClutImage method is:</p>

<pre class="code">
  MagickBooleanType MagickHaldClutImage(MagickWand *wand,
    const MagickWand *hald_wand)
  MagickBooleanType MagickHaldClutImageChannel(MagickWand *wand,
    const ChannelType channel,const MagickWand *hald_wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>hald_image</h5>
<p>the hald CLUT image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickHasNextImage">MagickHasNextImage</a></h2>
<div class="doc-section">

<p>MagickHasNextImage() returns MagickTrue if the wand has more images when traversing the list in the forward direction</p>

<p>The format of the MagickHasNextImage method is:</p>

<pre class="code">
  MagickBooleanType MagickHasNextImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickHasPreviousImage">MagickHasPreviousImage</a></h2>
<div class="doc-section">

<p>MagickHasPreviousImage() returns MagickTrue if the wand has more images when traversing the list in the reverse direction</p>

<p>The format of the MagickHasPreviousImage method is:</p>

<pre class="code">
  MagickBooleanType MagickHasPreviousImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickIdentifyImage">MagickIdentifyImage</a></h2>
<div class="doc-section">

<p>MagickIdentifyImage() identifies an image by printing its attributes to the file.  Attributes include the image width, height, size, and others.</p>

<p>The format of the MagickIdentifyImage method is:</p>

<pre class="code">
  const char *MagickIdentifyImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickImplodeImage">MagickImplodeImage</a></h2>
<div class="doc-section">

<p>MagickImplodeImage() creates a new image that is a copy of an existing one with the image pixels "implode" by the specified percentage.  It allocates the memory necessary for the new Image structure and returns a pointer to the new image.</p>

<p>The format of the MagickImplodeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickImplodeImage(MagickWand *wand,
    const double radius)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>amount</h5>
<p>Define the extent of the implosion.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickImportImagePixels">MagickImportImagePixels</a></h2>
<div class="doc-section">

<p>MagickImportImagePixels() accepts pixel datand stores it in the image at the location you specify.  The method returns MagickFalse on success otherwise MagickTrue if an error is encountered.  The pixel data can be either char, short int, int, ssize_t, float, or double in the order specified by map.</p>

<p>Suppose your want to upload the first scanline of a 640x480 image from character data in red-green-blue order:</p>

<pre class="text">
  MagickImportImagePixels(wand,0,0,640,1,"RGB",CharPixel,pixels);
</pre>

<p>The format of the MagickImportImagePixels method is:</p>

<pre class="code">
  MagickBooleanType MagickImportImagePixels(MagickWand *wand,
    const ssize_t x,const ssize_t y,const size_t columns,
    const size_t rows,const char *map,const StorageType storage,
    const void *pixels)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x, y, columns, rows</h5>
<p>These values define the perimeter of a region of pixels you want to define.</p>

<h5>map</h5>
<p>This string reflects the expected ordering of the pixel array. It can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent), O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.</p>

<h5>storage</h5>
<p>Define the data type of the pixels.  Float and double types are expected to be normalized [0..1] otherwise [0..QuantumRange].  Choose from these types: CharPixel, ShortPixel, IntegerPixel, LongPixel, FloatPixel, or DoublePixel.</p>

<h5>pixels</h5>
<p>This array of values contain the pixel components as defined by map and type.  You must preallocate this array where the expected length varies depending on the values of width, height, map, and type.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickInverseFourierTransformImage">MagickInverseFourierTransformImage</a></h2>
<div class="doc-section">

<p>MagickInverseFourierTransformImage() implements the inverse discrete Fourier transform (DFT) of the image either as a magnitude / phase or real / imaginary image pair.</p>

<p>The format of the MagickInverseFourierTransformImage method is:</p>

<pre class="code">
  MagickBooleanType MagickInverseFourierTransformImage(
    MagickWand *magnitude_wand,MagickWand *phase_wand,
    const MagickBooleanType magnitude)
</pre>

<p>A description of each parameter follows:</p>

<h5>magnitude_wand</h5>
<p>the magnitude or real wand.</p>

<h5>phase_wand</h5>
<p>the phase or imaginary wand.</p>

<h5>magnitude</h5>
<p>if true, return as magnitude / phase pair otherwise a real / imaginary image pair.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickLabelImage">MagickLabelImage</a></h2>
<div class="doc-section">

<p>MagickLabelImage() adds a label to your image.</p>

<p>The format of the MagickLabelImage method is:</p>

<pre class="code">
  MagickBooleanType MagickLabelImage(MagickWand *wand,const char *label)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>label</h5>
<p>the image label.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickLevelImage">MagickLevelImage</a></h2>
<div class="doc-section">

<p>MagickLevelImage() adjusts the levels of an image by scaling the colors falling between specified white and black points to the full available quantum range. The parameters provided represent the black, mid, and white points. The black point specifies the darkest color in the image. Colors darker than the black point are set to zero. Mid point specifies a gamma correction to apply to the image.  White point specifies the lightest color in the image. Colors brighter than the white point are set to the maximum quantum value.</p>

<p>The format of the MagickLevelImage method is:</p>

<pre class="code">
  MagickBooleanType MagickLevelImage(MagickWand *wand,
    const double black_point,const double gamma,const double white_point)
  MagickBooleanType MagickLevelImageChannel(MagickWand *wand,
    const ChannelType channel,const double black_point,const double gamma,
    const double white_point)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>Identify which channel to level: RedChannel, GreenChannel,</p>

<h5>black_point</h5>
<p>the black point.</p>

<h5>gamma</h5>
<p>the gamma.</p>

<h5>white_point</h5>
<p>the white point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickLinearStretchImage">MagickLinearStretchImage</a></h2>
<div class="doc-section">

<p>MagickLinearStretchImage() stretches with saturation the image intensity.</p>

<p>You can also reduce the influence of a particular channel with a gamma value of 0.</p>

<p>The format of the MagickLinearStretchImage method is:</p>

<pre class="code">
  MagickBooleanType MagickLinearStretchImage(MagickWand *wand,
    const double black_point,const double white_point)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>black_point</h5>
<p>the black point.</p>

<h5>white_point</h5>
<p>the white point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickLiquidRescaleImage">MagickLiquidRescaleImage</a></h2>
<div class="doc-section">

<p>MagickLiquidRescaleImage() rescales image with seam carving.</p>

<p>MagickBooleanType MagickLiquidRescaleImage(MagickWand *wand, const size_t columns,const size_t rows,const double delta_x, const double rigidity)</p>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>the number of columns in the scaled image.</p>

<h5>rows</h5>
<p>the number of rows in the scaled image.</p>

<h5>delta_x</h5>
<p>maximum seam transversal step (0 means straight seams).</p>

<h5>rigidity</h5>
<p>introduce a bias for non-straight seams (typically 0).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickMagnifyImage">MagickMagnifyImage</a></h2>
<div class="doc-section">

<p>MagickMagnifyImage() is a convenience method that scales an image proportionally to twice its original size.</p>

<p>The format of the MagickMagnifyImage method is:</p>

<pre class="code">
  MagickBooleanType MagickMagnifyImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickMergeImageLayers">MagickMergeImageLayers</a></h2>
<div class="doc-section">

<p>MagickMergeImageLayers() composes all the image layers from the current given image onward to produce a single image of the merged layers.</p>

<p>The inital canvas's size depends on the given ImageLayerMethod, and is initialized using the first images background color.  The images are then compositied onto that image in sequence using the given composition that has been assigned to each individual image.</p>

<p>The format of the MagickMergeImageLayers method is:</p>

<pre class="code">
  MagickWand *MagickMergeImageLayers(MagickWand *wand,
    const ImageLayerMethod method)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>method</h5>
<p>the method of selecting the size of the initial canvas.</p>

<p>MergeLayer: Merge all layers onto a canvas just large enough to hold all the actual images. The virtual canvas of the first image is preserved but otherwise ignored.</p>

<p>FlattenLayer: Use the virtual canvas size of first image. Images which fall outside this canvas is clipped. This can be used to 'fill out' a given virtual canvas.</p>

<p>MosaicLayer: Start with the virtual canvas of the first image, enlarging left and right edges to contain all images. Images with negative offsets will be clipped.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickMinifyImage">MagickMinifyImage</a></h2>
<div class="doc-section">

<p>MagickMinifyImage() is a convenience method that scales an image proportionally to one-half its original size</p>

<p>The format of the MagickMinifyImage method is:</p>

<pre class="code">
  MagickBooleanType MagickMinifyImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickModulateImage">MagickModulateImage</a></h2>
<div class="doc-section">

<p>MagickModulateImage() lets you control the brightness, saturation, and hue of an image.  Hue is the percentage of absolute rotation from the current position.  For example 50 results in a counter-clockwise rotation of 90 degrees, 150 results in a clockwise rotation of 90 degrees, with 0 and 200 both resulting in a rotation of 180 degrees.</p>

<p>To increase the color brightness by 20 and decrease the color saturation by 10 and leave the hue unchanged, use: 120,90,100.</p>

<p>The format of the MagickModulateImage method is:</p>

<pre class="code">
  MagickBooleanType MagickModulateImage(MagickWand *wand,
    const double brightness,const double saturation,const double hue)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>brightness</h5>
<p>the percent change in brighness.</p>

<h5>saturation</h5>
<p>the percent change in saturation.</p>

<h5>hue</h5>
<p>the percent change in hue.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickMontageImage">MagickMontageImage</a></h2>
<div class="doc-section">

<p>MagickMontageImage() creates a composite image by combining several separate images. The images are tiled on the composite image with the name of the image optionally appearing just below the individual tile.</p>

<p>The format of the MagickMontageImage method is:</p>

<pre class="code">
  MagickWand *MagickMontageImage(MagickWand *wand,
    const DrawingWand drawing_wand,const char *tile_geometry,
    const char *thumbnail_geometry,const MontageMode mode,
    const char *frame)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>drawing_wand</h5>
<p>the drawing wand.  The font name, size, and color are obtained from this wand.</p>

<h5>tile_geometry</h5>
<p>the number of tiles per row and page (e.g. 6x4+0+0).</p>

<h5>thumbnail_geometry</h5>
<p>Preferred image size and border size of each thumbnail (e.g. 120x120+4+3>).</p>

<h5>mode</h5>
<p>Thumbnail framing mode: Frame, Unframe, or Concatenate.</p>

<h5>frame</h5>
<p>Surround the image with an ornamental border (e.g. 15x15+3+3). The frame color is that of the thumbnail's matte color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickMorphImages">MagickMorphImages</a></h2>
<div class="doc-section">

<p>MagickMorphImages() method morphs a set of images.  Both the image pixels and size are linearly interpolated to give the appearance of a meta-morphosis from one image to the next.</p>

<p>The format of the MagickMorphImages method is:</p>

<pre class="code">
  MagickWand *MagickMorphImages(MagickWand *wand,
    const size_t number_frames)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>number_frames</h5>
<p>the number of in-between images to generate.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickMorphologyImage">MagickMorphologyImage</a></h2>
<div class="doc-section">

<p>MagickMorphologyImage() applies a user supplied kernel to the image according to the given mophology method.</p>

<p>The format of the MagickMorphologyImage method is:</p>

<pre class="code">
  MagickBooleanType MagickMorphologyImage(MagickWand *wand,
    MorphologyMethod method,const ssize_t iterations,KernelInfo *kernel)
  MagickBooleanType MagickMorphologyImageChannel(MagickWand *wand,
    ChannelType channel,MorphologyMethod method,const ssize_t iterations,
    KernelInfo *kernel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>method</h5>
<p>the morphology method to be applied.</p>

<h5>iterations</h5>
<p>apply the operation this many times (or no change). A value of -1 means loop until no change found.  How this is applied may depend on the morphology method.  Typically this is a value of 1.</p>

<h5>kernel</h5>
<p>An array of doubles representing the morphology kernel.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickMotionBlurImage">MagickMotionBlurImage</a></h2>
<div class="doc-section">

<p>MagickMotionBlurImage() simulates motion blur.  We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma.  Use a radius of 0 and MotionBlurImage() selects a suitable radius for you. Angle gives the angle of the blurring motion.</p>

<p>The format of the MagickMotionBlurImage method is:</p>

<pre class="code">
  MagickBooleanType MagickMotionBlurImage(MagickWand *wand,
    const double radius,const double sigma,const double angle)
  MagickBooleanType MagickMotionBlurImageChannel(MagickWand *wand,
    const ChannelType channel,const double radius,const double sigma,
    const double angle)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

<h5>angle</h5>
<p>Apply the effect along this angle.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickNegateImage">MagickNegateImage</a></h2>
<div class="doc-section">

<p>MagickNegateImage() negates the colors in the reference image.  The Grayscale option means that only grayscale values within the image are negated.</p>

<p>You can also reduce the influence of a particular channel with a gamma value of 0.</p>

<p>The format of the MagickNegateImage method is:</p>

<pre class="code">
  MagickBooleanType MagickNegateImage(MagickWand *wand,
    const MagickBooleanType gray)
  MagickBooleanType MagickNegateImageChannel(MagickWand *wand,
    const ChannelType channel,const MagickBooleanType gray)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>gray</h5>
<p>If MagickTrue, only negate grayscale pixels within the image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickNewImage">MagickNewImage</a></h2>
<div class="doc-section">

<p>MagickNewImage() adds a blank image canvas of the specified size and background color to the wand.</p>

<p>The format of the MagickNewImage method is:</p>

<pre class="code">
  MagickBooleanType MagickNewImage(MagickWand *wand,
    const size_t columns,const size_t rows,
    const PixelWand *background)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the image width.</p>

<h5>height</h5>
<p>the image height.</p>

<h5>background</h5>
<p>the image color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickNextImage">MagickNextImage</a></h2>
<div class="doc-section">

<p>MagickNextImage() sets the next image in the wand as the current image.</p>

<p>It is typically used after MagickResetIterator(), after which its first use will set the first image as the current image (unless the wand is empty).</p>

<p>It will return MagickFalse when no more images are left to be returned which happens when the wand is empty, or the current image is the last image.</p>

<p>When the above condition (end of image list) is reached, the iterator is automaticall set so that you can start using MagickPreviousImage() to again iterate over the images in the reverse direction, starting with the last image (again).  You can jump to this condition immeditally using MagickSetLastIterator().</p>

<p>The format of the MagickNextImage method is:</p>

<pre class="code">
  MagickBooleanType MagickNextImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickNormalizeImage">MagickNormalizeImage</a></h2>
<div class="doc-section">

<p>MagickNormalizeImage() enhances the contrast of a color image by adjusting the pixels color to span the entire range of colors available</p>

<p>You can also reduce the influence of a particular channel with a gamma value of 0.</p>

<p>The format of the MagickNormalizeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickNormalizeImage(MagickWand *wand)
  MagickBooleanType MagickNormalizeImageChannel(MagickWand *wand,
    const ChannelType channel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickOilPaintImage">MagickOilPaintImage</a></h2>
<div class="doc-section">

<p>MagickOilPaintImage() applies a special effect filter that simulates an oil painting.  Each pixel is replaced by the most frequent color occurring in a circular region defined by radius.</p>

<p>The format of the MagickOilPaintImage method is:</p>

<pre class="code">
  MagickBooleanType MagickOilPaintImage(MagickWand *wand,
    const double radius)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>radius</h5>
<p>the radius of the circular neighborhood.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickOpaquePaintImage">MagickOpaquePaintImage</a></h2>
<div class="doc-section">

<p>MagickOpaquePaintImage() changes any pixel that matches color with the color defined by fill.</p>

<p>The format of the MagickOpaquePaintImage method is:</p>

<pre class="code">
  MagickBooleanType MagickOpaquePaintImage(MagickWand *wand,
    const PixelWand *target,const PixelWand *fill,const double fuzz,
    const MagickBooleanType invert)
  MagickBooleanType MagickOpaquePaintImageChannel(MagickWand *wand,
    const ChannelType channel,const PixelWand *target,
    const PixelWand *fill,const double fuzz,const MagickBooleanType invert)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the channel(s).</p>

<h5>target</h5>
<p>Change this target color to the fill color within the image.</p>

<h5>fill</h5>
<p>the fill pixel wand.</p>

<h5>fuzz</h5>
<p>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill.</p>

<h5>invert</h5>
<p>paint any pixel that does not match the target color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickOptimizeImageLayers">MagickOptimizeImageLayers</a></h2>
<div class="doc-section">

<p>MagickOptimizeImageLayers() compares each image the GIF disposed forms of the previous image in the sequence.  From this it attempts to select the smallest cropped image to replace each frame, while preserving the results of the animation.</p>

<p>The format of the MagickOptimizeImageLayers method is:</p>

<pre class="code">
  MagickWand *MagickOptimizeImageLayers(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickOptimizeImageTransparency">MagickOptimizeImageTransparency</a></h2>
<div class="doc-section">

<p>MagickOptimizeImageTransparency() takes a frame optimized GIF animation, and compares the overlayed pixels against the disposal image resulting from all the previous frames in the animation.  Any pixel that does not change the disposal image (and thus does not effect the outcome of an overlay) is made transparent.</p>

<p>WARNING: This modifies the current images directly, rather than generate a new image sequence. The format of the MagickOptimizeImageTransparency method is:</p>

<pre class="code">
  MagickBooleanType MagickOptimizeImageTransparency(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickOrderedPosterizeImage">MagickOrderedPosterizeImage</a></h2>
<div class="doc-section">

<p>MagickOrderedPosterizeImage() performs an ordered dither based on a number of pre-defined dithering threshold maps, but over multiple intensity levels, which can be different for different channels, according to the input arguments.</p>

<p>The format of the MagickOrderedPosterizeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickOrderedPosterizeImage(MagickWand *wand,
    const char *threshold_map)
  MagickBooleanType MagickOrderedPosterizeImageChannel(MagickWand *wand,
    const ChannelType channel,const char *threshold_map)
</pre>

<p>A description of each parameter follows:</p>

<h5>image</h5>
<p>the image.</p>

<h5>channel</h5>
<p>the channel or channels to be thresholded.</p>

<h5>threshold_map</h5>
<p>A string containing the name of the threshold dither map to use, followed by zero or more numbers representing the number of color levels tho dither between.</p>

<p>Any level number less than 2 is equivalent to 2, and means only binary dithering will be applied to each color channel.</p>

<p>No numbers also means a 2 level (bitmap) dither will be applied to all channels, while a single number is the number of levels applied to each channel in sequence.  More numbers will be applied in turn to each of the color channels.</p>

<p>For example: "o3x3,6" generates a 6 level posterization of the image with a ordered 3x3 diffused pixel dither being applied between each level. While checker,8,8,4 will produce a 332 colormaped image with only a single checkerboard hash pattern (50 grey) between each color level, to basically double the number of color levels with a bare minimim of dithering.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickPingImage">MagickPingImage</a></h2>
<div class="doc-section">

<p>MagickPingImage() is like MagickReadImage() except the only valid information returned is the image width, height, size, and format.  It is designed to efficiently obtain this information from a file without reading the entire image sequence into memory.</p>

<p>The format of the MagickPingImage method is:</p>

<pre class="code">
  MagickBooleanType MagickPingImage(MagickWand *wand,const char *filename)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>filename</h5>
<p>the image filename.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickPingImageBlob">MagickPingImageBlob</a></h2>
<div class="doc-section">

<p>MagickPingImageBlob() pings an image or image sequence from a blob.</p>

<p>The format of the MagickPingImageBlob method is:</p>

<pre class="code">
  MagickBooleanType MagickPingImageBlob(MagickWand *wand,
    const void *blob,const size_t length)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>blob</h5>
<p>the blob.</p>

<h5>length</h5>
<p>the blob length.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickPingImageFile">MagickPingImageFile</a></h2>
<div class="doc-section">

<p>MagickPingImageFile() pings an image or image sequence from an open file descriptor.</p>

<p>The format of the MagickPingImageFile method is:</p>

<pre class="code">
  MagickBooleanType MagickPingImageFile(MagickWand *wand,FILE *file)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>file</h5>
<p>the file descriptor.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickPolaroidImage">MagickPolaroidImage</a></h2>
<div class="doc-section">

<p>MagickPolaroidImage() simulates a Polaroid picture.</p>

<p>The format of the MagickPolaroidImage method is:</p>

<pre class="code">
  MagickBooleanType MagickPolaroidImage(MagickWand *wand,
    const DrawingWand *drawing_wand,const double angle)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>drawing_wand</h5>
<p>the draw wand.</p>

<h5>angle</h5>
<p>Apply the effect along this angle.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickPosterizeImage">MagickPosterizeImage</a></h2>
<div class="doc-section">

<p>MagickPosterizeImage() reduces the image to a limited number of color level.</p>

<p>The format of the MagickPosterizeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickPosterizeImage(MagickWand *wand,
    const size_t levels,const MagickBooleanType dither)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>levels</h5>
<p>Number of color levels allowed in each channel.  Very low values (2, 3, or 4) have the most visible effect.</p>

<h5>dither</h5>
<p>Set this integer value to something other than zero to dither the mapped image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickPreviewImages">MagickPreviewImages</a></h2>
<div class="doc-section">

<p>MagickPreviewImages() tiles 9 thumbnails of the specified image with an image processing operation applied at varying strengths.  This helpful to quickly pin-point an appropriate parameter for an image processing operation.</p>

<p>The format of the MagickPreviewImages method is:</p>

<pre class="code">
  MagickWand *MagickPreviewImages(MagickWand *wand,
    const PreviewType preview)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>preview</h5>
<p>the preview type.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickPreviousImage">MagickPreviousImage</a></h2>
<div class="doc-section">

<p>MagickPreviousImage() sets the previous image in the wand as the current image.</p>

<p>It is typically used after MagickSetLastIterator(), after which its first use will set the last image as the current image (unless the wand is empty).</p>

<p>It will return MagickFalse when no more images are left to be returned which happens when the wand is empty, or the current image is the first image.  At that point the iterator is than reset to again process images in the forward direction, again starting with the first image in list. Images added at this point are prepended.</p>

<p>Also at that point any images added to the wand using MagickAddImages() or MagickReadImages() will be prepended before the first image. In this sense the condition is not quite exactly the same as MagickResetIterator().</p>

<p>The format of the MagickPreviousImage method is:</p>

<pre class="code">
  MagickBooleanType MagickPreviousImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickQuantizeImage">MagickQuantizeImage</a></h2>
<div class="doc-section">

<p>MagickQuantizeImage() analyzes the colors within a reference image and chooses a fixed number of colors to represent the image.  The goal of the algorithm is to minimize the color difference between the input and output image while minimizing the processing time.</p>

<p>The format of the MagickQuantizeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickQuantizeImage(MagickWand *wand,
    const size_t number_colors,const ColorspaceType colorspace,
    const size_t treedepth,const MagickBooleanType dither,
    const MagickBooleanType measure_error)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>number_colors</h5>
<p>the number of colors.</p>

<h5>colorspace</h5>
<p>Perform color reduction in this colorspace, typically RGBColorspace.</p>

<h5>treedepth</h5>
<p>Normally, this integer value is zero or one.  A zero or one tells Quantize to choose a optimal tree depth of Log4(number_colors).      A tree of this depth generally allows the best representation of the reference image with the least amount of memory and the fastest computational speed.  In some cases, such as an image with low color dispersion (a few number of colors), a value other than Log4(number_colors) is required.  To expand the color tree completely, use a value of 8.</p>

<h5>dither</h5>
<p>A value other than zero distributes the difference between an original image and the corresponding color reduced image to neighboring pixels along a Hilbert curve.</p>

<h5>measure_error</h5>
<p>A value other than zero measures the difference between the original and quantized images.  This difference is the total quantization error.  The error is computed by summing over all pixels in an image the distance squared in RGB space between each reference pixel value and its quantized value.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickQuantizeImages">MagickQuantizeImages</a></h2>
<div class="doc-section">

<p>MagickQuantizeImages() analyzes the colors within a sequence of images and chooses a fixed number of colors to represent the image.  The goal of the algorithm is to minimize the color difference between the input and output image while minimizing the processing time.</p>

<p>The format of the MagickQuantizeImages method is:</p>

<pre class="code">
  MagickBooleanType MagickQuantizeImages(MagickWand *wand,
    const size_t number_colors,const ColorspaceType colorspace,
    const size_t treedepth,const MagickBooleanType dither,
    const MagickBooleanType measure_error)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>number_colors</h5>
<p>the number of colors.</p>

<h5>colorspace</h5>
<p>Perform color reduction in this colorspace, typically RGBColorspace.</p>

<h5>treedepth</h5>
<p>Normally, this integer value is zero or one.  A zero or one tells Quantize to choose a optimal tree depth of Log4(number_colors).      A tree of this depth generally allows the best representation of the reference image with the least amount of memory and the fastest computational speed.  In some cases, such as an image with low color dispersion (a few number of colors), a value other than Log4(number_colors) is required.  To expand the color tree completely, use a value of 8.</p>

<h5>dither</h5>
<p>A value other than zero distributes the difference between an original image and the corresponding color reduced algorithm to neighboring pixels along a Hilbert curve.</p>

<h5>measure_error</h5>
<p>A value other than zero measures the difference between the original and quantized images.  This difference is the total quantization error.  The error is computed by summing over all pixels in an image the distance squared in RGB space between each reference pixel value and its quantized value.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickRadialBlurImage">MagickRadialBlurImage</a></h2>
<div class="doc-section">

<p>MagickRadialBlurImage() radial blurs an image.</p>

<p>The format of the MagickRadialBlurImage method is:</p>

<pre class="code">
  MagickBooleanType MagickRadialBlurImage(MagickWand *wand,
    const double angle)
  MagickBooleanType MagickRadialBlurImageChannel(MagickWand *wand,
    const ChannelType channel,const double angle)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>angle</h5>
<p>the angle of the blur in degrees.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickRaiseImage">MagickRaiseImage</a></h2>
<div class="doc-section">

<p>MagickRaiseImage() creates a simulated three-dimensional button-like effect by lightening and darkening the edges of the image.  Members width and height of raise_info define the width of the vertical and horizontal edge of the effect.</p>

<p>The format of the MagickRaiseImage method is:</p>

<pre class="code">
  MagickBooleanType MagickRaiseImage(MagickWand *wand,
    const size_t width,const size_t height,const ssize_t x,
    const ssize_t y,const MagickBooleanType raise)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width,height,x,y</h5>
<p>Define the dimensions of the area to raise.</p>

<h5>raise</h5>
<p>A value other than zero creates a 3-D raise effect, otherwise it has a lowered effect.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickRandomThresholdImage">MagickRandomThresholdImage</a></h2>
<div class="doc-section">

<p>MagickRandomThresholdImage() changes the value of individual pixels based on the intensity of each pixel compared to threshold.  The result is a high-contrast, two color image.</p>

<p>The format of the MagickRandomThresholdImage method is:</p>

<pre class="code">
  MagickBooleanType MagickRandomThresholdImage(MagickWand *wand,
    const double low,const double high)
  MagickBooleanType MagickRandomThresholdImageChannel(MagickWand *wand,
    const ChannelType channel,const double low,const double high)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>low,high</h5>
<p>Specify the high and low thresholds.  These values range from 0 to QuantumRange.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickReadImage">MagickReadImage</a></h2>
<div class="doc-section">

<p>MagickReadImage() reads an image or image sequence.  The images are inserted at the current image pointer position.   Use MagickSetFirstIterator(), MagickSetLastIterator, or MagickSetImageIndex() to specify the current image pointer position at the beginning of the image list, the end, or anywhere in-between respectively.</p>

<p>The format of the MagickReadImage method is:</p>

<pre class="code">
  MagickBooleanType MagickReadImage(MagickWand *wand,const char *filename)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>filename</h5>
<p>the image filename.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickReadImageBlob">MagickReadImageBlob</a></h2>
<div class="doc-section">

<p>MagickReadImageBlob() reads an image or image sequence from a blob.</p>

<p>The format of the MagickReadImageBlob method is:</p>

<pre class="code">
  MagickBooleanType MagickReadImageBlob(MagickWand *wand,
    const void *blob,const size_t length)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>blob</h5>
<p>the blob.</p>

<h5>length</h5>
<p>the blob length.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickReadImageFile">MagickReadImageFile</a></h2>
<div class="doc-section">

<p>MagickReadImageFile() reads an image or image sequence from an open file descriptor.</p>

<p>The format of the MagickReadImageFile method is:</p>

<pre class="code">
  MagickBooleanType MagickReadImageFile(MagickWand *wand,FILE *file)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>file</h5>
<p>the file descriptor.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickRemapImage">MagickRemapImage</a></h2>
<div class="doc-section">

<p>MagickRemapImage() replaces the colors of an image with the closest color from a reference image.</p>

<p>The format of the MagickRemapImage method is:</p>

<pre class="code">
  MagickBooleanType MagickRemapImage(MagickWand *wand,
    const MagickWand *remap_wand,const DitherMethod method)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>affinity</h5>
<p>the affinity wand.</p>

<h5>method</h5>
<p>choose from these dither methods: NoDitherMethod, RiemersmaDitherMethod, or FloydSteinbergDitherMethod.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickRemoveImage">MagickRemoveImage</a></h2>
<div class="doc-section">

<p>MagickRemoveImage() removes an image from the image list.</p>

<p>The format of the MagickRemoveImage method is:</p>

<pre class="code">
  MagickBooleanType MagickRemoveImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>insert</h5>
<p>the splice wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickResampleImage">MagickResampleImage</a></h2>
<div class="doc-section">

<p>MagickResampleImage() resample image to desired resolution.</p>

<p>Bessel   Blackman   Box Catrom   Cubic      Gaussian Hanning  Hermite    Lanczos Mitchell Point      Quandratic Sinc     Triangle</p>

<p>Most of the filters are FIR (finite impulse response), however, Bessel, Gaussian, and Sinc are IIR (infinite impulse response).  Bessel and Sinc are windowed (brought down to zero) with the Blackman filter.</p>

<p>The format of the MagickResampleImage method is:</p>

<pre class="code">
  MagickBooleanType MagickResampleImage(MagickWand *wand,
    const double x_resolution,const double y_resolution,
    const FilterTypes filter,const double blur)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x_resolution</h5>
<p>the new image x resolution.</p>

<h5>y_resolution</h5>
<p>the new image y resolution.</p>

<h5>filter</h5>
<p>Image filter to use.</p>

<h5>blur</h5>
<p>the blur factor where > 1 is blurry, < 1 is sharp.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickResetImagePage">MagickResetImagePage</a></h2>
<div class="doc-section">

<p>MagickResetImagePage() resets the Wand page canvas and position.</p>

<p>The format of the MagickResetImagePage method is:</p>

<pre class="code">
  MagickBooleanType MagickResetImagePage(MagickWand *wand,
    const char *page)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>page</h5>
<p>the relative page specification.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickResizeImage">MagickResizeImage</a></h2>
<div class="doc-section">

<p>MagickResizeImage() scales an image to the desired dimensions with one of these filters:</p>

<pre class="text">
      Bessel   Blackman   Box
      Catrom   CubicGaussian
      Hanning  Hermite    Lanczos
      Mitchell PointQuandratic
      Sinc     Triangle
</pre>

<p>Most of the filters are FIR (finite impulse response), however, Bessel, Gaussian, and Sinc are IIR (infinite impulse response).  Bessel and Sinc are windowed (brought down to zero) with the Blackman filter.</p>

<p>The format of the MagickResizeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickResizeImage(MagickWand *wand,
    const size_t columns,const size_t rows,
    const FilterTypes filter,const double blur)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>the number of columns in the scaled image.</p>

<h5>rows</h5>
<p>the number of rows in the scaled image.</p>

<h5>filter</h5>
<p>Image filter to use.</p>

<h5>blur</h5>
<p>the blur factor where > 1 is blurry, < 1 is sharp.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickRollImage">MagickRollImage</a></h2>
<div class="doc-section">

<p>MagickRollImage() offsets an image as defined by x and y.</p>

<p>The format of the MagickRollImage method is:</p>

<pre class="code">
  MagickBooleanType MagickRollImage(MagickWand *wand,const ssize_t x,
    const size_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the x offset.</p>

<h5>y</h5>
<p>the y offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickRotateImage">MagickRotateImage</a></h2>
<div class="doc-section">

<p>MagickRotateImage() rotates an image the specified number of degrees. Empty triangles left over from rotating the image are filled with the background color.</p>

<p>The format of the MagickRotateImage method is:</p>

<pre class="code">
  MagickBooleanType MagickRotateImage(MagickWand *wand,
    const PixelWand *background,const double degrees)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>background</h5>
<p>the background pixel wand.</p>

<h5>degrees</h5>
<p>the number of degrees to rotate the image.</p>


 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSampleImage">MagickSampleImage</a></h2>
<div class="doc-section">

<p>MagickSampleImage() scales an image to the desired dimensions with pixel sampling.  Unlike other scaling methods, this method does not introduce any additional color into the scaled image.</p>

<p>The format of the MagickSampleImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSampleImage(MagickWand *wand,
    const size_t columns,const size_t rows)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>the number of columns in the scaled image.</p>

<h5>rows</h5>
<p>the number of rows in the scaled image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickScaleImage">MagickScaleImage</a></h2>
<div class="doc-section">

<p>MagickScaleImage() scales the size of an image to the given dimensions.</p>

<p>The format of the MagickScaleImage method is:</p>

<pre class="code">
  MagickBooleanType MagickScaleImage(MagickWand *wand,
    const size_t columns,const size_t rows)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>the number of columns in the scaled image.</p>

<h5>rows</h5>
<p>the number of rows in the scaled image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSegmentImage">MagickSegmentImage</a></h2>
<div class="doc-section">

<p>MagickSegmentImage() segments an image by analyzing the histograms of the color components and identifying units that are homogeneous with the fuzzy C-means technique.</p>

<p>The format of the SegmentImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSegmentImage(MagickWand *wand,
    const ColorspaceType colorspace,const MagickBooleanType verbose,
    const double cluster_threshold,const double smooth_threshold)
</pre>

<p>A description of each parameter follows.</p>

<h5>wand</h5>
<p>the wand.</p>

<h5>colorspace</h5>
<p>the image colorspace.</p>

<h5>verbose</h5>
<p>Set to MagickTrue to print detailed information about the identified classes.</p>

<h5>cluster_threshold</h5>
<p>This represents the minimum number of pixels contained in a hexahedra before it can be considered valid (expressed as a percentage).</p>

<h5>smooth_threshold</h5>
<p>the smoothing threshold eliminates noise in the second derivative of the histogram.  As the value is increased, you can expect a smoother second derivative.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSelectiveBlurImage">MagickSelectiveBlurImage</a></h2>
<div class="doc-section">

<p>MagickSelectiveBlurImage() selectively blur an image within a contrast threshold. It is similar to the unsharpen mask that sharpens everything with contrast above a certain threshold.</p>

<p>The format of the MagickSelectiveBlurImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSelectiveBlurImage(MagickWand *wand,
    const double radius,const double sigma,const double threshold)
  MagickBooleanType MagickSelectiveBlurImageChannel(MagickWand *wand,
    const ChannelType channel,const double radius,const double sigma,
    const double threshold)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>radius</h5>
<p>the radius of the gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the gaussian, in pixels.</p>

<h5>threshold</h5>
<p>only pixels within this contrast threshold are included in the blur operation.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSeparateImageChannel">MagickSeparateImageChannel</a></h2>
<div class="doc-section">

<p>MagickSeparateImageChannel() separates a channel from the image and returns a grayscale image.  A channel is a particular color component of each pixel in the image.</p>

<p>The format of the MagickSeparateImageChannel method is:</p>

<pre class="code">
  MagickBooleanType MagickSeparateImageChannel(MagickWand *wand,
    const ChannelType channel)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSepiaToneImage">MagickSepiaToneImage</a></h2>
<div class="doc-section">

<p>MagickSepiaToneImage() applies a special effect to the image, similar to the effect achieved in a photo darkroom by sepia toning.  Threshold ranges from 0 to QuantumRange and is a measure of the extent of the sepia toning.  A threshold of 80 is a good starting point for a reasonable tone.</p>

<p>The format of the MagickSepiaToneImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSepiaToneImage(MagickWand *wand,
    const double threshold)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>threshold</h5>
<p>Define the extent of the sepia toning.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImage">MagickSetImage</a></h2>
<div class="doc-section">

<p>MagickSetImage() replaces the last image returned by MagickSetImageIndex(), MagickNextImage(), MagickPreviousImage() with the images from the specified wand.</p>

<p>The format of the MagickSetImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImage(MagickWand *wand,
    const MagickWand *set_wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>set_wand</h5>
<p>the set_wand wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageAlphaChannel">MagickSetImageAlphaChannel</a></h2>
<div class="doc-section">

<p>MagickSetImageAlphaChannel() activates, deactivates, resets, or sets the alpha channel.</p>

<p>The format of the MagickSetImageAlphaChannel method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageAlphaChannel(MagickWand *wand,
    const AlphaChannelType alpha_type)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>alpha_type</h5>
<p>the alpha channel type: ActivateAlphaChannel, DeactivateAlphaChannel, OpaqueAlphaChannel, or SetAlphaChannel.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageBackgroundColor">MagickSetImageBackgroundColor</a></h2>
<div class="doc-section">

<p>MagickSetImageBackgroundColor() sets the image background color.</p>

<p>The format of the MagickSetImageBackgroundColor method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageBackgroundColor(MagickWand *wand,
    const PixelWand *background)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>background</h5>
<p>the background pixel wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageBias">MagickSetImageBias</a></h2>
<div class="doc-section">

<p>MagickSetImageBias() sets the image bias for any method that convolves an image (e.g. MagickConvolveImage()).</p>

<p>The format of the MagickSetImageBias method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageBias(MagickWand *wand,
    const double bias)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>bias</h5>
<p>the image bias.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageBluePrimary">MagickSetImageBluePrimary</a></h2>
<div class="doc-section">

<p>MagickSetImageBluePrimary() sets the image chromaticity blue primary point.</p>

<p>The format of the MagickSetImageBluePrimary method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageBluePrimary(MagickWand *wand,
    const double x,const double y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the blue primary x-point.</p>

<h5>y</h5>
<p>the blue primary y-point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageBorderColor">MagickSetImageBorderColor</a></h2>
<div class="doc-section">

<p>MagickSetImageBorderColor() sets the image border color.</p>

<p>The format of the MagickSetImageBorderColor method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageBorderColor(MagickWand *wand,
    const PixelWand *border)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>border</h5>
<p>the border pixel wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageChannelDepth">MagickSetImageChannelDepth</a></h2>
<div class="doc-section">

<p>MagickSetImageChannelDepth() sets the depth of a particular image channel.</p>

<p>The format of the MagickSetImageChannelDepth method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageChannelDepth(MagickWand *wand,
    const ChannelType channel,const size_t depth)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>depth</h5>
<p>the image depth in bits.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageClipMask">MagickSetImageClipMask</a></h2>
<div class="doc-section">

<p>MagickSetImageClipMask() sets image clip mask.</p>

<p>The format of the MagickSetImageClipMask method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageClipMask(MagickWand *wand,
    const MagickWand *clip_mask)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>clip_mask</h5>
<p>the clip_mask wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageColor">MagickSetImageColor</a></h2>
<div class="doc-section">

<p>MagickSetImageColor() set the entire wand canvas to the specified color.</p>

<p>The format of the MagickSetImageColor method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageColor(MagickWand *wand,
    const PixelWand *color)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>background</h5>
<p>the image color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageColormapColor">MagickSetImageColormapColor</a></h2>
<div class="doc-section">

<p>MagickSetImageColormapColor() sets the color of the specified colormap index.</p>

<p>The format of the MagickSetImageColormapColor method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageColormapColor(MagickWand *wand,
    const size_t index,const PixelWand *color)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>index</h5>
<p>the offset into the image colormap.</p>

<h5>color</h5>
<p>Return the colormap color in this wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageColorspace">MagickSetImageColorspace</a></h2>
<div class="doc-section">

<p>MagickSetImageColorspace() sets the image colorspace.</p>

<p>The format of the MagickSetImageColorspace method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageColorspace(MagickWand *wand,
    const ColorspaceType colorspace)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>colorspace</h5>
<p>the image colorspace:   UndefinedColorspace, RGBColorspace, GRAYColorspace, TransparentColorspace, OHTAColorspace, XYZColorspace, YCbCrColorspace, YCCColorspace, YIQColorspace, YPbPrColorspace, YPbPrColorspace, YUVColorspace, CMYKColorspace, sRGBColorspace, HSLColorspace, or HWBColorspace.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageCompose">MagickSetImageCompose</a></h2>
<div class="doc-section">

<p>MagickSetImageCompose() sets the image composite operator, useful for specifying how to composite the image thumbnail when using the MagickMontageImage() method.</p>

<p>The format of the MagickSetImageCompose method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageCompose(MagickWand *wand,
    const CompositeOperator compose)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>compose</h5>
<p>the image composite operator.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageCompression">MagickSetImageCompression</a></h2>
<div class="doc-section">

<p>MagickSetImageCompression() sets the image compression.</p>

<p>The format of the MagickSetImageCompression method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageCompression(MagickWand *wand,
    const CompressionType compression)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>compression</h5>
<p>the image compression type.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageCompressionQuality">MagickSetImageCompressionQuality</a></h2>
<div class="doc-section">

<p>MagickSetImageCompressionQuality() sets the image compression quality.</p>

<p>The format of the MagickSetImageCompressionQuality method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageCompressionQuality(MagickWand *wand,
    const size_t quality)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>quality</h5>
<p>the image compression tlityype.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageDelay">MagickSetImageDelay</a></h2>
<div class="doc-section">

<p>MagickSetImageDelay() sets the image delay.</p>

<p>The format of the MagickSetImageDelay method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageDelay(MagickWand *wand,
    const size_t delay)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>delay</h5>
<p>the image delay in ticks-per-second units.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageDepth">MagickSetImageDepth</a></h2>
<div class="doc-section">

<p>MagickSetImageDepth() sets the image depth.</p>

<p>The format of the MagickSetImageDepth method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageDepth(MagickWand *wand,
    const size_t depth)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>depth</h5>
<p>the image depth in bits: 8, 16, or 32.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageDispose">MagickSetImageDispose</a></h2>
<div class="doc-section">

<p>MagickSetImageDispose() sets the image disposal method.</p>

<p>The format of the MagickSetImageDispose method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageDispose(MagickWand *wand,
    const DisposeType dispose)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>dispose</h5>
<p>the image disposeal type.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageEndian">MagickSetImageEndian</a></h2>
<div class="doc-section">

<p>MagickSetImageEndian() sets the image endian method.</p>

<p>The format of the MagickSetImageEndian method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageEndian(MagickWand *wand,
    const EndianType endian)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>endian</h5>
<p>the image endian type.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageExtent">MagickSetImageExtent</a></h2>
<div class="doc-section">

<p>MagickSetImageExtent() sets the image size (i.e. columns & rows).</p>

<p>The format of the MagickSetImageExtent method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageExtent(MagickWand *wand,
    const size_t columns,const unsigned rows)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>The image width in pixels.</p>

<h5>rows</h5>
<p>The image height in pixels.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageFilename">MagickSetImageFilename</a></h2>
<div class="doc-section">

<p>MagickSetImageFilename() sets the filename of a particular image in a sequence.</p>

<p>The format of the MagickSetImageFilename method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageFilename(MagickWand *wand,
    const char *filename)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>filename</h5>
<p>the image filename.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageFormat">MagickSetImageFormat</a></h2>
<div class="doc-section">

<p>MagickSetImageFormat() sets the format of a particular image in a sequence.</p>

<p>The format of the MagickSetImageFormat method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageFormat(MagickWand *wand,
    const char *format)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>format</h5>
<p>the image format.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageFuzz">MagickSetImageFuzz</a></h2>
<div class="doc-section">

<p>MagickSetImageFuzz() sets the image fuzz.</p>

<p>The format of the MagickSetImageFuzz method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageFuzz(MagickWand *wand,
    const double fuzz)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>fuzz</h5>
<p>the image fuzz.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageGamma">MagickSetImageGamma</a></h2>
<div class="doc-section">

<p>MagickSetImageGamma() sets the image gamma.</p>

<p>The format of the MagickSetImageGamma method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageGamma(MagickWand *wand,
    const double gamma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>gamma</h5>
<p>the image gamma.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageGravity">MagickSetImageGravity</a></h2>
<div class="doc-section">

<p>MagickSetImageGravity() sets the image gravity type.</p>

<p>The format of the MagickSetImageGravity method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageGravity(MagickWand *wand,
    const GravityType gravity)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>gravity</h5>
<p>the image interlace scheme: NoInterlace, LineInterlace, PlaneInterlace, PartitionInterlace.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageGreenPrimary">MagickSetImageGreenPrimary</a></h2>
<div class="doc-section">

<p>MagickSetImageGreenPrimary() sets the image chromaticity green primary point.</p>

<p>The format of the MagickSetImageGreenPrimary method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageGreenPrimary(MagickWand *wand,
    const double x,const double y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the green primary x-point.</p>

<h5>y</h5>
<p>the green primary y-point.</p>


 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageInterlaceScheme">MagickSetImageInterlaceScheme</a></h2>
<div class="doc-section">

<p>MagickSetImageInterlaceScheme() sets the image interlace scheme.</p>

<p>The format of the MagickSetImageInterlaceScheme method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageInterlaceScheme(MagickWand *wand,
    const InterlaceType interlace)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>interlace</h5>
<p>the image interlace scheme: NoInterlace, LineInterlace, PlaneInterlace, PartitionInterlace.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageInterpolateMethod">MagickSetImageInterpolateMethod</a></h2>
<div class="doc-section">

<p>MagickSetImageInterpolateMethod() sets the image interpolate pixel method.</p>

<p>The format of the MagickSetImageInterpolateMethod method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageInterpolateMethod(MagickWand *wand,
    const InterpolatePixelMethod method)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>method</h5>
<p>the image interpole pixel methods: choose from Undefined, Average, Bicubic, Bilinear, Filter, Integer, Mesh, NearestNeighbor.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageIterations">MagickSetImageIterations</a></h2>
<div class="doc-section">

<p>MagickSetImageIterations() sets the image iterations.</p>

<p>The format of the MagickSetImageIterations method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageIterations(MagickWand *wand,
    const size_t iterations)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>delay</h5>
<p>the image delay in 1/100th of a second.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageMatte">MagickSetImageMatte</a></h2>
<div class="doc-section">

<p>MagickSetImageMatte() sets the image matte channel.</p>

<p>The format of the MagickSetImageMatteColor method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageMatteColor(MagickWand *wand,
    const MagickBooleanType *matte)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>matte</h5>
<p>Set to MagickTrue to enable the image matte channel otherwise MagickFalse.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageMatteColor">MagickSetImageMatteColor</a></h2>
<div class="doc-section">

<p>MagickSetImageMatteColor() sets the image matte color.</p>

<p>The format of the MagickSetImageMatteColor method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageMatteColor(MagickWand *wand,
    const PixelWand *matte)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>matte</h5>
<p>the matte pixel wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageOpacity">MagickSetImageOpacity</a></h2>
<div class="doc-section">

<p>MagickSetImageOpacity() sets the image to the specified opacity level.</p>

<p>The format of the MagickSetImageOpacity method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageOpacity(MagickWand *wand,
    const double alpha)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>alpha</h5>
<p>the level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageOrientation">MagickSetImageOrientation</a></h2>
<div class="doc-section">

<p>MagickSetImageOrientation() sets the image orientation.</p>

<p>The format of the MagickSetImageOrientation method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageOrientation(MagickWand *wand,
    const OrientationType orientation)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>orientation</h5>
<p>the image orientation type.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImagePage">MagickSetImagePage</a></h2>
<div class="doc-section">

<p>MagickSetImagePage() sets the page geometry of the image.</p>

<p>The format of the MagickSetImagePage method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImagePage(MagickWand *wand,
    const size_t width,const size_t height,const ssize_t x,
    const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the page width.</p>

<h5>height</h5>
<p>the page height.</p>

<h5>x</h5>
<p>the page x-offset.</p>

<h5>y</h5>
<p>the page y-offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageProgressMonitor">MagickSetImageProgressMonitor</a></h2>
<div class="doc-section">

<p>MagickSetImageProgressMonitor() sets the wand image progress monitor to the specified method and returns the previous progress monitor if any.  The progress monitor method looks like this:</p>

<pre class="text">
      MagickBooleanType MagickProgressMonitor(const char *text,
  const MagickOffsetType offset,const MagickSizeType span,
  void *client_data)
</pre>

<p>If the progress monitor returns MagickFalse, the current operation is interrupted.</p>

<p>The format of the MagickSetImageProgressMonitor method is:</p>

<pre class="code">
  MagickProgressMonitor MagickSetImageProgressMonitor(MagickWand *wand
    const MagickProgressMonitor progress_monitor,void *client_data)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>progress_monitor</h5>
<p>Specifies a pointer to a method to monitor progress of an image operation.</p>

<h5>client_data</h5>
<p>Specifies a pointer to any client data.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageRedPrimary">MagickSetImageRedPrimary</a></h2>
<div class="doc-section">

<p>MagickSetImageRedPrimary() sets the image chromaticity red primary point.</p>

<p>The format of the MagickSetImageRedPrimary method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageRedPrimary(MagickWand *wand,
    const double x,const double y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the red primary x-point.</p>

<h5>y</h5>
<p>the red primary y-point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageRenderingIntent">MagickSetImageRenderingIntent</a></h2>
<div class="doc-section">

<p>MagickSetImageRenderingIntent() sets the image rendering intent.</p>

<p>The format of the MagickSetImageRenderingIntent method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageRenderingIntent(MagickWand *wand,
    const RenderingIntent rendering_intent)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>rendering_intent</h5>
<p>the image rendering intent: UndefinedIntent, SaturationIntent, PerceptualIntent, AbsoluteIntent, or RelativeIntent.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageResolution">MagickSetImageResolution</a></h2>
<div class="doc-section">

<p>MagickSetImageResolution() sets the image resolution.</p>

<p>The format of the MagickSetImageResolution method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageResolution(MagickWand *wand,
    const double x_resolution,const double y_resolution)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x_resolution</h5>
<p>the image x resolution.</p>

<h5>y_resolution</h5>
<p>the image y resolution.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageScene">MagickSetImageScene</a></h2>
<div class="doc-section">

<p>MagickSetImageScene() sets the image scene.</p>

<p>The format of the MagickSetImageScene method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageScene(MagickWand *wand,
    const size_t scene)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>delay</h5>
<p>the image scene number.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageTicksPerSecond">MagickSetImageTicksPerSecond</a></h2>
<div class="doc-section">

<p>MagickSetImageTicksPerSecond() sets the image ticks-per-second.</p>

<p>The format of the MagickSetImageTicksPerSecond method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageTicksPerSecond(MagickWand *wand,
    const ssize_t ticks_per-second)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>ticks_per_second</h5>
<p>the units to use for the image delay.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageType">MagickSetImageType</a></h2>
<div class="doc-section">

<p>MagickSetImageType() sets the image type.</p>

<p>The format of the MagickSetImageType method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageType(MagickWand *wand,
    const ImageType image_type)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>image_type</h5>
<p>the image type:   UndefinedType, BilevelType, GrayscaleType, GrayscaleMatteType, PaletteType, PaletteMatteType, TrueColorType, TrueColorMatteType, ColorSeparationType, ColorSeparationMatteType, or OptimizeType.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageUnits">MagickSetImageUnits</a></h2>
<div class="doc-section">

<p>MagickSetImageUnits() sets the image units of resolution.</p>

<p>The format of the MagickSetImageUnits method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageUnits(MagickWand *wand,
    const ResolutionType units)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>units</h5>
<p>the image units of resolution : UndefinedResolution, PixelsPerInchResolution, or PixelsPerCentimeterResolution.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageVirtualPixelMethod">MagickSetImageVirtualPixelMethod</a></h2>
<div class="doc-section">

<p>MagickSetImageVirtualPixelMethod() sets the image virtual pixel method.</p>

<p>The format of the MagickSetImageVirtualPixelMethod method is:</p>

<pre class="code">
  VirtualPixelMethod MagickSetImageVirtualPixelMethod(MagickWand *wand,
    const VirtualPixelMethod method)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>method</h5>
<p>the image virtual pixel method : UndefinedVirtualPixelMethod, ConstantVirtualPixelMethod,  EdgeVirtualPixelMethod, MirrorVirtualPixelMethod, or TileVirtualPixelMethod.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSetImageWhitePoint">MagickSetImageWhitePoint</a></h2>
<div class="doc-section">

<p>MagickSetImageWhitePoint() sets the image chromaticity white point.</p>

<p>The format of the MagickSetImageWhitePoint method is:</p>

<pre class="code">
  MagickBooleanType MagickSetImageWhitePoint(MagickWand *wand,
    const double x,const double y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>x</h5>
<p>the white x-point.</p>

<h5>y</h5>
<p>the white y-point.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickShadeImage">MagickShadeImage</a></h2>
<div class="doc-section">

<p>MagickShadeImage() shines a distant light on an image to create a three-dimensional effect. You control the positioning of the light with azimuth and elevation; azimuth is measured in degrees off the x axis and elevation is measured in pixels above the Z axis.</p>

<p>The format of the MagickShadeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickShadeImage(MagickWand *wand,
    const MagickBooleanType gray,const double azimuth,
    const double elevation)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>gray</h5>
<p>A value other than zero shades the intensity of each pixel.</p>

<h5>azimuth, elevation</h5>
<p>Define the light source direction.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickShadowImage">MagickShadowImage</a></h2>
<div class="doc-section">

<p>MagickShadowImage() simulates an image shadow.</p>

<p>The format of the MagickShadowImage method is:</p>

<pre class="code">
  MagickBooleanType MagickShadowImage(MagickWand *wand,
    const double opacity,const double sigma,const ssize_t x,const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>opacity</h5>
<p>percentage transparency.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

<h5>x</h5>
<p>the shadow x-offset.</p>

<h5>y</h5>
<p>the shadow y-offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSharpenImage">MagickSharpenImage</a></h2>
<div class="doc-section">

<p>MagickSharpenImage() sharpens an image.  We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, the radius should be larger than sigma.  Use a radius of 0 and MagickSharpenImage() selects a suitable radius for you.</p>

<p>The format of the MagickSharpenImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSharpenImage(MagickWand *wand,
    const double radius,const double sigma)
  MagickBooleanType MagickSharpenImageChannel(MagickWand *wand,
    const ChannelType channel,const double radius,const double sigma)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickShaveImage">MagickShaveImage</a></h2>
<div class="doc-section">

<p>MagickShaveImage() shaves pixels from the image edges.  It allocates the memory necessary for the new Image structure and returns a pointer to the new image.</p>

<p>The format of the MagickShaveImage method is:</p>

<pre class="code">
  MagickBooleanType MagickShaveImage(MagickWand *wand,
    const size_t columns,const size_t rows)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>the number of columns in the scaled image.</p>

<h5>rows</h5>
<p>the number of rows in the scaled image.</p>


 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickShearImage">MagickShearImage</a></h2>
<div class="doc-section">

<p>MagickShearImage() slides one edge of an image along the X or Y axis, creating a parallelogram.  An X direction shear slides an edge along the X axis, while a Y direction shear slides an edge along the Y axis.  The amount of the shear is controlled by a shear angle.  For X direction shears, x_shear is measured relative to the Y axis, and similarly, for Y direction shears y_shear is measured relative to the X axis.  Empty triangles left over from shearing the image are filled with the background color.</p>

<p>The format of the MagickShearImage method is:</p>

<pre class="code">
  MagickBooleanType MagickShearImage(MagickWand *wand,
    const PixelWand *background,const double x_shear,const double y_shear)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>background</h5>
<p>the background pixel wand.</p>

<h5>x_shear</h5>
<p>the number of degrees to shear the image.</p>

<h5>y_shear</h5>
<p>the number of degrees to shear the image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSigmoidalContrastImage">MagickSigmoidalContrastImage</a></h2>
<div class="doc-section">

<p>MagickSigmoidalContrastImage() adjusts the contrast of an image with a non-linear sigmoidal contrast algorithm.  Increase the contrast of the image using a sigmoidal transfer function without saturating highlights or shadows.  Contrast indicates how much to increase the contrast (0 is none; 3 is typical; 20 is pushing it); mid-point indicates where midtones fall in the resultant image (0 is white; 50 is middle-gray; 100 is black).  Set sharpen to MagickTrue to increase the image contrast otherwise the contrast is reduced.</p>

<p>The format of the MagickSigmoidalContrastImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSigmoidalContrastImage(MagickWand *wand,
    const MagickBooleanType sharpen,const double alpha,const double beta)
  MagickBooleanType MagickSigmoidalContrastImageChannel(MagickWand *wand,
    const ChannelType channel,const MagickBooleanType sharpen,
    const double alpha,const double beta)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>Identify which channel to level: RedChannel, GreenChannel,</p>

<h5>sharpen</h5>
<p>Increase or decrease image contrast.</p>

<h5>alpha</h5>
<p>strength of the contrast, the larger the number the more 'threshold-like' it becomes.</p>

<h5>beta</h5>
<p>midpoint of the function as a color value 0 to QuantumRange.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSimilarityImage">MagickSimilarityImage</a></h2>
<div class="doc-section">

<p>MagickSimilarityImage() compares the reference image of the image and returns the best match offset.  In addition, it returns a similarity image such that an exact match location is completely white and if none of the pixels match, black, otherwise some gray level in-between.</p>

<p>The format of the MagickSimilarityImage method is:</p>

<pre class="code">
  MagickWand *MagickSimilarityImage(MagickWand *wand,
    const MagickWand *reference,RectangeInfo *offset,double *similarity)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>reference</h5>
<p>the reference wand.</p>

<h5>offset</h5>
<p>the best match offset of the reference image within the image.</p>

<h5>similarity</h5>
<p>the computed similarity between the images.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSketchImage">MagickSketchImage</a></h2>
<div class="doc-section">

<p>MagickSketchImage() simulates a pencil sketch.  We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma.  Use a radius of 0 and SketchImage() selects a suitable radius for you. Angle gives the angle of the blurring motion.</p>

<p>The format of the MagickSketchImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSketchImage(MagickWand *wand,
    const double radius,const double sigma,const double angle)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

<h5>angle</h5>
<p>Apply the effect along this angle.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSmushImages">MagickSmushImages</a></h2>
<div class="doc-section">

<p>MagickSmushImages() takes all images from the current image pointer to the end of the image list and smushs them to each other top-to-bottom if the stack parameter is true, otherwise left-to-right.</p>

<p>The format of the MagickSmushImages method is:</p>

<pre class="code">
  MagickWand *MagickSmushImages(MagickWand *wand,
    const MagickBooleanType stack,const ssize_t offset)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>stack</h5>
<p>By default, images are stacked left-to-right. Set stack to MagickTrue to stack them top-to-bottom.</p>

<h5>offset</h5>
<p>minimum distance in pixels between images.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSolarizeImage">MagickSolarizeImage</a></h2>
<div class="doc-section">

<p>MagickSolarizeImage() applies a special effect to the image, similar to the effect achieved in a photo darkroom by selectively exposing areas of photo sensitive paper to light.  Threshold ranges from 0 to QuantumRange and is a measure of the extent of the solarization.</p>

<p>The format of the MagickSolarizeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSolarizeImage(MagickWand *wand,
    const double threshold)
  MagickBooleanType MagickSolarizeImageChannel(MagickWand *wand,
    const ChannelType channel,const double threshold)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>threshold</h5>
<p>Define the extent of the solarization.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSparseColorImage">MagickSparseColorImage</a></h2>
<div class="doc-section">

<p>MagickSparseColorImage(), given a set of coordinates, interpolates the colors found at those coordinates, across the whole image, using various methods.</p>

<p>The format of the MagickSparseColorImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSparseColorImage(MagickWand *wand,
    const ChannelType channel,const SparseColorMethod method,
    const size_t number_arguments,const double *arguments)
</pre>

<p>A description of each parameter follows:</p>

<h5>image</h5>
<p>the image to be sparseed.</p>

<h5>method</h5>
<p>the method of image sparseion.</p>

<p>ArcSparseColorion will always ignore source image offset, and always 'bestfit' the destination image with the top left corner offset relative to the polar mapping center.</p>

<p>Bilinear has no simple inverse mapping so will not allow 'bestfit' style of image sparseion.</p>

<p>Affine, Perspective, and Bilinear, will do least squares fitting of the distrotion when more than the minimum number of control point pairs are provided.</p>

<p>Perspective, and Bilinear, will fall back to a Affine sparseion when less than 4 control point pairs are provided. While Affine sparseions will let you use any number of control point pairs, that is Zero pairs is a No-Op (viewport only) distrotion, one pair is a translation and two pairs of control points will do a scale-rotate-translate, without any shearing.</p>

<h5>number_arguments</h5>
<p>the number of arguments given for this sparseion method.</p>

<h5>arguments</h5>
<p>the arguments for this sparseion method.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSpliceImage">MagickSpliceImage</a></h2>
<div class="doc-section">

<p>MagickSpliceImage() splices a solid color into the image.</p>

<p>The format of the MagickSpliceImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSpliceImage(MagickWand *wand,
    const size_t width,const size_t height,const ssize_t x,
    const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>width</h5>
<p>the region width.</p>

<h5>height</h5>
<p>the region height.</p>

<h5>x</h5>
<p>the region x offset.</p>

<h5>y</h5>
<p>the region y offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSpreadImage">MagickSpreadImage</a></h2>
<div class="doc-section">

<p>MagickSpreadImage() is a special effects method that randomly displaces each pixel in a block defined by the radius parameter.</p>

<p>The format of the MagickSpreadImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSpreadImage(MagickWand *wand,const double radius)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>radius</h5>
<p>Choose a random pixel in a neighborhood of this extent.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickStatisticImage">MagickStatisticImage</a></h2>
<div class="doc-section">

<p>MagickStatisticImage() replace each pixel with corresponding statistic from the neighborhood of the specified width and height.</p>

<p>The format of the MagickStatisticImage method is:</p>

<pre class="code">
  MagickBooleanType MagickStatisticImage(MagickWand *wand,
    const StatisticType type,const double width,const size_t height)
  MagickBooleanType MagickStatisticImageChannel(MagickWand *wand,
    const ChannelType channel,const StatisticType type,const double width,
    const size_t height)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>type</h5>
<p>the statistic type (e.g. median, mode, etc.).</p>

<h5>width</h5>
<p>the width of the pixel neighborhood.</p>

<h5>height</h5>
<p>the height of the pixel neighborhood.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSteganoImage">MagickSteganoImage</a></h2>
<div class="doc-section">

<p>MagickSteganoImage() hides a digital watermark within the image. Recover the hidden watermark later to prove that the authenticity of an image.  Offset defines the start position within the image to hide the watermark.</p>

<p>The format of the MagickSteganoImage method is:</p>

<pre class="code">
  MagickWand *MagickSteganoImage(MagickWand *wand,
    const MagickWand *watermark_wand,const ssize_t offset)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>watermark_wand</h5>
<p>the watermark wand.</p>

<h5>offset</h5>
<p>Start hiding at this offset into the image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickStereoImage">MagickStereoImage</a></h2>
<div class="doc-section">

<p>MagickStereoImage() composites two images and produces a single image that is the composite of a left and right image of a stereo pair</p>

<p>The format of the MagickStereoImage method is:</p>

<pre class="code">
  MagickWand *MagickStereoImage(MagickWand *wand,
    const MagickWand *offset_wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>offset_wand</h5>
<p>Another image wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickStripImage">MagickStripImage</a></h2>
<div class="doc-section">

<p>MagickStripImage() strips an image of all profiles and comments.</p>

<p>The format of the MagickStripImage method is:</p>

<pre class="code">
  MagickBooleanType MagickStripImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickSwirlImage">MagickSwirlImage</a></h2>
<div class="doc-section">

<p>MagickSwirlImage() swirls the pixels about the center of the image, where degrees indicates the sweep of the arc through which each pixel is moved. You get a more dramatic effect as the degrees move from 1 to 360.</p>

<p>The format of the MagickSwirlImage method is:</p>

<pre class="code">
  MagickBooleanType MagickSwirlImage(MagickWand *wand,const double degrees)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>degrees</h5>
<p>Define the tightness of the swirling effect.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickTextureImage">MagickTextureImage</a></h2>
<div class="doc-section">

<p>MagickTextureImage() repeatedly tiles the texture image across and down the image canvas.</p>

<p>The format of the MagickTextureImage method is:</p>

<pre class="code">
  MagickWand *MagickTextureImage(MagickWand *wand,
    const MagickWand *texture_wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>texture_wand</h5>
<p>the texture wand</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickThresholdImage">MagickThresholdImage</a></h2>
<div class="doc-section">

<p>MagickThresholdImage() changes the value of individual pixels based on the intensity of each pixel compared to threshold.  The result is a high-contrast, two color image.</p>

<p>The format of the MagickThresholdImage method is:</p>

<pre class="code">
  MagickBooleanType MagickThresholdImage(MagickWand *wand,
    const double threshold)
  MagickBooleanType MagickThresholdImageChannel(MagickWand *wand,
    const ChannelType channel,const double threshold)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>threshold</h5>
<p>Define the threshold value.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickThumbnailImage">MagickThumbnailImage</a></h2>
<div class="doc-section">

<p>MagickThumbnailImage()  changes the size of an image to the given dimensions and removes any associated profiles.  The goal is to produce small low cost thumbnail images suited for display on the Web.</p>

<p>The format of the MagickThumbnailImage method is:</p>

<pre class="code">
  MagickBooleanType MagickThumbnailImage(MagickWand *wand,
    const size_t columns,const size_t rows)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>columns</h5>
<p>the number of columns in the scaled image.</p>

<h5>rows</h5>
<p>the number of rows in the scaled image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickTintImage">MagickTintImage</a></h2>
<div class="doc-section">

<p>MagickTintImage() applies a color vector to each pixel in the image.  The length of the vector is 0 for black and white and at its maximum for the midtones.  The vector weighting function is f(x)=(1-(4.0*((x-0.5)*(x-0.5)))).</p>

<p>The format of the MagickTintImage method is:</p>

<pre class="code">
  MagickBooleanType MagickTintImage(MagickWand *wand,
    const PixelWand *tint,const PixelWand *opacity)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>tint</h5>
<p>the tint pixel wand.</p>

<h5>opacity</h5>
<p>the opacity pixel wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickTransformImage">MagickTransformImage</a></h2>
<div class="doc-section">

<p>MagickTransformImage() is a convenience method that behaves like MagickResizeImage() or MagickCropImage() but accepts scaling and/or cropping information as a region geometry specification.  If the operation fails, a NULL image handle is returned.</p>

<p>The format of the MagickTransformImage method is:</p>

<pre class="code">
  MagickWand *MagickTransformImage(MagickWand *wand,const char *crop,
    const char *geometry)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>crop</h5>
<p>A crop geometry string.  This geometry defines a subregion of the image to crop.</p>

<h5>geometry</h5>
<p>An image geometry string.  This geometry defines the final size of the image.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickTransformImageColorspace">MagickTransformImageColorspace</a></h2>
<div class="doc-section">

<p>MagickTransformImageColorspace() transform the image colorspace, setting the images colorspace while transforming the images data to that colorspace.</p>

<p>The format of the MagickTransformImageColorspace method is:</p>

<pre class="code">
  MagickBooleanType MagickTransformImageColorspace(MagickWand *wand,
    const ColorspaceType colorspace)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>colorspace</h5>
<p>the image colorspace:   UndefinedColorspace, sRGBColorspace, RGBColorspace, GRAYColorspace, OHTAColorspace, XYZColorspace, YCbCrColorspace, YCCColorspace, YIQColorspace, YPbPrColorspace, YPbPrColorspace, YUVColorspace, CMYKColorspace, HSLColorspace, HWBColorspace.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickTransparentPaintImage">MagickTransparentPaintImage</a></h2>
<div class="doc-section">

<p>MagickTransparentPaintImage() changes any pixel that matches color with the color defined by fill.</p>

<p>The format of the MagickTransparentPaintImage method is:</p>

<pre class="code">
  MagickBooleanType MagickTransparentPaintImage(MagickWand *wand,
    const PixelWand *target,const double alpha,const double fuzz,
    const MagickBooleanType invert)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>target</h5>
<p>Change this target color to specified opacity value within the image.</p>

<h5>alpha</h5>
<p>the level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.</p>

<h5>fuzz</h5>
<p>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill.</p>

<h5>invert</h5>
<p>paint any pixel that does not match the target color.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickTransposeImage">MagickTransposeImage</a></h2>
<div class="doc-section">

<p>MagickTransposeImage() creates a vertical mirror image by reflecting the pixels around the central x-axis while rotating them 90-degrees.</p>

<p>The format of the MagickTransposeImage method is:</p>

<pre class="code">
  MagickBooleanType MagickTransposeImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickTransverseImage">MagickTransverseImage</a></h2>
<div class="doc-section">

<p>MagickTransverseImage() creates a horizontal mirror image by reflecting the pixels around the central y-axis while rotating them 270-degrees.</p>

<p>The format of the MagickTransverseImage method is:</p>

<pre class="code">
  MagickBooleanType MagickTransverseImage(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickTrimImage">MagickTrimImage</a></h2>
<div class="doc-section">

<p>MagickTrimImage() remove edges that are the background color from the image.</p>

<p>The format of the MagickTrimImage method is:</p>

<pre class="code">
  MagickBooleanType MagickTrimImage(MagickWand *wand,const double fuzz)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>fuzz</h5>
<p>By default target must match a particular pixel color exactly.  However, in many cases two colors may differ by a small amount. The fuzz member of image defines how much tolerance is acceptable to consider two colors as the same.  For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color for the purposes of the floodfill.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickUniqueImageColors">MagickUniqueImageColors</a></h2>
<div class="doc-section">

<p>MagickUniqueImageColors() discards all but one of any pixel color.</p>

<p>The format of the MagickUniqueImageColors method is:</p>

<pre class="code">
  MagickBooleanType MagickUniqueImageColors(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickUnsharpMaskImage">MagickUnsharpMaskImage</a></h2>
<div class="doc-section">

<p>MagickUnsharpMaskImage() sharpens an image.  We convolve the image with a Gaussian operator of the given radius and standard deviation (sigma). For reasonable results, radius should be larger than sigma.  Use a radius of 0 and UnsharpMaskImage() selects a suitable radius for you.</p>

<p>The format of the MagickUnsharpMaskImage method is:</p>

<pre class="code">
  MagickBooleanType MagickUnsharpMaskImage(MagickWand *wand,
    const double radius,const double sigma,const double amount,
    const double threshold)
  MagickBooleanType MagickUnsharpMaskImageChannel(MagickWand *wand,
    const ChannelType channel,const double radius,const double sigma,
    const double amount,const double threshold)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>channel</h5>
<p>the image channel(s).</p>

<h5>radius</h5>
<p>the radius of the Gaussian, in pixels, not counting the center pixel.</p>

<h5>sigma</h5>
<p>the standard deviation of the Gaussian, in pixels.</p>

<h5>amount</h5>
<p>the percentage of the difference between the original and the blur image that is added back into the original.</p>

<h5>threshold</h5>
<p>the threshold in pixels needed to apply the diffence amount.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickVignetteImage">MagickVignetteImage</a></h2>
<div class="doc-section">

<p>MagickVignetteImage() softens the edges of the image in vignette style.</p>

<p>The format of the MagickVignetteImage method is:</p>

<pre class="code">
  MagickBooleanType MagickVignetteImage(MagickWand *wand,
    const double black_point,const double white_point,const ssize_t x,
    const ssize_t y)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>black_point</h5>
<p>the black point.</p>

<h5>white_point</h5>
<p>the white point.</p>

<h5>x, y</h5>
<p>Define the x and y ellipse offset.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickWaveImage">MagickWaveImage</a></h2>
<div class="doc-section">

<p>MagickWaveImage()  creates a "ripple" effect in the image by shifting the pixels vertically along a sine wave whose amplitude and wavelength is specified by the given parameters.</p>

<p>The format of the MagickWaveImage method is:</p>

<pre class="code">
  MagickBooleanType MagickWaveImage(MagickWand *wand,const double amplitude,
    const double wave_length)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>amplitude, wave_length</h5>
<p>Define the amplitude and wave length of the sine wave.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickWhiteThresholdImage">MagickWhiteThresholdImage</a></h2>
<div class="doc-section">

<p>MagickWhiteThresholdImage() is like ThresholdImage() but  force all pixels above the threshold into white while leaving all pixels below the threshold unchanged.</p>

<p>The format of the MagickWhiteThresholdImage method is:</p>

<pre class="code">
  MagickBooleanType MagickWhiteThresholdImage(MagickWand *wand,
    const PixelWand *threshold)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>threshold</h5>
<p>the pixel wand.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickWriteImage">MagickWriteImage</a></h2>
<div class="doc-section">

<p>MagickWriteImage() writes an image to the specified filename.  If the filename parameter is NULL, the image is written to the filename set by MagickReadImage() or MagickSetImageFilename().</p>

<p>The format of the MagickWriteImage method is:</p>

<pre class="code">
  MagickBooleanType MagickWriteImage(MagickWand *wand,
    const char *filename)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>filename</h5>
<p>the image filename.</p>


 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickWriteImageFile">MagickWriteImageFile</a></h2>
<div class="doc-section">

<p>MagickWriteImageFile() writes an image to an open file descriptor.</p>

<p>The format of the MagickWriteImageFile method is:</p>

<pre class="code">
  MagickBooleanType MagickWriteImageFile(MagickWand *wand,FILE *file)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>file</h5>
<p>the file descriptor.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickWriteImages">MagickWriteImages</a></h2>
<div class="doc-section">

<p>MagickWriteImages() writes an image or image sequence.</p>

<p>The format of the MagickWriteImages method is:</p>

<pre class="code">
  MagickBooleanType MagickWriteImages(MagickWand *wand,
    const char *filename,const MagickBooleanType adjoin)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>filename</h5>
<p>the image filename.</p>

<h5>adjoin</h5>
<p>join images into a single multi-image file.</p>

 </div>
<h2><a href="http://www.imagemagick.org/api/MagickWand/magick-image_8c.html" id="MagickWriteImagesFile">MagickWriteImagesFile</a></h2>
<div class="doc-section">

<p>MagickWriteImagesFile() writes an image sequence to an open file descriptor.</p>

<p>The format of the MagickWriteImagesFile method is:</p>

<pre class="code">
  MagickBooleanType MagickWriteImagesFile(MagickWand *wand,FILE *file)
</pre>

<p>A description of each parameter follows:</p>

<h5>wand</h5>
<p>the magick wand.</p>

<h5>file</h5>
<p>the file descriptor.</p>

 </div>

</div>

<div id="linkbar">
    <span id="linkbar-west">&nbsp;</span>
    <span id="linkbar-center">
      <a href="http://www.imagemagick.org/discourse-server/">Discourse Server</a> &bull;
      <a href="http://www.imagemagick.org/MagickStudio/scripts/MagickStudio.cgi">Studio</a> &bull;
      <a href="http://jqmagick.imagemagick.org/">JqMagick</a>
    </span>
    <span id="linkbar-east">&nbsp;</span>
  </div>
  <div class="footer">
    <span id="footer-west">&copy; 1999-2013 ImageMagick Studio LLC</span>
    <span id="footer-east"> <a href="/api/../script/contact.php">Contact the Wizards</a></span>
  </div>
  <div style="clear: both; margin: 0; width: 100%; "></div>
</body>
</html>
