@include('include.head')

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

	@include('include.nav')

	<div class="content-wrapper">
		@yield('content')
	</div>

@include('include.footer')
