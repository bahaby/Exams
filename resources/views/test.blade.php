<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <canvas id="myChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    import Chart from 'chart.js'

    export default {
        data() {
            return {
                count: 0,
                labels: ['Online']
            }
        },
        mounted() {
            this.update();
            this.drawChart();
        },
        methods: {
            drawChart() {
                let ctx = document.getElementById("myChart");
                let myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: this.labels,
                        datasets: [{
                            label: '# of Users',
                            data: [this.count],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            },
            update() {
                Echo.join('chart')
                    .here((users) => {
                        this.count = users.length;
                        this.drawChart();
                    })
                    .joining((user) => {
                        this.count++;
                        this.drawChart();
                    })
                    .leaving((user) => {
                        this.count--;
                        this.drawChart();
                    });
            }
        }
    }
</script>