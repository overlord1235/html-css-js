 
 <form method="POST" action="/vox/nba/admin/player" enctype="multipart/form-data" >
    <div class='grid'>
    <div class='row cells2'> 
        <div class="cell">
            <label>Player Firstname</label>
            <div class="input-control text full-size">
                <input type="text" name='firstname'>
            </div>
        </div>
        <div class="cell">
            <label>Player Lastname</label>
            <div class="input-control text full-size">
                <input type="text" name='lastname'>
            </div>
        </div>
    </div>
    <div class='row cells3'> 
        <div class="cell">
        <label>Team</label>
        <div class="input-control select">
            <select name='id_team'>
               <?php foreach ($teams as $team) : ?>
                <option value="<?= $team->id_team ?>"> <?= $team->team_name ?> </option>

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
        <option value='Point guard'>Point guard</option>
        <option value='Shooting guard'>Shooting guard</option>
        <option value='Small forward'>Small forward</option>
        <option value='Power forward'>Power forward</option>
        <option value='Center'>Center</option>
    </select>
</div>
</div>
</div>
   
         <div class='row cells4'> 
        <div class="cell">
            <label>Height</label>
            <div class="input-control text full-size">
                <input type="number" name='height'>
            </div>
        </div>
        <div class="cell">
            <label>Weight</label>
            <div class="input-control text full-size">
                <input type="number" name='weight'>
            </div>
        </div>
         <div class="cell"><label>Birthday</label>
                    <div  class="input-control text" data-role="datepicker" data-format='yyyy-mm-dd'>
                <input  type="text" name='birthday' >
                <button class="button"><span class="mif-calendar"></span></button>
            </div>
            </div>
        <div class="cell">
            <label>Player Number</label>
            <div class="input-control text full-size">
                <input type="number" name='number'>
            </div>
        </div>
    </div>
     <div class="cell">
            <label>Description</label>
            <div class="input-control textarea"
            data-role="input" data-text-auto-resize="true" data-text-max-height="200" style="width: 100%;">
            <textarea name='description'></textarea>
            </div>
        </div>

        <div class="cell">
            <button class="button success">Insert</button>
        </div>
    </div>
    </form>
<script>
   
</script>