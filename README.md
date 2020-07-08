# Summernote-codeigniter-integration
Um projeto que utiliza a biblioteca javascript summernote, que é um editor de texto, juntamente com os frameworks codeignitger 4 e o 3.

A branch do codeigniter 3 é apenas uma demonstração, com o banco de dados, de umas modificações na biblioteca summernote, feitas por mim, para transformar o carregamento de imagens do editor, antes em base 64 (muito pesado), para imagens arquivadas em pastas no repositório. Quando uma imagem que foi carregadano summernote não é adicionada no tabela, as modificações irão excluí-la para que não tenham imagens não utilizadas armazenadas na pasta de uploads. 

A branch do codeigniter 4 já é um projeto mais desenvolvido, além de estar utilizando a versão mais recente do codeigniter, é feito uma página de blogs/notícias utilizando as minhas modificações na biblioteca summernote e utilizando-se de um sistema de usuários que podem cadastrar, editar e excluir uma notícia do blog.

## Como implementar (branch: codeigniter_3)?
1- Rode o script sql em um banco de dados local (Ex: MySQL Workbench).

2- Mova a pasta do projeto para o seu localhost.

3- Certifique-se que o seu PHP, ou seu APACHE, tem as configurações e bibliotecas necessárias para se trabalhar com imagens e arquivos pesados.

4- Quando estiver tudo configurado, basta abrir seu terminal (Ex: git bash) na pasta do projeto e executar o comando `php -S localhost:8080` (seu projeto poderá ser acessado por essa URL).

## Como implementar (branch: codeigniter_4)?

1- Rode o script sql em um banco de dados local (Ex: MySQL Workbench).

2- O codeigniter 4 pode ser rodado em um apache, porém acredito que seja muito mais fácil utilizá-lo apenas com PHP puro. Aqui segue um tutorial rápido, encontrado no início do README de um desenvolvedor para [configurar o codeigniter 4](https://github.com/matheuscastroweb/ci4-crud "matheuscastroweb/ci4-crud").

3- Quando estiver tudo configurado, basta abrir seu terminal (Ex: git bash) na pasta do projeto e executar o comando: `php spark serve` (seu projeto poderá ser acessado por essa URL).

4- Você poderá acessar a parte de painel na URL: localhost:8080/painel, com um usuário inicial com o login: user: admin@admin.com password: admin2020.

#### Autor: [Juan Victor Oliveira Silva](https://github.com/JuanvictorO "JuanvictorO")
