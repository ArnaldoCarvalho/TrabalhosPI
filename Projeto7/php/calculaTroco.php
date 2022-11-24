<?php
session_start();

$QuantasMN = [
    10,
    10,
    10,
    10,
    10,
    10,
    10,
    10,
    10,
    00,
    10,
    10,
    10,
    10
];
$dinheiro = [
    500.00,
    100.00,
    50.00,
    20.00,
    10.00,
    5.00,
    2.00,
    1.00,
    0.50,
    0.20,
    0.10,
    0.05,
    0.02,
    0.01
];

$Tipo = [
    'nota',
    'moeda'
];

$Quantidade = array(count($dinheiro));

if ($_POST['ValPay'] < 0) {
    header('Location:' . '../Erro.php');
    exit();
}
if ($_POST['MontPay'] < 0 ) {
    header('Location:' . '../Erro.php');
    exit();
}


$troco = 00.00;
$troco = $_POST['MontPay']-$_POST['ValPay'];
$troco=round($troco, 2);
$_SESSION['Troco'] = $troco;

if ($troco <0)
{
    $TextTroco = 'Ainda falta ao cliente pagar: '.-1*$troco . ' Euros';
    $_SESSION['Troco'] = $TextTroco;
    $_SESSION['TrocoDiv'] = '';
    header('Location:' . '../troco.php');
    exit();
}
$TextTroco = CalculaTroco($dinheiro,$troco,$Quantidade,$QuantasMN);


$_SESSION['ValPay'] = $_POST['ValPay'];
$_SESSION['MontPay'] = $_POST['MontPay'];
$_SESSION['TrocoDiv'] = '<br><br> Em moedas e notas fica:' . $TextTroco;

header('Location:' . '../troco.php');
exit();

function CalculaTroco($moedas,$troco,$Quantidade,$QuantasMN){
    $TextTroco = '';

    for($i=0;$i<count($moedas);$i++){
        $count=0;
        if($QuantasMN[$i]!=0){
            do {            
                if ($moedas[$i]<=$troco) {
                    $troco = $troco - $moedas[$i];
                    $troco=round($troco, 2);
                    $count = $count + 1;
                }               
                if($moedas[$i]<0.02)if($troco <= 0.02){ if($troco >= 0.01){$count = $count+1; $troco=$troco - 0.02;} }
            } while ($moedas[$i]<=$troco); 
        }         
        $Quantidade[$i]=$count;
    };

    
    for($i=0;$i<count($moedas);$i++){
        if ($Quantidade[$i] > 0){
            if($moedas[$i]>=5.00)
            { $TextTroco = $TextTroco . ' | '. $Quantidade[$i] .' notas de '.$moedas[$i] . ' euros | ';   }
            else
            {
                if($moedas[$i]>=02.00)
                { $TextTroco = $TextTroco . ' | '. $Quantidade[$i] .' moedas de '.$moedas[$i] . ' euros | ';   }
                else
                { $TextTroco = $TextTroco . ' | '. $Quantidade[$i] .' moedas de '.$moedas[$i] . ' centimos | ';  } 
            }
        }
    };   

    if ($troco>0.01)
    {
        $TextTroco = 'A máquina não têm dinheiro suficiente para dar o troco certo';
    }
    if($TextTroco  === '')
    {
        $TextTroco = 'Não ah troco, o cliente pagou certinho.';
    }
    return $TextTroco;
}
?>