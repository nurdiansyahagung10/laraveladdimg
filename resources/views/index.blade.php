<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('formimg') }}">add produk</a>
   <table border="1" style="border-collapse: collapse">
    <tr>
        <th>
            name_product
        </th>
        <th>
            password
        </th>
        <th>
            image
        </th>
    </tr>
    @foreach ($product as $item)
        <tr>
            <td>
                {{$item->name_produk}}
            </td>
            <td>
                {{$item->password}}
            </td>
            <td>
                <img style="height: 50px; width: 50px" src="{{ asset('images/'.$item->image) }}" alt="">
                
            </td>
        </tr>
    @endforeach
   </table>
</body>
</html>