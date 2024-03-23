<?php

//SECTION -  [trutty-e-falsy]

/*REVIEW 
    Seguinte, o simbolo ! (pegará o valor boleano contrário ao valor dele);
    Já´ o !! (Pegará o verdadeiro valor boleano dele)
    Ou sejá :  No caso da String, ele verificará se ela é preenchida (contém algum valor)
*/ 

 //NOTE - Se a string não estivar preenchida, imprima victor / se estiver não imprime nada
    if (!'') {
        echo 'victor';
    };

 //NOTE - pega o valor contrário
    var_dump (!'teste');

    var_dump (!!null);