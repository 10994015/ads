<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
        #app{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width:600px;
            border-left: 1px #111 solid;
            border-right: 1px #111 solid;
            margin:0 auto;
            margin-top: 100px;
            font-family: "標楷體";
            position: relative;
        }
    .title{
        align-self:flex-start;
        margin-left: 50px;
    }
    .content{
        width:500px;
        font-size: 17px;
        text-align: justify;
        text-justify:inter-ideograph;
        line-height: 1.3;

        
    }
    .goto{
        display: block;
        width:150px;
        height: 45px;
        border-radius: 6px;
        background-color: #ccc;
        font-weight: 600;
        text-align: center;
        line-height: 45px;
        color:#000;
        text-decoration: none;
        position: absolute;
        bottom:-50px;right:-170px;

    }
    .bottom{
        float: right;
        width:250px;
        align-self:flex-end;
        margin-right: 50px;
        text-align: right;
        line-height: 1.6;
    }
    </style>
</head>
<body>
    <div id="app">
    <p class="title">親愛的 先生/女士 您好:<br></p>
    <p class="content">
    感謝您撥空填答本問卷。本研究是針對數位影音廣告之情感訴求(有趣性、懸疑性)、敘事結構對喚醒、持續觀看意圖及態度影響之研究。實驗共需觀看三支影音廣告，每個廣告皆設有略過廣告之按鈕，請依平時對於影音廣告的觀看情境來判斷是否持續觀看。每支廣告觀看完即填寫一份問卷，共三次，實驗中所有問題請您依照當下情境填寫，您的用心將使本研究成果更具意義。問卷採不記名方式，全部資料僅供學術之用，不對外開放，敬請您安心填答，在此由衷的感謝您的參與和配合。
    <br><br>祝您有個美好的一天！
    </p>
    <p class="bottom">
    私立中原大學資訊管理研究所<br>
    指導教授：吳肇銘 博士<br>
    研究生：黃子恒<br>
    連絡信箱：karta567815@gmail.com

    </p>
    <a href="vedio1.php" class="goto">開始實驗</a>
    </div>
   
</body>
</html>