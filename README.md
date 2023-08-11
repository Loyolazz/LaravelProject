# Projeto Laravel

Este é um projeto Laravel de aprendizado e para ser executado usando Docker. 

## Configuração do Ambiente

1.  **Permissões de Edição:**

Certifique-se de ter as permissões necessárias para editar a pasta do projeto. Use o seguinte comando para ajustar as permissões:

``bash
sudo chown -R "seu-usuario":"seu-usuario" application

## Configuração do Laravel

### Subir o Ambiente Docker:
Execute o seguinte comando para iniciar os contêineres do projeto:

``bash
sudo docker-compose up

### Iniciar o Projeto Laravel:
Execute o seguinte comando para iniciar novo projeto Laravel chamado "application" usando o Composer:

``bash
sudo docker-compose exec app bash

### Instalar as Dependências:
Com o projeto Laravel iniciado, instale as dependências:

``bash
composer install

### Configurando o Arquivo .env:
O arquivo .env contém as configurações de ambiente para o seu projeto. Você pode criar uma cópia do arquivo de exemplo .env.example e renomeá-la como .env usando o seguinte comando:

``bash
cp .env.example .env

### Gerando a Chave de Aplicativo:

``bash
php -r "echo base64_encode(random_bytes(32));"


Agora o ambiente Docker Laravel está configurado e pronto para desenvolvimento. 
Abra o navegador e acesse http://localhost para visualizar a página inicial do Laravel.


Para mais detalhes sobre o projeto Laravel e suas configurações, consulte a documentação oficial do Laravel em https://laravel.com/docs.
