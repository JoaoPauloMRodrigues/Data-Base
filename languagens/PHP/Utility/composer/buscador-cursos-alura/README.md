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
> 4. ***composer require <pacote.>*** => instala  nova dependencia .
> 4. ***composer dumpautoload*** => atualiza somente o autoload.

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

