<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche d'inscription au stage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h2 {
            text-align: center;
            text-decoration: underline;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 200px;
        }
        input, textarea {
            width: 300px;
            padding: 5px;
        }
        .radio-group {
            margin-left: 200px;
        }
        button {
            margin-top: 20px;
            padding: 8px 15px;
        }
    </style>
</head>
<body>

<h2>Fiche d'inscription au stage</h2>

<form>

<div class="form-group">
<label>Nom et prénom :</label>
<input type="text" name="nom">
</div>

<div class="form-group">
<label>CIN :</label>
<input type="text" name="cin">
</div>

<div class="form-group">
<label>Date et lieu de naissance :</label>
<input type="text" name="naissance">
</div>

<div class="form-group">
<label>Adresse :</label>
<input type="text" name="adresse">
</div>

<div class="form-group">
<label>Niveau d’étude :</label>
<input type="text" name="niveau">
</div>

<div class="form-group">
<label>Tél :</label>
<input type="tel" name="tel">
</div>

<div class="form-group">
<label>Etablissement :</label>
<input type="text" name="etablissement">
</div>

<div class="form-group">
<label>Organisme d’accueil :</label>
<input type="text" name="organisme">
</div>

<div class="form-group">
<label>Type du stage :</label>
<input type="text" name="type_stage">
</div>

<div class="form-group">
<label>Sujet du stage :</label>
<textarea name="sujet"></textarea>
</div>

<div class="form-group">
<label>Période du stage :</label>
<input type="date" name="date_debut"> au 
<input type="date" name="date_fin">
</div>

<div class="form-group">
<label>Stage payé :</label>
<div class="radio-group">
<input type="radio" name="paye" value="oui"> Oui
<input type="radio" name="paye" value="non"> Non
</div>
</div>

<div class="form-group">
<label>Montant de prime :</label>
<input type="number" name="prime">
</div>

<button type="submit">Envoyer</button>

</form>

</body>
</html>


---
