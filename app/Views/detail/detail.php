<section>
<div>
<br>

    <article class="container badge-light">
        <h1><?= $post['name']?></h1>
        <div class="details">
            <h1> id: <?= $post['id']?></h1>
            adress : <?= $post['password']?>
            posted : <?= date('M d Y', strtotime($post['date']))   ?>


        </div>






    </article>




</div>


</section>
