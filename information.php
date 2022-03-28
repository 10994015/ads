<?php
if(isset($_GET['code'])){
    $code = $_GET['code'];
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<form action="./checkinfor.php" method="post">
<div>性別: <input type="radio" name="gender" value="男" class="gender radio">男 <input type="radio" value="女" name="gender" class="gender radio"> 女</div>
<div>年齡: <input type="radio" name="age" value="20歲(含)以下" class="age radio">20歲(含)以下 <input type="radio" value="21~30歲" name="age" class="age radio">21~30歲 <input type="radio" value="31~40歲" name="age" class="age radio">31~40歲 <input type="radio" value="41~50歲" name="age" class="age radio"> 41~50歲 <input type="radio" value="51~60歲" name="age" class="age radio">51~60歲 <input type="radio" value="61歲(含)以上" name="age" class="age radio"> 61歲(含)以上</div>
<div>平均一天使用網路時間: <input type="radio" value="1小時以下" name="network" class="network radio">1小時以下 <input type="radio" value="1小時~2小時" name="network" class="network radio"> 1小時~2小時 <input type="radio" value="2小時~3小時" name="network" class="network radio">2小時~3小時<input type="radio" value="3小時~4小時" name="network" class="network radio">3小時~4小時<input type="radio" value="4小時以上" name="network" class="network radio">4小時以上</div>
<input type="hidden" value="<?php echo $code;?>" name="code">
<input type="submit" value="送出" id="submit" disabled>
</form>

<script>
const gender = document.getElementsByClassName('gender');
const age = document.getElementsByClassName('age');
const network = document.getElementsByClassName('network');
const radio = document.getElementsByClassName('radio');
const submit = document.getElementById('submit');
let genderbool = false;
let agebool = false;
let networkbool = false;

const send = ()=>{
    for(let s=0;s<gender.length;s++){
        if(gender[s].checked){
            genderbool = true;
        }
    }
    for(let s=0;s<age.length;s++){
        if(age[s].checked){
            agebool = true;
        }
    }
    for(let s=0;s<network.length;s++){
        if(network[s].checked){
            networkbool = true;
        }
    }

    if(genderbool && agebool && networkbool){
        submit.disabled = false;
    }
}

for(let i=0;i<radio.length;i++){
    radio[i].addEventListener('click',send);
}

</script>
</body>
</html>
<?php }else{echo "錯誤!";}?>