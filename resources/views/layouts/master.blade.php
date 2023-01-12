<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TuniCar</title>

<link rel="stylesheet" href="{{mix("css/app.css")}}" />

@livewireStyles

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    <x-topnav />
  <!-- /.navbar -->







  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    <img src="{{asset('images/logo.jpg')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8 ; margin-top:0.5em;">

<span style="font-weight:bold; color:#E13838 ; font-size: 1.6em;">Tuni<b style="font-weight:bold; color:#696969">Car</b></a>    </a>








    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
              <img src="{{asset('images/user.png')}}" alt="User Avatar" class="img-size-50 mr-2 img-circle">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ userFullName() }}</a>
        </div>
      </div>









 <!-- Sidebar Menu -->
      <x-menu />
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield("contenu")
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <!-- Control Sidebar -->
  <x-sidebar />
  <!-- /.control-sidebar -->





  <!-- Main Footer -->
  <footer class="main-footer" >

    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="">Emira Nefzi|Chaima Hermi</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->





<script src="{{ mix('js/app.js') }}"></script>


@livewireScripts

</body>
</html>