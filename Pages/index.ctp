<div class="container">
	<?= $page['content'] ?>
	<small class="pull-right"><?= $Lang->get('GLOBAL__UPDATED') ?> : <?= $Lang->date($page['updated']) ?></small><br>
	<small class="pull-right"><?= $Lang->get('GLOBAL__AUTHOR') ?> : <?= $page['author'] ?></small>
</div>