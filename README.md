## Sobre o Projeto

Projeto desenvolvido para análise de conhecimento técnico da empresa emCash.

Neste projeto é possivél realizar o cadastros de triângulos e retangulos, onde apartir das medidas inseridas é feito o calcula da área dos mesmos.

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
