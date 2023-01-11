@extends('layouts.admin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('main-content')
<div class="section__content section__content--p30">
  <div class="container-fluid">
<div class="row m-t-25">
  <div class="col-sm-6 col-lg-3">
      <div class="overview-item overview-item--c1">
          <div class="overview__inner">
              <div class="overview-box clearfix">
                  <div class="icon">
                      <i class="zmdi zmdi-balance-wallet"></i>
                  </div>
                  <div class="text">
                      <h2>RM {{$todaySales}}</h2>
                      <span>Total sales today</span>
                  </div>
              </div>
              <div class="overview-chart">
                  <canvas id="widgetChart1"></canvas>
              </div>
          </div>
      </div>
  </div>
  <div class="col-sm-6 col-lg-3">
      <div class="overview-item overview-item--c2">
          <div class="overview__inner">
              <div class="overview-box clearfix">
                  <div class="icon">
                      <i class="zmdi zmdi-shopping-cart"></i>
                  </div>
                  <div class="text">
                      <span>Total Earning</span>
                      <h2>RM {{$totalsales}}</h2>
                  </div>
              </div>
              <div class="overview-chart">
                  <canvas id="widgetChart2"></canvas>
              </div>
          </div>
      </div>
  </div>
  <div class="col-sm-6 col-lg-3">
      <div class="overview-item overview-item--c3">
          <div class="overview__inner">
              <div class="overview-box clearfix">
                  <div class="icon">
                      <i class="zmdi zmdi-check-square"></i>
                  </div>
                  <div class="text">
                      <span>Complete Order</span>
                      <h2>{{$OrderComplete}} Order</h2>
                  </div>
              </div>
              <div class="overview-chart">
                  <canvas id="widgetChart3"></canvas>
              </div>
          </div>
      </div>
  </div>
  <div class="col-sm-6 col-lg-3">
      <div class="overview-item overview-item--c4">
          <div class="overview__inner">
              <div class="overview-box clearfix">
                  <div class="icon">
                      <i class="zmdi zmdi-tag-close"></i>
                  </div>
                  <div class="text">
                      <span>Pending Order</span>
                      <h2>{{$OrderNotComplete}} Order</h2>       
                  </div>
              </div>
              <div class="overview-chart">
                  <canvas id="widgetChart4"></canvas>
              </div>
          </div>
      </div>
  </div>
</div>
      <div class="py-3">
        <div class="card" style="width: 800px;"> 
         <div class="card-body">
            <h5>Sales Summary</h5>
        <canvas id="canvas" height="50" width="100"></canvas>
    </div>
</div>
</div>
  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        var label = ["Monday", "Tuesday ", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        var count = <?php echo $count; ?>;
        var barChartData = {
            labels: label,
            datasets: [{
                label: 'Sales',
                backgroundColor: "green",
                data: count
            }]
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                            borderColor: '#c1c1c1',
                            borderSkipped: 'bottom'
                        }
                    },
                    responsive: true,
                    title: {
                        display: false,
                        text: 'Sales Summary'
                    }
                }
            });
        };
</script>

@endsection