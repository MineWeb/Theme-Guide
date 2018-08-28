<div class="container">
	<div class="row row-bottom-padded-lg">
		<div class="col-md-6 col-md-offset-3 text-center">
			<h2 class="fh5co-lead animate-box">Questions fréquentes</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<ul class="fh5co-faq-list">
				<?= (empty($faqs)) ? "<p>Aucune FAQ pour le moment</p>" : ""?>
				<?php foreach($faqs as $k=>$v): $v = current($v); ?>
				<li class="animate-box">
					<h2><?= $v['question'] ?></h2>
					<p><?= $v['answer'] ?></p>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>