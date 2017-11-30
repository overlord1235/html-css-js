<?php require_once __DIR__ . '/../header.php'; ?>

<script src="/vox/nba/public/js/metro-scroll.js"></script>
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
            
            				</div>
            			</div>
	 		 		</div>

	 		 		<div class="cell  colspan9 " style=''>
	 		 			 <div id='cover' class="row cells12" >

            			 	<div class="cell colspan3 "  >
            			 		
            			 		<img src="/vox/nba/public/images/players/<?= $player[0]->picture; ?>" style="height: 20%">
            			 	</div>
            			 	<div class="cell colspan9 fg-white "  >
            			 		<img src="/vox/nba/public/images/teams/<?= $team[0]->team_logo; ?>" style="height: 5%;">
            			 		<?= $player[0]->number; ?> | <?= $player[0]->position; ?>
            			 		<h3  ><?= $player[0]->firstname; ?> </h3>
            			 		<h3  ><b><?= $player[0]->lastname; ?> </b></h3>
                                
            			 		
            			 	</div>        			 	
    
            			 </div>
            			 <div class="row cells12 " >
            			 	<div class="cell colspan6  "  >
            			 		<div class="row cells12" >
            			 			<div class="cell colspan6  "  >
            			 				<div > Height </div>
            			 				<div ><b> <?= $player[0]->height; ?> cm </b> </div>
            			 			</div>
            			 			<div class="cell colspan6  "  >
            			 				<div> Weight </div>
            			 				<div><b> <?= $player[0]->weight; ?> kg </b></div>
            			 			</div>
            			 		</div>
            			 		<div class="row cells12" >
            			 			<div class="cell colspan6  "  >
            			 				<div > Birthday </div>
            			 			</div>
            			 			<div class="cell colspan6  "  >
            			 				<div> <?= $player[0]->birthday; ?> </div>
            			 				
            			 			</div>
            			 		</div>
            			 		<div class="row cells12" >
            			 			<div class="cell colspan6  "  >
            			 				<div > AGE </div>
            			 			</div>
            			 			<div class="cell colspan6  "  >
            			 				<div> <?php
            			 					$today = new DateTime();
            			 					$diff = $today->diff(new DateTime($player[0]->birthday));
            			 					echo $diff->y;
            			 				 ?>  </div>
            			 				
            			 			</div>
            			 		</div>
            			 	</div>
            			 	<div class="cell colspan6 "  >

            			 		
            			 		<?php $k=0;?>
            			 		<?php foreach ($videos as $video): ?>
            			 			<?php 
            			 			
            			 			if ($k%2==0 || $k==0){
            			 		 		echo "<div class='row cells12'>";
            			 		 	} 
            			 		 	$k++;
            			 		 	?>
            			 		 	<div class="cell colspan6"  >
            			 				<div > 
            			 						<div class="video-container">
            			 							<?php $video->link;
            			 							$link = str_replace(".com/watch?v=",".com/embed/",$video->link);
            			 							 ?>
                           							 <iframe src="<?= $link; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                        						</div> 
                    						</div>
            			 			</div>
            			 			<?php 
            			 			if ($k%2==0 ){
            			 		 		echo "</div>";
            			 		 	} 
            			 			?>
            			 		<?php endforeach ?>
            			 			

            			 		

            			 	</div>
            			 </div>
            			<div  class="row cells12" >
	 		  			<h2>Player Description </h2>
			 		  		<div class="cell colspan11" > 
			 		  			<?= $player[0]->description; ?>
			 		  		 </div>
		             		</div>
			 		 		</div>

	 		 	</div>

	 		 </div>
	 		  
	 	<div class="cell "></div>
	 </div>
</div>
<script type="text/javascript">
    var string='/vox/nba/players/all';
    $( "#searchlist" ).load( string );

	$("#search").keyup(function(){
		var bla =$(this).val();
        if (!bla){
            var string='/vox/nba/players/all';
        }
        else
            var string='/vox/nba/players/search/'+bla;
         $( "#searchlist" ).load( string );
	});

    
	$(function(){
                        $("#scrollbox1").scrollbar({
                            height: 1000,
                            axis: 'y'
                        });
                    });
	var cut = "<?= $team[0]->team_cut ?>";
	switch (cut){
		case "ATL":$( "#cover" ).addClass( "ribbed-red" );break;
		case "BOS":$( "#cover" ).addClass( "ribbed-emerald" );break;
		case "BKN":$( "#cover" ).addClass( "ribbed-grayDark" );break;
		case "CHA":$( "#cover" ).addClass( "ribbed-blue" );break;
		case "CHI":$( "#cover" ).addClass( "ribbed-red" );break;
		case "CLE":$( "#cover" ).addClass( "ribbed-crimson" );break;
		case "DAL":$( "#cover" ).addClass( "ribbed-blue" );break;
		case "DEN":$( "#cover" ).addClass( "ribbed-yellow" );break;
		case "DET":$( "#cover" ).addClass( "ribbed-red" );break;
		case "GSW":$( "#cover" ).addClass( "ribbed-blue" );break;
		case "HOU":$( "#cover" ).addClass( "ribbed-red" );break;
		default:$( "#cover" ).addClass( "ribbed-grayLighter" );break;
	}

	
</script>

<div data-role="dialog" id="dialogaddvideo" class="padding20" data-close-button="true" data-overlay="true" data-overlay-color="op-dark" data-overlay-click-close="true">
    <h1>New Video</h1>
    <form method="POST" action="/vox/nba/admin/player/video">
        <div class="cell">
            <label>Youtube Video Link</label>
            <input type="hidden" value="<?= $player[0]->id_player ?>" name='id_player'>
            <div class="input-control text full-size">
                <input type="text" name='link'>
            </div>
        </div>

        <div class="cell">
            <button class="button success">Insert</button>
        </div>

    </form>
</div>
<?php
 require_once __DIR__ . '/../footer.php'; ?>