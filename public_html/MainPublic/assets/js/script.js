google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart2);
google.charts.setOnLoadCallback(drawChart3);
function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Age');
    data.addColumn('number', 'total');
    data.addRows([
        ['Свободная реализация - 20% ', 700000],
        ['Разработка - 30% ', 1050000],
        ['Инвестор - 50% ', 1750000],
    ]);

    var options = {
        slices: {
            3: {offset: 0.1}
        },
        legend: {
            position: 'bottom', // Размещаем легенду снизу
            textStyle: {
                color: '#000000', // Цвет текста легенды
                fontSize: 10 // Размер шрифта легенды
            }
        },
        backgroundColor: "transparent",
        chartArea: {
            width: '90%',
            height: '90%'
        },
        colors: ['#F0B203', '#D59B19', '#7a6a57'],
        is3D: false,
        pieSliceText: 'percentage', // Отображение процентов на диаграмме
        pieSliceTextStyle: {
            color: '#2B2C2D' // Цвет текста на диаграмме
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart'));
    chart.draw(data, options);
}
function drawChart2() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Категория');
    data.addColumn('number', 'Общее количество');
    data.addRows([
        ['Продвижение - 3.02% ', 200200200],
        ['Маркетинг - 3.02% ', 200200200],
        ['Блокировка у «гаранта»  - 6.04% ', 400400400],
        ['Страховой фонд - 9.05% ', 600600600],
        ['Команда и основатели - 15.08% ', 1000000000],
        ['Tron ICO - 24.17% ', 1600600600],
        ['ICO - 39.62% ', 2600600600],
    ]);

    var options = {
        slices: {
            3: {offset: 0.1}
        },
        legend: { position: 'none'}, // Отключаем легенду
        backgroundColor: "transparent",
        chartArea: {
            width: '90%',
            height: '90%'
        },
        colors: ['#37BAAC', '#4f93ce', '#87b5de', '#0063ba', '#357fbf', '#EDEDED', '#A8FE40', '#FEF88B'],
        is3D: false,
        pieSliceText: 'percentage', // Отображение процентов на диаграмме
        pieSliceTextStyle: {
            color: '#2B2C2D' // Цвет текста на диаграмме
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart2'));
    chart.draw(data, options);
}
function drawChart3() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Age');
    data.addColumn('number', 'total');
    data.addRows([
        ['Компенсации комиссий - 10% ', 150000],
        ['Страхование - 90% ', 1350000],
    ]);

    var options = {
        slices: {
            3: {offset: 0.1}
        },
        legend: { position: 'none'}, // Отключаем легенду
        backgroundColor: "transparent",
        chartArea: {
            width: '90%',
            height: '90%'
        },
        colors: ['#3BC5EF', '#FBC627'],
        is3D: false,
        pieSliceText: 'percentage', // Отображение процентов на диаграмме
        pieSliceTextStyle: {
            color: '#2B2C2D' // Цвет текста на диаграмме
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('chart3'));
    chart.draw(data, options);
}
