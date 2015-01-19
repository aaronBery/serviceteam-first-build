
<div class="box">
	<div class="box--header">OUR LATEST LONDON Gas - Domestic REQUESTS BY AREA</div>
	<p>
		Our engineers and tradesmen cover the whole of London, and we get thousands of requests every month - take a look at these customers who all asked for our help and see if you can spot your area!
	</p>
	<ul class="gas-listing-by-area">
		<?php
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		        echo "<li><a href='/gas-boiler-installation-" . $row["boroughName"] .  "-" . $row["postcode"] . "'>" . $row["boroughLabel"] . "</a></li>";
		    }
		}
		?>
	</ul>
</div>
