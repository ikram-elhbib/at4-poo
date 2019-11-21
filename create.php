<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau Etudiant</title>
</head>
<body> 
     <?php  
             require 'client.class.php';
             $cl=new Client;
             $cl->creatClient($_POST['Id'],$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['phone']);
             header('Location:index.php');
     ?>
     <div class="container py-3">
          <div class="jubotron">
               <h3>Ajouter un nouveau Etudiant</h3>
          </div>
          <fieldset>
             <legend> Nouveau Etudiant</legend>
             <form action="" method="post">
             <div class="row">
                <div class="col-md-6">
                   <div class="form-form">
                       <label for="firstname">Firstname</label>
                       <input type="text" required name="firstname" class="form-control" id="firstname">
                   </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" required name="lastname" class="form-control" id="lastname">
                        </div>
                    </div>
             </div>
            <div class="row">
            <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" required name="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" required name="phone" class="form-control" id="phone">
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
                </div>
             </form>
          </fieldset>
     </div>

</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>