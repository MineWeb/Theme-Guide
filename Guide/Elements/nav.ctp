<section id="fh5co-header">
	<div class="container">
		<nav role="navigation">
			<ul class="pull-left left-menu">
				<?php
				if(!empty($nav)) {
					$i = 0;
					foreach ($nav as $key => $value) { ?>
						<?php if(empty($value['Navbar']['submenu'])) { ?>
							<li>
									<a href="<?= $value['Navbar']['url'] ?>"><?= $value['Navbar']['name'] ?></a>
							</li>
						<?php } else { ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $value['Navbar']['name'] ?> <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
								<?php
								$submenu = json_decode($value['Navbar']['submenu']);
								foreach ($submenu as $k => $v) {
								?>
									<li><a href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '' ?>><?= rawurldecode(str_replace('+', ' ', $k)) ?></a></li>
								<?php } ?>
								</ul>
							</li>
						<?php } ?>
						<?php
							$i++;
						}
					} ?>
			</ul>
			<h1 id="fh5co-logo">
				<a href="<?= $this->Html->url('/') ?>">
					<?php if($theme_config['logo'] != ""): ?>
						<img src="<?= $theme_config['logo'] ?>" style="max-height: 120px; max-width: 100%;">
					<?php else: ?>
							<?= $website_name ?>
					<?php endif; ?>
				</a>
			</h1>
			<?php if ($isConnected): ?>
			<ul class="pull-right right-menu">
				<li><a href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>"><?= $user['pseudo'] ?></a></li>
				<li><a href="#notifications_modal" data-toggle="modal"><i class="fa fa-bell"></i></a></li><span class="notification-indicator"></span>
				<li><a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>"><i class="fa fa-power-off"></i></a></li>
				<?php if($Permissions->can('ACCESS_DASHBOARD')): ?>
				<li><a href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>"><i class="fa fa-cog"></i></a></li>
				<?php endif; ?>
			</ul>
			<?php else: ?>
			<ul class="pull-right right-menu">
				<li><a href="#login" data-toggle="modal">Connexion</a></li>
				<li class="fh5co-cta-btn"><a href="#register" data-toggle="modal">Inscription</a></li>
			</ul>			
			<?php endif; ?>
		</nav>
	</div>
</section>