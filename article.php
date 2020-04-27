<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>article</title>
	</head>
	<body>
		<header class="topnav">
			<nav id="menu">
				<ul> <?php include('header.php') ?></ul>				
		</header>
		<main>

		 <?php
		 		$login=$_SESSION["login"];
                $connexion = mysqli_connect("localhost", "root", "", "blog");
				$uti = 'SELECT * FROM articles WHERE id="'.$_GET['id'].'" ';
				$uti2 = mysqli_query($connexion,$uti);
				while ($data = mysqli_fetch_array($uti2))
                           {
							   echo'<h1 class="ha">'.$data["titre"].'</h1>';
							   echo'<aside class="imge"><img class="img" src="'.$data['image'].'"/></aside>'; 
							   echo'<section class="versement">';
							   echo'<article>'.$data["article"].'</article>';
							   echo'<article>'.$data["date"].'</article>';
							   echo'</article></section>';
						   }
		?>

             
		
</main>
       
	   </body>
   </html>
	  