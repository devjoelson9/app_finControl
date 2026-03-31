# Estrutura do Banco de Dados

## Descrição

Modelagem do banco de dados para o sistema de gestão financeira pessoal.

---

## Tabela: usuarios

| Campo      | Tipo      | Descrição           |
| ---------- | --------- | ------------------- |
| id         | bigint    | Identificador único |
| nome       | string    | Nome do usuário     |
| email      | string    | Email (único)       |
| password   | string    | Senha criptografada |
| created_at | timestamp | Data de criação     |
| updated_at | timestamp | Data de atualização |

---

## Tabela: contas

| Campo      | Tipo      | Descrição               |
| ---------- | --------- | ----------------------- |
| id         | bigint    | Identificador           |
| usuario_id | bigint    | FK para usuarios        |
| nome       | string    | Nome da conta           |
| tipo       | string    | carteira, banco, cartão |
| saldo      | decimal   | Saldo atual             |
| created_at | timestamp | Data de criação         |
| updated_at | timestamp | Data de atualização     |

---

## Tabela: categorias

| Campo      | Tipo      | Descrição           |
| ---------- | --------- | ------------------- |
| id         | bigint    | Identificador       |
| usuario_id | bigint    | FK para usuarios    |
| nome       | string    | Nome da categoria   |
| tipo       | string    | receita ou despesa  |
| created_at | timestamp | Data de criação     |
| updated_at | timestamp | Data de atualização |

---

## Tabela: receitas

| Campo        | Tipo      | Descrição           |
| ------------ | --------- | ------------------- |
| id           | bigint    | Identificador       |
| usuario_id   | bigint    | FK para usuarios    |
| conta_id     | bigint    | FK para contas      |
| categoria_id | bigint    | FK para categorias  |
| valor        | decimal   | Valor da receita    |
| descricao    | string    | Descrição opcional  |
| data         | date      | Data da receita     |
| created_at   | timestamp | Data de criação     |
| updated_at   | timestamp | Data de atualização |

---

## Tabela: despesas

| Campo        | Tipo      | Descrição           |
| ------------ | --------- | ------------------- |
| id           | bigint    | Identificador       |
| usuario_id   | bigint    | FK para usuarios    |
| conta_id     | bigint    | FK para contas      |
| categoria_id | bigint    | FK para categorias  |
| valor        | decimal   | Valor da despesa    |
| descricao    | string    | Descrição opcional  |
| data         | date      | Data da despesa     |
| created_at   | timestamp | Data de criação     |
| updated_at   | timestamp | Data de atualização |

---

## Tabela: metas

| Campo          | Tipo      | Descrição           |
| -------------- | --------- | ------------------- |
| id             | bigint    | Identificador       |
| usuario_id     | bigint    | FK para usuarios    |
| nome           | string    | Nome da meta        |
| valor_objetivo | decimal   | Valor a atingir     |
| valor_atual    | decimal   | Valor acumulado     |
| data_limite    | date      | Prazo da meta       |
| created_at     | timestamp | Data de criação     |
| updated_at     | timestamp | Data de atualização |

---

## Relacionamentos

* Um usuário possui várias contas

* Um usuário possui várias categorias

* Um usuário possui várias receitas

* Um usuário possui várias despesas

* Um usuário possui várias metas

* Uma conta pertence a um usuário

* Uma receita pertence a um usuário, conta e categoria

* Uma despesa pertence a um usuário, conta e categoria

---

## Observações

* Todas as tabelas devem usar chave estrangeira (FK)
* Utilizar ON DELETE CASCADE para manter integridade
* Índices recomendados em campos de busca (usuario_id, data)
* Valores monetários devem usar decimal(10,2)
