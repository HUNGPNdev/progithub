<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms Login</title>
<link rel="icon" href="../frontEnd/assets/img/about/pl.png">
<base href="{{asset('public/backEnd')}}/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default " id="login">
				<div class="panel-heading" style="text-align: center;text-transform: uppercase;"><h2>Login</h2></div>
				<div class="panel-body">
					<form role="form" action="{{route('postuserlogin')}}" method="post">
						@include('errors.note')
						<fieldset>
							<div class="form-group">
								<label for="">Email</label>
								<input class="form-control" placeholder="E-mail" name="email" type="email" value="{{old('email')}}" autofocus="">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input class="form-control" placeholder="Password" name="password" type="password" value="{{old('password')}}">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
								<label>
									<a id="Register">Register?</a>
								</label>
								<label>
									<a href="{{route('forgetpass')}}">Forget password?</a>
								</label>
							</div>
							<input type="submit" name="submit" value="login" class="btn btn-primary">
							<a href="{{asset('/')}}" class="btn btn-info">Back Home</a>
						</fieldset>
						{{csrf_field()}}
					</form>
				</div>
			</div>

			<div class="login-panel panel panel-default hidden" id="register">
				<div class="panel-heading" style="text-align: center;text-transform: uppercase;"><h2>Register</h2></div>
				<div class="panel-body">
					<form role="form" action="{{route('post_register')}}" method="post">
						@include('errors.note')
						<fieldset>
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control " name="email" placeholder="E-mail" required type="email" autofocus>
							</div>
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control" placeholder="Name" name="name" required type="text" autofocus>
							</div>
							<div class="form-group">
								<label for="name">Password</label>
								<input class="form-control" placeholder="Password" name="password" required type="text" autofocus>
							</div>
							<div class="form-group">
								<label for="name">Phone</label>
								<input class="form-control" placeholder="phone number" name="phone" required type="text" autofocus>
							</div>
							<div class="checkbox">
								<b>Gender: </b><br>
								<label>
									<input type="radio" name="checkbox" value="1">Male
								</label>
								<label>
									<input type="radio" name="checkbox" value="0">Female
								</label>
							</div>
							<div class="form-group" >
								<label>Banner Images</label>
								<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
			                    <img id="avatar" class="thumbnail" width="100px" src="img/new_seo-10-512.png">
							</div><hr><br>
							<div class="checkbox">
								<label>
									<a id="sign">Sign In?</a>
								</label>
							</div>
							<input type="submit" name="submit" value="Register" class="btn btn-primary">
							<a href="{{asset('/')}}" class="btn btn-info">Back Home</a>
						</fieldset>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
		// formlogin
		$(document).ready(function() {
		    $('#Register').click(function(){
		    	$( "#login" ).addClass( "hidden" );
		    	$( "#register" ).removeClass( "hidden" );

			    $('#sign').click(function(){
			    	$( "#register" ).addClass( "hidden" );
			    	$( "#login" ).removeClass( "hidden" );
			    });
		    });
		});
	</script>	
</body>

</html>

