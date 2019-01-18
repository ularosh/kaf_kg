<!--top nav start here-->
<div class="mother-grid">
	<div class="container">
	  <div class="temp-padd">
		<div class="top-strip">
			<div class="address">
				<ul>
					<li><a href="#"><span class="link"> </span>www.sitename.com</a></li>
					<li><a href="mailto:example@email.com"><span class="mes"> </span>info@sitename.com</a></li>
					<li><span class="ph"> </span>8888 8888</li>
					<li><a href="<?php echo base_url('page/language/russian');?>">Орус</a></li>
                    <li><a href="<?php echo base_url('page/language/kyrgyz');?>">Кыргыз</a></li>
                                        
                                        
				</ul>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="#"> <span class="w-f"> </span></a></li>
                   <li><a href="#"> <span class="w-tw"> </span></a></li>
                   <li><a href="#"> <span class="w-in"> </span></a></li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
   </div>
<!--top nav end here-->	
<!--title start here-->
<div class="title-main">
			<a href="<?php echo base_url();?>"><h1>Tender</h1></a>
		
</div>
<!--title end here-->
<!--header start here-->
<div class="header">
			<div class="navg">
				<span class="menu"> <img src="<?php echo base_url('assets/images/icon.png');?>" alt=""/></span>
				<ul class="res">
                                    <?php
                                    foreach ($m_menu as $item) {
                                    ?>
                                    <li><a href="<?php echo $item['url']; ?>" ><?php echo $item['name_ru'];?></a></li>
                                    <?php
                                    }
                                    ?>
				</ul>
				<script>
                  $( "span.menu").click(function() {
                    $(  "ul.res" ).slideToggle("slow", function() {
                     // Animation complete.
                     });
                     });
		       </script>
			</div>
			<div class="search">
				<input type="text" value="<?php echo $um_lg_search;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $um_lg_search;?>';}"/>
				<input type="submit" value=""/>
			</div>
			<div class="clearfix"> </div>
  </div>
<!--header end here-->