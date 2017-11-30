<?php require('partials/head.php') ?>
<h1>Homepage </h1>
<form method='POST' action="/vox/nba/users"> 

	<input type="text" name="name">
	<button type='submit'>prati</button>
</form>
	<?php foreach ($users as $user) : ?>
		<li>
			<?= $user->name; ?> <?= $user->prezime; ?>
			<form method='POST' action="/vox/nba/users/delete"> 
				<input type='hidden' value="<?= $user->id; ?>"; name='deleteid' >
				<a href='/vox/nba/users/<?= $user->id; ?>' > show</a>
				<a href='/vox/nba/users/edit/<?= $user->id; ?>' > edit</a>
				<input type="submit" value='delete'>
			</form>

		 </li>
		
	<?php endforeach ?>
<?php require('partials/footer.php') ?>