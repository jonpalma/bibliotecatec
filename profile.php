<?php $loggedin = true ?>
<?php include('header.php') ?>
<!-- BEGIN PARALLAX -->
<div class="parallax-container">
	<div class="parallax"><img src="img/parallax/1.jpg"></div>
	<div class="container">
		<div class="profile-parallax-wrap">
			<img src="img/content/profile-picture.png" alt="Imagen de perfil" class="profile-picture">
			<div class="relative">
				<h1 class="profile-name">
					Claudia R.
				</h1>
			</div>
		</div>
	</div>
</div>
<!-- END PARALLAX -->

<!-- BEGIN PROFILE INFO -->
<div id="profile-info">
	<div class="container content-wrapper padding">
		<h1 class="aqua-green center-text">Perfil</h1>
		<br class="vertmargin-small">
		<h2>Información General</h2>
		<div class="row">
			<div class="col-sm-2">
				<label for="name">Nombre</label>
			</div>
			<div class="col-sm-9">
				<input type="text" id="name">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label for="lastname">Apellido</label>
			</div>
			<div class="col-sm-9">
				<input type="text" id="lastname">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label for="age">Edad</label>
			</div>
			<div class="col-sm-9">
				<input type="text" id="age">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label for="gender" style="margin-top: 45px;">Género</label>
			</div>
			<div class="col-sm-9">
				<input type="radio" name="gender" value="male" id="male"><label for="male"><span><span></span></span>Hombre</label> <input type="radio" name="gender" value="female" id="female"><label for="female"><span><span></span></span>Mujer</label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label for="major">Carrera</label>
			</div>
			<div class="col-sm-9">
				<input type="text" id="major">
			</div>
		</div>
		<br class="vertmargin-tiny">
		<h2>Constraseña</h2>
		<div class="row">
			<div class="col-sm-2">
				<label for="password">Constraseña</label>
			</div>
			<div class="col-sm-9">
				<input type="password" id="password">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label for="passwordconfirm">Repetir constraseña</label>
			</div>
			<div class="col-sm-9">
				<input type="password" id="passwordconfirm">
			</div>
		</div>
		<br class="vertmargin-tiny">
		<h2>Imagen de Perfil</h2>
		<br class="vertmargin-tiny">
		<div class="inline-block">
			<img src="img/content/profile-picture.png" alt="Imagen de perfil" class="profile-picture">
			<button class="btn btn-submit ">Cambiar Imagen</button>
		</div>
		<br class="vertmargin-tiny">
		<h2></h2>
		<br class="vertmargin-tiny">
		<button class="btn btn-save">Guardar</button>
	</div>
</div>
<!-- END PROFILE INFO -->

<?php include('footer.php') ?>