<?php require_once 'header.php'; ?>

<body class=" bg-light">
    <div class="container-fluid p-0 " id="home">
        <div class="row p-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 mb-3 d-flex justify-content-center">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">INCOME</a></li>
                                <li class="nav-item"><a class="nav-link " aria-current="page" href="./expense-add.php">EXPENSES</a></li>
                            </ul>
                        </div>

                        <?php // if(isset($_GET['created'])){ if($_GET['created'] == 'ok'){ ?>
                        <!-- <div class="alert alert-success">Succesfully Created!</div> -->
                        <?php // } else if ($_GET['created'] == 'no'){ ?>
                        <!-- <div class="alert alert-danger">Some thing went wrong while Creating!</div> -->
                        <?php // }} ?>

                        <?php
                            if(isset($_SESSION['incomeCreated'])){
                                if($_SESSION['incomeCreated'] == 'ok'){
                        ?>
                        <div class="alert alert-success">Succesfully Created!</div>                        
                        <?php
                            } else if ($_SESSION['incomeCreated'] == 'no'){
                        ?>
                        <div class="alert alert-danger">Some thing went wrong while Creating!</div>                        
                        <?php
                                }
                            }
                            unset($_SESSION['incomeCreated']);              // Refresh verende $_SESSION[''] delete elesinki Alert-de yoxa cixsin
                        ?>
                        


                        <form action="./Network/process.php" method="POST" class="needs-validation" novalidate>
                            <div class="input-group mb-3">
                                <span class="input-group-text">TL</span>
                                <input type="number" pattern="\d*" class="form-control" id="validationCustom05" name="price" required aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                            </div>

                            <div class="mb-3">
                                <input required class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Gelir kategorisi seçin" name="category">
                                <datalist id="datalistOptions">
                                    <option value="Salary">
                                    <option value="Promotion">
                                    <option value="Rent">
                                </datalist>
                            </div>

                            <div class="input-group date mt-3" id="datepicker">
                                <input type="text" class="form-control" required value="16-07-2024" name="date">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white"><i class="bi bi-calendar"></i></span>
                                </span>
                            </div>

                            <div class="mt-3">
                                <button type="submit" name="income_create" href="#" class="btn btn-outline-secondary w-100 btn-lg"><i class="bi bi-plus"></i>Gelir Ekle</button>
                            </div>
                        </form>

                        <div class="card mt-4">
                            <div class="card-header">Özlü Sözler</div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>Paranın değerini anlamak isterseniz borç almaya çalışın.</p>
                                    <footer class="blockquote-footer"><cite title="Source Title">Anonim</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>