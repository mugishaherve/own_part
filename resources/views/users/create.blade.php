<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>


    <div>
        <form method="post" action="{{route('user.store')}}">
            @csrf
            @method('post')
            <label for="">Firstname</label>
            <input type="text" name="firstname" placeholder="Firstname">
            <label for="">Lastname</label>
            <input type="text" name="lastname" placeholder="Lastname">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Email">
            <label for="">Phone</label>
            <input type="text" name="phone_number" placeholder="Phone">
            <label for="">Address</label>
            <input type="text" name="address" placeholder="Address">
            <input type="submit" value="Create">
        </form>
    </div>

</body>

</html>