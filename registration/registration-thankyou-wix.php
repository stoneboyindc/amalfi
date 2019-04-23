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

    <strong> Online Registration - <?php echo $program; ?></strong>
     <P style="margin-bottom: 0">&nbsp;</P>
                  <P style="margin-top: 0;"><em>Total due: <?php if($program!='Vocal') {
					  echo '$'.$totalPrint; 
					  echo ' (registration fee + deposit + service fee)</em></P>';
				  } else {
					  echo '$36.0 ($35.0 registration fee + $1.00 online service fee)</em></P>';
				  } ?>
                  <P>&nbsp;</P>
                  <P>Your 
                    registration form has been submitted. Thank you! 
                    In order to complete the online registration process, please click on &quot;Continue Registration&quot; 
                    to make your payment through our secure system.</P>
        <P>&nbsp;</P>
                  <P>Your registration will not be processed until we receive notification of payment online - or until we receive a check by mail - for your registration fee. </P>
        <P>&nbsp;</P>
                  <P>Please contact us with any questions at: music@amalfi-festival.org</P>
                  <P>&nbsp;</P>
                  <div class="grey-line"></div>
                  
          Pay your registration fees here through our secure system. 
		  <?php if($program!='Vocal') { ?>
<strong>Note:</strong> <em>Your invoice will show a 3%  fee to cover the ACMAF processing fee. </em></p>
<form name="PrePage" method = "post" target="_blank" action = "https://Simplecheckout.authorize.net/payment/CatalogPayment.aspx"> <input type = "hidden" name = "LinkId" value ="acf3a681-2633-4538-af31-f8bd6607777d" /> <input type = "image" src ="images/continue-registration.png" /> </form> 

<br/>If you prefer PayPal, you can pay your balance here through PayPal's secure system. 
                  <span style="background-color: #F0F0F0"><strong><font color="#990033">Note:</font></strong><font color="#990033"> Please add 3% to your total balance to cover the automatically assessed service fee.</font></span>
		  <?php } else { ?>
<br/><br/>Please pay your balance here through PayPal's secure system. 
                  <span style="background-color: #F0F0F0"><strong><font color="#990033">Note:</font></strong><font color="#990033"> Please add 3% to your total balance to cover the automatically assessed service fee.</font></span>
		  <?php } ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="festival@musicalstudies.com">
<input type="hidden" name="item_name" value="Balance Payment">
<em>Registration Fees: </em>$
<input type="Text" name="amount" value="">
<input type="hidden" name="no_shipping" value="0">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-BuyNowBF">
<input name="submit" type="image" src="images/continue-registration.png" alt="Make payments with PayPal - it's fast, free and secure!" align="middle" border="0" />
</form>  

                  <div class="grey-line"></div>
      
          <div class="footer">
 <div style="position:relative; top:3px; left:0px;">&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; 1993 - <?php echo date(Y); ?> Center for Musical Studies</div>
            </div>
</div>


  

        </body>
    </html>

