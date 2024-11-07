<?php require_once 'header.php'; ?>

<body class=" bg-light">
    <div class="container-fluid p-0 " id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <!----------- READ ----------->
                <?php
                    $request = $db -> prepare("SELECT * FROM Slider");
                    $request->execute();
                    while($read=$request->fetch(PDO::FETCH_ASSOC)){ 
                ?>

                <div class="carousel-item <?php echo $read['image_order'] == 1 ? 'active' : null ?>">
                    <img src="./images/slider/<?php echo $read['image']; ?>" class="d-block w-100 " alt="...">
                </div>

                <?php
                    }
                ?>
                <!----------- READ ----------->

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

<?php require_once 'footer.php'; ?>
