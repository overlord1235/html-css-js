<?php require('header.php') ?>


<div class="flex-grid demo-grid ">

	<div class="row flex-just-center margin40 ">
		

		<div class="cell colspan6 bg-white">
			

			<?php $k=0; ?>
			
			<?php foreach ($teams as $team) : ?>
				<?php $k++;
				if ($k%2!=0) :
				?>
				<div class="row flex-just-center ">
				<?php endif; ?>

			<div class="cell colspan6">

				<div class="row cells2 padding5" >
                    <div class="cell colspan2">
                    	<img src="/vox/nba/public/images/teams/<?= $team->team_logo; ?>">
                    </div>

                    <div class="cell border colspan10">
                    	<p class='v-align-middle'>
                    		<a href="/vox/nba/admin/team/<?= $team->team_cut; ?>"> <?= $team->team_name ?></a>
                    	</p>
                    </div>
                </div>
			</div>
				 <?php if ($k%2==0) :?>
						</div>
				 <?php endif; ?>
					<?php endforeach ?>
			 	<div class="cell colspan6">
			 	</div>
				 
			

	</div>

</div>

</div>


<?php require('footer.php') ?>