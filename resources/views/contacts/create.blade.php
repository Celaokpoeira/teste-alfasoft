<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Contato</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .error { color: red; background: #fee; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
        label { display: block; font-weight: bold; margin-top: 15px; }
        input { display: block; padding: 8px; width: 300px; border: 1px solid #ccc; }
        button { background: green; color: white; padding: 10px 20px; border: none; cursor: pointer; margin-top: 20px; }
        .back { color: #666; text-decoration: none; margin-left: 10px; }
    </style>
</head>
<body>
    <h1>Adicionar Novo Contato</h1>

    @if ($errors->any())
        <div class="error">
            <strong>Ops! Verifique os erros abaixo:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Nome Completo (mínimo 6 caracteres):</label>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Ex: Marcelo Ferreira" required>

        <label>Contato (Exatos 9 dígitos):</label>
        <input type="text" name="contact" value="{{ old('contact') }}" placeholder="Ex: 912345678" required maxlength="9">

        <label>E-mail:</label>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="exemplo@email.com" required>

        <button type="submit">Salvar Contato</button>
        <a href="{{ route('contacts.index') }}" class="back">Cancelar e Voltar</a>
    </form>
</body>
</html>
