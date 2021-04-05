<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <link rel="stylesheet" href="_css/estilo.css"/>
            <meta charset="utf-8"/>
            <title>Resultado do Jogo</title>
            <style></style>
            
        </head>
        <body>
            <div>
            <?php
                $data = isset($_GET["dt"])?$_GET["dt"]:"Data não inserido";          
            
                $no1 =     isset($_GET["j1"])?$_GET["j1"]:"Nome não inserido";
                $cjogo1 =  isset($_GET["cj1"])?$_GET["cj1"]:"nao";
                $crango1 = isset($_GET["cr1"])?$_GET["cr1"]:"nao";
                $pjogo1 =  isset($_GET["pj1"])?$_GET["pj1"]:"nao";
                $time1 =   isset($_GET["t1"])?$_GET["t1"]:"B";
                $golf1 =   isset($_GET["gf1"])?$_GET["gf1"]:0;
                $golc1 =   isset($_GET["gc1"])?$_GET["gc1"]:0;
                
                $no2 = isset($_GET["j2"])?$_GET["j2"]:"Nome não inserido";
                $cjogo2 = isset($_GET["cj2"])?$_GET["cj2"]:"nao";
                $crango2 = isset($_GET["cr2"])?$_GET["cr2"]:"nao";
                $pjogo2 = isset($_GET["pj2"])?$_GET["pj2"]:"nao";
                $time2 = isset($_GET["t2"])?$_GET["t2"]:"B";
                $golf2 = isset($_GET["gf2"])?$_GET["gf2"]:0;
                $golc2 = isset($_GET["gc2"])?$_GET["gc2"]:0;
                
                $no3 = isset($_GET["j3"])?$_GET["j3"]:"Nome não inserido";
                $cjogo3 = isset($_GET["cj3"])?$_GET["cj3"]:"nao";
                $crango3 = isset($_GET["cr3"])?$_GET["cr3"]:"nao";
                $pjogo3 = isset($_GET["pj3"])?$_GET["pj3"]:"nao";
                $time3 = isset($_GET["t3"])?$_GET["t3"]:"B";
                $golf3 = isset($_GET["gf3"])?$_GET["gf3"]:0;
                $golc3 = isset($_GET["gc3"])?$_GET["gc3"]:0;

                $no4 =      isset($_GET ["j4"])?$_GET["j4"]:"Nome não inserido";
                $cjogo4 =   isset($_GET["cj4"])?$_GET["cj4"]:"nao";
                $crango4 =  isset($_GET["cr4"])?$_GET["cr4"]:"nao";
                $pjogo4 =   isset($_GET["pj4"])?$_GET["pj4"]:"nao";
                $time4 =    isset($_GET ["t4"])?$_GET["t4"]:"B";
                $golf4 =    isset($_GET["gf4"])?$_GET["gf4"]:0;
                $golc4 =    isset($_GET["gc4"])?$_GET["gc4"]:0;
                
                $no5 =      isset($_GET ["j5"])?$_GET ["j5"]:"Nome não inserido";
                $cjogo5 =   isset($_GET["cj5"])?$_GET["cj5"]:"nao";
                $crango5 =  isset($_GET["cr5"])?$_GET["cr5"]:"nao";
                $pjogo5 =   isset($_GET["pj5"])?$_GET["pj5"]:"nao";
                $time5 =    isset($_GET ["t5"])?$_GET ["t5"]:"B";
                $golf5 =    isset($_GET["gf5"])?$_GET["gf5"]:0;
                $golc5 =    isset($_GET["gc5"])?$_GET["gc5"]:0;
                
                $no6 =      isset($_GET ["j6"])?$_GET ["j6"]:"Nome não inserido";
                $cjogo6 =   isset($_GET["cj6"])?$_GET["cj6"]:"nao";
                $crango6 =  isset($_GET["cr6"])?$_GET["cr6"]:"nao";
                $pjogo6 =   isset($_GET["pj6"])?$_GET["pj6"]:"nao";
                $time6 =    isset($_GET ["t6"])?$_GET ["t6"]:"B";
                $golf6 =    isset($_GET["gf6"])?$_GET["gf6"]:0;
                $golc6 =    isset($_GET["gc6"])?$_GET["gc6"]:0;
                
                $no7 =      isset($_GET ["j7"])?$_GET ["j7"]:"Nome não inserido";
                $cjogo7 =   isset($_GET["cj7"])?$_GET["cj7"]:"nao";
                $crango7 =  isset($_GET["cr7"])?$_GET["cr7"]:"nao";
                $pjogo7 =   isset($_GET["pj7"])?$_GET["pj7"]:"nao";
                $time7 =    isset($_GET ["t7"])?$_GET ["t7"]:"B";
                $golf7 =    isset($_GET["gf7"])?$_GET["gf7"]:0;
                $golc7 =    isset($_GET["gc7"])?$_GET["gc7"]:0;
                
                $no8 =      isset($_GET ["j8"])?$_GET ["j8"]:"Nome não inserido";
                $cjogo8 =   isset($_GET["cj8"])?$_GET["cj8"]:"nao";
                $crango8 =  isset($_GET["cr8"])?$_GET["cr8"]:"nao";
                $pjogo8 =   isset($_GET["pj8"])?$_GET["pj8"]:"nao";
                $time8 =    isset($_GET ["t8"])?$_GET ["t8"]:"B";
                $golf8 =    isset($_GET["gf8"])?$_GET["gf8"]:0;
                $golc8 =    isset($_GET["gc8"])?$_GET["gc8"]:0;
                
                $no9 =      isset($_GET ["j9"])?$_GET ["j9"]:"Nome não inserido";
                $cjogo9 =   isset($_GET["cj9"])?$_GET["cj9"]:"nao";
                $crango9 =  isset($_GET["cr9"])?$_GET["cr9"]:"nao";
                $pjogo9 =   isset($_GET["pj9"])?$_GET["pj9"]:"nao";
                $time9 =    isset($_GET ["t9"])?$_GET ["t9"]:"B";
                $golf9 =    isset($_GET["gf9"])?$_GET["gf9"]:0;
                $golc9 =    isset($_GET["gc9"])?$_GET["gc9"]:0;
                
                $no10 =      isset($_GET ["j10"])?$_GET ["j10"]:"Nome não inserido";
                $cjogo10 =   isset($_GET["cj10"])?$_GET["cj10"]:"nao";
                $crango10 =  isset($_GET["cr10"])?$_GET["cr10"]:"nao";
                $pjogo10 =   isset($_GET["pj10"])?$_GET["pj10"]:"nao";
                $time10 =    isset($_GET ["t10"])?$_GET ["t10"]:"B";
                $golf10 =    isset($_GET["gf10"])?$_GET["gf10"]:0;
                $golc10 =    isset($_GET["gc10"])?$_GET["gc10"]:0;
                
                
                $no11 =      isset($_GET ["j11"])?$_GET ["j11"]:"Nome não inserido";
                $cjogo11 =   isset($_GET["cj11"])?$_GET["cj11"]:"nao";
                $crango11 =  isset($_GET["cr11"])?$_GET["cr11"]:"nao";
                $pjogo11 =   isset($_GET["pj11"])?$_GET["pj11"]:"nao";
                $time11 =    isset($_GET ["t11"])?$_GET ["t11"]:"B";
                $golf11 =    isset($_GET["gf11"])?$_GET["gf11"]:0;
                $golc11 =    isset($_GET["gc11"])?$_GET["gc11"]:0;
                
                
                $no12 =      isset($_GET ["j12"])?$_GET ["j12"]:"Nome não inserido";
                $cjogo12 =   isset($_GET["cj12"])?$_GET["cj12"]:"nao";
                $crango12 =  isset($_GET["cr12"])?$_GET["cr12"]:"nao";
                $pjogo12 =   isset($_GET["pj12"])?$_GET["pj12"]:"nao";
                $time12 =    isset($_GET ["t12"])?$_GET ["t12"]:"B";
                $golf12 =    isset($_GET["gf12"])?$_GET["gf12"]:0;
                $golc12 =    isset($_GET["gc12"])?$_GET["gc12"]:0;
                
                
                $no13 =      isset($_GET ["j13"])?$_GET ["j13"]:"Nome não inserido";
                $cjogo13 =   isset($_GET["cj13"])?$_GET["cj13"]:"nao";
                $crango13 =  isset($_GET["cr13"])?$_GET["cr13"]:"nao";
                $pjogo13 =   isset($_GET["pj13"])?$_GET["pj13"]:"nao";
                $time13 =    isset($_GET ["t13"])?$_GET ["t13"]:"B";
                $golf13 =    isset($_GET["gf13"])?$_GET["gf13"]:0;
                $golc13 =    isset($_GET["gc13"])?$_GET["gc13"]:0;
                
                
                $no14 =      isset($_GET ["j14"])?$_GET ["j14"]:"Nome não inserido";
                $cjogo14 =   isset($_GET["cj14"])?$_GET["cj14"]:"nao";
                $crango14 =  isset($_GET["cr14"])?$_GET["cr14"]:"nao";
                $pjogo14 =   isset($_GET["pj14"])?$_GET["pj14"]:"nao";
                $time14 =    isset($_GET ["t14"])?$_GET ["t14"]:"B";
                $golf14 =    isset($_GET["gf14"])?$_GET["gf14"]:0;
                $golc14 =    isset($_GET["gc14"])?$_GET["gc14"]:0;
                
                
                $no15 =      isset($_GET ["j15"])?$_GET ["j15"]:"Nome não inserido";
                $cjogo15 =   isset($_GET["cj15"])?$_GET["cj15"]:"nao";
                $crango15 =  isset($_GET["cr15"])?$_GET["cr15"]:"nao";
                $pjogo15 =   isset($_GET["pj15"])?$_GET["pj15"]:"nao";
                $time15 =    isset($_GET ["t15"])?$_GET ["t15"]:"B";
                $golf15 =    isset($_GET["gf15"])?$_GET["gf15"]:0;
                $golc15 =    isset($_GET["gc15"])?$_GET["gc15"]:0;
                
                
                $no16 =      isset($_GET ["j16"])?$_GET ["j16"]:"Nome não inserido";
                $cjogo16 =   isset($_GET["cj16"])?$_GET["cj16"]:"nao";
                $crango16 =  isset($_GET["cr16"])?$_GET["cr16"]:"nao";
                $pjogo16 =   isset($_GET["pj16"])?$_GET["pj16"]:"nao";
                $time16 =    isset($_GET ["t16"])?$_GET ["t16"]:"B";
                $golf16 =    isset($_GET["gf16"])?$_GET["gf16"]:0;
                $golc16 =    isset($_GET["gc16"])?$_GET["gc16"]:0;
                
                $data1 = $data;
                $data2 = $data;
                $data3 = $data;
                $data4 = $data;
                $data5 = $data;
                $data6 = $data;
                $data7 = $data;
                $data8 = $data;
                $data9 = $data;
                $data10 = $data;
                $data11 = $data;
                $data12 = $data;
                $data13 = $data;
                $data14 = $data;
                $data15 = $data;
                $data16 = $data;
                
                
                
                echo "Jogo realizado no dia $data";
                
                
                $golsA = 0;
                if ($time1=="A") {($golsA+=$golf1);}else {($golsA+=0);}
                if ($time2=="A") {($golsA+=$golf2);}else {($golsA+=0);}
                if ($time3=="A") {($golsA+=$golf3);}else {($golsA+=0);}
                if ($time4=="A") {($golsA+=$golf4);}else {($golsA+=0);}
                if ($time5=="A") {($golsA+=$golf5);}else {($golsA+=0);}
                if ($time6=="A") {($golsA+=$golf6);}else {($golsA+=0);}
                if ($time7=="A") {($golsA+=$golf7);}else {($golsA+=0);}
                if ($time8=="A") {($golsA+=$golf8);}else {($golsA+=0);}
                if ($time9=="A") {($golsA+=$golf9);}else {($golsA+=0);}
                if ($time10=="A"){($golsA+=$golf10);}else{($golsA+=0);}
                if ($time11=="A"){($golsA+=$golf11);}else{($golsA+=0);}
                if ($time12=="A"){($golsA+=$golf12);}else{($golsA+=0);}
                if ($time13=="A"){($golsA+=$golf13);}else{($golsA+=0);}
                if ($time14=="A"){($golsA+=$golf14);}else{($golsA+=0);}
                if ($time15=="A"){($golsA+=$golf15);}else{($golsA+=0);}
                if ($time16=="A"){($golsA+=$golf16);}else{($golsA+=0);}
                if ($time1=="B") {($golsA+=$golc1);}else {($golsA+=0);}
                if ($time2=="B") {($golsA+=$golc2);}else {($golsA+=0);}
                if ($time3=="B") {($golsA+=$golc3);}else {($golsA+=0);}
                if ($time4=="B") {($golsA+=$golc4);}else {($golsA+=0);}
                if ($time5=="B") {($golsA+=$golc5);}else {($golsA+=0);}
                if ($time6=="B") {($golsA+=$golc6);}else {($golsA+=0);}
                if ($time7=="B") {($golsA+=$golc7);}else {($golsA+=0);}
                if ($time8=="B") {($golsA+=$golc8);}else {($golsA+=0);}
                if ($time9=="B") {($golsA+=$golc9);}else {($golsA+=0);}
                if ($time10=="B"){($golsA+=$golc10);}else{($golsA+=0);}
                if ($time11=="B"){($golsA+=$golc11);}else{($golsA+=0);}
                if ($time12=="B"){($golsA+=$golc12);}else{($golsA+=0);}
                if ($time13=="B"){($golsA+=$golc13);}else{($golsA+=0);}
                if ($time14=="B"){($golsA+=$golc14);}else{($golsA+=0);}
                if ($time15=="B"){($golsA+=$golc15);}else{($golsA+=0);}
                if ($time16=="B"){($golsA+=$golc16);}else{($golsA+=0);}
                
                
                $golsB = 0;
                if ($time1=="B") {($golsB+=$golf1);}else {($golsB+=0);}
                if ($time2=="B") {($golsB+=$golf2);}else {($golsB+=0);}
                if ($time3=="B") {($golsB+=$golf3);}else {($golsB+=0);}
                if ($time4=="B") {($golsB+=$golf4);}else {($golsB+=0);}
                if ($time5=="B") {($golsB+=$golf5);}else {($golsB+=0);}
                if ($time6=="B") {($golsB+=$golf6);}else {($golsB+=0);}
                if ($time7=="B") {($golsB+=$golf7);}else {($golsB+=0);}
                if ($time8=="B") {($golsB+=$golf8);}else {($golsB+=0);}
                if ($time9=="B") {($golsB+=$golf9);}else {($golsB+=0);}
                if ($time10=="B"){($golsB+=$golf10);}else{($golsB+=0);}
                if ($time11=="B"){($golsB+=$golf11);}else{($golsB+=0);}
                if ($time12=="B"){($golsB+=$golf12);}else{($golsB+=0);}
                if ($time13=="B"){($golsB+=$golf13);}else{($golsB+=0);}
                if ($time14=="B"){($golsB+=$golf14);}else{($golsB+=0);}
                if ($time15=="B"){($golsB+=$golf15);}else{($golsB+=0);}
                if ($time16=="B"){($golsB+=$golf16);}else{($golsB+=0);}
                if ($time1=="A") {($golsB+=$golc1);}else {($golsA+=0);}
                if ($time2=="A") {($golsB+=$golc2);}else {($golsA+=0);}
                if ($time3=="A") {($golsB+=$golc3);}else {($golsA+=0);}
                if ($time4=="A") {($golsB+=$golc4);}else {($golsA+=0);}
                if ($time5=="A") {($golsB+=$golc5);}else {($golsA+=0);}
                if ($time6=="A") {($golsB+=$golc6);}else {($golsA+=0);}
                if ($time7=="A") {($golsB+=$golc7);}else {($golsA+=0);}
                if ($time8=="A") {($golsB+=$golc8);}else {($golsA+=0);}
                if ($time9=="A") {($golsB+=$golc9);}else {($golsA+=0);}
                if ($time10=="A"){($golsB+=$golc10);}else{($golsA+=0);}
                if ($time11=="A"){($golsB+=$golc11);}else{($golsA+=0);}
                if ($time12=="A"){($golsB+=$golc12);}else{($golsA+=0);}
                if ($time13=="A"){($golsB+=$golc13);}else{($golsA+=0);}
                if ($time14=="A"){($golsB+=$golc14);}else{($golsA+=0);}
                if ($time15=="A"){($golsB+=$golc15);}else{($golsA+=0);}
                if ($time16=="A"){($golsB+=$golc16);}else{($golsA+=0);}
                
                echo "<table><td colspan = '2'>PLACAR DO JOGO</td></tr>";
                echo "<tr><th>TIME A </th><th>TIME B </th></tr>";
                echo "<tr><th>$golsA</th><th> $golsB</th></tr></table><br><br>";
                
                $resultado1 = "";
                if($golsA==$golsB){$resultado1="E";}elseif(($golsA>$golsB)&&($time1=="A")){$resultado1="V";}elseif(($golsA<$golsB)&&($time1=="B")){$resultado1="V";}else{$resultado1="D";}
                $resultado2 = "";
                if($golsA==$golsB){$resultado2="E";}elseif(($golsA>$golsB)&&($time2=="A")){$resultado2="V";}elseif(($golsA<$golsB)&&($time2=="B")){$resultado2="V";}else{$resultado2="D";}
                $resultado3 = "";                                                                                                                                                  
                if($golsA==$golsB){$resultado3="E";}elseif(($golsA>$golsB)&&($time3=="A")){$resultado3="V";}elseif(($golsA<$golsB)&&($time3=="B")){$resultado3="V";}else{$resultado3="D";}
                $resultado4 = "";                                                                                                                                                  
                if($golsA==$golsB){$resultado4="E";}elseif(($golsA>$golsB)&&($time4=="A")){$resultado4="V";}elseif(($golsA<$golsB)&&($time4=="B")){$resultado4="V";}else{$resultado4="D";}
                $resultado5 = "";                                                                                                                                                  
                if($golsA==$golsB){$resultado5="E";}elseif(($golsA>$golsB)&&($time5=="A")){$resultado5="V";}elseif(($golsA<$golsB)&&($time5=="B")){$resultado5="V";}else{$resultado5="D";}
                $resultado6 = "";                                                                                                                                                  
                if($golsA==$golsB){$resultado6="E";}elseif(($golsA>$golsB)&&($time6=="A")){$resultado6="V";}elseif(($golsA<$golsB)&&($time6=="B")){$resultado6="V";}else{$resultado6="D";}
                $resultado7 = "";                                                                                                                                                  
                if($golsA==$golsB){$resultado7="E";}elseif(($golsA>$golsB)&&($time7=="A")){$resultado7="V";}elseif(($golsA<$golsB)&&($time7=="B")){$resultado7="V";}else{$resultado7="D";}
                $resultado8 = "";                                                                                                                                                  
                if($golsA==$golsB){$resultado8="E";}elseif(($golsA>$golsB)&&($time8=="A")){$resultado8="V";}elseif(($golsA<$golsB)&&($time8=="B")){$resultado8="V";}else{$resultado8="D";}
                $resultado9 = "";                                                                                                                                                  
                if($golsA==$golsB){$resultado9="E";}elseif(($golsA>$golsB)&&($time9=="A")){$resultado9="V";}elseif(($golsA<$golsB)&&($time9=="B")){$resultado9="V";}else{$resultado9="D";}
                $resultado10 = "";
                if($golsA==$golsB){$resultado10="E";}elseif(($golsA>$golsB)&&($time10=="A")){$resultado10="V";}elseif(($golsA<$golsB)&&($time10=="B")){$resultado10="V";}else{$resultado10="D";}
                $resultado11 = "";                                                                                                           
                if($golsA==$golsB){$resultado11="E";}elseif(($golsA>$golsB)&&($time11=="A")){$resultado11="V";}elseif(($golsA<$golsB)&&($time11=="B")){$resultado11="V";}else{$resultado11="D";}
                $resultado12 = "";                                                                                                                                                      
                if($golsA==$golsB){$resultado12="E";}elseif(($golsA>$golsB)&&($time12=="A")){$resultado12="V";}elseif(($golsA<$golsB)&&($time12=="B")){$resultado12="V";}else{$resultado12="D";}
                $resultado13 = "";                                                                                                                                                      
                if($golsA==$golsB){$resultado13="E";}elseif(($golsA>$golsB)&&($time13=="A")){$resultado13="V";}elseif(($golsA<$golsB)&&($time13=="B")){$resultado13="V";}else{$resultado13="D";}
                $resultado14 = "";                                                                                                                                                      
                if($golsA==$golsB){$resultado14="E";}elseif(($golsA>$golsB)&&($time14=="A")){$resultado14="V";}elseif(($golsA<$golsB)&&($time14=="B")){$resultado14="V";}else{$resultado14="D";}
                $resultado15 = "";                                                                                                                                                      
                if($golsA==$golsB){$resultado15="E";}elseif(($golsA>$golsB)&&($time15=="A")){$resultado15="V";}elseif(($golsA<$golsB)&&($time15=="B")){$resultado15="V";}else{$resultado15="D";}
                $resultado16 = "";                                                                                                                                                      
                if($golsA==$golsB){$resultado16="E";}elseif(($golsA>$golsB)&&($time16=="A")){$resultado16="V";}elseif(($golsA<$golsB)&&($time16=="B")){$resultado16="V";}else{$resultado16="D";}
                
                
                
                
                //echo "$resultado1<br><br>";
                
                echo    "<table border=1><tr><th>Jogador</th><th>Confirmação do Jogo</th><th>Confirmação do rango</th><th>Presença no jogo</th><th>Time</th><th>Gols à favor</th><th>Gols contra</th><th>Resultado</th><th>Data</th></tr>
                <tr><td>$no1 </td>   <td>$cjogo1 </td> <td>$crango1 </td> <td>$pjogo1 </td> <td>$time1 </td> <td>$golf1 </td> <td>$golc1 </td> <td>$resultado1 </td><td>$data1 </td></tr>
                <tr><td>$no2 </td>   <td>$cjogo2 </td> <td>$crango2 </td> <td>$pjogo2 </td> <td>$time2 </td> <td>$golf2 </td> <td>$golc2 </td> <td>$resultado2 </td><td>$data2 </td></tr>
                <tr><td>$no3 </td>   <td>$cjogo3 </td> <td>$crango3 </td> <td>$pjogo3 </td> <td>$time3 </td> <td>$golf3 </td> <td>$golc3 </td> <td>$resultado3 </td><td>$data3 </td></tr>
                <tr><td>$no4 </td>   <td>$cjogo4 </td> <td>$crango4 </td> <td>$pjogo4 </td> <td>$time4 </td> <td>$golf4 </td> <td>$golc4 </td> <td>$resultado4 </td><td>$data4 </td></tr>
                <tr><td>$no5 </td>   <td>$cjogo5 </td> <td>$crango5 </td> <td>$pjogo5 </td> <td>$time5 </td> <td>$golf5 </td> <td>$golc5 </td> <td>$resultado5 </td><td>$data5 </td></tr>
                <tr><td>$no6 </td>   <td>$cjogo6 </td> <td>$crango6 </td> <td>$pjogo6 </td> <td>$time6 </td> <td>$golf6 </td> <td>$golc6 </td> <td>$resultado6 </td><td>$data6 </td></tr>
                <tr><td>$no7 </td>   <td>$cjogo7 </td> <td>$crango7 </td> <td>$pjogo7 </td> <td>$time7 </td> <td>$golf7 </td> <td>$golc7 </td> <td>$resultado7 </td><td>$data7 </td></tr>
                <tr><td>$no8 </td>   <td>$cjogo8 </td> <td>$crango8 </td> <td>$pjogo8 </td> <td>$time8 </td> <td>$golf8 </td> <td>$golc8 </td> <td>$resultado8 </td><td>$data8 </td></tr>
                <tr><td>$no9 </td>   <td>$cjogo9 </td> <td>$crango9 </td> <td>$pjogo9 </td> <td>$time9 </td> <td>$golf9 </td> <td>$golc9 </td> <td>$resultado9 </td><td>$data9 </td></tr>
                <tr><td>$no10 </td/> <td>$cjogo10 </td> <td>$crango10 </td> <td>$pjogo10 </td> <td>$time10 </td> <td>$golf10 </td> <td>$golc10 </td> <td>$resultado10 </td><td>$data10 </td></tr>
                <tr><td>$no11 </td/> <td>$cjogo11 </td> <td>$crango11 </td> <td>$pjogo11 </td> <td>$time11 </td> <td>$golf11 </td> <td>$golc11 </td> <td>$resultado11 </td><td>$data11 </td></tr>
                <tr><td>$no12 </td/> <td>$cjogo12 </td> <td>$crango12 </td> <td>$pjogo12 </td> <td>$time12 </td> <td>$golf12 </td> <td>$golc12 </td> <td>$resultado12 </td><td>$data12 </td></tr>
                <tr><td>$no13 </td/> <td>$cjogo13 </td> <td>$crango13 </td> <td>$pjogo13 </td> <td>$time13 </td> <td>$golf13 </td> <td>$golc13 </td> <td>$resultado13 </td><td>$data13 </td></tr>
                <tr><td>$no14 </td/> <td>$cjogo14 </td> <td>$crango14 </td> <td>$pjogo14 </td> <td>$time14 </td> <td>$golf14 </td> <td>$golc14 </td> <td>$resultado14 </td><td>$data14 </td></tr>
                <tr><td>$no15 </td/> <td>$cjogo15 </td> <td>$crango15 </td> <td>$pjogo15 </td> <td>$time15 </td> <td>$golf15 </td> <td>$golc15 </td> <td>$resultado15 </td><td>$data15 </td></tr>
                <tr><td>$no16 </td/> <td>$cjogo16 </td> <td>$crango16 </td> <td>$pjogo16 </td> <td>$time16 </td> <td>$golf16 </td> <td>$golc16 </td> <td>$resultado16 </td><td>$data16 </td></tr>
                
                </table>";
              
               
            ?>  
        <?php
		try
        {
            $connection = new PDO("mysql:host=localhost;dbname=tdm_bd","root","");
            $connection->exec("set names utf8");
        }
        
        catch(PDOException $e)
            {
                echo "Falha ". $e->getMessage();
                exit();
            }
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no1);
        $stmt->bindParam(2,$cjogo1);
        $stmt->bindParam(3,$crango1);
        $stmt->bindParam(4,$pjogo1);
        $stmt->bindParam(5,$time1);
        $stmt->bindParam(6,$golf1);
        $stmt->bindParam(7,$golc1);
        $stmt->bindParam(8,$resultado1);
        $stmt->bindParam(9,$data1);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no2);
        $stmt->bindParam(2,$cjogo2);
        $stmt->bindParam(3,$crango2);
        $stmt->bindParam(4,$pjogo2);
        $stmt->bindParam(5,$time2);
        $stmt->bindParam(6,$golf2);
        $stmt->bindParam(7,$golc2);
        $stmt->bindParam(8,$resultado2);
        $stmt->bindParam(9,$data2);
        
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no3);
        $stmt->bindParam(2,$cjogo3);
        $stmt->bindParam(3,$crango3);
        $stmt->bindParam(4,$pjogo3);
        $stmt->bindParam(5,$time3);
        $stmt->bindParam(6,$golf3);
        $stmt->bindParam(7,$golc3);
        $stmt->bindParam(8,$resultado3);
        $stmt->bindParam(9,$data3);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no4);
        $stmt->bindParam(2,$cjogo4);
        $stmt->bindParam(3,$crango4);
        $stmt->bindParam(4,$pjogo4);
        $stmt->bindParam(5,$time4);
        $stmt->bindParam(6,$golf4);
        $stmt->bindParam(7,$golc4);
        $stmt->bindParam(8,$resultado4);
        $stmt->bindParam(9,$data4);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no5);
        $stmt->bindParam(2,$cjogo5);
        $stmt->bindParam(3,$crango5);
        $stmt->bindParam(4,$pjogo5);
        $stmt->bindParam(5,$time5);
        $stmt->bindParam(6,$golf5);
        $stmt->bindParam(7,$golc5);
        $stmt->bindParam(8,$resultado5);
        $stmt->bindParam(9,$data5);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no6);
        $stmt->bindParam(2,$cjogo6);
        $stmt->bindParam(3,$crango6);
        $stmt->bindParam(4,$pjogo6);
        $stmt->bindParam(5,$time6);
        $stmt->bindParam(6,$golf6);
        $stmt->bindParam(7,$golc6);
        $stmt->bindParam(8,$resultado6);
        $stmt->bindParam(9,$data6);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no7);
        $stmt->bindParam(2,$cjogo7);
        $stmt->bindParam(3,$crango7);
        $stmt->bindParam(4,$pjogo7);
        $stmt->bindParam(5,$time7);
        $stmt->bindParam(6,$golf7);
        $stmt->bindParam(7,$golc7);
        $stmt->bindParam(8,$resultado7);
        $stmt->bindParam(9,$data7);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no8);
        $stmt->bindParam(2,$cjogo8);
        $stmt->bindParam(3,$crango8);
        $stmt->bindParam(4,$pjogo8);
        $stmt->bindParam(5,$time8);
        $stmt->bindParam(6,$golf8);
        $stmt->bindParam(7,$golc8);
        $stmt->bindParam(8,$resultado8);
        $stmt->bindParam(9,$data8);
        
        $stmt->execute();
        
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no9);
        $stmt->bindParam(2,$cjogo9);
        $stmt->bindParam(3,$crango9);
        $stmt->bindParam(4,$pjogo9);
        $stmt->bindParam(5,$time9);
        $stmt->bindParam(6,$golf9);
        $stmt->bindParam(7,$golc9);
        $stmt->bindParam(8,$resultado9);
        $stmt->bindParam(9,$data9);
        
        $stmt->execute();
        
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no10);
        $stmt->bindParam(2,$cjogo10);
        $stmt->bindParam(3,$crango10);
        $stmt->bindParam(4,$pjogo10);
        $stmt->bindParam(5,$time10);
        $stmt->bindParam(6,$golf10);
        $stmt->bindParam(7,$golc10);
        $stmt->bindParam(8,$resultado10);
        $stmt->bindParam(9,$data10);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no11);
        $stmt->bindParam(2,$cjogo11);
        $stmt->bindParam(3,$crango11);
        $stmt->bindParam(4,$pjogo11);
        $stmt->bindParam(5,$time11);
        $stmt->bindParam(6,$golf11);
        $stmt->bindParam(7,$golc11);
        $stmt->bindParam(8,$resultado11);
        $stmt->bindParam(9,$data11);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no12);
        $stmt->bindParam(2,$cjogo12);
        $stmt->bindParam(3,$crango12);
        $stmt->bindParam(4,$pjogo12);
        $stmt->bindParam(5,$time12);
        $stmt->bindParam(6,$golf12);
        $stmt->bindParam(7,$golc12);
        $stmt->bindParam(8,$resultado12);
        $stmt->bindParam(9,$data12);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no13);
        $stmt->bindParam(2,$cjogo13);
        $stmt->bindParam(3,$crango13);
        $stmt->bindParam(4,$pjogo13);
        $stmt->bindParam(5,$time13);
        $stmt->bindParam(6,$golf13);
        $stmt->bindParam(7,$golc13);
        $stmt->bindParam(8,$resultado13);
        $stmt->bindParam(9,$data13);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no14);
        $stmt->bindParam(2,$cjogo14);
        $stmt->bindParam(3,$crango14);
        $stmt->bindParam(4,$pjogo14);
        $stmt->bindParam(5,$time14);
        $stmt->bindParam(6,$golf14);
        $stmt->bindParam(7,$golc14);
        $stmt->bindParam(8,$resultado14);
        $stmt->bindParam(9,$data14);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no15);
        $stmt->bindParam(2,$cjogo15);
        $stmt->bindParam(3,$crango15);
        $stmt->bindParam(4,$pjogo15);
        $stmt->bindParam(5,$time15);
        $stmt->bindParam(6,$golf15);
        $stmt->bindParam(7,$golc15);
        $stmt->bindParam(8,$resultado15);
        $stmt->bindParam(9,$data15);
        
        $stmt->execute();
        
        $sql = "insert into partida (nome, conf_jogo, conf_rango, pres_jogo, equipe, gf, gc, resultado, dia)
                values(?,?,?,?,?,?,?,?,?)";
       
        $stmt = $connection->prepare($sql);
        
        $stmt->bindParam(1,$no16);
        $stmt->bindParam(2,$cjogo16);
        $stmt->bindParam(3,$crango16);
        $stmt->bindParam(4,$pjogo16);
        $stmt->bindParam(5,$time16);
        $stmt->bindParam(6,$golf16);
        $stmt->bindParam(7,$golc16);
        $stmt->bindParam(8,$resultado16);
        $stmt->bindParam(9,$data16);
        
        $stmt->execute();
        
        
        if ($stmt->errorCode() != "00000")
            {
                echo "erro códido";
            }
            ?>  

            </div>
        </body>
    </html>