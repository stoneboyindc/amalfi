<?php

$rootOrSub='sub';

$headertext='Registration - Thank You For Registering!'; 

$headerwidth='480'; 

include("../scripts/session-controller.php");
include("prices2.php");

$program=$_REQUEST['program'];
$servicefeeCat=$serviceFee[$_REQUEST['servicefee']];

$totalPrint=$registrationFee+$deposit+(($registrationFee+$deposit)*.025);
$totalPrint= number_format($totalPrint, 2, '.', ',');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $pageTitleStart.' - '.$headertext;?></title>

<script type="text/javascript">

</script>

	<link rel="stylesheet" type="text/css" href='custom/css/bootstrap.min.css' >
	<link rel="stylesheet" type="text/css" href='custom/css/bootstrap-overrides.css' >

	<script type="text/javascript" src='custom/js/jquery.min.js' ></script>
	<script type="text/javascript" src='custom/js/bootstrap.min.js' ></script>
	<script type="text/javascript" src='custom/js/bootstrap-dialog.min.js'></script>

<style>

div { font-family: Calibri, sans-serif; }
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
.input-label-right-double{position:absolute; left:311px; top:-1px; width:105px; text-align:right;}
.input-right{position:absolute; left:421px; top:5px; width:200px;}

#content {
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>



<body>

  <!-- ^^^^ content ^^^^ -->

<div id="content">

    <h3 style="color: #339CFF"><strong>Payment Procedure - Choral Tour Online Registration</strong></h3>
                  <P><strong>Total due: $550.00</strong> ($500 deposit + $35 registration fee + $15 service fee)</P>
                  <p>Please note: The festival’s “Merchant Name” is <strong>Center of Musical Studies</strong></p>
                  <p><em>Now that your registration form has been submitted, you will be directed through the following steps to make your on-line payment through the secure system facilitated by PayPal. </em></p>
                  <P><strong>You do not need to have a PayPal account to pay on-line using the PayPal System.</strong>
You will have the option to make your payment as a “Guest User” and can elect to pay by credit or debit card, following the easy step-by-step windows. 
</P>
                  <P>Be sure to scroll down on the PayPal windows to see both options.</P>
                  <ol>
                  <li><strong>In the 1st window (“Purchase Details”)</strong> you will fill in the requested amount ($550) 
</li>
                  <li><strong>In the 2nd window (“Pay with PayPal”)</strong>, you will select your mode of payment:  
                  <ol type="a">
                  <li>(top section): If you opt to pay through a registered PayPal account </li>
                  <li>(bottom section): Pay with Debit or Credit Card</li>
                  </ol>
</li>
                  <li><strong>In the 3rd window (“PayPal Guest Checkout”)</strong>, you will fill in your card information here to pay by credit/debit card. 
</li>
                  </ol>
                  <P>For any questions or concerns, please contact: music@amalfi-festival.org</P>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="V3ERVBU7KJCZL">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

                  <div class="grey-line"></div>
      
          <div class="footer">
 <div style="position:relative; top:3px; left:0px;">&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; 1993 - <?php echo date(Y); ?> Center for Musical Studies</div>
            </div>
</div>


  

        </body>
    </html>

