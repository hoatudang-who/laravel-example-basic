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
      table {
            width: 100%;
        }
        
        td:first-child {
            text-align: center;
        }
  </style>
</head>
<body class="all">

<div class="jumbotron">
  <div class="container text-center">
    <h2>THIS IS WEBSITE</h2>      
    <p>We comeback together</p>
  </div>
</div><br><br>

<div class="container">
    <form action="{{URL::to('/wait')}}" method="post">
        <fieldset>
            <legend>Đăng kí tài khoản người mua</legend>
        <table class="table-hover">
            <tr>
                <td>Tên đăng nhập*</td>
                <td><input type="text" name="ten"></td>

            </tr>
            <tr>
                <td>Mật khẩu*</td>
                <td><input type="password" name="pas1"></td>

            </tr>
            <tr>
                <td>Xác nhận mật khẩu*</td>
                <td><input type="password" name="pas2"></td>

            </tr>
            <tr>
                <td>Họ và tên*</td>
                <td><input type="text" name="hoten"></td>

            </tr>
            
            <tr>
                <td>Địa chỉ*</td>
                <td><textarea name="dia" id="" cols="30" rows="3"></textarea></td>

            </tr>
            <tr>
                <td>Điện thoại*</td>
                <td><input type="number" name="dt"></td>

            </tr>
            <tr>
                <td>Email*</td>
                <td><input type="email" name="email"></td>

            </tr>
            
            <tr>
                <td>&nbsp;</td>
                <td><input class="btn btn-info" type="submit" name="button" value="Đăng ký" onclick="check()">
                    <input class="btn btn-warning" type="reset" name="reset" value="Làm lại"></td>

            </tr>
        </table>
    </fieldset>
    </form>
</div><br><br>

<footer class="container-fluid text-center">
  <p>THIS IS FOOTER</p>  
  
</footer>

</body>
</html>
