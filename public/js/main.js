$(document).ready(function(){
	$('.recept').keydown(function(e){
				if(e.keyCode == 13)
				{
					e.preventDefault();
				}
			});
	$('.ingredient').keypress(function(e){
		if(e.which == 13){
			e.preventDefault();
			var value = $('.ingredient').val();
			$('#inputs').append('<div class="added-input"><input class="ingredient-input " type="text" name="ingredient[]" value="'+value + '" placeholder="ingredient" required><input class="amount" type="text" name="amount[]" placeholder="amount"></div>');
			$('.amount:last').focus();
			$('.ingredient').val("");
			$('.amount:last').keypress(function(e){
				if(e.which == 13){
					$('.ingredient').focus();
					e.preventDefault();
				}
			});
		}
	});
// adding steps
	// var count = 1;
	var sum = Number($('.steps .row .stepnumber').last().text());
	var count = sum + 1;
	
	$('.addstep').click(function(e){
		e.preventDefault();
		
		$('.steps').append('<div class="row"><div class="col-md-1"><div class="stepnum"><h5>'+count+'</h5></div></div><div class="col-md-6"><div class="textarea "><textarea class="materialize-textarea" placeholder="Beschrijf de stap" name="step[]" id="'+count+'" cols="30" rows="3"></textarea></div></div></div>');
		count++;
	});


});