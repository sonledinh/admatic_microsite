<?php include 'header.php';?>
<main class="admatic-main">
	<section class="head-top">
		<div class="header-top text-center">
	        <div class="container-fluid">
	        	<div class="scr-menu">
		            <ul>
		               <li><a href="index.php">QUY TRÌNH NỘI BỘ</a></li>
		               <li><a href="plan.php" class="active">GỬI YÊU CẦU TƯ <br>VẤN PLANNING</a></li>
		               <li><a href="program.php">MẪU THÔNG TIN <br>VẬN HÀNH</a></li>
		               <li><a href="pattern.php">MẪU ĐÁNH SỐ</a></li>
		            </ul>
	            </div>
	        </div>
        </div>
	</section>
	<section class="box-plan">
		<div class="icon-puller"><img src="images/icon-left.png" class="img-fluid" alt=""></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="left-plan left-text">
						<div class="title">ORDER PLAN <br>& QUOTATION</div>
						<div class="list-form">
							<div class="item d-block">
								<label class="d-block">Brand/Nhãn hàng:</label>
								<input type="text" class="txt-form">
							</div>
							<div class="item d-block">
								<label class="d-block">Buying method/ Cách mua:</label>
								<select name="" class="w-100">
									<option value=""></option>
									<option value="">option 1</option>
									<option value="">option 2</option>
									<option value="">option 3</option>
								</select>
							</div>
							<div class="item item-note">
								<p>If buying method is Programmatic, please fill information in this row</p>
								<p>Nếu chọn cách mua Programmatic, xin hãy điền thêm thông tin này: </p>
							</div>
							<div class="item">
								<label>Platform/nền tảng:</label>
								<select name="">
									<option value=""></option>
									<option value="">option 1</option>
									<option value="">option 2</option>
									<option value="">option 3</option>
								</select>
							</div>
							<div class="item">
								<label>Type of deal:</label>
								<select name="">
									<option value=""></option>
									<option value="">option 1</option>
									<option value="">option 2</option>
									<option value="">option 3</option>
								</select>
							</div>
							<div class="item">
								<label>Payment/ thanh toán: </label>
								<select name="">
									<option value=""></option>
									<option value="">option 1</option>
									<option value="">option 2</option>
									<option value="">option 3</option>
								</select>
							</div>
							<div class="item item-btn">
								<div class="btn-form">
									<ul class="list-inline text-uppercase">
										<li class="list-inline-item"><a href="">Tải form</a></li>
										<li class="list-inline-item"><input type="submit" value="Submit" class="btn-submit"></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main> 
<?php include 'footer.php';?>      