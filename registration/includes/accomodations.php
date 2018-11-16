
<div class="reg-section-head">TUITION & ACCOMMODATIONS:<span style="font-weight:normal"><br/>(Full tuition - includes private lessons, coachings, master classes & workshops.) </span></div>

<?php 
if($regSection=='instrumental'||$regSection=='vocal'){
	echo '<div class="input-div" style="height: 35px;">
		<div class="input-label-left-radio"><strong>Hostel:  $'.number_format($hostelPrice[$regSection], 0, '.', ',').'</strong><br>(Triple room)</div>
		<input name="accommodations" value="Hostel" type="radio" class="input-left-radio"/>
	</div>';
	}
?>
<div class="input-div"<?php if($regSection=='visual') {echo 'style="height:65px; line-height:115%;"';};?>>
	<div class="input-label-left-radio"><strong>Hotel: <?php 
	if($regSection=='visual') {
		echo '</strong>(assumes '.$standardRoom[$regSection].' occupancy, includes breakfast)<br/><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Session I - $'.number_format($standardPrice['visual-I'], 0, '.', ',').'<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Session II - $'.number_format($standardPrice['visual-II'], 0, '.', ',');
	} else {
		echo '$'.number_format($standardPrice[$regSection], 0, '.', ',');
	};
	
	?></strong></div>
    <input name="accommodations" value="Hotel" type="radio" class="input-left-radio"/>
</div>

<div class="input-div-radio" style="left:150px; margin-bottom:0px;">
	<em>Hotel Supplements:</em> I prefer a 
</div>
<?php if($regSection!='visual'&&$regSection!='writers'&&$regSection!='writersguest') {
	echo '<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">Triple room:<strong> as above </strong></div>
    <input name="roomupgrade" value="Triple"  type="radio" class="input-left-radio"/>
</div>
<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">Double room: <strong>add $'.number_format($roomupgradeDouble[$regSection], 0, '.', ',').'</strong></strong></div>
    <input name="roomupgrade" value="Double" type="radio" class="input-left-radio"/>
</div>
<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">Single room:<strong> add $'. number_format($roomupgradeSingle[$regSection], 0, '.', ',').'</strong></div>
    <input name="roomupgrade" value="Single" type="radio" class="input-left-radio"/>
</div>';
	} else if($regSection=='visual') {
		echo '<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">double room:  as above </strong></strong></div>
    <input name="roomupgrade" value="Double" type="radio" class="input-left-radio"/>
</div>
<div class="input-div-radio" style="left:38px; height:55px; line-height:115%;">
	<div class="input-label-left-radio">single room:<strong><br/>Session I add $'.number_format($roomupgradeSingle['visual-I'], 0, '.', ',').'<br/>Session II add $'.number_format($roomupgradeSingle['visual-II'], 0, '.', ',').'</strong></div>
    <input name="roomupgrade" value="Single" type="radio" class="input-left-radio"/>
</div>
<div class="input-div-radio" style="left:38px; height:30px; line-height:115%;">
	<div class="input-label-left-radio">superior room (with sea view & balcony):<strong> add $'.number_format(540, 0, '.', ',').'</strong></div>
    <input name="roomupgrade" value="Superior" type="radio" class="input-left-radio"/>
</div>';
	} else if($regSection=='writers') {echo '<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">triple room:<strong> subract $'.number_format(($roomupgradeTriple[$regSection]*-1), 0, '.', ',').'</strong></div>
    <input name="roomupgrade" value="Triple" type="radio" class="input-left-radio"/>
</div>
	<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">double room:  as above </strong></strong></div>
    <input name="roomupgrade" value="Double" type="radio" class="input-left-radio"/>
</div>
<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">single room:<strong> add $'.number_format($roomupgradeSingle[$regSection], 0, '.', ',').'</strong></div>
    <input name="roomupgrade" value="Single" type="radio" class="input-left-radio"/>
</div>';
	} else {
		echo '<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">double room:  as above </strong></strong></div>
    <input name="roomupgrade" value="Double" type="radio" class="input-left-radio"/>
</div>
<div class="input-div-radio" style="left:38px;">
	<div class="input-label-left-radio">single room:<strong> add $'.number_format($roomupgradeSingle[$regSection], 0, '.', ',').'</strong></div>
    <input name="roomupgrade" value="Single" type="radio" class="input-left-radio"/>
</div>';
	};
?>
<div style="font-size:1px; height:15px;"></div>

<div class="input-div">
	<div  class="input-label-left-double">Roommate<br/>Request </div>
    <input type="text" name="roommate" id="roommate" class="input-left"/>
</div>

<div style="font-size:1px; height:25px;"></div>

<div class="input-div" style="height:35px; line-height:115%;">
	<div class="input-label-left-radio"><strong>Meal Plan</strong> Dinners: full 3-course meal with wine & mineral water:<strong>
    <?php if($regSection=='visual') {
		echo '<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Session I - $'.number_format($mealplanPrice['visual-I'], 0, '.', ',').'<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Session II - $'.number_format($mealplanPrice['visual-II'], 0, '.', ',');
	} else {
		echo '$'.number_format($mealplanPrice[$regSection], 0, '.', ',');
	};?></strong></div>
    <input  name="mealplan" value="Yes" type="checkbox" class="input-left-radio"/>
</div>
<div style="font-size:1px; height:15px;"></div>
<div style="position:relative; left:15px;">Please note any allergies or health concerns that might affect room and board options:</div>
<div class="input-div">
	<div  class="input-label-left">Allergies/Health</div>
    <input type="text" name="allergies"  id="allergies" class="input-left" style="width:400px;"/>
</div>

<div style="font-size:1px; height:10px;"></div>
<div class="grey-line"></div>
