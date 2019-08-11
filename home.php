<!DOCTYPE html>
<html>
<head>
	<title>Kelompok 4</title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
			font-family: century gothic;
		}

		header{
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("img/bg.jpg");
			height: 120vh;
			background-size: cover;
			background-position: center;
		}

		ul{
			list-style-type: none;
			float: right;
			margin-top: 20px;
		}

		ul li{
			display: inline-block;
		}

		ul li a{
			text-decoration: none;
			color: white;
			padding: 5px 20px;
			border: 1px solid transparent;
		}

		ul li a:hover{
			background-color: white;
			color: black;
		}

		ul li a.active{
			background-color: white;
			color: black;
		}

		.main{
			max-width: 1200px;
			margin: auto;
		}

		.title{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}

		.title h1{
			color: white;
			font-size: 66px;
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li><a href="#" class="active">Home</a></li>
				<li><a href="index.php">Tugas Pertama</a></li>
				<li><a href="#">Tugas Kedua</a></li>
				<li><a href="#">Tugas Ketiga</a></li>
				<li><a href="#">Tugas Keempat</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>SELAMAT DATANG</h1><br>
		</div>
	</header>

</body>
</html>