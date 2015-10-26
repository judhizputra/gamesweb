							<div class="profile-shadow"></div>

							<!-- BEGIN .profile-left-side -->
							<div class="profile-left-side">

								<div class="the-profile-top">
									<div class="profile-user-name">
										<h1>Master_Kadong</h1>
									</div>

									<div class="avatar">
										<div class="avatar-button">
											<span><i class="fa fa-camera-retro"></i>Ubah Foto</span>
											<input class="upload" type="file">
										</div>
										<img src="img/photos/avatar-13.jpg" class="setborder" alt="" />
									</div>
								</div>
								
								<div class="the-profile-navi">
									<ul class="profile-navi">
										<li>&nbsp;</li>
										<li <? if(basename($_SERVER['PHP_SELF']) == 'dashboard.php'){ echo 'class="active"'; } ?>><a href="dashboard.php"><i class="fa fa-globe"></i>Info profil</a></li>
										<li <? if(basename($_SERVER['PHP_SELF']) == 'dashboard-article.php'){ echo 'class="active"'; } ?>><a href="dashboard-article.php"><i class="fa fa-book"></i>Artikel</a></li>
										<li <? if(basename($_SERVER['PHP_SELF']) == 'dashboard-guest.php'){ echo 'class="active"'; } ?>><a href="dashboard-guest.php"><i class="fa fa-comment-o"></i>Buku tamu</a></li>
									</ul>
								</div>

								<div class="profile-panel instagram"></div>

							<!-- END .profile-left-side -->
							</div>