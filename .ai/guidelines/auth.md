# Autenticação e Gestão de Sessão

## Descrição

Módulo responsável pela autenticação de usuários, controle de sessão, recuperação de senha e interface de acesso no sistema de gestão financeira.

---

## Objetivo

* Garantir acesso seguro ao sistema
* Permitir recuperação de conta
* Controlar sessões de usuário
* Fornecer uma experiência de uso simples e intuitiva

---

## Funcionalidades

### 🔐 Autenticação

* Login com email e senha
* Validação de credenciais
* Mensagens de erro claras (ex: "credenciais inválidas")
* Proteção contra acesso não autenticado

### 🚪 Logout

* Encerramento de sessão
* Redirecionamento para tela de login
* Invalidação da sessão no backend

### 🔁 Recuperação de Senha

* Solicitação de reset via email
* Geração de token único e temporário
* Link de redefinição enviado por email
* Validação do token
* Atualização da senha com confirmação

### 🧾 Cadastro (Registro)

* Criação de conta com:

  * Nome
  * Email
  * Senha
* Validação de email único
* Hash de senha

---

## Regras de Negócio

* Email deve ser único
* Senha deve ser armazenada com hash (bcrypt)
* Token de reset expira (ex: 60 minutos)
* Usuário autenticado não pode acessar tela de login novamente
* Rotas protegidas devem exigir autenticação

---

## Fluxos

### Login

1. Usuário acessa tela de login
2. Informa email e senha
3. Sistema valida credenciais
4. Se válido → redireciona para dashboard
5. Se inválido → retorna erro

### Logout

1. Usuário clica em logout
2. Sistema invalida sessão
3. Redireciona para login

### Reset de Senha

1. Usuário clica em "esqueci minha senha"
2. Informa email
3. Sistema envia link com token
4. Usuário acessa link
5. Informa nova senha
6. Sistema atualiza senha

---

## Rotas (Laravel)

### Públicas

* GET /login
* POST /login
* GET /register
* POST /register
* GET /forgot-password
* POST /forgot-password
* GET /reset-password/{token}
* POST /reset-password

### Protegidas

* POST /logout
* GET /dashboard

---

## Controllers

* AuthController

  * login()
  * logout()
  * register()

* PasswordResetController

  * sendResetLink()
  * resetPassword()

---

## Middlewares

* auth → protege rotas privadas
* guest → impede acesso de usuários logados às telas de login/registro

---

## Frontend (UX/UI)

### Telas

* Login
* Cadastro
* Esqueci senha
* Reset de senha

### Boas práticas

* Feedback visual (loading, erro, sucesso)
* Validação no frontend e backend
* Inputs claros e acessíveis
* Botões com estados (disabled/loading)

---

## Segurança

* CSRF protection
* Hash de senha (bcrypt)
* Rate limit em login (anti brute force)
* Tokens seguros para reset

---

## Tecnologias

* Laravel Breeze ou Fortify (recomendado)
* Livewire no formato de componentes que gera o blade e o outro com a logica
* Tailwind CSS

---

## Observações

* Priorizar simplicidade e segurança
* Código reutilizável
* Separação clara entre backend e frontend
