<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{ url('/login') }}" method="post">
        <table>
            @csrf
            <tr>
                <td>Username</td>
                <td><input type="email" name="email" placeholder="Masukan email" id=""></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" placeholder="Masukan password" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>