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

        <div style="position:relative; top: 60px; right:-150px">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div>

                    <label>Title</label>
                    <input style="color:blue;" type="text" name="title" placeholder="Enter the title" required>

                </div>
                <div>

                    <label>Price</label>
                    <input style="color:blue;" type="num" name="price" placeholder="Enter the price" required>

                </div>
                <div>

                    <label>Image</label>
                    <input type="file" name="image" required>

                </div>
                <div>

                    <label>Description</label>
                    <input style="color:blue;" type="text" name="description" placeholder="Enter the description" required>

                </div>

                <div>

                    <input style="color: black; background-color:white" type="submit" value="Save">

                </div>

            </form>

            <br>

            <div>
                <table bgcolor="black">
                    <tr align="center">
                        <th style="padding: 30px">Food Name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                    </tr>
                    @foreach($data as $data)
                    <tr align="center">

                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img height="170" width="170" src="/foodimage/{{$data->image}}"></td>

                        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                  
                    @endforeach
                </table>
                <br><br><br><br>
            </div>
        </div>


        @include("admin.adminscript")

</body>

</html>