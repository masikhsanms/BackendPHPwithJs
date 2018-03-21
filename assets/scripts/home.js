 $(function(){

   $.ajax({
     url    :'halaman/tampil_chart.php', //another controller function for generating data
     mtype    : "post", //Ajax request type. It also could be GET
     dataType   :"json",
     async    : false,
     success    : function(data)
   {
    console.log(data);
    
      var label = []; var datas = [];
      
      for (var i = 0; i < data.length; i++) {
        
        label.push(data[i].nama);
        datas.push(parseInt(data[i].stok));
        // harga.push(parseInt(data[i].harga));       

   var areaChartData = {
      labels  : label,
      datasets: [
        // {
        //   label               : 'Electronics',
        //   fillColor           : 'rgba(210, 214, 222, 1)',
        //   strokeColor         : 'rgba(210, 214, 222, 1)',
        //   pointColor          : 'rgba(210, 214, 222, 1)',
        //   pointStrokeColor    : '#c1c7d1',
        //   pointHighlightFill  : '#fff',
        //   pointHighlightStroke: 'rgba(220,220,220,1)',
        //   data                : [65, 59, 80, 81, 56, 55, 40]
        // },
        {
          label               : 'Digital Goods',
          fillColor           : '#00a65a',
          strokeColor         : '#00a65a',
          pointColor          : '#00a65a',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : datas
        }
      ]
    }
      }

      //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    // barChartData.datasets[1].fillColor   = '#00a65a'
    // barChartData.datasets[1].strokeColor = '#00a65a'
    // barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
      
    }
  })
})


// pie chart
$(function(){
   

   $.ajax({
     url    :'halaman/tampil_pie.php', //another controller function for generating data
     mtype    : "post", //Ajax request type. It also could be GET
     dataType   :"json",
     async    : false,
     success    : function(data)
   {
    console.log(data);
    
    var label = []; 
    var value = [];
      
      for (var i = 0; i < data.length; i++) {
        
        // label.push(data[i].kategori);
        // value.push(parseInt(data[i].stok));

    

   //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : data[0].stok,
        color    : '#f56954',
        highlight: '#f56954',
        label    : data[0].kategori
      },
      {
        value    : data[1].stok,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : data[1].kategori
      },
      {
        value    : data[2].stok,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : data[2].kategori
      },
      {
        value    : data[3].stok,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : data[3].kategori
      }
      // {
      //   value    : 300,
      //   color    : '#3c8dbc',
      //   highlight: '#3c8dbc',
      //   label    : 'Opera'
      // },
      // {
      //   value    : 100,
      //   color    : '#d2d6de',
      //   highlight: '#d2d6de',
      //   label    : 'Navigator'
      // }
    ]

      }

    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    }
  })

})
