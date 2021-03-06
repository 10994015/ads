<?php
require_once('conn.php');

if(isset($_GET['id']) && $_GET['id'] != ""){
    $code = $_GET['code'];
    $id = $_GET['id'];
    if(isset($_GET['v2'])){$v2 = $_GET['v2'];}
    if(isset($_GET['v3'])){$v3 = $_GET['v3'];}
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
        margin:15px 0 ;
        width:100px;
        height: 40px;
    }
    @media screen and (max-width:720px){
        .question{
            display: flex;
            flex-direction: column;
        }
    }
    @media screen and (max-width:680px){
        form{
            width:90%;
        }
    }
    
    </style>
</head>
<body>
    <form action="savequset.php"" method="post">
        <div class="question">
            <p>Q1:觀看影片後，我有被激發出一種特定的情緒(如:好玩有趣、懸疑好奇等)。</p>
            <label for="q1-7"><input id="q1-7" type="radio" name="q1" value="7" class="q1 radio">非常同意</label>
            <label for="q1-6"><input id="q1-6" type="radio" name="q1" value="6" class="q1 radio">同意</label>
            <label for="q1-5"><input id="q1-5" type="radio" name="q1" value="5" class="q1 radio">有點同意</label>
            <label for="q1-4"><input id="q1-4" type="radio" name="q1" value="4" class="q1 radio">普通</label>
            <label for="q1-3"><input id="q1-3" type="radio" name="q1" value="3" class="q1 radio">有點不同意</label>
            <label for="q1-2"><input id="q1-2" type="radio" name="q1" value="2" class="q1 radio">不同意</label>
            <label for="q1-1"><input id="q1-1" type="radio" name="q1" value="1" class="q1 radio">非常不同意</label>
        </div>
        <div class="question">
            <p>Q2:看影片時，我原本平靜的情緒受到影片影響而產生波動。</p>
            <label for="q2-7"><input id="q2-7" type="radio" name="q2" value="7" class="q2 radio">非常同意</label>
            <label for="q2-6"><input id="q2-6" type="radio" name="q2" value="6" class="q2 radio">同意</label>
            <label for="q2-5"><input id="q2-5" type="radio" name="q2" value="5" class="q2 radio">有點同意</label>
            <label for="q2-4"><input id="q2-4" type="radio" name="q2" value="4" class="q2 radio">普通</label>
            <label for="q2-3"><input id="q2-3" type="radio" name="q2" value="3" class="q2 radio">有點不同意</label>
            <label for="q2-2"><input id="q2-2" type="radio" name="q2" value="2" class="q2 radio">不同意</label>
            <label for="q2-1"><input id="q2-1" type="radio" name="q2" value="1" class="q2 radio">非常不同意</label>
        </div>
        <div class="question">
            <p>Q3:在看影片時，我的情緒有受到影片操控(被帶著走)。</p>
            <label for="q3-7"><input id="q3-7" type="radio" name="q3" value="7" class="q3 radio">非常同意</label>
            <label for="q3-6"><input id="q3-6" type="radio" name="q3" value="6" class="q3 radio">同意</label>
            <label for="q3-5"><input id="q3-5" type="radio" name="q3" value="5" class="q3 radio">有點同意</label>
            <label for="q3-4"><input id="q3-4" type="radio" name="q3" value="4" class="q3 radio">普通</label>
            <label for="q3-3"><input id="q3-3" type="radio" name="q3" value="3" class="q3 radio">有點不同意</label>
            <label for="q3-2"><input id="q3-2" type="radio" name="q3" value="2" class="q3 radio">不同意</label>
            <label for="q3-1"><input id="q3-1" type="radio" name="q3" value="1" class="q3 radio">非常不同意</label>
        </div>
        <div class="question">
            <p>Q4:我很喜歡這部廣告。</p>
           <label for="q4-7"> <input id="q4-7" type="radio" name="q4" value="7" class="q4 radio">非常同意</label>
           <label for="q4-6"> <input id="q4-6" type="radio" name="q4" value="6" class="q4 radio">同意</label>
           <label for="q4-5"> <input id="q4-5" type="radio" name="q4" value="5" class="q4 radio">有點同意</label>
           <label for="q4-4"> <input id="q4-4" type="radio" name="q4" value="4" class="q4 radio">普通</label>
           <label for="q4-3"> <input id="q4-3" type="radio" name="q4" value="3" class="q4 radio">有點不同意</label>
           <label for="q4-2"> <input id="q4-2" type="radio" name="q4" value="2" class="q4 radio">不同意</label>
           <label for="q4-1"> <input id="q4-1" type="radio" name="q4" value="1" class="q4 radio">非常不同意</label>
        </div>
        <div class="question">
            <p>Q5:我認為這部廣告很好。</p>
          <label for="q5-7" > <input id="q5-7" type="radio" name="q5" value="7" class="q5 radio">非常同意</label>
          <label for="q5-6" > <input id="q5-6" type="radio" name="q5" value="6" class="q5 radio">同意</label>
          <label for="q5-5" > <input id="q5-5" type="radio" name="q5" value="5" class="q5 radio">有點同意</label>
          <label for="q5-4" > <input id="q5-4" type="radio" name="q5" value="4" class="q5 radio">普通</label>
          <label for="q5-3" > <input id="q5-3" type="radio" name="q5" value="3" class="q5 radio">有點不同意</label>
          <label for="q5-2" > <input id="q5-2" type="radio" name="q5" value="2" class="q5 radio">不同意</label>
          <label for="q5-1" > <input id="q5-1" type="radio" name="q5" value="1" class="q5 radio">非常不同意</label>
        </div>
        <div class="question">
            <p>Q6:我認為這個廣告很吸引人。</p>
           <label for="q6-7"> <input id="q6-7" type="radio" name="q6" value="7" class="q6 radio">非常同意</label>
           <label for="q6-6"> <input id="q6-6" type="radio" name="q6" value="6" class="q6 radio">同意</label>
           <label for="q6-5"> <input id="q6-5" type="radio" name="q6" value="5" class="q6 radio">有點同意</label>
           <label for="q6-4"> <input id="q6-4" type="radio" name="q6" value="4" class="q6 radio">普通</label>
           <label for="q6-3"> <input id="q6-3" type="radio" name="q6" value="3" class="q6 radio">有點不同意</label>
           <label for="q6-2"> <input id="q6-2" type="radio" name="q6" value="2" class="q6 radio">不同意</label>
           <label for="q6-1"> <input id="q6-1" type="radio" name="q6" value="1" class="q6 radio">非常不同意</label>
        </div>
        <div class="question">
            <p>Q7:我認為這個廣告具有有趣性。</p>
           <label for="q7-7"> <input id="q7-7" type="radio" name="q7" value="7" class="q7 radio">非常同意</label>
           <label for="q7-6"> <input id="q7-6" type="radio" name="q7" value="6" class="q7 radio">同意</label>
           <label for="q7-5"> <input id="q7-5" type="radio" name="q7" value="5" class="q7 radio">有點同意</label>
           <label for="q7-4"> <input id="q7-4" type="radio" name="q7" value="4" class="q7 radio">普通</label>
           <label for="q7-3"> <input id="q7-3" type="radio" name="q7" value="3" class="q7 radio">有點不同意</label>
           <label for="q7-2"> <input id="q7-2" type="radio" name="q7" value="2" class="q7 radio">不同意</label>
           <label for="q7-1"> <input id="q7-1" type="radio" name="q7" value="1" class="q7 radio">非常不同意</label>
        </div>
        <div class="question">
            <p>Q8:我認為這個廣告具有懸疑性。</p>
           <label for="q8-7"> <input id="q8-7" type="radio" name="q8" value="7" class="q8 radio">非常同意</label>
           <label for="q8-6"> <input id="q8-6" type="radio" name="q8" value="6" class="q8 radio">同意</label>
           <label for="q8-5"> <input id="q8-5" type="radio" name="q8" value="5" class="q8 radio">有點同意</label>
           <label for="q8-4"> <input id="q8-4" type="radio" name="q8" value="4" class="q8 radio">普通</label>
           <label for="q8-3"> <input id="q8-3" type="radio" name="q8" value="3" class="q8 radio">有點不同意</label>
           <label for="q8-2"> <input id="q8-2" type="radio" name="q8" value="2" class="q8 radio">不同意</label>
           <label for="q8-1"> <input id="q8-1" type="radio" name="q8" value="1" class="q8 radio">非常不同意</label>
        </div>
        <div class="question">
            <p>Q9:我認為這個廣告敘事結構非常清楚。</p>
            <label for="q9-7"> <input id="q9-7" type="radio" name="q9" value="7" class="q9 radio">非常同意</label>
            <label for="q9-6"> <input id="q9-6" type="radio" name="q9" value="6" class="q9 radio">同意</label>
            <label for="q9-5"> <input id="q9-5" type="radio" name="q9" value="5" class="q9 radio">有點同意</label>
            <label for="q9-4"> <input id="q9-4" type="radio" name="q9" value="4" class="q9 radio">普通</label>
            <label for="q9-3"> <input id="q9-3" type="radio" name="q9" value="3" class="q9 radio">有點不同意</label>
            <label for="q9-2"> <input id="q9-2" type="radio" name="q9" value="2" class="q9 radio">不同意</label>
            <label for="q9-1"> <input id="q9-1" type="radio" name="q9" value="1" class="q9 radio">非常不同意</label>
        </div>
        
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <input type="hidden" value="<?php echo $code; ?>" name="code">
        <?php if(isset($_GET['v2'])){?> <input type="hidden" name="v2" value="<?php echo $_GET['v2'];?>"> <?php } ?>
        <?php if(isset($_GET['v3'])){?> <input type="hidden" name="v3" value="<?php echo $_GET['v3'];?>"> <?php } ?>
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
    const q7  = document.getElementsByClassName('q7');
    const q8  = document.getElementsByClassName('q8');
    const q9  = document.getElementsByClassName('q9');
    const radio = document.getElementsByClassName('radio');
    let q1bool = false;
    let q2bool = false;
    let q3bool = false;
    let q4bool = false;
    let q5bool = false;
    let q6bool = false;
    let q7bool = false;
    let q8bool = false;
    let q9bool = false;
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
            if(q7[i].checked){
                q7bool = true;
            }
            if(q8[i].checked){
                q8bool = true;
            }
            if(q9[i].checked){
                q9bool = true;
            }

            if(q1bool && q2bool && q3bool && q4bool && q5bool && q6bool && q7bool && q8bool && q9bool){
                totalbool = true;
                btn.disabled = false;
            }
            
        }
        // console.log("total=>", totalbool);
        
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