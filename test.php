<link rel="preconnect" href="https://fonts.googleapis.com">
		
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/bootstrap-icons.css" rel="stylesheet">

		<link href="css/owl.carousel.min.css" rel="stylesheet">

		<link href="css/owl.theme.default.min.css" rel="stylesheet">

		<link href="css/templatemo-medic-care.css" rel="stylesheet">



<?php
        for ($rating = 1; $rating<=5; $rating++) {
    if ($rating <= 1) 
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

?>



<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/scrollspy.min.js"></script>
		<script src="js/custom.js"></script>