<?php $loggedin = false ?>
<?php include('header.php') ?>

<!-- BEGIN LOGIN -->
<div id="login" class="login-bg">
	<div class="login-panel">
		<h1 class="aqua-green center-text">Login</h1>
		<form action="search.php">
			<label for="matricula">Matrícula</label>
			<input type="text" id="matricula">
			<label for="password">Constraseña</label>
			<input type="password" id="password">
				<button class="btn btn-submit">Entrar</button>
		</form>
	</div>
</div>
<!-- END LOGIN -->
<?php include('footer.php') ?>