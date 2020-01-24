<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <script src="js/jquery2.2.4.js"></script>
    <script src="js/jq.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">


    <script>
        /*<![CDATA[*/ ! function(n) {
            var a = [],
                e = setInterval(function() {
                    if (B8.v) {
                        for (var n; n = a.pop();) B8.ready(n);
                        clearInterval(e)
                    }
                }, 100);
            n.B8 = n.B8 || {
                ready: function(n) {
                    a.push(n)
                }
            }
        }(window);
        /*]]>*/
    </script>

</head>  
<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top " style="direction:ltr">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar" >
      <a class="navbar-brand"  href="{{url('/homepage')}}"><img  src="desgin/img/WaslaLogoS.png" alt=""></a>
      <ul class="navbar-nav " style="margin-left:74%">
      <li class="nav-item">
        <a class="nav-link btn mr-3"  style="color: white;" href="{{url('/register')}}">Sing in</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn"  style="color: white;"  href="{{url('/login')}}">Login</a>
      </li>
    </ul>
  </div>
</nav> 
<body>

  <div>
    @yield('content')
  </div>

  <!-- End Sidebar -->
  <footer class="footer" style="margin-top: 45px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy;  wasla.com  2020-2019</span>
            </div>
        
            <div class="col-md-8">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a class="nav-link" href="{{url('/Trms')}}">
                      Privacy Policy & Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </footer>

</body>
</html>
