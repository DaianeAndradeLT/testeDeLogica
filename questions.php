<?php

new Questions('q4');

class Questions
{

    public function __construct(?string $questionNumber)
    {
        self::run();
    }

    public static function q1(): void
    {
        $indice = 13;
        $soma = 0;
        $k = 0;

        while ($k < $indice) {
            $k++;
            $soma += $k;
        }
        echo "A resposta da 1º questão é: ";
        echo $soma;
    }

    public static function q2(): void
    {
        echo "Digite o número que deseja verificar: ";
        $numero = intval(readline());

        if ($numero == 0) {
            echo "O número $numero pertence a sequência de Fibonacci\n";
            return;
        }

        $a = 0;
        $b = 1;

        while ($b <= $numero) {
            if ($b == $numero) {
                echo "O número $numero pertence a sequência de Fibonacci\n";
                return;
            }
            $temp = $b;
            $b = $a + $b;
            $a = $temp;
        }

        echo "O número $numero não pertence a sequência de Fibonacci\n";
    }

    public static function q3(): void
    {
//Essa sequência é somente de números impares. Cada número é 2 unidades maior que o anterior.
        $a = [1, 3, 5, 7];
        $next_a = end($a) + 2;
        echo "Próximo número da sequência da letra 'a' é: $next_a" . PHP_EOL;


//Essa sequência é de potência de 2. Cada número é o dobro do anterior.
        $b = [2, 4, 8, 16, 32, 64];
        $next_b = end($b) * 2;
        echo "Próximo número da sequência da letra 'b' é: $next_b" . PHP_EOL;

//Essa sequência é de números quadrados inteiro. Seguindo o padrão, cada número é o quadrado de um número inteiro
        $c = [0, 1, 4, 9, 16, 25, 36];
        $next_c = (sqrt(end($c)) + 1) ** 2;
        echo "Próximo número da sequência da letra 'c' é: $next_c" . PHP_EOL;

//Essa sequência é de números quadrados pares.
        $d = [4, 16, 36, 64];
        $next_d = (sqrt(end($d)) + 2) ** 2;
        echo "Próximo número da sequência da letra 'd' é: $next_d" . PHP_EOL;

//Essa é a sequência de Fibonacci, cada número é a soma dos dois anteriores.
        $e = [0, 1, 1, 2, 3, 5, 8];
        $next_e = $e[count($e) - 1] + $e[count($e) - 2];
        echo "Próximo número da sequência da letra 'e' é: $next_e" . PHP_EOL;

//Essa sequência é de números que em portugês começam com D.
        $f = [2, 10, 12, 16, 17, 18, 19, 200];
        echo "Próximo número da sequência da letra 'f' é: 200" . PHP_EOL;

    }

    public static function q4(): void
    {
        $switches = ['off', 'off', 'off'];
        $switches[0] = 'on';
        echo "Vamos ligar o primeiro interruptor e deixar ligado por alguns minutos.\n";

        $switches[0] = 'off';
        $switches[1] = 'on';
        echo "Desligue o primeiro interruptor e ligue o segundo interruptor.\n";

        for ($i = 0; $i < 3; $i++) {
            if ($switches[$i] == 'on') {
                echo "O interruptor " . ($i + 1) . " controla a lâmpada que está acesa.\n";
            } elseif ($switches[$i] == 'off' && $switches[($i + 1) % 3] == 'off') {
                echo "O interruptor " . ($i + 1) . " controla a lâmpada que está apagada e fria.\n";
            } else {
                echo "O interruptor " . ($i + 1) . " controla a lâmpada que está apagada e quente.\n";
            }
        }
    }

    public static function q5(): void
    {
        $string = "Target";
        $inverted = "";

        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $inverted .= $string[$i];
        }

        echo $inverted;
    }

    public static function run(): void
    {
        echo 'Iniciando.' . PHP_EOL . 'Questão 1: ';
        self::q1();

        echo PHP_EOL . 'Questão 2: ';
        self::q2();

        echo PHP_EOL . 'Questão 3: ';
        self::q3();

        echo PHP_EOL . 'Questão 4: ';
        self::q4();

        echo PHP_EOL . 'Questão 5: ';
        self::q5();
    }
}
