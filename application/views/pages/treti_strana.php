<div class="container">
<br>
<h1>Světová literatura 20. a 21. století</h1>

  <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">Kniha</th>
      <th scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>
</div>