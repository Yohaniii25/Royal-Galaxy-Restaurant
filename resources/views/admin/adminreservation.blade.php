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

        <div style="position: relative; top: 60px; right: -150px ">
            <table bgcolor="grey" border="3px">
                <tr>
                    <th style="padding: 30px;">Name</th>
                    <th style="padding: 30px;">Email</th>
                    <th style="padding: 30px;">Phone</th>
                    <th style="padding: 30px;">Date</th>
                    <th style="padding: 30px;">Time</th>
                    <th style="padding: 30px;">Message</th>
                </tr>

                @foreach($data as $data)
                <tr align="center">
                    <td style="padding: 30px;">{{$data->name}}</td>
                    <td style="padding: 30px;">{{$data->email}}</td>
                    <td style="padding: 30px;">{{$data->phone}}</td>
                    <td style="padding: 30px;">{{$data->date}}</td>
                    <td style="padding: 30px;">{{$data->time}}</td>
                    <td style="padding: 30px;">{{$data->message}}</td>
                </tr>

                @endforeach
            </table>
        </div>


        @include("admin.adminscript")

</body>

</html>