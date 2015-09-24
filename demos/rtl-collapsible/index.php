<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RTL Collapsible - jQuery Mobile Demos</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
    <link rel="stylesheet" href="../_assets/css/jqm-demos.css">
    <script src="../../external/jquery/jquery.js"></script>
    <script src="../_assets/js/"></script>
    <script src="../../js/"></script>
    <style id="negateDoubleBorder">
        #demo-borders .ui-collapsible-heading .ui-btn { border-top-width: 1px !important; }
    </style>
    <style id="negateDoubleBorder2">
        #demo-borders2 .ui-collapsible-heading .ui-btn { border-top-width: 1px !important; }
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

        <h1>RTL Collapsible</h1>

        <h2>Basic collapsible</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="collapsible">
                    <h4>Heading</h4>
                    <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
                </div>
            </div>
        </div><!--/demo-html -->

        <p>LTR collapsible within a RTL context</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="collapsible">
                        <h4>Heading</h4>
                        <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
                    </div>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Expanded</h2>

        <p>To expand the content when the page loads, add the <code>data-collapsed="false"</code> attribute to the wrapper.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="collapsible" data-collapsed="false">
                    <h4>Heading</h4>
                    <ul data-role="listview">
                        <li><a href="#">List item 1</a></li>
                        <li><a href="#">List item 2</a></li>
                        <li><a href="#">List item 3</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/demo-html -->

        <p>LTR expanded collapsible within a RTL context</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="collapsible" data-collapsed="false">
                        <h4>Heading</h4>
                        <ul data-role="listview">
                            <li><a href="#">List item 1</a></li>
                            <li><a href="#">List item 2</a></li>
                            <li><a href="#">List item 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/demo-html -->


        <h2>Icon positioning</h2>

        <p>The default icon positioning of collapsible headings can be overridden by using the <code>data-iconpos</code> attribute. In the below case, <code>data-iconpos="left"</code>.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="collapsible" data-iconpos="left">
                    <h3>I'm a header</h3>
                    <p><code>data-iconpos="left"</code></p>
                </div>
            </div>
        </div>

        <p>LTR collapsible in a RTL context, using <code>data-iconpos="right"</code>.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="collapsible" data-iconpos="right">
                        <h3>I'm a header</h3>
                        <p><code>data-iconpos="right"</code></p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Legend</h2>

        <p>For forms, use a <code>fieldset</code> and <code>legend</code> for the collapsible.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <form>
                    <fieldset data-role="collapsible">
                        <legend>Legend</legend>

                        <label for="textinput-f">Text Input:</label>
                        <input type="text" name="textinput-f" id="textinput-f" placeholder="Text input" value="">

                        <div data-role="controlgroup">
                            <input type="checkbox" name="checkbox-1-ar" id="checkbox-1-ar">
                            <label for="checkbox-1-ar">One</label>
                            <input type="checkbox" name="checkbox-2-ar" id="checkbox-2-ar">
                            <label for="checkbox-2-ar">Two</label>
                            <input type="checkbox" name="checkbox-3-ar" id="checkbox-3-ar">
                            <label for="checkbox-3-ar">Three</label>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/demo-html -->

        <p>LTR collapsible with legend in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <form>
                        <fieldset data-role="collapsible">
                            <legend>Legend</legend>

                            <label for="textinput-f">Text Input:</label>
                            <input type="text" name="textinput-f" id="textinput-f" placeholder="Text input" value="">

                            <div data-role="controlgroup">
                                <input type="checkbox" name="checkbox-1-a" id="checkbox-1-a">
                                <label for="checkbox-1-a">One</label>
                                <input type="checkbox" name="checkbox-2-a" id="checkbox-2-a">
                                <label for="checkbox-2-a">Two</label>
                                <input type="checkbox" name="checkbox-3-a" id="checkbox-3-a">
                                <label for="checkbox-3-a">Three</label>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Non-inset collapsible</h2>

        <p>By default collapsibles have an inset appearance. To make them full width without corner styling add the <code>data-inset="false"</code> attribute to the element.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="collapsible" data-inset="false">
                    <h4>Heading</h4>
                    <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
                </div>
            </div>
        </div><!--/demo-html -->

        <p>LTR non-inset collapsible within a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="collapsible" data-inset="false">
                        <h4>Heading</h4>
                        <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
                    </div>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Set of individual collapsibles</h2>

        <p>This is an example of a series of individual collapsibles. The difference with a "Collapsible Set" is that multiple collapsible rows can be open at once.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="collapsible" data-inset="false">
                    <h3>Pets</h3>
                    <ul data-role="listview">
                        <li><a href="#">Canary</a></li>
                        <li><a href="#">Cat</a></li>
                        <li><a href="#">Dog</a></li>
                        <li><a href="#">Gerbil</a></li>
                        <li><a href="#">Iguana</a></li>
                        <li><a href="#">Mouse</a></li>
                    </ul>
                </div><!-- /collapsible -->
                <div data-role="collapsible" data-inset="false">
                    <h3>Farm animals</h3>
                    <ul data-role="listview">
                        <li><a href="#">Chicken</a></li>
                        <li><a href="#">Cow</a></li>
                        <li><a href="#">Duck</a></li>
                        <li><a href="#">Horse</a></li>
                        <li><a href="#">Pig</a></li>
                        <li><a href="#">Sheep</a></li>
                    </ul>
                </div><!-- /collapsible -->
                <div data-role="collapsible" data-inset="false">
                    <h3>Wild Animals</h3>
                    <ul data-role="listview">
                        <li><a href="#">Aardvark</a></li>
                        <li><a href="#">Alligator</a></li>
                        <li><a href="#">Ant</a></li>
                        <li><a href="#">Bear</a></li>
                        <li><a href="#">Beaver</a></li>
                        <li><a href="#">Cougar</a></li>
                        <li><a href="#">Dingo</a></li>
                    </ul>
                </div><!-- /collapsible -->
            </div>
        </div><!--/demo-html -->

        <p>LTR series of collapsibles within a RTL context</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="collapsible" data-inset="false">
                        <h3>Pets</h3>
                        <ul data-role="listview">
                            <li><a href="#">Canary</a></li>
                            <li><a href="#">Cat</a></li>
                            <li><a href="#">Dog</a></li>
                            <li><a href="#">Gerbil</a></li>
                            <li><a href="#">Iguana</a></li>
                            <li><a href="#">Mouse</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>Farm animals</h3>
                        <ul data-role="listview">
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Cow</a></li>
                            <li><a href="#">Duck</a></li>
                            <li><a href="#">Horse</a></li>
                            <li><a href="#">Pig</a></li>
                            <li><a href="#">Sheep</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>Wild Animals</h3>
                        <ul data-role="listview">
                            <li><a href="#">Aardvark</a></li>
                            <li><a href="#">Alligator</a></li>
                            <li><a href="#">Ant</a></li>
                            <li><a href="#">Bear</a></li>
                            <li><a href="#">Beaver</a></li>
                            <li><a href="#">Cougar</a></li>
                            <li><a href="#">Dingo</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                </div>
            </div>
        </div><!--/demo-html -->

        <p>To avoid "double" borders the framework removes the top border of collapsibles that are immediately preceded by another collapsible. Here we show how to negate this with custom CSS.</p>

        <div data-demo-html="true" data-demo-css="#negateDoubleBorder">
            <div class="ui-rtl" dir="rtl">
                <div id="demo-borders">
                    <div data-role="collapsible" data-inset="false">
                        <h3>Pets</h3>
                        <ul data-role="listview">
                            <li><a href="#">Canary</a></li>
                            <li><a href="#">Cat</a></li>
                            <li><a href="#">Dog</a></li>
                            <li><a href="#">Gerbil</a></li>
                            <li><a href="#">Iguana</a></li>
                            <li><a href="#">Mouse</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                    <div data-role="collapsible" data-inset="false">
                        <h3>Farm animals</h3>
                        <ul data-role="listview">
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Cow</a></li>
                            <li><a href="#">Duck</a></li>
                            <li><a href="#">Horse</a></li>
                            <li><a href="#">Pig</a></li>
                            <li><a href="#">Sheep</a></li>
                        </ul>
                    </div><!-- /collapsible -->
                </div>
            </div>
        </div><!--/demo-html -->

        <p>LTR example of avoiding "double" borders with custom CSS within a RTL context.</p>

        <div data-demo-html="true" data-demo-css="#negateDoubleBorder2">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div id="demo-borders2">
                        <div data-role="collapsible" data-inset="false">
                            <h3>Pets</h3>
                            <ul data-role="listview">
                                <li><a href="#">Canary</a></li>
                                <li><a href="#">Cat</a></li>
                                <li><a href="#">Dog</a></li>
                                <li><a href="#">Gerbil</a></li>
                                <li><a href="#">Iguana</a></li>
                                <li><a href="#">Mouse</a></li>
                            </ul>
                        </div><!-- /collapsible -->
                        <div data-role="collapsible" data-inset="false">
                            <h3>Farm animals</h3>
                            <ul data-role="listview">
                                <li><a href="#">Chicken</a></li>
                                <li><a href="#">Cow</a></li>
                                <li><a href="#">Duck</a></li>
                                <li><a href="#">Horse</a></li>
                                <li><a href="#">Pig</a></li>
                                <li><a href="#">Sheep</a></li>
                            </ul>
                        </div><!-- /collapsible -->
                    </div>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Pre-rendered markup</h2>
        <p>You can supply pre-rendered markup for any collapsible to save startup time. The example below illustrates the markup you have to provide for a pre-rendered collapsible.</p>
        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="collapsible" data-enhanced="true" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
                    <h4 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
                        <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-icon-plus">
                            Heading
                            <div class="ui-collapsible-heading-status"> click to expand contents</div>
                        </a>
                    </h4>
                    <div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true">
                        <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
                    </div>
                </div>
            </div>
        </div><!--/demo-html -->

        <p>LTR pre-rendered markup within a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="collapsible" data-enhanced="true" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
                        <h4 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
                            <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-icon-plus">
                                Heading
                                <div class="ui-collapsible-heading-status"> click to expand contents</div>
                            </a>
                        </h4>
                        <div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true">
                            <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
                        </div>
                    </div>
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