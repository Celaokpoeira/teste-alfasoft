<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Contato - {{ $contact->name }}</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 40px; color: #333; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        .detail-group { margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .detail-group:last-child { border-bottom: none; }
        .label { font-weight: bold; color: #7f8c8d; display: block; font-size: 0.9em; text-transform: uppercase; margin-bottom: 5px; }
        .value { font-size: 1.1em; color: #2c3e50; }
        .actions { display: flex; gap: 10px; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; justify-content: center; }
        .btn { padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold; border: none; cursor: pointer; transition: background 0.3s; font-size: 1em; }
        .btn-edit { background-color: #f39c12; color: white; }
        .btn-edit:hover { background-color: #e67e22; }
        .btn-delete { background-color: #e74c3c; color: white; }
        .btn-delete:hover { background-color: #c0392b; }
        .btn-back { background-color: #95a5a6; color: white; text-align: center; display: block; width: fit-content; margin: 20px auto 0; }
        .btn-back:hover { background-color: #7f8c8d; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Contato</h1>

        <div class="detail-group">
            <span class="label">ID do Registro</span>
            <span class="value">{{ $contact->id }}</span>
        </div>

        <div class="detail-group">
            <span class="label">Nome Completo</span>
            <span class="value">{{ $contact->name }}</span>
        </div>

        <div class="detail-group">
            <span class="label">Número de Contato</span>
            <span class="value">{{ $contact->contact }}</span>
        </div>

        <div class="detail-group">
            <span class="label">Endereço de E-mail</span>
            <span class="value">{{ $contact->email }}</span>
        </div>

        <div class="detail-group">
            <span class="label">Data de Criação</span>
            <span class="value">{{ $contact->created_at->format('d/m/Y \à\s H:i') }}</span>
        </div>

        <div class="actions">
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-edit">Editar Contato</a>
            
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="margin: 0;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir este contato?')">Excluir Contato</button>
            </form>
        </div>

        <a href="{{ route('contacts.index') }}" class="btn btn-back">← Voltar para a Lista</a>
    </div>
</body>
</html>

