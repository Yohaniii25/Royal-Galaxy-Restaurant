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

        <div>
            <form>
                <label>Title</label>
                <input type="text" name="title" placeholder="Write the title" required>
            </form>
        </div>

        
    </div>


    @include("admin.adminscript")

</body>

</html>