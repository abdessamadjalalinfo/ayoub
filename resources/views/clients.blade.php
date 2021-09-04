<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class='container'>

    <div >
        <a type="button" class="btn btn-danger" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <br>
    <br>    
    <table class="table table-dark">
        <thead>
          <tr>
            
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Date Naissance</th>
            <th scope="col">Télephone</th>
            <th scope="col">Email</th>
            <th scope="col">Motif de Résiliation</th>
            <th scope="col">Marque Voiture</th>
            <th scope="col">Puissance Fiscale</th>
          </tr>
        </thead>
        <tbody>
          @foreach($clients as $client)
            <tr>
            <td >{{$client->nom}}</td>
            <td>{{$client->prénom}}</td>
            <td>{{$client->date}}</td>
            <td>{{$client->télephone}}</td>
            <td>{{$client->émail}}</td>
            <td>{{$client->motif_resiliation}}</td>
            <td>{{$client->marque_voiture}}</td>
            <td>{{$client->puissance}}</td>
            
          </tr>
          @endforeach
          
        </tbody>
      </table>
 
</body>
</html>