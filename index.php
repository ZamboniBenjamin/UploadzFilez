<?php include'config.php'; 
/////////////////////////////////////////
///////////UploadzFilez Version : 1.0//////////////////
//////////By Hretix.fr///////////////////
//Fichier : Index
//Version : 1
//Auteur : Zamboni Benjamin
?>
<html>
<head>
<title><?php echo $titre; ?></title>
</head>
<body>
<form method="POST" action="upload.php" enctype="multipart/form-data">
     <!-- On limite le fichier à 100Ko -->
     <input type="hidden" name="MAX_FILE_SIZE" value=<?php echo $tailles; ?>>
     Fichier : <input type="file" name="file" value="Parcourir">
     <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>
<br>
Propulsé par <a href="www.hretix.fr">UploadzFilez</a>
</body>
</html>
