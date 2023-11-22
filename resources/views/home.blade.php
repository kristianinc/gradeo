<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Gradeo | Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-light" href="#">
    <i class="fas fa-bars"></i>
  </a>

  @include('sidebar')

  {{-- main body content should start here  --}}
  <main class="page-content">
    <div class="container-fluid">

      {{-- lets create a row with the preview and save --}}
      <div class="row">
        <div class="col-md-6 mb-3">
                <h5 class="blue"><b>Good Morning,</b></h5>
                <h6>Mr. ABC</h6>
                
          
        </div>
        <div class="col-md-6 mb-3">
          {{-- inline code for the two buttons --}}

          <div class="row">
            <div class="col-md-6 mb-3">
              {{-- more space --}}
            </div>
            <div class="col-md-6 mb-3">
              Today, <i class="fa fa-calendar" aria-hidden="true"></i>
              <h6 class="blue"><b>15 May, 2023</b></h6>
            </div>
        </div>

        </div>
    </div>

    {{-- page content begins here  --}}
    {{-- first row of cards --}}

    <div class="row">
      <div class="col-md-6 mb-3">

        <div class="card" style="width: 30rem;">

          <br>
          <div class="row">
            <div class="col-md-6 mb-3">
              
              <img src="images/analog.gif" alt="Animated GIF" width="220" height="200">

            </div>
            <div class="col-md-6 mb-3">

              <h6 class="blue"><b>you have a test arriving soon!!</b></h6> <br>
             <span class="text-muted">Test:</span> general knowledge quiz <br>
             <span class="text-muted">Date:</span> 15 may 2023 <br>
             <span class="text-muted">Time:</span>11:00am  to 1:00pm <br><br>
              <button type="button" class="btn btn-info" style="border-radius:10px; width:200px;">
                set reminder
              </button>


            </div>
        </div>
        </div>

      </div>
      <div class="col-md-6 mb-3">

        <div class="card" style="width: 25rem;">
          <div class="card-body">

            <div class="row">
              <div class="col-md-6 mb-3">
    
                <h6 class="blue"><b>Ongoing test</b></h6><br>
            <p class="text-muted">
              general knowledge quiz <br>
              15 may 2023 <br>
              11:00am  to 1:00pm <br><br>
              <button type="button" class="btn btn-info" style="border-radius:10px; width:200px;">
                start test
              </button> 
            </p>
    
              </div>
              <div class="col-md-6 mb-3">
    
                <img src="images/teacher.jpg" alt="teacher" width="130" height="160">
    
              </div>
          </div>


          </div>
        </div>

      </div>
  </div>


  {{-- second row of the cards --}}

  <div class="row">
    <div class="col-md-6 mb-3">

      <div class="card" style="width: 30rem;">
        <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-3">
                Avg Report
          </div>
          <div class="col-md-6 mb-3">
                <p>Yearly <span class="text-muted">average report</span> </p>
          </div>
      </div>

        {{-- graph div --}}
        <div id="main" style="width: 490px;height:400px;"></div>
      </div>
      </div>

    </div>
    <div class="col-md-6 mb-3">

      <div class="card" style="width: 30rem;">
      {{-- graph div --}}
      <div id="pie" style="width: 490px;height:400px;">
      {{-- <br>
      132453 students attended the test <br>
      657 students didn't attend the test --}}

    </div>
    </div>
</div>

{{-- third row of cards --}}

<div class="row">
  <div class="col-md-6 mb-3">

      <div class="card" style="width: 20rem;">
        <div class="card-body">

          <h6 class="blue"><b>Missed test</b></h6><br>
          <p>
            <span class="text-muted"> test: </span> Accounts weekly test <br>
          <span class="text-muted"> Date: </span>15 April, 2023 <br>
           <span class="text-muted"> Time: </span> 11:00am - 1:00pm <br><br>
            <button type="button" class="btn btn-outline-info" style="border-radius:10px; width:100%;">
              see test questions
            </button> 
          </p>
          
        </div>
      </div>

  </div>
  <div class="col-md-6 mb-3">

    <div class="card" style="width: 20rem;">
      <div class="card-body">

        <h6 class="blue"><b>Total attempts</b></h6><br>
        <p>
          <span class="text-muted">  Weekly Test: </span> 25/28(3 missed)<br>
          <span class="text-muted"> Monthly: </span>30/32(2 missed) <br>
          <span class="text-muted"> Conducted by: </span>prof. Jjumba<br><br>
          <button type="button" class="btn btn-outline-info" style="border-radius:10px; width:100%;">
            see test results
          </button> 
        </p>

      </div>
    </div>

  </div>
</div>



  {{-- below tags close the entire page content --}}
      </div>
    </div>

    
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
  <script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var myChart = echarts.init(document.getElementById('main'));
    var chartDom = echarts.init(document.getElementById('pie'));
    // Specify the configuration items and data for the chart
    var option = {
  xAxis: {
    type: 'category',
    boundaryGap: false,
    data: ['quiz', 'monthly', 'weekly', 'question', 'test', 'exam', 'assign']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [30, 40, 50, 20, 30, 80, 70],
      type: 'line',
      areaStyle: {}
    }
  ]
};

//  now for the piechart

var piechart = {
  title: {
    text: 'Recent test results',
    subtext: 'Students\' performance',
    left: 'center'
  },
  tooltip: {
    trigger: 'item'
  },
  legend: {
    orient: 'vertical',
    left: 'left'
  },
  series: [
    {
      name: 'Access From',
      type: 'pie',
      radius: '50%',
      data: [
        { value: 1048, name: 'Grade A' },
        { value: 735, name: 'Grade B' },
        { value: 580, name: 'Grade C' },
        { value: 484, name: 'Grade D' },
        { value: 300, name: 'Failed' }
      ],
      emphasis: {
        itemStyle: {
          shadowBlur: 10,
          shadowOffsetX: 0,
          shadowColor: 'rgba(0, 0, 0, 0.5)'
        }
      }
    }
  ]
};


    // Display the chart using the configuration items and data just specified.
    myChart.setOption(option);
    chartDom.setOption(piechart);
  </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
        <script src="js/styles.js"></script>
</body>

</html>