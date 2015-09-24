<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RTL Radio buttons - jQuery Mobile Demos</title>
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

        <h1>RTL Radio buttons</h1>

        <h2>Basic markup</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <label>
                        <input type="radio" name="radio-choice-0r" id="radio-choice-0ar">One
                    </label>

                    <label for="radio-choice-0br">Two</label>
                    <input type="radio" name="radio-choice-0r" id="radio-choice-0br" class="custom">
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR radio buttons in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <label>
                            <input type="radio" name="radio-choice-0" id="radio-choice-0a">One
                        </label>

                        <label for="radio-choice-0b">Two</label>
                        <input type="radio" name="radio-choice-0" id="radio-choice-0b" class="custom">
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Horizontal group</h2>

        <p>To make a horizontal button set, add the <code> data-type="horizontal"</code> to the <code>fieldset</code>.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <legend>Horizontal:</legend>
                        <input type="radio" name="radio-choice-h-2r" id="radio-choice-h-2ar" value="on" checked="checked">
                        <label for="radio-choice-h-2ar">One</label>
                        <input type="radio" name="radio-choice-h-2r" id="radio-choice-h-2br" value="off">
                        <label for="radio-choice-h-2br">Two</label>
                        <input type="radio" name="radio-choice-h-2r" id="radio-choice-h-2cr" value="other">
                        <label for="radio-choice-h-2cr">Three</label>
                    </fieldset>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR horizontal group within a RTL context</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <legend>Horizontal:</legend>
                            <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2a" value="on" checked="checked">
                            <label for="radio-choice-h-2a">One</label>
                            <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2b" value="off">
                            <label for="radio-choice-h-2b">Two</label>
                            <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2c" value="other">
                            <label for="radio-choice-h-2c">Three</label>
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
                        <legend>Vertical, icon left:</legend>
                        <input type="radio" name="radio-choice-w-6r" id="radio-choice-w-6ar" value="on" checked="checked">
                        <label for="radio-choice-w-6ar">One</label>
                        <input type="radio" name="radio-choice-w-6r" id="radio-choice-w-6br" value="off">
                        <label for="radio-choice-w-6br">Two</label>
                        <input type="radio" name="radio-choice-w-6r" id="radio-choice-w-6cr" value="other">
                        <label for="radio-choice-w-6cr">Three</label>
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
                            <legend>Vertical, icon right:</legend>
                            <input type="radio" name="radio-choice-w-6" id="radio-choice-w-6a" value="on" checked="checked">
                            <label for="radio-choice-w-6a">One</label>
                            <input type="radio" name="radio-choice-w-6" id="radio-choice-w-6b" value="off">
                            <label for="radio-choice-w-6b">Two</label>
                            <input type="radio" name="radio-choice-w-6" id="radio-choice-w-6c" value="other">
                            <label for="radio-choice-w-6c">Three</label>
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