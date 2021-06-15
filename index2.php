<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerciceE2</title>
</head>
<body>


<?php
$_GET['age'] = (int) $_GET['age'];
if ((int)($_GET['age'])<18)
{
	{
        echo 'âge non valide';
	}
}
else if ((int)($_GET['age'])>130)
{
   echo 'vous êtes un elfe';
} else { 
echo $_GET['nom']. ' ' . $_GET['prenom']. ' ' . $_GET['age'];
}
?>



    
</body>
</html>



