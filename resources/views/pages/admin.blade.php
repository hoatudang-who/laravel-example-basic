<!DOCTYPE html>
<head>
<title>Change of god | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="public/backend/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="public/backend/css/style.css" rel='stylesheet' type='text/css' />
<link href="public/backend/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="public/backend/css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="public/backend/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="public/backend/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="public/backend/js/jquery2.0.3.min.js"></script>
<script src="public/backend/js/raphael-min.js"></script>
<script src="public/backend/js/morris.js"></script>
</head>

<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    
    <ul class="nav pull-right top-menu">
           
    <li><a href="{{URL::to('/')}}"><i class="fa fa-key"></i>Logout</a></li>
            
    </ul>
    
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Người bán</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Người mua</span>
                    </a>
                </li>
                
            </ul>            
          </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
              <div class="panel-heading">
                Danh sách người Bán
              </div>
              
              <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                  <thead>
                    <tr>
                      
                      <th>Tên người bán</th>
                      <th>Tên cửa hàng</th>
                      <th>Sản phẩm</th>
                      <th>Địa chỉ</th>
                      <th>Điện thoại</th>
                      <th>Email</th>
                      
                      <th style="width:30px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--($all_saler as $key => $saler)-->
                    <tr>
                      
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                     
                      <td>
                        <a href="#" class="active styling-edit" ui-toggle-class="">
                          <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                        
                          <i class="fa fa-times text-danger text"></i>
                        </a>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              
            </div>
          </div>
    </section>
<!--main content end-->
</section>
</body>
</html>
