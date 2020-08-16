<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Travel | @yield('title')</title>
    <base href="{{asset('public/frontEnd')}}/">
    
    <link rel="icon" href="assets/img/about/pl.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/css/magnific-popup.css" />

    <link rel="stylesheet" href="assets/css/owl-carousel/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/owl-carousel/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="assets/css/normalize.css" />

    <link rel="stylesheet" href="assets/font/flaticon.css" />

    <link rel="stylesheet" href="assets/css/animate.css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/venobox.min.css" />


    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />

    <link rel="stylesheet" href="assets/css/responsive.css" />

    <link rel="stylesheet" href="assets/css/test.css">

    <link rel="stylesheet" href="assets/font/awesome/css/all.min.css">

    <link href="assets/cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">

    <link rel="stylesheet" href="assets/css/jquery-ui.theme.min.css">

    <link rel="stylesheet" href="assets/css/NoUiSlider/nouislider.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css"/>

    <link rel="stylesheet" href="assets/star-rating/jquery.rating.css">
</head>
<body>
    @if(Auth::guard("users_tb")->check())
    @if(Auth::guard("users_tb")->user()->check_register == 1)
    <section>
        <div class="container">
            <div class="row" id="check_register">
                <div class="showsend"> 
                    <h1 style="margin: 31px;">Your account has not been activated, please click 
                        <a href="{{route('post_mail_index',Auth::guard('users_tb')->user()->email)}}" id="sendmail">here</a>!
                    </h1>
                    <h1 style="margin: 0px 130px;"> @include('errors.note')</h1>
                </div>
                <div class="d-none plas">
                    <h1 style="margin: 73px 130px;">Please check your mail to continue!</h1>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endif
    <div class="header-most-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-8 col-12">
                    <div class="main-flex-top">
                        <div class="email sel d-flex">
                            <div class="main-email-text d-flex">
                                <i class="fas fa-envelope"></i>
                                <p>hung929912a@gmail.com</p>
                            </div>
                            <div class="main-loc-text d-flex">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>78 5th Ave, New York, Ny 10011, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 col-12">
                    <div class="login-area">
                        <div class="seclict-area">
                            <img src="assets/img/common-img/flg.png" alt="img" />
                            <select name="cars">
                                <option value="volvo">USA</option>
                                <option value="audi">BAN</option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                        @if(Auth::guard("users_tb")->check() && session('id'))
                        <div class="user-log">
                            @if(session("image")!='')
                            <i><img src="../../storage/app/users/{{session('image')}}" style="width: 20px; border-radius: 50%;" alt=""></i>
                            @else
                            <i class="far fa-user-circle" style="display: inline-block;"></i>
                            @endif
                            <p style="display: inline-block;" class="dropdown-toggle" data-toggle="dropdown">
                                {{session("name")}}
                            </p>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{asset('userlogout')}}">LogOut</a>
                                <a class="dropdown-item"  data-toggle="modal"  data-target="#myModalSetting">Setting Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myModalSetting" role="dialog" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">
                                        &times;
                                    </button>
                                    <div class="model-details">
                                        <h5>Setting Acount</h5>
                                        <div class="mdel-form">
                                            <form action="{{route('userlogin.edit',['id'=>session('id')])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Name</label>

                                                    <input class="form-control" placeholder="Name" name="name" value="{{session('name')}}" type="text" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Old password</label>
                                                    <input class="form-control password" placeholder="Old password" name="oldpass" type="text" value=""  autofocus>
                                                    @error('oldpass')<p style="color: red;">{{ $message }}</p>@enderror
                                                    <div style="height: 20px;">
                                                        <span id="oldpass" style="width: 20px; color: red;"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Password</label>
                                                    <input class="form-control password" placeholder="Password" name="password" type="text" value=""  autofocus>
                                                    @error('password')<p style="color: red;">{{ $message }}</p>@enderror
                                                    <div style="height: 20px;">
                                                        <span id="pass" style="width: 20px; color: red;"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Confirm password</label>
                                                    <input type="text" class="form-control conf_pas" name="conf_pas" value="" placeholder="input new password">
                                                    @error('conf_pas')<p style="color: red;">{{ $message }}</p>@enderror
                                                    <div style="height: 20px;">
                                                        <span id="sp_pas" style="width: 20px; color: red;"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Phone</label>
                                                    <input class="form-control" placeholder="phone number" name="phone" value="{{session('phone')}}" type="text" autofocus>
                                                </div>
                                                <div class="checkbox">
                                                    <b>Gender: </b><br>
                                                    @if(session('gender'))
                                                    <label>
                                                        <input type="radio" name="gender" value="1" checked ;>Male
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="gender" value="0" >Female
                                                    </label>
                                                    @else
                                                    <label>
                                                        <input type="radio" name="gender" value="1";>Male
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="gender" value="0" checked >Female
                                                    </label>
                                                    @endif
                                                </div>
                                                <div class="form-group" >
                                                    <label>Your avatar: </label><br>
                                                    <input id="img" type="file" name="img" hidden onchange="changeImg(this)">
                                                    @if(session("image")!='')
                                                    <img id="avatar" class="thumbnail" alt="img" width="200px" src="../../storage/app/users/{{session('image')}}">
                                                    @else
                                                    <img id="avatar" class="thumbnail" width="100px" src="assets/img/common-img/flg.png">
                                                    @endif
                                                </div>
                                                <div class="sunb-btn-mod">
                                                    <button type="submit" class="btn btn-3 widet-2">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="user-log">
                        <i class="far fa-user-circle"></i>
                        <a href="{{route('userlogin')}}">Sign In</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<header class="site-header header-style-one">
    <div class="site-navigation style-one">
        <div class="">
            <div class="row align-items-center " style="margin-right: -30px;">
                <div class="col-9 row ">
                    <div class="col-2"></div>
                    <div class="  navbar navbar-expand-lg navigation-area col-9">
                        <div class="site-branding ">
                            <a class="site-logo" href="{{asset('home')}}">
                                <img src="assets/img/logo.png" alt="Site-logo" />
                            </a>
                        </div>
                        <div class="mainmenu-area">
                            <nav class="menu">
                                <ul id="nav">
                                    <li class="">
                                        <a class="" href="{{asset('')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('user/tour/tourpackages')}}">Tour Packages</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('user/service')}}">Service</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('user/gallery')}}">Gallery</a>
                                    </li>
                                    <li class="dropdown-trigger">
                                        <a href="{{asset('')}}">Page</a>
                                        <ul class="dropdown-content">
                                            <li><a href="{{asset('user/blog')}}">Blog</a></li>
                                            <li><a href="{{asset('user/about')}}">About</a></li>
                                            <li><a href="{{asset('user/faqs')}}">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="{{asset('user/contact')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <span class="cnt-area col-3" style="height: 70px;">
                    <h3>1-1235-536-5896</h3>
                    <p>Toll Free & 24/7 Availabel</p>
                    <a href="{{asset('user/contact')}}">
                        <div class="ctc">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                    </a>
                </span>
            </div>
        </div>
    </div>

    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-menu">
                        <a class="mobile-logo" href="index-2.html">
                            <img src="assets/img/logo.png" alt="logo" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('main')
<footer id="footer-all-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="all-fott-cov">
                    <div class="footer0logo">
                        <a href="#"><img src="assets/img/logo.png" alt="img" /></a>
                    </div>
                    <div class="footer-para">
                        <p>
                            Pellentesque convallis, diam et feugiat volutpat, tellus ligula consequat augue, quis malesuada nisi ante nec metus. Sed id pretium nunc. Mauris vitae porttitor tortor. Fusce aliquet ac metus eget egestas.
                        </p>
                    </div>
                    <div class="footer-form">
                        <div class="form-group d-flex">
                            <input type="text" placeholder="Enter your email" class="form-control" />
                            <button class="btn plean-footer">
                              <i class="fab fa-telegram-plane"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 col-6">
            <div class="quick-link">
                <div class="comm-foot-hed">
                    <h6>Quick Links</h6>
                </div>
                <div class="foot-list">
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="tour-packages.html">Tours & Trips</a></li>
                        <li><a href="tour-details.html">Locations Find</a></li>
                        <li><a href="contact.html">Contact Us.</a></li>
                        <li><a href="faq.html">Terms & conditions</a></li>
                        <li><a href="faq.html">Praivcy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
            <div class="quick-link-2">
                <div class="foot-list-2">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="faq.html">Testimonials</a></li>
                        <li><a href="gallery.html">Team</a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="blog.html">News</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="recent-fot-post mar-top-responsive">
                <div class="comm-foot-hed">
                    <h6>Recent Post</h6>
                </div>
                <div class="post-cover-foot">
                    <div class="pos-rece-1">
                        <div class="post-rect-img">
                            <a href="blog-single.html"><img src="assets/img/common-img/footer-blog.png" alt="" /></a>
                        </div>
                        <div class="podt-text-1">
                            <p>
                                <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
                                tellus ligula c</a>
                            </p>
                            <span>Sep 09, 2019</span>
                        </div>
                    </div>
                    <div class="pos-rece-1">
                        <div class="post-rect-img">
                            <a href="blog-single.html"><img src="assets/img/common-img/footer-blog-1.png" alt="" /></a>
                        </div>
                        <div class="podt-text-1">
                            <p>
                                <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
                                tellus ligula c</a>
                            </p>
                            <span>Sep 09, 2019</span>
                        </div>
                    </div>
                    <div class="pos-rece-1">
                        <div class="post-rect-img">
                            <a href="blog-single.html"><img src="assets/img/common-img/footer-blog-2.png" alt="" /></a>
                        </div>
                        <div class="podt-text-1">
                            <p>
                                <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
                                tellus ligula c</a>
                            </p>
                            <span>Sep 09, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-8">
                <div class="copy-right-para">
                    <p>And IT Themes © 2019. All Rights Reserved</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-4 col-4">
                <div class="copy-right-icon">
                    <a href="#"><i class="fab fa-facebook-f face no-ag"></i></a>
                    <a href="#"><i class="fab fa-twitter face"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in face"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-arrow-up"></i>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/html5shiv.js"></script>

<script src="assets/js/respond.min.js"></script>

<script src="assets/js/prettify.js"></script>

<script src="assets/js/venobox.min.js"></script>

<script src="assets/js/meanmenu.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/magnify-popup.js"></script>

<script src="assets/js/menu-custom.js"></script>

<script src="assets/js/custom.js"></script>

<script src="assets/js/function.js"></script>

<script src="assets/cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/NoUiSlider/nouislider.min.js"></script>

<script src="assets/js/NoUiSlider/wNumb.js"></script>

<script src="assets/star-rating/jquery.rating.js"></script>
@yield('tourjs')
<script>
    $('#sendmail').click(function(){
        $('.showsend').addClass('d-none');
        $('.plas').removeClass('d-none');
    });
    $('input[type=text][name=conf_pas]').change(function() {
        var conf_pas = $(this).val();
        var pass = $('input[name=password]').val();
        if(conf_pas != pass){
            document.getElementById("sp_pas").innerHTML = "Confirm password incorrect, please try again!";
        }else{
            document.getElementById("pass").innerHTML = "";
            document.getElementById("sp_pas").innerHTML = "";
        }
    });
    $('input[type=text][name=password]').change(function() {
        var pass = $(this).val();
        var conf_pas = $('input[name=conf_pas]').val();
        if(conf_pas != pass){
            document.getElementById("pass").innerHTML = "Please, Enter the Confirm password!";
        }else{
            document.getElementById("pass").innerHTML = "";
        }
    });
    
    function changeImg(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
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

    //ajax
    $(document).on('click','.pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        getpagetours(page);
    });
    function getpagetours(page){
        var _token = $("input[name=_token]").val();
        
        $.ajax({
          url:"{{ route('getpagetours') }}",
          method:"POST",
          data:{_token:_token, page:page},
          success:function(data)
          {
           $('#table_data').html(data);
       }
   });
    }

    // rating
    $('.star-0').rating({
        readOnly:true,
    });
    $('.star').rating({
    });
    $('.star-1').rating({
    });
    $('.star-2').rating({
    });
    $('.star-3').rating({
    });
    $('.star-4').rating({
    });
    $('.star-5').rating({
    });

</script>

</body>

</html>