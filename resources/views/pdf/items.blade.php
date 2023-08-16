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

    <h1>items Details</h1>

    <table id="customers">
        <tr>
            <th>Id</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Category</th>
         
        </tr>
        @if(count($items))
        @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->item_name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->category}}</td>
        @endforeach
        @endif
        </tr>
    </table>

</body>

</html>
