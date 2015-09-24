<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RTL Toolbar - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../external/jquery/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
	<style id="footer-abs-buttons">
		.footer-button-start,
		.footer-button-end {
			position: absolute;
			margin: 0;
			top: auto;
			bottom: 0.24em;
		}
		.footer-button-start {
			left: 0.4em;
		}
		.ui-rtl .footer-button-start {
			right: 0.4em;
			left: auto;
		}
		.ui-rtl .ui-ltr .footer-button-start {
			left: 0.4em;
			right: auto;
		}
		.footer-button-end {
			right: 0.4em;
		}
		.ui-rtl .footer-button-end {
			left: 0.4em;
			right: auto;
		}
		.ui-rtl .ui-ltr .footer-button-end {
			right: 0.4em;
			left: auto;
		}
	</style>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="header" class="jqm-header">
		<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
		<p><span class="jqm-version"></span> Demos</p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>RTL Toolbar</h1>

		<p>The toolbar widget is used to enhance headers and footers. Only toolbar demos where RTL matters.</p>

		<h2>External toolbars</h2>

		<p>If you want to use the same toolbar on multiple pages, you can use <a href="../rtl-toolbar-external/" data-ajax="false">external toolbars</a>.</p>

		<h2>Fixed position</h2>

		<p>Toolbars can be set to fixed position by adding the <code>data-position="fixed"</code> to the header or footer. This will make them remain at the top (header) or bottom (footer) of the window at all time instead of scrolling with the page. See <a href="../rtl-toolbar-fixed/" data-ajax="false">fixed toolbars</a>.</p>

		<h2>Fullscreen position</h2>

		<p>The toolbars can be set to fullscreen fixed position that overlays the toolbar over the content by adding the <code>data-fullscreen="true"</code> to a fixed header. See <a href="../rtl-toolbar-fixed-fullscreen/" data-ajax="false">fullscreen toolbars</a>.</p>

		<h2>External fixed toolbars</h2>

		<p>See <a href="../rtl-toolbar-fixed-external/" data-ajax="false"> external fixed toolbars</a>.</p>

		<h2>Persistent toolbars</h2>

		<p>See <a href="../rtl-toolbar-fixed-persistent/" data-ajax="false">persistent toolbars</a>.</p>

		<h2>Buttons in toolbars</h2>

		<h3>Header button position classes</h3>

		<p>You can use the <code>ui-btn-left</code> and <code>ui-btn-right</code> classes to position buttons in the header. However, the app would need to be RTL aware to ensure the correct class is used.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div data-role="header">
					<a href="#" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-delete">Cancel</a>
				<h1>My App</h1>
					<button class="ui-btn-left ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-check">Save</button>
				</div>
			</div>
		</div><!-- /demo-html -->

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div data-role="header">
				<h1>Page Title</h1>
					<a href="#" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-gear">Options</a>
				</div>
			</div>
		</div><!-- /demo-html -->

		<p>LTR examples of the above in RTL contexts.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="header">
						<a href="#" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-delete">Cancel</a>
						<h1>My App</h1>
						<button class="ui-btn-right ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-check">Save</button>
					</div>
				</div>
			</div>
		</div><!-- /demo-html -->

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="header">
						<h1>Page Title</h1>
						<a href="#" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-gear">Options</a>
					</div>
				</div>
			</div>
		</div><!-- /demo-html -->

		<p>Same RTL example, but uses <code>ui-btn-start</code> and <code>ui-btn-end</code> classes to position buttons in the header.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div data-role="header">
					<a href="#" class="ui-btn-start ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-start ui-icon-delete">Cancel</a>
					<h1>My App</h1>
					<button class="ui-btn-end ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-end ui-icon-check">Save</button>
				</div>
			</div>
		</div><!-- /demo-html -->

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div data-role="header">
					<h1>Page Title</h1>
					<a href="#" class="ui-btn-start ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-start ui-icon-gear">Options</a>
				</div>
			</div>
		</div><!-- /demo-html -->

		<p>LTR header in a RTL context, using <code>ui-btn-start</code> and <code>ui-btn-end</code></p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="header">
						<a href="#" class="ui-btn-start ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-start ui-icon-delete">Cancel</a>
						<h1>My App</h1>
						<button class="ui-btn-end ui-btn ui-btn-b ui-btn-inline ui-mini ui-corner-all ui-btn-icon-end ui-icon-check">Save</button>
					</div>
				</div>
			</div>
		</div><!-- /demo-html -->

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="header">
						<h1>Page Title</h1>
						<a href="#" class="ui-btn-start ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-start ui-icon-gear">Options</a>
					</div>
				</div>
			</div>
		</div><!-- /demo-html -->

		<h3>Buttons in headers without a heading</h3>

		<p>This examples </p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div data-role="header">
					<a href="#" class="ui-btn-start ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-start ui-icon-grid">View</a>
					<span class="ui-title"></span>
				</div>
			</div>
		</div><!-- /demo-html -->

		<p>LTR button in header without a heading in a RTL context.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="header">
						<a href="#" class="ui-btn-start ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-start ui-icon-grid">View</a>
						<span class="ui-title"></span>
					</div>
				</div>
			</div>
		</div><!-- /demo-html -->

		<h3>Buttons in footers</h3>

		<p>The classes <code>ui-btn-left</code> and <code>ui-btn-right</code> were not meant to be used in footers, because they do not account for the possible presence of text, navbars, and and other elements often present in footers. You can nevertheless achieve a similar effect when you add a bit of custom CSS.</p>

		<p>For RTL considerations, use <code>ui-btn-start</code> and <code>ui-btn-end</code> instead.</p>

		<div data-demo-html="true" data-demo-css="#footer-abs-buttons">
			<div class="ui-rtl" dir="rtl">
				<div data-role="footer">
					<h2>Footer</h2>
					<a href="#" class="ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-start ui-btn-icon-start ui-icon-power">Quit</a>
					<a href="#" class="ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-end ui-btn-icon-end ui-icon-carat-l">Next</a>
				</div>
			</div>
		</div>

		<p>LTR example of above in a RTL context.</p>

		<div data-demo-html="true" data-demo-css="#footer-abs-buttons">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="footer">
						<h2>Footer</h2>
						<a href="#" class="ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-start ui-btn-icon-start ui-icon-power">Quit</a>
						<a href="#" class="ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-end ui-btn-icon-end ui-icon-carat-r">Next</a>
					</div>
				</div>
			</div>
		</div>

		<h2>Navbars</h2>

		<p>See <a href="../navbar/" data-ajax="false">navbar</a> for examples of navigation bars inside toolbars.</p>

		<h2>Grouped buttons</h2>

		<p>To group buttons into a button set, wrap the links in an element with <code> data-role=&quot;controlgroup&quot;</code> and <code>data-type=&quot;horizontal&quot;</code> attributes.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div data-role="header">
					<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-start">
						<a href="#" class="ui-btn ui-btn-icon-end ui-icon-plus">Add</a>
						<a href="#" class="ui-btn ui-btn-icon-end ui-icon-arrow-u">Up</a>
						<a href="#" class="ui-btn ui-btn-icon-end ui-icon-arrow-d">Down</a>
					</div>
					<h6>My header</h6>
				</div>
			</div>
		</div>

		<p>LTR example of the above in a RTL context.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="header">
						<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-start">
							<a href="#" class="ui-btn ui-btn-icon-end ui-icon-plus">Add</a>
							<a href="#" class="ui-btn ui-btn-icon-end ui-icon-arrow-u">Up</a>
							<a href="#" class="ui-btn ui-btn-icon-end ui-icon-arrow-d">Down</a>
						</div>
						<h6>My header</h6>
					</div>
				</div>
			</div>
		</div>

		<h2>Adding padding</h2>

		<p>By default, toolbars don't have any padding to accommodate nav bars and other widgets. To add padding inside of a full-width toolbar, wrap the toolbar's contents in an element and add class <code>ui-bar</code> to that element or apply your own padding rule in your custom CSS.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div data-role="footer">
					<div class="ui-bar">
						<label for="select-choice-1-r" class="ui-hidden-accessible">Shipping:</label>
						<select name="select-choice-1-r" id="select-choice-1-r" data-mini="true" data-inline="true">
							<option value="standard">Standard: 7 day</option>
							<option value="rush">Rush: 3 days</option>
							<option value="express">Express: next day</option>
							<option value="overnight">Overnight</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<p>LTR example of the above in a RTL context.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="footer">
						<div class="ui-bar">
							<label for="select-choice-1" class="ui-hidden-accessible">Shipping:</label>
							<select name="select-choice-1" id="select-choice-1" data-mini="true" data-inline="true">
								<option value="standard">Standard: 7 day</option>
								<option value="rush">Rush: 3 days</option>
								<option value="express">Express: next day</option>
								<option value="overnight">Overnight</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- /content -->

	<?php include( '../jqm-navmenu.php' ); ?>

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2014 The jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( '../jqm-search.php' ); ?>

</div><!-- /page -->

</body>
</html>
