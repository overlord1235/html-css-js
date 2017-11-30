
<?php 
require_once __DIR__ . '/../header.php';
?>

<div class="flex-grid demo-grid ">
	<div class="row flex-just-center margin40 ">

		<div class="cell colspan6 ">
			 <form method="POST" action="/vox/nba/admin/team/edit" enctype="multipart/form-data">
			 	<input type="hidden" value="<?= $team[0]->id_team; ?>" name='id'>
        <div class="cell">
            <label>Team name</label>
            <div class="input-control text full-size">
                <input type="text" name='name' value="<?= $team[0]->team_name;?>">
            </div>
        </div>
        <div class="cell">
            <label>Name Shortcut</label>
            <div class="input-control text full-size">
                <input type="text" name='shortcut' maxlength="3" value="<?= $team[0]->team_cut;?>">
            </div>
        </div>
        <div class="cell">
            <label>Team Website</label>
            <div class="input-control text full-size">
                <input type="text" name='website' value="<?= $team[0]->team_website;?>">
            </div>
        </div>
        <div class="cell">
        	
            <label>Logo</label>
            <div class="input-control file" data-role="input">
                <input type="file" name='logo' >
                <button class="button"><span class="mif-folder"></span></button>
            </div>
            <img src="/vox/nba/public/images/teams/<?= $team[0]->team_logo; ?>">
        </div>

        <div class="cell">
            <button class="button primary">Edit</button>
        </div>

    </form>
		</div>

	</div>


</div>
<?php require_once __DIR__ . '/../footer.php'; ?>