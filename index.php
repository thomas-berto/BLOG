<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>index</title>
	</head>
	<body>
		<header class="topnav">
			<nav id="menu">
				<ul> <?php include('header.php') ?></ul>				
		</header>
		<main>

		<?php
		if (isset($_SESSION['login']))
		{

				 $login=$_SESSION["login"];
		}
				 
				$connexion = mysqli_connect("localhost", "root", "", "blog");
				$limite = 4;
				if (isset($_GET["page"]))
				{
					$page  = $_GET["page"];
				}
				 else
				{ 
					$page=1;
			    };
					$debut = ($page-1) * $limite; 
                    $uti = "SELECT * FROM articles ORDER BY date DESC LIMIT $debut, $limite "; 
				    $uti2 = mysqli_query($connexion,$uti);
				while ($data = mysqli_fetch_array($uti2))
                           {
							   echo'<h2>'.$data["titre"].'</h2>';
							   echo'<section class="versement">';
							   echo'<aside><img class="im" src="'.$data['image'].'"/></aside>';
							   echo'<article class="art">'.substr($data["article"],0,100).'';
							   echo'<a href="article.php?id=' , $data['id'] , '">(lire la suite...)</a>';
							   echo'</article>';
							   echo'</article></section>';
						   }

					$pg = "SELECT COUNT(id) FROM articles";
					$pg2 = mysqli_query($connexion, $pg);
					$row = mysqli_fetch_row($pg2);
					$total = $row[0];
					$total_pages = ceil($total / $limite);
					$pagLink = "";
					for ($i=1; $i<=$total_pages; $i++)
					{  
						echo"<section class='page'><a href='index.php?page=".$i."'>".$i."</a></section>";  
}
 
		?>

             

        </main>
       
    </body>
</html>
   