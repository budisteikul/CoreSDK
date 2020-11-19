@inject('General', budisteikul\coresdk\Helpers\GeneralHelper)
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
  <script src="{{ asset('js/admin-3.0.7.js') }}"></script>
  <link href="{{ asset('css/admin-3.0.7.css') }}" rel="stylesheet">
  
  <link href="{{ asset('vendor/sbadmin2/sb-admin-2.css') }}" rel="stylesheet">
  @stack('scripts')
  
  <style>
   body{
	color:#000000;
   }
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
  <style>
.container-fluid.widget.activity-time-selector {
  padding: 0px;
}
.container-fluid.widget.activity-time-selector .row-fluid [class*="span"] {
  min-height: 0;
}
html.rtl .activity-time-selector .radio-label span.time {
  padding-right: 20px;
}
.activity-time-selector .message {
  margin-top: 10px;
}
.activity-time-selector .checkbox,
.activity-time-selector .radio {
  margin-top: 0px;
  margin-bottom: 0px;
}
.activity-time-selector ul.nav {
  margin-bottom: 5px;
}
.activity-time-selector .no-pickup-msg {
  font-size: 0.8em;
  margin: 10px;
  margin-bottom: 15px;
  margin-top: 15px;
}
.activity-time-selector .pickup-price-container,
.activity-time-selector .dropoff-price-container {
  font-size: 0.8em;
  margin-top: 8px;
}
.activity-time-selector h4 {
  font-size: 16px;
  margin-bottom: 4px;
}
.activity-time-selector .roundbox {
  padding: 15px;
  border: 1px solid #DDD;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  font-size: 16px;
  vertical-align:middle;
}
.activity-time-selector .start-times table {
  margin-bottom: 0px;
}
.activity-time-selector .start-times table th {
  border-bottom-style: none;
}
.activity-time-selector .start-times table td span.label {
  margin-left: 8px;
}
.activity-time-selector .start-times table label {
  font-size: 14px;
}
.activity-time-selector .no-start-times-container {
  margin-top: 10px;
}
.activity-time-selector table.no-border {
  border-style: none;
}
.activity-time-selector table.no-border tr {
  border-style: none;
}
.activity-time-selector table.no-border tr td {
  border-style: none;
}
.activity-time-selector .activity-selector {
  margin-bottom: 20px;
}
.activity-time-selector .included-msg {
  color: #777;
}
.activity-time-selector .separate-msg {
  color: #777;
}
.activity-time-selector .booking-pax-restriction {
  font-size: 0.9em;
  margin-top: 5px;
  display: inline-block;
  margin-right: 10px;
}
.activity-time-selector .opening-hours .table {
  margin-bottom: 0px;
}
.activity-time-selector .opening-hours td {
  font-size: 0.9em;
}
.activity-time-selector .opening-hours h4 {
  font-weight: bold;
}
.activity-time-selector .passenger-selector-container .participant-selector {
  min-width: 90px;
  padding-right: 15px;
}
.activity-time-selector .passenger-selector-container .participant-selector label {
  font-size: 13px;
  margin-bottom: 1px;
}
.activity-time-selector .passenger-selector-container .participant-selector select {
  margin-bottom: 0px;
}
.activity-time-selector .passenger-selector-container .price-desc {
  font-size: 13px;
  clear: both;
  display: block;
  padding-top: 10px;
}
.activity-time-selector .passenger-selector-container .pickup-container,
.activity-time-selector .passenger-selector-container .dropoff-container {
  border-top: 1px solid #DDD;
  margin-top: 10px;
  padding-top: 10px;
}
.activity-time-selector .on-request-msg {
  margin-top: 8px;
}
.activity-time-selector label {
  font-size: 13px;
  vertical-align:center;
}
.activity-time-selector .extras-container .extras-pricingcategory-selectors {
  float: left;
  margin-right: 15px;
  margin-bottom: 10px;
  margin-top: 5px;
}
.activity-time-selector .extras-container .extras-pricingcategory-selectors select,
.activity-time-selector .extras-container .extras-pricingcategory-selectors input {
  font-weight: normal;
}
.activity-time-selector .extras-container .extra-unit-selector {
  font-size: 13px;
  margin-left: 18px;
}
.activity-time-selector .extras-container .included-extras h5 {
  margin-top: 15px;
  font-weight: bold;
  margin-bottom: 3px;
}
.activity-time-selector .extras-container .included-extras ul {
  margin-bottom: 0px;
}
.activity-time-selector .extras-container .included-extras li {
  font-size: 13px;
}
.activity-time-selector .total {
  text-align: right;
  font-size: 16px;
  margin-top: 10px;
}
.activity-time-selector .total .total-amount {
  display: inline-block;
  margin-left: 10px;
  font-weight: bold;
  font-size: 18px;
}
.activity-time-selector .total .total-amount .amount {
  font-size: 24px;
  font-weight: bold;
  margin-top: 5px;
}
.activity-time-selector .button-container {
  margin-top: 10px;
  text-align: right;
}
@media (min-width: 481px) {
  .activity-time-selector .passenger-selector-container .passenger-selector-separator {
    display: none;
  }
}
@media (max-width: 480px) {
  .activity-time-selector .passenger-selector-container .passenger-selector-separator {
    display: '';
  }
}
.availability-calendar .calendar-header {
  font-size: 20px;
  text-align: center;
  margin: 3px 0 15px;
  position: relative;
}
.availability-calendar .calendar-header .prev,
.availability-calendar .calendar-header .next {
  position: absolute;
  top: 0px;
}
.availability-calendar .calendar-header .prev {
  left: 0px;
}
.availability-calendar .calendar-header .next {
  right: 0px;
}
.availability-calendar .calendar-header h4 {
  font-size: 16px;
  margin: 0px;
}
.availability-calendar .calendar-header h4 a {
  display: inline-block;
  margin: 6px;
}
.availability-calendar .calendar-header .month-selector select {
  margin: 0px;
  margin-bottom: 2px;
}
.availability-calendar .calendar {
  width: 99%;
}
.availability-calendar .calendar th {
  text-align: center;
}
.availability-calendar .legend {
  padding-top: 4px;
  text-align: right;
  font-size: 0.9em;
}
.availability-calendar .legend .available,
.availability-calendar .legend .sold-out {
  position: relative;
  top: 2px;
  display: inline-block;
  width: 10px;
  height: 10px;
  border: 1px solid #AAA;
}
.availability-calendar .legend .available {
  background-color: #DFF0D8;
}
.availability-calendar .legend .sold-out {
  background-color: #F2DEDE;
}
.availability-calendar td.daycell {
  text-align: right;
  background-color: white;
  width: 14.25%;
  min-width: 30px;
  border: 1px solid #CCC;
}
.availability-calendar td.daycell .date {
  padding-right: 4px;
  padding-top: 6px;
  padding-bottom: 6px;
  border: 2px solid #FFF;
}
.availability-calendar td.daycell.not-in-month {
  color: #AAA;
  background-color: #EEE;
}
.availability-calendar td.daycell.not-in-month .date {
  border: 2px solid #EEE;
}
.availability-calendar td.daycell.today {
  font-weight: bold;
}
.availability-calendar td.daycell.available {
  color: #468847;
  background-color: #DFF0D8;
  cursor: pointer;
}
.availability-calendar td.daycell.available .date {
  border: 2px solid #DFF0D8;
}
.availability-calendar td.daycell.available.selected {
  color: #000;
}
.availability-calendar td.daycell.available.selected .date {
  border: 2px solid green;
  background-color: green;
  color: white;
}
.availability-calendar td.daycell.sold-out {
  color: #B94A48;
  background-color: #F2DEDE;
}
.availability-calendar td.daycell.sold-out .date {
  border: 2px solid #F2DEDE;
}
.availability-calendar td.daycell.sold-out.selected .date {
  border: 2px solid #000;
}
.dropoff-container
{
    display:none;   
}
.participant-selector
{
    font-weight:bold;
}
.pickup-container
{
    font-weight: bold;
}
@media (min-width: 768px) {
.daycell:hover, .daycell.past:hover, .daycell.soldout:hover, .daycell.not-in-month:hover {
    cursor:not-allowed;
}
.daycell.available:hover {
    background: #fff !important;
    cursor:pointer;
}
}

.btn-theme{
    background-color: #1D57C7;
    border-color:#1D57C7;
    color:#FFFFFF;
    
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    overflow: hidden;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: color, background-color, border-color;
    transition-property: color, background-color, border-color;
}

.btn-theme:hover{
    background-color: #2870fd;
    border-color:#2870fd;
    color:#FFFFFF;
}

.btn-theme:focus{
    background-color:#2870fd;
    border-color:#2870fd;
    color:#FFFFFF;
}
.btn-theme:active{
    background-color:#2870fd;
    border-color:#2870fd;
    color:#FFFFFF;
}
.btn-theme:not(:disabled):not(.disabled):active{
    color: #FFFFFF;
    background: #1D57C7;
    border-color: #1D57C7;
    outline: 0 none;
}
.btn-theme:not(:disabled):not(.disabled):focus{
    box-shadow: 0 0 5px #1D57C7;
}
.btn-theme[disabled] {
    background: #1D57C7 !important;
    border-color:#1D57C7 !important;
}
.btn-theme[disabled]:hover {
    background: #1D57C7 !important;
    border-color:#1D57C7 !important;
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
      
      <!-- ##################################################################### -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item 
      
        {{ (request()->is('cms/toursdk/product*')) ? 'active' : '' }}
        {{ (request()->is('cms/toursdk/category*')) ? 'active' : '' }}
        {{ (request()->is('cms/toursdk/channel*')) ? 'active' : '' }}
      
      ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
          <i class="fas fa-tag"></i>
          <span>LIBRARY</span>
        </a>
        <div id="collapse2" class="collapse 
        
        {{ (request()->is('cms/toursdk/product*')) ? 'show' : '' }}
        {{ (request()->is('cms/toursdk/category*')) ? 'show' : '' }}
        {{ (request()->is('cms/toursdk/channel*')) ? 'show' : '' }}
        
        " aria-labelledby="heading1" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item {{ (request()->is('cms/toursdk/product*')) ? 'active' : '' }}" href="{{ route('route_toursdk_product.index') }}"><i class="far fa-circle"></i> {{ __('Product') }}</a>
            
            <a class="collapse-item {{ (request()->is('cms/toursdk/category*')) ? 'active' : '' }}" href="{{ route('route_toursdk_category.index') }}"><i class="far fa-circle"></i> {{ __('Category') }}</a>
            
            <a class="collapse-item {{ (request()->is('cms/toursdk/channel*')) ? 'active' : '' }}" href="{{ route('route_toursdk_channel.index') }}"><i class="far fa-circle"></i> {{ __('Channel') }}</a>
            
           
          </div>
        </div>
      </li>
      <!-- ##################################################################### -->
      
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
<script src="{{ asset('assets/javascripts/apps/build/App-3.1.0.js') }}"></script>
</body>
</html>
