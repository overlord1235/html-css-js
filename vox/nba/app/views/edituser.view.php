<?php require('partials/head.php') ?>
	<form method="POST" action="/vox/nba/users/edit">
		<input type="hidden" value="<?= $user[0]->id ?>" name='id'>
		<input type="text" value="<?= $user[0]->name ?>" name='name'>
		<input type="text" value="<?= $user[0]->prezime ?>" name='prezime'>
		<input type="submit" value='change'>
	</form>

	
	

	<a href="/vox/nba/users"> back </a>
<?php require('partials/footer.php') ?>