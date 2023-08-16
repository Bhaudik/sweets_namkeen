<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>order Details</h1>

    <table id="customers">
        <tr>
            <th>Order Id</th>
            <th>User Mame</th>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Address</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Amount</th>           
        </tr>
        @if(count($orders))
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->eid}}</td>
            <td>{{$order->pid}}</td>
            <td>{{$order->pname}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->qty}}</td>
            <td>{{$order->tot_amt}}</td>
        @endforeach
        @endif
        </tr>
    </table>

</body>

</html>