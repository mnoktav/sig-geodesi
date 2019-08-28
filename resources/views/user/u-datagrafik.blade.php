@extends('user/u-dashboard')
@section('content')
<div class="panel-header bg-success-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Data</h2>
                <h5 class="text-white op-7 mb-2">Sistem Informasi Geografis Jurnal Geodesi</h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Grafik</h4>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>  
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
@section('script')
<script>    

    var ctx = document.getElementById('statisticsChart').getContext('2d');

    var statisticsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php foreach($datas_location as $data){
                echo '"'.$data->location.'",';
            } ?>],
            datasets: [ {
                label: "Data Journals",
                borderColor: '#177dff',
                pointBackgroundColor: 'rgba(243, 84, 93, 0.6)',
                pointRadius: 0,
                backgroundColor: 'rgba(243, 84, 93, 0.4)',
                legendColor: '#177dff',
                fill: true,
                borderWidth: 2,
                data: [<?php foreach($datas_location as $data){
                echo '"'.$data->jumlah_data.'",';
            } ?>]
            }]
        },
        options : {
            responsive: true, 
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                bodySpacing: 4,
                mode:"nearest",
                intersect: 0,
                position:"nearest",
                xPadding:10,
                yPadding:10,
                caretPadding:10
            },
            layout:{
                padding:{left:5,right:5,top:15,bottom:15}
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontStyle: "500",
                        beginAtZero: false,
                        maxTicksLimit: 133,
                        padding: 10
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        maxTicksLimit: 133
                    },
                    maxBarThickness: 25,
                }]
            }, 
            legendCallback: function(chart) { 
                var text = []; 
                text.push('<ul class="' + chart.id + '-legend html-legend">'); 
                for (var i = 0; i < chart.data.datasets.length; i++) { 
                    text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>'); 
                    if (chart.data.datasets[i].label) { 
                        text.push(chart.data.datasets[i].label); 
                    } 
                    text.push('</li>'); 
                } 
                text.push('</ul>'); 
                return text.join(''); 
            }  
        }
    });
    </script>
@endsection
