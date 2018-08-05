<!-- Session Start -->
<?php session_start(); ?>
<!-- Get Forum Controller -->
<?php include('../controllers/ForumController.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Get Bootstrap CDN -->
	<?php include('../Asserts/bootstrap/bootstrap.html'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pge Title</title>
    
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="https://mlm.exodemo.biz/axxets/member/theme.css"
          rel="stylesheet" id="rt_style_components"
          type="text/css"/>
    <link rel="stylesheet"
          href="//code.jquery.com/ui/1.12.1/themes/eggplant/jquery-ui.css">
    <!-- favicon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
            type="text/javascript"></script>
</head>
<body>

<div id="ui" class="ui">

    <!--header start-->
    <header id="header" class="ui-header">

        <div class="navbar-header">
            <!--logo start-->
            <a href="#" class="navbar-brand">
                <span class="logo"><img
                            style="max-width: 100px; max-height: 36px"
                            src="#"
                            alt="Logo"/></span>
            </a>
            <!--logo end-->
        </div>

        <div class="navbar-collapse nav-responsive-disabled">

            <!--toggle buttons start-->
            <ul class="nav navbar-nav">
                <li>
                    <a class="toggle-btn" data-toggle="ui-nav" href="">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>

            </ul>
            <!-- toggle buttons end -->
            <!--notification start-->
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li class="dropdown language-switch" style="margin-top: 10px;">
                    <div id="google_translate_element"></div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en',
                                includedLanguages: 'ar,bn,en,gu,hi,kn,mr,ms,pa,ta,te',
                                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                                autoDisplay: false
                            }, 'google_translate_element');
                        }
                    </script>
                    <script type="text/javascript"
                            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </li>
                                  
                                <li class="dropdown dropdown-usermenu">
                    <a href="#" class=" dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="true">
                        <span class="hidden-sm hidden-xs"
                              style="font-weight: bold">
                            Master User</span>
                        <span class="caret hidden-sm hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><i
                                        class="fa fa-cogs"></i> Settings</a>
                        </li>
                        <li><a href="#"><i
                                        class="fa fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i
                                        class="fa fa-sign-out"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--notification end-->

        </div>

    </header>
    <!--header end-->
