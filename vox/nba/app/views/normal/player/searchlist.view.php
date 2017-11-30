<?php foreach ($players as $p): ?>
            					<div class="cell" style="margin-left:2%">
            					  <a href='/vox/nba/player/<?= $p->firstname; ?>/<?= $p->id_player; ?>'>
            					  	<h5><?=  $p->firstname;  ?>,
            					  		<?= $p->lastname; ?>
            					  	</h5>
            					  </a>
            					</div>
            					
            			<?php endforeach ?>