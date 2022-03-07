<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Eu Reciclo - Desafio de Programação</title>

        <base href="">

        <meta charset="utf-8" />
        <meta name="robots" content="noindex, nofollow" />

        @component('components.meta')
        @endcomponent


        @component('components.favicon')
        @endcomponent

        <link rel="canonical" href="https://eureciclo.com.br" />

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/flexy/bootstrap-lite/assets/libs/chartist/dist/chartist.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/flexy/bootstrap-lite/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/flexy/bootstrap-lite/dist/css/style.min.css') }}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/commom/css.css') }}" />
    </head>

    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header" data-logobg="skin6">
                        <a class="navbar-brand" href="/">
                            <b class="logo-icon">
                                <img src="{{ asset('assets/images/commom/logos/logo_colors.png') }}" alt="homepage" class="dark-logo app_width-180px" />
                            </b>
                        </a>

                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                            <i class="mdi mdi-menu"></i>
                        </a>
                    </div>

                    <div class="navbar-collapse collapse app_background-fafafa" id="navbarSupportedContent" data-navbarbg="skin5">
                        <ul class="navbar-nav float-start me-auto"></ul>

                        <ul class="navbar-nav float-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="m-r-10 mdi mdi-apps rounded-circle"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="https://www.eureciclo.com.br/" target="_blank">
                                        <i class="mdi mdi-link-variant m-r-5 m-l-5 app_marginright-10px"></i>
                                        Eu Reciclo
                                    </a>
                                    <a class="dropdown-item" href="https://github.com/Carlao-O/eureciclo-avaliacaodev-2022" target="_blank">
                                        <i class="ti-github m-r-5 m-l-5 app_marginright-10px"></i>
                                        GitHub
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="left-sidebar" data-sidebarbg="skin6">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/" aria-expanded="false">
                                    <i class="mdi mdi-home"></i>
                                    <span class="hide-menu">Início</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                    <i class="mdi mdi-upload"></i>
                                    <span class="hide-menu">Upload de Arquivos</span>
                                </a>
                            </li>
                            <li class="text-center p-40">
                                <a href="https://github.com/Carlao-O/eureciclo-avaliacaodev-2022" class="btn d-block w-100 btn-success text-white" target="_blank">Repositório no GitHub</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="page-wrapper">
                @hasSection('body')
                    @yield('body')
                @endif

                <footer class="footer text-center">
                    Eu Reciclo - Desafio de Programação proposto <a href="https://github.com/eureciclo/avaliacao_dev" target="_blank">aqui</a>.
                </footer>
            </div>
        </div>

        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/dist/js/app-style-switcher.js') }}"></script>
        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/dist/js/waves.js') }}"></script>
        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/dist/js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/dist/js/custom.js') }}"></script>
        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/assets/libs/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('assets/themes/flexy/bootstrap-lite/dist/js/pages/dashboards/dashboard1.js') }}"></script>
    </body>
</html>
