# Projeto Laravel

Este é um projeto Laravel configurado para ser executado usando Docker Compose. Siga estas etapas para configurar e executar o projeto em seu ambiente local.

## Pré-requisitos

- Docker
- Docker Compose

## Configuração do Ambiente

1. **Clone o Repositório:**

   Clone este repositório em sua máquina local:

   ```bash
   git clone https://github.com/seu-usuario/seu-projeto-laravel.git

## Permissões de Edição:

Certifique-se de ter as permissões necessárias para editar a pasta do projeto. Use o seguinte comando para ajustar as permissões:

```bash
sudo chown -R "seu-usuario":"seu-usuario" application

## Configuração do Laravel

### Subir o Ambiente Docker:
Execute o seguinte comando para iniciar os contêineres do projeto:

```bash
docker-compose up

### Criar o Projeto Laravel:
Crie um novo projeto Laravel chamado "application" usando o Composer:

```bash
docker-compose run --rm app composer create-project --prefer-dist laravel/laravel application

### Instalar as Dependências:
Com o projeto Laravel criado, instale as dependências:

```bash
docker-compose run --rm app composer install

Agora o ambiente Docker Laravel está configurado e pronto para desenvolvimento. 
Abra o navegador e acesse http://localhost para visualizar a página inicial do Laravel.

Lembre-se de substituir "seu-usuario" e "seu-projeto-laravel" pelos detalhes reais do seu projeto. Estas são instruções básicas para configuração, e você pode personalizar o README conforme necessário para fornecer mais informações sobre a estrutura do projeto, comandos úteis e outras informações relevantes.

Para mais detalhes sobre o projeto Laravel e suas configurações, consulte a documentação oficial do Laravel em https://laravel.com/docs.
