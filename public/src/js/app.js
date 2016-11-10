

$("#AddCountry").click(function(){
	event.preventDefault();
	$("#edit-modal").modal();
});
$(".edit").click(function(){
	var countryname = event.target.parentNode.childNodes[0].textContent;
	$("#editcountry").val($.trim(countryname));
	$("#edit-modal").modal();
});

