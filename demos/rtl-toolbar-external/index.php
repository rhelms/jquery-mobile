<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RTL External toolbars - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../external/jquery/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
	<script>
		$(function(){
			$( "[data-role='header'], [data-role='footer']" ).toolbar();
		});
	</script>
</head>
<body>
	<div data-role="header" data-theme="a" class="ui-rtl" dir="rtl">
		<a href="../rtl-toolbar/" data-rel="back" class="ui-btn ui-btn-start ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-r">Back</a>
		<h1>External header</h1>
	</div><!-- /header -->

	<div data-role="page" class="jqm-demos" data-quicklinks="true">

		<div role="main" class="ui-content jqm-content jqm-fullwidth">

			<h1>External toolbars</h1>

			<p>The header and footer on this page are positioned outside the page. They are before and after the page within the body. These Toolbars will remain in the dom until manually removed.</p>

			<h2>Markup</h2>

			<p>The markup for external toolbars is identical to normal toolbars, you just place the toolbar outside the page within the body of your page</p>

			<p>For the purpose of this demonstration, the header has been wrapped by the <code>ui-rtl</code> class, however, you might expect that the body would have this class applied.</p>


			<h2>Ajax navigation</h2>

			<p>Because these toolbars are not within the page they will remain in the DOM until manually removed.</p>

			<p>Toolbars not within a page will not be pulled into the DOM during Ajax navigation.</p>

			<h2>Fixed external toolbars</h2>

			<p>External toolbars can also be set to fixed positioning just like normal toolbars: <a href="../rtl-toolbar-fixed-external/" data-ajax="false">RTL External fixed toolbars</a></p>

		</div><!-- /content -->

	</div><!-- /page -->

	<div data-role="footer" data-theme="a" class="ui-rtl" dir="rtl">
		<h1>External footer</h1>
	</div><!-- /footer -->

</body>
</html>
