# Arquitetura divida em: uma aplicação php no backend e uma aplicação em react no frontend 

Toda infraestrutura do projeto foi produzida para rodar em ambiente de containers docker. 
Siga os seguintes passo para rodar as duas aplicações: 

1\) Gere o build necessário para realizar as configurações e instalar as depedências para os projetos funcionarem executando o comando: 

`docker-compose build --no-cache` 

2\) Instale as dependências da aplicação backend com o comando: 

`docker-compose run --rm --no-deps --user root:root php sh -ci 'composer install'` 

se o comando acima não funcionar use o comando: 

`docker-compose run --rm --no-deps --user root:root php sh -ci 'composer install'` 

3\) Instale as dependências da aplicação frontend com o comando: 

`docker-compose run --rm --no-deps --user root:root nodejs sh -ci 'npm install'` 

se o comando acima não funcionar use o comando: 

`docker-compose run --rm --no-deps --user root:root nodejs bash -ci 'npm install'` 

4\) Monte os containers com o comando: 

`docker-compose up` 

5\) Somente após ver a mensagem "Compiled successfully!" tente acessar as aplicações nos seguintes endereços: 

`http://localhost` (backend) 

`http://localhost:3000` (frontend) 

6\) Abra outra instancia de terminal para rodar comandos do docker e entre no container php7 com o comando: 

`docker container exec php7 -ti /bin/sh` 

se não funcionar tente usar o comando: 

`docker container exec php7 -ti /bin/bash` 

7\) Execute os test automatizados com o comando: 

`/vendor/bin/phpunit` 
