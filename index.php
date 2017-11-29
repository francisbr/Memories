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
    transform: translateY(110%);
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


<body data-spy="scroll" data-target=".navbar" data-offset="50">
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
    <div id="about" class="container-fluid">
  <h1>About</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="mission" class="container-fluid">
  <h1>Our Mission</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

</body>

<?php include "includes/footer.php"; ?>