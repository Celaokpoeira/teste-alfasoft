# Teste Técnico - Alfasoft (Laravel)

Este repositório contém a resolução do teste técnico para a vaga de desenvolvedor PHP/Laravel na Alfasoft. O projeto é um gerenciador de contatos (CRUD) robusto, com sistema de autenticação e validações rigorosas.

## 🚀 Funcionalidades Implementadas

- **CRUD Completo**: Listagem, criação, visualização, edição e exclusão de contatos.
- **Autenticação de Usuário**: Sistema de acesso restrito para operações de escrita (Create, Edit, Delete).
- **Validação de Dados**:
  - Nome: Mínimo de 6 caracteres.
  - Contato: Exatos 9 dígitos numéricos.
  - Unicidade: E-mail e Contato são únicos no banco de dados.
- **Soft Deletes**: Registros excluídos são mantidos no banco de dados com marcação de data, conforme exigido.
- **Arquitetura**: Uso de `FormRequests` para validação e `Resource Controllers` com middlewares de proteção.

## 🔐 Credenciais de Acesso (Requisito Adicional)

O sistema permite a visualização da lista e detalhes por qualquer visitante. As ações de gerenciamento são restritas ao administrador:

- **Usuário:** `admin@admin.com`
- **Senha:** `123456`

## 🛠️ Tecnologias Utilizadas

- PHP 8.1+
- Laravel 10
- SQLite/MySQL (Eloquent ORM)
- Git (Versionamento)

## 📦 Como Instalar e Rodar Localmente

1. Clone o repositório:
   ```bash
   git clone [https://github.com/Celaokpoeira/teste-alfasoft.git](https://github.com/Celaokpoeira/teste-alfasoft.git)
