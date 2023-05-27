
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Custom Authencation </title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

 <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark active"  href="/">Home</a>
    <a class="p-2 text-dark" href="{{route('login')}}">Login</a>
 
    <a class="p-2 text-dark" href="#">Profile</a>
 
  </nav>
  <a class="btn btn-outline-primary" href="registration">Sign up</a>
</div>
  <div>
 @yield('register')
 </div>
 <div class="container-fluid" style="min-height:74vh;">
    @yield('body')

 </div>

 <footer style="height:100px;background:black;">

 </footer>
 <script src="{{asset('js/auth.js')}}"></script>


</body>
</html>
