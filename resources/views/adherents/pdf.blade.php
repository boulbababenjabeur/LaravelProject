<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>
<body>
  <div >Details</div>
  <div >
  
        <h5 >Name et Prenom : {{ $adherents->nom }}  {{ $adherents->prenom }}</h5>
        <p >Addresse : {{ $adherents->addresse }}</p>
        <p >Numero ADH : {{ $adherents->num_adherent }}</p>
        <p >Telephone : {{ $adherents->telphone }}</p>
        <p >Sexe : {{ $adherents->sexe }}</p>
        <p >Date de naissance : {{ $adherents->date_naissance }}</p>
        <p >Ville : {{ $adherents->ville }}</p>
  </div>
     
       
    </hr>
    </div>
</body>
</html>