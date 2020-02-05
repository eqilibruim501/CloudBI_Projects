<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CloudBI Projects - System Check Requirements</title>
<!-- CSS -->
{{ HTML::style('assets/css/auth/bootstrap.css') }}
{{ HTML::style('assets/css/auth/bootstrap-responsive.css') }}
{{ HTML::style('assets/css/auth/style.css') }}
{{ HTML::style('assets/css/auth/custom.css') }}
<!--  JS -->
{{ HTML::script('assets/js/jquery/jquery-1.9.1.min.js') }}
{{ HTML::script('assets/js/bootstrap/bootstrap.min.js') }}
{{ HTML::script('assets/js/jquery/jquery.complexify.js') }}
{{ HTML::script('assets/js/jquery/jquery.complexify.banlist.js') }}
{{ HTML::script('assets/js/forgotpassword/forgotpassword.js') }}
</head>
<body>
<section>
  <div class="content_detail">
    <div class="row-fluid">
      <div class="span12 reset_pass">
        <div class="logo"><img src="{{asset('assets/images/errorpages/logo12.png')}}" alt=""/></div>
        <div class="welcome_text2">Installation</div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="span12 reset_title">Done</div>
        <div class="reset_form installtzform">
            <div class="row-fluid">
            <div class="reset_text donetext">That's it. All settings have been saved. Good to go !<br/>Please login with your username and password.</div>

              <div class="submit_button_main">
              <a href="{{url('login')}}"> Login </a>
            </div>


        </div>
      </div>
    </div>
  </div>
</div>
  <div class="footer">&copy; 2019 CloudBI Projects </div>
</section>
</body>
</html>
