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