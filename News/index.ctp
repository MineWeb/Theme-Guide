<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <p class="lead">
                <?= $Lang->get('GLOBAL__BY') ?> <a href="#"><?= $news['News']['author'] ?></a>
            </p><button id="<?= $news['News']['id'] ?>" type="button" class="btn btn-primary pull-right like<?= ($news['News']['liked']) ? ' active' : '' ?>"<?= (!$Permissions->can('LIKE_NEWS')) ? ' disabled' : '' ?>><?= $news['News']['count_likes'] ?> <i class="fa fa-thumbs-up"></i></button>
            <p><span class="glyphicon glyphicon-time"></span> <?= $Lang->get('NEWS__POSTED_ON') . ' ' . $Lang->date($news['News']['created']); ?></p>
            <hr>
            <div id="news"><?= $news['News']['content'] ?></div>
            <?php if($Permissions->can('COMMENT_NEWS')) { ?>
                <div id="form-comment-fade-out">
                    <hr>
                        <h4><?= $Lang->get('NEWS__COMMENT_TITLE') ?> :</h4>
                        <form method="POST" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'news', 'action' => 'add_comment')) ?>" data-callback-function="addcomment" data-success-msg="false">
                            <input name="news_id" value="<?= $news['News']['id'] ?>" type="hidden">
                            <div class="form-group">
                                <textarea name="content" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                        </form>
                </div>
            <?php } ?>
            <hr>
            <div class="add-comment"></div>
            <?php foreach ($news['Comment'] as $k => $v) { ?>
                <div class="media comment" id="comment-<?= $v['id'] ?>">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin/')) ?>/<?= $v['author'] ?>/64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?= $v['author'] ?>
                            <small><?= $Lang->date($v['created']); ?></small>
                        </h4>
                        <?= before_display($v['content']) ?>
                    </div>
                    <div class="pull-right">
                        <?php if($Permissions->can('DELETE_COMMENT') OR $Permissions->can('DELETE_HIS_COMMENT') AND $user['pseudo'] == $v['author']) { ?>
                            <p><a id="<?= $v['id'] ?>" title="<?= $Lang->get('GLOBAL__DELETE') ?>" class="comment-delete btn btn-danger btn-sm"><icon class="fa fa-times"></icon></a></p>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-4">
					<h3>Dernières actualités</h3>
					<ul class="list-unstyled">
							<?php foreach ($search_news as $k => $v) { ?>
									<li><a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>"><?= $v['News']['title'] ?></a></li>
							<?php } ?>
					</ul>
					<hr>
					<h4><?= $Lang->get('GLOBAL__INFORMATIONS') ?></h4>
					<p><?= $Lang->get('GLOBAL__UPDATED') ?>: <?= $Lang->date($news['News']['updated']) ?></p>
					<p><?= $Lang->get('NEWS__COMMENTS_NBR') ?>: <?= $news['News']['count_comments'] ?></p>
					<p><?= $Lang->get('NEWS__LIKES_NBR') ?> : <?= $news['News']['count_likes'] ?></p>
        </div>
    </div>
</div>
<?= $Module->loadModules('news') ?>
<script>
    function addcomment(data) {
        var d = new Date();
        var comment = '<div class="media"><a class="pull-left" href="#"><img class="media-object" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin/')) ?>/<?= $user['pseudo'] ?>/64" alt=""></a><div class="media-body"><h4 class="media-heading"><?= $user['pseudo'] ?> <small>'+d.getHours()+'h'+d.getMinutes()+'</small></h4>'+data['content']+'</div></div>';
        $('.add-comment').hide().html(comment).fadeIn(1500);
        $('#form-comment-fade-out').slideUp(1500);
    }
     $(".comment-delete").click(function() {
        comment_delete(this);
    });

    function comment_delete(e) {
        var inputs = {};
        var id = $(e).attr("id");
        inputs["id"] = id;
        inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
        $.post("<?= $this->Html->url(array('controller' => 'news', 'action' => 'ajax_comment_delete')) ?>", inputs, function(data) {
          if(data == 'true') {
            $('#comment-'+id).slideUp(500);
          } else {
            console.log(data);
          }
        });
    }
	
		$(function(){
			$("#news img").each(function(){
				$(this).addClass("img-responsive");
			});
		});
</script>
