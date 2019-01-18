

<!--molli start here-->
<script src="<?php echo base_url('assets/js/responsiveslides.min.js');?>"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
<!----//End-slider-script---->
<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			    <div class="molli">
			    	<div class="molli-top">
			    		<span class="line-x"> </span>
			    		<span class="line-y"> </span>
	                     <h3><?php echo mb_strtoupper($um_lg_photo);?></h3>
	                     <P>Vestibulum auctor dapibus nequ</P>
			       </div>
			      <ul class="rslides" id="slider4">
			        <li>
			          <div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd1.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Tante etvuputa</h4>
						</div>
					  </div>
					  <div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd2.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Phasellus pede</h4>
						</div>
					</div>
					<div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd3.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Morbi interdum</h4>
						</div>
					</div>
					<div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd4.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Suspendisse mauris</h4>
						</div>
					</div>
			        </li>
			        <li>
					  <div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd2.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Phasellus pede</h4>
						</div>
					</div>
					<div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd3.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Morbi interdum</h4>
						</div>
					</div>
					<div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd4.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Suspendisse mauris</h4>
						</div>
					</div>
					 <div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd1.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Tante etvuputa</h4>
						</div>
					  </div>
			        </li>
			        <li>
					<div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd3.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Morbi interdum</h4>
						</div>
					</div>
					<div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd4.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Suspendisse mauris</h4>
						</div>
					</div>
					 <div class="molli-grids">
						<img src="<?php echo base_url('assets/images/gd1.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Tante etvuputa</h4>
						</div>
					  </div>
					  <div class="molli-grids">
						<img src="h<?php echo base_url('assets/images/gd2.jpg'); ?>" alt=""/>
						<div class="molli-text">
							<h4>Phasellus pede</h4>
						</div>
					</div>
			        </li>
			      </ul>
			  </div>
			    <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
<!--molli end here-->