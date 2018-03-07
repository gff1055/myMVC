	<h1>Artigos</h1>

	<?php
		print_r($this->view->artigos);
	?>

	<ul>

		<?php foreach($this->view->artigos as $artigo): ?>
			<li><?php echo $artigo['id']; ?></li>
		<?php endforeach;?>

	</ul>
