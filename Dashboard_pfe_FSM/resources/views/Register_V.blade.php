<!doctype html>
<html lang="fr">

<!-- Mirrored from demos.creative-tim.com/paper-dashboard-pro/examples/pages/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 14:49:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Paper Dashboard PRO by Creative Tim</title>

<link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard-pro" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />

<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

<link href="../../assets/css/paper-dashboard.css" rel="stylesheet" />

<link href="../../assets/css/demo.css" rel="stylesheet" />

<link href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href="../../assets/css/themify-icons.css" rel="stylesheet">

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>

</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-black" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar "></span>
                <span class="icon-bar "></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href='{{url("Login_V")}}' class="btn">
                        Looking to login?
                        </a>
                    </li>
                </ul>
            </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
<div class="register-page">

<div class="content">
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="header-text">
        <h2>Ivoire Secours Dashboard </h2>
        <h4>Enregistrer un adminsitrateur.</h4>
        <hr>
    </div>
</div>
<div class="col-md-4 col-md-offset-2">
 <div class="media">
<div class="media-left">
<div class="icon icon-danger">
<i class="ti ti-user"></i>
</div>
</div>
<div class="media-body">
<h5>Free Account</h5>
Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
</div>
</div>
<div class="media">
<div class="media-left">
<div class="icon icon-warning">
<i class="ti-bar-chart-alt"></i>
</div>
</div>
<div class="media-body">
<h5>Awesome Performances</h5>
Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
</div>
</div>
<div class="media">
<div class="media-left">
<div class="icon icon-info">
<i class="ti-headphone"></i>
</div>
</div>
<div class="media-body">
<h5>Global Support</h5>
Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
</div>
</div>
</div>
<div class="col-md-4">
<form method="post" action="{{route('createUser')}}">

@csrf

<div class="card card-plain">
<div class="content">
<div class="form-group">
<input type="text" name="nom" placeholder="Nom" class="form-control">
</div>
<div class="form-group">
<input type="text" name="prenom" placeholder="Prenom" class="form-control">
</div>
<div class="form-group">
<input type="text" name="adresse" placeholder="Adresse" class="form-control">
</div>
<div class="form-group">
<input type="tel"name="contact" placeholder="Contact" class="form-control">
</div>
<div class="form-group">
<input type="email" name="email" placeholder="Email" class="form-control">
</div>
<div class="form-group">
<input type="password" name="password" placeholder="Password " class="form-control">
</div>
</div>
<div class="footer text-center">
<button type="submit" class="btn btn-fill btn-danger btn-wd">Create Free Account</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<footer class="footer footer-transparent">
<div class="container">
<div class="copyright text-center">
&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com/">Ivoire Secours</a>
</div>
</div>
</footer>
</div>
</div>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a09f6f59f85739b","version":"2023.2.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>

<script src="../../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="../../assets/js/jquery.validate.min.js"></script>

<script src="../../assets/js/es6-promise-auto.min.js"></script>

<script src="../../assets/js/moment.min.js"></script>

<script src="../../assets/js/bootstrap-datetimepicker.js"></script>

<script src="../../assets/js/bootstrap-selectpicker.js"></script>

<script src="../../assets/js/bootstrap-switch-tags.js"></script>

<script src="../../assets/js/jquery.easypiechart.min.js"></script>

<script src="../../assets/js/chartist.min.js"></script>

<script src="../../assets/js/bootstrap-notify.js"></script>

<script src="../../assets/js/sweetalert2.js"></script>

<script src="../../assets/js/jquery-jvectormap.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

<script src="../../assets/js/jquery.bootstrap.wizard.min.js"></script>

<script src="../../assets/js/bootstrap-table.js"></script>

<script src="../../assets/js/jquery.datatables.js"></script>

<script src="../../assets/js/fullcalendar.min.js"></script>

<script src="../../assets/js/paper-dashboard.js"></script>

<script src="../../assets/js/jquery.sharrre.js"></script>

<script src="../../assets/js/demo.js"></script>
<script>
    // Facebook Pixel Code Don't Delete
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','../../../../connect.facebook.net/en_US/fbevents.js');

    try{
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    }catch(err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
<noscript>
    <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
    />
  </noscript>
<script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
		});
	</script>

<!-- Mirrored from demos.creative-tim.com/paper-dashboard-pro/examples/pages/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 14:49:13 GMT -->
</html>
