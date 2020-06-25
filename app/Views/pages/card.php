
  <section>
 <style>
  .card-c {
 
    column-count: 3;
 
 
  }
  </style>

  <?php if ($card): ?>
    <br>
    <div >
  <div class="card-deck">
	<?php foreach ($card as $carditems):?>
    
  <br>
  <div class="card" style="width: 18rem;">
    
    <div class="card-body">
      <h4 class="card-title"><?= $carditems['name']?></h4>

      <a href="/post/<?= $carditems['name']?>" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  
  


    <?php endforeach?>
    </div>
    </div>
		<?php else: ?>
			<p class="text-center">no post</p>
		<?php endif?>
	
	


       

  </section>
