<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <meta charset="utf-8"> 
<link rel="stylesheet" href="./css/bootstrap.min.css" />
<link rel="stylesheet" href="./css/styles.css" />
<script src="./js/jquery-3.3.1.slim.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

    <script src="./js/jquery-1.11.1.min.js"></script>

   <link rel="stylesheet" href="css/glyphicones.css">
    <link rel="stylesheet" href="css/styles.css">
    <STYLE>
        
        *{
            color:white;
        }
        
        
    </STYLE>
 </HEAD>

 <BODY>
      <?php      
     
    
     ?>
  <!--    Entete      !-->
<div class="container sticky-top">
  <header>

    <nav  class="navbar navbar-dark navbar-expand-md bg-dark pl-5">
     <a class="text-white" style="text-decoration:none" href="#">
	 <h1 style="font-family:Georgia">E-Athlete <span style="color:grey">.</span></h1></a>
    
    <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
	
    </button>
    
    <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ml-5">
      <li class="nav-item">
        <a class="nav-link" href="acc.php">Accueil</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="menu.php">Nouveau</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Liste.php">Athletes</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="search.php">Recherche</a>
      </li>
       
       <li class="nav-item">
        <a class="nav-link" href="Resultats.php">Resultats</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="statistiques.php">Statiqtiques</a>
      </li> 
       
	  
	 
    </ul>
      </div>
  </nav>
 
  
  </header>
 </div> 



























  <!--    Section 1 slide    !-->
 



 


  <!--    Section Login    !-->
  <div class="container mt-5" id="acc">
<section class="bg-dark p-2 text-white">
  <div class="mx-auto w-50">
    <h2>Recherche par ville :</h2>
    <form action="search.php"  method="POST"  enctype="multipart/form-data">
      <div class="form-group">
        <label>Ville:</label>
        <input name="ville" type="text" class="form-control">
          </div>
      <input type="submit" name="action2" class="btn btn-outline-light" value="imprimer PDF"/>
     <button type="reset" class="btn btn-outline-light">Annuler</button>
   
    </form>
  </div>
    
</section>

<?php      
// action2 

if(!empty($_POST['action2']))
{
    
}


?>


   <?php      
// action3 
if(!empty($_GET['action3']))
{
   ?> 
     <div class="container mt-4">
            <div class="row">
                
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prix</th>
                      <th>Photo</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>Kiwi</td>
                      <td>2.5 </td>
                      <td><img src="images/kiwi.jpg"  width="100"  height="100"  /></td>
                      <td><a href="store.php?action4=id"><img src="images/delete.png"  width="50"  height="50"  /></a></td>
                    </tr>
              
                      
                  </tbody>
                </table>
            </div>
        </div>





<?php    
    
}   
      
      
   ?>   
      
      
      
      
</div>



  



   <!--    Footer      !-->



<footer>
 <div class="container m-5 mx-auto text-center bg-dark" >
               <h3 style="font-family:Georgia" class="text-white">E-Athlete   <span style="color:grey;font-size:50">.</span></h3>
                <div>Copyright ?? Tous droits reserv??s.</div>
			</div>


</footer>
 </BODY>
</HTML>
