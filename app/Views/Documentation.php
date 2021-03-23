
<div id="main">
<div class="row">

Auteur : Yohan ELISABETH
Date de création : 11/03/2021
Version : Alpha 0.1				


						Documentation API Contacts

								SOMMAIRE

				RESUME

	BASE DE DONNEES

	AFFICHER UNE LISTE DE CONTACTS

	RECHERCHER UN CONTACT

	AJOUTER UN CONTACT

	MODIFIER UN CONTACT

	SUPPRIMER DES CONTACTS

	METTRE UN CONTACT EN FAVORIS

	RETIRER UN CONTACT DES FAVORIS       

                            


			RESUME




Cette documentation est un gestionnaire de contacts. 

Elle permet entre autre de :

- afficher une liste de contacts

- ajouter un contact a cette liste
- modifier un contact de cette liste
- supprimer un contact de cette liste
- mettre un contact en favoris ou le retirer des favoris.

Cette API est liée à une base de données qui s'appelle qui enregistre tous les  contacts.


			BASE DE DONNEES




La base de données s'appelle contactset il est possible de la récupérer dans le fichier contacts.sql qui est dans le dossier database à la racine du projet.

La configuration de la base de données est faite dans le fichier .env ligne 50.



		AFFICHER LA LISTE DE CONTACTS




Pour afficher la liste des contacts l'API utilise la fonction index.

A partir du modèle ContactModel, elle affiche les contacts par ordre alphabétique du nom puis du prénom paginée par 10.




		RECHERCHER UN CONTACT




Pour rechercher un contact , l'API utilise la fonction index.

Elle recherche un contact par rapport au nom ou au prénom du contact.

Elle utilise 2 paramètres : le type de recherche et le contenu de la recherche via la methode POST.
Les résultats de la recherche sont classés par ordre alphabétique du nom puis du prénom.

Elle fonctionne avec la methode POST et renvoie des réponses en JSON.


	AJOUTER UN CONTACT



Pour ajouter un contact, il faut un nom , un prénom , une photo , son entreprise, sa profession , son numéro de téléphone , son adresse mail .
En plus de son id , et de sa date de création.




		MODIFIER UN CONTACT

Pour modifier un contact on a besoin en paramètre de l'id du contact





</div>
</div>












