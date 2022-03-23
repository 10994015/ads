<?php
require_once('conn.php');

if(isset($_GET['id']) && $_GET['id'] != ""){

    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .question{
        border-bottom: 1px #ccc solid;
        padding: 10px 0;
    }
    form{
        border-left:1px #111 solid;
        border-right: 1px #111 solid;
        padding: 0 50px;
        margin:50px auto;
        width:650px;
        font-family: "標楷體";
        font-size: 17px;
    }
    #btn {
        float: right;
        margin-top: 15px;
        width:100px;
        height: 40px;
    }
    
    </style>
</head>
<body>
    <form action="savequset.php"" method="post">
        <div class="question">
            <p>Q1:觀看影片後，我有被激發出一種特定的情緒(如:好玩有趣、懸疑好奇等)。</p>
            <input type="radio" name="q1" value="1" class="q1 radio">非常不同意
            <input type="radio" name="q1" value="2" class="q1 radio">不同意
            <input type="radio" name="q1" value="3" class="q1 radio">有點不同意
            <input type="radio" name="q1" value="4" class="q1 radio">普通
            <input type="radio" name="q1" value="5" class="q1 radio">有點同意
            <input type="radio" name="q1" value="6" class="q1 radio">同意
            <input type="radio" name="q1" value="7" class="q1 radio">非常同意
        </div>
        <div class="question">
            <p>Q2:看影片時，我原本平靜的情緒受到影片影響而產生波動。</p>
            <input type="radio" name="q2" value="1" class="q2 radio">非常不同意
            <input type="radio" name="q2" value="2" class="q2 radio">不同意
            <input type="radio" name="q2" value="3" class="q2 radio">有點不同意
            <input type="radio" name="q2" value="4" class="q2 radio">普通
            <input type="radio" name="q2" value="5" class="q2 radio">有點同意
            <input type="radio" name="q2" value="6" class="q2 radio">同意
            <input type="radio" name="q2" value="7" class="q2 radio">非常同意
        </div>
        <div class="question">
            <p>Q3:在看影片時，我的情緒有受到影片操控(被帶著走)。</p>
            <input type="radio" name="q3" value="1" class="q3 radio">非常不同意
            <input type="radio" name="q3" value="2" class="q3 radio">不同意
            <input type="radio" name="q3" value="3" class="q3 radio">有點不同意
            <input type="radio" name="q3" value="4" class="q3 radio">普通
            <input type="radio" name="q3" value="5" class="q3 radio">有點同意
            <input type="radio" name="q3" value="6" class="q3 radio">同意
            <input type="radio" name="q3" value="7" class="q3 radio">非常同意
        </div>
        <div class="question">
            <p>Q4:我很喜歡這部廣告。</p>
            <input type="radio" name="q4" value="1" class="q4 radio">非常不同意
            <input type="radio" name="q4" value="2" class="q4 radio">不同意
            <input type="radio" name="q4" value="3" class="q4 radio">有點不同意
            <input type="radio" name="q4" value="4" class="q4 radio">普通
            <input type="radio" name="q4" value="5" class="q4 radio">有點同意
            <input type="radio" name="q4" value="6" class="q4 radio">同意
            <input type="radio" name="q4" value="7" class="q4 radio">非常同意
        </div>
        <div class="question">
            <p>Q5:我認為這部廣告很好。</p>
            <input type="radio" name="q5" value="1" class="q5 radio">非常不同意
            <input type="radio" name="q5" value="2" class="q5 radio">不同意
            <input type="radio" name="q5" value="3" class="q5 radio">有點不同意
            <input type="radio" name="q5" value="4" class="q5 radio">普通
            <input type="radio" name="q5" value="5" class="q5 radio">有點同意
            <input type="radio" name="q5" value="6" class="q5 radio">同意
            <input type="radio" name="q5" value="7" class="q5 radio">非常同意
        </div>
        <div class="question">
            <p>Q6:我認為這個廣告很吸引人。</p>
            <input type="radio" name="q6" value="1" class="q6 radio">非常不同意
            <input type="radio" name="q6" value="2" class="q6 radio">不同意
            <input type="radio" name="q6" value="3" class="q6 radio">有點不同意
            <input type="radio" name="q6" value="4" class="q6 radio">普通
            <input type="radio" name="q6" value="5" class="q6 radio">有點同意
            <input type="radio" name="q6" value="6" class="q6 radio">同意
            <input type="radio" name="q6" value="7" class="q6 radio">非常同意
        </div>
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <input type="submit" value="送出" id="btn" disabled>
        <!-- <a href="###" id="btn" >送出</a> -->
    </form>

    <script>
    const btn = document.getElementById('btn');
    const q1  = document.getElementsByClassName('q1');
    const q2  = document.getElementsByClassName('q2');
    const q3  = document.getElementsByClassName('q3');
    const q4  = document.getElementsByClassName('q4');
    const q5  = document.getElementsByClassName('q5');
    const q6  = document.getElementsByClassName('q6');
    const radio = document.getElementsByClassName('radio');
    let q1bool = false;
    let q2bool = false;
    let q3bool = false;
    let q4bool = false;
    let q5bool = false;
    let q6bool = false;
    let totalbool = false;
    const send = ()=>{
        for(let i = 0;i<q1.length;i++){
            // console.log(q1[i].checked);
            if(q1[i].checked){
                q1bool = true;
            }
            if(q2[i].checked){
                q2bool = true;
            }
            if(q3[i].checked){
                q3bool = true;
            }
            if(q4[i].checked){
                q4bool = true;
            }
            if(q5[i].checked){ 
                q5bool = true;
            }
            if(q6[i].checked){
                q6bool = true;
            }

            if(q1bool && q2bool && q3bool && q4bool && q5bool && q6bool){
                totalbool = true;
                btn.disabled = false;
            }
            
        }
        console.log("total=>", totalbool);
        
    }
    for(let b=0;b<radio.length;b++){
        radio[b].addEventListener('click',send)
    }
    // btn.addEventListener('click',send);
    </script>
</body>
</html>

<?php }else{
    echo "錯誤!";
} ?>