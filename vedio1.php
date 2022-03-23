<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        video::-webkit-media-controls-fullscreen-button {
        display: none;
    }
    video::-webkit-media-controls-play-button {
        display: none;
    }
    video::-webkit-media-controls-timeline {
        display: none;
    }
    video::-webkit-media-controls-current-time-display{
        display: none;            
    }
    video::-webkit-media-controls-time-remaining-display {
        display: none;            
    }
    video::-webkit-media-controls-mute-button {
        display: none;            
    }
    video::-webkit-media-controls-toggle-closed-captions-button {
        display: none;            
    }
    video::-webkit-media-controls-volume-slider {
        display: none;            
    }
    video::-webkit-media-controls-enclosure{ 
        display: none;
    }
    .opacity{
        width:100%;
        height: 100%;
        position: fixed;
        top: 0;
        left:0;
        z-index: 999;
        background-color: transparent;
    }
    #btn{
        z-index: 99999;
        width:100px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        font-weight: 600;
        background-color: #ccc;
        cursor:pointer;
        font-size: 16px;
        position: absolute;
        top: 0;
        left:0;
    }
    #step{
       width:100px;
       height: 40px;
       background-color: #ccc;
       border:none;
       outline: none;
        font-weight: 600;
        font-size: 16px;
        z-index: 99999;
        cursor: pointer;
        display: none;
        position: absolute;
        top: 0;
        right:0;
    }
    form{
        position: relative;
        position: absolute;
        z-index: 9999999999;
        left:50%;
        top:500px;
        width:640px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transform: translateX(-50%);
    }
    #app{
        display: flex;
        justify-content: center;
    }

    </style>
</head>
<body>
<div class="opacity"></div>
    <div id="app">
        <video width="640" height="480" controls id="video">
            <source src="./videos/001.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
        </video>
        <form action="sava.php" method="post">
            <div id="btn">播放</div>
            <input type="submit" id="step" value="略過廣告">
            <input type="hidden" value="" name="second" id="second">
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
            step.innerHTML = "下一頁";
        },112000)
        timer = setInterval(()=>{
            times++;
            num.innerHTML = times + "秒";
            if(times===112){
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