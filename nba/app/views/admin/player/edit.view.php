
<?php 
require_once __DIR__ . '/../header.php';
?>

<div class="flex-grid demo-grid ">
	<div class="row flex-just-center margin40 ">
		<div class="cell colspan6 ">
        <div class='cell'> <img src="/public/images/players/<?= $player[0]->picture ?>"> </div>
			 <form method="POST" action="/admin/player/edit" enctype="multipart/form-data">
			 	<input type="hidden" value="<?= $player[0]->id_player; ?>" name='id'>
        <div class="cell">
            <label>Player Firstname</label>
            <div class="input-control text full-size">
                <input type="text" name='firstname' value="<?= $player[0]->firstname; ?>">
            </div>
        </div>
        <div class="cell">
            <label>Player Lastname</label>
            <div class="input-control text full-size">
                <input type="text" name='lastname' value="<?= $player[0]->lastname; ?>">
            </div>
        </div>
        <div class="cell">
        <label>Team</label>
        <div class="input-control select">
            <select name='id_team'>
               <?php foreach ($teams as $team) : ?>
                <option value="<?= $team->id_team ?>" <?php if ($player[0]->id_team==$team->id_team) echo "selected" ?>> <?= $team->team_name ?> </option>

               <?php endforeach; ?>
            </select>
        </div>
        </div>
        
        <div class="cell">
            <label>Picture</label>
            <div class="input-control file" data-role="input">
                <input type="file" name='picture'>
                <button class="button"><span class="mif-folder"></span></button>
            </div>

        </div>
         <div class="cell">
            <label>Player Position</label>
      <div class="input-control select">
    <select name='position'>
        <option></option>
        <option value='Point guard' <?php if($player[0]->position=="Point guard") echo "selected"; ?> >Point guard</option>
        <option value='Shooting guard' <?php if($player[0]->position=="Shooting guard") echo "selected"; ?>>Shooting guard</option>
        <option value='Small forward' <?php if($player[0]->position=="Small forward") echo "selected"; ?>>Small forward</option>
        <option value='Power forward' <?php if($player[0]->position=="Power forward") echo "selected"; ?>>Power forward</option>
        <option value='Center' <?php if($player[0]->position=="Center") echo "selected"; ?>>Center</option>
    </select>
</div>
    <div class="cell">
            <label>Height</label>
            <div class="input-control text full-size">
                <input type="number" name='height' value="<?= $player[0]->height ?>">
            </div>
        </div>
        <div class="cell">
            <label>Weight</label>
            <div class="input-control text full-size">
                <input type="number" name='weight' value="<?= $player[0]->weight ?>">
            </div>
        </div>
         <div class="cell"><label>Birthday</label>
                    <div  class="input-control text" data-role="datepicker" data-format='yyyy-mm-dd'>
                <input  type="text" name='birthday' value="<?= $player[0]->birthday ?>">
                <button class="button"><span class="mif-calendar"></span></button>
            </div>
            </div>
        <div class="cell">
            <label>Player Number</label>
            <div class="input-control text full-size">
                <input type="number" name='number' value="<?= $player[0]->number ?>">
            </div>
        </div>
        <div class="cell">
            <label>Description</label>
            <div class="input-control textarea"
            data-role="input" data-text-auto-resize="true" data-text-max-height="200" style="width: 100%; height: 20%">
            <textarea name='description' ><?= $player[0]->description ?></textarea>
            </div>
        </div>
        <div class="cell">
            <button class="button primary">Edit</button>
        </div>

    </form>
		</div>

	</div>


</div>
<?php require_once __DIR__ . '/../footer.php'; ?>