Highcharts.chart('container', {
  chart: {
    type: 'cylinder',
    options3d: {
      enabled: true,
      alpha: 15,
      beta: 15,
      depth: 50,
      viewDistance: 25
    }
  },
  title: {
    text: 'Listes de tous les montants totaux des assurées'
  },
    xAxis: {
    categories: etiquetas,
    labels: {
      skew3d: true,
      style: {
        fontSize: '16px'
      }
    }
  },
  plotOptions: {
    series: {
      depth: 25,
      colorByPoint: true
    }
  },
  series: [{
    data: valores,
    name: 'Nom de l`assuré',
    showInLegend: true
  }]
});