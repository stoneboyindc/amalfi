<?php
//======= includes database information =========================================
include_once("../admin/scripts/database/db-connect.php");
include("prices2.php");
include("server_validation.php");
$regSection="vocal";

//=======================================================================================
//===== section variables ===============================================================
//=======================================================================================

//----- each section has its own set of section variables -------------------------------
//----- following pulls in variables used in all pages ----------------------------------
//include_once("scripts/display/contacts/section-variables.php");

//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
//$resultContacts =  mysql_query("SELECT * FROM events ORDER BY ID ASC",$db);
//$rowCountContacts = mysql_num_rows($resultEvents);
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

//==================================================================================
//== Based on a series of if-else statements.  The variable updateAction controls ==
//== default action to capture submits made by JavaScript used to refresh a page. ==
//==================================================================================

$program=$_REQUEST['program'];
$firstName=$_REQUEST['firstName'];
$lastName=$_REQUEST['lastName'];
$gender=$_REQUEST['gender'];
$voiceType=$_REQUEST['birthdate'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$fax =$_REQUEST['fax'];
$addressPresent=$street.' '.$city.' '.$state.' '.$zipcode;
$street=$_REQUEST['street'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$zipcode=$_REQUEST['zipcode'];
$addressPresent=$street.' '.$city.' '.$state.' '.$zipcode;
$validPresent=$_REQUEST['validPresent'];
$affiliation=$_REQUEST['addressPermanent'];
$positionschool=$_REQUEST['positionschool'];
$majorteacher=$_REQUEST['majorteacher'];
$nameparent =$_REQUEST['nameparent'];
$emailparent=$_REQUEST['emailparent'];
$phoneparent=$_REQUEST['phoneparent'];
$workphoneparent=$_REQUEST['workphoneparent'];
$programselection =$_REQUEST['programselection'];
$programspecify=$_REQUEST['programspecify'];
if($_REQUEST['auditiontape']=='Enclosed') {$auditiontape=$_REQUEST['auditiontape'];}else{$auditiontape=$_REQUEST['auditiontapesentby'];};
$vocalrole =$_REQUEST['vocalrole'];
$studywith=$_REQUEST['studywith'];
$accommodations=$_REQUEST['accommodations'];
$roomupgrade=$_REQUEST['roomupgrade'];
if($roomupgrade=='Single'){$roomupgradePricePrint=$roomupgradeSingle[$regSection];}
else if($roomupgrade=='Double'){$roomupgradePricePrint=$roomupgradeDouble[$regSection];}
else if($roomupgrade=='Triple'){$roomupgradePricePrint=$roomupgradeTriple[$regSection];}
else if($roomupgrade=='Superior'){$roomupgradePricePrint=$roomupgradeSuperior[$regSection];};
$roommate=$_REQUEST['roommate'];
$mealplan=$_REQUEST['mealplan'];
if($mealplan=='Yes'){$mealplanPricePrint=$mealplanPrice[$regSection];} else {$mealplanPricePrint=0;}
$allergies=$_REQUEST['allergies'];
$excursions=$_REQUEST['ravello'].' '.$_REQUEST['pompeii'].' '.$_REQUEST['capri'].' '.' '.$_REQUEST['fullpackage'];
$excursionsDB = $excursionsPrice[$_REQUEST['ravello']]+$excursionsPrice[$_REQUEST['pompeii']]+$excursionsPrice[$_REQUEST['capri']]+$excursionsPrice[$_REQUEST['fullpackage']];
$activities=$_REQUEST['italian'].' '.$_REQUEST['ceramics'].' '.$_REQUEST['cookingsingle'].' '.$_REQUEST['cookingseries'];
$activitiesDB = $activitiesPrice[$_REQUEST['italian']]+$activitiesPrice[$_REQUEST['ceramics']]+$activitiesPrice[$_REQUEST['cookingsingle']]+$activitiesPrice[$_REQUEST['cookingseries']];
$registrationfee=$_REQUEST['registrationfee'];
$deposit=$_REQUEST['deposit'];
$servicefee =$_REQUEST['servicefee'];
$total=$_REQUEST['total'];
$airportpickup=$_REQUEST['airportpickup'];
$flightno=$_REQUEST['flightno'];
$dateentered=$_REQUEST['dateentered'];
$source=$_REQUEST['source'];
$notes=$_REQUEST['notes'];
$howhear=$_REQUEST['howhear'];
$lastedited=$_REQUEST['lastedited'];
$today = date("Y-m-d  H:i:s");

$actualAccomondationPrice=$standardPrice[$regSection];
if ($accommodations=='Hostel') {
	$actualAccomondationPrice=$hostelPrice[$regSection];
}
$query='INSERT INTO registrations (Program, FirstName, LastName, Gender, Birthdate, Email, Phone, Fax, AddressPresent, ValidPresent, AddressPermanent, PositionSchool, MajorTeacher, NameParent , EmailParent, PhoneParent, WorkPhoneParent, ProgramSelection , ProgramSpecify, AuditionTape, VocalRole, StudyWith, Accommodations, RoomUpgrade, Roommate, MealPlan, Allergies, Excursions, ExcursionsPrice, Activities, ActivitiesPrice, RegistrationFee, Deposit, ServiceFee , Total, AirportPickup, FlightNo, DateEntered, Source, Notes, HowHear, LastEdited, Street, City, State, ZipCode)
VALUES ("'.$program.'","'.$firstName.'","'.$lastName.'","'.$gender.'","'.$birthdate.'","'.$email.'","'.$phone.'","'.$fax.'","'.$addressPresent.'","'.$validPresent.'","'.$addressPermanent.'","'.$positionschool.'","'.$majorteacher.'","'.$nameparent.'","'.$emailparent.'","'.$phoneparent.'","'.$workphoneparent.'","'.$programselection.'","'.$programspecify.'","'.$auditiontape.'","'.$vocalrole.'","'.$studywith.'","'.$actualAccomondationPrice.'","'.$roomupgradePricePrint.'","'.$roommate.'","'.$mealplanPricePrint.'","'.$allergies.'","'.$excursions.'","'.$excursionsDB.'","'.$activities.'","'.$activitiesDB.'","'.$registrationfee.'","'.$deposit.'","'.$servicefee.'","'.$total.'","'.$airportpickup.'","'.$flightno.'","'.$today.'","Online Registration","'.$notes.'","'.$howhear.'","'.$today.'","'.$street.'","'.$city.'","'.$state.'","'.$zipcode.'")';

mysql_query($query) or die(mysql_error()); 

$today=date('Y-m-d');
$thisYear = date('Y');
$thisMonth = date('m');
if ($thisMonth>=9){$thisYear++;};

include '../mailer/class.phpmailer.php';
$mail = new PHPMailer;
$mail->SMTPDebug  = 2;
//$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'localhost';  // Specify main and backup server
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = '';                            // SMTP username
//$mail->Password = '';                           // SMTP password
//$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'music@amalfi-festival.org';
$mail->FromName = 'Amalfi Music & Arts Festival';
$mail->AddAddress($email);  // Add a recipient
//$mail->AddAddress('ellen@example.com');               // Name is optional
$mail->AddReplyTo('music@amalfi-festival.org', 'Amalfi Music & Arts Festival');
//$mail->AddCC('cc@example.com');
$mail->AddBCC('music@amalfi-festival.org');
$mail->Port = 25;
$mail->IsHTML(false);                                  // Set email format to HTML

$mail_text2  = "Online Registration Form - Sent on: ".$today. "\r\n\r\n";
$mail_text2  .= "Thank you for your on-line registration to the ".$thisyear." Amalfi Coast Music & Arts Festival. \r\n";
$mail_text2  .= "Here is a copy of your registration information for your files.\r\n\r\n";
$mail_text2  .= "If we do not receive confirmation of payment through PayPal we cannot process your application.\r\n";
$mail_text2  .= "If you choose to send payment by mail, we prefer that you send your application at that time.\r\n\r\n";
$mail_text2  .= "Program: ".$program."\r\n\r\n";
$mail_text2  .= "Name: ".$firstName." ".$lastName."     Gender: " .$gender."     Voice Type: " .$birthdate."\r\n\r\n";
$mail_text2  .= "Phone: ".$phone."     Fax: ".$fax."\r\n\r\n";
$mail_text2  .= "Email: ".$email."\r\n\r\n";
$mail_text2  .= "Address: ".$addressPresent."\r\n\r\n";
$mail_text2  .= "Address Valid Until: ".$validPresent."\r\n\r\n";
$mail_text2  .= "Affiliation: ".$addressPermanent."\r\n\r\n";
$mail_text2  .= "Accommodations: ".$accommodations."     Room Upgrade: ".$roomupgrade."\r\n\r\n";
$mail_text2  .= "Roommate Request: ".$roommate."\r\n\r\n";
$mail_text2  .= "Meal Plan: ".$mealplan."     Allergies or health: ".$allergies."\r\n\r\n";
$mail_text2  .= "Other activities: ".$activities."\r\n\r\n";
$mail_text2  .= "How did you hear about the festival: ".$howhear."\r\n\r\n";
$mail_text2  .= "Total enclosed: ".$total."\r\n\r\n";
//$mail_text  .= "Group travel: ".$grouptravel." City of departure: ".$departurecity."\r\n\r\n";
$mail_text2  .= "Service Fee: ".$servicefee;


$mail->Subject = "Amalfi Coast Music & Arts Festival Online Registration Notification - $firstName $lastName";
//$mail->Body    = $mail_text;
$mail->Body    = $mail_text2;
// $mail->AltBody = $mail_text2;
echo 'bob';
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}



    
header("Location: registration-thankyou-choral-wix.php?program=$program&servicefee=$servicefee");
?>
