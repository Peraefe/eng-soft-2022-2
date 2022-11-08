<?php 
		
	if (isset ($_GET ["logout"]) && ($_SESSION ["id"] != NULL)) {
		
		session_destroy ();
		
	}
?>

<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  
  <title>EngSoft</title>
  
  <script>
        if (window.history.replaceState) {
        	
            <?php 
            
            	session_commit ();
            
            ?>;
        }
        
        
    </script>
  
  <style>
  
  /*

  Paleta

  #02031a - quase preto
  #021b2b - azul escuro
  #b10c43 - vermelho fosco
  #ff0841 - vermelho claro
  #ebdfcc - beige

  */

  * {
  margin: 0;
  padding: 0;
  font-family: 'Inter', sans-serif;
  }
  
  body {
  	
  	background : #021b2b;
  	
  }
  
  .cabeçalho {
  background: linear-gradient(#02031a, #021b2b);
  width: 100%;
  height: 150px;
  display: flex;
  align-items: center;
  }

  .logo {
  font-size: 50px;
  padding: 15px;
  font-weight: bold;
  text-decoration: none;
  color: #b10c43;
  margin-left: 100px;
  }

  .profile {
  margin-left: 400%;
  }

  .profile img {
  width: 50px;
  background : #b10c43;
  border-radius : 30px;
  }
  
  .profile div {
  	
  	height: 0%;
  	width : 0%;
  	background : #b10c43;
  	margin-top : -18px;
  	border : 2px #ff0841 solid;
  	border-radius : 15px;
  	transition : 0.2s;
  	
  }
  
  
  .profile:hover div{
  	
  	position : fixed;
  	width : 15%;
  	height : 40%;
  	transition : 0.2s;
  	
  }
  
  .profile input {
  	
  	display : none;
  	background : none;
  	border : none;
  	color : #021b2b;
  	font-size : 40px;
  	
  	
  }
  
  .profile:hover input{
  	
  	display : flex;
  	border-bottom : 2px #021b2b solid;
  	
  }

  .sideR {
  display: flex;
  grid-gap : 20px 90px;
  }

  .buy img {
  width: 50px;
  background : #b10c43;
  border-radius : 30px;
  }
  
  </style>
  
</head>

<header>
  <div class = "cabeçalho">
    <a class = "logo" href="/produto">LOGO</a>
    <div class="sideR">
    
      <nav class = "profile">
      
        <img src="https://uploaddeimagens.com.br/images/004/064/618/thumb/user.png?1666047148">
        
        	<div>
        	
        		<form method = "GET" >
        		
        			<input class = "button" type = "submit" name = "logout" value = "logout">
        		
        		</form>
        			
        	
        	</div>
        
      </nav>
      
      <a href="/carrinho" class=" buy">
        <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG60.png">
      </a>
    </div>
  </div>
</header>

</html>
