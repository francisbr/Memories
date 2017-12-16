<?php include "includes/header.php"; ?>

<style>
.profile_pic {
    width: 65px;
    height: 65px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    margin: 0 auto;
}

.bg-img {
    height: 600px;
    background-position: 50% 30%;
    background: linear-gradient(transparent, #ffffff), url("bg.jpg") ;
    background-size: cover;
    margin-bottom: -10%;
}
</style>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<div class="bg-img"></div>

<div class="container text-center">
    <div class="row">
        <div class="col-sm-3 well">
            <div class="well">
                <p>John Doe</p>
                <div class="profile_pic img-circle" style="background-image: url('pp.jpg');"></div>
            </div>
            <div class="well">
                <p>Age: <span class="label label-primary">22</span></p>
                <p>Location: <span class="label label-primary">Montreal</span></p>
                <p>Experience: <span class="label label-primary">3 years</span></p>
                <p>Speciality: <span class="label label-primary">Slow Motion</span></p>

            </div>
            <!-- CHOOSE BETWEEN THOSE TWO (OVER & UNDER) -->
            <div class="well">
                <span class="label label-default" data-toggle="tooltip" title="Age">22</span>
                <span class="label label-primary" data-toggle="tooltip" title="Location">Montreal</span>
                <span class="label label-success" data-toggle="tooltip" title="Experience">3 years</span>
                <span class="label label-info" data-toggle="tooltip" title="Speciality">Slow Motion</span>
                <span class="label label-warning">Warning Label</span>
                <span class="label label-danger">Danger Label</span>
            </div>

            <div class="alert alert-success fade in out">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p><strong>Ey!</strong></p>
                People are looking at your profile. Find out who.
            </div>
            <p><a href="#">Book a Trip</a></p>
            <p><a href="#">Ask me a question</a></p>
            <p><a href="#">Link</a></p>
        </div>

        <div class="col-sm-9 ">
            <div class="row" style="text-align:left;">
                <div class="col-sm-7">
                    <div class="well" style="height: 100%">
                        <h3 class="text-primary">My Work</h3>
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="well">
                        <h3 class="text-primary">A Little About Me</h3>
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align: left;">
                <div class="col-sm-12">
                    <div class="well">
                        <h3 class="text-primary">Some Random Stuff</h3>
                        <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <h3 class="text-primary">My videos</h3>

                        <div class="row" style="margin-top: 30px;">
                            <div class="col-sm-4">
                                <video class="panel-body video" style="width: 100%; margin: -14.87px; margin-left: 50%; transform: translateX(-50%);" id="bgVideo" loop  muted="" onmouseover="this.play();" onmouseout="this.pause();">
            						<source src="video1.mp4" type="video/mp4"></source>
            					</video>
                            </div>
                            <div class="col-sm-4">
                                <video class="panel-body video" style="width: 100%; margin: -14.87px; margin-left: 50%; transform: translateX(-50%);" id="bgVideo" loop  muted="" onmouseover="this.play();" onmouseout="this.pause();">
            						<source src="video1.mp4" type="video/mp4"></source>
            					</video>
                            </div>
                            <div class="col-sm-4">
                                <video class="panel-body video" style="width: 100%; margin: -14.87px; margin-left: 50%; transform: translateX(-50%);" id="bgVideo" loop  muted="" onmouseover="this.play();" onmouseout="this.pause();">
            						<source src="video1.mp4" type="video/mp4"></source>
            					</video>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php include "includes/footer.php"; ?>
