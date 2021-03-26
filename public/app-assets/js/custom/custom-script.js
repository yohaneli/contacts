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
		success:function(){
 
		},
		error:function(){
 
		}});
}

$(document).on("click", ".add-contact", function (e) {	
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

/*
$(".media-object").on("click",function(e) {
	$(this).attr("src","newimage.jpg");
})
*/

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
var idContact = null;

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

$(document).on("click", ".dataTables_scrollBody tr", function (e) {
	console.log(e);
	idContact += $(this).data('id');
	console.log(idContact)
	var param = {
			id : $(this).data('id')
		};
		$.ajax({
			url : "http://contacts/api/edit",
			type : "POST",
			data : param,
			success:function(res){
				console.log(res);
				$("#first_Name").val(res.response.first_Name);
				$("#last_Name").val(res.response.last_Name);
				$("#company").val(res.response.company);
				$("#job").val(res.response.job);
				$("#email").val(res.response.email);
				$("#phone").val(res.response.phone);
				$("#note").val(res.response.note); 0.2
			   },
			error:function(){
	
			   }
		})
	})

$(".btnnext").on("click",function(e) {	
	console.log("J'ai cliqué sur le bouton Next");
	$(".listeTr").remove();
	page=page+1;
	paginate(page);
});

$(".btnprevious").on("click",(e)=> {	
	console.log("J'ai cliqué sur le bouton Next");
	$(".listeTr").remove();
	page=page-1;
	if(page<1){
		page=1
	}
	paginate(page);
});

$(document).on("click", ".update-contact", function (e) {
	console.log(e);
	//console.log( $(this).data('id'));
	console.log(idContact);
	var param =  "id="+idContact+"&"+ $("#formContact").serialize()
	console.log(param)
	postToApi("edit", param);
})

$(".listeTr").on("click",(e)=>{
	var id = e.currentTarget.id.split("-")[1];
	var param = {type:'id',contenuRecherche:id}
	$.ajax({
		url:'http://contacts/api',
		type:'POST', 
		data:param,
		success:function(res){
			console.log(res);
		},
		error:function(err){
		console.log("Erreur");
		}});
})

function paginate(page) {
	$.ajax({
		url:'http://contacts/api/index?page='+page,
		type:'POST', 
		data:'',
		success:function(res){
		res.forEach(element => {
			console.log(element.last_Name);

			/* $("#contact-"+element.id).append("<td>"+element.last_Name+"</td>");
			$("#contact-"+element.id).append("<td>"+element.first_Name+"</td>");
			$("#contact-"+element.id).append("<td>"+element.email+"</td>");
			$("#contact-"+element.id).append("<td>"+element.phone+"</td>"); */

			$("#listeContact").append(updateTr(element.id,element.first_Name,element.last_Name,element.email,element.phone));
		});
		},
		error:function(err){
		console.log("Erreur");
		}});
}

function updateTr (id,firstName,lastName,mail,phone) {
	return `<tr id="contact-${id}" class="listeTr">
	<td>${firstName + ' ' + lastName}</td>
	<td>${mail}</td>
	<td>${phone}</td>
	<td><span class="favorite"><i class="material-icons" data-ref="${id}" data-nom="${firstName + ' ' + lastName}" > star_border </i></span></td>
	<td><span class="delete"><i class="material-icons" data-ref="29" >delete_outline</i></span></td>
  </tr>`;
}