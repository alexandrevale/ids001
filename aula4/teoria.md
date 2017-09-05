# Modificadores de Acesso (encapsulamento)

## Acesso para atributo

* Leitura (get): obtenção de um valor. 
    Exemplo: $var = $this->atributo + 1;
    Exemplo: echo $this->atributo;
    Exemplo: $this->metodo($atributo);
* Escrita (set): quando inicializamos ou modificamos um atributo.
    Exemplo: $this->atributo = 5;
    Exemplo: $this->atributo = $this->atributo + 5;

## Acesso para método

* Chamada
    Exemplo: $this->metodo();

## Níveis de proteção

### Public
O acesso é liberado para qualquer classe.
### Protect
O acesso é liberado para a própria classe e suas subclasses.
### Private
O acesso é liberado apenas para a própria classe.

Observação: no JAVA temos mais um modificador de acesso. Consultar: https://docs.oracle.com/javase/tutorial/java/javaOO/accesscontrol.html

