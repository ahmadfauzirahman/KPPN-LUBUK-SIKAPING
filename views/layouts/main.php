<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\components\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\App;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<style>
        body,
        html,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        
        a {
            font-family: 'Quicksand', sans-serif !important;
        }
    </style>
	<script>
		const baseUrl = "http://localhost/service-kppn/api/v1/";

		function updateDataTable() {
			$('#datatable').DataTable().ajax.reload(null, false);
		}


		function showNotification(con, msg, icon) {
			$.notify({
				icon: (icon === undefined) ? (con ? "pe-7s-loop" : "pe-7s-attention") : icon,
				message: (con == true ? "<b>Berhasil...</b>" : "<b>Oops...</b>") + "<br/>" + msg
			}, {
				type: (con == true ? "success" : "warning"),
				timer: 3000
			});
		}
	</script>
	<?php $this->head() ?>
</head>

<body class="fixed-left">
	<?php $this->beginBody() ?>

	<!-- Begin page -->
	<div id="wrapper">

		<!-- Top Bar Start -->
		<div class="topbar">

			<!-- LOGO -->
			<div class="topbar-left">
				<a href="<?= Url::to(['site/index']) ?>" class="logo"><span>Si <span> Lusi</span></span><i class="mdi mdi-layers"></i></a>
			</div>

			<!-- Button mobile view to collapse sidebar menu -->
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">

					<!-- Page title -->
					<ul class="nav navbar-nav list-inline navbar-left">
						<li class="list-inline-item">
							<button class="button-menu-mobile open-left">
								<i class="mdi mdi-menu"></i>
							</button>
						</li>
						<li class="list-inline-item">
							<h4 class="page-title"><?= $this->title ?></h4>
						</li>
					</ul>

					<nav class="navbar-custom">

						<ul class="list-unstyled topbar-right-menu float-right mb-0">

							<li>
								<!-- Notification -->
								<div class="notification-box">
									<ul class="list-inline mb-0">
										<li>
											<a href="<?= Url::to(['keluar/index']) ?>">
												<i class="mdi mdi-logout"></i>
											</a>

										</li>
									</ul>
								</div>
								<!-- End Notification bar -->
							</li>


						</ul>
					</nav>
				</div><!-- end container -->
			</div><!-- end navbar -->
		</div>
		<!-- Top Bar End -->


		<!-- ========== Left Sidebar Start ========== -->
		<div class="left side-menu">
			<div class="sidebar-inner slimscrollleft">

				<!-- User -->
				<div class="user-box">
					<div class="user-img">
						<img src="<?= Yii::$app->request->baseUrl ?>/img/user.png" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
						<div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
					</div>
					<h5><a href="#"><?= Yii::$app->user->identity->nama ?> (<?= Yii::$app->user->identity->roles ?>)</a></h5>
				</div>
				<!-- End User -->

				<!--- Sidemenu -->
				<div id="sidebar-menu">
					<?php if (App::isStakeholder()) { ?>
						<ul>
							<?= $this->render('sidebar-stakeholder.php') ?>
						</ul>
					<?php } else { ?>
						<ul>
							<?= $this->render('sidebar.php') ?>
						</ul>
					<?php } ?>

					<div class="clearfix"></div>
				</div>
				<!-- Sidebar -->
				<div class="clearfix"></div>

			</div>

		</div>
		<!-- Left Sidebar End -->


		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid">

					<?= Breadcrumbs::widget([
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
					]) ?>
					<?= Alert::widget() ?>
					<div class="row">
						<div class="col-lg-12">
							<div class="card card-body">
								<?= $content ?>
							</div>
						</div>
					</div>
				</div> <!-- container -->

			</div> <!-- content -->

			<footer class="footer text-right">
				<?= date('Y') ?> © Ahmad Fauzi Rahman. Deadline.id
			</footer>

		</div>


		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->


		<!-- Right Sidebar -->
		<div class="side-bar right-bar">
			<a href="javascript:void(0);" class="right-bar-toggle">
				<i class="mdi mdi-close-circle-outline"></i>
			</a>
			<h4 class="">Notifications</h4>
			<div class="notification-list nicescroll">
				<ul class="list-group list-no-border user-list">
					<li class="list-group-item">
						<a href="#" class="user-list-item">
							<div class="avatar">
								<img src="assets/images/users/avatar-2.jpg" alt="">
							</div>
							<div class="user-desc">
								<span class="name">Michael Zenaty</span>
								<span class="desc">There are new settings available</span>
								<span class="time">2 hours ago</span>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" class="user-list-item">
							<div class="icon bg-info">
								<i class="mdi mdi-account"></i>
							</div>
							<div class="user-desc">
								<span class="name">New Signup</span>
								<span class="desc">There are new settings available</span>
								<span class="time">5 hours ago</span>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" class="user-list-item">
							<div class="icon bg-pink">
								<i class="mdi mdi-comment"></i>
							</div>
							<div class="user-desc">
								<span class="name">New Message received</span>
								<span class="desc">There are new settings available</span>
								<span class="time">1 day ago</span>
							</div>
						</a>
					</li>
					<li class="list-group-item active">
						<a href="#" class="user-list-item">
							<div class="avatar">
								<img src="assets/images/users/avatar-3.jpg" alt="">
							</div>
							<div class="user-desc">
								<span class="name">James Anderson</span>
								<span class="desc">There are new settings available</span>
								<span class="time">2 days ago</span>
							</div>
						</a>
					</li>
					<li class="list-group-item active">
						<a href="#" class="user-list-item">
							<div class="icon bg-warning">
								<i class="mdi mdi-settings"></i>
							</div>
							<div class="user-desc">
								<span class="name">Settings</span>
								<span class="desc">There are new settings available</span>
								<span class="time">1 day ago</span>
							</div>
						</a>
					</li>

				</ul>
			</div>
		</div>
		<!-- /Right-bar -->

	</div>
	<!-- END wrapper -->

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>