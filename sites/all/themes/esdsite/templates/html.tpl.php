
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <!--<![endif]-->
<head>
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div class="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
	<div id="nygov-universal-navigation" class="ny-logo-nav nygov-universal-container mobile" data-iframe="true" data-updated="2014-11-07 08:30">
    <iframe id="nygov-nav-mobile" width="100%" height="50px" src="//static-assets.ny.gov/load_global_menu/ajax?iframe=true" frameborder="0" style="border:none; overflow:hidden; width:100%; height:86px;" scrolling="no">
        Your browser does not support iFrames
    </iframe>
  </div>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
	<div id="nygov-universal-footer" class="nygov-universal-container footer">
    <iframe id="nygov-universal-footer-frame" class="nygov-universal-container" width="100%" height="125px" src="//static-assets.ny.gov/load_global_footer/ajax?iframe=true" data-updated="2014-11-07 08:30" frameborder="0" style="border:none; overflow:hidden; width:100%; height:125px;" scrolling="no">
        Your browser does not support iFrames
    </iframe>
  </div>
  <script type="text/javascript" src="sites/all/themes/esdsite/js/jquery.min.js"></script>
  <script type="text/javascript" src="sites/all/themes/esdsite/js/foundation.core.min.js"></script>
  <script type="text/javascript" src="sites/all/themes/esdsite/js/foundation.util.mediaQuery.min.js"></script>
  <script type="text/javascript" src="sites/all/themes/esdsite/js/app.min.js"></script>
</body>
</html>