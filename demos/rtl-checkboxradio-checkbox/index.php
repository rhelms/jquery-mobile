<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RTL Checkbox - jQuery Mobile Demos</title>
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

        <h1>RTL Checkbox</h1>

        <h2>Checkbox</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <label>
                        <input type="checkbox" name="checkbox-0">Check me
                    </label>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR Checkbox in a RTL context</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <label>
                            <input type="checkbox" name="checkbox-1">Check me
                        </label>
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Horizontal checkbox group</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <legend>Horizontal:</legend>
                        <input type="checkbox" name="checkbox-h-2ar" id="checkbox-h-2ar">
                        <label for="checkbox-h-2ar">One</label>
                        <input type="checkbox" name="checkbox-h-2br" id="checkbox-h-2br">
                        <label for="checkbox-h-2br">Two</label>
                        <input type="checkbox" name="checkbox-h-2cr" id="checkbox-h-2cr">
                        <label for="checkbox-h-2cr">Three</label>
                    </fieldset>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR horizontal checkbox group in a RTL context</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <legend>Horizontal:</legend>
                            <input type="checkbox" name="checkbox-h-2a" id="checkbox-h-2a">
                            <label for="checkbox-h-2a">One</label>
                            <input type="checkbox" name="checkbox-h-2b" id="checkbox-h-2b">
                            <label for="checkbox-h-2b">Two</label>
                            <input type="checkbox" name="checkbox-h-2c" id="checkbox-h-2c">
                            <label for="checkbox-h-2c">Three</label>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Icon position</h2>

        <p>To mimick the swapping of the icon position to the otherside in RTL, add the <code>data-iconpos="left"</code>
            attributeto the fieldset.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <fieldset data-role="controlgroup" data-iconpos="left">
                        <legend>Icon left:</legend>
                        <input type="checkbox" name="checkbox-h-6ar" id="checkbox-h-6ar">
                        <label for="checkbox-h-6ar">One</label>
                        <input type="checkbox" name="checkbox-h-6br" id="checkbox-h-6br">
                        <label for="checkbox-h-6br">Two</label>
                        <input type="checkbox" name="checkbox-h-6cr" id="checkbox-h-6cr">
                        <label for="checkbox-h-6cr">Three</label>
                    </fieldset>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR icon position with <code>data-iconpos="right"</code> in RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="rtl">
                    <form>
                        <fieldset data-role="controlgroup" data-iconpos="right">
                            <legend>Icon left:</legend>
                            <input type="checkbox" name="checkbox-h-6a" id="checkbox-h-6a">
                            <label for="checkbox-h-6a">One</label>
                            <input type="checkbox" name="checkbox-h-6b" id="checkbox-h-6b">
                            <label for="checkbox-h-6b">Two</label>
                            <input type="checkbox" name="checkbox-h-6c" id="checkbox-h-6c">
                            <label for="checkbox-h-6c">Three</label>
                        </fieldset>
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