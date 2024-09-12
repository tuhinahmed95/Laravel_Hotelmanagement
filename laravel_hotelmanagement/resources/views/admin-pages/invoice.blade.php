<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="admin-css.invoice.css">
</head>
<body>
    <div class="invoice-box">
        <table>
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h2>Hotel Name</h2>
                            </td>
                            <td>
                                Invoice #: 123<br>
                                Created: September 3, 2024<br>
                                Due: September 10, 2024
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Guest Name<br>
                                Guest Address<br>
                                Guest Email
                            </td>
                            <td>
                                Hotel Name<br>
                                Address Line 1<br>
                                Address Line 2
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>Room Type</td>
                <td>Price</td>
            </tr>
            <tr class="item">
                <td>Deluxe Room</td>
                <td>$100.00</td>
            </tr>
            <tr class="item">
                <td>Extra Bed</td>
                <td>$20.00</td>
            </tr>
            <tr class="item last">
                <td>Room Service</td>
                <td>$30.00</td>
            </tr>
            <tr class="total">
                <td></td>
                <td>Total: $150.00</td>
            </tr>
        </table>
    </div>
</body>
</html>
