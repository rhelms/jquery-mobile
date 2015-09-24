<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RTL Fixed Toolbars - jQuery Mobile Framework</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../external/jquery/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
</head>
<body>
	<div data-role="page" class="jqm-demos" data-quicklinks="true">

		<div data-role="header" data-position="fixed" class="ui-rtl" dir="rtl">
			<a href="../rtl-toolbar/" data-rel="back" class="ui-btn ui-btn-start ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-r">Back</a>
			<h1>Fixed header</h1>
		</div><!-- /header -->

	    <div role="main" class="ui-content jqm-content jqm-fullwidth">

	    	<h1>Fixed toolbars</h1>

			<p>Fixed toolbars remains the same under RTL as they do under LTR.</p>

			<p>In this example, the individual header is wrapped in the <code>ui-rtl</code> class. The only thing that has changed is usage of <code>ui-btn-start</code> instead of <code>ui-btn-left</code> and <code>ui-icon-carat-l</code> has been swapped to <code>ui-icon-carat-r</code>.</p>


			<h2>Fullscreen Toolbars</h2>

			<p><a href="../rtl-toolbar-fixed-fullscreen/" data-ajax="false">Fullscreen</a> fixed toolbars sit on top of the content at all times when they are visible, and unlike regular fixed toolbars, fullscreen toolbars do not fall back to static positioning when toggled. Instead they disappear from the screen entirely. Fullscreen toolbars are ideal for more immersive interfaces, like a photo viewer that is meant to fill the entire screen with the photo itself and no distractions.</p>

			<p>To enable this option on a fixed header or footer, add the <code>data-fullscreen</code> attribute to the element.</p>

<pre><code>
&lt;div data-role=&quot;header&quot; data-position=&quot;fixed&quot; data-fullscreen=&quot;true&quot;&gt;
	&lt;h1&gt;Fixed Header!&lt;/h1&gt;
&lt;/div&gt;
</code></pre>

			<h2>Forms in toolbars</h2>

			<p>While all form elements are now tested to work correctly within <em>static</em> toolbars as of jQuery Mobile 1.1, we recommend extensive testing when using form elements within <em>fixed</em> toolbars or within any <code>position: fixed</code> elements. This can potentially trigger a number of unpredictable issues in various mobile browsers, Android 2.2/2.3 in particular (detailed in <b>Known issues in Android 2.2/2.3</b>, below).</p>

			<p><a href="../rtl-toolbar-fixed-forms/" data-ajax="false">Forms in toolbar example</a></p>

	    </div><!-- /content -->

	    <div data-role="footer" data-position="fixed" class="ui-rtl" dir="rtl">
	    	<h1>Fixed footer</h1>
	    </div><!-- /footer -->

	</div><!-- /page -->

</body>
</html>
