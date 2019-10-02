<div class="reg-section-head">ACCOMMODATIONS:</div>
<div style="height:20px;">
<strong>COST: $2,300</strong><em> (includes hotel accommodations, 2 meals a day, 3 tourist excursions, transportation, etc.)</em>
</div>
<div class="input-div-radio" style="left:130px; margin-bottom:0px;">
<strong>Hotel</strong>: (assumes double occupancy)
</div>
<div class="input-div-radio" style="left:130px; margin-bottom:0px;">
	<em>Hotel Supplements:</em> I prefer a 
</div>
<?php 
echo '
<div class="input-div-radio" style="left:38px; height:25px;">
	<div class="input-label-left-radio">single room:<strong> add $'.number_format($roomupgradeSingle['choral'], 0, '.', ',').'</strong></div>
    <input name="roomupgrade" value="Single" type="radio" class="input-left-radio"/>
</div>
<div class="input-div-radio" style="left:38px; height:25px;">
	<div class="input-label-left-radio">superior room (with sea view & balcony):<strong> add $395</strong></div>
    <input name="roomupgrade" value="Superior" type="radio" class="input-left-radio"/>
</div>';
?>
<div style="font-size:1px; height:15px;"></div>

<div class="input-div">
	<div  class="input-label-left-double">Roommate<br/>Request </div>
    <input type="text" name="roommate" id="roommate" class="input-left"/>
</div>
<div style="font-size:1px; height:15px;"></div>
<div style="position:relative; left:15px;">Please note any allergies, health concerns, or mobility issues that might affect room and board options or excursions.</div>
<div class="input-div">
	<div  class="input-label-left">Allergies/Health</div>
    <input type="text" name="allergies"  id="allergies" class="input-left" style="width:400px;"/>
</div>

<div style="font-size:1px; height:10px;"></div>
<div class="grey-line"></div>
