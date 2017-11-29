<!DOCTYPE html>
<html>
<head>
    <title>Memories</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-HzUaiJdCTIY/RL2vDPRGdEQHHahjzwoJJzGUkYjHVzTwXFQ2QN/nVgX7tzoMW3Ov" crossorigin="anonymous">
    <style>
    .videoContainer {
        width: 100%;
    }

    .center {
        position: absolute;
        left: 0;
        width: 100%;
        margin-top: -50%;
        text-align: center;
        transform: translateY(100%);
        font-size: 18px;
        text-shadow: 0px 0px 8px #aaaaaa;
    }

    video { 
        position: relative;

        left: 50%;
        transform: translateX(-50%);
        height: auto;
        overflow: hidden;
        
        height: 100%;
        width: 100%;
    }
</style>
</head>

<nav class="navbar navbar-default" style="z-index: 1;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Memories</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Our Goal</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
        </ul>
    </div>
</nav>
