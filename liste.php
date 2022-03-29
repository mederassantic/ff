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
      <li class="nav-item active">
        <a class="nav-link" href="Liste.php">Athletes</a>
      </li>
       <li class="nav-item">
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
 
  <div  class="container mt-5" id="acc"> 
   
     <h1 style="color:black" class="text-center">Liste des Athletes :</h1>
 
 </div>


 








     

     <div class="container mt-4">
            <div class="row">
                
                
                <table   class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th style="color:black" >Nom</th>
                      <th style="color:black">Prenom</th>
                      <th style="color:black">Date De Naissance</th>
                      <th style="color:black">Photo</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                 
                  <tr>
                      <td style="color:black">El Guerrouj</td>
                      <td style="color:black">Hicham</td>
                      <td style="color:black">2000-01-01</td>
                      <td><a href="miseajour.php"><img src="images/hicham.jpg"  width="100"  height="100"  /></a></td>
                  </tr>
                  <tr>
                      <td style="color:black">El Bakkali</td>
                      <td style="color:black">Soufiane</td>
                      <td style="color:black">2000-01-01</td>
                      <td><img src="images/soufiane.jpg"  width="100"  height="100"  /></td>
                  </tr>
                   <tr>
                      <td style="color:black">Bidouane</td>
                      <td style="color:black">Nezha</td>
                      <td style="color:black">2000-01-01</td>
                      <td><img src="images/nezha.jpg"  width="100"  height="100"  /></td>
                  </tr>
              
                      
                  </tbody>
                </table>
            </div>
        </div>

  <div class="container pl-5 mx-auto text-center">
      
      
          
  <ul class="pagination justify-content-center">
   
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>

  </ul>

 </div>

  
      
      
      
      




  



   <!--    Footer      !-->



<footer>
 <div class="container m-5 mx-auto text-center bg-dark" >
               <h3 style="font-family:Georgia" class="text-white">E-Athlete   <span style="color:grey;font-size:50">.</span></h3>
                <div>Copyright © Tous droits reservés.</div>
			</div>


</footer>
 </BODY>
</HTML>
