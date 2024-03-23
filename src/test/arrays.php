<?php 
 $names = ['victor', 31 , 'henrique' , 'mendes'];
    
 $persons = [
     'name' => 'victor' , 'sobrenome' => 'henrique', 'idade'=> 31 , 
     'formação' => [
         'graduação' => 'ADB',
         'ano_da_formação' => '2017',
         'experiencias' => [
             'php' => 'websis'
         ],
     ],
 ];

 var_dump ($persons['formação']['experiencias']['php']);


 // print_r($names) ;