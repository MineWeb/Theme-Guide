<section id="fh5co-hero" class="js-fullheight">
	<div class="fh5co-overlay"></div>
	<div class="container">
		<div class="fh5co-intro js-fullheight">
			<div class="fh5co-intro-text">
				<div class="fh5co-<?= $theme_config['presentation_position']; ?>-position">
					<h2 class="animate-box"><?= $theme_config['slogan']; ?></h2>
					<p class="animate-box">
					<?php if($theme_config['presentation_leftbtn_href'] != ""): ?>
						<a href="<?= $theme_config['presentation_leftbtn_href']; ?>" class="btn btn-outline"><?= $theme_config['presentation_leftbtn_text']; ?></a>
					<?php endif; ?>
					<?php if($theme_config['presentation_rightbtn_href'] == ""): ?>
						<button type="button" class="copy-me btn btn-primary" data-clipboard-text="<?= $theme_config['presentation_leftbtn_text']; ?>"><?= $theme_config['presentation_leftbtn_text']; ?></button>
						
						<script type="text/javascript">
							$(function(){
								var clipboard = new Clipboard('.copy-me');
								clipboard.on('success', function(e){
									$(".copy-me").text("IP copiée !");
								});

								clipboard.on('error', function(e){
									$(".copy-me").text("Impossible de copier l'IP.");
								});
							})
						</script>
					<?php else: ?>
							<a href="<?= $theme_config['presentation_rightbtn_href']; ?>" class="btn btn-primary"><?= $theme_config['presentation_rightbtn_text']; ?></a>
						<?php endif; ?>
					</p>
					<h3 class="animate-box">
						<?php if($banner_server): ?>
							<?= $server_infos['getPlayerCount'] ?>  joueurs sont connectés
						<?php else: ?>
							<?= $Lang->get('SERVER__STATUS_OFF'); ?>
						<?php endif; ?>
					</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="fh5co-learn-more animate-box">
		<a href="#" class="scroll-btn" data-next="fh5co-features">
			<span class="text"><?= $theme_config['presentation_readmore']; ?></span>
			<span class="arrow"><i class="icon-chevron-down"></i></span>
		</a>
	</div>
</section>

<section id="fh5co-projects">
	<div class="container">
		<div class="row row-bottom-padded-md">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2 class="fh5co-lead animate-box">Actualités</h2>
			</div>
		</div>
		<div class="row">
			<?php if(!empty($search_news)): ?>
        <?php foreach ($search_news as $news): ?>
            <?php
								// Parsing
                $doc = new DOMDocument();
                $doc->loadHTML($news['News']['content']);

                $img = null;
                $tags = $doc->getElementsByTagName('img');
                if ($tags->length > 0){
                    $firstImg = $tags->item(0);
                    $firstImg->parentNode->removeChild($firstImg);
                    $img = $firstImg->getAttribute('src');
                }
            ?>
					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
						<a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])); ?>" class="fh5co-project-item">
							<?= ($img == null) ? '' : $this->Html->image($img, array('class' => 'img-responsive')); ?>
							<div class="news-abs">
								<i class="fa fa-comment"></i> <?= $news['News']['count_comments'] ?> <i class="fa fa-thumbs-up"></i> <?= $news['News']['count_likes'] ?>
							</div>
							<div class="fh5co-text">
								<h2><?= $news['News']['title']; ?></h2>
								<p>
								<?= $Lang->date($news['News']['created']); ?><br>
								</p>
							</div>
						</a>
					</div>
        <?php endforeach; ?>
    <?php endif; ?>
		</div>
	</div>
</section>
<?php if(count((array)$theme_config['features1']) > 1): ?>
<section id="fh5co-features">
	<div class="container">
		<div class="row text-center row-bottom-padded-md">
			<div class="col-md-8 col-md-offset-2">
				<?php if($theme_config['features1_image'] != ""): ?>
				<figure class="fh5co-devices animate-box">
					<img src="<?= $theme_config['features1_image']; ?>" alt="" class="img-responsive">
				</figure>
				<?php endif; ?>
				<h2 class="fh5co-lead animate-box"><?= $theme_config['features1_title']; ?></h2>
				<p class="fh5co-sub-lead animate-box"><?= $theme_config['features1_description']; ?></p>
			</div>
		</div>
		<div class="row">
			<?php 
				foreach($theme_config['features1'] as $k => $f): if ($k == "%id%") continue; ?>
					<div class="col-md-4 col-sm-6 col-xs-12 animate-box">
						<div class="fh5co-feature">
							<div class="fh5co-icon">
								<i class="<?= $f->icon ?>"></i>
							</div>
							<h3><?= $f->title ?></h3>
							<p><?= $f->description ?></p>
						</div>
					</div>
				<?php endforeach;
			?>
			<div class="clearfix visible-sm-block"></div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php if(count((array)$theme_config['features2']) > 1): ?>
<section id="fh5co-features-2">
	<div class="container">
		<div class="col-md-6 col-md-push-6">
			<figure class="fh5co-feature-image animate-box">
				<img src="<?= $theme_config['features2_image']; ?>" alt="">
			</figure>
		</div>
		<div class="col-md-6 col-md-pull-6">
			<h2 class="fh5co-lead animate-box"><?= $theme_config['features2_title']; ?></h2>
			<?php foreach($theme_config['features2'] as $k => $f): if ($k == "%id") continue; ?>
			<div class="fh5co-feature">
				<div class="fh5co-icon animate-box"><i class="<?= $f->icon ?>"></i></div>
				<div class="fh5co-text animate-box">
					<h3><?= $f->title ?></h3>
					<p><?= $f->description ?></p>
				</div>
			</div>
			<?php endforeach; ?>
			<?php if($theme_config['features2_btntext'] != ""): ?>
			<div class="fh5co-btn-action animate-box">
				<a href="<?= $theme_config['features2_btnhref']; ?>" class="btn btn-primary btn-cta"><?= $theme_config['features2_btntext']; ?></a>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>
