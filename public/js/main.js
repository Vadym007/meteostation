function runCharts(data) {
    var ctx = document.getElementById('temp').getContext('2d');
    var chart1 = new Chart(ctx, {
        type: 'line',

        data: {
            labels: data.lables,
            datasets: [{
                label: 'Статистика температури за останній день',
                backgroundColor: 'rgb(255, 210, 10)',
                borderColor: 'rgb(255, 200, 10)',
                data: data.temperature
            }]
        },

        options: {}
    });

    var ctx = document.getElementById('humidity').getContext('2d');
    var chart2 = new Chart(ctx, {
        type: 'line',

        data: {
            labels: data.lables,
            datasets: [{
                label: 'Статистика вологості повітря за останній день',
                backgroundColor: 'rgb(14, 197, 230)',
                borderColor: 'rgb(14, 197, 200)',
                data: data.humidity
            }]
        },

        options: {}
    });

    var ctx = document.getElementById('ligth').getContext('2d');
    var chart3 = new Chart(ctx, {
        type: 'line',

        data: {
            labels: data.lables,
            datasets: [{
                label: 'Статистика освітленості за останній день',
                backgroundColor: 'rgb(2, 245, 62)',
                borderColor: 'rgb(2, 175, 62)',
                data: data.light
            }]
        },

        // Configuration options go here
        options: {}
    });
}    
