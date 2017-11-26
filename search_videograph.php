<title>Searching videograph</title>
<?php include "includes/header.php"; ?>
<style type="text/css">
.profile_pic {
	width: 100%;
	height: 80px;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: 50% 50%;
};
</style>


<div class="container">

	<form style="margin: 20px 70px;">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Going to Paris?"/>
			<div class="input-group-btn">
				<a href="search_videograph.php" class="btn btn-success" role="button">Go!</a>
			</div>
		</div>
	</form>


	<h1 style="margin-bottom: 30px;">What we found:</h1>

	<div class="row">
		<div class="col-sm-4">
			<a href="#" style="color: #000000">
				<div class="panel panel-primary" style="background-color: #000000">
					<video class="panel-body video" style="width: 100%; margin: -14.87px; margin-left: 50%; transform: translateX(-50%);" id="bgVideo" loop  muted="" preload autoplay>
						<source src="video1.mp4" type="video/mp4"></source>
					</video>

					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-4">
								<div class="profile_pic" style="background-image: url('tigre.jpg');"></div>
							</div>
							<div class="col-sm-8"><strong>Nom</strong><p><small>Simple description, easy peasy. Have fun one the website!</small></p></div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-sm-4">
			<a href="#" style="color: #000000">
				<div class="panel panel-primary" style="background-color: #000000">
					<video class="panel-body video" style="width: 100%; margin: -14.87px; margin-left: 50%; transform: translateX(-50%);" id="bgVideo" loop  muted="" preload autoplay>
						<source src="video1.mp4" type="video/mp4"></source>
					</video>

					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-4">
								<div class="profile_pic" style="background-image: url('tigre.jpg');"></div>
							</div>
							<div class="col-sm-8"><strong>Nom</strong><p><small>Simple description, easy peasy. Have fun one the website!</small></p></div>
						</div>
					</div>
				</div>
			</a>
		</div>

	</div>

</div>

<?php include "includes/footer.php"; ?>