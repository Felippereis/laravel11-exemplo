<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importar CSV</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file" accept=".csv">
        <button type="submit" id="fileBtn">Importar</button>
    </form>
    {{-- {{ dd($users) }} --}}
    @foreach ($users as $user)
        {( $user->id )}
    @endforeach
</body>
</html>