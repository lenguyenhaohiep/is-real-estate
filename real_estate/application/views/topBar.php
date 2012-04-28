<div id="top-bar" class="span-24">
	<ul id="top-menu" class="span-24">
		<li class="company-name"><a href="<?=base_url()?>index.php">RE2Y</a></li>
		<li class="top-menu-item dropdown">
			<a href="#">Thông tin nhà đất</a>
			<ul class="sub-menu">
				<li><a href="<?=base_url()?>index.php/realestate">Nhà đất bán</a></li>
				<li><a href="<?=base_url()?>index.php/realestate">Nhà đất cho thuê</a></li>
			</ul>
		</li>
		<li class="top-menu-item"><a href="<?=base_url()?>index.php/search">Tìm kiếm</a></li>
		<li class="top-menu-item"><a href="<?=base_url()?>index.php">Liên hệ</a></li>
		<li class="top-menu-item dropdown">
			<a href="">Quản lý</a>
			<ul class="sub-menu">
				<li><a href="<?=base_url()?>index.php/user">Quản lý tài khoản</a></li>
				<li><a href="<?=base_url()?>index.php/realestate">Quản lý tin</a></li>
			</ul>
		</li>
	</ul>
	<span id="top-right-area">
		<a href="<?=base_url()?>index.php/shoppingcart" class="cart_btn">
			<span class="cart_item_num"><?=2?></span>
			<span class="cart_img_holder">Giỏ tin</span>
		</a>
		<ul class="login_signup_wrap">
			<li class="blue_btn" style="float: left">
				<a href="<?=base_url()?>index.php/login" class="left_btn">Đăng nhập</a>
			</li>
			<li class="blue_btn">
				<a href="<?=base_url()?>index.php/register" class="right_btn">Đăng ký
					<div class="right_arrow"></div>
				</a>
			</li>
		</ul>
	</span>
</div>
