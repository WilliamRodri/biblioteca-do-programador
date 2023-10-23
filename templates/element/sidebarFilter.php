<div class="sidebar-overlay"></div>
<div>
    <div id="sidebar">
		<div class="header-sidebar">
			<button id="close-button">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
					<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
				</svg>
			</button>
			<button id="saveCategory-button" class="btn btn-primary">Salvar</button>
		</div>

    	<h2 class="titulo-sidebar-category">Filtre por Categoria</h2>

    	<div class="box-category">
    		<?php
    			use App\Utility\Functionalities;
    			foreach(array_keys($categories) as $index){
    				echo Functionalities::ArrangeCategoryColumns($categories, $index);
    			}
    		?>
    	</div>
	</div>
</div>