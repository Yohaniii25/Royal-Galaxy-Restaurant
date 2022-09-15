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

    <form action="{{url('uploadchef')}}" method="post" enctype="multipart/form-data">

      @csrf
      <div>
        <label>Name</label>
        <input style="color:blue;" type="text" name="name" required="" placeholder="Enter the name ">
      </div>

      <div>
        <label>Speciality</label>
        <input style="color:blue;" type="text" name="speciality" required="" placeholder="Enter the speciality ">
      </div>

      <div>
        <input type="file" name="image" required="">
      </div>

      <div>
        <input style="color: black; background-color:white" type="submit" value="Save">
      </div>
    </form>

  </div>

  @include("admin.adminscript")

</body>

</html>