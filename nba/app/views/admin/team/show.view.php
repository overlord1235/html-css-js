<?php 
require_once __DIR__ . '/../header.php';
?>
<script src="/public/js/metro-scroll.js"></script>

<div class="grid demo-grid  " style="margin-top: 100px;">
    <div class="row cells12">
    <div class="cell "></div>
            <div class="cell  colspan10 bg-white">
                <div class="row cells12">
            		<div class="cell colspan3" >
            			<!-- teams -->
            			<div data-role="scrollbox" data-scroll="vertical" id="scrollbox1"> 
            			<?php foreach ($teams as $t): ?>
            					<div class="cell"> <img src="/public/images/teams/<?= $t->team_logo; ?>" style="height: 8%">
            						<a href='/admin/team/<?= $t->team_cut; ?>'><?=  $t->team_name;  ?></a> </div>
            			<?php endforeach ?>
            			</div>
            		</div>

            		<div class="cell  colspan9" style=''>
            			 <div id='cover' class="row cells12 <?=$team[0]->cover;?>" >

            			 	<div class="cell colspan3 "  >
            			 		
            			 		<img src="/public/images/teams/<?= $team[0]->team_logo; ?>" style="height: 25%">
            			 	</div>
            			 	<div class="cell colspan9 fg-white "  >
            			 		<h1  style="margin-top: 10%;"><b><?= $team[0]->team_name; ?> </b></h1>
            			 	</div>
            			 	<div class ='row'>
            			 	<div class="cell  ">

            			 		<a href='<?= $team[0]->team_website; ?>' class="fg-white"> <span class="mif-enter"></span> TEAM WEBSITE </a>
            			 		<!-- edit team -->
            			 		<a href="/admin/team/edit/<?= $team[0]->team_cut;?>" class="place-right fg-white"><span class="mif-pencil"></span> EDIT </a>
                               
            			 	</div>
                            <div class="cell" >
                                 <form action="/admin/team/delete" method="POST">
                                    <input type="hidden" name="id_team" value="<?= $team[0]->id_team; ?>">
                                    <button type="submit" class="place-right" style="margin-right: 2%;"> <span class="mif-bin prepend-icon"></span> Delete </button>
                                 </form>
                            </div>  
            			 </div>
            			 </div>
            			 <div class="row cells12 " >
            			 	<?php $k=0; ?>
            			 	<?php foreach ($players as $player): ?>
            			 		<?php
            			 		if ($k%4==0 ){
            			 		 	echo "<div class='row cells12'>";
            			 		 }
            			 		 $k++; 
            			 		 
            			 		?>
            			 	<div class="cell colspan3 "  >
            			 		<div class="cell bg-grayLighter" >
            			 			<?= $player->number;?>
            			 		<img src="/public/images/players/<?= $player->picture;?>" >
       							</div>
       							<div class="cell align-center" >
       								<a href="/admin/player/<?= $player->firstname;?>/<?= $player->id_player;?>">
       									<?= $player->firstname;?> <?= $player->lastname;?></a>
       							</div>
       							<div class="cell align-center margin10" >
       								<?= $player->position;?>
       							</div>
       							<div class="cell align-center" >
       								<?= $player->height;?> cm | <?= $player->weight;?> kg
       							</div>

            			 	</div>
            			 	<?php if ($k%4==0 ){
            			 		 	echo "</div>";
            			 		 } ?>
            			 	<?php endforeach ?>

            			 		


            			 </div>
          
            		</div>

            	</div>





            </div>
    <div class="cell"></div>
    </div>
                
 </div>


<script type="text/javascript">
	$(function(){
                        $("#scrollbox1").scrollbar({
                            height: 1000,
                            axis: 'y'
                        });
                       

                    });
	

	
</script>

<?php require_once __DIR__ . '/../footer.php'; ?>