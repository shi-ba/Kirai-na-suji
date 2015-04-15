<?php
    $bad = fgets(STDIN);//kirai
    $sou = fgets(STDIN);//sousu
    $heya=array();
    $ok=0;
    for($i=0;$i<$sou;$i++){
        $heya[$i]=fgets(STDIN);
    }
    for($i=0;$i<$sou;$i++){
        $shou=$heya[$i];
        $kirai=0;
        while($shou>10){
                $amari=$shou%10;
                $shou=floor($shou/10);
                if($amari==$bad){$kirai=1;break;}
        }
        if($shou==$bad)$kirai=1;
        if($kirai==0){echo $heya[$i];$ok++;}
    }
    if($ok==0)echo 'none'."\n";
?>
