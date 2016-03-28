
jQuery(document).ready(function() {


    /*
        Fullscreen background
    */
    //$.backstretch("assets/img/backgrounds/1.jpg");
    
    /*
        Form validation
    */
    $('.login-form input[type="email"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="email"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });

	$('#department_create').submit(function(event) {

		console.log('I am here');

		var formData = {
			'_token'              : $('input[name=_token]').val(),
			'dep_name'              : $('input[name=department_name]').val(),
			'dep_code'             : $('input[name=department_code]').val(),
			'dep_description'    : $('input[name=department_description]').val()
		};

		$.ajax({
					type        : 'POST',
					url         : '/department',
					data        : formData,
					dataType    : 'json',
					encode      : true
				})
				.done(function(data) {
					if(data['id']>0)
					{
						window.location='/department'
					}
				});

		event.preventDefault();
	});

	$('#department_update').submit(function(event) {

		console.log('I am here');

		var formData = {
			'_token'              : $('input[name=_token]').val(),
			'dep_name'              : $('input[name=department_name]').val(),
			'dep_code'             : $('input[name=department_code]').val(),
			'dep_description'    : $('input[name=department_description]').val()
		};

		$.ajax({
					type        : 'PUT',
					url         : '/department/update',
					data        : formData,
					dataType    : 'json',
					encode      : true,
					headers		: {'_token': $('input[name=_token]').val()}
				})
				.done(function(data) {
					if(data['id']>0)
					{
						window.location='/department'
					}
				});

		event.preventDefault();
	});
    
});
