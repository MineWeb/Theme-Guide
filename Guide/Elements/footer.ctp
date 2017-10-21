<footer id="fh5co-footer">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<?= $theme_config['footer_1']; ?>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<?= $theme_config['footer_2']; ?>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<?= $theme_config['footer_3']; ?>
						</div>
					</div>
					<?php if (!empty($skype_link) || !empty($youtube_link) || !empty($twitter_link) || !empty($facebook_link)): ?>
					<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-footer-widget">
							<h3>Suivez-nous</h3>
							<ul class="fh5co-social">
								<?php if (!empty($twitter_link)): ?>
									<li><a href="<?= $twitter_link; ?>"><i class="icon-twitter"></i></a></li>
								<?php endif; ?>
								<?php if (!empty($facebook_link)): ?>
								<li>
									<a href="<?= $facebook_link; ?>">
										<i class="icon-facebook"></i>
									</a>
								</li>
								<?php endif; ?>
								<?php if (!empty($youtube_link)): ?>
								<li>
									<a href="<?= $youtube_link; ?>">
										<i class="icon-youtube"></i>
									</a>
								</li>
								<?php endif; ?>
								<?php if (!empty($skype_link)): ?>
								<li>
									<a href="<?= $skype_link; ?>">
										<i class="icon-skype"></i>
									</a>
								</li>
								<?php endif; ?>
							</ul>
							<?php if (!empty($findSocialButtons)){
								foreach ($findSocialButtons as $key => $value) {
									echo '<a target="_blank" class="btn btn-default btn-block" style="text-decoration: none; border: none; color: white; background-color:'.$value['SocialButton']['color'].'" href="'.$value['SocialButton']['url'].'">';
									if(!empty($value['SocialButton']['img'])) {
										echo '<img class="img-responsive" src="'.$value['SocialButton']['img'].'">';
									}
									if(!empty($value['SocialButton']['title'])) {
										echo $value['SocialButton']['title'];
									}
									echo '</a>';
								}
									echo '<br>';
							}
							?>
						</div>
					</div>	
					<?php endif; ?>
				</div>
			</div>
			<div class="fh5co-copyright animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-left"><small class="fh5co-left"><?= $theme_config['footer_copyright']; ?></small></p>
							<!-- Supprimer la ligne suivante est contre le règlement du CMS. Votre licence sera suspendue si vous le faites. Vous êtes prévenu. -->
							<p class="fh5co-right"><small class="fh5co-right">Développé par <small>MrSheepSheep</small>. Propulsé par <a href="http://mineweb.org/" target="_blank">Mineweb</a>.</small></p>
						</div>
					</div>
				</div>
			</div>
		</footer>