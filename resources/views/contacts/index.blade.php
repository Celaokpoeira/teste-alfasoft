<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos - Gerenciador</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 40px; color: #333; }
        .container { max-width: 1000px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .header-flex { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; border-bottom: 2px solid #eee; padding-bottom: 15px; }
        h1 { color: #2c3e50; margin: 0; }
        .auth-actions { display: flex; gap: 10px; align-items: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
        th { background-color: #fcfcfc; color: #7f8c8d; text-transform: uppercase; font-size: 0.85em; letter-spacing: 0.5px; }
        tr:hover { background-color: #f9fbfb; }
        .btn { padding: 8px 12px; text-decoration: none; border-radius: 4px; font-weight: bold; border: none; cursor: pointer; transition: background 0.3s; font-size: 0.85em; display: inline-block; text-align: center; }
        .btn-add { background-color: #27ae60; color: white; padding: 10px 20px; font-size: 1em; }
        .btn-add:hover { background-color: #219150; }
        .btn-show { background-color: #3498db; color: white; }
        .btn-show:hover { background-color: #2980b9; }
        .btn-edit { background-color: #f39c12; color: white; }
        .btn-edit:hover { background-color: #e67e22; }
        .btn-delete { background-color: #e74c3c; color: white; }
        .btn-delete:hover { background-color: #c0392b; }
        .btn-logout { background-color: #7f8c8d; color: white; padding: 10px 20px; font-size: 1em; }
        .btn-logout:hover { background-color: #95a5a6; }
        .actions-cell { display: flex; gap: 5px; }
        .empty-state { text-align: center; padding: 40px; color: #7f8c8d; font-style: italic; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-flex">
            <h1>Lista de Contatos</h1>
            
            <div class="auth-actions">
                @auth
                    <a href="{{ route('contacts.create') }}" class="btn btn-add">+ Novo Contato</a>
                    <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                        @csrf
                        <button type="submit" class="btn btn-logout">Sair</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-show">Entrar (Admin)</a>
                @endauth
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Contato</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                <tr>
                    <td>#{{ str_pad($contact->id, 4, '0', STR_PAD_LEFT) }}</td>
                    <td style="font-weight: bold; color: #2c3e50;">{{ $contact->name }}</td>
                    <td>{{ $contact->contact }}</td>
                    <td>{{ $contact->email }}</td>
                    <td class="actions-cell">
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-show">Ver</a>
                        
                        @auth
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-edit">Editar</a>
                            
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Excluir este contato?')">Excluir</button>
                            </form>
                        @endauth
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="empty-state">Nenhum contato cadastrado ainda.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
