<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Contato</title>
    <style>
        body { font-family: sans-serif; margin: 40px; line-height: 1.6; }
        .card { border: 1px solid #ccc; padding: 20px; width: 400px; border-radius: 8px; background: #f9f9f9; }
        .label { font-weight: bold; color: #555; }
        .btn-back { display: inline-block; margin-top: 20px; text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h1>Detalhes do Contato</h1>

    <div class="card">
        <p><span class="label">ID:</span> {{ $contact->id }}</p>
        <p><span class="label">Nome:</span> {{ $contact->name }}</p>
        <p><span class="label">Contato:</span> {{ $contact->contact }}</p>
        <p><span class="label">E-mail:</span> {{ $contact->email }}</p>
        <p><span class="label">Criado em:</span> {{ $contact->created_at->format('d/m/Y H:i') }}</p>
    </div>

    <a href="{{ route('contacts.index') }}" class="btn-back">← Voltar para a lista</a>
</body>
</html>
