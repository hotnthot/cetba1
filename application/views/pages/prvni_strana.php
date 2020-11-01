<div class="container">
  <br>
  <h1>Světová a Česká literatura 18. století</h1>
  <table class="table">   
  <thead>
    <tr class="table-dark">
      <th scope="col">Kniha</th>
      <th scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($knihy): ?>
     <?php foreach($knihy as $knihy): ?>
      <tr class="table-dark">
            <td>
              <a href="<?php echo base_url("kniha/".$knihy->id_knihy);?>">
                <?php echo $knihy->nazev_knihy;?>
            </td>
            <td> 
                <?php echo $knihy->autor; ?>
            </td>
    </tr>
  <?php endforeach; ?>
  <?php endif; ?>
  </tbody>
</table>
</div>