<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>exercicios</title>
<link rel="stylesheet" type="text/css" href="styleExer.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
  </script>	
  <style>
  
.ui-dialog {
    background: #F9F9F9;
    border: 1px solid #90d93f;
    color: #222222;
}
}



</style>
</head>
<body>
	<div id="dialog" title="Basic dialog">
  <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
 
<button id="opener">Open Dialog</button>
 
	<div id="D1">	
		<div class="login">
			
			
			<div class="aluno">

				<a id= "linkAl" href="loginAluno.html"> <button id="loginAl" > Login Aluno </button> </a>  

			</div>
			
			<div class="prof">

				<a id= "linkPr" href="#"> <button id="loginPr" > Login Professor </button> </a>  

			</div>

			
		</div>	
    </div>
	  
        <ul>
        	 <li><a href="paginInc.html">Home</a></li>
          <li><a href="formulas.html">Formulas</a></li>
          <li><a href="#Videos">Videos</a></li>
          <li><a href="#Perguntas">Perguntas</a></li>
        </ul>
	<select>
    <option disabled selected style="display: none">Assunto</option>
    <option value="ME">Mecânica</option>
    <option value="TE">Termologia</option>
    <option value="ON">Onda</option>
    <option value="EL">Eletromagnetismo</option>
    <option value="OP">Óptica</option>
</select>
	
	<select>
    <option disabled selected style="display: none">Nível de dificuldade</option>
    <option value="FA">Fácil</option>
    <option value="ME">Médio</option>
    <option value="DI">Díficil</option>	
</select>
	 
	<select>
    <option disabled selected style="display: none">Tema do assunto</option>

</select>
	
	<select>
    <option disabled selected style="display: none">Gabarito provisório</option>
</select>
	
</body>
</html>