# Revisão - Relações entre classes
 
## Has-A (Ter)
* Associação
* Uma classe A possiu *referência* a B, isto é, A possui atributos ou parâmetros de B
* A é "como se fosse" B
* Relação variável

## Is-A (Estar)
* Herança
* Uma classe B que *extends* A, isto é, B possui acesso automático aos membros públicos de A
* B é um subtipo de A
* Relação estática

### Exemplo
![Diagrama do exemplo1](aula6/img1.png "")

## Sobrescrita (Override)
É quando dois métodos partilham do mesmo nome e assinatura. Eles são diferenciados pela classe aos quais residem;
Entre essas classes deve ocorrer uma relação de herança para que isso aconteça.
![Diagrama com Override](aula6/img2.png "")
O tarifar de Cliente será "escondido" quando algum tarifar() de alguma subclasse for chamado.