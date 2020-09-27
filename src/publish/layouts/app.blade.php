<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ str_ireplace("www.","",$_SERVER['HTTP_HOST']) }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/admin-3.0.6.js') }}"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/admin-3.0.6.css') }}" rel="stylesheet">
   
    @stack('scripts')
    
    
</head>
<body>
    <div id="app">
    
    
    
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    @if (Route::has('route_outletsdk_outlets.index'))
                        @inject('Outlet', budisteikul\outletsdk\Classes\OutletClass)
                        @if(Session::has('outlet_id'))
                            {{$Outlet->outletName(Session::get('outlet_id'))}}
                        @else
                            My Application
                        @endif
                    @else
                    My Application
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            
                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-list"></i> Administrator <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Route::has('route_outletsdk_outlets.index'))
                                    <a class="dropdown-item" href="{{ route('route_outletsdk_outlets.index') }}"><i class="far fa-circle"></i> {{ __('Outlets') }}</a>
                                    @endif
                                    @if (Route::has('route_productsdk_products.index'))
                                    <a class="dropdown-item" href="{{ route('route_productsdk_products.index') }}"><i class="far fa-circle"></i> {{ __('Product') }}</a>
                                    @endif
                                    @if (Route::has('route_discountsdk_discounts.index'))
                                    <a class="dropdown-item" href="{{ route('route_discountsdk_discounts.index') }}"><i class="far fa-circle"></i> {{ __('Discount') }}</a>
                                    @endif
                                </div>
                              </li>
                             
                             @if (Route::has('route_monitoringsdk_stocks.index'))
                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-list"></i> Monitoring <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Route::has('route_monitoringsdk_stocks.index'))
                                    <a class="dropdown-item" href="{{ route('route_monitoringsdk_stocks.index') }}"><i class="far fa-circle"></i> Stocks</a>
                                    @endif
                                    @if (Route::has('route_monitoringsdk_transactions.index'))
                                    <a class="dropdown-item" href="{{ route('route_monitoringsdk_transactions.index') }}"><i class="far fa-circle"></i> Transaction</a>
                                    @endif
                                    @if (Route::has('route_monitoringsdk_dos.index'))
                                    <a class="dropdown-item" href="{{ route('route_monitoringsdk_dos.index') }}"><i class="far fa-circle"></i> Delivery Order</a>
                                    @endif
                                    @if (Route::has('route_monitoringsdk_sales.index'))
                                    <a class="dropdown-item" href="{{ route('route_monitoringsdk_sales.index') }}"><i class="far fa-circle"></i> Sales</a>
                                    @endif
                                </div>
                              </li>
                              @endif

                             @if (Route::has('route_stocksdk_stocks'))
                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-list"></i> Inventory <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Route::has('route_stocksdk_stocks'))
                                    <a class="dropdown-item" href="{{ route('route_stocksdk_stocks') }}"><i class="far fa-circle"></i> Stocks</a>
                                    @endif
                                    @if (Route::has('route_stocksdk_posaddstock.index'))
                                    <a class="dropdown-item" href="{{ route('route_stocksdk_addstock.index') }}"><i class="far fa-circle"></i> Add Stock</a>
                                    @endif
                                    @if (Route::has('route_outletsdk_outlets.index'))
                                    <a class="dropdown-item" href="{{ route('route_stocksdk_do.index') }}"><i class="far fa-circle"></i> Delivery Order</a>
                                    @endif
                                    @if (Route::has('route_outletsdk_outlets.index'))
                                    <a class="dropdown-item" href="{{ route('route_stocksdk_mutation.index') }}"><i class="far fa-circle"></i> Mutation</a>
                                    @endif
                                </div>
                              </li>
                             @endif
                            
                             @if (Route::has('route_possdk_pos.index'))
                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-list"></i> Point of Sales <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('route_possdk_pos.index') }}"><i class="far fa-circle"></i> Create Transaction</a>
                                    <a class="dropdown-item" href="{{ route('route_possdk_report.index') }}"><i class="far fa-circle"></i> Report Transaction</a>
                                </div>
                              </li>
                             @endif
                             

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('route_coresdk_account.index') }}/setting"><i class="fas fa-cog"></i> {{ __('Account Setting') }}</a>
                                     
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    
    
    
        <main class="py-4">
         <div class="container-fluid">
            @yield('content')
         </div>
        </main>
    </div>
</body>

</html>