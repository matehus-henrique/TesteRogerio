# Desafio: CRUD de Perfis e Relatórios usando Laravel

Este desafio consiste em criar um sistema CRUD (Create, Read, Update, Delete) para gerenciar perfis e relatórios utilizando o framework Laravel. O sistema permite a criação, visualização, atualização e exclusão de perfis e relatórios, bem como o estabelecimento de relacionamentos entre eles.

## Funcionalidades

### Perfil

- CRUD de Perfis: Implementação das operações de criação, leitura, atualização e exclusão de perfis.
- Campos: Nome, Sobrenome, Data de Nascimento e Gênero.
- Associação com Relatórios: Cada perfil pode estar associado a um ou mais relatórios.

### Relatório

- CRUD de Relatórios: Implementação das operações de criação, leitura, atualização e exclusão de relatórios.
- Campos: Título e Descrição.
- Associação com Perfis: Um relatório pode ter um ou mais perfis associados.
- Exibição de Perfis: Na página de visualização de um relatório, é exibida uma grade com os perfis associados a ele.

### Geração de PDF e Envio por E-mail

- Após a criação de um relatório, o sistema gera um arquivo PDF contendo as informações relevantes.
- O arquivo PDF é enviado por e-mail para um destinatário pré-configurado.

## Demonstração



## Configuração

Para executar o projeto, siga as etapas abaixo:

1. Clone o repositório para sua máquina local.
2. Certifique-se de ter o PHP (versão >= 7.4) e o Laravel (versão 8/9) instalados.
3. Execute o comando `composer install` para instalar as dependências do Laravel.
4. Renomeie o arquivo `.env.example` para `.env` e configure as informações de conexão com o banco de dados.
5. Execute as migrations com o comando `php artisan migrate` para criar as tabelas do banco de dados.
6. Execute o servidor de desenvolvimento com o comando `php artisan serve`.
7. Acesse o sistema através do navegador no endereço `http://localhost:8000`.

.
