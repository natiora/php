jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$("document").ready(function()
    	{
        $( "#form" ).validate({
    rules: {
    field: {
    required: true,
    minlength: 10,
    maxlength: 20
    }
  }
    });
       $("#txt").keyup(function(event)
       {

        $('#contenu').html(this.value);

       });

    }) ;



