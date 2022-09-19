<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>

    <div class="container-scroller">

        @include("admin.navbar")

        <div class="container">

            <h1>Customer Orders</h1>

            <form action="{{url('/search')}}" method="get">

                <input type="text" name="search" style="color:blue;">

                <input type="submit" value="Search" class="btn btn-primary">
            </form>

            <table>
                <tr>
                    <td style="padding: 20px;">Customer Name</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">Address</td>
                    <td style="padding: 20px;">Food Name</td>
                    <td style="padding: 20px;">Price</td>
                    <td style="padding: 20px;">Quantity</td>
                    <td style="padding: 20px;">Total Price</td>
                </tr>

                @foreach($data as $data)
                <tr align="center" st>
                    <td style="padding: 20px;">{{$data->name}}</td>
                    <td style="padding: 20px;">{{$data->phone}}</td>
                    <td style="padding: 20px;">{{$data->address}}</td>
                    <td style="padding: 20px;">{{$data->foodname}}</td>
                    <td style="padding: 20px;">{{$data->price}}Rs</td>
                    <td style="padding: 20px;">{{$data->quantity}}</td>
                    <td style="padding: 20px;">{{$data->price * $data->quantity}}Rs</td>
                </tr>
                @endforeach
            </table>

        </div>

    </div>

    @include("admin.adminscript")

</body>

</html>