<!DOCTYPE html>
<html lang="en">
<head>
  <title>IMPL test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
     .jumbotron {
      margin-bottom: 0;
    }
   
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	   
     .all {
		  width:90%;
		  margin:auto;
	  }
  </style>
</head>
<body class="all">

<div class="jumbotron">
  <div class="container text-center">
    <h2>THIS IS WEBSITE</h2>      
    <p>We comeback together</p>
  </div>
</div>
<div>
  @yield('content')
</div><br><br>

<div class="container">    
  <div class="row">

    <div class="col-sm-12">
	  <div class="col-sm-4">
      <button class="btn btn-info"> Đăng nhập</button>
    </div>
     
    <div class="col-sm-4" style="text-align: center">
    <form action="{{URL::to('/admin')}}" method="post">
      {{ csrf_field() }}
		<div class="form-group">
		  <label for="User">User:</label>
		  <input type="text" placeholder="User name" class="form-control" name="admin_user">
		</div>
		<div class="form-group">
		  <label for="pwd">Password:</label>
		  <input type="password" placeholder="Password" class="form-control" name="admin_password">
		</div>
		<div class="checkbox">
		  <label><input type="checkbox"> Remember me</label>
		</div>
    <input class="btn btn-info" type="submit" value="Enter">
    <input class="btn btn-warning" type="reset" value="reset">
	  </form>
    </div>

    <div class="col-sm-4"></div>
    
    </div>
  </div><br><br>

  <hr style="height:50px; background-color:lightgrey">
  <br><br>

  <div class="row">
    <p style="text-align:center"><i>Nếu Bạn chưa có tài khoản. Vui lòng đăng kí với vài bước đơn giản!</i></p>
    <div class="col-sm-12">

  <div class="col-sm-2">
  </div>
  <div class="col-sm-4"> 
    <div class="panel panel-success">
      <div class="panel-heading"><a href="nguoi-mua">NGƯỜI MUA ĐĂNG KÍ</a></div>
      <div class="panel-body">
        <img style="height:300px" src="public/frontend/image/girl2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
      
    </div>
  </div>
  <div class="col-sm-4"> 
    <div class="panel panel-success">
      <div class="panel-heading"><a href="nguoi-ban">NGƯỜI BÁN ĐĂNG KÍ</a></div>
      <div class="panel-body">
        <img style="height:300px" src="public/frontend/image/man-two.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
      
    </div>
  </div>
  <div class="col-sm-2"></div>
  
  </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>THIS IS FOOTER</p>  
  
</footer>

</body>
</html>
