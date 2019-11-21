<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Gestion Etudiant</title>
</head>
<body>
  <div class="container py-3">
      <div class="jumbotron text-center">
         <h2>Liste des Etudiants</h2>
      </div> 
      <a href="create.php" class="btn btn-primary">Nouveau Etudiant</a>

      <table border="1" class="table table-hover">
        <thead>
          <tr>
             <th> Id</th>
             <th>Nom</th>
             <th>Prénom</th>
             <th>Email</th>
             <th>Telephone</th>
          </tr>
        </thead>
        <tbody>
        <?php
           include 'client.class.php';
           $client=new Client;
           $listclt=$client->ReadAllClients();
           while($data=$listclt->fetch())
           {?>
        <tr>
            <td><?=$data['Id']?></td>
            <td><?=$data['firstname']?></td>
            <td><?=$data['lastname']?></td>
            <td><?=$data['email']?></td>
            <td><?=$data['phone']?></td>
            <td> 
            <a href='editer.php?id=<?=$data['Id'] ?>' role='button'>editer</a>
            <a href='delete.php?id=<?= $data['Id'] ?>' role='button'>supprimer</a>                              
            </td>
        </tr>
          <?php }
          ?> 
            
        </tbody>
      </table>
  
  </div>
    
</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</html>