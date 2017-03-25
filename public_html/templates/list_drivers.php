<section id = "main">
    <?php while($driver = current($drivers)) { ?>
      <div class = "team">
        <div class = "teamimage">
          <img src="images/team<?=$driver['idteam']?>.png">
        </div>
        <div class="driver">
          <img src="images/<?=$driver['id']?>.png"></br>
          <?=$driver['name']?> </br>Age: <?=$driver['age']?>
        </div>
        <?php $driver = next($drivers)?>
        <div class="driver2">
          <img src="images/<?=$driver['id']?>.png"></br>
          <?=$driver['name']?> </br>Age: <?=$driver['age']?>
        </div>
        <?php $driver = next($drivers)?>
      </div>
    <?php } ?>
</section>