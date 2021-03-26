<table>
          <thead>
            <tr>
              <th>Nom & Prénom</th>
              <th>Email</th>
              <th>Numéro de Télephone</th>
              <th>Favoris</th>
              <th>Supprimer</th>
            </tr>
          </thead>
          <tbody id="listeContact">


 <!-- echo "<ul>";

 echo "<li>".$contact['first_Name']."</li>";
  -->


  <?php foreach ($contacts as $contact) {?>

<tr id="contact-<?php echo $contact->id ;?>" class="listeTr" style="cursor:pointer">

  <td><?php echo $contact->last_Name." ".$contact->first_Name ; ?></td>
  <td><?php echo $contact->email ; ?></td>
  <td><?php echo $contact->phone ; ?></td>
  <td><span class="favorite"><i class="material-icons" data-ref="<?php echo $contact->id; ?>" data-nom="<?php echo $contact->last_Name; ?>" > star_border </i></span></td>
  <td><span class="delete"><i class="material-icons" data-ref="<?php echo $contact->id; ?>" >delete_outline</i></span></td>
</tr>
  
  <?php } ?>

</tbody>
</table>

<!-- <br>

<li class="waiting">Please wait...</li>

</ul>

<br> -->

<!-- <button class="btn1">Add Class</button>

<button class="btn2">Remove Class</button> -->
<!-- 
<button class="btn3">Ajouter en haut</button>

<button class="btn4">Ajouter en bas</button>

<button class="btn5">Next</button>

<button class="btn6">Previous</button> -->
 

<br>

<form id="formContact" class="edit-contact-item mb-5 mt-5">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix"> perm_identity </i>
            <input id="#first_name" name="first_name" type="text" class="validate">
            <label for="first_name">Prénom</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> perm_identity </i>
            <input id="last_name" name="last_name" type="text" class="validate">
            <label for="last_name">Nom</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> business </i>
            <input id="company" name="company" type="text" class="validate">
            <label for="company">Entreprise</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> business_center </i>
            <input id="business" name="business" type="text" class="validate">
            <label for="business">Profession</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix"> email </i>
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> call </i>
            <input id="phone" name="phone" type="text" class="validate">
            <label for="phone">Numéro de téléphone</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> note </i>
            <input id="notes" name="notes" type="text" class="validate">
            <label for="notes">Notes</label>
          </div>
        </div>
      </form>


