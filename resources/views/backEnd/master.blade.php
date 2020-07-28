<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin | @yield('title')</title>
<base href="{{asset('public/backEnd')}}/">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="../frontEnd/assets/img/blog/ic.png">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar active navbar-fixed-top" style="background-color: #337ab7;" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ route('admin.home') }}">Hùng Đây Rồi</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->name}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="{{route('admin.listadmin.index')}}"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"></use></svg> Admin</a></li>
			<li>
				<a href="{{ route('admin.roles.index') }}"><svg class="glyph stroked chain"><use xlink:href="#stroked-chain"></use></svg> Roles</a>
			</li>
			<li><a href="{{asset('admin/guider')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Tour Guider</a></li>
			<li><a href="{{asset('admin/tours')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Tours</a></li>
			<li><a href="{{asset('admin/packages')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Packages Tour</a></li>
			<li><a href="{{asset('admin/destination')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Destination</a></li>
			<li><a href="{{asset('admin/blog')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Blog</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
	</div><!--/.sidebar-->
	
	@yield('main')
		  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	@yield('angular')
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		function changeImgs(input){
			for (var i = 0; i < input.files.length; i++) {

				var reader = new FileReader();

				reader.onload = function(e){
					var _html = '';

					_html +='<div class="col-md-3 thumbnail">';
					_html +='<img src="'+e.target.result+'" alt="">';
					_html +='</div>';

					$('#show_imgs').append(_html);
				}
				reader.readAsDataURL(input.files[i]);
			$( "#ahihi" ).addClass( "hidden" );
			}
		}

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


	</script>	
</body>

</html>
