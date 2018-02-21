<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body>
<div class="col-sm-4">
<form id="form">
<label for="field">Entrer de 10 à 20</label>
<input type="text" id="field" name="field" class="form-control">
<br/>

   <h4> <div id="contenue">
    </div></h4>
</form>
</div>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="app.js"> </script>
  <script type="text/javascript" language="javascript">
       $("document").ready(function()
    {
       $("#field").keyup(function(event)
       {
        $('#contenue').html(this.value);
       }) ;
    })  ;
       
       
    </script>
</body>
</html>


