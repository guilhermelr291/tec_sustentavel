Estrutura do Projeto:

  - docker-compose.yml: Arquivo de configuração do Docker Compose que define os serviços (web e db) e suas configurações.
    
  - init.sql: Script SQL para criar a tabela produto e inserir dados de exemplo no banco de dados MySQL.
    
  - Dockerfile: Usado para configurar o servidor web e copiar os arquivos do projeto para o container.


Execução:
  1. Clonar o Repositório
  2. Executar os Containers: docker-compose up


Acessar a Aplicação: http://localhost:8080
  
