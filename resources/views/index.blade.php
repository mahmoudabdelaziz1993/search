<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

         <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>

        <title>Live Search with Ajax|page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        :focus {
outline: none;
}
.row {
margin-right: 0;
margin-left: 0;
}

.side-menu {
position:absolute;
width: 300px;
height: 100%;
background-color: #f8f8f8;
border-right: 1px solid #e7e7e7;
}
.side-menu .navbar {
border: none;
}
.side-menu .navbar-header {
width: 100%;
border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav .active a {
background-color: transparent;
margin-right: -1px;
border-right: 5px solid #e7e7e7;
}
.side-menu .navbar-nav li {
display: block;
width: 100%;
border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav li a {
padding: 15px;
}
.side-menu .navbar-nav li a .glyphicon {
padding-right: 10px;
}
.side-menu #dropdown {
border: 0;
margin-bottom: 0;
border-radius: 0;
background-color: transparent;
box-shadow: none;
}
.side-menu #dropdown .caret {
float: right;
margin: 9px 5px 0;
}
.side-menu #dropdown .indicator {
float: right;
}
.side-menu #dropdown > a {
border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body {
padding: 0;
background-color: #f3f3f3;
}
.side-menu #dropdown .panel-body .navbar-nav {
width: 100%;
}
.side-menu #dropdown .panel-body .navbar-nav li {
padding-left: 15px;
border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body .navbar-nav li:last-child {
border-bottom: none;
}
.side-menu #dropdown .panel-body .panel > a {
margin-left: -20px;
padding-left: 35px;
}
.side-menu #dropdown .panel-body .panel-body {
margin-left: -15px;
}
.side-menu #dropdown .panel-body .panel-body li {
padding-left: 30px;
}
.side-menu #dropdown .panel-body .panel-body li:last-child {
border-bottom: 1px solid #e7e7e7;
}
.side-menu #search-trigger {
background-color: #f3f3f3;
border: 0;
border-radius: 0;
position: absolute;
top: 0;
right: 0;
padding: 15px 18px;
}
.side-menu .brand-name-wrapper {
min-height: 50px;
}
.side-menu .brand-name-wrapper .navbar-brand {
display: block;
}
.side-menu #search {
position: relative;
z-index: 1000;
}
.side-menu #search .panel-body {
padding: 0;
}
.side-menu #search .panel-body .navbar-form {
padding: 0;
padding-right: 50px;
width: 100%;
margin: 0;
position: relative;
border-top: 1px solid #e7e7e7;
}
.side-menu #search .panel-body .navbar-form .form-group {
width: 100%;
position: relative;
}
.side-menu #search .panel-body .navbar-form input {
border: 0;
border-radius: 0;
box-shadow: none;
width: 100%;
height: 50px;
}
.side-menu #search .panel-body .navbar-form .btn {
position: absolute;
right: 0;
top: 0;
border: 0;
border-radius: 0;
background-color: #f3f3f3;
padding: 15px 18px;
}
/* Main body section */
.side-body {
margin-left: 310px;
}
/* small screen */
@media (max-width: 768px) {
.side-menu {
  position: relative;
  width: 100%;
  height: 0;
  border-right: 0;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu .brand-name-wrapper .navbar-brand {
  display: inline-block;
}
/* Slide in animation */
@-moz-keyframes slidein {
  0% {
    left: -300px;
  }
  100% {
    left: 10px;
  }
}
@-webkit-keyframes slidein {
  0% {
    left: -300px;
  }
  100% {
    left: 10px;
  }
}
@keyframes slidein {
  0% {
    left: -300px;
  }
  100% {
    left: 10px;
  }
}
@-moz-keyframes slideout {
  0% {
    left: 0;
  }
  100% {
    left: -300px;
  }
}
@-webkit-keyframes slideout {
  0% {
    left: 0;
  }
  100% {
    left: -300px;
  }
}
@keyframes slideout {
  0% {
    left: 0;
  }
  100% {
    left: -300px;
  }
}
/* Slide side menu*/
/* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
.side-menu-container > .navbar-nav.slide-in {
  -moz-animation: slidein 300ms forwards;
  -o-animation: slidein 300ms forwards;
  -webkit-animation: slidein 300ms forwards;
  animation: slidein 300ms forwards;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
   overflow-y: scroll;
}
.side-menu-container > .navbar-nav {
  /* Add position:absolute for scrollable menu -> see top comment */
  position: fixed;
  left: -300px;
  width: 300px;
  top: 43px;
  height: 100%;
  border-right: 1px solid #e7e7e7;
  background-color: #f8f8f8;
  -moz-animation: slideout 300ms forwards;
  -o-animation: slideout 300ms forwards;
  -webkit-animation: slideout 300ms forwards;
  animation: slideout 300ms forwards;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  position:absolute;
}
/* Uncomment for scrollable menu -> see top comment */
/*.absolute-wrapper{
      width:285px;
      -moz-animation: slideout 300ms forwards;
      -o-animation: slideout 300ms forwards;
      -webkit-animation: slideout 300ms forwards;
      animation: slideout 300ms forwards;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
  }*/
@-moz-keyframes bodyslidein {
  0% {
    left: 0;
  }
  100% {
    left: 300px;
  }
}
@-webkit-keyframes bodyslidein {
  0% {
    left: 0;
  }
  100% {
    left: 300px;
  }
}
@keyframes bodyslidein {
  0% {
    left: 0;
  }
  100% {
    left: 300px;
  }
}
@-moz-keyframes bodyslideout {
  0% {
    left: 300px;
  }
  100% {
    left: 0;
  }
}
@-webkit-keyframes bodyslideout {
  0% {
    left: 300px;
  }
  100% {
    left: 0;
  }
}
@keyframes bodyslideout {
  0% {
    left: 300px;
  }
  100% {
    left: 0;
  }
}
/* Slide side body*/
.side-body {
  margin-left: 5px;
  margin-top: 70px;
  position: relative;
  -moz-animation: bodyslideout 300ms forwards;
  -o-animation: bodyslideout 300ms forwards;
  -webkit-animation: bodyslideout 300ms forwards;
  animation: bodyslideout 300ms forwards;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.body-slide-in {
  -moz-animation: bodyslidein 300ms forwards;
  -o-animation: bodyslidein 300ms forwards;
  -webkit-animation: bodyslidein 300ms forwards;
  animation: bodyslidein 300ms forwards;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
/* Hamburger */
.navbar-toggle {
  border: 0;
  float: left;
  padding: 18px;
  margin: 0;
  border-radius: 0;
  background-color: #f3f3f3;
}
/* Search */
#search .panel-body .navbar-form {
  border-bottom: 0;
}
#search .panel-body .navbar-form .form-group {
  margin: 0;
}
.navbar-header {
  /* this is probably redundant */
  position: fixed;
  z-index: 3;
  background-color: #f8f8f8;
}
/* Dropdown tweek */
#dropdown .panel-body .navbar-nav {
  margin: 0;
}

}
   </style>
    </head>
    <body>
      <div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">

    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="#">
                    Search Ajax
                </a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" id="searchbox">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">


            <!-- Dropdown-->
           


            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <span class="glyphicon glyphicon-user"></span> auther <span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <div class="userf">
                          
                          

                          <input type="checkbox" class="form-check-input" id="exampleCheck1" value="ahmed">
                          <label class="form-check-label users" for="exampleCheck1" >Ahmed{{""."(".$users->where("auther",'ahmed')->count().")"}}</label><br>

                          <input type="checkbox" class="form-check-input" id="exampleCheck1" value="mahmoud">
                          <label class="form-check-label users" for="exampleCheck1" >Mahmoud {{""."(".$users->where("auther",'mahmoud')->count().")"}}</label><br>

                          <input type="checkbox" class="form-check-input" id="exampleCheck1" value="omar">
                          <label class="form-check-label users" for="exampleCheck1" >Omar{{""."(".$users->where("auther",'omar')->count().")"}}</label><br>
                        

                          </div>


                                </div>
                            </li>

                            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl2">
                    <span class="glyphicon glyphicon-folder-open"></span> category<span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <div class="userf">

                            @foreach($cats as $cat)
                            <input type="checkbox" class="form-check-input" id="exampleCheck1"
                            value='{{$cat->id}}'>
                            <label class="form-check-label cats" for="exampleCheck1" >{{$cat->name ." "."(".$cat->posts->count().")"}}</label><br>
                            @endforeach
                            </div>





                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

    </div>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="side-body" id="poo">




        </div>
    </div>
</div>


        </div>
        <script type="text/javascript">
        $(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        $('.absolute-wrapper').toggleClass('slide-in');

    });

   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        $('.absolute-wrapper').removeClass('slide-in');

    });
   //--------------------------------------------- make auther filter resulte ------
  /* $('.userf ').click(function(){
    $authers = [];
    $('.userf :checked').each(function(){
        
        $auther = $(this).val();
        $authers.push($auther);
        console.log($authers)
        $.ajax({

               type : 'get',

               url : 'cts',

               data:{'cts':$authers},

                  success:function(data){

       $('#poo').html(data);

    }
});

          });
 });*/
 //--------------------------------------------- make category filter resulte ------
/*    $('.category ').click(function(){
    $category = [];
    $('.category :checked').each(function(){
        $cat = $(this).val();
        $category.push($cat);
        console.log($category)
        $.ajax({

               type : 'get',

               url : 'cats',

               data:{'cts':$category},

                  success:function(data){

       $('#poo').html(data);
       

    

      }


      });});});  */
//------------------------- if search start  if auther change

$('#searchbox').on('keyup',function() {
      $value=$(this).val();
      console.log($value);
       $('.userf ').click(function(){
          $authers = [];
    $('.userf :checked').each(function(){
        
        $auther = $(this).val();
        $authers.push($auther);
        console.log($authers);
        $.ajax({

               type : 'get',

               url : 'searcha',

               data:{'search':$value,"auth":$authers},

                  success:function(data){

       $('#poo').html(data);
       }});
      

          });
 });
 });
        //--------------------------------------------- search filter result ------      
    $('#searchbox').on('keyup',function() {
      $value=$(this).val();
      console.log($value);
      $.ajax({

               type : 'get',

               url : 'search',

               data:{'search':$value},

                  success:function(data){

       $('#poo').html(data);
       }});});













    });

        </script>
    </body>
</html>
