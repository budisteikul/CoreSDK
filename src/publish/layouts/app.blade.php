<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>My Application</title>

  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="{{ asset('js/admin-3.0.6.js') }}"></script>
  <link href="{{ asset('css/admin-3.0.6.css') }}" rel="stylesheet">
  
  <link href="{{ asset('vendor/sbadmin2/sb-admin-2.css') }}" rel="stylesheet">
  @stack('scripts')
  <style>
   .card-header{
    color:#FFFFFF;
    background-color:#446bd6;
   }
   .table thead{
    background-color:#636363;
    color:#FFFFFF;
   }
   .badge{
    font-size:13px;
   }
   .btn-secondary{
    background-color:#636363;
   }
  </style>
</head>

<body id="page-top">


  <div id="wrapper">


    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-rocket"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MENU</div>
      </a>



      

      <!-- ##################################################################### -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{ (request()->is('cms/outletsdk*')) ? 'active' : '' }}{{ (request()->is('cms/usersdk*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          <i class="fas fa-fw fa-user-shield"></i>
          <span>ADMINISTRATOR</span>
        </a>
        <div id="collapse1" class="collapse {{ (request()->is('cms/outletsdk*')) ? 'show' : '' }}{{ (request()->is('cms/usersdk*')) ? 'show' : '' }}" aria-labelledby="heading1" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @if (Route::has('route_usersdk_users.index'))
            <a class="collapse-item {{ (request()->is('cms/usersdk/users*')) ? 'active' : '' }}" href="{{ route('route_usersdk_users.index') }}"> <i class="far fa-circle"></i> {{ __('Users') }}</a>
            @endif
            @if (Route::has('route_outletsdk_outlets.index'))
            <a class="collapse-item {{ (request()->is('cms/outletsdk/outlets*')) ? 'active' : '' }}" href="{{ route('route_outletsdk_outlets.index') }}"> <i class="far fa-circle"></i> {{ __('Outlets') }}</a>
            @endif
          </div>
        </div>
      </li>
      <!-- ##################################################################### -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{ (request()->is('cms/productsdk*')) ? 'active' : '' }}{{ (request()->is('cms/discountsdk*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
          <i class="fas fa-tag"></i>
          <span>LIBRARY</span>
        </a>
        <div id="collapse2" class="collapse {{ (request()->is('cms/productsdk*')) ? 'show' : '' }}{{ (request()->is('cms/discountsdk*')) ? 'show' : '' }}" aria-labelledby="heading1" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            @if (Route::has('route_productsdk_products.index'))
            <a class="collapse-item {{ (request()->is('cms/productsdk/products*')) ? 'active' : '' }}" href="{{ route('route_productsdk_products.index') }}"><i class="far fa-circle"></i> {{ __('Product') }}</a>
            @endif
            @if (Route::has('route_discountsdk_discounts.index'))
            <a class="collapse-item  {{ (request()->is('cms/discountsdk/discounts*')) ? 'active' : '' }}" href="{{ route('route_discountsdk_discounts.index') }}"><i class="far fa-circle"></i> {{ __('Discount') }}</a>
            @endif
          </div>
        </div>
      </li>
      <!-- ##################################################################### -->
      @if (Route::has('route_monitoringsdk_stocks.index'))
      @if (Route::has('route_possdk_pos.index') || Route::has('route_stocksdk_stocks'))
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{ (request()->is('cms/monitoringsdk*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
          <i class="fas fa-fw fa-binoculars"></i>
          <span>MONITORING</span>
        </a>
        <div id="collapse3" class="collapse {{ (request()->is('cms/monitoringsdk*')) ? 'show' : '' }}" aria-labelledby="heading2" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @if (Route::has('route_monitoringsdk_stocks.index'))
            @if (Route::has('route_stocksdk_stocks'))
            <a class="collapse-item {{ (request()->is('cms/monitoringsdk/stocks*')) ? 'active' : '' }}" href="{{ route('route_monitoringsdk_stocks.index') }}"><i class="far fa-circle"></i> {{ __('Stocks') }}</a>
            @endif
            @endif
            @if (Route::has('route_monitoringsdk_dos.index') && Route::has('route_outletsdk_outlets.index'))
            <a class="collapse-item {{ (request()->is('cms/monitoringsdk/dos*')) ? 'active' : '' }}" href="{{ route('route_monitoringsdk_dos.index') }}"><i class="far fa-circle"></i> {{ __('Delivery Order') }}</a>
            @endif
            @if (Route::has('route_possdk_pos.index'))
            @if (Route::has('route_monitoringsdk_transactions.index'))
            <a class="collapse-item {{ (request()->is('cms/monitoringsdk/transactions*')) ? 'active' : '' }}" href="{{ route('route_monitoringsdk_transactions.index') }}"><i class="far fa-circle"></i> {{ __('Transaction') }}</a>
            @endif
            @if (Route::has('route_monitoringsdk_sales.index'))
            <a class="collapse-item {{ (request()->is('cms/monitoringsdk/sales*')) ? 'active' : '' }}" href="{{ route('route_monitoringsdk_sales.index') }}"><i class="far fa-circle"></i> {{ __('Sales') }}</a>
            @endif
            @endif
          </div>
        </div>
      </li>
      @endif
      @endif
      <!-- ##################################################################### -->
      @if (Route::has('route_possdk_pos.index') || Route::has('route_stocksdk_stocks'))
      <hr class="sidebar-divider my-0">
      <li class="nav-item {{ (request()->is('cms/stocksdk*')) ? 'active' : '' }}{{ (request()->is('cms/possdk*')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
          <i class="fas fa-fw fa-boxes"></i>
          <span>
                  @if (Route::has('route_outletsdk_outlets.index'))
                  @inject('Outlets', budisteikul\outletsdk\Classes\OutletClass)
                  {{ strtoupper($Outlets->outletName(Session::get('outlet_id'))) }}
                  @else
                  Store
                  @endif
          </span>
        </a>
        <div id="collapse4" class="collapse {{ (request()->is('cms/stocksdk*')) ? 'show' : '' }}{{ (request()->is('cms/possdk*')) ? 'show' : '' }}" aria-labelledby="heading3" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             @if (Route::has('route_stocksdk_stocks'))
            <h6 class="collapse-header">Inventory:</h6>
            @if (Route::has('route_stocksdk_posaddstock.index'))
            <a class="collapse-item {{ (request()->is('cms/stocksdk/addstock*')) ? 'active' : '' }}" href="{{ route('route_stocksdk_addstock.index') }}"><i class="far fa-circle"></i> {{ __('Add Stock') }}</a>
            @endif
            @if (Route::has('route_stocksdk_stocks'))
            <a class="collapse-item {{ (request()->is('cms/stocksdk/stocks*')) ? 'active' : '' }}" href="{{ route('route_stocksdk_stocks') }}"><i class="far fa-circle"></i> {{ __('Stocks') }}</a>
            @endif
            @if (Route::has('route_outletsdk_outlets.index'))
            <a class="collapse-item {{ (request()->is('cms/stocksdk/do*')) ? 'active' : '' }}" href="{{ route('route_stocksdk_do.index') }}"><i class="far fa-circle"></i> {{ __('Delivery Order') }}</a>
            @endif
            @if (Route::has('route_outletsdk_outlets.index'))
            <a class="collapse-item {{ (request()->is('cms/stocksdk/mutation*')) ? 'active' : '' }}" href="{{ route('route_stocksdk_mutation.index') }}"><i class="far fa-circle"></i> {{ __('Mutation') }}</a>
            @endif
            @endif
            @if (Route::has('route_possdk_pos.index'))
            <h6 class="collapse-header">Point of Sales:</h6>
            <a class="collapse-item {{ (request()->is('cms/possdk/pos*')) ? 'active' : '' }}" href="{{ route('route_possdk_pos.index') }}"><i class="far fa-circle"></i> {{ __('Create Transaction') }}</a>
            <a class="collapse-item {{ (request()->is('cms/possdk/report*')) ? 'active' : '' }}" href="{{ route('route_possdk_report.index') }}"><i class="far fa-circle"></i> {{ __('Report Transaction') }}</a>
            @endif
          </div>
        </div>
      </li>
      @endif
      <!-- ##################################################################### -->
      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- ##################################################################### -->
    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

      	<!-- ##################################################################### -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 text-right">
                  {{ Auth::user()->name }} 
                  <br />
                  @inject('General', budisteikul\coresdk\Classes\GeneralClass)
                  <b>{{ $General->dateFormat("",6) }}</b>
                </span>
                <i class="ml-2 fas fa-3x fa-user-circle"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('route_coresdk_account.index') }}/setting">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                @if (Route::has('route_outletsdk_outlets.index'))
                <a class="dropdown-item" href="{{ route('route_outletsdk_outlets.index') }}/selector">
                  <i class="fas fa-building fa-sm fa-fw mr-2 text-gray-400"></i>
                  Outlet Selector
                </a>
                @endif
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- ##################################################################### -->

        <div class="container-fluid">
         
          @yield('content')

        </div>
        

      </div>

     
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; My Application 2020</span>
          </div>
        </div>
      </footer>
     

    </div>
    <!-- ##################################################################### -->

  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
<script src="{{ asset('vendor/sbadmin2/sb-admin-2.js') }}"></script>
</body>
</html>
