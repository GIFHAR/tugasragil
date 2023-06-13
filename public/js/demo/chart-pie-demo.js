// // Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#858796';

// // Pie Chart Example
// var ctx = document.getElementById("myPieChart");
// var myPieChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//         datasets: [{
//             data: [45, 15, 10, 13, 17],
//             backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'],
//             hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#d4ac0d', '#c0392b'],
//             hoverBorderColor: "rgba(234, 236, 244, 1)",
//         }]
//     },
//     options: {
//         maintainAspectRatio: false,
//         tooltips: {
//             backgroundColor: "rgb(255,255,255)",
//             bodyFontColor: "#858796",
//             borderColor: '#dddfeb',
//             borderWidth: 1,
//             xPadding: 15,
//             yPadding: 15,
//             displayColors: false,
//             caretPadding: 10,
//             callbacks: {
//                 label: function(tooltipItem, data) {
//                     var dataset = data.datasets[tooltipItem.datasetIndex];
//                     var label = data.labels[tooltipItem.index];
//                     var value = dataset.data[tooltipItem.index];
//                     return label + ': ' + value;
//                 }
//             }
//         },
//         legend: {
//             display: false
//         },
//         cutoutPercentage: 80,

//     },
// });

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var labels = ["Industri", "Pendidikan", "Perdagangan & Jasa", "Peribadatan", "Perumahan"];
var data = [45, 15, 10, 13, 17];
var backgroundColors = ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'];
var hoverBackgroundColors = ['#2e59d9', '#17a673', '#2c9faf', '#d4ac0d', '#c0392b'];

var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: labels,
        datasets: [{
            data: data,
            backgroundColor: backgroundColors,
            hoverBackgroundColor: hoverBackgroundColors,
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }]
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, data) {
                    var dataset = data.datasets[tooltipItem.datasetIndex];
                    var label = data.labels[tooltipItem.index];
                    var value = dataset.data[tooltipItem.index];
                    return label + ': ' + value;
                }
            }
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
    },
});