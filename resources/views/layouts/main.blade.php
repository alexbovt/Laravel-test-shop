<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
@include('components.nav')
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

@include('components.footer')


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
