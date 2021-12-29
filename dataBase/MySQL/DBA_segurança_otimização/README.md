# ADM - MySQL, Segurança e otimização do banco

---

## DBA (*Database administrator*) 

> - Avaliar e instalar o ambiente MYSQL;
> - Configurar o acesso a base de dados;
> - Manter o banco de dados com performance;
> - Manter os dados através de processos de Backup;
> - Auxiliar a área de desenvolvimento na manutenção dos dados;
> - Monitorar a instalação do MYSQL;
> - Configuração do ambiente;
> - Administrar os usuários de acesso.

----

## Connections.xml

> Replicar conexões MySQL, apenas copiando o arquivo Connections.xml,geralmente no caminho : (***AppData\Roaming\MySQL\Workbench***)

---

## Tuning de Hardware (**performatizar** o ambiente )

> - Existem 4 maneiras de configurar o ambiente do MYSQL para fazer tuning;
> - Esquema e índices, mysqld Tuning e Tuning de sistema operacional;
> - Ênfase ao Tuning usando o mysqld e tuning de Hardware.
>
> ---
>
> ### Hardware
>
> - Preferência a sistema operacional de 64 bit;
> - Ver relação entre RAM e base de dados;
> - Ver tipo de leitura de disco;
> - Usar controladora de disco RAID. 
>
> ---
>
> ### Variáveis de ambiente
>
> - O comando SHOW STATUS mostra situação atual das variáveis de ambiente
>
> - Temos dois tipo: GLOBAL e SESSION
>
> - Ficar armazenadas nos arquivos my.ini (Windows) ou my.cnf (Linux)
>
> - Possui duas diretivas:[mysqld] - para globais e [cliente] - para sessions
>

---

## Mecanismo de armazenamento 

> - 20 grandes mecanismos de armazenamentos são disponíveis.
> - Mecanismos de armazenamento permite que haja uma separação entre a armazenagem  e o código principal do banco de dados.
> - Os mais usados são MyISAM, InnoDB e MEMORY.
>
> ---
>
> ### MyISAM

> - Não é transacional e não implementa mecanismos de bloqueio;
> - Rápido para leitura;
> - Problemático para muitas gravações de vários usuários
>

> **Características MyISAM** 
>
> > - Não transacional;
> > - Nenhuma chave estrangeira suporta indicies FULLTEXT para correspondência de texto;
> > - Nenhum cache de dados Cache de índice - pode ser especificado pelo nome;
> > - Implementa os índices HASH e BTREE;
> > - Bloqueio no nível da tabela;
> > - Atividade de leitura muito rápida, adequada para DataWarehouses;
> > - Dados compactados.
>
> ---
>
> ### InnoDB
>
> - O mecanismo de armazenamento transacional  mais usado é o mecanismo de armazenamento InnoDB.
> - O InnoDB trouxe suporte para chaves estrangeiras para o mysqld.
>
> **Características InnoDB** 
>
> > - Suporte transacional completo;
> > - Bloqueio de nível de linha suporte de chave estrangeira;
> > - Indexação usando indicies BTREE;
> > - Cache de buffer configurável de ambos os indicies e dados;
> > - Backup online sem bloqueio.
>
> ----
>
> ### Memory
>
> - Nenhum suporte de chave estrangeira;
> - Muito rápido ler e escrever atividade devido a ser inteiramente na memoria;
> - Bloqueio no nível da tabela.

---

## Backup

> ### BACKUP Lógico
>
> > - mysqldump - para criação de Backups Lógicos;
> >
> > Sintaxe : mysqldump [options]
> >
> > - Usuário, senha, servidor
> > - --all-databases é a opção que diz que BACKUP será completo.
> > - .> <nome da saída> redireciona a saída do backup.
> > - Para incluir Stored Procedures e eventos do banco de dados usamos --routines e --events.
> >
> > EX :
> >
> > ![ex_mysqldump](D:\sudeni\repo_studies\dataBase\MySQL\DBA_segurança_otimização\ex_mysqldump\ex_mysqldump.PNG)
>
> BACKUP Físico;



## **Nota**

> Comando para ver aonde os arquivos estão sendo salvos no disco :
>
> > *SHOW VARIABLES WHERE Variable_Name LIKE '%dir% ';*

