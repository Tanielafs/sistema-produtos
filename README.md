🛒 Sistema de Gerenciamento de Produtos

Um sistema simples em PHP + MySQL, desenvolvido para demonstrar as operações fundamentais de um CRUD: Create, Read, Update e Delete.
Ideal para estudos e projetos acadêmicos.

📌 Funcionalidades
✔️ Cadastrar Produto
Formulário com nome, descrição e preço
Inserção no banco de dados usando INSERT

✔️ Listar Produtos
Exibição de todos os produtos cadastrados

Botões de editar e excluir na tabela
✔️ Editar Produto
Formulário pré-preenchido
Atualização via UPDATE

✔️ Excluir Produto
Remoção do produto via DELETE
Confirmação antes de excluir (se você quiser adicionar depois)

🗂️ Tecnologias Utilizadas
Tecnologia	Uso
PHP	Lógica backend e comunicação com MySQL
MySQL	Banco de dados da aplicação
HTML	Estrutura das páginas
CSS	Estilização e layout (tema alaranjado 🍊)
XAMPP	Ambiente de desenvolvimento local
🛢️ Estrutura do Banco de Dados
Crie o banco com o nome:
produtos_db


Tabela:
CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);

📁 Estrutura de Pastas
/produtos
│── index.php          -> Lista de produtos
│── add.php            -> Formulário de cadastro
│── edit.php           -> Edição de produtos
│── delete.php         -> Exclusão de produtos
│── db.php             -> Conexão com MySQL
│── style.css          -> Estilo do sistema

🚀 Como Rodar o Projeto

1️⃣ Instale o XAMPP
2️⃣ Coloque a pasta produtos dentro de:

C:\xampp\htdocs\

3️⃣ Inicie o Apache e o MySQL no XAMPP
4️⃣ Crie o banco no phpMyAdmin
5️⃣ Acesse no navegador:

http://localhost/produtos

🎨 Layout e Estilo

O projeto utiliza um tema:
🍊 Laranja moderno
⚪ Branco clean
⚫ Detalhes em preto para contraste

Os botões possuem:
efeito hover
cantos arredondados
espaçamento responsivo

👩‍💻 Desenvolvido por
Taniela de Freitas Santos
Projeto acadêmico – CRUD em PHP e MySQL
