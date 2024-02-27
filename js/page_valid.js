	
$(function(){	

	

		$.validator.addMethod( "mail", function( value, element ) {
			return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value);
		}, "Please enter a valid email address." );

		$.validator.addMethod( "whitespace", function( value, element ) {
			return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );
		}, "symbols not allowed" );
		
		jQuery.validator.addMethod("notEqual", function(value, element, param) {
			return this.optional(element) || value != $(param).val();
		}, "Another number");
		
		$.validator.addMethod("endGreaterThanBegin", function(value, element, param) {
    		return this.optional(element) || value > $(param).val();
		}, "Given Year Must Be Greater Than Previous Year");
		/*$.validator.addMethod("valueNotEquals", function(value, element, arg){
  			return arg != value;
 		}, "Value must not equal arg.");*/
		$.validator.addMethod('filesize', function (value, element, param) {
		    return this.optional(element) || (element.files[0].size <= param * 1000000)
		}, 'File size must be less than {0} MB');

		jQuery.validator.addMethod("zipcode", function(value, element) {
		  return this.optional(element) || /^[1-9][0-9]{5}$/.test(value);
		}, "Please provide a valid zipcode.");

		$.validator.addMethod("greaterThan", function( value, element, param ) {
	    	return this.optional( element ) || value > param;
		}, "The value must be greater than {0}");
	
});



jQuery.validator.setDefaults({
	debug: true,
	success: "valid",
	ignore: ".ignoreThisClass"
});


$(function(){
	$('.admission_check').validate({
		onfocusin: function (element) {
		    $(element).valid();
		  },

		  onfocusout: function (element) {
		    $(element).valid();
		  },
		rules:{	
			names_admin:{
				required: true,
			},
			mobile_no:{
				required: true,
				number: true,
				minlength:10,
				maxlength:10
			},

			email_id:{
				required: true,
				mail:true
			},

			address_proof:{
				required: true,
			},

			address:{
				required: true,
			},

			city: { 
			 	required: true,
			},

			state:{
				required: true,
			},

			country:{
				required: true,
			},

			pincode:{
				required: true,
				zipcode: true,
				maxlength:6
			},

			/*user_image: { 
			 	required: true,
			 	extension: "docx|rtf|doc|pdf",
			 	filesize:2
			},*/
		},
		messages:{
			names_admin:{
				required: 'Please enter the Name',
			},
			mobile_no:{
				required: 'Please enter the mobile number',	
				number: "Number Only Allowed",
			},

			email_id:{
				required: 'Please enter email id',
				mail:'Enter Valid Email'	
			},

			address_proof:{
				required: 'Please type your Address Proof'	
			},

			address:{
				required: 'Please Enter your address'
			},

			city:{
				required: 'Please Enter your City'	
			},

			state: { 
			 	required: 'Please Enter your state',
			},

			country:{
				required: 'Please Enter your country'	
			},		

			pincode:{
				required: 'Enter your pincode',
			},
		}
	});
});

