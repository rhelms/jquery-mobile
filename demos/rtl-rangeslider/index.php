<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RTL Rangeslider - jQuery Mobile Demos</title>
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
		<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png"
																alt="jQuery Mobile"></a></h2>

		<p><span class="jqm-version"></span> Demos</p>
		<a href="#"
		   class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#"
		   class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div>
	<!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>RTL Range slider</h1>

		<p>Range slider offer two handles to set a min and max value along a numeric continuum.
		</p>

		<h2>Basic range slider</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div data-role="rangeslider">
						<label for="range-1ar">Rangeslider:</label>
						<input type="range" name="range-1ar" id="range-1ar" min="0" max="100" value="40">
						<label for="range-1br">Rangeslider:</label>
						<input type="range" name="range-1br" id="range-1br" min="0" max="100" value="80">
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR basic range slider in a RTL context.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div data-role="rangeslider">
							<label for="range-1a">Rangeslider:</label>
							<input type="range" name="range-1a" id="range-1a" min="0" max="100" value="40">
							<label for="range-1b">Rangeslider:</label>
							<input type="range" name="range-1b" id="range-1b" min="0" max="100" value="80">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

		<h2>Step attribute</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div data-role="rangeslider">
						<label for="range-10ar">Rangeslider:</label>
						<input type="range" name="range-10ar" id="range-10ar" min="0" max="10" step=".1" value="2.6">
						<label for="range-10br">Rangeslider:</label>
						<input type="range" name="range-10br" id="range-10br" min="0" max="10" step=".1" value="5.4">
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR step attribute in a RTL context.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div data-role="rangeslider">
							<label for="range-10a">Rangeslider:</label>
							<input type="range" name="range-10a" id="range-10a" min="0" max="10" step=".1" value="2.6">
							<label for="range-10b">Rangeslider:</label>
							<input type="range" name="range-10b" id="range-10b" min="0" max="10" step=".1" value="5.4">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

		<h2>No highlight</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div data-role="rangeslider" data-highlight="false">
						<label for="range-2ar">Rangeslider (default is "true"):</label>
						<input type="range" name="range-2ar" id="range-2ar" min="0" max="100" value="20">
						<label for="range-2br">Rangeslider:</label>
						<input type="range" name="range-2br" id="range-2br" min="0" max="100" value="80">
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR No highlight in a RTL context.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div data-role="rangeslider" data-highlight="false">
							<label for="range-2a">Rangeslider (default is "true"):</label>
							<input type="range" name="range-2a" id="range-2a" min="0" max="100" value="20">
							<label for="range-2b">Rangeslider:</label>
							<input type="range" name="range-2b" id="range-2b" min="0" max="100" value="80">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

		<h2>Theme</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div data-role="rangeslider" data-track-theme="b" data-theme="a">
						<label for="range-3ar">Rangeslider:</label>
						<input type="range" name="range-3ar" id="range-3ar" min="0" max="100" value="20">
						<label for="range-3br">Rangeslider:</label>
						<input type="range" name="range-3br" id="range-3br" min="0" max="100" value="100">
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR theme in a RTL context</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div data-role="rangeslider" data-track-theme="b" data-theme="a">
							<label for="range-3a">Rangeslider:</label>
							<input type="range" name="range-3a" id="range-3a" min="0" max="100" value="20">
							<label for="range-3b">Rangeslider:</label>
							<input type="range" name="range-3b" id="range-3b" min="0" max="100" value="100">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

		<h2>Mini</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div data-role="rangeslider" data-mini="true">
						<label for="range-4ar">Rangeslider:</label>
						<input type="range" name="range-4ar" id="range-4ar" min="0" max="100" value="0">
						<label for="range-4br">Rangeslider:</label>
						<input type="range" name="range-4br" id="range-4br" min="0" max="100" value="100">
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR mini in a RTL context</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div data-role="rangeslider" data-mini="true">
							<label for="range-4a">Rangeslider:</label>
							<input type="range" name="range-4a" id="range-4a" min="0" max="100" value="0">
							<label for="range-4b">Rangeslider:</label>
							<input type="range" name="range-4b" id="range-4b" min="0" max="100" value="100">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

		<h2>Disabled</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div data-role="rangeslider">
						<label for="range-5ar">Rangeslider:</label>
						<input type="range" name="range-5ar" id="range-5ar" disabled="disabled" min="0" max="100"
							   value="0">
						<label for="range-5br">Rangeslider:</label>
						<input type="range" name="range-5br" id="range-5br" disabled="disabled" min="0" max="100"
							   value="100">
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR disabled in a RTL context</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div data-role="rangeslider">
							<label for="range-5a">Rangeslider:</label>
							<input type="range" name="range-5a" id="range-5a" disabled="disabled" min="0" max="100"
								   value="0">
							<label for="range-5b">Rangeslider:</label>
							<input type="range" name="range-5b" id="range-5b" disabled="disabled" min="0" max="100"
								   value="100">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

		<h2>Label hidden</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div data-role="rangeslider">
						<label for="range-6ar" class="ui-hidden-accessible">Rangeslider:</label>
						<input type="range" name="range-6ar" id="range-6ar" min="0" max="100" value="0">
						<label for="range-6br">Rangeslider:</label>
						<input type="range" name="range-6br" id="range-6br" min="0" max="100" value="100">
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR label hidden in a RTL context</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div data-role="rangeslider">
							<label for="range-6a" class="ui-hidden-accessible">Rangeslider:</label>
							<input type="range" name="range-6a" id="range-6a" min="0" max="100" value="0">
							<label for="range-6b">Rangeslider:</label>
							<input type="range" name="range-6b" id="range-6b" min="0" max="100" value="100">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

		<h2>Fieldcontain</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div class="ui-field-contain">
						<div data-role="rangeslider">
							<label for="range-7ar">Rangeslider:</label>
							<input type="range" name="range-7ar" id="range-7ar" min="0" max="100" value="0">
							<label for="range-7br">Rangeslider:</label>
							<input type="range" name="range-7br" id="range-7br" min="0" max="100" value="100">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR fieldcontain in a RTL context.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div class="ui-field-contain">
							<div data-role="rangeslider">
								<label for="range-7a">Rangeslider:</label>
								<input type="range" name="range-7a" id="range-7a" min="0" max="100" value="0">
								<label for="range-7b">Rangeslider:</label>
								<input type="range" name="range-7b" id="range-7b" min="0" max="100" value="100">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

		<h2>Fieldcontain, mini</h2>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<form>
					<div class="ui-field-contain">
						<div data-role="rangeslider" data-mini="true">
							<label for="range-8ar">Rangeslider:</label>
							<input type="range" name="range-8ar" id="range-8ar" min="0" max="100" value="0">
							<label for="range-8br">Rangeslider:</label>
							<input type="range" name="range-8br" id="range-8br" min="0" max="100" value="100">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /demo-html -->

		<p>LTR fieldcontain mini in a RTL context.</p>

		<div data-demo-html="true">
			<div class="ui-rtl" dir="rtl">
				<div class="ui-ltr" dir="ltr">
					<form>
						<div class="ui-field-contain">
							<div data-role="rangeslider" data-mini="true">
								<label for="range-8a">Rangeslider:</label>
								<input type="range" name="range-8a" id="range-8a" min="0" max="100" value="0">
								<label for="range-8b">Rangeslider:</label>
								<input type="range" name="range-8b" id="range-8b" min="0" max="100" value="100">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /demo-html -->

	</div>
	<!-- /content -->

	<?php include('../jqm-navmenu.php'); ?>

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>

		<p>Copyright 2014 The jQuery Foundation</p>
	</div>
	<!-- /footer -->

	<?php include('../jqm-search.php'); ?>

</div>
<!-- /page -->

</body>
</html>
