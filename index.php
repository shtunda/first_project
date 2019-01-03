<?php include_once("function.php")?>
<?php include_once("model.php")?>
<?php get_header()?>
<div class="row"><?php foreach($models as $item):?>
<div class="card" style="width: 18rem;">
  <img src="<?=$item['img']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$item['title']?></h5>
    <p class="card-text"><?=$item['content']?></p>
    <a href="auto.php?id=<?=$item['id']?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php endforeach?></div>

<?php get_footer()?>
