<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #f4f4f4; }
        .btn { padding: 5px 10px; text-decoration: none; border-radius: 3px; }
        .btn-add { background: green; color: white; }
        .btn-edit { background: orange; color: white; }
        .btn-delete { background: red; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Lista de Contatos</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-add">Adicionar Novo Contato</a>

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
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->contact }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                    <a href="{{ route('contacts.show', $contact->id) }}">Ver Detalhes</a> |
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-edit">Editar</a>
                    
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
