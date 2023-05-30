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

Aqui estão algumas capturas de tela da interface do sistema:

<img src="https://github.com/matehus-henrique/TesteRogerio/assets/53536966/8b22eea1-25f9-4e97-864d-7d56ee0e2a5f" width="400" height="100">

<img src="https://github.com/matehus-henrique/TesteRogerio/assets/53536966/6a5309d6-d558-4268-a32a-c6abce6f5889" width="400" height="100">

<img src="https://github.com/matehus-henrique/TesteRogerio/assets/53536966/3bc9607c-9d0c-4744-a467-0394aedc3a6b" width="400" height="100">

<img src="https://github.com/matehus-henrique/TesteRogerio/assets/53536966/9c83f540-dfab-48c6-aa9a-97a86b027b3d" width="400" height="100">

<img src="https://github.com/matehus-henrique/TesteRogerio/assets/53536966/366dac9d-e936-4dba-ad05-d3358432eefd" width="400" height="100">


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
