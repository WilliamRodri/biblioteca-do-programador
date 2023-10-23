<?php $this->layout = 'default'; ?>
<?php $this->assign('Testes', 'Biblioteca');  ?>

<?= $this->element('betaVersionWarning'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php $this->start('script'); ?>
	<script type="text/javascript" src="js/betaVersionWarning.js"></script>
<?php $this->end(); ?>