<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	{{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" /> --}}
	<style>
		.id_card{
			width: 375px;
			height: 233px;
			border: 1px solid #000000;
			margin-left:150px;
			margin-top: 50px;
			background-image: url("img/background.png");
			background-size: 375px 233px;
			padding: 0;
		}

		.id_card .all{
			background-image: url("img/wlogo.png");
			background-size: 375px 233px;
			background-position: center;
		}

		.top{
			height: 50px;
			background-color: rgba(41,182,246 ,.3);
			padding: 0;
			margin:0;
			border-bottom: 1px solid #000;
		}

		.top .logo{
			float: left;
			border: transparent;
			padding-left: 5px;
			margin:0;
			width: 20%;

		}

		.top .logo img{
			width: 50px;
			height: 50px;
		}

		.top .company h3{
			color: #ff0000;
			margin-left: 10px;
			width: 80%;
		}

		.top .company{
			padding-right: 0;
			margin: 0;
		}



		.bottom{
			background-color: rgba(255,255,255 ,.1);
			height: 183px;
			padding: 0;
			width: 100%;
			margin:0;
		}

		.bottom .pic{
			float: left;
			border: transparent;
			padding:0;
			margin: 0;
			width: 25%;
			background-color: rgba(41,182,246 ,.3);
			height: 183px;
		}
		.bottom .pic img{
			width: 80px;
			height: auto;
			margin-left: 6px;
			margin-top: 6px;
		}

		.bottom .cont {
			width: 75%;
			border: transparent;
			height: 183px;
			float: right;
			margin-left: 5px;
			background-color: rgba(0,150,136,.2);
			
		}

		.bottom .cont label{
			margin:0;
			padding: 0;
		}

		.bottom .cont strong{
			padding: 0;
			font-size: 15;
		}

		.qr_code{
			height: 90px;
			width: 90px;
			float: left;
			margin: 5px 15px;
			float: right;
		}


	</style>

</head>


<body>
	<div class="id_card col-md-12 col-sm-12">
		<div class="all">
			<div class="top  col-md-12 col-sm-12">
				<div class="logo col-md-2 col-sm-2">
					<img src="{{ asset('img/ilogo.png') }}" alt="" >
				</div>

				<div class="company col-md-10 col-sm-10">
					<h3 class="">The Viral Soft Inc.</h3>
				</div>
			</div>

			<div class="bottom  col-md-12 col-sm-12">
				<div class="pic col-md-3 col-sm-3">
					<img src="{{ asset('img/'.$user->image) }}" alt="" width="auto;" height="80px;">
					<p style="padding-left:6px">Designation</p>
				</div>

				<div class="cont col-md-12 col-sm-12">
					<label>Name:</label><br>
					<strong style="color: #6200EA">{{ $user->name }}</strong><br>

					<label><img src="{{ asset('img/envelope.png') }}" alt="" width="12px" height="12px"></label>
					{{ $user->email }}<br>

					<div class="qr_code visible-print">
						<img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate("Name:$user->name; Gender:$user->gender; Cell No:$user->cell; E-mail:$user->email; Blood Group:$user->b_group; Birth Date:$user->bday")) }} ">
					</div>

					<label><img src="{{ asset('img/calendar.png') }}" alt="" width="12px" height="12px"></label>
					{{ $user->bday }}<br>
					


					<label><img src="{{ asset('img/cell.png') }}" alt="" width="12px" height="12px"></i></label>
					{{ $user->cell }}<br>

					<label><img src="{{ asset('img/gender.png') }}" alt="" width="12px" height="12px"></label>
					{{ $user->gender }}<br>

					<label><img src="{{ asset('img/blood.png') }}" alt="" width="12px" height="12px"></label>
					{{ $user->b_group }}<br>

						
				</div>
			</div>

		</div>
	</div>
</body>
</html>