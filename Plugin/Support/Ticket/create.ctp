<?= $this->Html->css('Support.jquery.cleditor.css'); ?>
<div class="container">
    <div class="row">
        <h1 style="display: inline-block; color:white;" class="white"><?= $Lang->get('SUPPORT__CREATE') ?> - <?= $Lang->get('SUPPORT__SUPPORT') ?></h1>
        <hr>
        <form method="post" class="form-horizontal" data-ajax="true" class="white" data-redirect-url="./" action="<?= $this->Html->url(array('controller' => 'Ticket', 'action' => 'ajax_create')) ?>">
            <label><?= $Lang->get('SUPPORT__SUBJECT') ?></label>
            <input type="text" name="subject" class="form-control">
            <label class="white"><?= $Lang->get('SUPPORT__YOURPROBLEM') ?></label>
            <textarea id="input" name="reponse_text"></textarea>
            <hr>
            <button class="btn btn-primary" type="submit"><?= $Lang->get('SUPPORT__CREATETICKET') ?></button>
        </form>
    </div>
</div>
<?= $this->Html->script('Support.jquery.cleditor.min.js'); ?>
<script>$(document).ready(function() {  $("#input").cleditor();  });  </script>
