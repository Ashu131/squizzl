
	$(document).ready(function () {
			
			$("#contact-form").validate( {
				rules: {
					name: {
						required: true,
						minlength: 3
					},
					phone: {
						required: true,
						minlength: 10
					},
					email: {
						required: true,
						email:true
					},
					address:{
						required: true,
					},
					msg:{
						required: true,
						minlength: 250
					}
				},
				messages: {
					name: {
						required: "Please enter a full name",
						minlength: "Your full name consist of at least 3 characters"
					},
					phone: {
						required: "Please provide a valid phone number",
						minlength: "Your phone number must be at least 10 digit long"
					},
					email: "Please enter a valid email address",
					address: "Please enter your full address",
					msg: {
						required: "Please enter your message",
						minlength: "Your message must be at least 250 characters long",
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );
		} );


	$(document).ready(function () {
			
			$("#checkout-form").validate( {
				rules: {
					fname: {
						required: true,
						minlength: 3
					},
					lname: {
						required: true,
						minlength: 3
					},
					phone: {
						required: true,
						minlength: 10
					},
					email: {
						required: true,
						email:true
					},
					address:{
						required: true,
					},
					city:required,
					state:required,
					zip:required
				},
				messages: {

					fname: {
						required: "Please enter your fisrt name",
						minlength: "Your first name consist of at least 3 characters"
					},
					lname: {
						required: "Please enter your last name",
						minlength: "Your last name consist of at least 3 characters"
					},
					phone: {
						required: "Please provide a valid phone number",
						minlength: "Your phone number must be at least 10 digit long"
					},
					email: "Please enter a valid email address",
					address: "Please enter your full address",
					city: "Please enter your city",
					state: "Please enter your state",
					zip:"Please enter your zip code"
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-9" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-9" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );
		} );