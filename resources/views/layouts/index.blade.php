<!DOCTYPE html>
<html>

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Walk & run Backend</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flat-admin.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme/blue-sky.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme/blue.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme/red.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme/yellow.css') }}">

    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>


    <!-- Live Table editing -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

</head>

<body>
    <div class="app app-default">
        <aside class="app-sidebar" id="sidebar">
            <div class="sidebar-header">
                <a class="sidebar-brand" href="home"><img src="{{ asset('images/Icon.png') }}" alt="app logo" /></a>
                <button type="button" class="sidebar-toggle"> <i class="fa fa-times"></i> </button>
            </div>
            <div class="sidebar-menu">
                <ul class="sidebar-nav">
                    <li class="active">
                        <a href="home">
                            <div class="icon"> <i class="fa fa-dashboard" aria-hidden="true"></i> </div>
                            <div class="title">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="basic">
                            <div class="icon"> <i class="fa fa-cog" aria-hidden="true"></i> </div>
                            <div class="title">Basic</div>
                        </a>
                    </li>

                    <li>
                        <a href="spendenempfaenger">
                            <div class="icon"> <i class="fa fa-cog" aria-hidden="true"></i> </div>
                            <div class="title">Spenden</div>
                        </a>
                    </li>

                    <li>
                        <a href="sponsoren">
                            <div class="icon"> <i class="fa fa-cog" aria-hidden="true"></i> </div>
                            <div class="title">sponsoren</div>
                        </a>
                    </li>

                    <li>
                        <a href="sponsoren">
                            <div class="icon"> <i class="fa fa-cog" aria-hidden="true"></i> </div>
                            <div class="title">CSV Upload</div>
                        </a>
                    </li>

                    <li>
                        <a href="sponsoren">
                            <div class="icon"> <i class="fa fa-cog" aria-hidden="true"></i> </div>
                            <div class="title">Ergebnisse</div>
                        </a>
                    </li>

                </ul>
            </div>

        </aside>
        <div class="app-container">
            <nav class="navbar navbar-default" id="navbar">
                <div class="container-fluid">
                    <div class="navbar-collapse collapse in">
                        <ul class="nav navbar-nav navbar-mobile">
                            <li>
                                <button type="button" class="sidebar-toggle"> <i class="fa fa-bars"></i> </button>
                            </li>
                            <li class="logo"> <a class="navbar-brand" href="#">Charity Walk & run Backend</a> </li>
                            <li>
                                <button type="button" class="navbar-toggle">

                                    <img class="profile-img" src="{{ asset('images/profile.png') }}">

                                </button>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-left">
                            <li class="navbar-title">Charity Walk & run Backend fuer Stadt: &nbsp; <b>Hamburg</b></li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown profile">
                                <a href="profile" class="dropdown-toggle" data-toggle="dropdown">
                                    <img class="profile-img" src="{{ asset('images/profile.png') }}">
                                    <div class="title">Profile</div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="profile-info">
                                        <h4 class="username">Admin</h4>
                                    </div>
                                    <ul class="action">
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="btn-floating" id="help-actions">
                <div class="btn-bg"></div>
                <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle"
                    data-target="#help-actions"> <i class="icon fa fa-plus"></i> <span class="help-text">Shortcut</span>
                </button>
                <div class="toggle-content">
                    <ul class="actions">
                        <li><a href="#" target="_blank">Website</a></li>
                        <li><a href="#" target="_blank">Documentation</a></li>
                        <li><a href="#" target="_blank">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                @yield('content')
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('assets/js/vendor.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/nicEdit-latest.js') }}"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $(".datepicker").datepicker();
            });

            // Make all Textareas WYSIWYG
            bkLib.onDomLoaded(nicEditors.allTextAreas);

        </script>
</body>

</html>
