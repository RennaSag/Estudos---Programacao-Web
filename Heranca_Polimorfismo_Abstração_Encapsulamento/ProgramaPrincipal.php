<?php
require_once 'item.php';
require_once 'livros.php';
require_once 'revista.php';
require_once 'cd.php';
require_once 'dvd.php';

function mostrarSeparador($titulo) {
    echo "\n.........................\n";
    echo "              $titulo              ";
    echo "\n.........................\n";
}

mostrarSeparador("LIVROS");

$livro1 = new Livros(
    1, 
    "Dom Casmurro", 
    "10/01/2022", 
    ["Machado de Assis"], 
    "Companhia das Letras", 
    1899
);

$livro2 = new Livros(
    2, 
    "O Senhor dos Anéis", 
    "15/03/2022", 
    ["J.R.R. Tolkien"], 
    "HarperCollins", 
    1954
);

$livro3 = new Livros(
    3, 
    "Harry Potter e a Pedra Filosofal", 
    "20/05/2022", 
    ["J.K. Rowling"], 
    "Rocco", 
    1997
);


$livro1->imprimirDados();
$livro2->imprimirDados();
$livro3->imprimirDados();


mostrarSeparador("REVISTAS");

$revista1 = new Revista(
    4, 
    "National Geographic", 
    ["National Geographic Society"], 
    "05/02/2022", 
    "Abril 2022", 
    289, 
    "Editora Abril", 
    "Natureza"
);

$revista2 = new Revista(
    5, 
    "Scientific American Brasil", 
    ["Scientific American"], 
    "10/04/2022", 
    "Março 2022", 
    120, 
    "Editora Moderna", 
    "Ciência"
);

$revista3 = new Revista(
    6, 
    "Superinteressante", 
    ["Editora Abril"], 
    "15/06/2022", 
    "Maio 2022", 
    430, 
    "Editora Abril", 
    "Conhecimento Geral"
);


$revista1->imprimirDados();
$revista2->imprimirDados();
$revista3->imprimirDados();


mostrarSeparador("CDs");

$cd1 = new CD(
    7, 
    "Thriller", 
    "03/03/2022", 
    ["Michael Jackson"], 
    "Pop", 
    "9 faixas"
);

$cd2 = new CD(
    8, 
    "The Dark Side of the Moon", 
    "12/04/2022", 
    ["Pink Floyd"], 
    "Rock Progressivo", 
    "10 faixas"
);

$cd3 = new CD(
    9, 
    "Back in Black", 
    "25/05/2022", 
    ["AC/DC"], 
    "Hard Rock", 
    "10 faixas"
);


$cd1->imprimirDados();
$cd2->imprimirDados();
$cd3->imprimirDados();


mostrarSeparador("DVDs");

$dvd1 = new DVD(
    10, 
    "O Poderoso Chefão", 
    ["Francis Ford Coppola"], 
    "01/06/2022", 
    "Filme", 
    "Um clássico do cinema sobre a máfia italiana nos EUA"
);

$dvd2 = new DVD(
    11, 
    "Breaking Bad - Temporada Completa", 
    ["Vince Gilligan"], 
    "15/07/2022", 
    "Série", 
    "Série completa sobre um professor de química que se torna traficante"
);

$dvd3 = new DVD(
    12, 
    "Rock in Rio 2022", 
    ["Diversos Artistas"], 
    "30/08/2022", 
    "Show", 
    "Gravação do festival de música Rock in Rio edição 2022"
);


$dvd1->imprimirDados();
$dvd2->imprimirDados();
$dvd3->imprimirDados();


mostrarSeparador("TODOS OS ITENS DA COLEÇÃO");

$colecao = [
    $livro1, $livro2, $livro3,
    $revista1, $revista2, $revista3,
    $cd1, $cd2, $cd3,
    $dvd1, $dvd2, $dvd3
];

foreach ($colecao as $item) {
    $item->imprimirDados();
}

echo "\n...................................\n";
echo "Total de itens na colecao: " . count($colecao);
echo "\n.....................................\n";
?>