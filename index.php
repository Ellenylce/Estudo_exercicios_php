<?php
//1. Crie uma variável em PHP, atribua um valor e exiba na página.
$boas_vindas = "Seja bem vindo";
echo $boas_vindas;
echo "<br>";

// 2. Exiba na tela as variáveis nome, idade, endereco e curso fazendo a
// concatenação dos valores dentro do seguinte texto.
// a. “Ola eu sou Fulano, tenho XX anos, moro em XYZ e faço o
// curso de ZZZ no SENAC”
$nome = 'Ellen';
$idade = 26;
$endereco = 'Redenção';
$curso = 'Programador Web';
echo 'Olá eu sou '.$nome.' tenho '.$idade.' anos, moro na '.$endereco.' e estou cursando o curso de '.$curso.'.';

// 3. Faça um programa que leia 2 variáveis e exiba na tela: soma, subtração,
// multiplicação e divisão.
echo "<br>";
$valor_um = 4;
$valor_dois = 2;

echo "A soma de ".$valor_um." e ".$valor_dois." é ".$valor_um + $valor_dois.";<br>";
echo "A subtração de ".$valor_um." e ".$valor_dois."é ".$valor_um - $valor_dois.";<br>";
echo "A multiplicação de ".$valor_um." e ".$valor_dois."é ".$valor_um * $valor_dois.";<br>";
echo "A divisão de ".$valor_um." e ".$valor_dois."é ".$valor_um / $valor_dois.".<br>";

// // 4. Faça um programa que leia 2 números e exiba quem é maior, menor ou se eles são
// iguais.
$numero1 = 2;
$numero2 = 2;
if($numero1 == $numero2){
    echo "O número ".$numero1." e número ".$numero2." são iguais.<br>";
}elseif($numero1 > $numero2){
    echo "O número ".$numero1." é maior que o numero. ".$numero2."<br>";
}else{
    echo "O número ".$numero1." é menor que o numero ".$numero2."<br>";
}

// 5. Faça um programa que leia uma string e verifique se ela contém as letras ‘a’ e ‘o’.
// Caso sim escreva “Contem”, caso contrário escreva “Nao Contem”.
// a. Dica: use a função do php str_contains() que recebe como argumentos
// a string a ser lida e o valor a ser procurado.
$palavra = '"cair"';
if ((str_contains($palavra, 'a') || str_contains($palavra, 'A')) && (str_contains($palavra, 'o') || str_contains($palavra, 'O'))) {
	echo 'A palavra '.$palavra.' contém a letra "a" e "o" ';
}else{
    echo 'A palavra '.$palavra.' não contém a letra "a" e "o" ';
}

// 6. Crie uma função que retorna o próprio argumento enviado para ela. Faça o chamado
// dessa função exibindo na tela o resultado.
function soma($valor1,$valor2){
    return $valor1 + $valor2;
}
$valor1 = 2;
$valor2 = 2;
$resultado_soma = soma($valor1,$valor2);
echo'<br>A soma de '.$valor1.' e '.$valor2.' é '.$resultado_soma;
echo '<br>';

// 7. Crie uma função de verificação de senha. Ela deve retornar true para senhas válidas
// e false para senhas inválidas.
// a. Regras:
// i. Senha deve ter mais de 8 caracteres
// ii. Deve ter pelo menos uma letra maiúscula
// iii. Deve ter pelo menos uma letra minúscula
// iv. Deve conter pelo menos um número
// b. Dica, use as funções ctype do PHP
// i. ctype_upper() - verifica maiúsculas
// ii. ctype_lower() - verifica minúsculas
// iii. ctype_digit() - verifica números

function verificarSenha($senha) {
    // Verifica se a senha tem mais de 8 caracteres
    if (strlen($senha) < 8) {
        return false; //se for falso para aqui
    }
    
    // verificar os requisitos
    $temMaiuscula = false;
    $temMinuscula = false;
    $temNumero = false;
    
    // Percorre cada caractere da senha para verificar os requisitos
    // Inicia um loop for que percorre cada caractere da senha. 
    // O loop continua até que $i seja menor que o comprimento da senha (strlen($senha)).
    // Verifica se o caractere atual ($senha[$i]) é uma letra maiúscula usando a função ctype_upper. 
    // Se for uma letra maiúscula, a condição será verdadeira.
    // Se o caractere não for maiúsculo, verifica se é uma letra minúscula usando a função ctype_lower.
    //  Se for uma letra minúscula, a condição será verdadeira.
    // Se o caractere não for maiúsculo nem minúsculo, verifica se é um dígito numérico usando a função ctype_digit.
    //  Se for um número, a condição será verdadeira.
    for ($i = 0; $i < strlen($senha); $i++) {
        if (ctype_upper($senha[$i])) { //verifica se é maiuscula o caracter
            $temMaiuscula = true;
        } elseif (ctype_lower($senha[$i])) {
            $temMinuscula = true;  //verifica se é minuscula
        } elseif (ctype_digit($senha[$i])) {
            $temNumero = true;  // sverifica se o caracter é numero
        }
        
        // Se todos os requisitos forem atendidos, pode retornar true
        if ($temMaiuscula && $temMinuscula && $temNumero) {
            return true;
        }
    }
    
    // Retorna false se algum dos requisitos não foi atendido
    return false;
}

// Exemplos de uso
$senha = "Senha123";
echo "Senha (" . $senha . ") é válida? " . (verificarSenha($senha) ? "Sim" : "Não") . "<br>"; 



// 8. Usando o operador ternário faça uma questão que leia uma idade e indique se é
// maior de idade ou não.

echo ($idade >= 18 )? 'Maior de idade': 'Menor de idade';

// 9. Percorra o array abaixo e exiba o nome e a nota dos aprovados (nota maior ou igual a 7).
$alunos = array (
    'Junior' => 9.5,
    'Maria' => 10,
    'Paulo' => 6,
    'Ana' => 8.5,
    'Pedro' => 5.5,
    'Julia' => 6.5
);

foreach($alunos as $nome => $nota){
    if($nota >= 7){
        echo '<br>'.$nome.' - '.$nota;
    }
}

// 10. Crie uma função que calcule a área de um círculo. Fórmula: a = pi * raio ao quadrado.
// Valor teste raio = 4, área ~ 50.27
$pi = 3.14;
$raio = 4;
$area = $pi * ($raio*$raio);
echo '<br>A área do circulo é: '.$area;  //esqueci de fazer com a function 
echo'<br>';



// 11. Crie uma função que receba um número como parâmetro e retorna um array de
// todos os números pares de 0 até o número enviado. Chame a função, depois,
// percorra e exiba os valores do array resultante.
// a. Exemplo:

// i. entrada 10
// ii. saída = um array com [0, 2, 4, 6, 8, 10]

function pares($numero){
    $pares = array();
    for($i = 0; $i <= $numero; $i += 2){
        $pares [] = $i;
    }
    return $pares;
}
$numero = 10;
$resultado = pares($numero);

foreach($resultado as $numeros){
    echo $numeros."\n";
}
echo'<br>';

// 12. Crie uma função que recebe um ano como parâmetro e devolve a qual século ele
// pertence. A contagem de século é do ano 1 ao ano 100, ou seja, 1901-2000 é século
// 20 e 2001-2100 é século 21.
// a. exemplo
// i. entrada: 1950 // saída: século 20;
// ii. entrada: 2005 // saída: século 21;
// iii. entrada: 1900 // saída: século 19;

function determinarSeculo($ano) {
    // Se o ano for divisível por 100 e restar 0, então, esses anos marcam o fim de um século. Assim, 1900 é o último ano do século 19 e 2000 é o último ano do século 20.
    // Caso contrário, o século é o ano dividido por 100, mais 1. Esses anos pertencem ao próximo século. Assim, 1901 é o início do século 20 e 2001 é o início do século 21.
    if ($ano % 100 == 0) {
        $seculo = $ano / 100;
    } else {
        $seculo = intval($ano / 100) + 1; //intval:converte o valor para numero inteiro sem casas decimais
    }
    return "Século " . $seculo;
}
// Exemplos de uso
$ano = 1950;
echo determinarSeculo($ano) . "<br>"; 


// 13. Crie uma função que recebe uma string e verifica se ela é ou não um Palíndromo.
// Palíndromos são palavras que se pode ler, indiferentemente, da esquerda para a
// direita ou vice-versa. Exemplo: arara.

function verificarPalindromo($string) {
    // strtolower: convert string em minuscula
    // str_replace: busca o valor na string e substitue por um novo
    // Ex: str_replace ('$busca_na_string', '$substitui_a_string', '$string')
    // Remove espaços se a string for um texto  e substitui sem os espaços (em branco) e converte para minúsculas (strtolower) para a comparação
    $string = strtolower(str_replace(' ', '', $string));
    
    // Inverte a string
    $reversa = strrev($string);
    
    // Verifica se a string original é igual à sua reversa
    if ($string === $reversa) {
        return true;
    } else {
        return false;
    }
}


$string = "arara";
echo $string . " é um palíndromo? " . (verificarPalindromo($string) ? "Sim" : "Não") . "<br>"; 
?>

