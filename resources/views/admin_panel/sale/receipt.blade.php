<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sale Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .receipt-container {
            width: 80mm;
            padding: 10px;
            background-color: #fff;
        }

        .header,
        .footer {
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .contact-info div {
            width: 45%;
        }

        .sale-receipt-heading {
            text-align: center;
            margin: 10px 0;
            font-size: 18px;
            font-weight: bold;
            border-bottom: 1px dashed #000;
            padding-bottom: 5px;
        }

        .sale-info {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .sale-info div {
            width: 45%;
        }

        table {
            width: 100%;
            font-size: 12px;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            padding: 4px 0;
            text-align: left;
        }

        th {
            border-bottom: 1px solid #000;
            font-weight: bold;
        }

        .totals {
            font-weight: bold;
            margin-top: 10px;
        }

        .totals td {
            padding: 4px 0;
        }

        .totals tr td:first-child {
            text-align: left;
        }

        .totals tr td:last-child {
            text-align: right;
        }

        .footer p {
            margin: 5px 0;
            font-size: 12px;
        }
    </style>
    <script>
        window.onload = function() {
            window.print();
            // Redirect after printing
            setTimeout(function() {
                window.location.href = '/all-sales'; // Update this URL as needed
            }, 1000);
        }
    </script>
</head>

<body>
    <div class="receipt-container">
        <!-- Header -->
        <div class="header">
            <h2>Falcon Communication</h2>
        </div>
        <div class="contact-info">
            <div><strong>Address:</strong> Hyderabad Latifabad No 8</div>
            <div style="text-align: right;"><strong>Phone:</strong> 123-456-7890</div>
        </div>
        <!-- Sale Receipt Heading -->
        <div class="sale-receipt-heading">Sale Receipt</div>
        <!-- Sale Information -->
        <div class="sale-info">
            <div><strong>Customer:</strong> {{ $sale->customer }}</div>
            <div style="text-align: right;"><strong>Invoice No:</strong> {{ $sale->invoice_no }}</div>
        </div>
        <div class="sale-info">
            <div><strong>Time:</strong> {{ date('h:i A') }}</div>
            <div style="text-align: right;"><strong>Date:</strong> {{ date('d/m/Y', strtotime($sale->sale_date)) }}</div>
        </div>


        <!-- Items Table -->
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach(json_decode($sale->item_name) as $key => $item)
                <tr>
                    <td>{{ $item }}</td>
                    <td>{{ json_decode($sale->quantity)[$key] }}</td>
                    <td>{{ number_format(json_decode($sale->price)[$key], 0) }}</td>
                    <td>{{ number_format(json_decode($sale->total)[$key], 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Totals Section -->
        <table class="totals">
            <tr>
                <td colspan="3">Subtotal</td>
                <td>{{ number_format($sale->total_price, 2) }}</td>
            </tr>
            <tr>
                <td colspan="3">Discount</td>
                <td>{{ number_format($sale->discount, 2) }}</td>
            </tr>
            <tr>
                <td colspan="3">Net Total</td>
                <td>{{ number_format($sale->Payable_amount, 2) }}</td>
            </tr>
            <tr>
                <td colspan="3">Cash Received</td>
                <td>{{ number_format($sale->cash_received, 2) }}</td>
            </tr>
            <tr>
                <td colspan="3">Cash Return</td>
                <td>{{ number_format($sale->change_return, 2) }}</td>
            </tr>
        </table>
        <!-- Footer -->
        <div class="footer">
            <p>Thank you for shopping with us!</p>
            <p>Developed by Kashan Shaikh <strong>03173859647</strong></p>
        </div>
    </div>
</body>

</html>