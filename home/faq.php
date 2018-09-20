<?php
$faqList = faq()->list();
?>

<div class="container">
	<div class="content-wrapper">
		<div class="item-container">
			<div class="container-fluid">	
				<div class="row" style="margin-top: 24px;">
					<!-- Column -->
					<?php foreach($faqList as $row) { ?>
						<div class="text"> FAQ: <br> Q: <?=$row->question;?> <br> A: <?=$row->answer;?> </div> </br>
					<?php } ?>
					<!-- Column -->
				</div>
			</div>
		</div>
	</div>
</div>