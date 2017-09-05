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

Observação: no JAVA temos mais um modificador de acesso. [Consultar documentação](https://docs.oracle.com/javase/tutorial/java/javaOO/accesscontrol.html)

## Métodos acessores (GETTERS e SETTERS)

### "GETTER"
Permite acesso de **leitura** em um atributo.

``` 
public function getAtributo(){
    return $this->atributo;
}
```

### "SETTER"
Permite acesso de **escrita** em um atributo.

``` 
public function setAtributo($atributo){
    $this->atributo = $atributo;
}
```

##Modificador static
Desacopla o membro da instância, ou seja, ele vira o membro da classe.