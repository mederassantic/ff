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
	  
	 
    </ul>
      </div>
  </nav>
 
  
  </header>
 </div> 



























  <!--    Section 1 slide    !-->
 
  <div  class="container mt-5" id="acc"> 
   
     <h1 style="color:black" class="text-center">Mise à jour des informations :</h1>
 
 </div>


 








     

     <div class="container mt-4">
            <div class="row">
                
                
                <table   class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th style="color:black" >Id</th>
                      <th style="color:black" >Nom</th>
                      <th style="color:black">Prenom</th>
                      <th style="color:black">Date De Naissance</th>
                      <th style="color:black">Photo</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                 
                  <tr>
                  <form action="miseajour.php" method="POST">
                      <td><input style="color:black"  type="text" disabled  name="id" value="1"></td>
                      <td><input style="color:black"  type="text"  name="nom" value="El guerrouj"></td>
                      <td ><input style="color:black" type="text"  name="prenom" value="Hicham"></td>
                      <td ><input style="color:black" type="date"  name="dn" value="Hicham"></td>
                      <td><img src="images/hicham.jpg"  width="100"  height="100"  /></td>
                  <td ><input style="color:black" type="submit"  name="actionmodifier" value="Modifier"></td>
                  <td ><input style="color:black" type="submit"  name="actionsupprimer" value="Supprimer"></td>
                  
                  </form>
                  </tr>
                  
              
                      
                  </tbody>
                </table>
            </div>
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
