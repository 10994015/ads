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
    <style>
        #app{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: "標楷體";
        }
    td{
        padding: 2px 20px;
        width:200px;
    }
    .qnumber{
        text-align: center;
        width:40px;
    }
    .tabletitle >td{
        height: 20px;
    }
    #submit{
        float: right;
        width:100px;
        height: 35px;
        margin-top: 15px;
        
        }
    
    </style>
</head>
<body>
    
<div id="app">

    
<form action="./checkinfor.php" method="post">
<p style="text-align:center">謝謝您幫我完成三支廣告的觀賞，以下還有簡單的基本資料:</p>
<table border="1">
    <tr class="tabletitle">
        <td class="qnumber">題號</td>
        <td colspan="2">問項</td>
    </tr>
    <tr>
        <td rowspan="2" class="qnumber">1</td>
        <td colspan="2"><b>性別:</b></td>
    </tr>
    <tr>
        <td colspan="2"><label for="men"><input id="men" type="radio" name="gender" value="男" class="gender radio">男</label> <label for="women"><input id="women" type="radio" value="女" name="gender" class="gender radio">女</label></td>
    </tr>
    <tr>
        <td rowspan="4" class="qnumber">2</td>
        <td colspan="2"><b>年齡:</b></td>
    </tr>
    <tr>
        <td><label for="age1"><input id="age1" type="radio" name="age" value="20歲(含)以下" class="age radio">20歲(含)以下</label></td>
        <td><label for="age2"><input id="age2" type="radio" value="21~30歲" name="age" class="age radio">21~30歲</label></td>
    </tr>
    <tr>
        <td> <label for="age3"><input id="age3" type="radio" value="31~40歲" name="age" class="age radio">31~40歲</label></td>
        <td><label for="age4"><input id="age4" type="radio" value="41~50歲" name="age" class="age radio">41~50歲</label></td>
    </tr>
    <tr>
        <td><label for="age5"><input id="age5" type="radio" value="51~60歲" name="age" class="age radio">51~60歲</label></td>
        <td><label for="age6"><input id="age6" type="radio" value="61歲(含)以上" name="age" class="age radio">61歲(含)以上</label></td>
    </tr>
    <tr>
        <td rowspan="4" class="qnumber">3</td>
        <td colspan="2"><b>平均一天網路使用時間:</b></td>
    </tr>
    <tr>
        <td><label for="n1"><input id="n1" type="radio" value="1小時以下" name="network" class="network radio">1小時以下</label></td>
        <td><label for="n2"><input id="n2" type="radio" value="1小時~2小時" name="network" class="network radio">1小時~2小時</label></td>
    </tr>
    <tr>
        <td><label for="n3"><input id="n3" type="radio" value="2小時~3小時" name="network" class="network radio">2小時~3小時</label></td>
        <td><label for="n4"><input id="n4" type="radio" value="3小時~4小時" name="network" class="network radio">3小時~4小時</label></td>
    </tr>
    <tr>
        <td><label for="n5"><input id="n5" type="radio" value="4小時以上" name="network" class="network radio">4小時以上</label></td>
        <td></td>
    </tr>
</table>
<input type="hidden" value="<?php echo $code;?>" name="code">
<input type="submit" value="送出" id="submit" disabled>
</form>

</div>
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