<div class="x_panel">
    <div class="content">
        <div class="x_title">
            <div class="form-group">
                <h2 class="text-uppercase">Daily Report</h2>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <canvas id="canvas"></canvas>
</div>
<script>
    var config = {
        type: 'line',
        data: {
            labels: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
            datasets: [{
                    label: 'Total Visitors',
                    backgroundColor: "red",
                    borderColor: "#FF8A80",
                    data: [
<?php
foreach ($Today as $Today) {
    echo $Today->TOTAL . ",";
}
?>
                    ],
                    fill: false
                }]
        },
        options: {
            devicePixelRatio: window.devicePixelRatio,
            responsive: true,
            //            title: {
            //                display: true,
            //                text: 'Chart.js Line Chart'
            //            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Day'
                        }
                    }],
                yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
            }
        }
    };
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myLine = new Chart(ctx, config);
</script>