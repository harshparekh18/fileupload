<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Acme - One Column Content</title>

  <!-- Vendor stylesheet files. REQUIRED -->
  <!-- BEGIN: Vendor  -->
  <link rel="stylesheet" href="../assets/css/vendor.css">
  <!-- END: core stylesheet files -->

  <!-- Plugin stylesheet files. OPTIONAL -->

  <!-- END: plugin stylesheet files -->

  <!-- Theme main stlesheet files. REQUIRED -->
  <link rel="stylesheet" href="../assets/css/chl.css">
  <link id="theme-list" rel="stylesheet" href="../assets/css/theme-peter-river.css">
  <!-- END: theme main stylesheet files -->

  <!-- begin pace.js  -->
  <link rel="stylesheet" href="../assets/vendor/pace/themes/blue/pace-theme-minimal.css">
  <script src="../assets/vendor/pace/pace.js"></script>
  <!-- END: pace.js  -->

</head>

<body>
  <!-- begin .app -->
  <div class="app">
    <!-- begin .app-wrap -->
    <div class="app-wrap">
      <!-- begin .app-container -->
      <div class="app-container">

        <!-- begin .app-side -->
        <aside class="app-side">

          <!-- begin .side-heading -->
          <header class="side-heading">
            <div class="clearfix visible-xs b-b b-wet-asphalt m-b-10">
              <a class="b-a b-wet-asphalt visible-xs p-a-10 m-a-10 pull-right text-clouds" href="#" data-side="collapse">
                <i class="fa fa-fw fa-bars"></i>
              </a>
            </div>
            <!--begin logo-->
            <!-- <a class="logo" href="../index.html">
              <span class="logo-xs">
                <img src="../assets/img/logo_xs.svg" alt="logo-xs">
              </span>
              <span class="logo-lg">
                <img src="../assets/img/logo_lg.svg" alt="logo-lg">
              </span>
            </a> -->
            <!--end logo-->
          </header>
          <!-- END: .side-heading -->

          <!-- begin .side-content -->
          <div class="side-content">
            <!-- begin user-panel -->
            <div class="user-panel">
              <div class="user-image">
                <a href="#">
                  <img class="img-circle" src="../assets/img/m1.svg" alt="John Doe">
                </a>
              </div>
              <div class="user-info">
                <h4>WELCOME</h4>
                <h5><?php  
                echo $_SESSION["email"];
                ?></h5>
                <ul class="nav">
                  <li class="dropdown">
                    <a href="#" class="text-turquoise small dropdown-toggle bg-transparent" data-toggle="dropdown">
                      <i class="fa fa-fw fa-circle">
                      </i> Online
                    </a>
                    <ul class="dropdown-menu animated flipInY pull-right">
                      <!-- <li>
                        <a href="#">Profile</a>x
                      </li>
                      <li>
                        <a href="#">Contacts</a>
                      </li>
                      <li>
                        <a href="#">Mail Box</a>
                      </li> -->
                      <li>
                        <a href="logout.php">
                          <i class="fa fa-fw fa-sign-out"></i> Logout
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
                <!-- <li class="nav-divider"></li> -->

                <!-- <li class="nav-divider"></li> -->
                      <!-- <li role="separator" class="divider"></li> -->
                      <!-- <li role="separator" class="divider"></li> -->


            <!-- END: user-panel -->
            <!-- begin .side-nav -->
            <nav class="side-nav">
              <!-- BEGIN: nav-content -->
              <ul class="metismenu nav nav-inverse nav-bordered nav-stacked" data-plugin="metismenu">

                <!-- <li class="nav-header">MAIN</li> -->

                <li>
                  <a href="index.php">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-cogs"></i>
                    </span>
                    <span class="nav-title">Dashboard</span>
                  </a>
                </li>

                <li>
                  <a href="app-register.php">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-cogs"></i>
                    </span>
                    <span class="nav-title">Register a new admin</span>
                  </a>
                </li>

                <!-- <li class="nav-header">Components</li> -->

                <!-- BEGIN: chart -->
                <li>
                  <a href="javascript:;">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-bar-chart-o"></i>
                    </span>
                    <span class="nav-title">Upload File</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                      <span class="label label-primary">3</span>
                    </span>
                  </a>
                  <ul class="nav nav-sub nav-stacked">
                    <li>
                      <a href="upload_img.php">Images</a>
                    </li>
                    <li>
                      <a href="upload_vid.php">Videos</a>
                    </li>
                    <li>
                      <a href="upload_pdf.php">Pdf</a>
                    </li>
                    <!-- <li>
                      <a href="chart-flot.html">Flot</a>
                    </li>
                    <li>
                      <a href="chart-inline.html">Inline charts</a>
                    </li> -->
                  </ul>
                </li>
                <!-- END: chart -->

                <!-- BEGIN: maps -->
               <!--  <li>
                  <a href="javascript:;">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-map"></i>
                    </span>
                    <span class="nav-title">Maps</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                    </span>
                  </a>
                  <ul class="nav nav-sub nav-stacked">
                    <li>
                      <a href="map-google.html">Google Maps</a>
                    </li>
                    <li>
                      <a href="map-vector.html">Vector Maps</a>
                    </li>
                  </ul>
                </li> -->
                <!-- END: maps -->

                <!-- BEGIN: ui -->
           <!--      <li>
                  <a href="javascript:;">

                    <span class="nav-icon">
                      <i class="fa fa-fw fa-tachometer"></i>
                    </span>
                    <span class="nav-title">UI</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                    </span>
                  </a>
                  <ul class="nav nav-sub nav-stacked">
                    <li>
                      <a href="ui-general.html">General</a>
                    </li>
                    <li>
                      <a href="ui-font.html">Font</a>
                    </li>
                    <li>
                      <a href="ui-widgets.html">Widgets</a>
                    </li>
                    <li>
                      <a href="ui-loaders.html">Loaders</a>
                    </li>
                    <li>
                      <a href="ui-momentum.html">Momentum</a>
                    </li>
                    <li>
                      <a href="ui-nav.html">Nav</a>
                    </li>
                    <li>
                      <a href="ui-todo.html">Todo</a>
                    </li>
                    <li>
                      <a href="ui-mega.html">Mega Menu</a>
                    </li>
                    <li>
                      <a href="ui-tab.html">Tab</a>
                    </li>
                    <li>
                      <a href="ui-color.html">Colors</a>
                    </li>
                    <li>
                      <a href="ui-button.html">Buttons</a>
                    </li>
                    <li>
                      <a href="ui-canvas.html">Canvas</a>
                    </li>
                    <li>
                      <a href="ui-slider.html">Slider</a>
                    </li>
                    <li>
                      <a href="ui-timeline.html">Timeline</a>
                    </li>

                    <!-- BEGIN: icon -->
                    <!-- <li>
                      <a href="javascript:;">
                        <span class="nav-title">Icons</span>
                        <span class="nav-tools">
                          <i class="fa fa-fw arrow"></i>
                        </span>
                      </a>
                      <ul class="nav nav-sub nav-stacked">
                        <li>
                          <a href="ui-icon-awesome.html">
                            <span class="nav-icon">
                              <i class="fa fa-fw fa-font-awesome"></i>
                            </span>
                            <span class="nav-title">Font Awesome</span>
                          </a>
                        </li>
                        <li>
                          <a href="ui-icon-glyphicon.html">
                            <span class="nav-icon">
                              <i class="glyphicon glyphicon-fire"></i>
                            </span>
                            <span class="nav-title">Glyphicons</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    
                  </ul>
                </li> -->
                <!-- END: ui -->

                <!-- BEGIN: forms -->
                <!-- <li>
                  <a href="javascript:;">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-edit"></i>
                    </span>
                    <span class="nav-title">Forms</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                    </span>
                  </a>
                  <ul class="nav nav-sub nav-stacked">
                    <li>
                      <a href="form-basic.html">Basic</a>
                    </li>
                    <li>
                      <a href="form-advanced.html">Advanced</a>
                    </li>
                    <li>
                      <a href="form-wizard.html">Wizard</a>
                    </li>
                    <li>
                      <a href="form-upload.html">File Upload</a>
                    </li>
                    <li>
                      <a href="form-editor.html">Text Editor</a>
                    </li>
                  </ul>
                </li> -->
                <!-- END: forms -->

                <!-- BEGIN: table -->
               <!--  <li>
                  <a href="javascript:;">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-table"></i>
                    </span>
                    <span class="nav-title">Table</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                    </span>
                  </a>
                  <ul class="nav nav-sub nav-stacked">
                    <li>
                      <a href="table-basic.html">Basic</a>
                    </li>
                    <li>
                      <a href="table-sortable.html">Sortable</a>
                    </li>
                    <li>
                      <a href="table-datatable.html">Datatables</a>
                    </li>
                  </ul>
                </li> -->
                <!-- END: table -->

                <!-- BEGIN: apps -->
              <!--   <li>
                  <a href="javascript:;">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-pagelines"></i>
                    </span>
                    <span class="nav-title">App</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                    </span>
                  </a>
                  <ul class="nav nav-sub nav-stacked">
                    <li>
                      <a href="app-calendar.html">Calendar</a>
                    </li>
                    <li>
                      <a href="app-gallery.html">Gallery</a>
                    </li>
                    <li>
                      <a href="app-login.html">Login</a>
                    </li>
                    <li>
                      <a href="app-register.html">Register</a>
                    </li>
                    <li>
                      <a href="app-forgot.html">Forgot</a>
                    </li>
                    <li>
                      <a href="app-404.html">404</a>
                    </li>
                    <li>
                      <a href="app-500.html">500</a>
                    </li> -->

                    <!-- BEGIN: mail -->
                   <!--  <li>
                      <a href="javascript:;">
                        <span class="nav-icon">
                          <i class="fa fa-fw fa-envelope-o"></i>
                        </span>
                        <span class="nav-title">Mail</span>
                        <span class="nav-tools">
                          <i class="fa fa-fw arrow"></i>
                        </span>
                      </a>
                      <ul class="nav nav-sub nav-stacked">
                        <li>
                          <a href="app-mail-inbox.html">Inbox</a>
                        </li>
                        <li>
                          <a href="app-mail-compose.html">Compose</a>
                        </li>
                        <li>
                          <a href="app-mail-read.html">Read</a>
                        </li>
                      </ul>
                    </li> -->
                    <!-- END: mail -->
                 <!--  </ul>
                </li> -->
                <!-- BEGIN: apps -->

                <!-- BEGIN: blank pages -->
<!--                 <li class="active">
                  <a href="javascript:;">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-square-o"></i>
                    </span>
                    <span class="nav-title">Blank Pages</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                    </span>
                  </a>
                  <ul class="nav nav-sub nav-stacked">
                    <li>
                      <a class="active" href="blank-one-col.html">One Column Content</a>
                    </li>
                    <li>
                      <a href="blank-two-col-1.html">Two Column Content 1</a>
                    </li>
                    <li>
                      <a href="blank-two-col-2.html">Two Column Content 2</a>
                    </li>
                    <li>
                      <a href="blank-three-col-1.html">Three Column Content 1</a>
                    </li>
                    <li>
                      <a href="blank-three-col-2.html">Three Column Content 2</a>
                    </li>
                    <li>
                      <a href="blank-three-col-3.html">Three Column Content 3</a>
                    </li> -->
                <!-- BEGIN: utility -->
                   <!--  <li>
                      <a href="blank-four-col.html">Four Column Content</a>
                    </li>
                  </ul>
                </li> -->
                <!-- END: blank pages -->

                <!-- <li class="nav-divider"></li> -->

                <!-- BEGIN: utility -->
<!--                 <li>
                  <a href="javascript:;">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-wrench"></i>
                    </span>
                    <span class="nav-title">Utility</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                    </span>
                  </a>
                  <ul class="nav nav-sub nav-stacked">
                    <li>
                      <a href="u-spacing.html">Spacing</a>
                    </li>
                    <li>
                      <a href="u-border.html">Border</a>
                    </li>
                    <li>
                      <a href="u-overflow.html">Overflow</a>
                    </li>
                    <li>
                      <a href="u-display.html">Display</a>
                    </li>
                    <li>
                      <a href="u-flex.html">Flexbox</a>
                    </li>
                    <li>
                      <a href="u-shadow.html">Shadow</a>
                    </li>
                    <li>
                      <a href="u-waves.html">Waves Effect</a>
                    </li>
                  </ul>
                </li> -->
<!-- 
                <li>
                  <a href="javascript:;">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-code"></i>
                    </span>
                    <span class="nav-title">Multilevel</span>
                    <span class="nav-tools">
                      <i class="fa fa-fw arrow"></i>
                    </span>
                  </a>
                  <ul class="nav nav-sub">
                    <li>
                      <a href="javascript:;">
                        <span class="nav-title">Level 1</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="nav-title">Level 1</span>
                        <span class="nav-tools">
                          <i class="fa fa-fw arrow"></i>
                        </span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a href="javascript:;">
                            <span class="nav-title">Level 2</span>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <span class="nav-title">Level 2</span>
                            <span class="nav-tools">
                              <i class="fa fa-fw arrow"></i>
                            </span>
                          </a>
                          <ul class="nav nav-sub">
                            <li>
                              <a href="javascript:;">
                                <span class="nav-title">Level 3</span>
                              </a>
                            </li>
                            <li>
                              <a href="javascript:;">
                                <span class="nav-title">Level 3</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="nav-title">Level 1</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-divider"></li>

                <li>
                  <a href="document.html">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-book text-alizarin"></i>
                    </span>
                    <span class="nav-title">Document</span>
                  </a>
                </li>

                <li>
                  <a href="../secondrtl/index.html">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-angle-double-left text-emerland"></i>
                    </span>
                    <span class="nav-title">RTL</span>
                  </a>
                </li>
 -->              </ul>
              <!-- END: nav-content -->
            </nav>
            <!-- END: .side-nav -->
          </div>
          <!-- END: .side-content -->
          <!-- begin .side-footer -->
          <footer class="side-footer p-h-15 p-t-15 p-b-10">
            <div class="progress is-xs">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
            <div class="progress is-xs">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                <span class="sr-only">40% Complete</span>
              </div>
            </div>
          </footer>
          <!-- END: .side-footer -->
        </aside>
        <!-- END: .app-side -->

        <!-- begin side-collapse-visible bar -->
        <div class="side-visible-line hidden-xs" data-side="collapse">
          <i class="fa fa-caret-left"></i>
        </div>
        <!-- begin side-collapse-visible bar -->

        <!-- begin .app-main -->
        <div class="app-main">

          <!-- begin .main-heading -->
          <header class="main-heading">
            <nav class="navbar navbar-default navbar-static-top shadow-2dp">
              <!-- begin .navbar-header -->
              <div class="navbar-header">
                <nav class="nav navbar-header-nav">

                  <a class="visible-xs b-r" href="#" data-side=collapse>
                    <i class="fa fa-fw fa-bars"></i>
                  </a>

                  <a class="hidden-xs b-r" href="#" data-side=mini>
                    <i class="fa fa-fw fa-bars"></i>
                  </a>

                  <form class="navbar-form hidden-xs b-r">
                    <div class="icon-after-input">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="icon">
                        <a href="#">
                          <i class="fa fa-fw fa-search"></i>
                        </a>
                      </div>
                    </div>
                  </form>

                </nav>

                <ul class="nav navbar-header-nav m-l-a">
                  <li class="visible-xs b-l">
                    <a href="#top-search" data-toggle="canvas">
                      <i class="fa fa-fw fa-search"></i>
                    </a>
                  </li>
                  <li class="dropdown b-l">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                      <span class="b-wisteria fa fa-fw fa-envelope-o u-posRelative"></span>

                      <span class="label label-primary b-orange">8
                        <span class="waves"></span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInDown w-sm pull-right">
                      <li class="b-b">
                        <div class="media">
                          <div class="media-left">
                            <a class="profile-pic" href="#">
                              <img class="media-object" src="../assets/img/w2.svg" alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="media-heading">
                              <small class="pull-right">12 hours ago</small>
                              <b>Leanne Graham</b>
                            </h5>
                            started following
                            <strong>Ervin Howell </strong>
                            <p class="text-muted">3 days ago at 7:12 pm - 10.12.2016</p>
                          </div>
                        </div>
                      </li>
                      <li class="b-b">
                        <div class="media">
                          <div class="media-left">
                            <a class="profile-pic" href="#">
                              <img class="media-object" src="../assets/img/m2.svg" alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="media-heading">
                              <small class="pull-right">12 hours ago</small>
                              <b>Leanne Graham</b>
                            </h5>
                            started following
                            <strong>Ervin Howell </strong>
                            <p class="text-muted">3 days ago at 7:12 pm - 10.12.2016</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a class="text-center u-block text-asbestos" href="app-mail-inbox.html">
                          <i class="fa fa-envelope"></i> Read All Messages
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown b-l">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fw fa-bell"></i>
                      <span class="point bg-carrot b-peter-river">
                        <span class="waves"></span>
                      </span>
                    </a>
                    <ul class="dropdown-menu pull-right w-sm animated fadeInUp">

                      <li class="p-a-15">
                        <a href="app-mail-inbox.html">
                          <div class="clearfix">
                            <span class="pull-right text-muted small">4 minutes ago</span>
                            <i class="fa fa-envelope fa-fw"></i>
                            <small>12 messages</small>
                          </div>
                        </a>
                      </li>
                      <li class="p-a-15">
                        <a href="app-mail-inbox.html">
                          <div class="clearfix">
                            <span class="pull-right text-muted small">3 minutes ago</span>
                            <i class="fa fa-twitter fa-fw"></i>
                            <small>4 follower</small>
                          </div>
                        </a>
                      </li>
                      <li role="separator" class="divider"></li>
                      <li class="text-right">
                        <a class="text-wisteria" href="#">
                          See all notification
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown b-l">
                    <a class="dropdown-toggle profile-pic" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <img class="img-circle" src="../assets/img/w1.svg" alt="Jane Doe">
                      <b class="hidden-xs hidden-sm">Jane Doe</b>
                    </a>
                    <ul class="dropdown-menu animated flipInY pull-right">
                      <li>
                        <a href="#">Profile</a>
                      </li>
                      <li>
                        <a href="#">Contacts</a>
                      </li>
                      <li>
                        <a href="#">Mail Box</a>
                      </li>
                      <li role="separator" class="divider"></li>
                      <li>
                        <a href="logout.php">
                          <i class="fa fa-fw fa-sign-out"></i>
                          Logout
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- begin mega-menu -->
              <!--     <li class="dropdown u-posStatic hidden-xs b-l">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mega
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu nav-full-item">
                      <li>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-4">
                              <h1 class="text-muted">Heading 1</h1>
                              <h2 class="text-primary">Heading 2</h2>
                              <h3 class="text-warning">Heading 3</h3>
                              <h4 class="text-danger">Heading 4</h4>
                              <h5 class="text-success">Heading 5</h5>
                              <h6 class="text-info">Heading 6</h6>
                            </div>
                            <div class="col-sm-4">
                              <p>Default paragraph</p>
                              <p class="lead">lead paragraph</p>
                              <p class="text-muted">Muted paragraph</p>
                              <p class="text-warning">warning paragraph</p>
                              <p class="text-primary">primary paragraph</p>
                              <p class="text-info">info paragraph</p>
                              <p class="text-success">success paragraph</p>
                              <p class="text-danger">danger paragraph</p>
                            </div>
                            <div class="col-sm-4">
                              <img class="img-responsive" src="../assets/img/p1.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li> -->
                  <!-- END: mega-menu -->
                </ul>
              </div>
              <!-- END: .navbar-header -->
            </nav>
          </header>
          <!-- END: .main-heading -->

          <!-- begin .main-content -->
         