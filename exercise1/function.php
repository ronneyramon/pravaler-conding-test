<?php

if (isset($argc)) {

    if(count($argv) < 4)
    {
        echo "Paramêtros faltando.\n";
        return;
    }
    $name = $argv[1];    
    $qtd = $argv[2];    
    $unitPrice = $argv[3];    

    echo "Nome do Produto: " . $name . "\n";
    echo "Quantidade adquirida: " . $qtd . "\n";
    echo "Preço unitário: " . $unitPrice . "\n";

    $fullPrice = $qtd * $unitPrice;

    echo "Preço cheio: " . $fullPrice . "\n";

    $discount = getDiscount($qtd);

    echo "Desconto: " . $discount . "%\n";

    $total = getPriceWithDiscount($fullPrice, $qtd);

    echo "Total a pagar: " . $total . "\n";

}
else {
	echo "argc and argv disabled\n";
}

flush();

function getDiscount($qtd)
{
    if($qtd <= 5)
        return 2;
    if($qtd > 5 && $qtd <= 10)
        return 3;
    
    return 5;
}

function getPriceWithDiscount($fullPrice, $qtd){
    $discount = getDiscount($qtd);
    return $fullPrice * (1 - ($qtd / 100));
}