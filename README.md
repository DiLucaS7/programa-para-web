# PHP Activities

Este repositório contém atividades de programação em PHP, incluindo exercícios de:

- estruturas de decisão
- seleção
- entrada e saída via terminal
- uso de operadores lógicos e relacionais

## Estrutura

- `src/aula-01/` - exercícios da primeira atividade
- `src/aula-02/` - exercícios da segunda atividade
- `src/aula-03/` - exercícios da terceira atividade

## Como executar

Entre na pasta da questão e rode:

```bash
php questao1.php
```

Ou, se estiver usando Docker:

```bash
docker compose up -d
docker compose exec php bash
cd /app/aula-02
php questao1.php
```

## Requisitos

- PHP 8.3
- Docker (opcional, caso prefira executar no container)
