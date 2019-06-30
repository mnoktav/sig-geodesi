<html lang="en" class="wf-lato-n4-active wf-lato-n7-active wf-flaticon-n4-inactive wf-simplelineicons-n4-active wf-lato-n3-active wf-fontawesome5solid-n4-active wf-lato-n9-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-active">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page | Sistem Informasi Geografis Jurnal Geodesi</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

    <!-- Fonts and icons -->
	<script src="{{asset('/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" media="all"><link rel="stylesheet" href="../assets/css/fonts.min.css" media="all"><script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="icon" href="{{asset('/assets/img/icon.ico')}}" type="image/x-icon"/>
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/atlantis.min.css')}}">
</head>
<body>
    <br><br><br><br>
    <div class="content">
        <div class="page-inner">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form action="{{route('home')}}">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-center">Form Login</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="email2">Email Address</label>
                                            <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Re-type Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Re-type Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action text-center">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
