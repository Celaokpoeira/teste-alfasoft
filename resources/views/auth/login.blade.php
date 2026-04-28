<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Gerenciador de Contatos</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-card { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        label { display: block; margin-top: 15px; color: #7f8c8d; font-size: 0.9em; text-transform: uppercase; }
        input { width: 100%; padding: 12px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; background: #3498db; color: white; padding: 12px; border: none; border-radius: 5px; margin-top: 25px; cursor: pointer; font-weight: bold; }
        .error { color: red; font-size: 0.8em; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="login-card">
        <h1>Acesso Restrito</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label>E-mail</label>
            <input type="email" name="email" required placeholder="admin@admin.com">
            <label>Senha</label>
            <input type="password" name="password" required placeholder="123456">
            @if($errors->any()) <div class="error">{{ $errors->first() }}</div> @endif
            <button type="submit">Entrar no Sistema</button>
        </form>
    </div>
</body>
</html>
