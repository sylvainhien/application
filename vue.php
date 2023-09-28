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
<body>
    
<nav class="navbar navbar-ligth justify-content-center fs-3 mb-5" style="background-color:  rgb(213, 221, 218);" >Liste des participants</nav>

<div class="container ">
    
    <a href="Index.php" class="btn btn-dark mb-3">enregistrer un nouveau participant</a>
    <table class="table table-hover text-center table table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Numéro de téléphone</th>
      <th scope="col">Adress email</th></th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
    include "db_connexion.php";
    $sql= "SELECT * FROM `activité`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        ?>

<tr>
      <td> <?php echo $row['id']?></td>
      <td> <?php echo $row['nom']?></td>
      <td> <?php echo $row['prenom']?></td>
      <td> <?php echo $row['numero2telephone']?></td>
      <td> <?php echo $row['email']?></td>

    </tr>
    
        <?php
    }
    ?>
 
  </tbody>
</table>
  </div>

<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>