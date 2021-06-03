<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Paises</title>
</head>
<body >
   <h1>Lista de paises</h1>
   <table class="table table-hover">
       <tr class="">
           <th class="table-dark">Nombre</th>
           <th class="table-dark">Capital</th>
           <th class="table-dark">Moneda</th>
           <th class="table-dark">Poblacion</th>
       </tr>
          @foreach ($Naciones as $nombre=> $nacion )
             <tr>
                 <td class="table-danger">{{ $nombre }} </td>
                 <td class="table-info">{{ $nacion ["Capital"]}} </td>
                 <td class="table-danger">{{ $nacion ["Moneda"]}} </td>
                 <td class="table-info">{{ $nacion ["Poblacion"]}} </td>
             </tr>
         @endforeach
   </table>
</body>
</html>
