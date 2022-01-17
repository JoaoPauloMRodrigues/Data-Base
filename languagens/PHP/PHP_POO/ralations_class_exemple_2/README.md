# Relacionamento entre classes

---

> Os objetos tem relações entre eles: um professor ministra uma disciplina para alunos numa sala, um cliente faz uma reserva de alguns lugares para uma data, etc. Essas relações são representadas também no diagrama de classe. Geralmente as classes não estão sós e se relacionam entre si. O relacionamento e a comunicação entre as classes definem responsabilidades , temos 3 tipos : Associações : Agregação e composição, Generalização (herança), Dependências
>
> 

---

## Associação (Agregação)

> São relacionamentos estruturais entre instâncias e especificam que objetos de uma classe estão ligados a objetos de outras classes. Podemos ter associação unitária etc. A associação pode existir entre classes ou entre objetos. Uma associação entre a classe Professor e a classe disciplina (um professor ensina uma disciplina) significa que uma instância de Professor (um professor específico) vai ter uma associação com uma instância de Disciplina. Esta relação significa que as instâncias das classes são conectadas, seja fisicamente ou conceitualmente.

---

## Composição

> A composição, diferentemente da agregação, é um relacionamento de contenção. Um objeto (container) CONTÉM outros objetos (elementos). Esses elementos que estão contidos dentro de outro objeto dependem dele para existir. Eles são criados e destruídos de acordo com o seu container. Um exemplo de container poderia ser uma nota fiscal, e seus elementos seriam seus itens. Não faz sentido existir itens de nota fiscal, sem que haja uma nota fiscal onde tais itens estejam contidos. Eles só existem se houver uma nota fiscal da qual eles façam parte. Se a nota fiscal é destruída, todos os seus itens também são, o que não acontece com a agregação, onde, se uma reunião é destruída, seus participantes continuam existindo, pois podem participar de outras reuniões. A composição, na UML, é representada por uma linha com um losango preenchido do lado da classe dona do relacionamento. No primeiro exemplo existem duas classes distintas a primeira é a classe Carro e a segunda é a classe Motor. Imagine que toda classe Carro tenha uma classe Motor, neste exemplo há uma relação entre Carro e Motor de composição, pois o motor está contido na classe Carro.
>
> Um exemplo de composição é a relação entre Livro e Autor são duas classes distintas, onde cada objeto da classe Livro possui um objeto da classe Autor. Neste caso existirá uma relação de composição, pois a classe Autor faz parte da classe Livro.
>
> Uma forma de verificar se uma determinada classe A tem uma relação de composição com uma classe B. É fazer perguntar-se: "A classe A está contida na classe B?". Caso a resposta seja positiva existe uma relação de composição entre as duas classes. Abaixo é possível visualizar alguns exemplos: • Um Livro tem Autor? - SIM – Logo, se usa a composição. • Um Automóvel tem um Carro Antigo ? - NÃO – Logo, não se usa a composição. • Um Automóvel tem Porta ? - SIM – Logo, pode se usar a composição.

---

## Agregação Regular

> Tipo de associação (é parte de, todo/parte) onde o objeto parte é um atributo do todo; a existência do objeto-parte faz sentido, mesmo não existindo o objeto-todo. Por exemplo Carro e rodas: as rodas existem mesmo sem o carro. A agregação, na UML, é representada por uma linha com um losango sem preenchimento do lado da classe dona do relacionamento.
>
> 

---

## Especialização ou Generalização

> Também conhecida como herança, representa as dependências e hierarquias.

---

## Dependência

> São relacionamentos de utilização no qual uma mudança na especificação de um elemento pode alterar a especificação do elemento dependente. A dependência entre classes indica que os objetos de uma classe usam serviços dos objetos de outra classe.
>
> 