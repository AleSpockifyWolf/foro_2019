
<?php 
date_default_timezone_set('America/Mexico_City');
$hora = date('his');
$url = $_SERVER['REQUEST_URI'];
//echo $url;
$clasehtml = "class='header fixed'";
$strMenu = array('INICIO','ROSTROS','PONENTES','SEDE', 'CONTACTO' );
$ulMenu = '';
foreach ($strMenu as $menu) {
	$ulMenu .= '<li class=""><a href="#'.strtolower($menu).'">'.$menu.'</a></li>';
}
//quitar lineas de comando cuand se vaya a subir quitar la condicion de abajo
//if($url == '/~solucionesweb/foro_internacionalb/ponentes.php'){
//if($url == '/foro_internacionalb/ponentes.php'){
if($url == '/ponentes.php'){

	$clasehtml = "class='header fixed cabeza'" ;
	$menu =  'INICIO';
	$ulMenu = '<li class=""><a href="index.php">'.$menu.'</a></li>';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="El Instituto Mexicano del Seguro Social, a través de la Dirección de Prestaciones Médicas; la Unidad de Educación, Investigación y Políticas de Salud y la Coordinación de Educación en Salud, se complacen en presentar la décimo quinta Edición Nacional y primera Internacional del Foro de Educación en Salud.">

       <meta name="keywords" content="Foro Nacional de Educación en Salud,Foro Internacional de Educación en Salud, Foro Educación en salud,Foro IMSS, IMSS, Foro Convocatoria IMSS, Educación médica,Congreso de educación, Congreso médico, Congreso de educación médica,Congreso de innovación médica, Educación en salud,Comunicación en Salud,Profesionales de la salud,Mejor atención de la salud">

        <title>XV Foro Nacional y I Foro Internacional de Educación en Salud</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/hexaedro-web.png">

        <!-- CSS Global -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
        <link href="assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">
        <link href="assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link href="assets/css/theme.css<?php echo '?noCache='.$hora?>" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!--[if lt IE 9]>-->
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <!--[endif]-->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121394591-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121394591-1');
</script>

<!-- Google Analytics -->

    </head>
    <body id="inicio" class="wide body-light">


<!--<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">

   <div class="modal-dialog">
      <div class="modal-content">
                 <div class="modal-body">
            <br><br>
            <p align ="justify">La Unidad de Educación, Investigación y Políticas de Salud a través de la Coordinación de Educación en Salud, informa el 
            diferimiento del XV Foro Nacional y I Foro Internacional de Educación en Salud, que se celebraría del 4 al 9 de noviembre de 2018 en la 
            Ciudad de Cancún, Quintana Roo, para realizarses <b style="color:red;">próximamente</b>en sede aún por confirmar.</p>
 
 <p align ="justify">De antemano agradecemos su muy estimada comprensión y le enviamos las más sinceras disculpas por la afectación debido a esta notificación.</p>
 

 
<p align ="justify">Reciba por nuestra parte, saludos cordiales.</p><br>
<p align ="center">Atentamente</p>
   <p align ="center"><B>Comité Organizador</B></p>
     </div>
          
      </div>
   </div>
</div>-->








        <!-- Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Wrap all content -->
        <div class="wrapper">

            <!-- HEADER -->
            <header <?php echo $clasehtml ?> >
                <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
                            <span class="sr-only">Interruptor de Navegación</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> 
                            <img src="assets/img/preview/logo_dorado_2.png" alt="Foro Nacional y Foro Internacional  Educación en Salud" >
                        </a>
                                
                        </div>
                        <div class="collapse navbar-collapse" id="subenlaces">
                        <ul class="nav navbar-nav navbar-right">
                        <?php
                                        echo $ulMenu;
                                    ?>
                        </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- /HEADER -->