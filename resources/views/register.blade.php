<!DOCTYPE html>
<html>
<head>
    <title>Créer un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<h2>Créer un nouvel utilisateur</h2>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<form method="POST" action="/register/submit">

    @csrf
    <div class="mb-3">
        <label>Nom :</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error("name")
        <div class="alert alert-danger">
        {{ $message }}
        @enderror
    </div>
    </div>

    <div class="mb-3">
        <label>Email :</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        @error("email")
        <div class="alert alert-danger">
        {{ $message }}
        @enderror
    </div>

    <div class="mb-3">
        <label>Mot de passe :</label>
        <input type="password" name="password" class="form-control">
        @error("password")
        <div class="alert alert-danger">
        {{ $message }}
        @enderror
    </div>

    <div class="mb-3">
        <label>Confirmer mot de passe :</label>
        <input type="password" name="password_confirmation" class="form-control">
        @error("password")
        <div class="alert alert-danger">
        {{ $message }}
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Créer</button>
</form>

</body>
</html>