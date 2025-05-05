<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if($errors->has('login_error'))
        <p style="color:red;">{{ $errors->first('login_error') }}</p>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
