
<body>
<!-- BEGIN WRAP -->
<div id="wrap">


<!-- BEGIN TOP BAR -->
<div id="top">
    <!-- .navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html">Metis</a>
                <!-- .topnav -->
                <div class="btn-toolbar topnav">
                    <div class="btn-group">
                        <a id="changeSidebarPos" class="btn btn-success" rel="tooltip"
                           data-original-title="Show / Hide Sidebar" data-placement="bottom">
                            <i class="icon-resize-horizontal"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" rel="tooltip" data-original-title="E-mail" data-placement="bottom">
                            <i class="icon-envelope"></i>
                            <span class="label label-warning">5</span>
                        </a>
                        <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Messages"
                           data-placement="bottom">
                            <i class="icon-comments"></i>
                            <span class="label label-important">4</span>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Document"
                           data-placement="bottom">
                            <i class="icon-file"></i>
                        </a>
                        <a href="#helpModal" class="btn btn-inverse" rel="tooltip" data-placement="bottom"
                           data-original-title="Help" data-toggle="modal">
                            <i class="icon-question-sign"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-inverse" data-placement="bottom" data-original-title="Logout" rel="tooltip"
                           href="login.html"><i class="icon-off"></i></a></div>
                </div>
                <!-- /.topnav -->
                <div class="nav-collapse collapse">
                    <!-- .nav -->
                    <ul class="nav">
                        <li class="active"><a href="index.html">Dashboard</a></li>
                        <li><a href="table.html">Tables</a></li>
                        <li><a href="file.html">File Manager</a></li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                Form Elements <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="form-general.html">General</a></li>
                                <li><a href="form-validation.html">Validation</a></li>
                                <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                                <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.nav -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.navbar -->
</div>
<!-- END TOP BAR -->


<!-- BEGIN HEADER.head -->
<header class="head">
    <div class="search-bar">
        <div class="row-fluid">
            <div class="span12">
                <div class="search-bar-inner">
                    <a id="menu-toggle" href="#menu" data-toggle="collapse"
                       class="accordion-toggle btn btn-inverse visible-phone"
                       rel="tooltip" data-placement="bottom" data-original-title="Show/Hide Menu">
                        <i class="icon-sort"></i>
                    </a>

                    <form class="main-search">
                        <input class="input-block-level" type="text" placeholder="Live search...">
                        <button id="searchBtn" type="submit" class="btn btn-inverse"><i class="icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- ."main-bar -->
    <div class="main-bar">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <h3><i class="icon-home"></i> Dashboard</h3>
                </div>
            </div>
            <!-- /.row-fluid -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.main-bar -->
</header>
<!-- END HEADER.head -->

<!-- BEGIN LEFT  -->
<div id="left">
    <!-- .user-media -->
    <div class="media user-media hidden-phone">
        <a href="" class="user-link">
            <img src="assets/img/user.gif" alt="" class="media-object img-polaroid user-img">
            <span class="label user-label">16</span>
        </a>

        <div class="media-body hidden-tablet">
            <h5 class="media-heading">Archie</h5>
            <ul class="unstyled user-info">
                <li><a href="">Administrator</a></li>
                <li>Last Access : <br/>
                    <small><i class="icon-calendar"></i> 16 Mar 16:32</small>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.user-media -->

    <!-- BEGIN MAIN NAVIGATION -->
    <ul id="menu" class="unstyled accordion collapse in">
        <li class="accordion-group active">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#dashboard-nav">
                <i class="icon-dashboard icon-large"></i> Dashboard <span
                    class="label label-inverse pull-right">2</span>
            </a>
            <ul class="collapse in" id="dashboard-nav">
                <li><a href="index.html"><i class="icon-angle-right"></i> Default Style</a></li>
                <li><a href="alterne.html"><i class="icon-angle-right"></i> Alternative Style</a></li>
            </ul>
        </li>
        <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                <i class="icon-tasks icon-large"></i> Components <span class="label label-inverse pull-right">2</span>
            </a>
            <ul class="collapse " id="component-nav">
                <li><a href="icon.html"><i class="icon-angle-right"></i> Icon & Button</a></li>
                <li><a href="progress.html"><i class="icon-angle-right"></i> Progress</a></li>
            </ul>
        </li>
        <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                <i class="icon-pencil icon-large"></i> Forms <span class="label label-inverse pull-right">4</span>
            </a>
            <ul class="collapse " id="form-nav">
                <li><a href="form-general.html"><i class="icon-angle-right"></i> General</a></li>
                <li><a href="form-validation.html"><i class="icon-angle-right"></i> Validation</a></li>
                <li><a href="form-wysiwyg.html"><i class="icon-angle-right"></i> WYSIWYG</a></li>
                <li><a href="form-wizard.html"><i class="icon-angle-right"></i> Wizard &amp; File Upload</a></li>
            </ul>
        </li>
        <li><a href="table.html"><i class="icon-table icon-large"></i> Tables</a></li>
        <li><a href="file.html"><i class="icon-file icon-large"></i> File Manager</a></li>
        <li><a href="typography.html"><i class="icon-font icon-large"></i> Typography</a></li>
        <li><a href="maps.html"><i class="icon-map-marker icon-large"></i> Maps</a></li>
        <li><a href="chart.html"><i class="icon-bar-chart icon-large"></i> Charts</a></li>
        <li><a href="calendar.html"><i class="icon-calendar icon-large"></i> Calendar</a></li>
        <li class="accordion-group ">
            <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                <i class="icon-warning-sign icon-large"></i> Error Pages <span
                    class="label label-inverse pull-right">7</span>
            </a>
            <ul class="collapse" id="error-nav">
                <li><a href="403.html"><i class="icon-angle-right"></i> 403</a></li>
                <li><a href="404.html"><i class="icon-angle-right"></i> 404</a></li>
                <li><a href="405.html"><i class="icon-angle-right"></i> 405</a></li>
                <li><a href="500.html"><i class="icon-angle-right"></i> 500</a></li>
                <li><a href="503.html"><i class="icon-angle-right"></i> 503</a></li>
                <li><a href="offline.html"><i class="icon-angle-right"></i> offline</a></li>
                <li><a href="countdown.html"><i class="icon-angle-right"></i> Under Construction</a></li>
            </ul>
        </li>
        <li><a href="grid.html"><i class="icon-columns icon-large"></i> Grid</a></li>
        <li><a href="blank.html"><i class="icon-check-empty icon-large"></i> Blank Page</a></li>
        <li><a href="login.html"><i class="icon-signin icon-large"></i> Login Page</a></li>
    </ul>
    <!-- END MAIN NAVIGATION -->

</div>
<!-- END LEFT -->

<!-- BEGIN MAIN CONTENT -->
<div id="content">
<!-- .outer -->
<div class="container-fluid outer">
<div class="row-fluid">
<!-- .inner -->
<div class="span12 inner">
<div class="tac">
    <ul class="stats_box">
        <li>
            <div class="sparkline bar_week"></div>
            <div class="stat_text">
                <strong>2.345</strong>Weekly Visit
                <span class="percent down"> <i class="icon-caret-down"></i> -16%</span>
            </div>
        </li>
        <li>
            <div class="sparkline line_day"></div>
            <div class="stat_text">
                <strong>165</strong>Daily Visit
                <span class="percent up"> <i class="icon-caret-up"></i> +23%</span>
            </div>
        </li>
        <li>
            <div class="sparkline pie_week"></div>
            <div class="stat_text">
                <strong>$2 345.00</strong>Weekly Sale
                <span class="percent"> 0%</span>
            </div>
        </li>
        <li>
            <div class="sparkline stacked_month"></div>
            <div class="stat_text">
                <strong>$678.00</strong>Monthly Sale
                <span class="percent down"> <i class="icon-caret-down"></i> -10%</span>
            </div>
        </li>
    </ul>
</div>
<hr>
<div class="tac">
    <a class="quick-btn" href="#">
        <i class="icon-bolt icon-2x"></i>
        <span>inverse</span>
        <span class="label label-inverse">2</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-check icon-2x"></i>
        <span>important</span>
        <span class="label label-important">2</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-building icon-2x"></i>
        <span>No Label</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-envelope icon-2x"></i>
        <span>success</span>
        <span class="label label-success">-456</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-signal icon-2x"></i>
        <span>warning</span>
        <span class="label label-warning">+25</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-external-link icon-2x"></i>
        <span>&pi;</span>
        <span class="label btn-metis-2">3.14159265</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-lemon icon-2x"></i>
        <span>&eacute;</span>
        <span class="label btn-metis-4">2.71828</span>
    </a>
    <a class="quick-btn" href="#">
        <i class="icon-glass icon-2x"></i>
        <span>&phi;</span>
        <span class="label btn-metis-3">1.618</span>
    </a>
</div>
<hr>
<div class="row-fluid">
    <div class="span8">
        <div class="box">
            <header>
                <h5>Line Chart</h5>
            </header>
            <div class="body" id="trigo" style="height: 250px;"></div>
        </div>
    </div>
    <div class="span4">
        <div class="box">
            <div class="body">
                <table class="table table-bordered table-condensed table-hovered sortableTable">
                    <thead>
                    <tr>
                        <th>Country <i class="icon-sort"></i><i class="icon-sort-down"></i><i
                                class="icon-sort-up"></i></th>
                        <th>Visit <i class="icon-sort"></i><i class="icon-sort-down"></i><i
                                class="icon-sort-up"></i></th>
                        <th>Time <i class="icon-sort"></i><i class="icon-sort-down"></i><i
                                class="icon-sort-up"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Andorra</td>
                        <td>1126</td>
                        <td>00:00:15</td>
                    </tr>
                    <tr>
                        <td>Belarus</td>
                        <td>350</td>
                        <td>00:01:20</td>
                    </tr>
                    <tr class="error">
                        <td>Paraguay</td>
                        <td>43</td>
                        <td>00:00:30</td>
                    </tr>
                    <tr class="info">
                        <td>Malta</td>
                        <td>547</td>
                        <td>00:10:20</td>
                    </tr>
                    <tr>
                        <td>Australia</td>
                        <td>560</td>
                        <td>00:00:10</td>
                    </tr>
                    <tr>
                        <td>Kenya</td>
                        <td>97</td>
                        <td>00:20:00</td>
                    </tr>
                    <tr class="success">
                        <td>Italy</td>
                        <td>2450</td>
                        <td>00:10:00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row-fluid">
    <div class="span8">
        <div class="box">
            <header>
                <h5>Calendar</h5>
            </header>
            <div id="calendar_content" class="body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-tags"></i></div>
                <h5>Todos</h5>
            </header>
            <div class="block">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>sdg</td>
                        <td>dsfg</td>
                    </tr>
                    <tr>
                        <td>sdfg</td>
                        <td>dfg</td>
                    </tr>
                    <tr class="success">
                        <td>dsfg</td>
                        <td>dfg</td>
                    </tr>
                    <tr>
                        <td>dfgh</td>
                        <td>dfh</td>
                    </tr>
                    <tr>
                        <td>dfgh</td>
                        <td>dfhg</td>
                    </tr>
                    <tr>
                        <td>ddfghdfgh</td>
                        <td>dfh</td>
                    </tr>
                    <tr>
                        <td>dfh</td>
                        <td>ddfhdh</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--BEGIN LATEST COMMENT-->
<!-- .row-fluid -->
<div class="row-fluid">
    <!-- .span6 -->
    <div class="span6">
        <!-- .box -->
        <div class="box comments">
            <header>
                <div class="icons">
                    <i class="icon-comments"></i>
                </div>
                <h5>Latest Comment</h5>
            </header>
            <!-- .body -->
            <div class="body">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACGklEQVR4nO2V0XKaUBRF8/+fckREJSYmirY2HWtJBxMnMtV2qCGFoL2/sPsAdRKjD62Q3WnPw3qBM2eWiwueGGPwP3PCFmCjAdgCbDQAW4CNBmALsNEAbAE2GoAtwEYDsAXYaAC2ABsNwBZgowHYAmw0AFuAjQZgC7DRAGwBNn8cYL28xsCtQ0QKOgiS5zObxQiN4n5zvPqr9h8VYB0OYYvA9m5xf2hu/RlvHAt2/fcFq95/ZIAVxi2BSBezx0Mza4RDG1bXx81b55lgNvdgiUA613gwBiadoisCkQvcJMfvrz7AwyecikDEQtOx8uNpuRgG0XYmmw9gSRPjVYboaldwg3CYH+1zP0RwKRCpoTdLS9pfdYDoPZzivXMnEYz5Bt/NhfvzDCa7g2cJar0ZHo3ZL7hZYNSQ7ftt9e+Qlbm/0gDxBG0RiLTw4T6/Fn908x/iLZFMzyDS3t47JBj7bhHAwVVU/v7qAvxYYGDtF6wPvyIJzp58uXfoBEiMgUlv0as9vV58D8raX2kAYxBP3D1H1MG7Ly9nXz6hBNOL/Eh7swjhqAERwakfl7T/FQIYs8HS76P16yk2LzEO072zu4Lfg3OI5O9wakz+d2YLRNoYR8fvf6UA/w4agC3ARgOwBdhoALYAGw3AFmCjAdgCbDQAW4CNBmALsNEAbAE2GoAtwEYDsAXYaAC2ABsNwBZgowHYAmw0AFuAzU+QYREQ9dxBOwAAAABJRU5ErkJggg==">
                    </a>
                    <div class="media-body">
                        <div class="popover right">
                            <div class="arrow"></div>
                            <h3 class="popover-title">Popover right</h3>
                            <div class="popover-content">
                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-right">
                        <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACGklEQVR4nO2V0XKaUBRF8/+fckREJSYmirY2HWtJBxMnMtV2qCGFoL2/sPsAdRKjD62Q3WnPw3qBM2eWiwueGGPwP3PCFmCjAdgCbDQAW4CNBmALsNEAbAE2GoAtwEYDsAXYaAC2ABsNwBZgowHYAmw0AFuAjQZgC7DRAGwBNn8cYL28xsCtQ0QKOgiS5zObxQiN4n5zvPqr9h8VYB0OYYvA9m5xf2hu/RlvHAt2/fcFq95/ZIAVxi2BSBezx0Mza4RDG1bXx81b55lgNvdgiUA613gwBiadoisCkQvcJMfvrz7AwyecikDEQtOx8uNpuRgG0XYmmw9gSRPjVYboaldwg3CYH+1zP0RwKRCpoTdLS9pfdYDoPZzivXMnEYz5Bt/NhfvzDCa7g2cJar0ZHo3ZL7hZYNSQ7ftt9e+Qlbm/0gDxBG0RiLTw4T6/Fn908x/iLZFMzyDS3t47JBj7bhHAwVVU/v7qAvxYYGDtF6wPvyIJzp58uXfoBEiMgUlv0as9vV58D8raX2kAYxBP3D1H1MG7Ly9nXz6hBNOL/Eh7swjhqAERwakfl7T/FQIYs8HS76P16yk2LzEO072zu4Lfg3OI5O9wakz+d2YLRNoYR8fvf6UA/w4agC3ARgOwBdhoALYAGw3AFmCjAdgCbDQAW4CNBmALsNEAbAE2GoAtwEYDsAXYaAC2ABsNwBZgowHYAmw0AFuAzU+QYREQ9dxBOwAAAABJRU5ErkJggg==">
                    </a>
                    <div class="media-body">
                        <div class="popover left">
                            <div class="arrow"></div>
                            <h3 class="popover-title">Popover right</h3>
                            <div class="popover-content">
                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.span6 -->
    <!-- .span6 -->
    <div class="span6">
        <!-- .box -->
        <div class="box">
            <header></header>
            <!-- .body -->
            <div class="body"></div>
            <!-- /.body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.span6 -->
</div>
<!-- /.row-fluid -->
<!--END LATEST COMMENT-->
</div>
<!-- /.inner -->
</div>
<!-- /.row-fluid -->
</div>
<!-- /.outer -->
</div>
<!-- END CONTENT -->


<!-- #push do not remove -->
<div id="push"></div>
<!-- /#push -->
</div>
<!-- END WRAP -->

<div class="clearfix"></div>

<!-- BEGIN FOOTER -->
<div id="footer">
    <p>2013 © Metis Admin</p>
</div>
<!-- END FOOTER -->

<!-- #helpModal -->
<div id="helpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i> Help</h3>
    </div>
    <div class="modal-body">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>
    </div>
    <div class="modal-footer">

        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>
<!-- /#helpModal -->

