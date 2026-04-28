<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .error { color: red; background: #fee; padding: 10px; }
        label { display: block; font-weight: bold; margin-top: 15px; }
        input { display: block; padding: 8px; width: 300px; border: 1px solid #ccc; }
        button { background: orange; color: white; padding: 10px 20px; border: none; cursor: pointer; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Editar Contato</h1>

    @if ($errors->any())
        <div class="error">
            <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Nome:</label>
        <input type="text" name="name" value="{{ $contact->name }}" required>

        <label>Contato (9 dígitos):</label>
        <input type="text" name="contact" value="{{ $contact->contact }}" required maxlength="9">

        <label>E-mail:</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>

        <button type="submit">Atualizar Contato</button>
        <a href="{{ route('contacts.index') }}">Voltar</a>
    </form>
</body>
</html>
