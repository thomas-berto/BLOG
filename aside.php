
<?php
if (isset($_SESSION['login']))
{
    ?>
		<aside class="asid">

    <section>   
   <form action="index.php" class='head' method="post">
             <input type="submit" name='deconnexion' class="deco" value="deconnexion"/>
        </form>
</section>
    

<?php if (isset($_POST['deconnexion']))
            {
                session_unset();
                session_destroy();
                header('Location:index.php');
            }
            ?>
          
<section class="latte">

  <?php

$connexion = mysqli_connect("localhost", "root", "", "blog");
$totalmenbre ='SELECT COUNT(*) FROM utilisateurs';
$total = mysqli_query($connexion,$totalmenbre);
$data = mysqli_fetch_array($total);

$totalart ='SELECT COUNT(*) FROM articles';
$total2 = mysqli_query($connexion,$totalart);
$dataaa = mysqli_fetch_array($total2);

$req='SELECT login,id FROM utilisateurs ORDER BY id DESC';
$query2 = mysqli_query($connexion,$req);
$dataa =mysqli_fetch_array($query2);
$derniermembre = stripslashes(htmlspecialchars($dataa[0]));

    echo'<p>Le blog comptent <strong>'.$data[0].'</strong> membres.</p>';
    echo'<p>Le blog comptent <strong>'.$dataaa[0].'</strong> articles.</p>';

    echo'<p>Le dernier membre inscrit est '.$derniermembre.'.</p></section></aside>';
}
?>

 

