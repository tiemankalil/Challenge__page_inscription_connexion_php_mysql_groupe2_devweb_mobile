<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div id="container">
        <!-- zone de connexion -->
        <div class="row">
                <div class="col-sm-12 col-lg-12">
        
            <form action="traitement.php" method="POST">
                <h1>Inscription</h1>
                
                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer votre nom " name="nom" required>
                <label><b>Prénoms</b></label>
                <input type="text" placeholder="Entrer votre prenom" name="prenom" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="m_passe" required>
                 <label><b>Téléphone</b></label>
                <input type="tel" placeholder="Entrer votre téléphone" name="num_tel" required>

                <input type="submit" id='submit' value='INSCRIPTION' >
                               
    
            </form>

            </div>
        </div>
     </div>

      
    
</body>
</html>