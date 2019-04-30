var ctx = document.getElementById('temp').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Статистика температури за останній день',
            backgroundColor: 'rgb(255, 210, 10)',
            borderColor: 'rgb(255, 200, 10)',
            data: [1, 7, 5, 2, 20, 3, 33]
        }]
    },

    // Configuration options go here    
    options: {}
});

var ctx = document.getElementById('humidity').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Статистика вологості повітря за останній день',
            backgroundColor: 'rgb(14, 197, 230)',
            borderColor: 'rgb(14, 197, 200)',
            data: [0, 10, 5, 2, 20, 24, 30]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx = document.getElementById('ligth').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Статистика освітленості за останній день',
            backgroundColor: 'rgb(2, 245, 62)',
            borderColor: 'rgb(2, 175, 62)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});