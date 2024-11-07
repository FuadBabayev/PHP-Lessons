<?php require_once 'header.php' ?>

<body class=" bg-light">
    <div class="container-fluid p-0 " id="home">
        <div class="row p-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 mb-3 d-flex justify-content-center">
                            <div class="d-flex justify-content-center"><h2>Report</h2></div>
                        </div>

                        <?php
                            $request = $db -> prepare("SELECT category, COUNT(*), SUM(price) FROM Expense GROUP BY category ORDER BY timedate");
                            $request->execute();
                            while($read=$request->fetch(PDO::FETCH_ASSOC)){
                                $expense_array[$read['category']] = $read['SUM(price)'];     // ! Array ( [Promotion] => 36.00 [Rent] => 60.00 [Salary] => 40.00 )
                            }
                        ?>

                        <div class="col-md-12 mb-3 d-flex justify-content-center">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link " aria-current="page" href="./income-report.php">INCOME</a></li>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">EXPENSES</a></li>
                            </ul>
                        </div>

                        <canvas id="myChart" width="10" height="10" class="pie_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'footer.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [<?php 
            foreach($expense_array as $key => $value){
                echo "'".$key."', ";
            }  
        ?>],
        datasets: [{
            label: '# of Votes',
            data: [<?php 
           foreach($expense_array as $key => $value) {
                echo "'".$value."',";
            }    
        ?>],
            backgroundColor: [
                'lime',
                'deepskyblue',
                'yellow',
                'red'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</body>

</html>