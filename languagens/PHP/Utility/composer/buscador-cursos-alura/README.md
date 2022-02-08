# Composer

----

##  Arquivos

> 1. ***composer.json*** =>  É um arquivo JSON colocado na pasta raiz do projeto PHP. Seu objetivo é especificar propriedades comuns do projeto, metadados e dependências, e faz parte de uma vasta gama de projetos existentes;
> 2. ***composer.lock*** => Registra as versões exatas que estão instaladas. Para que você esteja nas mesmas versões com seus colegas de trabalho.



----

## Comandos 

> 1. O composer possui um repositório central de pacotes: https://packagist.org/
> 1. ***composer init***       => Inicializa um ***composer.json*** como os parametros passados;
> 2. ***composer install***  => lê o arquivo ***composer.lock*** e instala as exatas dependências lá definidas;
> 3. ***composer update*** => lê o arquivo ***composer.json***, instala as dependências mais atuais dentro das restrições definidas e atualiza o ***composer.lock***;
> 4. ***composer require <pacote.>*** => instala  nova dependência .
> 4. ***composer dumpautoload*** => atualiza somente o autoload.
> 4. ***composer require --dev <pacote.>***  => instala as dependências  no ambiente dev
> 4. ***composer install --no-dev*** => instala todas as dependências que estão dentro do require, e as de require-dev não.

-----

## Psr4 

> | **Fully Qualified Class Name** | **Namespace Prefix** |   **Base Directory**   |          **Resulting File Path**          |
> | :----------------------------: | :------------------: | :--------------------: | :---------------------------------------: |
> | \Acme\Log\Writer\File\_Writer  |   Acme\Log\Writer    | ./acme-log-writer/lib/ |  ./acme-log-writer/lib/File\_Writer.php   |
> |   \Aura\Web\Response\Status    |       Aura\Web       | /path/to/aura-web/src/ | /path/to/aura-web/src/Response/Status.php |
> |     \Symfony\Core\Request      |     Symfony\Core     | ./vendor/Symfony/Core/ |     ./vendor/Symfony/Core/Request.php     |
> |           \Zend\Acl            |         Zend         |  /usr/includes/Zend/   |        /usr/includes/Zend/Acl.php         |
>
> ----
>
> > **composer.json => autoload, nameSpace referente a pasta : src** 
> >
> > ```json
> >  "autoload": {
> >      "psr-4": {
> >          "Busca\\BuscadorCursos\\": "src/"
> >      }
> > ```
> >
> > 

----

## Classmap

> ### Mapeia classes fora da ps4
>
> > ```json
> > "classmap": [
> >     "./varias_classes_ex.php"
> >  ],
> > ```

----

## Files

> ### Sempre vai ser inserido no autoload
>
> > ```json
> >  "files": [
> >     "./functions.php"
> >     "./helpers.php"
> >     "./views.php"
> >  ],
> > ```
> >
> > 

-----

## Executáveis

> Divisão pacotes Dev do de produção
>
> > ```json
> >  "require": {
> >         "guzzlehttp/guzzle": "^6.3",
> >         "symfony/dom-crawler": "^4.2",
> >         "symfony/css-selector": "^4.2"
> >     },
> >     "require-dev": {
> >         "phpunit/phpunit": "^9.5",
> >         "squizlabs/php_codesniffer": "^3.6"
> >     },
> > ```
>
> ----
>
> Os executáveis ficam dentro da pasta ***vendor\bin***
>
> ```powershell
> \buscador-cursos-alura> vendor\bin\phpcs -help
> ```
>

---

## Scripts

> Atalhos para script na pasta ***composer.json***, não precisa passar o caminho ***vendor/bin***, pois se o comando digitado não existir no sistema operacional, ele automaticamente buscara em  ***vendor/bin***. Pode se também executar qualquer código do sistema operacional e qualquer código php.
>
> > ```json
> > "scripts": {
> >     "cs" : "phpcs --standard=PSR12 src/",
> >     "phan" : "phan --allow-polyfill -parser",
> >     "php" : "nameSpace\\Da\\classe::metodo",
> > }
> > 
> > ------
> > //mais de 1 script
> > //se for um comando criado adiciona o @ na frente
> > 
> > "lista" : [
> >     "@phan",
> >     "@cs"
> > ]
> > 
> > //----- descrição
> > 
> > "scripts-descriptions": {
> >     "lista" : "lista de dois script"
> > }
> > 
> > 
> > ```
> >
> > ### Eventos
> >
> > > ```json
> > >  "post-update-cmd" :[
> > >      "@cs"
> > >  ]
> > > ```
> > >
> > > ***https://getcomposer.org/doc/articles/scripts.md***
> >
> > ### Execução 
> >
> > > ```powershell
> > > composer <nome do script>
> > > ```

