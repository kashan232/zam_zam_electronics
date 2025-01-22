<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Memo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }

        .receipt-container {
            width: 100%;
            max-width: 400px;
            margin: auto;
            padding: 10px;
            border: 1px solid #000;
            background-color: #fff;
        }

        h2 {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin: 0;
        }

        .receipt-header p {
            text-align: center;
            margin: 2px 0;
        }

        .details {
            margin-top: 10px;
            line-height: 1.6;
        }

        .details p {
            margin: 4px 0;
        }

        .details strong {
            font-weight: bold;
        }

        table {
            width: 100%;
            margin-top: 12px;
            font-size: 12px;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            border-bottom: 2px solid #000;
            padding: 4px 0;
        }

        .tbody tr td {
            padding: 4px 0;
            text-align: left;
            border-bottom: 1px dashed #000;
        }

        .totals td {
            font-weight: bold;
            text-align: right;
            padding-top: 4px;
        }

        .receipt-footer {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
        }

        .note {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        @media print {
            body {
                margin: 0;
            }

            .receipt-container {
                border: none;
                width: auto;
                max-width: none;
                margin: 0;
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
    <div class="receipt-container">
        <!-- Receipt Header -->
        <div class="receipt-header">
            <h2>Beauty Base Cosmetics</h2>
            <p><strong>Cash Memo</strong></p>
            <p><strong>Address:</strong> Resham Bazar</p>
            <p><strong>Phone:</strong> 0313-300452-0</p>
        </div>

        <!-- Sale Details -->
        <div class="details">
            <p><strong>Memo No:</strong> {{ $sale->invoice_no }}</p>
            <p><strong>Customer:</strong> {{ $sale->customer }}</p>
            <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($sale->created_at)->format('F d, Y h:i A') }}</p>
        </div>

        <!-- Items Table -->
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Unit</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody class="tbody">
                @foreach(json_decode($sale->item_name) as $key => $item)
                <tr>
                    <td>{{ $item }}</td>
                    <td>{{ json_decode($sale->quantity)[$key] }}</td>
                    <td>{{ number_format(json_decode($sale->price)[$key], 0) }}</td>
                    <td>{{ number_format(json_decode($sale->total)[$key], 0) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="totals">
                    <td colspan="3">Total Amount</td>
                    <td>{{ $sale->total_price }}</td>
                </tr>
                <tr class="totals">
                    <td colspan="3">Discount</td>
                    <td>{{ $sale->discount }}</td>
                </tr>
                <tr class="totals">
                    <td colspan="3">Net Total</td>
                    <td>{{ $sale->Payable_amount }}</td>
                </tr>
                <tr class="totals">
                    <td colspan="3">Cash Received</td>
                    <td>{{ $sale->cash_received }}</td>
                </tr>
                <tr class="totals">
                    <td colspan="3">Change Returned</td>
                    <td>{{ $sale->change_return }}</td>
                </tr>

                <tr class="totals">
                    <td colspan="3">Net Total</td>
                    <td><strong>{{ $sale->Payable_amount }}</strong></td>
                </tr>

                <tr class="totals">
                    <td colspan="3">Previous Balance</td>
                    <td>{{ $previous_balance }}</td>
                </tr>
                <tr class="totals">
                    <td colspan="3">Closing Balance</td>
                    <td>{{ $closing_balance }}</td>
                </tr>
                
            </tfoot>
        </table>

        <!-- Footer Message -->
        <div class="receipt-footer">
            <p class="note">Goods Once Sold Are Not Returnable</p>
            <p>Thank you for your purchase!</p>
            <p>Designed & Developed by ProWave Software Solution</p>
            <p><strong>0317-3836223 | 0317-3859647</strong></p>
        </div>
    </div>

    <script>
        window.onload = function () {
            window.print();
            setTimeout(function () {
                window.location.href = "{{ route('all-sales') }}";
            }, 1000);
        };
    </script>
</body>

</html>
