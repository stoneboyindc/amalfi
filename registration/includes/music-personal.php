<!--Validate the form -->
<script type="text/javascript">
	var emptyString = new RegExp(/^\s*$/);
	function isValidEmail(name) {
		if (name.search(/[a-zA-Z0-9_\-.']+@[a-zA-Z0-9_\-]+(\.[a-zA-Z0-9_\-])+/) != -1) {
			return true;
		}

		return false;
	}
	
	function getObject(name) {
		if (document.all) {
			return document.all[name];
		}
		else {
			return document.getElementById(name);
		}
	}

	function checkValue() {
	var form = getObject("regform");
	if (emptyString.test(form.firstName.value))
    {
		alert('First Name cannot be empty!');
        form.firstName.focus();
        return false;
    }
	else if (emptyString.test(form.lastName.value))
    {
		alert('Last Name cannot be empty!');
        form.lastName.focus();
        return false;
    }
	else if (emptyString.test(form.email.value))
    {
		alert('Email address cannot be empty!');
        form.email.focus();
        return false;
    }	
	if (!isValidEmail(form.email.value)){
		alert('Email address is not valid');
        form.email.focus();
        return false;
	}
	if (!form.termsAndDisclaimers.checked) {
	  alert("Please indicate that you accept the Terms and Disclaimers");
      form.termsAndDisclaimers.focus();
      return false;
	}
	return true;
	}
</script> 
           
<form name="regform" id="regform" action="<?php echo strtolower($regSection);?>-send.php" method="post" onSubmit="return checkValue()">

<div class="grey-line"></div>

<div class="reg-section-head">PERSONAL INFORMATION:</div>

<div class="input-div">
	<div class="input-label-left">First Name</div>
    <input type="text" name="firstName" id="name" class="input-left"/>
    <div class="input-label-right">Gender</div>
    <select name="gender" id="gender" class="input-right"/>
    <option value=""></option>
    <option value="F">Female</option>
    <option value="M">Male</option>
    </select>
</div>

<div class="input-div">
	<div class="input-label-left">Last Name</div>
    <input type="text" name="lastName" id="lastName" class="input-left"/>
    <?php if($regSection!='olli'&&$regSection!='choral') { ?>
    <div class="input-label-right">Birth Date</div>
    <input type="text" name="birthdate" id="birthdate" class="input-right"/>
    <?php } ?>
	<?php if($regSection=='choral') { ?>
    <div class="input-label-right">Voice Type</div>
    <input type="text" name="birthdate" id="birthdate" class="input-right"/>
    <?php } ?>
</div>

<div class="input-div" style="height:180px;">
<?php if($regSection!='cua'&&$regSection!='olli') { ?>
<div class="input-label-left">Present<br/> Address</div>
<?php } else { ?>
<div class="input-label-left">Address</div>
<?php } ?>
    <div class="input-label-right">Phone</div>
    <input type="text" name="phone" id="phone" class="input-right"/>
    <div class="input-label-right" style="top:35px;">Email</div>
    <input type="text" name="email" id="email" class="input-right" style="top:35px;"/>
	
	<div class="input-label-left" style="top:45px;">Street</div>
	<input type="text" name="street" id="street" class="input-left" style="top:45px;"/>
	<div class="input-label-left" style="top:75px;">City</div>
	<input type="text" name="city" id="city" class="input-left" style="top:75px;"/>
	<div class="input-label-left" style="top:105px;">State</div>
	<input type="text" name="state" id="state" class="input-left" style="top:105px;"/>
    <div class="input-label-left" style="top:135px;">ZIP Code</div>
	<input type="text" name="zipcode" id="zipcode" class="input-left" style="top:135px;"/>
<?php if($regSection!='cua'&&$regSection!='olli') { ?>
	<div class="input-label-left" style="top:165px;">Valid Until</div>
    <input type="text" name="validPresent" id="validPresent" class="input-left"  style="top:165px;"/>
<?php } ?>
<!--    <?php if($regSection=='visual') {echo'<div class="input-label-right" style="top:95px;">Work Phone</div>
    <input type="text" name="workphone" id="workphone" class="input-right" style="top:95px;"/>
';};?> -->

<?php if($regSection!='cua'&&$regSection!='olli'&&$regSection!='choral'&&$regSection!='guestVisual'&&$regSection!='guestMI') {
	echo '
	<div class="input-label-right" style="top:105px;">Permanent<br/>Address</div>
    <textarea name="addressPermanent" wrap="VIRTUAL" id="addressPermanent" class="input-right" style="top:105px;height:75px;"></textarea>';}; ?>
<?php if($regSection=='choral') {
	echo '
	<div class="input-label-right" style="top:105px;">Affiliation<br/>(Chorus)</div>
    <textarea name="addressPermanent" wrap="VIRTUAL" id="addressPermanent" class="input-right" style="top:105px;height:75px;"></textarea>';}; ?>
</div>
<?php if($regSection=='instrumental'||$regSection=='concerto'||$regSection=='instrumental_teacher'||$regSection=='vocal'||$regSection=='writers') {include("background.php");}; ?>

<div style="font-size:1px; height:10px;"></div>
<div class="grey-line"></div>

<?php if($regSection=='instrumental') {include("program-instrumental.php");}
		else if($regSection=='instrumental_teacher') {include("program-instrumental-teacher.php");}
		else if($regSection=='vocal') {include("program-vocal.php");}
		else if($regSection=='guestVisual') {include("program-guestVisual.php");}
		else if($regSection=='guestMI') {include("program-guestMI.php");}
		else if($regSection=='visual') {include("program-visual.php");}
		else if($regSection=='writers') {include("program-writers.php");}
		else if($regSection=='choral') {include("program-choral.php");}
		else if($regSection=='writersguestVisual') {include("program-writersguestVisual.php");};?>

<?php  if($regSection=='olli') {include("accomodations-specials.php");}
		else if($regSection=='concerto') {include("accomodations-concerto.php");}
		else if($regSection=='cua') {include("accomodations-specials-cua.php");}
		else if($regSection=='guestVisual') {include("accomodations-guestVisual.php");}
		else if($regSection=='guestMI') {include("accomodations-guestMI.php");}
		else if($regSection=='instrumental_teacher') {include("accomodations-teacher.php");}
		else if($regSection=='choral') {include("accomodations-choral.php");}
		else {include("accomodations.php");}; ?>
        
<?php  if($regSection!='concerto'&&$regSection!='cua'&&$regSection!='olli'&&$regSection!='choral'&&$regSection!='visual') {include("excursions.php");}; ?>
<?php  if($regSection=='visual') {include("excursions-visual.php");}; ?>

<?php  if($regSection=='guestVisual') {include("activities-guestVisual.php");} 
		else if($regSection=='guestMI') {include("activities-guestMI.php");}
		else if($regSection=='visual') {include("activities-visual.php");}
		else if($regSection=='olli' || $regSection=='cua') {include("activities-olli.php");}
		else if($regSection=='choral') {include("activities-choral.php");}
		else if($regSection!='concerto'&&$regSection!='cua'&&$regSection!='olli') {include("activities.php");} ?>


<?php  if($regSection!='olli') {include("how-hear.php");} ?>

<?php if($regSection=='vocal') { include("payment-vocal.php"); } 
		else if ($regSection=='olli') { include("payment-olli.php"); } 
		else if ($regSection=='choral') { include("payment-choral.php"); } 
		else { include("payment.php"); } ?>

<?php  if($regSection!='cua'&&$regSection!='olli'&&$regSection!='choral') {include("travel.php");}; ?>

<?php include("submit.php"); ?>
