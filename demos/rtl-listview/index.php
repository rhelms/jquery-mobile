<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RTL Listview - jQuery Mobile Demos</title>
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

        <h1>RTL Listview</h1>

        <h2>Read-only, unordered</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <ul data-role="listview">
                    <li>Acura</li>
                    <li>Audi</li>
                    <li>BMW</li>
                    <li>Cadillac</li>
                    <li>Ferrari</li>
                </ul>
            </div>
        </div><!--/demo-html -->

        <p>LTR listview within a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <ul data-role="listview">
                        <li>Acura</li>
                        <li>Audi</li>
                        <li>BMW</li>
                        <li>Cadillac</li>
                        <li>Ferrari</li>
                    </ul>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Read-only, ordered</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <ol data-role="listview">
                    <li>Acura</li>
                    <li>Audi</li>
                    <li>BMW</li>
                    <li>Cadillac</li>
                    <li>Ferrari</li>
                </ol>
            </div>
        </div><!--/demo-html -->

        <p>LTR ordered listview in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <ol data-role="listview">
                        <li>Acura</li>
                        <li>Audi</li>
                        <li>BMW</li>
                        <li>Cadillac</li>
                        <li>Ferrari</li>
                    </ol>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Linked</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <ul data-role="listview">
                    <li><a href="#">Acura</a></li>
                    <li><a href="#">Audi</a></li>
                    <li><a href="#">BMW</a></li>
                    <li><a href="#">Cadillac</a></li>
                    <li><a href="#">Ferrari</a></li>
                </ul>
            </div>
        </div><!--/demo-html -->

        <p>LTR linked listview styled as button in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <ul data-role="listview">
                        <li><a href="#">Acura</a></li>
                        <li><a href="#">Audi</a></li>
                        <li><a href="#">BMW</a></li>
                        <li><a href="#">Cadillac</a></li>
                        <li><a href="#">Ferrari</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Inset</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <ul data-role="listview" data-inset="true">
                    <li><a href="#">Acura</a></li>
                    <li><a href="#">Audi</a></li>
                    <li><a href="#">BMW</a></li>
                    <li><a href="#">Cadillac</a></li>
                    <li><a href="#">Ferrari</a></li>
                </ul>
            </div>
        </div><!--/demo-html -->

        <p>LTR inset listview in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <ul data-role="listview" data-inset="true">
                        <li><a href="#">Acura</a></li>
                        <li><a href="#">Audi</a></li>
                        <li><a href="#">BMW</a></li>
                        <li><a href="#">Cadillac</a></li>
                        <li><a href="#">Ferrari</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Filter</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <ul data-role="listview" data-filter="true" data-filter-placeholder="Search fruits..." data-inset="true">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Banana</a></li>
                    <li><a href="#">Cherry</a></li>
                    <li><a href="#">Cranberry</a></li>
                    <li><a href="#">Grape</a></li>
                    <li><a href="#">Orange</a></li>
                </ul>
            </div>
        </div><!--/demo-html -->

        <p>LTR filter listview in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <ul data-role="listview" data-filter="true" data-filter-placeholder="Search fruits..." data-inset="true">
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Banana</a></li>
                        <li><a href="#">Cherry</a></li>
                        <li><a href="#">Cranberry</a></li>
                        <li><a href="#">Grape</a></li>
                        <li><a href="#">Orange</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>List dividers</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <ul data-role="listview" data-inset="true" data-divider-theme="a">
                    <li data-role="list-divider">Mail</li>
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Outbox</a></li>
                    <li data-role="list-divider">Contacts</li>
                    <li><a href="#">Friends</a></li>
                    <li><a href="#">Work</a></li>
                </ul>
            </div>
        </div><!--/demo-html -->

        <p>LTR list dividers in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <ul data-role="listview" data-inset="true" data-divider-theme="a">
                        <li data-role="list-divider">Mail</li>
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Outbox</a></li>
                        <li data-role="list-divider">Contacts</li>
                        <li><a href="#">Friends</a></li>
                        <li><a href="#">Work</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Autodividers</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">
                    <li><a href="index.php">Adam Kinkaid</a></li>
                    <li><a href="index.php">Alex Wickerham</a></li>
                    <li><a href="index.php">Avery Johnson</a></li>
                    <li><a href="index.php">Bob Cabot</a></li>
                    <li><a href="index.php">Caleb Booth</a></li>
                    <li><a href="index.php">Christopher Adams</a></li>
                    <li><a href="index.php">Culver James</a></li>
                </ul>
            </div>
        </div><!--/demo-html -->

        <p>LTR autodividers in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">
                        <li><a href="index.php">Adam Kinkaid</a></li>
                        <li><a href="index.php">Alex Wickerham</a></li>
                        <li><a href="index.php">Avery Johnson</a></li>
                        <li><a href="index.php">Bob Cabot</a></li>
                        <li><a href="index.php">Caleb Booth</a></li>
                        <li><a href="index.php">Christopher Adams</a></li>
                        <li><a href="index.php">Culver James</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/demo-html -->

        <h2>Count bubbles</h2>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <ul data-role="listview" data-count-theme="b" data-inset="true">
                    <li><a href="#">Inbox <span class="ui-li-count">12</span></a></li>
                    <li><a href="#">Outbox <span class="ui-li-count">0</span></a></li>
                    <li><a href="#">Drafts <span class="ui-li-count">4</span></a></li>
                    <li><a href="#">Sent <span class="ui-li-count">328</span></a></li>
                    <li><a href="#">Trash <span class="ui-li-count">62</span></a></li>
                </ul>
            </div>
        </div><!--/demo-html -->

        <p>LTR count bubbles in a RTL context.</p>

        <div data-demo-html="true">
            <div class="ui-rtl" dir="rtl">
                <div class="ui-ltr" dir="ltr">
                    <ul data-role="listview" data-count-theme="b" data-inset="true">
                        <li><a href="#">Inbox <span class="ui-li-count">12</span></a></li>
                        <li><a href="#">Outbox <span class="ui-li-count">0</span></a></li>
                        <li><a href="#">Drafts <span class="ui-li-count">4</span></a></li>
                        <li><a href="#">Sent <span class="ui-li-count">328</span></a></li>
                        <li><a href="#">Trash <span class="ui-li-count">62</span></a></li>
                    </ul>
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