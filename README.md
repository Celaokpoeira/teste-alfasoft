# Teste Técnico - Alfasoft (Laravel)

Este repositório contém a resolução do teste técnico para a vaga de desenvolvedor PHP/Laravel na Alfasoft. O projeto consiste em um gerenciador de contatos (CRUD) com regras específicas de validação e funcionalidades nativas do framework.

## 🚀 Funcionalidades Implementadas

- **CRUD Completo**: Listagem, criação, visualização, edição e exclusão de contatos.
- **Validação de Dados**:
  - Nome: Mínimo de 6 caracteres.
  - Contato: Exatos 9 dígitos numéricos.
  - Unicidade: E-mail e Contato são únicos no banco de dados.
- **Soft Deletes**: Registros excluídos não são removidos permanentemente do banco, seguindo as melhores práticas.
- **Arquitetura**: Uso de `FormRequests` para validação e `Resource Controllers`.

## 🛠️ Tecnologias Utilizadas

- PHP 8.1+
- Laravel 10
- SQLite/MySQL (Eloquent ORM)
- Git (Versionamento)

## 📦 Como Instalar e Rodar

1. Clone o repositório:
   ```bash
   git clone [https://github.com/Celaokpoeira/teste-alfasoft.git](https://github.com/Celaokpoeira/teste-alfasoft.git)
