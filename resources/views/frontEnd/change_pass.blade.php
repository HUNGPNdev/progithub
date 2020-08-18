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
                <div class="panel-heading" style="text-align: center;text-transform: uppercase;"><h2>Change Password</h2></div>
                <div class="panel-body">
                    <form role="form" action="{{route('postchangepass')}}" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="">New Password</label>
                                <input class="form-control" placeholder="E-mail" name="password" type="text" required autofocus>
                                @error('password')<p style="color: red;">{{ $message }}</p>@enderror
                            </div>
                            <div class="form-group">
                                <label for="">Confirm password</label>
                                <input class="form-control" placeholder="E-mail" name="cof_pass" type="text" required autofocus>
                                @error('cof_pass')<p style="color: red;">{{ $message }}</p>@enderror
                            </div>
                            <input class="form-control hidden" name="code" type="text" value="{{$data}}">
                            <input type="submit" name="submit" value="login" class="btn btn-primary">
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
</body>

</html>

