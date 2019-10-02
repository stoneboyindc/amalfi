<div class="reg-section-head">PAYMENT:</div>

<div class="input-div-radio">
	<div class="input-label-left-radio">Registration fee<strong>:  $<?php echo number_format($registrationFee, 0, '.', ',');?></strong></div>
    <input  name="registrationfee" value="Yes" type="checkbox" class="input-left-radio"/>
</div>

<div class="input-div-radio">
	<div class="input-label-left-radio">Deposit<strong>:  $500</strong></div>
    <input name="deposit" value="Yes" type="checkbox" class="input-left-radio"/>
</div>

<div class="input-div-radio">
	<div class="input-label-left-radio"><em>Note: You  must include both for your application to be confirmed.</em></div>
</div>
<div style="font-size:1px; height:15px;"></div>

<div class="input-div-radio">
	<div class="input-label-left-radio">Service fee for U.S. payments (if registering online)<strong>:  $15</strong></div>
    <input name="servicefee" value="Domestic" type="radio" class="input-left-radio"/>
</div>

<div class="input-div-radio">
	<div class="input-label-left-radio">Service fee for international payments (if registering online)<strong>:  $<?php  echo number_format($serviceFee['International'], 2, '.', ',');?></strong></div>
    <input name="servicefee" value="International" type="radio" class="input-left-radio"/>
</div>
<div style="font-size:1px; height:15px;"></div>

<div class="input-div-radio">
	<div class="input-label-right"><em><strong>Total enclosed $</strong></em></div>
    <input name="total" size="8" type="text" class="input-right"/>
</div>

<div style="font-size:1px; height:10px;"></div>
<div class="grey-line"></div>

