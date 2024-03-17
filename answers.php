<?php

new Questions('question4');

class Questions
{

    public function __construct(?string $questionNumber)
    {
        self::run();
    }

    public static function question1(): void
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

    public static function question2(): void
    {
        echo "Digite o número que deseja verificar: ";
        $numero = intval(readline());

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

    public static function question3(): void
    {
        function calcularFaturamento($arquivo)
        {
            // Ler o arquivo JSON ou XML
            $dados = file_get_contents($arquivo);
            $faturamento = json_decode($dados, true);

            $total = 0;
            $contagem = 0;
            $minimo = PHP_INT_MAX;
            $maximo = PHP_INT_MIN;
            $diasAcimaDaMedia = 0;

            // Calcular o total, o mínimo e o máximo
            foreach ($faturamento as $dia => $valor) {
                if ($valor > 0) {
                    $total += $valor;
                    $contagem++;
                    $minimo = min($minimo, $valor);
                    $maximo = max($maximo, $valor);
                }
            }

            // Calcular a média
            $media = $total / $contagem;

            // Contar os dias acima da média
            foreach ($faturamento as $valor) {
                if ($valor > $media) {
                    $diasAcimaDaMedia++;
                }
            }

            return [
                'Menor valor de faturamento' => $minimo,
                'Maior valor de faturamento' => $maximo,
                'Dias com faturamento acima da média' => $diasAcimaDaMedia,
            ];
        }

        $resultado = calcularFaturamento('faturamento.json');
        print_r($resultado);
    }

    public static function question4(): void
    {
        function calcularPercentualPorEstado($faturamentoPorEstado)
        {
            // Calcular o valor total de faturamento
            $total = array_sum($faturamentoPorEstado);

            $percentualPorEstado = [];

            // Calcular o percentual de representação para cada estado
            foreach ($faturamentoPorEstado as $estado => $valor) {
                $percentualPorEstado[$estado] = ($valor / $total) * 100;
            }

            return $percentualPorEstado;
        }

        $faturamentoPorEstado = [
            'SP' => 67836.43,
            'RJ' => 36678.66,
            'MG' => 29229.88,
            'ES' => 27165.48,
            'Outros' => 19849.53
        ];

        $percentualPorEstado = calcularPercentualPorEstado($faturamentoPorEstado);
        print_r($percentualPorEstado);

    }

    public static function question5(): void
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
        self::question1();

        echo PHP_EOL . 'Questão 2: ';
        self::question2();

        echo PHP_EOL . 'Questão 3: ';
        self::question3();

        echo PHP_EOL . 'Questão 4: ';
        self::question4();

        echo PHP_EOL . 'Questão 5: ';
        self::question5();
    }
}
