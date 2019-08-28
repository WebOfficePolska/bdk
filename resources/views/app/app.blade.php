<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96974681-3"></script>
    <script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-96974681-3');
    </script>


    <meta name="google-site-verification" content="qZ-Fic1gDODSw4bHjW_uAR6n3frJzDvNXI22EOgjQUY" />
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content=" ">

    <meta name="_token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/my.js') }}"></script>

    <title>@yield('title')</title>

  <style>
@font-face{font-family:'LatoLatinWebBlack';src:url('fonts/LatoLatin-Black.eot');src:url('fonts/LatoLatin-Black.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Black.woff2') format('woff2'),
url('fonts/LatoLatin-Black.woff') format('woff'),
url('fonts/LatoLatin-Black.ttf') format('truetype');font-style:normal;font-weight:normal; }
@font-face{font-family:'LatoLatinWebBlack';src:url('fonts/LatoLatin-BlackItalic.eot');src:url('fonts/LatoLatin-BlackItalic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-BlackItalic.woff2') format('woff2'),
url('fonts/LatoLatin-BlackItalic.woff') format('woff'),
url('fonts/LatoLatin-BlackItalic.ttf') format('truetype');font-style:italic;font-weight:normal; }
@font-face{font-family:'LatoLatinWeb';src:url('fonts/LatoLatin-Bold.eot');src:url('fonts/LatoLatin-Bold.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Bold.woff2') format('woff2'),
url('fonts/LatoLatin-Bold.woff') format('woff'),
url('fonts/LatoLatin-Bold.ttf') format('truetype');font-style:normal;font-weight:bold; }
@font-face{font-family:'LatoLatinWeb';src:url('fonts/LatoLatin-BoldItalic.eot');src:url('fonts/LatoLatin-BoldItalic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-BoldItalic.woff2') format('woff2'),
url('fonts/LatoLatin-BoldItalic.woff') format('woff'),
url('fonts/LatoLatin-BoldItalic.ttf') format('truetype');font-style:italic;font-weight:bold; }
@font-face{font-family:'LatoLatinWebHairline';src:url('fonts/LatoLatin-Hairline.eot');src:url('fonts/LatoLatin-Hairline.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Hairline.woff2') format('woff2'),
url('fonts/LatoLatin-Hairline.woff') format('woff'),
url('fonts/LatoLatin-Hairline.ttf') format('truetype');font-style:normal;font-weight:normal; }
@font-face{font-family:'LatoLatinWebHairline';src:url('fonts/LatoLatin-HairlineItalic.eot');src:url('fonts/LatoLatin-HairlineItalic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-HairlineItalic.woff2') format('woff2'),
url('fonts/LatoLatin-HairlineItalic.woff') format('woff'),
url('fonts/LatoLatin-HairlineItalic.ttf') format('truetype');font-style:italic;font-weight:normal; }
@font-face{font-family:'LatoLatinWebHeavy';src:url('fonts/LatoLatin-Heavy.eot');src:url('fonts/LatoLatin-Heavy.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Heavy.woff2') format('woff2'),
url('fonts/LatoLatin-Heavy.woff') format('woff'),
url('fonts/LatoLatin-Heavy.ttf') format('truetype');font-style:normal;font-weight:normal; }
@font-face{font-family:'LatoLatinWebHeavy';src:url('fonts/LatoLatin-HeavyItalic.eot');src:url('fonts/LatoLatin-HeavyItalic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-HeavyItalic.woff2') format('woff2'),
url('fonts/LatoLatin-HeavyItalic.woff') format('woff'),
url('fonts/LatoLatin-HeavyItalic.ttf') format('truetype');font-style:italic;font-weight:normal; }
@font-face{font-family:'LatoLatinWeb';src:url('fonts/LatoLatin-Italic.eot');src:url('fonts/LatoLatin-Italic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Italic.woff2') format('woff2'),
url('fonts/LatoLatin-Italic.woff') format('woff'),
url('fonts/LatoLatin-Italic.ttf') format('truetype');font-style:italic;font-weight:normal; }
@font-face{font-family:'LatoLatinWebLight';src:url('fonts/LatoLatin-Light.eot');src:url('fonts/LatoLatin-Light.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Light.woff2') format('woff2'),
url('fonts/LatoLatin-Light.woff') format('woff'),
url('fonts/LatoLatin-Light.ttf') format('truetype');font-style:normal;font-weight:normal; }
@font-face{font-family:'LatoLatinWebLight';src:url('fonts/LatoLatin-LightItalic.eot');src:url('fonts/LatoLatin-LightItalic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-LightItalic.woff2') format('woff2'),
url('fonts/LatoLatin-LightItalic.woff') format('woff'),
url('fonts/LatoLatin-LightItalic.ttf') format('truetype');font-style:italic;font-weight:normal; }
@font-face{font-family:'LatoLatinWebMedium';src:url('fonts/LatoLatin-Medium.eot');src:url('fonts/LatoLatin-Medium.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Medium.woff2') format('woff2'),
url('fonts/LatoLatin-Medium.woff') format('woff'),
url('fonts/LatoLatin-Medium.ttf') format('truetype');font-style:normal;font-weight:normal; }
@font-face{font-family:'LatoLatinWebMedium';src:url('fonts/LatoLatin-MediumItalic.eot');src:url('fonts/LatoLatin-MediumItalic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-MediumItalic.woff2') format('woff2'),
url('fonts/LatoLatin-MediumItalic.woff') format('woff'),
url('fonts/LatoLatin-MediumItalic.ttf') format('truetype');font-style:italic;font-weight:normal; }
@font-face{font-family:'LatoLatinWeb';src:url('fonts/LatoLatin-Regular.eot');src:url('fonts/LatoLatin-Regular.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Regular.woff2') format('woff2'),
url('fonts/LatoLatin-Regular.woff') format('woff'),
url('fonts/LatoLatin-Regular.ttf') format('truetype');font-style:normal;font-weight:normal; }
@font-face{font-family:'LatoLatinWebSemibold';src:url('fonts/LatoLatin-Semibold.eot');src:url('fonts/LatoLatin-Semibold.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Semibold.woff2') format('woff2'),
url('fonts/LatoLatin-Semibold.woff') format('woff'),
url('fonts/LatoLatin-Semibold.ttf') format('truetype');font-style:normal;font-weight:normal; }
@font-face{font-family:'LatoLatinWebSemibold';src:url('fonts/LatoLatin-SemiboldItalic.eot');src:url('fonts/LatoLatin-SemiboldItalic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-SemiboldItalic.woff2') format('woff2'),
url('fonts/LatoLatin-SemiboldItalic.woff') format('woff'),
url('fonts/LatoLatin-SemiboldItalic.ttf') format('truetype');font-style:italic;font-weight:normal; }
@font-face{font-family:'LatoLatinWebThin';src:url('fonts/LatoLatin-Thin.eot');src:url('fonts/LatoLatin-Thin.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-Thin.woff2') format('woff2'),
url('fonts/LatoLatin-Thin.woff') format('woff'),
url('fonts/LatoLatin-Thin.ttf') format('truetype');font-style:normal;font-weight:normal; }
@font-face{font-family:'LatoLatinWebThin';src:url('fonts/LatoLatin-ThinItalic.eot');src:url('fonts/LatoLatin-ThinItalic.eot?#iefix') format('embedded-opentype'),
url('fonts/LatoLatin-ThinItalic.woff2') format('woff2'),
url('fonts/LatoLatin-ThinItalic.woff') format('woff'),
url('fonts/LatoLatin-ThinItalic.ttf') format('truetype');font-style:italic;font-weight:normal; }    
      
    body {
    	font-family: "LatoLatinWeb";
    	font-size: 12pt;
    	font-style: normal;
    	color: #eee;
      min-height: 100vh;
    /*          background: url('images/tlo.png') no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;*/
              background-image: url('/images/tlo.png');
              background-repeat: repeat-x;
              background-attachment: fixed;
              background-position: bottom left;
              background-size: cover;
    }


      h2 {color: #DDD;}
      a:link, a:visited {color:#eee;}

      .grey {

        background: rgba(0, 0, 0, 0.6);
        color: #ccc;
        margin-top: 1em;

      }

      .navbar { padding: 0 !important; }
      .nav-tabs {
        border-bottom: 0 !important;
      }

      #menu .dropdown-toggle::after {
          display: none;
      }

      .dropdown.show a {color: #555 !important; }

      .vertical-center {
        min-height: 60%;  /* Fallback for browsers do NOT support vh unit */
        min-height: 60vh; /* These two lines are counted as one :-)       */

        display: flex;
        align-items: center;        
      }

      .nav-tabs .dropdown-menu {
          border-top-left-radius: 5px;    
      }

      .dropdown-menu {
          position: absolute;
          left: -57px;
      }

      .dropdown-item span {
        margin-left: 20px;
      }

      button#basic-addon1 {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;

      }


    </style>




</head>


<body>


  <div id="content" >


  	<div class="container" style="height: 100%;">


      <div class="row pt-1 pb-5">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-dark">

            <a class="navbar-brand left" href="/">
              <img src="/images/logo.png"  height="70" class="d-inline-block align-top" alt="">          
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

{{--               <ul class="navbar-nav nav-tabs mr-auto">
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Wybierz miasto
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul> --}}

              <ul class="navbar-nav nav-tabs ml-auto">

                <li class="nav-item">
                  <a class="nav-link" href="dodajfirme" id="" role="button" aria-haspopup="true" aria-expanded="false">
                     <i class="far fa-plus-square"></i> <strong> DODAJ FIRMĘ </strong>
                  </a>
                </li>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <strong><i class="fas fa-bars"></i>  MENU</strong>
                  </a>
                  <div class="dropdown-menu mt-1" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/">
                      <i class="fas fa-search"></i> 
                      <span> Wyszukaj </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/obazie">
                      <i class="fas fa-coins"></i> 
                      <span> O bazie </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/onas">
                      <i class="far fa-comments"></i> 
                      <span> O nas </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/dodajfirme">
                      <i class="far fa-plus-square"></i> 
                      <span> Dodaj firmę </span>
                    </a>
                  </div>
                </li>              
              </ul>

            </div>

{{--             <a class="navbar-brand right" href="http://nowykamieniarz.pl">
              <img src="images/logo-nk.png"  height="70" class="d-inline-block align-top" alt="">          
            </a> --}}


          </nav>        
        </div>
      </div>




  	    <div class="row">

  		       <div class="col-md-12 col-xs-12">


  		            @yield('content')


  		       </div> <!-- kon col-12-->

  	    </div> <!-- koniec row-->

  	</div> <!-- koniec container-->

  </div>


</body>


</html>
