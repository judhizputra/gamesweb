				<? include 'header.php' ?>
				<div id="main-box" class="full-width">
					
					<div id="main">
						<div class="signup-panel">

							<div class="left">
								<div class="auth-tab" id="auth-login">
									<h2><span>Masuk Revelio</span></h2>
									<div class="content-padding">

										<p class="p-padding">Silahkan masuk dengan menggunakan email atau username dan password yang Anda daftarkan.</p>

										<div class="the-form">
											<form>

												<!-- <p>
													<span class="the-error-msg"><i class="fa fa-warning"></i>You got an error</span>
													<span class="the-success-msg"><i class="fa fa-check"></i>This is success</span>
													<span class="the-alert-msg"><i class="fa fa-warning"></i>This is alert message</span>
												</p> -->

												<p>
													<label for="login_username">Email / Username:</label>
													<input type="text" name="login_username" id="login_username" value="" />
												</p>

												<p>
													<label for="login_password">Password:</label>
													<input type="password" name="login_password" id="login_password" value="" />
												</p>

												<p class="form-footer">
													<input type="submit" name="login_submit" id="login-btn" value="Masuk" />
												</p>

												<p style="margin-top:40px;">
													<span class="info-msg">Jika belum memiliki akun, <a href="javascript:void(0)" class="auth-link" data-target="#auth-register">daftar sekarang</a> !<br /><br />Jika lupa password <a href="javascript:void(0)" class="auth-link" data-target="#auth-forgot">klik disini</a>, kami akan membantu reset password Anda !</span>
												</p>

											</form>
										</div>

									</div>
								</div>

								<div class="auth-tab" id="auth-register">
								<h2><span>Daftar Revelio</span></h2>
									<div class="content-padding">

										<p class="p-padding">Silahkan masukan data diri Anda. Kolom yang bertanda <span class="required">*</span> wajib diisi.</p>

										<div class="the-form">
											<form>

												<p>
													<label for="signup_username"><span class="required">*</span> Username:</label>
													<input type="text"/>
												</p>

												<p>
													<label for="signup_name"><span class="required">*</span> Nama:</label>
													<input type="text"/>
												</p>

												<p>
													<label for="signup_email"><span class="required">*</span> E-mail:</label>
													<input class="error-input" type="text" name="signup_email" id="signup_email" value="" />
													<span class="error-msg">E-mail harus diisi !</span>
												</p>

												<p>
													<label for="signup_password"><span class="required">*</span> Password:</label>
													<input type="password"/>
												</p>

												<p>
													<label for="signup_password_r"><span class="required">*</span> Ulang Password:</label>
													<input type="password"/>
												</p>

												<p class="form-footer">
													<input type="submit" value="Daftar" />
												</p>

												<p>
													<span class="info-msg">Jika sudah memiliki akun silahkan <a href="javascript:void(0)" class="auth-link" data-target="#auth-login">masuk</a> !</span>
												</p>

											</form>
										</div>

									</div>
								</div>

								<div class="auth-tab" id="auth-forgot">
									<h2><span>Pemulihan Password</span></h2>
									<div class="content-padding">
										
										<div class="the-form" style="margin-top:40px;">
											<form>

												<p>
													<label for="forgot_email">E-mail:</label>
													<input type="text"/>
												</p>

												<p class="form-footer">
													<input type="submit"value="Kirim Link" />
												</p>

												<p style="margin-top:40px;">
													<span class="info-msg">Kami akan mengirimkan email berupa link yang dapat Anda gunakan untuk reset password. <br /><br />Jika reset password sudah berhasil silahkan <a href="javascript:void(0)" class="auth-link" data-target="#auth-login">masuk !</a></span>
												</p>

											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="right">
								<h2><span>Apa itu Revelio ?</span></h2>
								<div class="content-padding">
									
									<div class="form-split-about">
										<p class="p-padding">Lorem ipsum dolor sit amet, natum referrentur sea no. Sensibus definitionem necessitatibus id vim, eu ornatus intellegat argumentum nam. Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua. Accumsan scripserit cu mel, ut dolorem adolescens per.</p>

										<ul>
											<li>
												<i class="fa fa-book"></i>
												<b>Id ius facete urbanitas concludaturque mea</b>
												<p class="p-padding">Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua.</p>
											</li>
											
											<li>
												<i class="fa fa-gamepad"></i>
												<b>Id ius facete urbanitas concludaturque mea</b>
												<p class="p-padding">Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua. Accumsan scripserit cu mel, ut dolorem adolescens per.</p>
											</li>
											
											<li>
												<i class="fa fa-camera-retro"></i>
												<b>Id ius facete urbanitas concludaturque mea</b>
												<p class="p-padding">Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua.</p>
											</li>
											
											<li>
												<i class="fa fa-film"></i>
												<b>Id ius facete urbanitas concludaturque mea</b>
												<p class="p-padding">Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua.</p>
											</li>
										</ul>
										
									</div>
									
								</div>
							</div>

							<div class="clear-float"></div>
						</div>
						
					</div>
					
					<div class="clear-float"></div>
					
				</div>
				<? include 'footer.php' ?>