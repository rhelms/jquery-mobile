<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RTL Navbar - jQuery Mobile Demos</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
    <link rel="stylesheet" href="../_assets/css/jqm-demos.css">
    <script src="../../external/jquery/jquery.js"></script>
    <script src="../_assets/js/"></script>
    <script src="../../js/"></script>
    <style>
        .nav-glyphish-example .ui-btn {
            padding-top: 40px !important;
        }

        .nav-glyphish-example .ui-btn:after {
            width: 30px !important;
            height: 30px !important;
            margin-left: -15px !important;
            box-shadow: none !important;
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            -webkit-border-radius: 0 !important;
            border-radius: 0 !important;
        }

        #chat:after {
            background: url("../_assets/img/glyphish-icons/09-chat2.png") 50% 50% no-repeat;
            background-size: 24px 22px;
        }

        #email:after {
            background: url("../_assets/img/glyphish-icons/18-envelope.png") 50% 50% no-repeat;
            background-size: 24px 16px;
        }

        #login:after {
            background: url("../_assets/img/glyphish-icons/30-key.png") 50% 50% no-repeat;
            background-size: 12px 26px;
        }

        #beer:after {
            background: url("../_assets/img/glyphish-icons/88-beermug.png") 50% 50% no-repeat;
            background-size: 22px 27px;
        }

        #coffee:after {
            background: url("../_assets/img/glyphish-icons/100-coffee.png") 50% 50% no-repeat;
            background-size: 20px 24px;
        }

        #skull:after {
            background: url("../_assets/img/glyphish-icons/21-skull.png") 50% 50% no-repeat;
            background-size: 22px 24px;
        }
    </style>
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
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content">

        <h1>RTL Navbar</h1>

        <p>jQuery Mobile has a very basic navbar widget that is useful for providing up to 5 buttons with optional icons
            in a bar.</p>

        <h2>Navbar basics</h2>

        <p>A navbar is coded as an unordered list of links wrapped in a container element that has the <code>
                data-role="navbar"</code> attribute. When a link in the navbar is clicked it gets the active (selected)
            state. The <code>ui-btn-active</code> class is first removed from all anchors in the navbar before it is
            added to the activated link. If this is a link to another page, the class will be removed again after the
            transition has completed.</p>

        <p>To set an item to the active state, add <code>class="ui-btn-active"</code> to an anchor in the markup.
            Additionally add a class of <code>ui-state-persist</code> to make the framework restore the active state
            each time the page is shown while it exists in the DOM.</p>

        <p>Navbars with 1 item will render as 100% wide.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#" class="ui-btn-active">One</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>
        </div><!--/demo-html -->

        <p>The navbar items are set to divide the space evenly so in this case, each button is 1/2 the width of the
            browser window:</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#" class="ui-btn-active">One</a></li>
                        <li><a href="#">Two</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>
        </div><!--/demo-html -->

        <p>Adding a third item will automatically make each button 1/3 the width of the browser window:</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#" class="ui-btn-active">One</a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>
        </div><!--/demo-html -->

        <p>Adding a fourth more item will automatically make each button 1/4 the width of the browser window:</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="navbar" data-grid="c">
                    <ul>
                        <li><a href="#" class="ui-btn-active">One</a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                        <li><a href="#">Four</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>
        </div><!--/demo-html -->

        <p>The navbar maxes out with 5 items, each 1/5 the width of the browser window:</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="navbar" data-grid="d">
                    <ul>
                        <li><a href="#" class="ui-btn-active">One</a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                        <li><a href="#">Four</a></li>
                        <li><a href="#">Five</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>
        </div><!--/demo-html -->

        <p>These are the same examples as above, but as LTR within a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="navbar">
                        <ul>
                            <li><a href="#" class="ui-btn-active">One</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div>
            </div>
        </div><!--/demo-html -->

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="navbar">
                        <ul>
                            <li><a href="#" class="ui-btn-active">One</a></li>
                            <li><a href="#">Two</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div>
            </div>
        </div><!--/demo-html -->

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="navbar">
                        <ul>
                            <li><a href="#" class="ui-btn-active">One</a></li>
                            <li><a href="#">Two</a></li>
                            <li><a href="#">Three</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div>
            </div>
        </div><!--/demo-html -->

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="navbar" data-grid="c">
                        <ul>
                            <li><a href="#" class="ui-btn-active">One</a></li>
                            <li><a href="#">Two</a></li>
                            <li><a href="#">Three</a></li>
                            <li><a href="#">Four</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div>
            </div>
        </div><!--/demo-html -->

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="navbar" data-grid="d">
                        <ul>
                            <li><a href="#" class="ui-btn-active">One</a></li>
                            <li><a href="#">Two</a></li>
                            <li><a href="#">Three</a></li>
                            <li><a href="#">Four</a></li>
                            <li><a href="#">Five</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Multi-row</h2>

        <p>If more than 5 items are added, the navbar will simply wrap to multiple lines of two across:</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#" class="ui-btn-active">One</a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                        <li><a href="#">Four</a></li>
                        <li><a href="#">Five</a></li>
                        <li><a href="#">Six</a></li>
                        <li><a href="#">Seven</a></li>
                        <li><a href="#">Eight</a></li>
                        <li><a href="#">Nine</a></li>
                        <li><a href="#">Ten</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>
        </div><!--/demo-html -->

        <p>LTR multi-row within a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="navbar">
                        <ul>
                            <li><a href="#" class="ui-btn-active">One</a></li>
                            <li><a href="#">Two</a></li>
                            <li><a href="#">Three</a></li>
                            <li><a href="#">Four</a></li>
                            <li><a href="#">Five</a></li>
                            <li><a href="#">Six</a></li>
                            <li><a href="#">Seven</a></li>
                            <li><a href="#">Eight</a></li>
                            <li><a href="#">Nine</a></li>
                            <li><a href="#">Ten</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div>
            </div>
        </div><!--/demo-html -->


        <h2>Navbars in headers</h2>

        <p>If you want to add a navbar to the top of the page, you can still have a page title and buttons. Just add the
            navbar container inside the header block, right after the title and buttons in the source order.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="header" style="overflow:hidden;">
                    <h1>I'm a header</h1>
                    <a href="#" data-icon="gear" class="ui-btn-left">Options</a>

                    <div data-role="navbar">
                        <ul>
                            <li><a href="#">One</a></li>
                            <li><a href="#">Two</a></li>
                            <li><a href="#">Three</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div><!-- /header -->
            </div>
        </div><!--/demo-html -->

        <p>LTR nav bar in a header, in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="header" style="overflow:hidden;">
                        <h1>I'm a header</h1>
                        <a href="#" data-icon="gear" class="ui-btn-right">Options</a>

                        <div data-role="navbar">
                            <ul>
                                <li><a href="#">One</a></li>
                                <li><a href="#">Two</a></li>
                                <li><a href="#">Three</a></li>
                            </ul>
                        </div><!-- /navbar -->
                    </div><!-- /header -->
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Navbars in footers</h2>

        <p>If you want to add a navbar to the bottom of the page so it acts more like a tab bar, simply wrap the navbar
            in a container with a <code>data-role="footer"</code></p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div data-role="footer" style="overflow:hidden;">
                    <h4 style="text-align:center;">I'm the footer</h4>

                    <div data-role="navbar">
                        <ul>
                            <li><a href="#">One</a></li>
                            <li><a href="#">Two</a></li>
                            <li><a href="#">Three</a></li>
                        </ul>
                    </div><!-- /navbar -->
                </div><!-- /footer -->
            </div>
        </div><!--/demo-html -->

        <p>LTR navbar in a footer, in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <div data-role="footer" style="overflow:hidden;">
                        <h4 style="text-align:center;">I'm the footer</h4>

                        <div data-role="navbar">
                            <ul>
                                <li><a href="#">One</a></li>
                                <li><a href="#">Two</a></li>
                                <li><a href="#">Three</a></li>
                            </ul>
                        </div><!-- /navbar -->
                    </div><!-- /footer -->
                </div>
            </div>
        </div><!--/demo-html -->

    </div><!-- /content -->

    <?php include('../jqm-navmenu.php'); ?>

    <div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
        <p>jQuery Mobile Demos version <span class="jqm-version"></span></p>

        <p>Copyright 2014 The jQuery Foundation</p>
    </div><!-- /footer -->

    <?php include('../jqm-search.php'); ?>

</div><!-- /page -->

</body>
</html>
