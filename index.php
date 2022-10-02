
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
<div>
  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_name" placeholder="Entrez votre nom">
</div>
<div>
  <label  for="nom">Prénom :</label>
  <input  type="text"  id="firstname"  name="user_firstname" placeholder="Entrez votre nom">
</div>
<div>
  <label  for="courriel">E-mail :</label>
    <input  type="email"  id="courriel"  name="user_email" placeholder="Entrez votre email " required>
</div>
<div>
  <label  for="téléphone">Téléphone :</label>
    <input  type="number"  id="phone"  name="phone" required>
</div>

<div> <label for="thematique">Sujet:</label>
<select id="theme" name="theme">
  <option value=""></option>
  <option value="informatique">Informatique</option>
  <option value="electromenager">Electromenager</option>
  <option value="maison">Maison</option>
  <option value="image,son">Image, Son</option>
</select> 
</div>
<div>
  <label  for="message">Message :</label>
  <textarea  id="message"  name="user_message"></textarea>
</div>
<div class="button">
  <button  type="submit">Envoyer votre message</button>
</div>
</form>
    
</body>



</html>

