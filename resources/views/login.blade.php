<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduadmin-template.multipurposethemes.com/bs4/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Apr 2023 16:24:53 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://eduadmin-template.multipurposethemes.com/bs4/images/favicon.ico">

    <title>{{config('app.name')}} - Login </title>

	<!-- Icon-->
	<link rel="stylesheet" href="{{asset('assets/icons/icomoon/style.css')}}">

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('assets/css/vendors_css.css')}}">

	<!-- Style-->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/skin_color.css')}}">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('images/auth-bg/bg-1.jpg')}})">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
                            @include('flashmessage')
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Connexion</h2>
								<p class="mb-0">Administrateur K.O Gestion Voiture</p>
							</div>
							<div class="p-40">
								<form action="{{route('connexion')}}" method="post">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" name="email" class="form-control pl-15 bg-transparent" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input name="password" type="password" class="form-control pl-15 bg-transparent" placeholder="Mot de passe">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-right">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Mot de passe oublié ?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">Connexion</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('assets/js/vendors.min.js')}}"></script>
	<script src="{{asset('assets/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>

</body>

<!-- Mirrored from eduadmin-template.multipurposethemes.com/bs4/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Apr 2023 16:24:56 GMT -->
</html>
