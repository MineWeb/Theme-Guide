<?php
$form_input = array('title' => $Lang->get('THEME__UPLOAD_LOGO'));

if(isset($config['logo']) && $config['logo']) {
  $form_input['img'] = $config['logo'];
  $form_input['filename'] = 'theme_logo.png';
}
?>
<section class="content">
  <div class="row">
		<form method="post" enctype="multipart/form-data" data-ajax="false">
			<div class="col-md-12">
				<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_general" data-toggle="tab">Options générales</a></li>
							<li><a href="#tab_presentation" data-toggle="tab">Zone de présentation</a></li>
							<li><a href="#tab_features1" data-toggle="tab">Fonctionnalités 1</a></li>
							<li><a href="#tab_features2" data-toggle="tab">Fonctionnalités 2</a></li>
							<li><a href="#tab_footer" data-toggle="tab">Footer</a></li>
							<li class="pull-right">	<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Sauvegarder</button></li>
						</ul>
						<div class="tab-content" style="padding: 15px;">
							<div class="tab-pane active" id="tab_general">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
												<label>Couleur du thème</label>
												<select name="color" class="form-control">
													<option value="style"<?= ($config['color'] == "style") ? ' selected' : '' ?>>Vert</option>
													<option value="blue"<?= ($config['color'] == "blue") ? ' selected' : '' ?>>Bleu</option>
													<option value="orange"<?= ($config['color'] == "orange") ? ' selected' : '' ?>>Orange</option>
													<option value="pink"<?= ($config['color'] == "pink") ? ' selected' : '' ?>>Rose</option>
													<option value="purple"<?= ($config['color'] == "purple") ? ' selected' : '' ?>>Violet</option>
													<option value="red"<?= ($config['color'] == "red") ? ' selected' : '' ?>>Rouge</option>
													<option value="turquoise"<?= ($config['color'] == "turquoise") ? ' selected' : '' ?>>Turquoise</option>
													<option value="yellow"<?= ($config['color'] == "yellow") ? ' selected' : '' ?>>Jaune</option>
												</select>
										</div>
										<div class="form-group">
											<label>Couleur du thème (navigateur)</label>
											<p>Entrez ici la couleeur hexadécimal pour colorer la barre url des navigateurs.</p>
											<input type="text" class="form-control" name="theme_color" placeholder="#FFFFF" value="<?= $config['theme_color'] ?>">
										</div>
										<div class="form-group">
												<label>Style de page</label>
												<select name="boxed" class="form-control">
													<option value=""<?= ($config['boxed'] == "") ? ' selected' : '' ?>>Normal</option>
													<option value="boxed"<?= ($config['boxed'] == "boxed") ? ' selected' : '' ?>>Boîte</option>
												</select>
										</div>
										<div class="form-group">
											<label><?= $Lang->get('THEME__FAVICON_URL') ?></label>
											<input type="text" class="form-control" name="favicon_url" value="<?= $config['favicon_url'] ?>">
										</div>
										<div class="form-group">
											<label>Auteur</label>
											<p>Entrez ici le créateur du site pour pouvoir mieux le référencer sur internet.</p>
											<input type="text" class="form-control" name="author" placeholder="MrSheepSheep" value="<?= $config['author'] ?>">
										</div>
										<div class="form-group">
											<label>Mots clés</label>
											<p>Entrez ici des mots clés pour pouvoir mieux le référencer sur internet.</p>
											<input type="text" class="form-control" name="keywords" placeholder="Mineweb, monsite.fr, MrSheepSheep" value="<?= $config['keywords'] ?>">
										</div>
										</div>
										<div class="form-group">
											<label>Conditions d'utilisation</label>
											<p>Entrez ici l'URL de vos conditions d'utilisation qui devront être acceptées lors de l'inscription.</p>
											<input type="text" class="form-control" name="cgu_register" placeholder="Désactivé" value="<?= $config['cgu_register'] ?>">
										</div>
										<div class="form-group">
											<label>Overlay du slider</label>
											<small><a href="http://vegas.jaysalvat.com/documentation/settings/#overlays">Liste des overlays</a> Recommandé: Aucun</small>
											<select name="vegas-overlay" class="form-control">
												<option value="false"<?= ($theme_config['vegas-overlay'] == "false") ? ' selected' : '' ?>>Aucun</option>
												<option value="01"<?= ($theme_config['vegas-overlay'] == "01") ? ' selected' : '' ?>>N°1</option>
													<option value="02"<?= ($theme_config['vegas-overlay'] == "02") ? ' selected' : '' ?>>N°2</option>
													<option value="03"<?= ($theme_config['vegas-overlay'] == "03") ? ' selected' : '' ?>>N°3</option>
													<option value="04"<?= ($theme_config['vegas-overlay'] == "04") ? ' selected' : '' ?>>N°4</option>
													<option value="05"<?= ($theme_config['vegas-overlay'] == "05") ? ' selected' : '' ?>>N°5</option>
													<option value="06"<?= ($theme_config['vegas-overlay'] == "06") ? ' selected' : '' ?>>N°6</option>
													<option value="07"<?= ($theme_config['vegas-overlay'] == "07") ? ' selected' : '' ?>>N°7</option>
													<option value="08"<?= ($theme_config['vegas-overlay'] == "09") ? ' selected' : '' ?>>N°8</option>
													<option value="09"<?= ($theme_config['vegas-overlay'] == "09") ? ' selected' : '' ?>>N°9</option>
											</select>
										</div>
										<div class="form-group">
											<label>Animation du slider</label>
											<small><a href="http://vegas.jaysalvat.com/documentation/transitions/">Liste des animations</a></small>
											<select name="vegas-transition" class="form-control">
												<option value="fade"<?= ($theme_config['vegas-transition'] == "fade") ? ' selected' : '' ?>>fade</option>
												<option value="fade2"<?= ($theme_config['vegas-transition'] == "fade2") ? ' selected' : '' ?>>fade2</option>
												<option value="slideLeft"<?= ($theme_config['vegas-transition'] == "slideLeft") ? ' selected' : '' ?>>slideLeft</option>
												<option value="slideLeft2"<?= ($theme_config['vegas-transition'] == "slideLeft2") ? ' selected' : '' ?>>slideLeft2</option>
												<option value="slideRight"<?= ($theme_config['vegas-transition'] == "slideRight") ? ' selected' : '' ?>>slideRight</option>
												<option value="slideRight2"<?= ($theme_config['vegas-transition'] == "slideRight2") ? ' selected' : '' ?>>slideRight2</option>
												<option value="slideUp"<?= ($theme_config['vegas-transition'] == "slideUp") ? ' selected' : '' ?>>slideUp</option>
												<option value="slideUp2"<?= ($theme_config['vegas-transition'] == "slideUp2") ? ' selected' : '' ?>>slideUp2</option>
												<option value="slideDown"<?= ($theme_config['vegas-transition'] == "slideDown") ? ' selected' : '' ?>>slideDown</option>
												<option value="slideDown2"<?= ($theme_config['vegas-transition'] == "slideDown2") ? ' selected' : '' ?>>slideDown2</option>
												<option value="zoomIn"<?= ($theme_config['vegas-transition'] == "zoomIn") ? ' selected' : '' ?>>zoomIn</option>
												<option value="zoomIn2"<?= ($theme_config['vegas-transition'] == "zoomIn2") ? ' selected' : '' ?>>zoomIn2</option>
												<option value="zoomOut"<?= ($theme_config['vegas-transition'] == "zoomOut") ? ' selected' : '' ?>>zoomOut</option>
												<option value="zoomOut2"<?= ($theme_config['vegas-transition'] == "zoomOut2") ? ' selected' : '' ?>>zoomOut2</option>
												<option value="swirlLeft"<?= ($theme_config['vegas-transition'] == "swirlLeft") ? ' selected' : '' ?>>swirlLeft</option>
												<option value="swirlLeft2"<?= ($theme_config['vegas-transition'] == "swirlLeft2") ? ' selected' : '' ?>>swirlLeft2</option>
												<option value="swirlRight"<?= ($theme_config['vegas-transition'] == "swirlRight") ? ' selected' : '' ?>>swirlRight</option>
												<option value="swirlRight2"<?= ($theme_config['vegas-transition'] == "swirlRight2") ? ' selected' : '' ?>>swirlRight2</option>
												<option value="burn"<?= ($theme_config['vegas-transition'] == "burn") ? ' selected' : '' ?>>burn</option>
												<option value="burn2"<?= ($theme_config['vegas-transition'] == "burn2") ? ' selected' : '' ?>>burn2</option>
												<option value="blur"<?= ($theme_config['vegas-transition'] == "blur") ? ' selected' : '' ?>>blur</option>
												<option value="blur2"<?= ($theme_config['vegas-transition'] == "blur2") ? ' selected' : '' ?>>blur2</option>
												<option value="flash"<?= ($theme_config['vegas-transition'] == "flash") ? ' selected' : '' ?>>flash</option>
												<option value="flash2"<?= ($theme_config['vegas-transition'] == "flash2") ? ' selected' : '' ?>>flash2</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<?= $this->element('form.input.upload.img', $form_input) ?>
										<small>Supprimez le logo pour afficher le nom du site à la place.</small>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_presentation">
								<div class="row">
									<div class="col-md-3">
										<h3>Bouton de gauche</h3>
										<div class="form-group">
											<label>Texte du bouton</label>
											<input class="form-control" type="text" name="presentation_leftbtn_text" value="<?= $config['presentation_leftbtn_text'] ?>" placeholder="Bouton désactivé">
										</div>
										<div class="form-group">
											<label>Lien du bouton</label>
											<input class="form-control" type="text" name="presentation_leftbtn_href" value="<?= $config['presentation_leftbtn_href'] ?>" placeholder="Vide">
										</div>
									</div>
									<div class="col-md-3">
										<h3>Bouton de droite</h3>
										<div class="form-group">
											<label>IP ou texte du bouton</label>
											<input class="form-control" type="text" name="presentation_rightbtn_text" value="<?= $config['presentation_rightbtn_text'] ?>" placeholder="Bouton désactivé">
										</div>
										<div class="form-group">
											<label>Lien du bouton</label>
											<input class="form-control" type="text" name="presentation_rightbtn_href" value="<?= $config['presentation_rightbtn_href'] ?>" placeholder="Laissez vide pour copier le texte lors du clic.">
										</div>
									</div>
									<div class="col-md-3">
										<h3>Autres</h3>
										<div class="form-group">
											<label>Slogan</label>
											<input class="form-control" type="text" name="slogan" value="<?= $config['slogan']; ?>">
										</div>
										<div class="form-group">
											<label>Texte "En savoir plus"</label>
											<input class="form-control" type="text" name="presentation_readmore" value="<?= $config['presentation_readmore'] ?>" placeholder="Texte situé en bas de la présentation">
										</div>
										<div class="form-group">
											<label>Position du texte</label>
											<select name="presentation_position" class="form-control">
												<option value="left"<?= ($theme_config['presentation_position'] == "left") ? ' selected' : '' ?>>Gauche</option>
												<option value="center"<?= ($theme_config['presentation_position'] == "center") ? ' selected' : '' ?>>Centré</option>
													<option value="right"<?= ($theme_config['presentation_position'] == "right") ? ' selected' : '' ?>>Droite</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_features1">
								<div class="row">
									<div class="col-md-9">
										<button type="button" class="btn btn-success add-feature1">Ajouter</button><br>
										<small>Utilisez des icônes <a href="http://fontawesome.io/icons/">Font Awesome</a> (fa fa-[nom]), <a href="https://icomoon.io/app/#/select">IcoMoon</a> (icon-[nom]) disponible dans les fichiers css.</small>
										<div class="row" id="features1">
											<div id="f1-copy" class="feature1 col-md-4" style="display: none">
												<h3>Fonctionnalité</h3>
												<div class="form-group">
													<label>Nom de l'icône</label>
													<input class="form-control" type="text" name="features1[%id%][icon]" value="" placeholder="fa fa-[nom] OU icon-[nom]">
												</div>
												<div class="form-group">
													<label>Titre</label>
													<input class="form-control" type="text" name="features1[%id%][title]" value="">
												</div>
												<div class="form-group">
													<label>Description</label>
													<input class="form-control" type="text" name="features1[%id%][description]" value="">
												</div>
												<button type="button" class="pull-right btn btn-danger delete-feature1" data-id="%id%">Supprimer</button>
											</div>
										<?php 
										foreach ($config['features1'] as $k => $f): if($k == "%id%") continue; ?>
											<div id="f1-<?= $k ?>" class="feature1 col-md-4">
												<h3>Fonctionnalité</h3>
												<div class="form-group">
													<label>Nom de l'icône</label>
													<input class="form-control" type="text" name="features1[<?= $k ?>][icon]" value="<?= $f->icon ?>" placeholder="fa fa-[nom] OU icon-[nom]">
												</div>
												<div class="form-group">
													<label>Titre</label>
													<input class="form-control" type="text" name="features1[<?= $k ?>][title]" value="<?= $f->title ?>">
												</div>
												<div class="form-group">
													<label>Description</label>
													<input class="form-control" type="text" name="features1[<?= $k ?>][description]" value="<?= $f->description ?>">
												</div>
												<button type="button" class="pull-right btn btn-danger delete-feature1" data-id="<?= $k ?>">Supprimer</button>
											</div>
										<?php endforeach; ?>
										</div>
										<?= $this->Html->script('jQuery-2.1.4.min.js') ?>
										<script type="text/javascript">
											$(document).on('click', '.delete-feature1', function(e){
												e.preventDefault();
												$("#f1-" + $(this).data('id')).slideUp('slow', function(){
													$(this).remove();
												});
											});

											$(".add-feature1").click(function(e){
												e.preventDefault();
												var size = $(".feature1").size() - 1
												var el = $('#f1-copy').clone();
												el.attr('id', "f1-" + size);
												el.html(el.html().replace(/%id%/g, size));
												el.appendTo("#features1");
												el.slideDown('slow');
											});
										</script>
									</div>
									<div class="col-md-3">
										<h3>Autres options</h3>
										<div class="form-group">
											<label>URL de l'image</label>
											<input class="form-control" type="text" name="features1_image" value="<?= $config['features1_image'] ?>" placeholder="Laissez vide pour désactiver">
										</div>
										<div class="form-group">
											<label>Titre de la zone</label>
											<input class="form-control" type="text" name="features1_title" value="<?= $config['features1_title'] ?>">
										</div>
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control" name="features1_description"><?= $config['features1_description'] ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_features2">
								<div class="row">
									<div class="col-md-9">
										<button type="button" class="btn btn-success add-feature2">Ajouter</button><br>
										<small>Utilisez des icônes <a href="fontawesome.io/icons/">Font Awesome</a> (fa fa-[nom]), <a href="https://icomoon.io/app/#/select">IcoMoon</a> (icon-[nom]) disponible dans les fichiers css.</small>
										<div class="row" id="features2">
											<div id="f2-copy" class="feature2 col-md-4" style="display: none">
												<h3>Fonctionnalité</h3>
												<div class="form-group">
													<label>Nom de l'icône</label>
													<input class="form-control" type="text" name="features2[%id%][icon]" value="" placeholder="fa fa-[nom] OU icon-[nom]">
												</div>
												<div class="form-group">
													<label>Titre</label>
													<input class="form-control" type="text" name="features2[%id%][title]" value="">
												</div>
												<div class="form-group">
													<label>Description</label>
													<input class="form-control" type="text" name="features2[%id%][description]" value="">
												</div>
												<button type="button" class="pull-right btn btn-danger delete-feature2" data-id="%id%">Supprimer</button>
											</div>
										<?php 
										foreach ($config['features2'] as $k => $f): if($k == "%id%") continue; ?>
											<div id="f2-<?= $k ?>" class="feature2 col-md-4">
												<h3>Fonctionnalité</h3>
												<div class="form-group">
													<label>Nom de l'icône</label>
													<input class="form-control" type="text" name="features2[<?= $k ?>][icon]" value="<?= $f->icon ?>" placeholder="fa fa-[nom] OU icon-[nom]">
												</div>
												<div class="form-group">
													<label>Titre</label>
													<input class="form-control" type="text" name="features2[<?= $k ?>][title]" value="<?= $f->title ?>">
												</div>
												<div class="form-group">
													<label>Description</label>
													<input class="form-control" type="text" name="features2[<?= $k ?>][description]" value="<?= $f->description ?>">
												</div>
												<button type="button" class="pull-right btn btn-danger delete-feature2" data-id="<?= $k ?>">Supprimer</button>
											</div>
										<?php endforeach; ?>
										</div>
										<script type="text/javascript">
											$(document).on('click', '.delete-feature2', function(e){
												e.preventDefault();
												$("#f2-" + $(this).data('id')).slideUp('slow', function(){
													$(this).remove();
												});
											});

											$(".add-feature2").click(function(e){
												e.preventDefault();
												var size = $(".feature2").size() - 1
												var el = $('#f2-copy').clone();
												el.attr('id', "f2-" + size);
												el.html(el.html().replace(/%id%/g, size));
												el.appendTo("#features2");
												el.slideDown('slow');
											});
										</script>
									</div>
									<div class="col-md-3">
										<h3>Autres options</h3>
										<div class="form-group">
											<label>URL de l'image</label>
											<input class="form-control" type="text" name="features2_image" value="<?= $config['features2_image'] ?>" placeholder="Laissez vide pour désactiver">
										</div>
										<div class="form-group">
											<label>Titre de la zone</label>
											<input class="form-control" type="text" name="features2_title" value="<?= $config['features2_title'] ?>">
										</div>
										<div class="form-group">
											<label>Texte du bouton</label>
											<input class="form-control" type="text" name="features2_btntext" value="<?= $config['features2_btntext']; ?>">
										</div>
										<div class="form-group">
											<label>Lien du bouton</label>
											<input class="form-control" type="text" name="features2_btnhref" value="<?= $config['features2_btnhref']; ?>">
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab_footer">
								<div class="row">
								<?= $this->Html->script('admin/tinymce/tinymce.min.js'); ?>
									<div class="col-md-6">
										<h4>Zone 1</h4>
										<script type="text/javascript">
											tinymce.init({
													selector: "#footer_1",
													height : 100,
													width : '100%',
													language : 'fr_FR',
													plugins: "textcolor code image link",
													toolbar: "fontselect bold italic link image forecolor alignleft aligncenter alignright alignjustify bullist numlist code"
											 });
											</script>
											<textarea class="form-control" id="footer_1" name="footer_1" cols="30" rows="10"><?= $config['footer_1']; ?></textarea>
									</div>
									<div class="col-md-6">
										<h4>Zone 2</h4>
										<script type="text/javascript">
											tinymce.init({
													selector: "#footer_2",
													height : 100,
													width : '100%',
													language : 'fr_FR',
													plugins: "textcolor code image link",
													toolbar: "fontselect bold italic link image forecolor alignleft aligncenter alignright alignjustify bullist numlist code"
											 });
											</script>
											<textarea class="form-control" id="footer_2" name="footer_2" cols="30" rows="10"><?= $config['footer_2']; ?></textarea>
									</div>
									<div class="col-md-6">
										<h4>Zone 3</h4>
										<script type="text/javascript">
											tinymce.init({
													selector: "#footer_3",
													height : 100,
													width : '100%',
													language : 'fr_FR',
													plugins: "textcolor code image link",
													toolbar: "fontselect bold italic link image forecolor alignleft aligncenter alignright alignjustify bullist numlist code"
											 });
											</script>
											<textarea class="form-control" id="footer_3" name="footer_3" cols="30" rows="10"><?= $config['footer_3']; ?></textarea>
									</div>
									<div class="col-md-6">
										<h4>Zone Copyright</h4>
										<script type="text/javascript">
											tinymce.init({
													selector: "#footer_copyright",
													height : 100,
													width : '100%',
													language : 'fr_FR',
													plugins: "textcolor code image link",
													toolbar: "fontselect bold italic link image forecolor alignleft aligncenter alignright alignjustify bullist numlist code"
											 });
										</script>
										<textarea class="form-control" id="footer_copyright" name="footer_copyright" cols="30" rows="10"><?= $config['footer_copyright']; ?></textarea>
									</div>
								</div>
							</div>
						</div>
						<input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
				</div>
    	</div>
		</form>
  </div>
	<div class="row">
		<div class="col-md-4">
			<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Changelog</h3>
          <div class="box-tools pull-right">
            <span class="label label-primary">
							<?php foreach ($Theme->getThemesInstalled() as $theme): ?>
								<?php if ($theme->name == "Guide"): ?>
									<?php $version = $theme->version; ?>
									<?= $theme->version; ?>
								<?php break; endif; ?>
							<?php endforeach; ?>
						</span>
          </div>
        </div>
        <div class="box-body">
          <?= file_get_contents("../View/Themed/Guide/Config/changelog.html"); ?>
        </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Une question ?</h3>
        </div>
        <div class="box-body">
					Signalez tout problème avec le thème avec le bouton "Signaler un bug". Si vous souhaitez me contacter, mentionnez moi sur le Discord de Mineweb ou par message privé.
        </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Bugs connus</h3>
					<div class="box-tools pull-right">
            <a href="https://gitlab.com/mrsheepsheep/mw-guide/issues" class="label label-danger">
							Signaler un bug
						</a>
					</div>
        </div>
        <div class="box-body" id="issues">
          <?= json_decode(file_get_contents('https://gitlab.com/mrsheepsheep/mw-guide/issues.json'), true)['html']; ?>
					<small>Les nouveaux bugs non résolus apparaîtront ici.</small>
        </div>
			</div>
		</div>
	</div>
</section>
<style type="text/css" scoped>
	.content-list {
		list-style: none;
		padding: 0;
		margin: 0;
	}	
	.issuable-meta, .issuable-info { display: none; }
	[data-labels="[2614638]"], [data-labels="[2741259]"] { display: none; }
</style>
<script>
	$(".issue-title-text a").each(function(){
		this.href = "https://gitlab.com" + $(this).attr('href');
	})
</script>
