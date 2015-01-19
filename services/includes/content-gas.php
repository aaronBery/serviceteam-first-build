<div class="box">
	<div class="box--header">Heating and gas services</div>
		<h1>Gas engineer <?php echo $locationLabel; ?> | Boiler repair <?php echo $postCode; ?> | Boiler replacement</h1>
		<p>With gas engineers based throughout <?php echo $locationLabel; ?> <?php echo $postCode; ?>, Hunter Francis provide the complete range  of domestic and business gas and heating services for your property. </p>
		<p>Gas and heating   services we provide to customers in <?php echo $locationLabel; ?> <?php echo $postCode; ?></p>
		<div class="tickcontainer">
      <img src="http://www.multi-trade.co.uk/images/promos/gas_ticklist1.gif" alt="Call us now on 020 7837 4914 - we have engineers in youre area!" width="305" height="183">
      <a href="tel:+442087989250" class="tickcontainer--call">020 7837 4914</a>
    </div>
    <ul>
      <li>Central Heating installations</li>
      <li>Boiler replacement</li>
      <li> Boiler repair</li>
      <li> Emergency call-out</li>
      <li>Gas fires</li>
      <li>Gas appliance servicing &amp; repair</li>
      <li>Hot water tanks</li>
      <li>Immersion heaters</li>
      <li>Megaflo  cylinders</li>
      <li>Gas hobs &amp; ovens</li>
      <li>Thermostatic radiator valve  replacement</li>
      <li> Radiators</li>
      <li>Gas Safety Certificate CP12</li>
    </ul>
    <p>We guarantee to beat any like for like quote on our boiler installations and we're also offering a free five year warranty on all Vaillant boilers that we install! For more  information on our gas and heating services <a href="#">please visit our dedicated gas pages here</a></p>
    <p>We can also</p>
    <ul>
      <li>Find and repair a water leak</li>
      <li>Fix a broken toilet</li>
      <li>Repair broken taps</li>
      <li>Unblock toilets</li>
    </ul>

  <?php if(strlen($postCode)){ ?>
  <h3 style="margin: 1em 10px">Our latest jobs map</h3>
  <p style="width: 100%; clear: both" align="center">
  <img name="google_maps" src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $postCode; ?>,uk&amp;zoom=14&amp;size=700x400&amp;markers=icon:http://www.multi-trade.co.uk/images/van_icon.png%7C%7C&amp;sensor=false" alt="Map of <?php echo $locationLabel; ?> <?php echo $postCode; ?>" style="border:1px solid #CCC"></p>

  <?php
  }
?>
</div>