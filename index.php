<!DOCTYPE html>
<html lang="en">
<head>
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="">

    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<!-- //copyright -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">

                <li><a href="#1">Section_1</a></li>
                <li><a href="#2">Section_2</a></li>
                <li><a href="#3">Section_3</a></li>
                <li><a href="#4">Section_4</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div id="1" style="min-height: 1000px;background:red; ">


</div>


<div id="2" style="min-height: 1000px;background:orange; ">


</div>



<div id="3" style="min-height: 1000px;background:deepskyblue; ">


</div>



<div id="4" style="min-height: 1000px;background:brown; ">


</div>







<script type="text/javascript" src="jquery-2.1.4.min.js">

</script>


<script>
    $(document).ready(function()
    { $('a[href*=#]').click(function()
    { if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) { var $target = $(this.hash); $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']'); if ($target.length) { var targetOffset = $target.offset().top; $('html,body') .animate({scrollTop: targetOffset}, 1000); return false; } } }); });
</script>

<!-- //PopUp-Box-JavaScript -->
</body>
</html>