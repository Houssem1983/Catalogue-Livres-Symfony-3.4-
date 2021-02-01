$(document).ready(function(){
	$div = $("#appbundle_author").attr("class","col-md-auto");
	$div = $("#appbundle_book").attr("class","col-md-auto");
	$texts = $(":text").attr("class","form-control");
	$numbers = $("[type='number']").attr("class","form-control");
	$selects = $("select").attr("class","form-control");
	$file = $(":file").attr("class","custom-file-input");
	
	$divFile = $file.parent().attr("class","custom-file");
	$divFile.attr("style","margin-top: 10px");
	$labelFile = $("[for='appbundle_book_cover']").attr("class","custom-file-label");
	
	$file.change(function() {		
		$labelFile.text($(this).val());		
	});
});