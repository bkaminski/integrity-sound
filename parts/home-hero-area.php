<script>
jQuery(
  function() {
    const bgv = jQuery('#video1');

    if (bgv.is(':visible')) {
      jQuery('source', bgv).each(
        function() {
          const el = jQuery(this);
          el.attr('src', el.data('src'));
        }
      );

      bgv[0].load();
    }
  }
)
</script>

<header class="int-home">
	<div class="video-hero">
		<video class="d-none d-md-block" id="video1" preload="none" autoplay="" muted="" playsinline="" loop="">
			<source data-src="<?php echo get_home_url(); ?>/wp-content/uploads/integrity-sound-solutions.mp4" src="" type="video/mp4">
			<source data-src="<?php echo get_home_url(); ?>/wp-content/uploads/integrity-sound-solutions.ogv" src="" type="video/ogg">
		</video>
	</div>
	<div class="video-text">
		<div class="container px-5">
			<h1 class="text-uppercase fw-bold text-shadow">Delivering Custom Audiovisual Solutions</h1>
			<p class="h1 display-3 text-uppercase fw-bold pb-5 text-shadow">With Integrity</p>
		</div>
	</div>
</header>


