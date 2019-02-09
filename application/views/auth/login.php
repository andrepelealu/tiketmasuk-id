<!-- <h2>Login</h2>

<?php echo form_open('auth/login') ?>
  <label for="">email</label>
  <input type="email" name="email" value="<?=set_value('email')?>"><br>

  <label for="">password</label>
  <?= form_error('password'); ?>

  <input type="password" name="password" ><br>
  <input type="submit" name="submit" value="login">

  <? form_close();?> -->

  <!DOCTYPE html>
  <html lang="en">

  <body>

  	<div class="limiter">
  		<div class="container-login100">
  			<div class="wrap-login100 p-b-160 p-t-50">

  				<form class="login100-form validate-form" action="<?php echo base_url()?>auth/login" method = post>

  					<span class="login100-form-title p-b-43">
  						Account Login
  					</span>

  					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
  						<input class="input100" type="text" name="email">
  						<span class="label-input100">Email</span>
  					</div>


  					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
  						<input class="input100" type="password" name="password">
  						<span class="label-input100">Password</span>
  					</div>

  					<div class="container-login100-form-btn">
  						<input type="submit" name="submit" value="login" class="login100-form-btn">

  					</div>

  					<div class="text-center w-full p-t-23">
  						<a href="#" class="txt1">
  							Forgot password?
  						</a>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>

  <? form_close();?>




  </body>
  </html>
