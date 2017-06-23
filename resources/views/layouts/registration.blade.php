<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
@include('components.nav')
<div class="container">
    <form class="form-horizontal" method="POST" action='/registration/'>
        <p>Registration form:</p>
        <input type="text" class="form-control" name="login" value="" placeholder="login">
        <input type="text" class="form-control" name="name" value="" placeholder="name">
        <input type="text" class="form-control" name="surname" value="" placeholder="surname">
        <input type="number" class="form-control" name="age" value="" placeholder="age">
        <input type="text" class="form-control" name="sex" value="" placeholder="sex">
        <input type="text" class="form-control" name="password" value="" placeholder="password">
        <input type="text" class="form-control" name="password-replay" value="" placeholder="password-replay">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input class="btn btn-primary" type="submit" value="Registration">
    </form>
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
