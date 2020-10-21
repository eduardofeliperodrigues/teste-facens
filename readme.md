<h1 align="center">Teste Estágio Facens</h1>

## Descrição:
<br>
<p align="justify">Este respositório contem as intruções e os scripts criados para o teste de conhecimentos para estágiario do Smart Campus FACENS</p>

<br>
<hr>
<br>

## Tabela de conteúdos:
<br>
<!--ts-->
   * [Objetivos](#objetivos)
   * [Instalação](#instalação)
   * [Como usar](#como-usar)
      * [Pre Requisitos](#pre-requisitos)
      * [Local files](#local-files)
      * [Remote files](#remote-files)
   * [Tecnologias](#tecnologias)
<!--te-->
<br>
<hr>
<br>

## Objetivos:
<br>
<p align="justify">O objetivo deste teste foi avaliar a capacidade do canditado em: </p>

<!--ts-->
   * Utilização da linguagem PHP
       * Criação de endpoints
           * Receber dados através dos metodos GET e POST
       * Criação de tabelas no MySQL
       * Persistencia dos dados recebidos no MySQL

   * Utilização da linguagem Python
        * Requests em uma URL com GET e POST
        * Utilização de libs como datetime e requests
   
   * Utilização do sistema operacional Linux
        * Instalação de aplicações
        * Utilização de banco de dados
        * Acessos FTP e SSH
<!--te-->

<br>
<hr>
<br>

## Instalação:
<br>
<p align="justify">Para a simulação é necessário utilizar o PHP, apache2 e MySQL, a instalação de ambos pode ser feita de duas formas:</p>

<!--ts-->
   * Por um pacote de arquivos para servidos como XAMPP ou WAMP
   * Por instalação  e configuração manual dos serviços
<!--te-->

<p align="justify">Para o teste optei pela instalação manual dos serviços em uma maquina virtual com ubuntu 20.01 LTS no WSL (Windows Subsystem for Linux). Abaixo seguem os links para instalação e configuração de tudo o que é necessário. </p>

<!--ts-->
   * [WSL](#https://docs.microsoft.com/pt-br/windows/wsl/install-win10)
   * [Apache2 - PHP - MySQL no WSL](#https://www.youtube.com/watch?v=H9TYo2dp8Qw)
   * [Configuração do MySQL](#https://www.diegobrocanelli.com.br/mysql/comandos-basicos-mysql-no-terminal/)
<!--te-->

<br>
<hr>
<br>

## Como foi desenvolvido:
<br>
<p align="justify">Dentro deste repositório existem 3 arquivos PHP e um Python.</p>

<p align="justify">Seguindo a ordem de pedidos, foi criado primeiramente o script createdb.php, que cria a tabela sensores dentro do MySQL com 4 colunas: id, sensorID que é o indentificador de cada sensor, date_time que é a data e hora de envio deste dado para o endpoint, e predict que seria o dado que o sensor coletou.</p>
 
<p align="justify">O segundo script é o index.php que é o arquivo principal que recebe os dados de uma requisição POST (que recebe os dados no header da requisição), foi utilizada a função $_POST que coleta os dados enviados e insere os mesmos dentro de variaveis, e são inseridos na tabela criada com o primeiro script. </p>

<p align="justify">O terceiro script que está nomeado como get.php, faz o mesmo que o segundo script mas recebe os dados com a função $_GET, que recebe os dados atraves de query strings, e os salva no banco de dados.</p>

<p align="justify">O quarto e último script é em pythn, e está nomeado comom requests.py, este scrit trabalha como cliente do endpoint, fazendo requisições POST ou GET (conforme configurações) e enviando os dados gerados aleatóriamente para a simulação.</p>

### Para o funcionamento correto das requisições e persistencia dos dados, os arquivos com dados do banco de dados, como senha e usuário, devem ser alterados e alimentados com a configuração da maquina/servidor que está utilizando.