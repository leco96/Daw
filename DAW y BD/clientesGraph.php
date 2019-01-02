<?php require_once("modeloReporte.php");?>
<div class="container" style="width: 500px;height: 500px;">
	<canvas id="FourtChart" width="100" height="100"></canvas>
</div>



<script>
<?php
	
	$consulta=getClientGraph();
	
?>

    var ctx = document.getElementById("FourtChart");
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [<?php  echo  $consulta; ?>],
            datasets: [{
                    label: 'm cubico Vendido',
                    data: [
                    	<?php 
                    	$str=getClientes();
						$words = explode(",",$str);
						for($R=0; $R<count($words); $R++)
						{
							echo getConsumoPorVendedor($words[$R]);
						}
                           
                    	?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
</script>