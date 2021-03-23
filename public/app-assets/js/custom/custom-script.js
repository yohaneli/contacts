/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 5.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */

//fonction d'appel API

function postToApi(action,dataParam) {
	$.ajax({
		url:'http://contacts/api/' + action,
		type:'POST', 
		data:dataParam,
		success:function(res){
 
		},
		error:function(err){
 
		}});
}

$(".add-contact").on("click", function (e) {
	console.log("J'ai cliqué sur le bouton");
	console.log($("#first_name").val());
});