<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha256-93wNFzm2GO3EoByj9rKZCwGjAJAwr0nujPaOgwUt8ZQ=" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <table class="table table-stripper">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Point</th>
                        <th>Win</th>
                        <th>Lose</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($players as $player)
                    <tr>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->point }}</td>
                        <td>{{ $player->win }}</td>
                        <td>{{ $player->lose }}</td>
                        <td>
                            <a class="btn btn-success" href="/players/{{ $player->id }}/win">Win</a>
                            <a class="btn btn-danger" href="/players/{{ $player->id }}/lose">Lose</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
