const ctxPie = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: ['Single', 'Double', 'Suite'],
        datasets: [{
            data: [30, 50, 20],
            backgroundColor: ['#007BFF', '#FFC107', '#28A745']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            }
        }
    }
});

const ctxLine = document.getElementById('lineChart').getContext('2d');
const lineChart = new Chart(ctxLine, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Bookings',
            data: [10, 15, 20, 25, 30, 40, 60],
            borderColor: '#007BFF',
            fill: false
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            }
        }
    }
});

const ctxBar = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: ['Single', 'Double', 'Suite'],
        datasets: [{
            label: 'Rooms Available',
            data: [10, 15, 5],
            backgroundColor: ['#007BFF', '#FFC107', '#28A745']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            }
        }
    }
});

const ctxStackedBar = document.getElementById('stackedBarChart').getContext('2d');
const stackedBarChart = new Chart(ctxStackedBar, {
    type: 'bar',
    data: {
        labels: ['Single', 'Double', 'Suite'],
        datasets: [{
            label: 'Bookings',
            data: [10, 15, 20],
            backgroundColor: '#007BFF'
        }, {
            label: 'Available Rooms',
            data: [5, 10, 15],
            backgroundColor: '#FFC107'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        },
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true,
            }
        }
    }
});
