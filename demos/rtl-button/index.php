<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RTL Button - jQuery Mobile Demos</title>
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

        <h1>Right To Left Button</h1>

        <h2>Buttons with Icons</h2>

        <p>Buttons using the Enhanced mark up will need to provide the correct icon position class.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <input type="button" data-icon="delete" value="Input">
                    <div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-right">
                        Enhanced
                        <input type="button" data-enhanced="true" value="Enhanced">
                    </div>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR Buttons nested in a RTL context</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <input type="button" data-icon="delete" value="Input">
                        <div class="ui-input-btn ui-btn ui-icon-delete ui-btn-icon-left">
                            Enhanced
                            <input type="button" data-enhanced="true" value="Enhanced">
                        </div>
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

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