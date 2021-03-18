<?php 
   

    $number = mt_rand(1,12);

    // header関数でコンテンツの形式が画像であると宣言
    header('Content-Type: image/jpg');
    
    if($number == 1){readfile('IMG/seiza_mark01_ohitsuji.pnj');}
    elseif($number == 2){readfile('IMG/chukichi.jpg');}
    elseif($number == 3){readfile('IMG/kichi.jpg');} 
    elseif($number == 4){readfile('IMG/kyo.jpeg');}   

    // // 画像のパスを作る
    // $filePath1 = 'IMG/daikichi.jpg';

    // // パスから画像データを取得
    // $data1 = file_get_contents($filePath1);

    // // header関数でコンテンツの形式が画像であると宣言
    // header('Content-type: image/jpg');

    // //データを出力
    // echo $data1; 



    // if($number == 1){echo "<img src="IMG/daikichi.png">"."大吉";}
    // elseif($number == 2){echo "<img src="img/chukichi.png">"."中吉";}
    // elseif($number == 3){echo "<img src="img/syokichi.png" >"."吉";}
    // elseif($number == 4){echo "<img src="img/kyo.png" >"."凶";}

?>