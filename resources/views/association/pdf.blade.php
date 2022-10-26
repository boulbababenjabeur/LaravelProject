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
   
 

        <h5 >Name : {{ $association->name }}</h5>
        <h5 >Numero : {{ $association->numero }}</h5>
        <p>Adresse : {{ $association->adresse }}</p>
        <p >Description : {{ $association->description }}</p>
  </div>
     
       
    </hr>
    </div>
</body>
</html>