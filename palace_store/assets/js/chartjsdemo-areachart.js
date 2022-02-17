//-------------------------------
//- AREA CHART CHART JS EXAMPLE -
//-------------------------------

// Get canvas element
var areaChartCanvas = document.getElementById('areaChart').getContext('2d');

// Create gradient color for area chart
var gradient = areaChartCanvas.createLinearGradient(0, 0, 0, 300);
gradient.addColorStop(0.1, 'rgba(55, 173, 176, 1)');
gradient.addColorStop(0.4, 'rgba(55,173,176,0.8)');
gradient.addColorStop(0.6, 'rgba(55,173,176,0.6)');
gradient.addColorStop(1, 'rgba(55,173,176,0.2)');

// Area chart data
var areaChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Example Data',
        bezierCurve: true,
        tension: 0.4,
        backgroundColor: gradient,
        borderColor: 'rgba(55, 173, 176, 0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: [40, 80, 60, 55, 58, 60, 80],
        fill: true
    }, ]
}

// Options for area chart
var areaChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
        display: false,
    },
    scales: {
        xAxis: {
            gridLines: {
                display: false,
            }
        },
        yAxis: {
            beginAtZero: true,
            gridLines: {
                display: false,
            }
        }
    }
}

// include 'areaChartData' then 'areaChartOptions' above
new Chart(areaChartCanvas, {
    type: 'line',
    data: areaChartData,
    options: areaChartOptions
})