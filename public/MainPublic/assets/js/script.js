const data = [
    { name: "Продвижение", value: 200200200 },
    { name: "Маркетинг", value: 200200200 },
    { name: "Блокировка у «гаранта»", value: 400400400 },
    { name: "Страховой фонд", value: 600600600 },
    { name: "Команда и основатели", value: 1000000000 },
    { name: "Tron ICO", value: 1600600600 },
    { name: "ICO", value: 2600600600 }
];
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Age');
    data.addColumn('number', 'People');
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
        legend: {
            textStyle: {color: '#000'}
        },
        backgroundColor: "transparent",
        chartArea: {
            width: '70%',
            height: '70%'
        },
        colors: ['#37BAAC', '#4f93ce', '#87b5de', '#0063ba', '#357fbf', '#EDEDED', '#A8FE40', '#FEF88B'],
        is3D: true,
        pieSliceText: 'percentage', // Отображение процентов на диаграмме
        pieSliceTextStyle: {
            color: '#2B2C2D' // Цвет текста на диаграмме
        }
    };
    var chart = new google.visualization.PieChart(document.getElementById('chart'));
    chart.draw(data, options);
}
