fetch('/api/admin/orders/indexChartData')
    .then(response => response.json())
    .then(data => {
        const chartData = Object.values(data);
        // Process the data based on the selected time interval
        const chartValues = chartData.map(item => ({
            x: item.date,
            y: item.total_price,
        }));
        // Destroy the current chart instance if it exist

        // Create and render the chart using the retrieved data
        const options = {
            chart: {
                type: 'line',
            },
            xaxis: {

            },
            series: [
                {
                    name: 'Sales($)',
                    data: chartValues,
                },
            ],
        };

        chart = new ApexCharts(document.querySelector("#marketchart"), options);
        chart.render();
    })
    .catch(error => {
        console.error('Error:', error);
    });
// Event listeners for the time interval links
document.getElementById('day-link').addEventListener('click', function (event) {
    event.preventDefault();
    fetchChartData('day');
});

document.getElementById('week-link').addEventListener('click', function (event) {
    event.preventDefault();
    fetchChartData('week');
});

document.getElementById('month-link').addEventListener('click', function (event) {
    event.preventDefault();
    fetchChartData('month');
});

// Function to fetch and render the chart data based on the selected time interval
function fetchChartData(timeInterval) {
    // Construct the API endpoint URL and data processing function based on the selected time interval
    let apiUrl = '';
    let dataProcessingFunction = null;

    switch (timeInterval) {
        case 'day':
            apiUrl = '/api/admin/orders/indexChartData';
            dataProcessingFunction = processDailyData;
            break;
        case 'week':
            apiUrl = '/api/admin/orders/indexChartData_Week';
            dataProcessingFunction = processWeeklyData;
            break;
        case 'month':
            apiUrl = '/api/admin/orders/indexChartData_Month';
            dataProcessingFunction = processMonthlyData;
            break;
        default:
            return; // Invalid time interval
    }

    // Fetch data
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            // Process the data based on the selected time interval
            const chartValues = dataProcessingFunction(data);

            // Destroy the current chart instance if it exists
            if (chart) {
                chart.destroy();
            }

            // Create and render the chart using the retrieved data
            const options = {
                chart: {
                    type: 'line',
                },
                xaxis: {

                },
                series: [
                    {
                        name: 'Sales($)',
                        data: chartValues,
                    },
                ],
            };

            chart = new ApexCharts(document.querySelector("#marketchart"), options);
            chart.render();
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

// // Fetch initial chart data (e.g., for the "Week" interval)
// fetchChartData('week');

// Data processing functions for different time intervals
function processDailyData(data) {
    // Process daily data and return the chart values
    // Adjust data structure as needed for daily data
    return data.map(item => ({
        x: item.date,
        y: item.total_price,
    }));
}

function processWeeklyData(data) {
    // Process weekly data and return the chart values
    // Adjust data structure as needed for weekly data
    return data.map(item => ({
        x: `Week ${item.week},${item.year}`,
        y: item.total_price,
    }));
}

function processMonthlyData(data) {
    // Process monthly data and return the chart values
    // Adjust data structure as needed for monthly data
    return data.map(item => ({
        x: item.month,
        y: item.total_price,
    }));
}

// Get references to the navigation links
const monthLink = document.getElementById('month-link');
const weekLink = document.getElementById('week-link');
const dayLink = document.getElementById('day-link');

// Event listener for the "Month" link
monthLink.addEventListener('click', function (event) {
    event.preventDefault();

    // Add the "active" class to the clicked link
    monthLink.classList.add('active');
    weekLink.classList.remove('active');
    dayLink.classList.remove('active');

    // Fetch data for the "Month" interval
    
});

// Event listener for the "Week" link
weekLink.addEventListener('click', function (event) {
    event.preventDefault();

    // Add the "active" class to the clicked link
    monthLink.classList.remove('active');
    weekLink.classList.add('active');
    dayLink.classList.remove('active');

    // Fetch data for the "Week" interval
  
});

// Event listener for the "Day" link
dayLink.addEventListener('click', function (event) {
    event.preventDefault();

    // Add the "active" class to the clicked link
    monthLink.classList.remove('active');
    weekLink.classList.remove('active');
    dayLink.classList.add('active');

    // Fetch data for the "Day" interval
   
});

