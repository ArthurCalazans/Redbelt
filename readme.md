<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Primeiros Passos

Para começar a usar o mini sistema, siga os passos.

- Extraia o arquivo no htdocs (se for xampp) deixando o caminho assim: C:\xampp\htdocs\redbelt; dentro dessa pasta terá a raiz do projeto.
- Configure um virtual host.
- Configure uma conexão com o banco, usuario root, senha vazia (vazia mesmo, não é a palavra vazia kkk), banco de dados teste.
- Rode o php artisan migrate, depois rode php artisan db:seed.
- Poderá acessar o site no endereço do virtual host criado.

## Virtual Host no Xampp

Acesse o arquivo 

```sh
C:\windows\system32\driver\etc\host
```

Coloque esse código no final do arquivo

```sh
127.0.0.1       redbelt
```

Acesse o arquivo

```sh
C:\xampp\apache\conf\extra\httpd-vhosts.conf
```

Coloque esse código no final do arquivo

```sh
<VirtualHost *:80>
    ServerAdmin arthurcalazans1@gmail.com
    DocumentRoot "C:/xampp/htdocs/redbelt/public"
    ServerName redbelt
    ErrorLog "logs/Redbelt.log"
    CustomLog "logs/Redbelt.log" common
</VirtualHost>
```

Pronto, foi criado um virtual host no seu xamp, pra acessar o projeto é só por redbelt/ no seu navegador.


## PHP ARTISAN

```sh
php artisan migrate
php artisan db:seed
```