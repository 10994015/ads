<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./vedio.css">
</head>
<body>
<div class="opacity"></div>
    <div id="app">
        <video width="640" height="480" id="video" playsinline>
            <source src="./videos/A.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
        </video>
        <form action="sava.php" method="post">
            <div id="btn">播放</div>
            <input type="submit" id="step" value="略過廣告">
            <input type="hidden" value="" name="second" id="second">
            <input type="hidden" value="<?php echo $_GET['code'];?>" name="code">
            <input type="hidden" value="1" name="vedio">
            <?php if(isset($_GET['v1'])){ ?><input type="hidden" name="v1" value="<?php echo $_GET['v1'];?>"> <?php }?>
            <?php if(isset($_GET['v2'])){ ?><input type="hidden" name="v2" value="<?php echo $_GET['v2'];?>"> <?php }?>
            <?php if(isset($_GET['v3'])){ ?><input type="hidden" name="v3" value="<?php echo $_GET['v3'];?>"> <?php }?>
        </form>
    </div>
    
    <h1 id="num" style="opacity:0">0</h1>

    <script>
    const btn = document.getElementById('btn');
    const video = document.getElementById('video');
    const step = document.getElementById('step');
    let times = 0;
    const num = document.getElementById('num');
    let timer = null;
    const second = document.getElementById('second');

    const play = ()=>{
        btn.style.display = "none";
        step.style.display = "block";
        video.play();
        setTimeout(()=>{
            step.value = "下一頁";
            console.log("ok");
        },58000)
        timer = setInterval(()=>{
            times++;
            num.innerHTML = times + "秒";
            if(times===58){
                clearInterval(timer);
            }
        },1000)
    }
    btn.addEventListener('click',play);
    step.addEventListener('click',()=>{
        second.value = times;
    });
    </script>
</body>
</html>