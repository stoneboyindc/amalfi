<?php

$rootOrSub='sub';

$headertext='Registration - Choral Tour (June 28 - July 5, 2020)'; 

$headerwidth='310'; 

include("../scripts/session-controller.php");
include("prices2.php");

$regSection="choral";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $pageTitleStart.' - '.$headertext;?></title>
	<link rel="stylesheet" type="text/css" href='custom/css/bootstrap.min.css' >
	<link rel="stylesheet" type="text/css" href='custom/css/bootstrap-overrides.css' >

	<script type="text/javascript" src='custom/js/jquery.min.js' ></script>
	<script type="text/javascript" src='custom/js/bootstrap.min.js' ></script>
	<script type="text/javascript" src='custom/js/bootstrap-dialog.min.js'></script>
	
<style>
body{
border:1px solid #000;
padding: 4px 4px 4px 4px;
}
div { font-family: Calibri, sans-serif; }
.grey-line {background-color: #333; height:1px; width:100%;font-size:1px; margin-top:10px;margin-bottom:10px;}
.reg-section-head{font-weight:bold; margin-bottom:10px;margin-top:10px;}
.input-div{position:relative; width:628px; height:20px; margin-bottom:10px;}
.input-div-radio{position:relative; width:628px; height:18px; margin-bottom:5px;}
.input-label-left{position:absolute; left:0px; top:6px; width:105px;text-align:right;}
.input-label-left{position:absolute; left:0px; top:6px; width:105px;text-align:right;}
.input-label-left-double{position:absolute; left:0px; top:-1px; width:105px;text-align:right;}
.input-label-left-radio{position:absolute; left:130px; top:6px; width:500px;text-align:left;}
.input-left{position:absolute; left:110px; top:5px; width:200px;}
.input-left-radio{position:absolute; left:110px; top:8px;}
.input-label-right{position:absolute; left:311px; top:6px; width:110px; text-align:right;}
.input-label-right-double{position:absolute; left:311px; top:-1px; width:110px; text-align:right;}
.input-right{position:absolute; left:426px; top:5px; width:200px;}
#myModal .modal-content
{
  overflow:auto;
}

</style>

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
 <!-- ^^^^ page header ^^^^ -->

<?php include('../scripts/pageheader.php'); ?>
 <!-- ^^^^ page header ^^^^ -->

        <div id="contentbox">
  

         <!-- ^^^^ heading margin ^^^^ -->

  <div class="headingmargin"></div>

  <!-- ^^^^ heading margin end ^^^^ -->

  <!-- ^^^^ content ^^^^ -->

  <p style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>

<div id="content">

      <?php include ("includes/music-personal.php");?>
</div>

 <!-- ^^^^ content end ^^^^ -->

 </div>

 <!-- contentbox end ---------------------------------------------------------------- -->

  </div>

 <!-- mainstage end ---------------------------------------------------------------- -->

 

        <div class="push"></div>

</div>

            <div class="footer">

 <div style="position:relative; top:3px; left:0px;">&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; 1993 - <?php echo date(Y); ?> Center for Musical Studies</div>

            </div>

        </body>

    </html>

