<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RTL Control group - jQuery Mobile Demos</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
    <link rel="stylesheet" href="../_assets/css/jqm-demos.css">
    <script src="../../external/jquery/jquery.js"></script>
    <script src="../_assets/js/"></script>
    <script src="../../js/"></script>
    <style id="textinput-controlgroup">
        .controlgroup-textinput{
            padding-top:.22em;
            padding-bottom:.22em;
        }
    </style>
    <style id="textinput-controlgroup2">
        .controlgroup-textinput{
            padding-top:.22em;
            padding-bottom:.22em;
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

        <h1>RTL Control group</h1>

        <h2>Controlgroup vertical</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="controlgroup">
                    <a href="#" class="ui-btn ui-corner-all">No icon</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-left">Left</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-right">Right</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-top">Top</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-bottom">Bottom</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Icon only</a>
                </div>
            </div>
        </div><!--/demo-html -->

        <p>LTR control group within a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="controlgroup">
                        <a href="#" class="ui-btn ui-corner-all">No icon</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-left">Left</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-right">Right</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-top">Top</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-bottom">Bottom</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Icon only</a>
                    </div>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Controlgroup horizontal</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="controlgroup" data-type="horizontal">
                    <a href="#" class="ui-btn ui-corner-all">No icon</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-left">Left</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-right">Right</a>
                </div>
                <div data-role="controlgroup" data-type="horizontal">
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-top">Top</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-top">Top</a>
                </div>
                <div data-role="controlgroup" data-type="horizontal">
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-bottom">Bottom</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-bottom">Bottom</a>
                </div>
                <div data-role="controlgroup" data-type="horizontal">
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Icon only</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Icon only</a>
                </div>
                <form>
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <button data-icon="home">Home</button>
                        <button data-icon="search" data-iconpos="notext">Search</button>
                        <label for="select-more-1ar" class="ui-hidden-accessible">More</label>
                        <select name="select-more-1ar" id="select-more-1ar">
                            <option value="">Select&hellip;</option>
                            <option value="#">One</option>
                            <option value="#">Two</option>
                            <option value="#">Three</option>
                        </select>
                    </fieldset>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR horizontal control group in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="controlgroup" data-type="horizontal">
                        <a href="#" class="ui-btn ui-corner-all">No icon</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-left">Left</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-right">Right</a>
                    </div>
                    <div data-role="controlgroup" data-type="horizontal">
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-top">Top</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-top">Top</a>
                    </div>
                    <div data-role="controlgroup" data-type="horizontal">
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-bottom">Bottom</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-bottom">Bottom</a>
                    </div>
                    <div data-role="controlgroup" data-type="horizontal">
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Icon only</a>
                        <a href="#" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext">Icon only</a>
                    </div>
                    <form>
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <button data-icon="home">Home</button>
                            <button data-icon="search" data-iconpos="notext">Search</button>
                            <label for="select-more-1a" class="ui-hidden-accessible">More</label>
                            <select name="select-more-1a" id="select-more-1a">
                                <option value="">Select&hellip;</option>
                                <option value="#">One</option>
                                <option value="#">Two</option>
                                <option value="#">Three</option>
                            </select>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Radio button</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <fieldset data-role="controlgroup">
                        <legend>Vertical:</legend>
                        <input type="radio" name="radio-choice-v-2r" id="radio-choice-v-2ar" value="on" checked="checked">
                        <label for="radio-choice-v-2ar">One</label>
                        <input type="radio" name="radio-choice-v-2r" id="radio-choice-v-2br" value="off">
                        <label for="radio-choice-v-2br">Two</label>
                        <input type="radio" name="radio-choice-v-2r" id="radio-choice-v-2cr" value="other">
                        <label for="radio-choice-v-2cr">Three</label>
                    </fieldset>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR radio button in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <fieldset data-role="controlgroup">
                            <legend>Vertical:</legend>
                            <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2a" value="on" checked="checked">
                            <label for="radio-choice-v-2a">One</label>
                            <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2b" value="off">
                            <label for="radio-choice-v-2b">Two</label>
                            <input type="radio" name="radio-choice-v-2" id="radio-choice-v-2c" value="other">
                            <label for="radio-choice-v-2c">Three</label>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

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

        <p>LTR horizontal radio button in a RTL context.</p>

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

        <h2>Checkbox</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <fieldset data-role="controlgroup">
                        <legend>Vertical:</legend>
                        <input type="checkbox" name="checkbox-v-2ar" id="checkbox-v-2ar">
                        <label for="checkbox-v-2ar">One</label>
                        <input type="checkbox" name="checkbox-v-2br" id="checkbox-v-2br">
                        <label for="checkbox-v-2br">Two</label>
                        <input type="checkbox" name="checkbox-v-2cr" id="checkbox-v-2cr">
                        <label for="checkbox-v-2cr">Three</label>
                    </fieldset>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR checkbox in RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <fieldset data-role="controlgroup">
                            <legend>Vertical:</legend>
                            <input type="checkbox" name="checkbox-v-2a" id="checkbox-v-2a">
                            <label for="checkbox-v-2a">One</label>
                            <input type="checkbox" name="checkbox-v-2b" id="checkbox-v-2b">
                            <label for="checkbox-v-2b">Two</label>
                            <input type="checkbox" name="checkbox-v-2c" id="checkbox-v-2c">
                            <label for="checkbox-v-2c">Three</label>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

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

        <p>LTR horizontal checkbox in RTL context.</p>

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

        <h2>Selects</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <fieldset data-role="controlgroup">
                        <legend>Vertical:</legend>
                        <label for="select-v-2ar">Select A</label>
                        <select name="select-v-2ar" id="select-v-2ar">
                            <option value="#">One</option>
                            <option value="#">Two</option>
                            <option value="#">Three</option>
                        </select>
                        <label for="select-v-2br">Select B</label>
                        <select name="select-v-2br" id="select-v-2br">
                            <option value="#">One</option>
                            <option value="#">Two</option>
                            <option value="#">Three</option>
                        </select>
                        <label for="select-v-2cr">Select C</label>
                        <select name="select-v-2cr" id="select-v-2cr">
                            <option value="#">One</option>
                            <option value="#">Two</option>
                            <option value="#">Three</option>
                        </select>
                    </fieldset>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR selects in a RTL context</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <fieldset data-role="controlgroup">
                            <legend>Vertical:</legend>
                            <label for="select-v-2a">Select A</label>
                            <select name="select-v-2a" id="select-v-2a">
                                <option value="#">One</option>
                                <option value="#">Two</option>
                                <option value="#">Three</option>
                            </select>
                            <label for="select-v-2b">Select B</label>
                            <select name="select-v-2b" id="select-v-2b">
                                <option value="#">One</option>
                                <option value="#">Two</option>
                                <option value="#">Three</option>
                            </select>
                            <label for="select-v-2c">Select C</label>
                            <select name="select-v-2c" id="select-v-2c">
                                <option value="#">One</option>
                                <option value="#">Two</option>
                                <option value="#">Three</option>
                            </select>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Textinputs</h2>
        <p>While textinputs are not officially supported by the controlgroup they can be made to work with some simple css.</p>
        <p>To make this work you will need to add one css rule and use textinput's wrapperClass option to set two classes on the textinput wrapper.</p>
        <div data-demo-html="true" data-demo-css="#textinput-controlgroup">
            <div class="ui-rtl" dir="rtl">
                <label for="currency-controlgroupr">Value</label>
                <div data-role="controlgroup" data-type="horizontal">
                    <select>
                        <option>$</option>
                        <option>€</option>
                        <option>£</option>
                        <option>¥</option>
                        <option>?</option>
                        <option>?</option>
                    </select>
                    <input id="currency-controlgroupr" type="text" data-wrapper-class="controlgroup-textinput ui-btn">
                    <button>.00</button>
                </div>
                <label for="search-control-groupr">Search</label>
                <div data-role="controlgroup" data-type="horizontal">
                    <input type="text" id="search-control-groupr" data-wrapper-class="controlgroup-textinput ui-btn">
                    <button>Submit</button>
                    <button>Reset</button>
                </div>
            </div>
        </div>

        <p>The same mark up as above, but as LTR in a RTL context.</p>

        <div data-demo-html="true" data-demo-css="#textinput-controlgroup2">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <label for="currency-controlgroup">Value</label>
                    <div data-role="controlgroup" data-type="horizontal">
                        <select>
                            <option>$</option>
                            <option>€</option>
                            <option>£</option>
                            <option>¥</option>
                            <option>?</option>
                            <option>?</option>
                        </select>
                        <input id="currency-controlgroup" type="text" data-wrapper-class="controlgroup-textinput ui-btn">
                        <button>.00</button>
                    </div>
                    <label for="search-control-group">Search</label>
                    <div data-role="controlgroup" data-type="horizontal">
                        <input type="text" id="search-control-group" data-wrapper-class="controlgroup-textinput ui-btn">
                        <button>Submit</button>
                        <button>Reset</button>
                    </div>
                </div>
            </div>
        </div>

        <h2>Pre-rendered markup</h2>
        <p>You can supply pre-rendered markup for any controlgroup to save startup time. The example below illustrates the markup you have to provide for a pre-rendered controlgroup. Note that the widgets inside the controlgroup need not necessarily be pre-rendered.</p>
        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="controlgroup" data-enhanced="true" class="ui-controlgroup ui-controlgroup-vertical ui-group-theme-b ui-corner-all">
                    <div role="heading" class="ui-controlgroup-label">
                        <legend>Pre-rendered controlgroup:</legend>
                    </div>
                    <div class="ui-controlgroup-controls ui-shadow">
                        <label for="pre-rendered-cb-1r" class="ui-first-child">Checkbox 1</label>
                        <input type="checkbox" id="pre-rendered-cb-1r" name="pre-rendered-cb-1r" value="1">
                        <label for="pre-rendered-cb-2r" class="ui-last-child">Checkbox 2</label>
                        <input type="checkbox" id="pre-rendered-cb-2r" name="pre-rendered-cb-2r" value="2">
                    </div>
                </div>
            </div>
        </div>

        <p>LTR pre-rendered markup in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="controlgroup" data-enhanced="true" class="ui-controlgroup ui-controlgroup-vertical ui-group-theme-b ui-corner-all">
                        <div role="heading" class="ui-controlgroup-label">
                            <legend>Pre-rendered controlgroup:</legend>
                        </div>
                        <div class="ui-controlgroup-controls ui-shadow">
                            <label for="pre-rendered-cb-1" class="ui-first-child">Checkbox 1</label>
                            <input type="checkbox" id="pre-rendered-cb-1" name="pre-rendered-cb-1" value="1">
                            <label for="pre-rendered-cb-2" class="ui-last-child">Checkbox 2</label>
                            <input type="checkbox" id="pre-rendered-cb-2" name="pre-rendered-cb-2" value="2">
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