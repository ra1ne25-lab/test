<?php
@ob_start();
session_start();
?>
<!doctype html>
<html lang="ru">
	<head>
	<link rel="shortcut icon" href="/images/logo.ico" type="image/x-icon">
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="">

		<meta name="author" content="">

		<title>Nail.Sun - салон красоты</title>

		<!-- CSS FILES -->        
		<link rel="preconnect" href="https://fonts.googleapis.com">
		
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/bootstrap-icons.css" rel="stylesheet">

		<link href="css/owl.carousel.min.css" rel="stylesheet">

		<link href="css/owl.theme.default.min.css" rel="stylesheet">

		<link href="css/templatemo-medic-care.css" rel="stylesheet">

		<link rel="stylesheet" href="css/normalize.css">

		<link rel="stylesheet" href="css/components.css">

		<link rel="stylesheet" href="css/main.css">

		<link rel="stylesheet" href="css/header-page.css">

		<link rel="stylesheet" href="css/section-top.css">
		<!-- <link rel="stylesheet" href="style.css"> -->
		<script src="js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>

/* .form-control{
	border-radius: 0px;
	padding: 15px;
}
.btn-primary{
	border-radius: 0px;
	padding: 20px;

} */
</style>

	</head>
	
	<body id="top">

		<main>
			<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
				<div class="container">
					<a class="navbar-brand mx-auto d-lg-none" href="index.html">
						Nail.Sun
						<strong class="d-block">Салон красоты</strong>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav mx-auto">
						
						<li class="nav-item">
								<a class="nav-link" href="#hero">Главная</a>
						</li>

							<li class="nav-item">
								<a class="nav-link" href="#about">О нас</a>
							</li>

							<li class="nav-item active">
								<a class="nav-link" href="#akcii">Акции</a>
							</li>

							<li class="nav-item active">
								<a class="nav-link" href="#services">Услуги</a>
							</li>
						
							<a class="navbar-brand d-none d-lg-block" href="#hero">
								Nail.Sun
								<strong class="d-block">Салон красоты</strong>
							</a>

							

							<li class="nav-item">
								<a class="nav-link" href="#reviews">Отзывы</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#booking">Запись</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#contact">Контакты</a>
							</li>

							<li class="nav-item">
								<?php
								if(isset($_SESSION['status']))
								{?>
									<a class="nav-link" href="logout.php">Выйти</a><?php
								}
								else
								{?>
									<a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#loginModal">Войти</a>
									<?php
								}
								?>
							</li>
							<li class="nav-item">
								<?php
								
								if(isset($_SESSION['user_name']))
								{?>
									<span class="badge bg-primary" style="padding: 5px;font-size:large"><?php echo $_SESSION['user_name'];?></span><?php
								}
								else
								{?>
									<span></span>
									<?php
								}
								?>
							</li>
	
						</ul>
					</div>

				</div>
			</nav>
		<?php include_once('signup_modal.php');?>
		<?php include_once('login_modal.php');?>
			<section class="hero" id="hero">
				<div class="container">
					<div class="row">

						<div class="col-12">
							<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg" class="img-fluid" alt="">
									</div>

									<div class="carousel-item">
										<img src="images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg" class="img-fluid" alt="">
									</div>

									<div class="carousel-item">
										<img src="images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg" class="img-fluid" alt="">
									</div>
								</div>
							</div>

							<div class="heroText d-flex flex-column justify-content-center">

								<h1 class="mt-auto mb-2">
									Лучший
									<div class="animated-info">
										<span class="animated-item">мастер</span>
										<span class="animated-item">маникюр</span>
										<span class="animated-item">сервис</span>
									</div>
								</h1>
								<?php
	require_once 'config/db_connnection.php';
	$conn = OpenCon();
$obj = mysqli_query($conn, "Select * from landing");
                $obj = mysqli_fetch_all($obj);
        foreach ($obj as $obj){
                    echo '
					<p class="mb-4">'.$obj[1].'</p>
                    ';
                }
                ?> 
								

								<div class="heroLinks d-flex flex-wrap align-items-center">
									<a class="custom-link me-4" href="#about" data-hover="Узнать больше">Узнать о нас больше</a>

									<p class="contact-phone mb-0"><i class="bi-phone"></i> +375 (29) 3741258</p>
								</div>
							</div>
							<?php
							?>
						</div>

					</div>
				</div>
			</section>

			<section class="section-padding" id="about">
				<div class="container">
					<div class="row">

						<div class="col-lg-6 col-md-6 col-12">
							<h2 class="mb-lg-3 mb-3">Салон «Nain.Sun»</h2>
							<?php
	require_once 'config/db_connnection.php';
	$conn = OpenCon();
$obj = mysqli_query($conn, "Select * from landing");
                $obj = mysqli_fetch_all($obj);
        foreach ($obj as $obj){
                    echo '
					<p>'.$obj[2].'</p>
					<p>'.$obj[3].'</p>
                    ';
                }
                ?> 

						</div>

						<div class="col-lg-4 col-md-5 col-12 mx-auto">
							<div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
							<?php
	require_once 'config/db_connnection.php';
	$conn = OpenCon();
$obj = mysqli_query($conn, "Select * from landing");
                $obj = mysqli_fetch_all($obj);
        foreach ($obj as $obj){
                    echo '
					<p class="featured-text">уже<span class="featured-number">'.$obj[4].'</span>лет<br> радуем Вас</p>
                    ';
                }
                ?> 
								
							</div>
						</div>

					</div>
				</div>
			</section>

			<!-- <section class="gallery"> -->
				
				<div class="container">
					<div class="row">

						<div class="col-lg-6 col-6 ps-0">
							<img src="images/gallery/female-doctor-with-presenting-hand-gesture.jpg" class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
						</div>

						<div class="col-lg-6 col-6 pe-0">
							<img src="images/gallery/medium-shot-man-getting-vaccine.jpg" class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
						</div>

					</div>
				</div>
			</section>



			
			<section class="section-padding pb-0" id="akcii">
	<div class="container">
					<div class="row">
					<div class="col-lg-8 col-12 mx-auto">
						<div class="booking-form">
							<h2 class="text-center mb-lg-3 mb-2">Акции</h2>
						</div>
					</div>			 
				</div>
				<div class="catalog pb-0">
				
	
	<?php
	require_once 'config/db_connnection.php';
	$conn = OpenCon();
	$obj = mysqli_query($conn, "Select * from stock");
                $obj = mysqli_fetch_all($obj);
        foreach ($obj as $obj){
			$kek = $obj[3];
                    echo '
					<div class="catalog__item pb-0">
					<div class="product catalog__product">
					
	  <img src="'.$obj[5].'" alt="" class="product__img">
	  <div class="product__content">
		<h3 class="product__title">'.$obj[1].'</h3>
		<p class="product__description">'.$obj[2].'</p>	
		<p class="hide product__conditions"><b>'.$obj[3].'</p></b>	
	  </div>
	  <footer class="product__footer">
		<div class="product__bottom">
		  <div class="product__price">
			<span class="product__price-value">'.$obj[4].'</span>
			<span class="product__currency">Br</span>
		  </div>	
		  <button data-popup="popup-info" class="btn1 product__btn object_btn_info" type="button">ИНФОРМАЦИЯ</button>
		</div>
	  </footer>
	  </div>
	  </div>
	 
	';
}
echo'
<div class="popup popup-info">
<div class="popup_wrapper">
  <div class="popup_inner">
	<div class="popup_content">
	  <button class="btn-close popup_btn-close"></button>
	  <div class="info">
		<img class="info_img"  src="" alt="">
		<div class="object_title_info">
		  <b>Название акции: </b><span class="info_title"></span><br>
		  <b>Условия: </b><span class="info_type"></span><br>
		  <b>Цена: </b><span class="info_price"></span> Br<br>
		  <b>Описание: </b><span class="info_size"></span><br>
		</div>
	  </div>
	</div>
  </div>
</div>
</div>
';

//CloseCon($conn);
?> 
	 


		</div>
	</div>
	</section>




			<section class="section-padding pb-0" id="timeline">
				<div class="container">
					<div class="row">

						<h2 class="text-center mb-lg-5 mb-4">Наши преимущества</h2>
						
						<div class="timeline">
							<div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
								<div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
									<h3 class=" text-light">Опытные мастера</h3>

									<p>Наши мастера проходили передовые курсы и всегда готовы к саморазвитаю. Любое ваше желание поэксперементировать всегда поддержат и выполнят дизайн любой сложности.</p>
								</div>

								<div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
									<i class="bi-person-plus timeline-icon"></i>
								</div>

								<div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
									<time></time>
								</div>
							</div>

							<div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
								<div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
									<h3 class=" text-light">Качественные материалы</h3>

									<p>Мы следим за качеством использованных материалов. После каждого клиента инстументы обрабатываются в сухожаре. Для классического, аппаратного маникюра и создания качественного покрытия необходим широкий спектр инструментов и расходных материалов, всё это у нас есть.</p>
								</div>

								<div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
									<i class="bi-eyedropper timeline-icon"></i>
								</div>

								<div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
									<time></time>
								</div>
							</div>

							<div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
								<div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
									<h3 class=" text-light">Уютная атмосфера</h3>

									<p>В теплой уютной атмосфере гости современного салона смогут не только воспользоваться популярными услугами и отлично провести время в компании специалистов, но и получить профессиональные рекомендации.</p>
								</div>

								<div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
									<i class="bi-cup-fill timeline-icon"></i>
								</div>

								<div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
									<time></time>
								</div>
							</div>

							<div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
								<div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
									<h3 class=" text-light">Индивидуальный подход</h3>

									<p>Наш салон находил индивидуальный подход к каждому клиенту. Мы предоставляем гарантию на проделанную работу в течении 3-х дней.</p>
								</div>

								<div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
									<i class="bi-person-badge timeline-icon"></i>
								</div>
								<div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
									<time></time>
								</div>
							</div>
							
							<div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
								<div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
									<h3 class=" text-light">Лучшие в своём деле</h3>

									<p>В данном бизнесе мы находимся уже больше 5 лет. За свой долгий путь мы прошли через большое количество испытаний и сделали выводы. Мы очень дорожим своей репутацией и прислуживаемся к каждому отзыву.</p>
								</div>

								<div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
									<i class="bi-star-fill timeline-icon"></i>
								</div>
								<div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
									<time></time>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			
			<section class="section section-catalog pb-0" id="services">
	<div class="container">

					<div class="row">
					<div class="col-lg-8 col-12 mx-auto">
						<div class="booking-form">
							<h2 class="text-center mb-lg-3 mb-2">Услуги</h2>
	
				</div>
					</div>			 
				</div>
				<div class="container">
				<nav class="catalog-nav">
				<ul class="catalog-nav__wrapper">
				<li class="catalog-nav__item">
					<button class="catalog-nav__btn is-active" type="button" data-filter="all">Все</button>
				  </li>
				<?php
	//require_once 'config\db_connnection.php';
	//$conn = OpenCon();
	$obj = mysqli_query($conn, "Select * from services Inner join type on type.id_type=services.id_type");
	$obj = mysqli_fetch_all($obj);
	$sql = mysqli_query($conn, "Select * from type");
          while ($res = mysqli_fetch_array($sql))
				{
				echo '
				
				  <li class="catalog-nav__item">
					<button class="catalog-nav__btn" type="button" data-filter="'.$res[1].'">'.$res[1].'</button>
				  </li>
				
			  
				'
				;}
				
				foreach ($sql as $sql){
					echo '
					</ul>
					</nav>
					</div>
					<h6></h6>
					<div class="catalog">';
				}
        foreach ($obj as $obj){
                    echo '
				
					<div class="catalog__item pb-0" data-category="'.$obj[7].'">
					
					<div class="product catalog__product">
	  <img src="'.$obj[4].'" alt="" class="product__img">
	  <div class="product__content">
		<h3 class="product__title">'.$obj[1].'</h3>
		<p class="product__description">'.$obj[2].'</p>	
	  </div>
	  <footer class="product__footer">
		<div class="product__bottom">
		  <div class="product__price">
			<span class="product__price-value">'.$obj[3].'</span>
			<span class="product__currency">Br</span>
		  </div>
		  <a href="#booking"><button class="btn1 product__btn object_btn_info" type="button">ЗАПИСАТЬСЯ</button></a>
		</div>
	  </footer>
	  </div>
	  </div>
	';
}
//CloseCon($conn);
 ?> 
	</div>
	</div>
	</section>
	
<!-- Окно информация -->

<div class='imgblock'>
<img src='/upload/47.png' title='БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ'>
<span>БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ<br /><a  href="tel:+375291145454">+375 (29) 3741258</a> А1</span>
</div>

 <!-- Окно информация -->

	
			<section class="section-padding pb-0" id="reviews">
				<div class="container">
					<div class="row">

						<div class="col-12">
							<h2 class="text-center mb-lg-5 mb-4">Отзывы</h2>
							<div class="owl-carousel reviews-carousel">
							<?php
//	require_once 'config/db_connnection.php';
//	$conn = OpenCon();
	$obj = mysqli_query($conn, "Select * from comments where type = 1");
                $obj = mysqli_fetch_all($obj);
        foreach ($obj as $obj){
                    echo '

					<figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
					<div class="reviews-stars">';

	for ($rating = 1; $rating<=5; $rating++) {
    if ($rating <= $obj[4]) 
    {
        echo 
        '<i class="bi-star-fill"></i>';
    }
    else 
    {
        echo 
        '<i class="bi-star"></i>';
    }

}
echo '
					</div>

					<p class="text-primary d-block mt-2 mb-0 w-100"><strong>'.$obj[3].'</strong></p>

					<p class="reviews-text w-100">'.$obj[5].'</p>

					<img src="'.$obj[2].'" class="img-fluid reviews-image" alt="">

					<figcaption class="ms-4">
						<strong>'.$obj[1].'</strong>

						<span class="text-muted"></span>
					</figcaption>
				</figure>

			
                    ';
                }
//CloseCon($conn);
	?>

							

							</div>
						</div>

					</div>
				</div>
				
				<div class="col-lg-8 col-12 mx-auto">
				<div class="booking-form">
				<div class="col-lg-3 col-md-4 col-6 mx-auto">
				<?php
								if(isset($_SESSION['status']))
								{?>
									<button type="submit" class="form-control" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" id="submit-button" >Оставить отзыв</button>
									
									<?php
						
							}
								else
								{?>
								<br>
									<p align=center>Войдите, чтобы оставить отзыв</p><p></p>
									<?php
								}
								?>
				
				</div>
				</div>
				</div>
			</section>

			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Оставить отзыв</h5>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form action="action.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Имя</label>
    <!-- <input name="fio" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Введите имя"> -->
	<?php	
				if(isset($_SESSION['name1']))
			{?>
			<input name="fio" type="name" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['name1'];?>"><?php
				}
			else
				{?>
					<span></span>
				<?php
		}
		?>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Выберите фото</label>
	<br>
    <input name="uploadfile" type="file" class="form-control-file" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Заголовок</label>
    <input name="zog" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Введите заголовок">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Оцените</label>
    	<select name="ocenka" class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Введите текст</label>
    <textarea name="otz" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        	<button  name="send" type="submit" class="btn btn-primary">Отправить</button>
      	</div>
</form>
      </div>
    		</div>
  				</div>
					</div>
			<!-- Modal -->
			 <?php
			if(isset($_SESSION['status']))
			{
				// require_once 'config/db_connnection.php';
				// $conn = OpenCon();
				$user_id	=	$_SESSION['user_id'];
				$sql = "SELECT * FROM users WHERE id='$user_id'";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc())
				{
					$user_name	=	$row['name'];
					$user_email	=	$row['email'];
					$user_phno	=	$row['phone'];
				}
				// CloseCon($conn);
			}
			else
			{
				$user_name	=	'';
				$user_email	=	'';
				$user_phno	=	'';
			}

			?>
			
			<section class="section-padding" id="booking">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-8 col-12 mx-auto">
							<div class="booking-form">
								
								<h2 class="text-center mb-lg-3 mb-2">Записаться на сеанс</h2>
								<?php
								if(isset($_SESSION['status']))
								{?>
								<form role="form" action="book_session.php" method="post">
								<input type="hidden" name="from" class="application-info-id">
									<div class="row">
										<div class="col-lg-6 col-12">
											<input type="text" name="name" id="name" class="form-control" value="<?php echo $user_name;?>" placeholder="Введите ФИО" required>
										</div>

										<div class="col-lg-6 col-12">
											<input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" value="<?php echo $user_email;?>" placeholder="Введите Email" required>
										</div>

										<div class="col-lg-6 col-12 mb-3">
											<input type="telephone" name="phone" id="phone"  class="form-control" value="<?php echo $user_phno;?>" placeholder="Введите № телефона" required>
										</div>

										<div class="col-lg-6 col-12 mb-3">
											<input type="date" name="date" id="book_date" min="<?php echo date("Y-m-d"); ?>" value="" class="form-control" required>
											
										</div>

										<div class="input-group mb-3">
											<select class="form-select" id="service_select" name="service_select">
												<option selected value="">Выберите процедур</option>
											<?php
											
												$sql = "SELECT * FROM services";
												$result = $conn->query($sql);
												while($row = $result->fetch_assoc())
												{
													echo "<option value='".$row['id_services']."'>".$row['name']." | <span> <value='".$row['id_services']."'>".$row['price']." BYN </span></option></option>";
												}

											?>
											</select>
										</div>
										<div class="input-group mb-3">
											<select class="form-select" id="worker_select" name="worker_select">
											  <option selected value="">Выберите мастера</option>
											<?php

												// $sql = "SELECT * FROM employee";
												// $sql = "SELECT * FROM `services`,`position`,`employee` WHERE `position`.`id_position` = `employee`.`id_employee` AND `position`.`id_type`=`services`.`id_type`";

												// $result = $conn->query($sql);
												// while($row = $result->fetch_assoc())
												// {
												// 	echo "<option value='".$row['id_employee']."'>".$row['name']."</option>";
												// }
											?>
											</select>
										</div>

										<div class="input-group mb-3">
											<select class="form-select" id="time_slot_select" name="time_slot_select">
											  <option selected>Выберите время</option>
											</select>
										</div>
										<div class="col-12">
											<textarea class="form-control" rows="2" id="message" name="message" placeholder="Дополнительная информация"></textarea>
										</div> 

										<div class="col-lg-3 col-md-4 col-6 mx-auto">
											<button type="submit" class="form-control" name="book_session" id="submit-button">Записаться</button>
										</div>
									</div>
								</form>
								<?php
						
					}
						else
						{?>
							<p align = center>Войдите, чтобы записаться</p>
							<?php
						}
						?>
							</div>
						</div>

					</div>
				</div>
			</section>
			
			<section class="section-padding" id="faq">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-8 col-12 mx-auto">
							
							<div class="faq-form">
								
								<h2 class="text-center mb-lg-3 mb-2">FAQ</h2>
							</div>
						</div>					
					</div>
					<?php
	require_once 'config/db_connnection.php';
	$conn = OpenCon();
$obj = mysqli_query($conn, "Select * from faq");
                $obj = mysqli_fetch_all($obj);
        foreach ($obj as $obj){
                   
					echo '
					<div id="accordion">
					<div class="card">
					  <div class="card-header">
						<a class="card-link" data-toggle="collapse" href="#'.$obj[3].'">
						'.$obj[1].'        </a>
					  </div>
					  <div id="'.$obj[3].'" class="collapse" data-parent="#accordion">
						<div class="card-body">
						'.$obj[2].'        </div>
					  </div>
					</div>
					</div>
					';
                }
                ?>


  </div>
			</section>


  
		</main>

		<footer class="site-footer section-padding" id="contact">
			<div class="container">
				<div class="row">

					<div class="col-lg-5 me-auto col-12">
						<h5 class="mb-lg-4 mb-3">Время работы</h5>

						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex">
								Понедельник – Пятница
								<?php
	require_once 'config/db_connnection.php';
	$conn = OpenCon();
$obj = mysqli_query($conn, "Select * from landing");
                $obj = mysqli_fetch_all($obj);
        foreach ($obj as $obj){
                    echo '
					<span>'.$obj[5].'</span>
					</li>

							<li class="list-group-item d-flex">
								Суббота – Воскресенье
								<span>'.$obj[6].'</span>
							</li>
                    ';
                }
                ?> 
	
						</ul>
					</div>

					<div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
						<h5 class="mb-lg-4 mb-3">Наш салон</h5>
						<?php
	require_once 'config/db_connnection.php';
	$conn = OpenCon();
$obj = mysqli_query($conn, "Select * from landing");
                $obj = mysqli_fetch_all($obj);
        foreach ($obj as $obj){
                    echo '
					<p><a href="mailto:nail.sun@gmail.com">'.$obj[7].'</a><p>
					<p>'.$obj[8].'</p>
					</div>

					<div class="col-lg-3 col-md-6 col-12 ms-auto">
						<h5 class="mb-lg-4 mb-3">Социальные сети</h5>

						<ul class="social-icon">
							<li><a target="_blank" href="'.$obj[9].'" class="social-icon-link bi-facebook"></a></li>

							<li><a target="_blank" href="'.$obj[10].'" class="social-icon-link bi-twitter"></a></li>

							<li><a target="_blank" href="'.$obj[11].'" class="social-icon-link bi-instagram"></a></li>

							<li><a target="_blank" href="'.$obj[12].'" class="social-icon-link bi-youtube"></a></li>
						</ul>
					</div>
                    ';
                }
                ?> 
						

						

				</div>
			</section>
		</footer>

		<!-- JAVASCRIPT FILES -->
		<!-- <script src="js/main.js"></script> -->
	
		<script src="js/myLib.js"></script>

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/scrollspy.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/popup.js"></script>
		<script src="js/object.js"></script>
		<script src="js/catalog.js"></script>
		<script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>

	</body>
	<script>
		$(document).ready(function () {
			function request_send() {
				var worker = $("#worker_select").val();
				var service = $("#service_select").val();
				var book_date = $("#book_date").val();
				if(book_date != '' && worker != '' && service!='')
				{
					$.ajax({
						type:'POST',
						url:"ajax_request.php",
						data:{worker:worker,service:service,book_date:book_date},
						success: function(response)
						{
							$("#time_slot_select").html(response);
							// alert(response);
						}
					});
				}
				else
				{
					//alert('Fill all');
				}		
			}
			$(document).on("change","#worker_select",function () {
				request_send();
			});
			$(document).on("change","#book_date",function () {
				request_send();
			});
			$(document).on("change","#service_select",function () {
				var service_select = $("#service_select").val();
				$.ajax({
					type:'POST',
					url:"ajax_request.php",
					data:{service_select:service_select},
					success: function(response)
					{
						$("#worker_select").html(response);
						// alert(response);
					}
				});
			});
		});
	</script>
</html>