## Sobre o Projeto

Projeto desenvolvido para análise de conhecimento técnico da empresa emCash.

Neste projeto é possivél realizar o cadastros de triângulos e retangulos, onde apartir das medidas inseridas é feito o calcula da área dos mesmos.

As rotas para cadastro estão descritas abaixo mas também pode ser visualizado resultados e exemplos na documentação https://documenter.getpostman.com/view/19568572/UVksLZn8 .

### Triângulos

Para realizar o cadastros triângulos utilizamos rotas com o metódo POST http://127.0.0.1:8000/api/triangles passando como parâmetro suas medidas 'side_1','side_2' e 'side_3'.

Caso os valores formem um triângulo, com a validação que garante que o valor da base seja menor que a soma das outra medidas, o calculo da base é realizado e já inserido no banco de dados.

Para retornar todos cadastrados no banco utilizamos a metódo GET http://127.0.0.1:8000/api/triangles e para retornar apenas um com todas as informações utilizamos o GET passando o id que desejamos visualizar GET http://127.0.0.1:8000/api/triangles/1

### Retângulos 

Para realizar o cadastros retângulos utilizamos rotas com o metódo POST http://127.0.0.1:8000/api/rectangles passando como parâmetro suas medidas 'side_1','side_2','side_3','side_4'.

Também é feita a validação para garantir que os valores formem um retângulo, o calculo da base é realizado e já inserido no banco de dados.

Para retornar todos cadastrados no banco utilizamos a metódo GET http://127.0.0.1:8000/api/rectangles e para retornar apenas um com todas as informações utilizamos o GET passando o id que desejamos visualizar GET http://127.0.0.1:8000/api/rectangles/1

### Organização

Decidi usar uma trait para fazer os calculos matemáticos que resultam nas respectivas areas dos poligônos.

### Teste

Foi criado um teste que garanti que a conexão com o banco esta sendo realizada e que é possivél fazer o cadastro dos polígonos

### Docker
Para utilizar o docker será necessário utilizar os comandos abaixo
entre no container do php e atualize o composer
docker exec -it php bash
composer update

#### Configuração do banco 
MYSQL_USER: emcash
MYSQL_PASSWORD: root
MYSQL_DATABASE: emcash
MYSQL_ROOT_PASSWORD: root

### Sem Docker
Para utilizar sem o docker basta intallar o composer e a versão do php acima do 7.4.
Criar um database chamado emcash, alterar as informações a do banco como:
DB_PORT=3306
DB_DATABASE=emcash
DB_USERNAME=root
DB_PASSWORD=

para o utilizado em sua maquina, e rodar o comando php artisan migrate.