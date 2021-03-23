<?php foreach ($listeContacts as $contact) {

echo '<br>';

echo $contact['first_Name'];

echo '<br>';

echo $contact['last_Name'];

echo '<br>';

echo $contact['email'];

echo '<br>';

?>

<a href="<?php echo base_url('basededonnees/delete/'.$contact['id']) ; ?>" ><button type="submit">Supprimer</button></a>



<?php } ?>