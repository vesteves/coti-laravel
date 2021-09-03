<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIMEIRA VIEW</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <select>
                        @foreach($options as $option)
                        <option value="{{ $option->name }}">{{ $option->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>
