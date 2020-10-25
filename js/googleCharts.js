google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['ქუდი',     11],
    ['მაიკა',      2],
    ['შარვალი',  2],
    ['ფეხსაცმელი', 2],
    ['აქსესუარები',    7]
  ]);

  var options = {
    title: 'My Daily Activities',
    is3D: true,
    backgroundColor:'transparent',
    chartArea:{left:0,top:0,width:'100%',height:'100%'},
    legend: {alignment:'center',textStyle: {color: 'white', fontSize: 16}},
    hAxis: {showTextEvery: '1', textPosition: 'out'},
    vAxis: {textPosition: 'out'}
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
  chart.draw(data, options);
}
