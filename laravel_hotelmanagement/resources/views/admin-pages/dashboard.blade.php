@extends('admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management Dashboard</title>
    <link rel="stylesheet" href="/admin-css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Hotel Management Dashboard</h1>
        </header>

        <section class="cards">
            <div class="card">
                <h3>Total Bookings</h3>
                <p>150</p>
            </div>
            <div class="card">
                <h3>Available Rooms</h3>
                <p>25</p>
            </div>
            <div class="card">
                <h3>Total Revenue</h3>
                <p>$75,000</p>
            </div>
            <div class="card">
                <h3>Pending Requests</h3>
                <p>10</p>
            </div>
        </section>

        <section class="charts">
            <div class="chart-container">
                <h2>Pie Chart</h2>
                <canvas id="pieChart"></canvas>
            </div>
            <div class="chart-container">
                <h2>Line Chart</h2>
                <canvas id="lineChart"></canvas>
            </div>
            <div class="chart-container">
                <h2>Bar Chart</h2>
                <canvas id="barChart"></canvas>
            </div>
           
        </section>
    </div>



    <div class="container">
        <h1 class="tab">Registration Table</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>Registration Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>fgddg32n5g</td>
                    <td>2024-08-18</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com</td>
                    <td>saderef5445</td>
                    <td>2024-08-17</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>fgddg32n5g</td>
                    <td>2024-08-18</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>fgddg32n5g</td>
                    <td>2024-08-18</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>fgddg32n5g</td>
                    <td>2024-08-18</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>fgddg32n5g</td>
                    <td>2024-08-18</td>
                </tr>
                <!-- Additional rows here -->
            </tbody>
        </table>
    </div>

    <script src="admin-assets/js/dashboard.js"></script
</body>
</html>


@endsection