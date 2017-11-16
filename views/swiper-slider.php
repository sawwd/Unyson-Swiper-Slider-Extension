<?php if (!defined('FW')) die('Forbidden'); ?>
<?php if (isset($data['slides'])): ?>
	<div class="banner">
		<div class="swiper-container js-site-slider">
		    <div class="swiper-wrapper">
	    		<?php foreach ($data['slides'] as $slide): ?>
		 			<div class="swiper-slide" style="background-image: url('<?php echo $slide['src']; ?>');"></div>
				<?php endforeach; ?>
		    </div>
		</div>
	</div>
<?php endif; ?>
