<?php $search_slider = ClassRegistry::init('Slider')->find('all'); ?>

<script>
$(".fh5co-overlay").vegas({

		slides: [

			 <?php $i = 0; foreach ($search_slider as $k => $v) { ?>

					{ src: "<?= $v['Slider']['url_img'] ?>" },

				<?php } ?>

		],

		overlay: 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.3.1/overlays/'+'<?= $theme_config['vegas-overlay']; ?>'+'.png',

		transition: '<?= $theme_config['vegas-transition']; ?>',

});
</script>