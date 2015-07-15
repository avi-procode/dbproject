function check_validation(form_id)
{
	
	
	var error = 0;
	var filds = $('#'+form_id).find('.req');
	
	filds.each(function()
	{
		var value = $(this).val();
		var id = $(this).attr('id');
		
		if(value == null || value.length <1|| value == 'NULL' ||value=="")
		{  
			           
           jQuery("#error_"+id).html(id+' is required.');
            $(this).addClass('error122');
			error++;
		
		}
		else
		{	
            $(this).removeClass('error122');
			var emailid = $("#email").val();
			if(emailid)
			{
				var atpos=emailid.indexOf("@");
				var dotpos=emailid.lastIndexOf(".");
				if ((atpos<1 || dotpos<atpos+2 || dotpos+2>=emailid.length) || /\s/g.test(emailid) )
				{
					//jQuery("#error_Email").html('Email is not valid');
					jQuery("#email").addClass('error122');
					error++;
				}
		 	}
		 	
    	}
	});
		
	if(error == 0 ){
		
		return true;
	}
	else{

		return false;
	}
}

function remove_validation_error(id){
$("#"+id).removeClass('error122');
// $("#error_"+id).html('');
}