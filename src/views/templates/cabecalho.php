<?php 
		
	if (isset ($_GET ["logout"])) {
		
		// se a pessoa clicou em logout e estava logada, a sessão dela é encerrada.
		
		session_destroy ();
		
	}
	
	if (isset ($_GET ["login"])) {
		
		// se a pessoa clicou em logout e estava logada, a sessão dela é encerrada.
		
		echo ("<script language = 'javascript'> window.location = '/usuario' </script>");
		
	}
	
?>

<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  
  <title>EngSoft</title>
  
  <script>
        if (window.history.replaceState) {
        	
            <?php 
            
            // isso garante que caso a página sofra reload a sessão seja guardada, pois senão ela sumiria. Ela é guardada no cabeçalho
            // pois pode ser reutilizada em outras páginas
            
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
  
  .box-search #pesquisar {
    
	background : none;
    font-size: 25px;
	color : #ebdfcc;
	border: 2px #ff0841 solid;
    border-radius: 2px;
    align-content : center;
    margin-left : 23%;
	padding : 4px;
    width: 500px;
    height: 30px;
    outline: 0;
}

.box-search #but {
	background : none;
	color: #ebdfcc;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 14px 2px;
	cursor: pointer;
	border: 2px solid #ff0841;
	border-radius: 4px;
	transition : 0.2s;
}

.box-search #but:hover {
	background : #ff0841;
	padding : 15px 45px;
	transition : 0.2s;
}

.button a{
	background : none;
	color: #ebdfcc;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 14px 2px;
    cursor: pointer;
	border: 2px solid #021b2b;
    border-radius: 4px;
	transition : 0.2s;
}

.button a:hover {
	
	background : #021b2b;
	padding : 15px 45px;
	color : #ff0841;
	transition : 0.2s;
}

.results {
    color: white;
    font-size: 20px;
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
        		
        			<?php
        			
        			if (isset ($_SESSION ["id"])) {
        			
        				echo ("<input class = 'button' type = 'submit' name = 'logout' value = 'logout'>");
        			
					} else {
						
						echo ("<input class = 'button' type = 'submit' name = 'login' value = 'login'>");
						
					}
        			
        			?>
        		
        		</form>
        			
        	
        	</div>
        
      </nav>
      
      <a href = "/carrinho" class = "buy">
        <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG60.png">
      </a>
    </div>
  </div>
  
    <div class="box-search">
      <input type="search" placeholder="Busque aqui" id="pesquisar">
      <button class="button" id="but" onclick="searchData()">Buscar</button>
    </div>
    
    <script>
  var search = document.getElementById('pesquisar');

  function searchData() {
    window.location = 'produto?search=' + search.value;
  }

  search.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      searchData();
    }
  });
</script>
</header>

</html>
