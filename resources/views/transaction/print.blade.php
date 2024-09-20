<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 20px;

        }

        .struk {
            /* font-variant: helvetica; */
            width: 80mm;
            max-width: 100%;
            border: 1px solid black;
            padding: 10px;
            margin: 0 auto;
        }

        .struk-header{
            
            text-align: center;
        }

        .struk-footer {
            text-align: center;
            margin-bottom: 10px;
            padding: 10px;
        }

        .struk-header h1 {
            font-size: 20px;
            margin: 0px;
        }

        .struk-body {
            margin-bottom: 10px;
        }

        .struk-body table {
            width: 100%;
            border-collapse: collapse;
        }

        .struk-body table thead,
        .struk-body table td {
            padding: 5px;
            text-align: right;
        }

        .struk-body table th {
            text-align: right;
            padding: 5px;
            border-bottom: 1px solid black;

        }

        .total,
        .payment,
        .change {
            display: flex;
            justify-content: space-between;
            padding: 5px;
        }

        .total {
            font-weight: bold;
            border-top: 1px solid black;
            margin-top: 10px;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .struk {
                width: auto;
                border: none;
                margin: 0;
                padding: 0;
            }

            .struk-header h1,
            .struk-footer {
                font-size: 14px;
            }

            .struk-body table th,
            .struk-body table td {
                padding: 2px;
                text-align: left;
            }

            .total,
            .payment,
            .change {
                padding: 2px 0;
            }
        }
    </style>
</head>

<body>
    <div class="struk">
        <div class="struk-header">
            <h1>Oishi Ramen</h1>
            <p>Jl. Petamburan, Jakarta Pusat</p>
            <p>Telp. (021)12345678</p>
        </div>
        <div class="struk-body">
            <table>
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detail_sales as $detail)
                        <tr>
                            <td>{{ $detail->product->product_name }}</td>
                            <td>{{ $detail->qty }}</td>
                            <td>{{ $detail->product->price }}</td>
                            <td>{{ $detail->sub_total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="total">
                <span>Total:</span>
                <span>{{ 'Rp.' . number_format($val->trans_total_price) }}</span>
            </div>
            <div class="payment">
                <span>Bayar:</span>
                <span>{{ 'Rp.' . number_format($val->trans_paid) }}</span>
            </div>
            <div class="change">
                <span>Kembalian:</span>
                <span>{{ 'Rp.' . number_format($val->trans_change) }}</span>
            </div>
        </div>
        <div class="struk-footer">
            <p>Terima Kasih Ishiers!</p>
            <p>Silahkan Datang Kembali</p>
        </div>
    </div>
</body>

</html>


<script>
    window.onload = function() {
        window.print()
    }
</script>
