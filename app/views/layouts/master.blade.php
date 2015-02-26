<html>
    <head>
        <title>
            Wellcome to VanLe's blog            
        </title>
        {{ HTML::style('assets/css/bootstrap.css') }}   
    </head>
    <body>
        <div class="container">
            <div id="main" class="row">
                <div class="col-md-12">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
<!--             </div> -->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        {{ HTML::script('assets/js/bootstrap.min.js') }}
    </body>
</html>