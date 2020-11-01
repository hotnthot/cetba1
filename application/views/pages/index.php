		<br>
		<div class="container">
		<h1>MATURITNÍ SEZNAM LITERÁRNÍCH DĚL</h1>
		<br>		

		<h2>Ukázka knih</h2>
			<table class="table">				
		  		<thead>
				    <tr class="table">
				      <th scope="col"></th>
				      <th scope="col">Název knihy</th>
				      <th scope="col">Autor</th>
				    </tr>
			 	</thaed>
			 	<tbody>
			 	<?php if ($knihy): ?>
                 <?php foreach($knihy as $knihy): ?>
				    <tr class="table">
				      <td><?php echo $knihy->id_knihy;?></td>

				      <td><a href="<?php echo base_url("kniha/".$knihy->id_knihy);?>"><?php echo $knihy->nazev_knihy;?></td>

				      <td><?php echo $knihy->autor;?></td>
				    </tr>
			     <?php endforeach ?>
			    <?php endif ?>
				</tbody>
				 </div>
			</table> 
		 </div>
		</div>
	</body>