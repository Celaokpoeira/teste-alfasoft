<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato - {{ $contact->name }}</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 40px; color: #333; }
        .container { max-width: 500px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        .error { color: #c0392b; background: #fee; padding: 15px; border-radius: 5px; margin-bottom: 25px; border: 1px solid #fab1a0; font-size: 0.95em; }
        .error ul { margin: 0; padding-left: 20px; }
        label { display: block; font-weight: bold; margin-top: 20px; color: #7f8c8d; font-size: 0.9em; text-transform: uppercase; margin-bottom: 5px; }
        input[type="text"], input[type="email"] { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 1em; color: #2c3e50; background-color: #fcfcfc; transition: border-color 0.2s; }
        input[type="text"]:focus, input[type="email"]:focus { border-color: #f39c12; outline: none; box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.15); background-color: white; }
        .actions { display: flex; gap: 15px; margin-top: 35px; padding-top: 25px; border-top: 1px solid #eee; justify-content: center; }
        .btn { padding: 12px 24px; text-decoration: none; border-radius: 5px; font-weight: bold; border: none; cursor: pointer; transition: background 0.3s; font-size: 1em; text-align: center; min-width: 150px; }
        .btn-update { background-color: #f39c12; color: white; }
        .btn-update:hover { background-color: #e67e22; }
        .btn-cancel { background-color: #95a5a6; color: white; }
        .btn-cancel:hover { background-color: #7f8c8d; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Contato</h1>

        @if ($errors->any())
            <div class="error">
                <strong>Verifique os erros abaixo:</strong>
                <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
            </div>
        @endif

        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label for="name">Nome Completo</label>
            <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}" required>

            <label for="contact">Número de Contato (9 dígitos)</label>
            <input type="text" id="contact" name="contact" value="{{ old('contact', $contact->contact) }}" required maxlength="9" pattern="[0-9]{9}">

            <label for="email">Endereço de E-mail</label>
            <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}" required>

            <div class="actions">
                <button type="submit" class="btn btn-update">Atualizar Contato</button>
                <a href="{{ route('contacts.index') }}" class="btn btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
