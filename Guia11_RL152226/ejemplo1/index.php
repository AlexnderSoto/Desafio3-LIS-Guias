<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>     
<body>
<div class="header">
  <h1>Autocompletado</h1>
  <p>Utilizando MYSQL y AJAX</p>
</div>


<p>Ingrese nombre de país:</p>

<!--Make sure the form has the autocomplete function switched off:-->
<form autocomplete="off" >
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="myCountry" placeholder="Country">
  </div>
</form>

<script src="js/script.js"></script>

</body>
</html>