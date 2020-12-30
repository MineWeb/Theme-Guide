
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title_for_layout; ?> - <?= $website_name ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $theme_config['slogan']; ?>" />
	<meta name="author" content="<?= $theme_config['author']; ?>" />
	<meta name="copyright" content="MrSheepSheep" />
	<meta name="keywords" content="<?= $theme_config['keywords']; ?>" />
    <meta name="domain" content="<?php echo $_SERVER['HTTP_HOST'];?>" />
    <meta name="robots" content="follow, index, all" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST'];?>" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:image" content="<?= $theme_config['favicon_url'] ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $website_name ?>" />
    <meta property="og:title" content="<?= $title_for_layout; ?> - <?= $website_name ?>" />
    <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'];?>" />
    <meta property="og:description" content="<?= $theme_config['slogan']; ?>" />
    <meta itemprop="name" content="<?= $website_name ?>" />
    <meta itemprop="description" content="<?= $theme_config['slogan']; ?>" />
    <meta itemprop="image" content="<?= $theme_config['favicon_url'] ?>" />
    <meta name="theme-color" content="<?= $theme_config['theme_color']; ?>" />
    <meta name="msapplication-TileColor" content="<?= $theme_config['theme_color']; ?>" />
    <meta name="application-name" content="<?= $website_name ?>" />
    <meta name="apple-mobile-web-app-title" content="<?= $website_name ?>" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?= $theme_config['favicon_url'] ?>">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
	<!-- Vegas Slider CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.0/vegas.min.css" rel="stylesheet" type="text/css">
	<!-- Animate.css -->
	<?= $this->Html->css('animate.css'); ?>
	<!-- Flexslider -->
	<?= $this->Html->css('flexslider.css'); ?>
	<!-- Icomoon Icon Fonts-->
	<?= $this->Html->css('icomoon.css'); ?>
	<!-- Magnific Popup -->
	<?= $this->Html->css('magnific-popup.css'); ?>
	<!-- Bootstrap  -->
	<?= $this->Html->css('bootstrap.css'); ?>
  <!-- Main style -->
	<?= $this->Html->css($theme_config['color'].'.css'); ?>
	<!-- Additional custom css -->
	<?= $this->Html->css('additional.css'); ?>
	<!-- Modernizr JS -->
	<?= $this->Html->script('modernizr-2.6.2.min.js'); ?>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- jQuery -->
	<?= $this->Html->script('jquery.min.js'); ?>
	</head>

	<body class="<?= $theme_config['boxed']; ?>">

	<div class="fh5co-loader"></div>
	<div id="fh5co-page">
		<?= $this->element('nav'); ?>

		<?php if($title_for_layout != 'Accueil'): ?>
			<?= $this->element('header'); ?>
			<div id="fh5co-features">
				<?= $this->fetch('content'); ?>
			</div>
		<?php else: ?>
				<?= $this->fetch('content'); ?>
		<?php endif; ?>
		<?= $this->element('footer'); ?>
		<!-- END #fh5co-footer -->
	</div>
	<!-- END #fh5co-page -->
	<?= $this->element('modals'); ?>
	<!-- jQuery Easing -->
	<?= $this->Html->script('jquery.easing.1.3.js'); ?>
	<!-- Bootstrap -->
	<?= $this->Html->script('bootstrap.min.js'); ?>
	<!-- Waypoints -->
	<?= $this->Html->script('jquery.waypoints.min.js'); ?>
	<!-- Flexslider -->
	<?= $this->Html->script('jquery.flexslider-min.js'); ?>
	<!-- Magnific Popup -->
	<?= $this->Html->script('jquery.magnific-popup.min.js'); ?>
	<?= $this->Html->script('magnific-popup-options.js'); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.0/vegas.min.js"></script>
	<?= $this->element('scripts'); ?>
	<!-- Main JS (Do not remove) -->
	<?= $this->Html->script('main.js'); ?>
	<?= $this->Html->script('app.js') ?>
	<?= $this->Html->script('form.js') ?>
	<?= $this->Html->script('notification.js') ?>
  <!-- HomeModal -->
	<?= $Module->loadModules('home') ?>
	<script>
	<?php if($isConnected) { ?>
		// Notifications
			var notification = new $.Notification({
				'url': {
					'get': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'getAll')) ?>',
					'clear': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clear', 'NOTIF_ID')) ?>',
					'clearAll': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clearAll')) ?>',
					'markAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAsSeen', 'NOTIF_ID')) ?>',
					'markAllAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAllAsSeen')) ?>'
				},
				'messages': {
					'markAsSeen': '<?= $Lang->get('NOTIFICATION__MARK_AS_SEEN') ?>',
					'notifiedBy': '<?= $Lang->get('NOTIFICATION__NOTIFIED_BY') ?>'
				}
			});
	<?php } ?>
	var LIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'like')) ?>";
	var DISLIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'dislike')) ?>";

	var LOADING_MSG = "<?= $Lang->get('GLOBAL__LOADING') ?>";
	var ERROR_MSG = "<?= $Lang->get('GLOBAL__ERROR') ?>";
	var INTERNAL_ERROR_MSG = "<?= $Lang->get('ERROR__INTERNAL_ERROR') ?>";
	var FORBIDDEN_ERROR_MSG = "<?= $Lang->get('ERROR__FORBIDDEN') ?>"
	var SUCCESS_MSG = "<?= $Lang->get('GLOBAL__SUCCESS') ?>";

	var CSRF_TOKEN = "<?= $csrfToken ?>";
	</script>

	<?php if(isset($google_analytics) && !empty($google_analytics)) { ?>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?= $google_analytics ?>', 'auto');
			ga('send', 'pageview');
		</script>
	<?php } ?>
	<?= $configuration_end_code ?>
	<script type="text/javascript">
			window.cookieconsent_options = {"message":"Notre site utilise des cookies pour vous proposer la meilleure expérience possible.","dismiss":"Reçu !","learnMore":"En savoir plus","link":null,"theme":"dark-bottom"};
	</script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
	</body>
</html>

