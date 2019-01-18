<!--service start here-->
<div class="service">
	<h4>Services</h4>
	<div class="service-top">
<?php

foreach ($ex_page as $item) {
?>	
		<div class="col-md-4 service-grid">
			<a href="#"><img src="<?php echo base_url('assets/images/'. $item['foto_thumb']); ?>" alt=""/></a>
			<div class="service-gd-bott">
				<h3><a href="#"> <?php echo $item['tema_ru'];?> </a></h3>
				<p>odio dignissimos ducimus qui blanditiis praesentium </p>
			</div>
		</div>
<?php
}
?>		

	  <div class="clearfix"> </div>
	</div>


<div class="pagi text-center">
    <ul class="pagination">
    <?php
    echo $this->pagination->create_links();
    ?>
    </ul>
</div>  	