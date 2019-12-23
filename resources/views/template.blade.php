<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mulakat</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<link rel="stylesheet" href="/anasayfa/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/anasayfa/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="/anasayfa/css/matrix-style.css" />
	<link rel="stylesheet" href="/anasayfa/css/matrix-media.css" />
	<link href="/anasayfa/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" href="/anasayfa/css/jquery.gritter.css" />
    @yield('css')

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
	<h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
	<ul class="nav">
		<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Merhaba, </span><b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href=""><i class="icon-user"></i> Profilim</a></li>
				<li class="divider"></li>
				<li><a href=""><i class="icon-key"></i> Çıkış</a></li>
			</ul>
		</li>

	</ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i> Yönetim anasayfa</a>
	<ul>
		<li class="active"><a href=""><i class="icon icon-home"></i> <span>Yönetim Paneli</span></a> </li>

		<li><a href="" target="_blank"><i class="icon icon-home"></i> <span>Site Anasayfa</span></a> </li>


		<li><a href=""><i class="icon icon-cog"></i> <span>Site Ayarları</span></a> </li>
		<li><a href="{{route('index')}}"><i class="icon icon-folder-open"></i> <span>Komponentler</span></a> </li>
		<li><a href="{{route('p_index')}}"><i class="icon icon-pencil"></i> <span>Panolar</span></a> </li>
		<li><a href="{{route('c_index')}}"><i class="icon icon-user"></i> <span>Cariler</span></a> </li>
		<li><a href="{{route('s_index')}}"><i class="icon icon-copy"></i> <span>Satış</span></a> </li>
	</ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
	<!--breadcrumbs-->
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
	</div>
	<!--End-breadcrumbs-->

	<!--Action boxes-->
	<div class="container-fluid">
		@yield('icerik')
	</div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
	<div id="footer" class="span12"> 2019 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="/anasayfa/js/jquery.min.js"></script>
<script src="/anasayfa/js/jquery.ui.custom.js"></script>
<script src="/anasayfa/js/bootstrap.min.js"></script>
<script src="/anasayfa/js/jquery.flot.min.js"></script>
<script src="/anasayfa/js/jquery.flot.resize.min.js"></script>
<script src="/anasayfa/js/matrix.js"></script>
<script src="/anasayfa/js/jquery.gritter.min.js"></script>
<script src="/anasayfa/js/jquery.uniform.js"></script>
<script src="/anasayfa/js/select2.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

@if (Session::has('alert.config'))
	<script>
        swal({!! Session::pull('alert.config') !!});
	</script>
@endif
<script>

</script>
@yield('js')

</body>
</html>
