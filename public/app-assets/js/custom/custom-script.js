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
	//e.preventDefault();
	var param = $("#formContact").serialize();
	console.log("J'ai cliqué sur le bouton");
	console.log($("#formContact").serialize());
	postToApi('create',param);
});

//EXERCICE

$(".btn1").on("click",function(e) {
	console.log("J'ai cliqué sur le bouton");
	// hide(),remove(),toggle("slow ou fast")
	$("p").addClass("select");
});

$(".btn2").on("click",function(e) {
	console.log("J'ai cliqué sur le bouton");
	// hide(),remove(),toggle("slow ou fast")
	$("p").removeClass("select");
});

$(".btn3").on("click",function(e) {
	console.log("J'ajoute en haut de la liste");
	// hide(),remove(),toggle("slow ou fast")
	$("ul").prepend("<li>Element en haut</li>");
});

$(".btn4").on("click",function(e) {
	console.log("J'ajoute en bas de la liste");
	// hide(),remove(),toggle("slow ou fast")
	$("ul").append("<li>Element en bas</li>");
});

var page=1;

$(".btn5").on("click",function(e) {
	
	page=page+1;
	paginate(page);
	$(".waiting").hide();
});

$(".btn6").on("click",function(e) {
	console.log("Pagination de la liste");
	page=page-1;
	if (page<1) {
		var page= 1;
	}
	paginate(page);
});

function paginate(page) {
	$.ajax({
		url:'http://contacts/api/index?page='+page,
		type:'POST', 
		data:'',
		success:function(res){
		res.forEach(element => {
			console.log(element.first_Name);
			$("ul").append("<li>"+element.first_Name+"</li>");
		});
		},
		error:function(err){
		console.log(res);
		}});
}