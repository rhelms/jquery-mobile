<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RTL Tabs - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../external/jquery/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
	<style id="inset-tablist">
		.tablist-left {
			width: 25%;
			display: inline-block;
		}
		.tablist-content {
			width: 60%;
			display: inline-block;
			vertical-align: top;
			margin-left: 5%;
		}
		.ui-rtl .tablist-content {
			margin-left: 0;
			margin-right: 5%;
		}
		.ui-rtl .ui-ltr .tablist-content {
			margin-left: 5%;
			margin-right: 0;
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

		<h1>RTL Tabs</h1>

		<h2>Use navbar for tabs</h2>
		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div data-role="tabs" id="tabs-r">
		        	<div data-role="navbar">
			    		<ul>
			      			<li><a href="#one-r" data-ajax="false">one</a></li>
			      			<li><a href="#two-r" data-ajax="false">two</a></li>
			      			<li><a href="ajax-content-ignore.php" data-ajax="false">three</a></li>
			    		</ul>
		      		</div>
		      		<div id="one-r" class="ui-body-d ui-content">
		      			<h1>First tab contents</h1>
		      		</div>
		      		<div id="two-r">
		        		<ul data-role="listview" data-inset="true">
		            		<li><a href="#">Acura</a></li>
		            		<li><a href="#">Audi</a></li>
		            		<li><a href="#">BMW</a></li>
		            		<li><a href="#">Cadillac</a></li>
		            		<li><a href="#">Ferrari</a></li>
		        		</ul>
		      		</div>
			    </div>
			</div>
		</div>

		<p>LTR navbar for tabs in a RTL context</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="tabs" id="tabs">
						<div data-role="navbar">
							<ul>
								<li><a href="#one" data-ajax="false">one</a></li>
								<li><a href="#two" data-ajax="false">two</a></li>
								<li><a href="ajax-content-ignore.php" data-ajax="false">three</a></li>
							</ul>
						</div>
						<div id="one" class="ui-body-d ui-content">
							<h1>First tab contents</h1>
						</div>
						<div id="two">
							<ul data-role="listview" data-inset="true">
								<li><a href="#">Acura</a></li>
								<li><a href="#">Audi</a></li>
								<li><a href="#">BMW</a></li>
								<li><a href="#">Cadillac</a></li>
								<li><a href="#">Ferrari</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<h2>Use inset listview for tabs</h2>

		<div data-demo-html="true" data-demo-css="#inset-tablist">
			<div class="ui-rtl" dir="rtl">
				<div data-role="tabs">
					<ul data-role="listview" data-inset="true" class="tablist-left">
					  <li><a href="#one-r" data-ajax="false">one</a></li>
					  <li><a href="#two-r" data-ajax="false">two</a></li>
					  <li><a href="ajax-content-ignore.php" data-ajax="false">three</a></li>
					</ul>
					<div id="one-r" class="ui-body-d tablist-content">
					<h1>First tab contents</h1>
				  </div>

					<ul id="two-r" class="tablist-content" data-role="listview" data-inset="true">
						<li><a href="#">Acura</a></li>
						<li><a href="#">Audi</a></li>
						<li><a href="#">BMW</a></li>
						<li><a href="#">Cadillac</a></li>
						<li><a href="#">Ferrari</a></li>
					</ul>
				</div>
		    </div>
		</div>

		<p>LTR using inset listview for tabs in a RTL context</p>

		<div data-demo-html="true" data-demo-css="#inset-tablist">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<div data-role="tabs">
						<ul data-role="listview" data-inset="true" class="tablist-left">
							<li><a href="#one" data-ajax="false">one</a></li>
							<li><a href="#two" data-ajax="false">two</a></li>
							<li><a href="ajax-content-ignore.php" data-ajax="false">three</a></li>
						</ul>
						<div id="one" class="ui-body-d tablist-content">
							<h1>First tab contents</h1>
						</div>

						<ul id="two" class="tablist-content" data-role="listview" data-inset="true">
							<li><a href="#">Acura</a></li>
							<li><a href="#">Audi</a></li>
							<li><a href="#">BMW</a></li>
							<li><a href="#">Cadillac</a></li>
							<li><a href="#">Ferrari</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		    <h2>Tabbed page content</h2>
		    <p>You can also use tabs to swap out the contents of an entire page. See <a data-ajax="false" href="tabbed-content.php">Tabbed Content Pages</a> for details.</p>

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
