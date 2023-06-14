
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Sistem Informasi | Pemunda GIDI</title>

  <link href="images/gidi.jpg" rel="icon">
  {{-- link boostrapp --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::to('/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
     <!-- jvectormap -->
  <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Tema style -->
  <link rel="stylesheet" href="{{URL::to('/dist/css/AdminLTE.min.css')}}">
  <!-- Color and bakcground -->
  <link rel="stylesheet" href="{{URL::to('/dist/css/skins/_all-skins.min.css')}}">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::to('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::to('/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ URL::to('/plugins/summernote/summernote-bs4.min.css') }}">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('pusat') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>GI</b>DI</span>
          <!-- logo for regular state and mobile devices -->

        <span class="logo-lg"><img src="images/gidi.jpg" class="img-circle" alt="GIDI" style="width:24%;" > <i class="fa-solid fa-hands-bound"></i>PEMUDA <b>GIDI</b></span></a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

             <!-- Notifications Dropdown Menu -->
              
            <!-- End Notofikasi -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown">
                <a href="#"
                 data-toggle="dropdown">
                 <i class="fa  fa-user"></i>
                 <span>{{ Auth::user()->name }}</span>
                 <i class="caret"></i>
                </a>
                <ul class="dropdown-menu">

                  <!-- Menu Ecount-->
                  <li class="user-footer">
                      <li><a href="{{url('datapassword')}}"><i class="fa fa-gear fa-fw"></i> Ganti Passwor Baru</a></li><br>
                      <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Keluar</a></li>
                      <i class="fa-solid fa-right-from-bracket"></i>
                      <li class="divider"></li>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </div>
        </nav>
      </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
    <section class="sidebar">
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active  menu-open">
          <a href="{{url('pusat')}}">
            <i class="nav-icon fas fas fa-clinic-medical"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i>
            <span>Profil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('data-visimisi')}}"><i class="fa fa-chevron-circle-down nav-icon"></i> Visi dan Misi</a></li>
            <li><a href="{{ url('data-organisasi') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Struktur Organisasi</a></li>
            <li><a href="{{ url('data-sejarah')}}"><i class="fa fa-chevron-circle-down nav-icon"></i> Sejarah</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="nav-icon far fa-address-card"></i> <span> Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('ketua-pusat') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Data Kordinator Pusat</a></li>
            <li><a href="{{url('datwilayah')}}"><i class="fa fa-chevron-circle-down nav-icon"></i> Data Pengurus Wilayah</a></li>
            <li><a href="{{ url('datklasis') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Data Pengurus Klasis</a></li>
            <li><a href="{{ url('datpemuda') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Data Pengurus Pemuda</a></li>
            <li><a href="{{ url('datanggota') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Data Anggota Pemuda</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span> Program Kerja</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('pusats') }}"><i class="	fa fa-chevron-circle-down nav-icon"></i> Kordinatr Pusat</a></li>
            <li><a href="{{ url('data-wprogram') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Kordinator Wilayah</a></li>
            <li><a href="{{ url('data-kprogram') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Kordinator Klasis</a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-dollar"></i> <span> Keuangan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('dataiuran') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Iuran Wajib</a></li>
              <li><a href="{{ url('data-danalain') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Dana Lain</a></li>
            </ul>
          </li>
          <li>
            <a href="{{ url('data-kegiatan') }}">
              <i class="nav-icon fas fa-clone"></i> <span> Kegiatan</span>
            </a>
          </li>
        <li>
          <a href="{{ url('data-renungan') }}">
            <i class="nav-icon	fas fa-bible"></i> <span> Renungan</span>
          </a>
        </li>
        <li class="treeview">
            <a href="{{ url('data-galeri') }}">
              <i class="nav-icon fas fa-image"></i> <span> Galeri</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('data-video') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Video</a></li>
              <li><a href="{{ url('data-galeri') }}"><i class="fa fa-chevron-circle-down nav-icon"></i> Foto</a></li>
            </ul>
          </li>    
          <li>
        </li>
    </section>
    <!-- End sidebar -->
  </aside>

    <!--- ====================================== -->
    <!-- Content halaman admin -->
   <div class="content-wrapper">
 

    <section class="content">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header"> <a href="{{ url('pusat') }}">Home</a> {{ __('/ Dashboard') }}</div>
                <hr>
        </div>
    </div>
</div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-6 " >
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <div id="container">
              </div>
              <div id="tim">
              </div>
            </div>
              <div class="row">
                <div class="col-lg-4 " >
            <h4 class="text-center" style="font-family:Arial, Helvetica, sans-serif" > <b> Pengumuman</b></h4>
            @foreach ($pengumuman as $p)
     
            <br>
            <div class="card shadow  ">
            <div class="card-body " >
           
            <div class="card-title fw-bold  "> <h4><i class="fas fa-arrow-circle-right"></i> <b> {{ $p->judul }}</b></h4></div>
           
                 <div class="text-secondary ">{!! \Str::limit($p->isi,100) !!} </div>  
                <a  href="{{ url('datapengumuman/show_pengumuman', $p->id) }}" class="btn btn-primary"> Selekapnya</a> 
              <br><br>
                <b> Tanggal: {{$p->created_at->tz('Asia/Jakarta')->format('d M Y H:i') }}</b>
                <hr>
            </div>
             </div>
                
            @endforeach
                </div>
          </div> 
          </div>
          <hr>

          <div class="row">
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info " style="background: rgb(100, 137, 194)" >
                <div class="inner">
                  <h3>{{  number_format($cownlakilaki, 0, ',', '.')  }}<sup style="font-size: 20px"></sup></h3>

                  <p style="color: white">Laki-Laki</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                  {{-- <i class="ion ion-bag"></i> --}}
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box " style="background: rgb(100, 137, 194)" >
                <div class="inner">
                  <h3>{{  number_format($cownperempuan, 0, ',', '.')  }}<sup style="font-size: 20px"></sup></h3>

                  <p style="color: white">Perempuan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box " style="background:  rgb(100, 137, 194)" >
                <div class="inner">
                  <h3>{{  number_format($count, 0, ',', '.')  }}<sup style="font-size: 20px"></sup></h3>

                  <p style="color:white">Jumlah Anggota Pemunda</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="{{ url('datanggota') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>           
            </div>
          </div>
  <hr>


        </div>

    @yield('content')
    </div>

    </section>
<!-- End Content halaman admin -->

  <!-- Halaman Footer -->
  <footer class="main-footer btn-primary text-center" style="background: grey" >
    <p class="text" style="color: white">
      <strong> Sistem Information Youth GIDI.  Copyright &copy; BPP. Badan Pengurus Pusat (GIDI).</strong> All rights reserved.
    </p>
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <ul class="control-sidebar-menu">
          <li>
          </li>
        </ul>
      </div>
    </div>
  </aside>
</div>


<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('/dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="{{URL::to('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{URL::to('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll -->
<script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::to('/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('/dist/js/demo.js')}}"></script>
 {{-- Create the chart --}}
 <script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  
  // Create the chart
Highcharts.chart('container', {
chart: {
    type: 'column'
},
title: {
    align: 'center',
    text: 'DATA WILAYAH'
},

accessibility: {
    announceNewData: {
        enabled: true
    }
},
xAxis: {
    type: 'category'
},
yAxis: {
    title: {
        text: '<b style="font-size:9px">TOTAL PERSENT WILAYAH</b>  <span style="font-size:9px">'
    }

},
legend: {
    enabled: false
},
plotOptions: {
    series: {
        borderWidth: 0,
        dataLabels: {
            enabled: true,
            format: '{point.y:.1f}%'
        }
    }
},

tooltip: {
    headerFormat: '<span style="font-size:9px">{series.name}</span><br>',
    pointFormat: '<span style="font-size:9px;color:{point.color}"> <b style="font-size:9px;">{point.name}</span>:</b> <b style="font-size:9px;"><b style="font-size:12px;"> {point.y:.2f}%</b> of total</b><br/>'
},

series: [
    {
        name: '<b style="font-size:9px">WILAYAH</b>  <span style="font-size:9px">',
        colorByPoint: true,
        data: [
          {
          name: 'Toli',
                y:  {{ $cowntoli }},
                drilldown: 'Toli'
            },
            {
                name: 'Bogo">',
                y: {{ $cownbogo }},
                drilldown: 'Bogo'
            },
            {
                name: 'Yamo',
                y: {{ $cownyamo }},
                drilldown: 'Yamo'
            },
            {
                name: 'Yahukimo',
                y: {{ $cownyahukimo }},
                drilldown: 'Yahukimo'
            },
            {
                name: 'Pengunungan Bintang',
                y: {{ $cownbintang}},
                drilldown: 'Pengunungan Bintang'
            },
            {
                name: 'Pantai Selatan',
                y: {{ $cownselatan }},
                drilldown: 'Pantai Selatan'
            },
            {
                name: 'Pantai Utara',
                y: {{ $cownutara }},
                drilldown: 'Pantai Utara'
            },
            {
                name: 'Jasumbas',
                y: {{ $cownjasumbas }},
                drilldown: 'Jasumbas'
            }
            
        ]
    }
],

});
</script>
<style>
name{
font-family: Arial, Helvetica, sans-serif;
font-size:40px;
}
</style>
<script>
// Create the chart
Highcharts.chart('tim', {
chart: {
    type: 'pie'
},
title: {
    text: 'DATA STATISTIK ',
  
},
accessibility: {
    announceNewData: {
        enabled: true
    },
    point: {
        valueSuffix: '%'
    }
},

plotOptions: {
    series: {
        borderRadius: 5,
        dataLabels: {
            enabled: true,
            format: '{point.name}: {point.y:.1f}%'
        }
    }
},

tooltip: {
    headerFormat: '<span style="font-size:9px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color} font-size:10px">{point.name}</span>: <b style="font-size:9px">{point.y:.2f}% total</b>   <br/>'
},

series: [
    {
        name: '  <b style="font-size:9px">STATIK DATA</b>',
        colorByPoint: true,
        data: [
            {
                name: 'Ketua Pusat',
                y: {{ $cownpusat }},
                drilldown: 'Ketua Pusat>'
            },
            {
                name: 'Ketua Wilayah',
                y: {{ $cownwilayah }},
                drilldown: 'Ketua Wilayah'
            },
            {
                name: 'Ketua Klasis',
                y: {{ $cownklasis }},
                drilldown: 'Ketua Klasis'
            },
            {
                name: 'Ketua Pemuda',
                y: {{ $cownpemuda }},
                drilldown: 'Ketua Pemuda'
            },
          
        ]
    }
],

});
</script>
</body>
</html>

