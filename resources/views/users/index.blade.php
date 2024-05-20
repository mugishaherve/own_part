<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <div>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>

            </tr>
            @foreach($users as $user)
            <tr>

                <td>{{$user->id}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->address}}</td>


            </tr>
            @endforeach

        </table>
    </div>

</body>

</html>