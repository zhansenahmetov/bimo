<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">
    <title>Панель администратора</title>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/theme.css" rel="stylesheet">
    <link href="/assets/css/ui.css" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <link href="/assets/plugins/metrojs/metrojs.min.css" rel="stylesheet">
    <link href="/assets/plugins/maps-amcharts/ammap/ammap.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>

  <body class="fixed-topbar fixed-sidebar theme-sdtl color-default">

    <section>
 
      <div class="sidebar">
        <div class="logopanel">
          <h1>
            <a href="/dashboard.html"></a>
          </h1>
        </div>
        <div class="sidebar-inner">
          <div class="sidebar-top">
            <form action="search-result.html" method="post" class="searchform" id="search-results">
              <input type="text" class="form-control" name="keyword" placeholder="Search...">
            </form>
            <div class="userlogged clearfix">
              <i class="icon icons-faces-users-01"></i>
              <div class="user-details">
                <h4>{{Auth::user()->name}}</h4>
                <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                  <i class="online"></i><span>Онлайн</span><i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="/#"><i class="busy"></i><span>Занят</span></a></li>
                    <li><a  href="/#"><i class="turquoise"></i><span>Невидим</span></a></li>
                    <li><a href="/#"><i class="away"></i><span>Отошел</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="menu-title">
            Навигация 
        <!--     <div class="pull-right menu-settings">
              <a href="/#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300"> 
              <i class="icon-settings"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="/#" id="reorder-menu" class="reorder-menu">Reorder menu</a></li>
                <li><a href="/#" id="remove-menu" class="remove-menu">Remove elements</a></li>
                <li><a href="/#" id="hide-top-sidebar" class="hide-top-sidebar">Hide user &amp; search</a></li>
              </ul>
            </div> -->
          </div>
          <ul class="nav nav-sidebar">
            <li class=" nav-active active"><a href="/dashboard.html"><i class="icon-home"></i><span>Главное</span></a></li>
            <li class=" nav-active"><a href="/dashboard.html"><i class="icon-home"></i>
              <span>Заказы</span><span class="pull-right badge badge-danger">10</span></a></li>
           
            <li class="nav-parent">
              <a href="/#"><i class="icon-bulb"></i><span data-translate="Mailbox">Товары</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="{{route('show_products_admin')}}"> Все товары <span class="pull-right badge badge-danger">10</span></a></li>
                <li><a href="/mailbox-send.html">Добавить товар</a></li>
                
              </ul>
            </li>
            <li class="nav-parent">
              <a href="/#"><i class="icon-bulb"></i><span data-translate="Mailbox">Поставщики</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">

                <li><a href="{{route('show_manufactors_admin')}}"> Все Поставщики</a></li>
                <li><a href="/mailbox-send.html">Добавить Поставщика</a></li>

              </ul>
            </li>
          
           
           
          </ul>
          <!-- SIDEBAR WIDGET FOLDERS -->
          <div class="sidebar-widgets">
            <p class="menu-title widget-title">Папки</p>
            <ul class="folders">
              <li>
                <a href="/#"><i class="icon-doc c-primary"></i>Документы</a> 
              </li>
              <li>
                <a href="/#"><i class="icon-picture"></i>Счета</a> 
              </li>
              
            
            </ul>
          </div>
          <div class="sidebar-footer clearfix">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Настроики">
            <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="/#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="{{route('get_logout')}}" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        @include('inc.topbar')
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
       	@yield('content')
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->
      <div class="builder hidden-sm hidden-xs" id="builder">
        <a class="builder-toggle"><i class="icon-wrench"></i></a>
        <div class="inner">
          <div class="builder-container">
            <a href="/#" class="btn btn-sm btn-default" id="reset-style">reset default style</a>
            <h4>Layout options</h4>
            <div class="layout-option">
              <span> RTL</span>
              <label class="switch pull-right">
              <input data-layout="rtl" id="switch-rtl" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Fixed Sidebar</span>
              <label class="switch pull-right">
              <input data-layout="sidebar" id="switch-sidebar" type="checkbox" class="switch-input" checked>
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Sidebar on Hover</span>
              <label class="switch pull-right">
              <input data-layout="sidebar-hover" id="switch-sidebar-hover" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Submenu on Hover</span>
              <label class="switch pull-right">
              <input data-layout="submenu-hover" id="switch-submenu-hover" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Sidebar on Top</span>
              <label class="switch pull-right">
              <input data-layout="sidebar-top" id="switch-sidebar-top" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span>Fixed Topbar</span>
              <label class="switch pull-right">
              <input data-layout="topbar" id="switch-topbar" type="checkbox" class="switch-input" checked>
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span>Boxed Layout</span>
              <label class="switch pull-right">
              <input data-layout="boxed" id="switch-boxed" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <h4 class="border-top">Color</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="theme-color bg-dark" data-main="default" data-color="#2B2E33"></div>
                <div class="theme-color background-primary" data-main="primary" data-color="#319DB5"></div>
                <div class="theme-color bg-red" data-main="red" data-color="#C75757"></div>
                <div class="theme-color bg-green" data-main="green" data-color="#1DA079"></div>
                <div class="theme-color bg-orange" data-main="orange" data-color="#D28857"></div>
                <div class="theme-color bg-purple" data-main="purple" data-color="#B179D7"></div>
                <div class="theme-color bg-blue" data-main="blue" data-color="#4A89DC"></div>
              </div>
            </div>
            <h4 class="border-top">Theme</h4>
            <div class="row row-sm">
              <div class="col-xs-6">
                <div class="theme clearfix sdtl" data-theme="sdtl">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-light"></div>
                  <div class="theme-sidebar-dark"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sltd" data-theme="sltd">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-dark"></div>
                  <div class="theme-sidebar-light"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sdtd" data-theme="sdtd">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-dark"></div>
                  <div class="theme-sidebar-dark"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sltl" data-theme="sltl">
                  <div class="header theme-left"></div>
                  <div class="header theme-right-light"></div>
                  <div class="theme-sidebar-light"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
            </div>
            <h4 class="border-top">Background</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="bg-color bg-clean" data-bg="clean" data-color="#F8F8F8"></div>
                <div class="bg-color bg-lighter" data-bg="lighter" data-color="#EFEFEF"></div>
                <div class="bg-color bg-light-default" data-bg="light-default" data-color="#E9E9E9"></div>
                <div class="bg-color bg-light-blue" data-bg="light-blue" data-color="#E2EBEF"></div>
                <div class="bg-color bg-light-purple" data-bg="light-purple" data-color="#E9ECF5"></div>
                <div class="bg-color bg-light-dark" data-bg="light-dark" data-color="#DCE1E4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END BUILDER -->
    </section>
   
    <!-- BEGIN SEARCH -->
    <div id="morphsearch" class="morphsearch">
      <form class="morphsearch-form">
        <input class="morphsearch-input" type="search" placeholder="Search..."/>
        <button class="morphsearch-submit" type="submit">Search</button>
      </form>
      <div class="morphsearch-content withScroll">
        <div class="dummy-column user-column">
          <h2>Users</h2>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/avatars/avatar1_big.png" alt="Avatar 1"/>
            <h3>John Smith</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/avatars/avatar2_big.png" alt="Avatar 2"/>
            <h3>Bod Dylan</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/avatars/avatar3_big.png" alt="Avatar 3"/>
            <h3>Jenny Finlan</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/avatars/avatar4_big.png" alt="Avatar 4"/>
            <h3>Harold Fox</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/avatars/avatar5_big.png" alt="Avatar 5"/>
            <h3>Martin Hendrix</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/avatars/avatar6_big.png" alt="Avatar 6"/>
            <h3>Paul Ferguson</h3>
          </a>
        </div>
        <div class="dummy-column">
          <h2>Articles</h2>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/1.jpg" alt="1"/>
            <h3>How to change webdesign?</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/2.jpg" alt="2"/>
            <h3>News From the sky</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/3.jpg" alt="3"/>
            <h3>Where is the cat?</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/4.jpg" alt="4"/>
            <h3>Just another funny story</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/5.jpg" alt="5"/>
            <h3>How many water we drink every day?</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/6.jpg" alt="6"/>
            <h3>Drag and drop tutorials</h3>
          </a>
        </div>
        <div class="dummy-column">
          <h2>Recent</h2>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/7.jpg" alt="7"/>
            <h3>Design Inspiration</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/8.jpg" alt="8"/>
            <h3>Animals drawing</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/9.jpg" alt="9"/>
            <h3>Cup of tea please</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/10.jpg" alt="10"/>
            <h3>New application arrive</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/11.jpg" alt="11"/>
            <h3>Notification prettify</h3>
          </a>
          <a class="dummy-media-object" href="/#">
            <img src="/assets/images/gallery/12.jpg" alt="12"/>
            <h3>My article is the last recent</h3>
          </a>
        </div>
      </div>
      <!-- /morphsearch-content -->
      <span class="morphsearch-close"></span>
    </div>
    <!-- END SEARCH -->
    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- END PRELOADER -->
    <a href="/#" class="scrollup"><i class="fa fa-angle-up"></i></a> 

    @if(Route::current()->getName() == 'show_manufactors_admin')
    <script src="/assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="/assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
    <script src="/assets/plugins/gsap/main-gsap.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="/assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="/assets/plugins/translate/jqueryTranslator.min.js"></script> <!-- Translate Plugin with JSON data -->
    <script src="/assets/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="/assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <script src="/assets/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
    <script src="/assets/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
    <script src="/assets/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <script src="/assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="/assets/plugins/charts-chartjs/Chart.min.js"></script>
    <script src="/assets/js/builder.js"></script> <!-- Theme Builder -->
    <script src="/assets/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="/assets/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="/assets/js/quickview.js"></script> <!-- Chat Script -->
    <script src="/assets/js/pages/search.js"></script> <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="/assets/js/pages/table_editable.js"></script>
    <!-- END PAGE SCRIPTS -->

    @elseif(Request::url() === 'admin/users')

    @else
    <script src="/assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="/assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
    <script src="/assets/plugins/gsap/main-gsap.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="/assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="/assets/plugins/translate/jqueryTranslator.min.js"></script> <!-- Translate Plugin with JSON data -->
    <script src="/assets/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="/assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <script src="/assets/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
    <script src="/assets/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
    <script src="/assets/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <script src="/assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="/assets/js/builder.js"></script> <!-- Theme Builder -->
    <script src="/assets/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="/assets/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="/assets/js/quickview.js"></script> <!-- Chat Script -->
    <script src="/assets/js/pages/search.js"></script> <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPT -->
    <script src="/assets/plugins/noty/jquery.noty.packaged.min.js"></script>  <!-- Notifications -->
    <script src="/assets/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script> <!-- Inline Edition X-editable -->
    <script src="/assets/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- Context Menu -->
    <script src="/assets/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
    <script src="/assets/js/widgets/todo_list.js"></script>
    <script src="/assets/plugins/metrojs/metrojs.min.js"></script> <!-- Flipping Panel -->
    <script src="/assets/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
    <script src="/assets/plugins/charts-highstock/js/highstock.min.js"></script> <!-- financial Charts -->
    <script src="/assets/plugins/charts-highstock/js/modules/exporting.min.js"></script> <!-- Financial Charts Export Tool -->
    <script src="/assets/plugins/maps-amcharts/ammap/ammap.min.js"></script> <!-- Vector Map -->
    <script src="/assets/plugins/maps-amcharts/ammap/maps/js/worldLow.min.js"></script> <!-- Vector World Map  -->
    <script src="/assets/plugins/maps-amcharts/ammap/themes/black.min.js"></script> <!-- Vector Map Black Theme -->
    <script src="/assets/plugins/skycons/skycons.min.js"></script> <!-- Animated Weather Icons -->
    <script src="/assets/plugins/simple-weather/jquery.simpleWeather.js"></script> <!-- Weather Plugin -->
    <script src="/assets/js/widgets/widget_weather.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>

    @endif


  </body>
</html>