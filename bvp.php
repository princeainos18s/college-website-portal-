
  
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Colleg Portal</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.main-content{
	width: 50%;
	border-radius: 20px;
	box-shadow: 0 5px 5px rgba(0,0,0,.4);
	margin: 5em auto;
	display: flex;
}
.company__info{
	background-color: #FFD3C5;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	color: #fff;
}
.fa-android{
	font-size:3em;
}
@media screen and (max-width: 640px) {
	.main-content{width: 90%;}
	.company__info{
		display: none;
	}
	.login_form{
		border-top-left-radius:20px;
		border-bottom-left-radius:20px;
	}
}
@media screen and (min-width: 642px) and (max-width:800px){
	.main-content{width: 70%;}
}
.row > h2,h3{
	color:#008080;
}
.login_form{
	background-color: #E8BEAC;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
	border-top:1px solid #ccc;
	border-right:1px solid #ccc;
}
form{
	padding: 0 2em;
}
.form__input{
	width: 100%;
	border:0px solid transparent;
	border-radius: 0;
	border-bottom: 1px solid #aaa;
	padding: 1em;
	padding-left: 2em;
	outline:none;
	margin:1.5em auto;
	transition: all .5s ease;
	border-radius: 30px;
	
}
.form__input:focus{
	border-bottom-color: #008080;
	box-shadow: 0 0 5px rgba(0,80,80,.4); 
	border-radius: 30px;
}
.btn{
	transition: all .5s ease;
	width: 70%;
	color:#008080;
	font-weight: 600;
	background-color: #fff;
	margin-top: 1.5em;
	margin-bottom: 1em;
	padding: 1em;
}
.btn:hover, .btn:focus{
	background-color: #008080;
	color:#fff;
	}
.responsive {
  width: 100%;
  height: auto;
}

</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
<body>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><img class="responsive" src="images/login4.png"></span>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Bhausaheb Vartak Polytechnic<br> Vasai</h2>
						<h3>Online Live Class Portal</h3>
					</div>
					<div class="row">
												
							<div class="row">
								<center><a href="admin/login.php"><button type="button" class="btn btn-primary btn-lg btn-block">Teacher Login</button></a></center>
							</div>
							<div class="row">
								<center><a href="login.php"><button type="button" class="btn btn-primary btn-lg btn-block">Student Login</button></a></center>
							</div>
							<div class="row">
								<center>Coded by Tyco-1 Students</a></p></center>
							</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
</body>
  
  
  
  
  

</body>

</html>