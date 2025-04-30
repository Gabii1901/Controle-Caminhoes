# Sistema de Controle de EPIs e Caminhões - GABRIELA MENDES DEMOSSI

Sistema web desenvolvido em PHP utilizando o framework CodeIgniter, com banco de dados MySQL, para controle de entrega de EPIs e gerenciamento da frota de caminhões das empresas.

---

## 🚀 Funcionalidades

### 🔐 Login com primeiro acesso
- Cadastro de usuário com CPF, e-mail e senha definida no primeiro login
- Validação via email + CPF
- Controle de acesso (pronto para expansão por tipo de usuário)

### 👷 Controle de Funcionários
- Cadastro completo de colaboradores
- Associação com entrega de EPIs

### 🧤 Gestão de EPIs
- Cadastro de Equipamentos de Proteção Individual
- Número do CA e validade por dias
- Registro de entregas e histórico por funcionário

### 🚛 Controle de Caminhões
- Cadastro de caminhões por placa
- Vencimento de documentos: CRLV, ANTT, seguro
- Dados do motorista atual

---

## 🛠️ Tecnologias Utilizadas

- **PHP** 7+
- **CodeIgniter** 3.x
- **MySQL**
- **HTML, CSS e JAVASCRIPT** (para o frontend)
- **Sessions e password_hash()** para login seguro

---

## 💾 Estrutura do Banco de Dados

Tabelas principais:
- `usuarios`
- `funcionarios`
- `epis`
- `entregas_epi`
- `caminhoes`

