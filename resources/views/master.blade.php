


<html lang="en">
<head>
  <meta charset="utf-8">

  <title>E-commerce website</title>
  
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    {{View::make('header')}}
     @yield('content')
     {{View::make('footer')}}
</body>
<style>
.custom-login{
    height:500px;
    padding-top:100px;
    margin-left:400px;
}
.footer{
    margin-top:100px;
    margin-right:600px;
}
</style>
</html>
