<!-- <?php /* foreach ($listeContacts as $contact) {

echo "<ul>";

echo "<li>".$contact['first_Name']."</li>";
 */
?>

<?php //} ?>

<br>

<li class="waiting">Please wait...</li>

</ul>

<br>

<button class="btn1">Add Class</button>

<button class="btn2">Remove Class</button>

<button class="btn3">Ajouter en haut</button>

<button class="btn4">Ajouter en bas</button>

<button class="btn5">Next</button>

<button class="btn6">Previous</button>

<br><br> -->

<form method="POST" action="<?php echo base_url('/Formulaire/index') ?>">

<input type="hidden" name="monformulaire" value="true"></input>

Nom : <input type="text" name="nom"></input>

<br><br>

<?php if (isset($validation) && $validation->hasError('nom') && $request->getVar('monformulaire') =='true') { 
    
    echo $validation->getError('nom');
    
}?>

<br><br>

Prenom : <input type="text" name="prenom"></input>

<br><br>

<?php if (isset($validation) && $validation->hasError('prenom') && $request->getVar('monformulaire') =='true') { 
    
    echo $validation->getError('prenom');
    
}?>

<br><br>

Mail : <input type="text" name="mail"></input>

<br><br>

<?php if (isset($validation) && $validation->hasError('mail') && $request->getVar('monformulaire') =='true') { 
    
    echo $validation->getError('mail');
    
}?>

<br><br>


<button type="submit">Envoyer</button>

</form>