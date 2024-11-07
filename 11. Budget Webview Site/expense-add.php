<?php require_once 'header.php'; ?>

<body class=" bg-light">
    <div class="container-fluid p-0 " id="home">
        <div class="row p-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 mb-3 d-flex justify-content-center">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link " aria-current="page" href="./income-add.php">INCOME</a></li>
                                <li class="nav-item"><a class="nav-link active " aria-current="page" href="#">EXPENSES</a></li>
                            </ul>
                        </div>

                        <?php
                            if(isset($_SESSION['expenseCreated'])){
                                if($_SESSION['expenseCreated'] == 'ok'){
                        ?>
                        <div class="alert alert-success">Succesfully Created!</div>                        
                        <?php
                            } else if ($_SESSION['expenseCreated'] == 'no'){
                        ?>
                        <div class="alert alert-danger">Some thing went wrong while Creating!</div>                        
                        <?php
                                }
                            }
                            unset($_SESSION['expenseCreated']);             
                        ?>

                        <form action="./Network/process.php" method="POST" class="needs-validation" novalidate>
                            <div class="input-group mb-3">
                                <span class="input-group-text">TL</span>
                                <input type="number" pattern="\d*" class="form-control" id="validationCustom05" required aria-label="Amount (to the nearest dollar)" name="price">
                                <span class="input-group-text">.00</span>
                            </div>

                            <div class="mb-3">
                                <input name="category" required class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Gider kategorisi seçin">
                                <datalist id="datalistOptions">
                                    <option value="Magazine">
                                    <option value="Taxes">
                                    <option value="Cash">
                                    <option value="Education">
                                    <option value="Medical">
                                </datalist>
                            </div>

                            <div class="input-group date mt-3" id="datepicker">
                                <input type="text" class="form-control" name="date" required value="16-07-2024">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white"><i class="bi bi-calendar"></i></span>
                                </span>
                            </div>

                            <div class="mt-3">
                                <button type="submit" name="expense_create" href="#" class="btn btn-outline-secondary w-100 btn-lg"><i class="bi bi-dash"></i> Gider Ekle</button>
                            </div>
                        </form>

                        <div class="card mt-4">
                            <div class="card-header">Özlü Sözler</div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>Paraya fazla bir güvenin olmasın fakat onu güvenilir bir yere koy</p>
                                    <footer class="blockquote-footer"><cite title="Source Title">Anonim</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>