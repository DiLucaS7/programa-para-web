# Exercícios de PHP

Projeto com exercícios de programação em PHP, organizados por aula. O ambiente
usa Docker Compose e a imagem oficial `php:8.3-cli`, sem exigir a instalação do
PHP na máquina.

## Requisitos

- Docker instalado e em execução (Docker Desktop no Windows).
- Docker Compose v2.

## Iniciar o ambiente

Na pasta do projeto, execute:

```sh
docker compose up -d
```

Na primeira execução, o Docker baixa a imagem `php:8.3-cli`. O código da pasta
`src/` é montado no contêiner em `/app`; alterações nos arquivos ficam
disponíveis sem reconstruir a imagem.

## Executar um exercício

Use `docker compose exec` para executar um arquivo PHP no contêiner. Por
exemplo:

```sh
docker compose exec php php /app/aula-02/questao1.php
```

Troque o caminho pelo arquivo que deseja executar. Para abrir um terminal no
contêiner:

```sh
docker compose exec php sh
```

Este projeto usa a imagem `php:8.3-cli`, adequada para executar scripts pela
linha de comando; ela não inicia um servidor web.

## Estrutura

```text
src/
├── aula-02/
├── aula-03/
├── aula-04/
├── aula-05/
├── aula-06/
└── media.php
```

## Parar o ambiente

```sh
docker compose down
```