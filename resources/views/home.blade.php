<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAUD AL-BAROKAH</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">PAUD AL-BAROKAH</a>

    <div>
        <a class="btn btn-light btn-sm" href="/login">Login Admin</a>
    </div>
  </div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="text-center mt-5 p-3 bg-light">
    <small>© 2026 PAUD AL-BAROKAH</small>
</footer>

</body>
</html>