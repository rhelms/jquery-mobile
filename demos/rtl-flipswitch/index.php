<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RTL Flip switch - jQuery Mobile Demos</title>
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

        <h1>RTL Flip switch</h1>

        <h2>Basic checkbox switch</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <label for="flip-checkbox-1r">Flip toggle switch checkbox:</label>
                    <input type="checkbox" data-role="flipswitch" name="flip-checkbox-1r" id="flip-checkbox-1r">
                </form>
            </div>
        </div><!-- /demo-html -->

        <p>LTR flip switch in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <label for="flip-checkbox-1">Flip toggle switch checkbox:</label>
                        <input type="checkbox" data-role="flipswitch" name="flip-checkbox-1" id="flip-checkbox-1">
                    </form>
                </div>
            </div>
        </div><!-- /demo-html -->

        <h2>Fieldcontain</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <div class="ui-field-contain">
                        <label for="flip-6r">Flip toggle switch:</label>
                        <select name="flip-6r" id="flip-6r" data-role="flipswitch">
                            <option value="off">Off</option>
                            <option value="on">On</option>
                        </select>
                    </div>
                </form>
            </div>
        </div><!-- /demo-html -->

        <p>LTR fieldcontain flip switch in RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <div class="ui-field-contain">
                            <label for="flip-6">Flip toggle switch:</label>
                            <select name="flip-6" id="flip-6" data-role="flipswitch">
                                <option value="off">Off</option>
                                <option value="on">On</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /demo-html -->

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