<?php
$a = rand(1000000000,9999999999);
$b = rand(1000000000,9999999999);
$c = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$d = rand(0,25);
$e = $c[$d];
$code = $e.strval($a).strval($b);
// echo $code;

$vedioArr = [];
while(true){
    $r = rand(1,8);
    foreach($vedioArr as $item){
        if($item == $r){
            return;
        }
    }
    array_push($vedioArr, $r);
    if(count($vedioArr) == 3){
        break;
    }
}
// print_r($vedioArr);
$v1 = $vedioArr[0];
$v2 = $vedioArr[1];
$v3 = $vedioArr[2];
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>adsarousal</title>
    <style>
    #title{
        margin:auto;
        width:450px;
    }
    .rwdbr{
        display: none;
    }
    @media screen and (max-width:420px){
        #title{
            width:300px;
            margin:auto;
        }
        #title > img{
            width:300px;
        }
        .rwdbr{
            display: block;
        }
    }
    </style>
</head>
<body>
    <div id="title"><img src="./images/cycu.jpg" alt=""></div>
    <div id="app">
    <p class="title">各位  Z世代的同胞們 您好: <br></p>
    <p class="content">
    　　感謝您撥空填答本問卷。本研究是針對數位影音廣告之情感訴求(有趣性、懸疑性)、敘事結構對喚醒、持續觀看意圖及態度影響之研究。過程中共需觀看三支影音廣告，每個廣告皆設有略過廣告之按鈕，請依<span style="color:#f00">平時對於影音廣告的觀看情境來判斷是否持續觀看</span>。每支廣告觀看完即填寫一份問卷，共三次，過程中所有問題請您依照當下情境填寫，您的用心將使本研究成果更具意義。問卷採不記名方式，全部資料僅供學術之用，不對外開放，敬請您安心填答，在此由衷的感謝您的參與和配合。
    <br><br>祝您有個美好的一天！
    </p>
    <p class="bottom">
    私立中原大學資訊管理研究所<br>
    指導教授：吳肇銘 博士<br>
    研究生：黃子恒<br>
    連絡信箱：<br class="rwdbr" />karta567815@gmail.com

    </p>
    <a href="vedio<?php echo $v1;?>.php?code=<?php echo $code;?>&v1=<?php echo $v1; ?>&v2=<?php echo $v2; ?>&v3=<?php echo $v3; ?>" class="goto">下一頁</a>
    </div>
   
</body>
</html>