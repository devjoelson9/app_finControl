# Sistema de Gestão Financeira Pessoal

## Descrição

Sistema web desenvolvido em Laravel para auxiliar pessoas no controle de suas finanças do dia a dia. O objetivo é permitir que o usuário tenha uma visão clara de receitas, despesas, saldo e organização financeira.

---

## Objetivo

* Ajudar usuários a controlar gastos
* Melhorar a organização financeira
* Permitir planejamento de orçamento
* Evitar dívidas e gastos desnecessários

---

## Entidades

* Usuário
* Receita (entrada de dinheiro)
* Despesa (saída de dinheiro)
* Categoria (ex: alimentação, transporte, lazer)
* Conta (ex: carteira, banco, cartão)
* Meta financeira

---

## Regras de Negócio

* Cada usuário só pode visualizar e gerenciar seus próprios dados
* Toda receita deve possuir valor, data e categoria
* Toda despesa deve possuir valor, data e categoria
* O saldo do usuário é calculado automaticamente (receitas - despesas)
* Despesas não podem ter valor negativo
* Categorias podem ser personalizadas pelo usuário
* O sistema deve permitir controle mensal

---

## Funcionalidades

### 👤 Usuário

* Cadastro de usuário
* Login e autenticação
* Atualização de dados pessoais

### 💰 Receitas

* Adicionar receita
* Editar receita
* Excluir receita
* Listar receitas por período

### 💸 Despesas

* Adicionar despesa
* Editar despesa
* Excluir despesa
* Listar despesas por período

### 📊 Controle Financeiro

* Visualizar saldo atual
* Visualizar resumo mensal
* Filtrar por categoria
* Filtrar por data

### 🗂️ Categorias

* Criar categoria
* Editar categoria
* Excluir categoria

### 🎯 Metas Financeiras

* Criar metas (ex: economizar R$1000)
* Acompanhar progresso da meta

---

## Funcionalidades Extras (Opcional)

* Gráficos de gastos
* Alertas de gastos altos
* Exportação de relatórios (PDF/CSV)
* Integração com contas bancárias (futuro)

---

## Fluxo Básico do Sistema

1. Usuário realiza cadastro/login
2. Usuário adiciona receitas
3. Usuário adiciona despesas
4. Sistema calcula saldo automaticamente
5. Usuário visualiza relatórios e resumo financeiro

---

## Tecnologias

* Laravel
* MySQL
* Livewire
* Tailwind CSS

---

## Observações

* Sistema deve ser simples e intuitivo
* Interface amigável para usuários leigos
* Foco em usabilidade e clareza das informações
