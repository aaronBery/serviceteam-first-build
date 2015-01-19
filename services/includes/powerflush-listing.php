
<div class="box">
	<div class="box--header">Latest requests from customers in these areas</div>
	<p>
		We complete orders across <?php echo $locationLabel; ?> every day - have a look below to the huge range of jobs we do, and you'll see that Serviceteam have the experience and tradespersons to cover your job - so don't trust just anyone to do your job - trust Serviceteam! Our friendly team are standing by to take your call today!
	</p>
	<ul class="gas-listing-by-area">
		<?php
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		        echo "<li><a href='/gas-powerflush-" . $row["boroughName"] .  "-" . $row["postcode"] . "'>" . $row["boroughLabel"] . "</a></li>";
		    }
		}
		?>
	</ul>
</div>
