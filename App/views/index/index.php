	<h1>Artigos</h1>

	<ul>

		<?php foreach($this->view->artigos as $artigo): ?>
			<li><?php echo $artigo['titulo']; ?></li>
		<?php endforeach;?>

	</ul>
