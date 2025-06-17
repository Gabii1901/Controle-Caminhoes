# Sistema de Controle de EPIs e Caminhões - GABRIELA MENDES DEMOSSI

Sistema web desenvolvido em PHP utilizando o framework CodeIgniter, com banco de dados MySQL, para controle de entrega de EPIs e gerenciamento da frota de caminhões das empresas.

---
# Sistema de Controle de EPIs e Caminhões

Sistema web desenvolvido em PHP utilizando o framework CodeIgniter 4, com banco de dados MySQL, para gerenciamento da frota de caminhões das empresas e cadastro de usuários com controle de acesso.

---

## 🚀 Funcionalidades atuais

### 🔐 Login e Autenticação
- Cadastro de usuários com nome, CPF, e-mail e senha.
- Senha definida no momento do cadastro.
- Controle de acesso por tipo de usuário (`admin` e `user`).
- Validação de CPF + senha no login.
- Usuários do tipo `admin` podem cadastrar novos usuários pelo painel.
- Sessão segura com `password_hash()` e controle de sessão.

---

### 🚛 Controle de Caminhões
- Cadastro completo de caminhões.
- Campos obrigatórios:
  - Nome do veículo
  - Placa
  - Cor
  - CRLV (data de vencimento)
  - ANTT (número com até 8 dígitos)
  - KM rodados
  - Seguro (data de vencimento)
  - Motorista (opcional)
- Edição, exclusão e listagem de caminhões.
- Mensagens de sucesso e erro após operações.

---

### 🔒 Controle de Acesso
- Usuários `admin` possuem acesso ao cadastro de novos usuários e ao painel completo.
- Usuários `user` possuem acesso restrito, podendo visualizar informações conforme expansão futura.

---

## 🛠️ Tecnologias Utilizadas
- PHP 7.4+
- CodeIgniter 4
- MySQL
- HTML, CSS e JavaScript (frontend simples)
- Sessions e `password_hash()` para autenticação segura

---

## 💾 Estrutura Atual do Banco de Dados
### Tabelas principais:
- **usuarios**
  - id, nome, cpf, email, senha, tipo (admin/user), created_at, updated_at

- **caminhoes**
  - id, nome_veiculo, placa, cor, crlv_vencimento, antt, km_rodados, seguro, motorista, created_at, updated_at

---

## 📜 Observação
> ⚠️ O módulo de Controle de EPIs e Funcionários ainda está em desenvolvimento. Atualmente, o sistema está 100% funcional para gerenciamento de caminhões e controle de usuários.

---

## 🚀 Próximas implementações
- Gestão de EPIs
- Controle de entrega de EPIs por colaborador
- Cadastro de funcionários
- Histórico de entregas de EPIs
- Relatórios

---

## 👩‍💻 Desenvolvido por:
**Gabriela Mendes Demossi**
