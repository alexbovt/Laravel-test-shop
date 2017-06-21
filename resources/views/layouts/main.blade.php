<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Shop</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="/js/jQuery.js"></script>
    <link href="/css/starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="nav navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="col-md-4">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Store</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <form class="navbar-form ">
                <div class="input-group">
                    <input type="text" class="form-control input-search" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default button-search" type="submit">
                            <i class="fa fa-search "></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2">
            <ul class="nav navbar-nav nav-right">
                <li><a href="#"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-md-2">
            <ul class="nav navbar-nav nav-right">
                <li><a href="#"><i class="fa fa-user fa-lg" aria-hidden="true"></i></a>
                <li><a href="#"><i class="fa fa-sign-out fa-lg " aria-hidden="true"></i></a>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <div class="col-md-3">
            <div class="categories-block">
                <p>Products</p>
                <ul class="list-group">
                    @include('categories')
                </ul>
            </div>
            <div class="search-block">
                @yield('search-block')
            </div>
        </div>
        <div class="col-md-8">
            <div class="parametrs">
                @yield('parametrs')
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</div><!-- /.container -->

<footer class="footer">
    <div class="footer-content">
        <div class="col-md-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, officiis.</p>
            <p>Cum debitis dolore eius est illum sint suscipit tempore totam.</p>
            <p>Asperiores eos illum nihil officiis quos, saepe sunt veritatis voluptate!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, officiis.</p>
        </div>
        <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, officiis.</p>
            <p>Cum debitis dolore eius est illum sint suscipit tempore totam.</p>
            <p>Asperiores eos illum nihil officiis quos, saepe sunt veritatis voluptate!</p>
        </div>
        <div class="col-md-3">
            <ul class="list-group">
                <li><i class=" fa fa-facebook-square" aria-hidden="true"></i></li>
                <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                <li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
            </ul>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
