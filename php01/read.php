<?php
//ファイルを変数に格納
$filename = './data/data.txt';

//fopenでファイルを開く('r'は読み込みモードで開く)
$fp = fopen($filename,'r');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
<!-- 表の見出し -->
        <tr> 
            <th>日時</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>趣味</th>
        </tr>
        <?php
        while (!feof($fp)){
            $txt = fgets($fp);
        //配列化して名前やアドレスの項目を取り出す explodeは文字列を配列に変える。
        $data1=explode(",",$txt);
        // var_dump($data1);
        // var_dump($data1[0]);
        //ファイルを読み込んだ変数を出力
            // echo $txt.'<br>';
            ?>
        
<!-- 表の中身 php echoを略したのが＝ -->
        <tr>
            <td><?php echo $data1[0]?></td>
            <td><?= $data1[1]?></td>
            <td><?= $data1[2]?></td>
            <td><?= $data1[3]?></td>
        </tr>
    <?php
        }
        ?>
    </table>
</body>
</html>

<?php

//fcloseでファイルを閉じる
fclose($fp);

?>

