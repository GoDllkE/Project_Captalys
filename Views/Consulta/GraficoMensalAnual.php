<?php
    // Requisitos
    require "../../Controllers/consultaGrafico.php";
    require_once "../../Content/libraries/phplot/phplot.php";

    $ano = $_POST["anoGrafico"];
    
    // Define array de dados a ser utilizado
    $objConsulta = new consultaGrafico();
    $dados = $objConsulta->geraValoresMediaMesAno($ano);
    
    // Define array de dados a ser utilizado
    /*
    $dados = array(
        array('Janeiro', '10230', '11345'), 
        array('Fevereiro', '12334', '8902'),
        array('Marco', '12334', '8902'),
        array('Abril', '11345', '8902'),
        array('Maio', '8902', '8902'),
        array('Junho', '10230', '11345')
    );
    */
    
    // Objeto
    $MeuGrafico = new PHPlot(440, 250);
    
    // Borda
    // $MeuGrafico->SetImageBorderType('plain');
    
    // Define o formato do arquivo da imagem
    $MeuGrafico->SetFileFormat("png");

    // Define o tipo de grafico, nesse caso em barras
    $MeuGrafico->SetPlotType('bars');

    // Define a fonte Padrão, nesse caso o arquivo ttf está no mesmo diretório
    // $MeuGrafico->SetDefaultTTFont('Ubuntu.ttf'); 

    // define se as barras serão em 3D, valor 0 Imagem chamada
    $MeuGrafico->SetShading(0); 
    $MeuGrafico->SetDataType('text-data');


    //função para converter para real, pode haver outra maneira!
    function converterParaReal($value) {
        $deg = $value;
        $real = number_format($deg,2,',','.');
        return "R$ {$real}";
    }

    // setar o valores no eixo Y no formato moeda
    // este metodo aceita uma função quando o parametro custom é setado
    $MeuGrafico->SetYLabelType('custom', 'converterParaReal');

    // seta os dados para a plotagem do grafico
    $MeuGrafico->SetDataValues($dados);

    // definição do titulo do gráfico
    // por questão da acentuação utilizar a função utf8_decode
    $titulo = utf8_decode('Valor médio em relação ao ano de '. $ano);

    // Setar o titulo definido na varieavel $titulo anteriomente
    $MeuGrafico->SetTitle($titulo);

    // Gera uma legenda
    $MeuGrafico->SetLegend(array('Mes', 'Valor médio'));

    //Por padrão é setado "marcas" das escalas do eixo x, none retira estas marcas.
    $MeuGrafico->SetXTickPos('none');

    // gera o grafico
    $MeuGrafico->DrawGraph();

?> 