<!DOCTYPE html>
<html class="ui-rtl" dir="ltr">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RTL Panel - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../external/jquery/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-panel-page" data-quicklinks="true">

	<!-- default panel  -->
	<div data-role="panel" id="defaultpanel">

        <h3>Default panel options</h3>
        <p>This panel has all the default options for RTL display: positioned on the right with the reveal display mode. The panel markup is <em>before</em> the header, content and footer in the source order.</p>
        <p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
        <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-right ui-btn-inline">Close panel</a>

	</div><!-- /default panel -->

	<!-- Note: all other panels are at the end of the page, scroll down  -->

	<div data-role="header" class="jqm-header ui-ltr" dir="ltr">
		<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
		<p><span class="jqm-version"></span> Demos</p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content ui-ltr" dir="ltr">

		<h1>RTL Panel</h1>

		<p>Flexible by design, panels can be used for navigation, forms, inspectors and more.</p>

		<p>To showcase RTL panels for an otherwise LTR website, this whole page has been made RTL, with specific
			sections, such as the <code>header</code>, <code>content</code> and <code>footer</code>, made LTR.</p>

		<h2>Panel examples</h2>

		<p><strong>Left</strong> panel examples</p>
		<a href="#leftpanel3" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Overlay</a>
		<a href="#leftpanel1" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Reveal</a>
		<a href="#leftpanel2" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Push</a>

		<p><strong>Right</strong> panel examples</p>
		<a href="#rightpanel3" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Overlay</a>
		<a href="#rightpanel1" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Reveal</a>
		<a href="#rightpanel2" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Push</a>

		<p>The <strong>position</strong> of the panel on the screen is set by the <code>data-position</code> attribute. The default value of the attribute is <code>left</code>, meaning it will appear from the left edge of the screen. Specify <code>data-position="right"</code> for it to appear from the right edge instead.</p>

		<p>The <strong>display mode</strong> of the panel is set by the <code>data-display</code> attribute. The value of the attribute defaults to <code>reveal</code>, meaning the panel will sit under the page and reveal as the page slides away. Specify <code>data-display="overlay"</code> for the panel to appear on top of the page contents. A third mode, <code>data-display="push"</code> animates both the panel and page at the same time.</p>

		<p>LTR panel in a RTL content.</p>
		<a href="#ltrpanel3" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Overlay</a>
		<a href="#ltrpanel1" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Reveal</a>
		<a href="#ltrpanel2" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-mini">Push</a>

		<p>The LTR example shows the content being available as LTR, rather than the position of the panel itself.</p>

		<h2>Panels outside pages</h2>

		<p>If you want to use the same panel on multiple pages you can place the markup outside the page. See <a href="../rtl-panel-external/" data-ajax="false">RTL external panels</a>.</p>

		<h2>Opening a panel</h2>

		<p>To control a panel from a link, set the <code>href</code> to the <code>ID</code> of the panel you want to toggle. This instructs the framework to bind the link to the panel. This link will toggle the visibility of the panel so tapping it will open the panel, and tapping it again will close it.</p>

		<a href="#defaultpanel" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-icon-left ui-icon-bars">Default panel</a>

		<div class="jqm-navmenu-panel jqm-panel-page-nav">
			<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
				<?php include( '../jqm-contents.php' ); ?>
			</ul>
		</div>
	</div><!-- /content -->

	<?php include( '../jqm-navmenu.php' ); ?>

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer ui-ltr" dir="ltr">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2014 The jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( '../jqm-search.php' ); ?>

	<!-- Here are a bunch of panels at the end, just before the close page tag  -->

	<!-- leftpanel1  -->
	<div data-role="panel" id="leftpanel1" data-position="left" data-display="reveal" data-theme="a">

        <h3>Left Panel: Reveal</h3>
        <p>This panel is positioned on the left with the reveal display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
        <p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
        <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-right ui-btn-inline">Close panel</a>

	</div><!-- /leftpanel1 -->

	<!-- leftpanel2  -->
	<div data-role="panel" id="leftpanel2" data-position="left" data-display="push" data-theme="a">

        <h3>Left Panel: Push</h3>
        <p>This panel is positioned on the left with the push display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
        <p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
        <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-right ui-btn-inline">Close panel</a>

	</div><!-- /leftpanel2 -->

	<!-- leftpanel3  -->

	<!-- rightpanel1  -->
	<div data-role="panel" id="rightpanel1" data-position="right" data-display="reveal" data-theme="b">

        <h3>Right Panel: Reveal</h3>
        <p>This panel is positioned on the right with the reveal display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
        <p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
        <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-right ui-btn-inline">Close panel</a>

	</div><!-- /rightpanel1 -->

	<!-- rightpanel2  -->
	<div data-role="panel" id="rightpanel2" data-position="right" data-display="push" data-theme="b">

        <h3>Right Panel: Push</h3>
        <p>This panel is positioned on the right with the push display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
        <p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
        <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-right ui-btn-inline">Close panel</a>

	</div><!-- /rightpanel2 -->

	<!-- rightpanel3  -->
	<div data-role="panel" id="rightpanel3" data-position="right" data-display="overlay" data-theme="b">

        <h3>Right Panel: Overlay</h3>
        <p>This panel is positioned on the right with the overlay display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
        <p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
        <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-right ui-btn-inline">Close panel</a>

	</div><!-- /rightpanel3 -->
	<div data-role="panel" id="leftpanel3" data-position="left" data-display="overlay" data-theme="a">

        <h3>Left Panel: Overlay</h3>
        <p>This panel is positioned on the left with the overlay display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
        <p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
        <a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-right ui-btn-inline">Close panel</a>

	</div><!-- /leftpanel3 -->

	<!-- ltrpanel1  -->
	<div data-role="panel" id="ltrpanel1" data-position="left" data-display="reveal" data-theme="a" class="ui-ltr" dir="ltr">

		<h3>LTR Left Panel: Reveal</h3>
		<p>This panel is positioned on the left with the reveal display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
		<p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
		<a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline">Close panel</a>

	</div><!-- /ltrpanel1 -->

	<!-- ltrpanel2  -->
	<div data-role="panel" id="ltrpanel2" data-position="left" data-display="push" data-theme="a" class="ui-ltr" dir="ltr">

		<h3>LTR Left Panel: Push</h3>
		<p>This panel is positioned on the left with the push display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
		<p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
		<a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline">Close panel</a>

	</div><!-- /ltrpanel2 -->

	<!-- ltrpanel3  -->
	<div data-role="panel" id="ltrpanel3" data-position="left" data-display="overlay" data-theme="a" class="ui-ltr" dir="ltr">

		<h3>LTR Left Panel: Overlay</h3>
		<p>This panel is positioned on the left with the overlay display mode. The panel markup is <em>after</em> the header, content and footer in the source order.</p>
		<p>To close, click off the panel, swipe left or right, hit the Esc key, or use the button below:</p>
		<a href="#demo-links" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline">Close panel</a>

	</div><!-- /ltrpanel3 -->

</div><!-- /page -->

</body>
</html>
