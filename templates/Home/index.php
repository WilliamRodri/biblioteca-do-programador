<?php $this->layout = 'default'; ?>

<?php $this->start('css'); ?>
	<link rel="stylesheet" type="text/css" href="css/homeIndex.css">
	<link rel="stylesheet" type="text/css" href="css/sidebarFilter.css">
	<link rel="stylesheet" type="text/css" href="css/sectionSearch.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
<?php $this->end(); ?>

<?php $this->start('script'); ?>
	<script type="text/javascript" src="js/sidebarFilter.js" />
<?php $this->end(); ?>

<?php $this->start('header'); ?>
	<?= $this->element('header'); ?>
<?php $this->end(); ?>

<?php
	/*
	if(!$cookie->getValue('displayModal')){
		$cookie->withValue('displayModal', true);
		echo $this->element('betaVersionWarning');
		debug($cookie->getName('displayModal'));
		debug($cookie->getValue('displayModal'));
	}
	*/
?>

<div class="content">

	<?= $this->element('sectionSearch'); ?>

	<?= $this->element('sidebarFilter'); ?>
	
	<?= $this->element('listOfEbooks'); ?>
</div>

<?php $this->start('footer'); ?>
	<?= $this->element('footer'); ?>
<?php $this->end(); ?>

