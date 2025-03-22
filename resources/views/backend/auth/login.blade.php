<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <div class="container">
    <h2>Login Admin</h2>

    @if ($errors->any())
    <div style="color: red;">
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
    </div>
  @endif

    <form action="{{ url(config('admin.prefix') . '/login') }}" method="POST">
      @csrf
      <label>Email:</label>
      <input type="email" name="email" required><br><br>

      <label>Password:</label>
      <input type="password" name="password" required><br><br>

      <button type="submit">Login</button>
    </form>
  </div>
</body>

</html>