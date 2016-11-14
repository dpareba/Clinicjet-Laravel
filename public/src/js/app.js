
$("#country_id").change(function ()
    {
    	
    	$.ajax({
    		url: urlstate,
    		method: 'POST',
    		data: {country_id: $(this).val(),_token: token},
    	})
    	.done(function(data) {
    		console.log(data);
            var options = "<option value=''>Select a State</option>";
            for (var i = 0; i < data.length; i++) {
                options += "<option value='" + data[i]['id'] + "'>" + data[i]['StateName'] + "</option>";
                
            }
            $("#state_id").html("");
            $("#state_id").append(options);
    	})
    	.fail(function() {
    		console.log("error");
    	})
    	.always(function() {
    		console.log("complete");
    	});
    	
    
    });

$("#state_id").change(function ()
    {
        
        $.ajax({
            url: urlcity,
            method: 'POST',
            data: {state_id: $(this).val(),_token: token},
        })
        .done(function(data) {
            console.log(data);
            var options = "<option value=''>Select a City</option>";
            for (var i = 0; i < data.length; i++) {
                options += "<option value='" + data[i]['id'] + "'>" + data[i]['CityName'] + "</option>";
                
            }
            $("#city_id").html("");
            $("#city_id").append(options);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    
    });
