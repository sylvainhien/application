
<?php
include 'db_connexion.php';

if(isset($_POST['submit'])) {
 
 $nom =$_POST['nom'];
 $prenom =$_POST['prenom'];
 $numero2telephone =$_POST['numero2telephone'];
 $email =$_POST['email'];
 
 $sql = " INSERT INTO `activité`(`nom`, `prenom`, `numero2telephone`, `email`) VALUES ('$nom',' $prenom',' $numero2telephone',' $email')";

 $result = mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>
<body style="  background-color: rgb(213, 229, 223);">
    
<nav class="navbar navbar-ligth justify-content-center fs-3 mb-5 "> Formulaire d'enregistrement</nav>

<div class="container">
    
    <div class="container d-flex justify-content-center col-md-4 bg-light rounded-3 pt-4">
    <form action="" method="post" style="width:50vw; min-width:300px;">

      <div class="text-center w-50 mx-auto" style="width: 200px;">
        <img  class="img-fluid rounded mx-auto d-block" src="Simplon.png" alt="">
      </div>
 <br>
    <div>
        <P>Remplissez le formuliaire</P> 
    </div>
            <div>
                <label class="validationCustom01">Nom:</label>
                <input type="text" class="form-control" name="nom"  id="validationCustom02" placeholder="Hien" required>
            </div>
            
            <div>
                <label class="validationCustom02">Prenom:</label>
                <input type="text" class="form-control" name="prenom" id="validationCustom02" placeholder="Kouadio Toh  Sylvain" required>
            </div>

            <div>
                <label class="validationCustom03">Numéro de téléphone:</label>
                <input type="text" class="form-control" name="numero2telephone"  id="validationCustom03" placeholder="05-75-59-09-19"  required>
            </div>

            <div>
                <label class="validationCustom04">Adress email:</label>
                <input type="email" class="form-control" name="email" id="validationCustom04" placeholder="hkouadiotoh@gmail.com" required> <br>
            </div>  
            
            <div class="text-center">
                <button type="submit" class="btn btn-success mg-4 center" name="submit">Enregistrer</button>
            </div> &nbsp;

          </form> 
    </div>
</div>

<!--Javasript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>