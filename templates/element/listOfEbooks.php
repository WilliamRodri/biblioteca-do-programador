<div class="row">
	<?php
		use App\Utility\Functionalities;

		foreach($contents as $content):
			$fixedString = Functionalities::DivideTitleEbookTransformArray($content['name']);
	?>
	<div class="col-md-4 mb-4">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"><?= $fixedString['ebookName']; ?></h5>
				<p class="card-text">Categoria: <?= $fixedString['ebookCategory']; ?></p> 
				<p class="card-text">Criador: <?= $fixedString['ebookCreator']; ?></p>
				<div class="btn-group">
					<a class="btn btn-outline-secondary" href="/view-ebook/<?= $content['name'] ?>">
						Visualizar
					</a>
					<hr>
					<a class="btn btn-outline-secondary" href="<?= $content['download_url'] ?>">Baixar</a>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>