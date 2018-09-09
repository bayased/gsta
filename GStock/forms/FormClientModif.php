<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>


Modifier client
<form action="../action/ClientAction.php" method="post">
<p>
    <input type="text" name="id" disabled="disabled" />
    <input type="text" name="raisonSocial" />
    <input type="text" name="nom" />
    <input type="text" name="prenom" />
    <input type="text" name="adresse" />
    <input type="text" name="ville" />
    <input type="text" name="codePostal" />
    <input type="text" name="pays" />
    <input type="text" name="telephone" />
    <input type="text" name="fax" />
    <input type="text" name="mail" />
    <input type="hidden" name="action"  value="MO"/>
    <input type="submit" value="Valider " />
</p>

<p><a href="../index.html"> Retour page principale </a></p>
</form>
</body>
</html>