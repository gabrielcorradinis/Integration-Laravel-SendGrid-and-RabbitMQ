# Integration-Laravel-SendGrid-and-RabbitMQ
Projeto para envio de e-mails utilizando o Laravel, uma plataforma gratuita de envio de emails (SendGrid) e o RabbitMQ para a fila.


## Pré-requisitos

- Docker instalado. (Caso for Windows, é necessário do WSL 2 instalado e habilitado no Docker).
- Conta na plataforma SendGrid, uma chave API habilitada e emails de remetente devidamente cadastrados.

## Para instalar e utilizar o projeto, siga estas etapas:

- Clone do projeto em uma pasta.
- Renomear o arquivo '.env.example' para '.env'.
- Popular com as credenciais no .env, sendo elas: 
  - Dados do seu Banco de dados.
  - Dados do seu RabbitMQ (user/password padrão é 'guest').
  - Dados do SendGrid (user 'apikey' e password 'SuaChaveAPI', Address e Name: dados cadastrados na plataforma).
- Para concluir a instalação, utilize os seguintes comandos via terminal:
  - Acesse a pasta `src/`
  - `make up` para subir o container do Docker.
  - `make install` para instalar as dependencias no container.
  - `make permissions` para dar as devidas permissões.
- Para acessar na Web, utilize o link `localhost:8384`.
- Para acessar o RabbitMQ na Web, utilize o link `localhost:15672`.
 
- Para integrar a aplicação, basta preencher o formulário que está presente no botão `Crie um novo disparo`. 
    - (No remetente é importante utilizar um e-mail válido dentro da plataforma do SendGrid).
- Após registrado o disparo é necessário executar na pasta `src/` do projeto os seguintes comandos: primeiro: `make php` para acessar o PHP dentro do conatiner e `php artisan queue:work` para processar os dados da fila, isso pela falta do supervisor.
  
  ## Observações
- A integração para a parte do Front, onde exibira os dados dos emails nos cards e o supervisor para a fila, não foi completamente desenvolvida até o momento.
