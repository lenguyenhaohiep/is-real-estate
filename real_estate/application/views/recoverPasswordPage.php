<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>RE2Y - Real Estate to You</title>
	<!--[if IE]>
		<link rel="stylesheet" href="<?=base_url()?>css/blueprint/ie.css" type="text/css" media="screen"/>
	<![endif]-->
	<link rel="stylesheet" href="<?=base_url()?>css/blueprint/screen.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?=base_url()?>css/blueprint/print.css" type="text/css" media="print"/>
	<link rel="stylesheet" href="<?=base_url()?>css/style.css" type="text/css" media="screen"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=base_url()?>css/validationEngine.jquery.css" type="text/css" media="screen"/>
	
	<script src="<?=base_url()?>js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/jquery.validationEngine.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/jquery.validationEngine-vi.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$('.dropdown').hover(function() {
			$(this).children('.sub-menu').slideDown(200);
		}, function() {
			$(this).children('.sub-menu').hide();
		});
		$('#signin_frm').validationEngine('attach');
	})
	</script>
</head>
<body>
	<?=$topBar?>
	<div class="container">
		<div class="signin-container" style="margin-top: 20%;">
			<div class="form-title">
				Khôi phục mật khẩu
			</div>
			<form action="<?=base_url()?>index.php/login/recoverpass" method="post" id="signin_frm">
				<table>
					<tr>
						<td class="label_holder"><label for="username">Email đăng kí:</label></td>
						<td><input type="text" name="email" id="email" class="validate[required,custom[email]]"/></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: right;">
							<input type="submit" class="submit_btn" value="Xác nhận"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>