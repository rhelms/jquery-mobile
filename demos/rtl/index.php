<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Right To Left - jQuery Mobile Demos</title>
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

    <div data-role="header" class="jqm-header">
        <h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
        <p><span class="jqm-version"></span> Demos</p>
        <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
        <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content">

        <h1>Right To Left</h1>

        <p>Right To Left (RTL) allows widgets to be RTL aware, and next RTL within LTR content, and LTR within RTL content.</p>

        <p>Widgets using enhanced markup will need to use specific left and right classes as required. Widgets using the
        deprecated method will automatically detect the correct classes to use, based on the closest
			<code>ui-rtl</code> or <code>ui-ltr</code> class.</p>

		<p>To make your whole page right to left, place the <code>ui-rtl</code> class in the <code>html</code> element,
			accompanied by the <code>dir="rtl"</code> attribute.</p>

		<pre><code>&lt;!DOCTYPE html&gt;
&lt;html class=&quot;ui-rtl&quot; dir=&quot;rtl&quot;&gt;
	...head and body goes here...
&lt;/html&gt;</code></pre>

		<p>Portions of an otherwise LTR page can be made RTL by placing the <code>ui-rtl</code> class around the
			section, accompanied by the <code>dir="rtl"</code> attribute.</p>

		<pre><code>&lt;body&gt;
	&lt;p&gt;My LTR content.&lt;/p&gt;
	&lt;div class=&quot;ui-rtl&quot; dir=&quot;rtl&quot;&gt;
		&lt;p&gt;My RTL content.&lt;/p&gt;
	&lt;/div&gt;
&lt;/body&gt;</code></pre>

		<p>Likewise, portions of an otherwise RTL page can be made LTR by placing the <code>ui-ltr</code> class around
			the section, accompanied by the <code>dir="ltr"</code> attribute.</p>

		<pre><code>&lt;html class=&quot;ui-rtl&quot; dir=&quot;rtl&quot;&gt;
&lt;body&gt;
&lt;p&gt;My RTL content.&lt;/p&gt;
&lt;div class=&quot;ui-ltr&quot; dir=&quot;ltr&quot;&gt;
	&lt;p&gt;My LTR content.&lt;/p&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

		<p>Nesting RTL in LTR content to multiple levels may not work. It is advised to only nest one within the other
			to one level.</p>

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