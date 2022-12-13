// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

//------highcharts
Highcharts.chart('container', {
  chart: {
      type: 'column'
  },
  title: {
      text: 'Employees By Department'
  },
 
  xAxis: {
      categories: [
          'IT',
          'Finance',
          'Human Resource',
          'Marketing',
          'Sales',
          
      ],
      crosshair: true
  },
  yAxis: {
      title: {
          useHTML: true,
          text: 'Employees By Department'
      }
  },
  tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
  },
  plotOptions: {
      column: {
          pointPadding: 0.2,
          borderWidth: 0
      }
  },
  series: [{
      name: 'Employees Count',
      data: [6, 8, 10, 12, 14]

  }]
});