# Sobre o projeto

O seguinte projeto se refere a uma atividade da disciplina de Banco de Dados, onde, após a modelagem do mesmo, foi pedido para implementar um sistema web que utiliza-se dela. A partir disso, o sistema faz todo o processo para cadastro de nota fiscal e de repasse para alguma instituição de caridade.

# Sobre a instalação

Primeiramente, é preciso clonar o repositório. Depois, configure corretamente o arquivo `.env` em relação ao banco de dados. Após isso, execute os seguintes comandos, em ordem:

```
composer update

php artisan migrate

php artisan db:seed

php artisan serve
```