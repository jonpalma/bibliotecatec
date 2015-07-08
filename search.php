<?php $loggedin = true ?>
<?php include('header.php') ?>

<!-- BEGIN LOGIN -->
<div id="login" class="login-bg">
	<div class="search-panel">
		<h1 class="aqua center-text">Buscar por</h1>
		<form action="library.php#library">
			<label for="title">Título del libro</label>
			<input type="text" id="title">
			<label for="autor">Autor</label>
			<input type="text" id="autor">
			<label for="folio">Folio</label>
			<input type="text" id="folio">
			<button class="btn btn-action">Buscar</button>
		</form>
	</div>
</div>
<!-- END LOGIN -->
<?php include('footer.php') ?>