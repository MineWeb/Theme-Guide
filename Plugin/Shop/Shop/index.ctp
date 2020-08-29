<div class="container">
	<div class="row row-bottom-padded-md">
		<div class="col-md-10 col-md-offset-1 text-center">
			<?php if($isConnected): ?>
				<h3 class="animate-box"><?= $money; ?></h3>
				<?= $vouchers->get_vouchers(); ?>
				<a href="#" data-toggle="modal" data-target="#addmoney" class="animate-box btn btn-primary">Créditer mon compte</a>
				<a href="#" data-toggle="modal" data-target="#cart-modal" class="animate-box btn btn-default"><i class="fa fa-shopping-cart"></i> Panier</a>
			<?php else: ?>
				<h2 class="animate-box text-danger">Connectez-vous pour utiliser la boutique !</h2>
				<?= $vouchers->get_vouchers(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div> <!-- Fin du features -->
<div id="fh5co-projects">
	<div class="container">
	<?php foreach ($search_categories as $u => $cat): ?>
		<div class="row row-bottom-padded-md">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2 class="fh5co-lead animate-box fadeInUp animated"><?= $cat['Category']['name']; ?></h2>
			</div>
		</div>
		<div class="row">
			<?php foreach ($search_items as $k => $v): ?>
				<?php if($v['Item']['category'] == $cat['Category']['id']): ?>
					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
						<a href="#" data-item-id="<?= $v['Item']['id'] ?>" role="button" class="fh5co-project-item display-item">
							<center>
								<img class="img-responsive" src="<?= $v['Item']['img_url']; ?>" alt="">
							</center>
							<div class="fh5co-text">
								<h2><?= $v['Item']['name'] ?></h2>
								<p class="text-center animate-box"><?= $v['Item']['price']; ?> <?= $Configuration->getMoneyName() ?></p>
							</div>
						</a>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>	
		</div>
	<?php endforeach; ?>
	</div>
</div>
<script type="text/javascript">
	var LOADING_MSG = '<?= $Lang->get('GLOBAL__LOADING') ?>';
	var ADDED_TO_CART_MSG = '<?= $Lang->get('SHOP__BUY_ADDED_TO_CART') ?> <i class="fa fa-check"></i>';
	var CART_EMPTY_MSG = '<?= $Lang->get('SHOP__BUY_CART_EMPTY') ?>';
	var ITEM_GET_URL = '<?= $this->Html->url(array('controller' => 'shop/ajax_get', 'plugin' => 'shop')); ?>/';
	var VOUCHER_CHECK_URL = '<?= $this->Html->url(array('action' => 'checkVoucher')) ?>/';
	var BUY_URL = '<?= $this->Html->url(array('action' => 'buy_ajax')) ?>';

	var CART_ITEM_NAME_MSG = '<?= $Lang->get('SHOP__ITEM_NAME') ?>';
	var CART_ITEM_PRICE_MSG = '<?= $Lang->get('SHOP__ITEM_PRICE') ?>';
	var CART_ITEM_QUANTITY_MSG = '<?= $Lang->get('SHOP__ITEM_QUANTITY') ?>';
	var CART_ACTIONS_MSG = '<?= $Lang->get('GLOBAL__ACTIONS') ?>';

	var CSRF_TOKEN = '<?= $csrfToken ?>';
</script>
<?= $this->Html->script('Shop.jquery.cookie') ?>
<?= $this->Html->script('Shop.shop') ?>
<?= $this->Html->script('Shop.jquery.bootstrap-touchspin.js') ?>
<!-- Cheat pour la navbar ?-->
<div>
