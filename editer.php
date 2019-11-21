<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editer Un Etudiant</title>
</head>
<body>
    <?php 
        include 'client.class.php';
        $cl= new Client;
        $cl->updateClient($_POST['Id'],$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['phone']);
        header('Location:index.php');
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Editer le client</h3>
        </div>
        <fieldset>
            <legend>Etudiant</legend>
            <form action="" method="post">
                <input type="hidden" value="<?= $data['id'] ?>" name="id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Prénom</label>
                            <input type="text" value="<?= $data['prenom'] ?>" required name="firstname" class="form-control" id="firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Nom</label>
                            <input type="text" value="<?= $data['nom'] ?>" required name="lastname" class="form-control" id="lastname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value="<?= $data['email'] ?>" required name="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" value="<?= $data['tel'] ?>" required name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-success">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-info">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>