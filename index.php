<?php include "includes/header.php"; ?>

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


<body>
    <div style="background-color: #000000; margin-top: -20.9px;">
        <div class="videoContainer" >
            <video id="bgVideo" autoplay loop muted="">
                <source src="video1.mp4" type="video/mp4"></source>
            </video>
            <div class="center" >
                <h1 style="margin-bottom: 30px;"><strong>Memories</strong></h1>
                <form>
                    <div class="input-group" style="width: 400px; margin-left: 50%; transform: translateX(-50%); ">
                        <input type="text" class="form-control" placeholder="Going to Montreal?"/>
                        <div class="input-group-btn">
                            <a href="search_videograph.php" class="btn btn-success" role="button">Go!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="container">
       <h1>Some random shits </h1>
   </div>

</body>

<?php include "includes/footer.php"; ?>