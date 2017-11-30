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
	 		 			<div data-role="scrollbox" data-scroll="vertical" id="scrollbox1"> 
	 		 				<div class="input-control text" data-role="input">
							    <input type="text" id="search">
							    <button class="button"><span class="mif-search"></span></button>
							</div>
							<div  id="searchlist">
            			<?php foreach ($players as $p): ?>
            					<div class="cell" style="margin-left:2%">
            					  <a href='/admin/player/<?= $p->firstname; ?>/<?= $p->id_player; ?>'>
            					  	<h5><?=  $p->firstname;  ?>,
            					  		<?= $p->lastname; ?>
            					  	</h5>
            					  </a>
            					</div>
            					
            			<?php endforeach ?>
            				</div>
            			</div>
	 		 		</div>
	 		 			<div class="cell  colspan9 " style=''>
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
	 		  
	 	<div class="cell "></div>
	 </div>
</div>
<script> 
 var string='/admin/players/all';
    $( "#searchlist" ).load( string );

	$("#search").keyup(function(){
		var bla =$(this).val();
        if (!bla){
            var string='/admin/players/all';
        }
        else
            var string='/admin/players/search/'+bla;
         $( "#searchlist" ).load( string );
	});
</script>

<?php require_once __DIR__ . '/../footer.php'; ?>