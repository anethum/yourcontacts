<? $this->load->view('includes/header'); ?>
<? $this->load->view('includes/nli_navbar'); ?>
<div class="container">
	<div class="content">
		<div class="page-header">
			<h1>Login</h1>
		</div>
		<div class="row">
			<div class="span4">
				<form class="well" action="<?=site_url('login/check_login')?>" method="post" accept-charset="utf-8">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input type="text" class="input-large" name="email" placeholder="Email" required maxlength="40" autofocus />
					</div>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span>
						<input type="password" class="input-large" name="pwd" placeholder="Password" required maxlength="20" />
					</div>
					<button type="submit" class="btn btn-primary btn-large">
					<i class="icon-home icon-white"></i> Login</button>
				</form>
			</div>
		</div>
		<? if($message == TRUE): ?>
		<div class="row">
			<div class="span4">
				<div class="alert alert-error">
					<strong>Login</strong> failed!.
				</div>
			</div>
		</div>
		<? else: ?>
		<div class="row">
			<div class="span4">
				<div class="alert alert-info">
					<p><strong>You</strong> are not logged in!</p>
					<small>No Account? </small>
					<a href="<?=site_url('signup')?>" class="btn btn-info"><i class="icon-arrow-right icon-white"></i> sign up now</a>
				</div>
			</div>
		</div>
		<? endif; ?>
	</div>
	<footer>
		<p>&copy; 2012 built with CodeIgniter 2.1.0 and Twitter Bootstrap 2.0.1</p>
	</footer>
	<div class="pull-right">
		<a href="<?=site_url('admin')?>" class="btn btn-danger" style="position:fixed; bottom:0;"><i class="icon-flag icon-white"></i> Admin</a>
	</div>
</div><!-- /container -->
</body>
</html>
