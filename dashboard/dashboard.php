<?php
include_once('connect.php');

?>
<div class="main-container">
	<!-- Row start -->
	<div class="row gutters">
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div id="month">
				<?php
				$query = "SELECT month(ngayhachtoan) FROM `NKC` GROUP BY month(ngayhachtoan) ";

				$result1 = mysqli_query($conn, $query);

				$options = "";
				?>
				<label>Month:</label>
				<select>
					<?php while ($row = mysqli_fetch_array($result1)) :; ?>

						<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>

					<?php endwhile; ?>
				</select>
			</div>
		</div>
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div id="year">
				<?php
				$query = "SELECT year(ngayhachtoan) FROM `NKC` GROUP BY year(ngayhachtoan)";

				$result2 = mysqli_query($conn, $query);

				$options = "";
				?>
				<label>Year:</label>
				<select>
					<?php while ($row = mysqli_fetch_array($result2)) :; ?>

						<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>

					<?php endwhile; ?>
				</select>
			</div>
		</div>
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div id="year">
				<?php
				$query = "SELECT DISTINCT makd FROM `kehoachdoanhthu`
				 ";

				$result3 = mysqli_query($conn, $query);

				$options = "";
				?>
				<label>Mã Kinh Doanh:</label>
				<select>
					<?php while ($row = mysqli_fetch_array($result3)) :; ?>

						<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>

					<?php endwhile; ?>
				</select>
			</div>
		</div>
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div id="year">
				<?php
				$query = "SELECT `COLUMN_NAME` 
				FROM `INFORMATION_SCHEMA`.`COLUMNS` 
				WHERE `TABLE_SCHEMA`='u377427595_DUCTEST' 
					AND `TABLE_NAME`='kehoachdoanhthu'
					LIMIT 7,14";

				$result4 = mysqli_query($conn, $query);

				$options = "";
				?>
				<label>Hạng Mục:</label>
				<select>
					<?php while ($row = mysqli_fetch_array($result4)) :; ?>

						<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>

					<?php endwhile; ?>
				</select>
			</div>
		</div>
	</div>
	<!-- End start -->

	<!-- Row start -->
	<div class="row gutters">
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div class="info-tiles">
				<div class="info-icon">
					<i class="icon-account_circle"></i>
				</div>
				<div class="stats-detail">
					<?php
					$query = " SELECT phatsinhno FROM `NKC` ";
					$result5 = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result5) ;
					?>
					<h3>
							<?php 
								echo $row['phatsinhno'];
							?>
					</h3>
					<p>Doanh thu thuần</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div class="info-tiles">
				<div class="info-icon">
					<i class="icon-watch_later"></i>
				</div>
				<div class="stats-detail">
					<h3>2k</h3>
					<p>Đại lý</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div class="info-tiles">
				<div class="info-icon">
					<i class="icon-visibility"></i>
				</div>
				<div class="stats-detail">
					<h3>70k</h3>
					<p>Khách đến cửa hàng</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div class="info-tiles">
				<div class="info-icon">
					<i class="icon-shopping_basket"></i>
				</div>
				<div class="stats-detail">
					<h3>9.000k</h3>
					<p>Doanh thu</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div class="info-tiles">
				<div class="info-icon secondary">
					<i class="icon-check_circle"></i>
				</div>
				<div class="stats-detail">
					<h3>3k</h3>
					<p>Đơn hàng</p>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6">
			<div class="info-tiles">
				<div class="info-icon secondary">
					<i class="icon-archive"></i>
				</div>
				<div class="stats-detail">
					<h3>2,5k</h3>
					<p>Orders</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Row ends -->

	<!-- Row starts -->

	<div class="row gutters">
		<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card h-280">
				<div class="card-header">
					<div class="card-title">Orders</div>
				</div>
				<div class="card-body">
					<div class="chartist bar-scheme-one">
						<div class="barChartOrders"></div>
					</div>
					<div class="row gutters justify-content-center">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<div class="info-stats m-0">
								<span class="info-label"></span>
								<p class="info-title">Online Orders</p>
								<h3 class="info-total">950k</h3>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<div class="info-stats m-0">
								<span class="info-label secondary"></span>
								<p class="info-title">Direct Orders</p>
								<h3 class="info-total">300k</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card h-280 agenda-bg">
				<div class="card-body">
					<div class="agenda">
						<div class="todays-date">
							<h5>Công việc - <span class="date" id="todays-date"></span></h5>
						</div>
						<ul class="agenda-list">
							<li>
								<span class="bullet">&nbsp;</span>
								<div class="details">
									<p>Gọi cho khách A</p>
									<small>09:00</small>
								</div>
							</li>
							<li>
								<span class="bullet">&nbsp;</span>
								<div class="details">
									<p>Book chương trình teambulding</p>
									<small>09:30</small>
								</div>
							</li>
							<li>
								<span class="bullet">&nbsp;</span>
								<div class="details">
									<p>Book vé công tác cho anh B (TPKD)</p>
									<small>10:00</small>
								</div>
							</li>
							<li>
								<span class="bullet secondary">&nbsp;</span>
								<div class="details">
									<p>Liên hệ nhà cung cấp C</p>
									<small>09:00</small>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Row end -->

	<!-- Row starts -->
	<div class="row gutters">
		<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card h-420">
				<div class="card-header">
					<div class="card-title">SỐ LƯỢNG KHÁCH HÀNG</div>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-xl-10">
							<div id="world-map-markers2" class="chart-height-md1"></div>
						</div>
					</div>
					<div class="row gutters justify-content-center">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-stats">
								<span class="info-label"></span>
								<p class="info-title">Khách hàng đến shop</p>
								<h3 class="info-total">9000</h3>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-stats">
								<span class="info-label"></span>
								<p class="info-title">Khách hàng order</p>
								<h3 class="info-total">8000</h3>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="info-stats">
								<span class="info-label secondary"></span>
								<p class="info-title">Số lượng đơn hoàn</p>
								<h3 class="info-total">75</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card h-420">
				<div class="card-header">
					<div class="card-title">Báo cáo doanh thu</div>
				</div>
				<div class="card-body">
					<div class="chartist threshold-scheme">
						<div class="thresholdChart"></div>
					</div>
					<!-- Row starts -->
					<div class="row gutters">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="overall-earnings">
								<div class="earnings-icon">
									<i class="icon-local_airport"></i>
								</div>
								<div class="earnings-stats">
									<p>Online</p>
									<h3>$75,000</h3>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
							<div class="overall-earnings">
								<div class="earnings-icon dark">
									<i class="icon-star"></i>
								</div>
								<div class="earnings-stats">
									<p>Bán buôn</p>
									<h3>$95,000</h3>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
							<div class="overall-earnings">
								<div class="earnings-icon secondary">
									<i class="icon-local_taxi"></i>
								</div>
								<div class="earnings-stats">
									<p>Bán lẻ</p>
									<h3>$32,000</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- Row ends -->
				</div>
			</div>
		</div>
	</div>
	<!-- Row ends -->

	<!-- Row start -->
	<div class="row gutters">
		<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card h-320">
				<div class="card-header">
					<div class="card-title">Tin nhắn</div>
				</div>
				<div class="card-body">
					<div class="customScroll5">
						<ul class="user-messages">
							<li class="clearfix">
								<div class="customer">AM</div>
								<div class="delivery-details">
									<span class="badge badge-primary">Ordered</span>
									<h5>Nguyễn Minh Đức</h5>
									<p>11h trưa 11.7 cả phòng kế toán sang phòng họp để họp phòng nhé <b>WAFI510</b> Đức Nguyễn.</p>
								</div>
							</li>
							<li class="clearfix">
								<div class="customer">AS</div>
								<div class="delivery-details">
									<span class="badge badge-primary">Delivered</span>
									<h5>Nguyễn Ngọc Tâm</h5>
									<p>Lịch nhận hàng từ nhà cung cấp C 14h20 ngày 11.7</p>
								</div>
							</li>
							<li class="clearfix">
								<div class="customer">ZR</div>
								<div class="delivery-details">
									<span class="badge badge-primary">Cancelled</span>
									<h5>Nguyễn Văn Nam</h5>
									<p>Đi gặp khách hàng từ 8h-12h ngày 6.7.</p>
								</div>
							</li>
							<li class="clearfix">
								<div class="customer secondary">LJ</div>
								<div class="delivery-details">
									<span class="badge badge-secondary">Returned</span>
									<h5>Đinh Ngọc Lan</h5>
									<p>................................</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="card h-320">
				<div class="card-header">
					<div class="card-title">Top 5 đại lý</div>
				</div>
				<div class="card-body">
					<div class="customScroll5">
						<div class="top-agents-container">
							<div class="top-agent">
								<img src="img/user.png" class="avatar" alt="Agent" />
								<div class="agent-details">
									<h6>Đại lý A</h6>
									<div class="agent-score">
										<div class="progress">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="points">
											<div class="left">Rank #1</div>
											<div class="right">9,800 $</div>
										</div>
									</div>
								</div>
							</div>
							<div class="top-agent">
								<img src="img/user22.png" class="avatar" alt="Agent" />
								<div class="agent-details">
									<h6>Đại lý B</h6>
									<div class="agent-score">
										<div class="progress">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="points">
											<div class="left">Rank #2</div>
											<div class="right">7,500 $</div>
										</div>
									</div>
								</div>
							</div>
							<div class="top-agent">
								<img src="img/user6.png" class="avatar" alt="Agent" />
								<div class="agent-details">
									<h6>Đại lý C</h6>
									<div class="agent-score">
										<div class="progress">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="points">
											<div class="left">Rank #3</div>
											<div class="right">4,200 $</div>
										</div>
									</div>
								</div>
							</div>
							<div class="top-agent">
								<img src="img/user20.png" class="avatar" alt="Agent" />
								<div class="agent-details">
									<h6>Đại lý D</h6>
									<div class="agent-score">
										<div class="progress">
											<div class="progress-bar bg-secondary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="points">
											<div class="left">Rank #4</div>
											<div class="right">3,800 $</div>
										</div>
									</div>
								</div>
							</div>
							<div class="top-agent">
								<img src="img/user13.png" class="avatar" alt="Agent" />
								<div class="agent-details">
									<h6>Đại lý E</h6>
									<div class="agent-score">
										<div class="progress">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="points">
											<div class="left">Rank #5</div>
											<div class="right">1,200 $</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="card h-320">
				<div class="card-header">
					<div class="card-title">Khách hàng đánh giá dịch vụ</div>
				</div>
				<div class="card-body">
					<div class="user-ratings">
						<div class="total-ratings">
							<h2>4.5</h2>
							<div class="rating-stars">
								<div id="rate1"></div>
							</div>
						</div>
						<div class="ratings-list-container">
							<div class="ratings-list">
								<div class="rating-level">5.0</div>
								<div class="rating-stars">
									<div class="rateA"></div>
								</div>
								<div class="total">
									8,500 <span class="percentage">65%</span>
								</div>
							</div>
							<div class="ratings-list">
								<div class="rating-level">4.0</div>
								<div class="rating-stars">
									<div class="rateB"></div>
								</div>
								<div class="total">
									3,500 <span class="percentage">20%</span>
								</div>
							</div>
							<div class="ratings-list">
								<div class="rating-level">3.0</div>
								<div class="rating-stars">
									<div class="rateC"></div>
								</div>
								<div class="total">
									1,400 <span class="percentage">15%</span>
								</div>
							</div>
							<div class="ratings-list">
								<div class="rating-level">2.0</div>
								<div class="rating-stars">
									<div class="rateD"></div>
								</div>
								<div class="total">
									300 <span class="percentage">05%</span>
								</div>
							</div>
							<div class="ratings-list">
								<div class="rating-level">1.0</div>
								<div class="rating-stars">
									<div class="rateE"></div>
								</div>
								<div class="total">
									75 <span class="percentage">03%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Row ends -->

</div>