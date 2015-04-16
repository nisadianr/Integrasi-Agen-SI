<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="{{ asset('css/metro-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metro-bootstrap-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/iconFont.css') }}" rel="stylesheet">
    <link href="{{ asset('css/docs.css') }}" rel="stylesheet">
    <link href="{{ asset('js/prettify/prettify.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body class="metro" style="background: lightGray">
    <div class="navigation-bar dark">
        <div class="navigation-bar-content container">
            <a class="element1 pull-menu" href="#"></a>
            <ul class="element-menu">
			 <li><br><a href="home">Home</a></li>
            </ul>
            <br>
            <div class="element place-right"><a href="login.php" class="fg-gray">Login</a></div>
        </div>
    </div>

    <div class="grid">
        <div class="row">
            <div class="span5 offset2">
                <img src="{{ asset('image/logo-be.png') }}">
            </div><br><br><br>
            <div class="span6 offset2"><br><br>
                <form method="" action="">
                   <label>Username</label>
                    <div class="span4 input-control text info-state">
                        <input type="text" placeholder="username" id="username"/>
                    </div><br><br>
                    <label>Password</label>
                    <div class="span4 input-control text info-state">
                        <input type="password" placeholder="password" id="password"/>
                    </div>
                    
                    <div style="padding-top:50px">
                    <button type="submit" class="bg-darkBlue fg-white large" id="">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- Load JavaScript Libraries -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.widget.min.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('js/prettify/prettify.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery.dataTables.js') }}"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="{{ asset('js/load-metro.js') }}"></script>

    <!-- Local JavaScript -->
    <script src="{{ asset('js/docs.js') }}"></script>
    <script src="{{ asset('js/hitua.js') }}"></script>

</body>
</html>