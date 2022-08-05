<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">

    @include('admin.admincss')
    </head>
  <body>

    <div class="container-scroller">
        @include('admin.navbar')
        <div style="position: relative; top:60px; right:-150px;">
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Title</label>
                    <input style="color: red" type="text" name="title" value="{{$data->title}}" required>
                </div>
                <div>
                    <label>Price</label>
                    <input style="color: red" type="num" name="price" value="{{$data->price}}" required>
                </div>
                <div>
                    <label>Old Image</label>
                    <img height="150px" width="150px" src="/foodimage/{{$data->image}}" >
                </div>
                <div>
                    <label>New Image</label>
                    <input style="color: red" type="file" name="image" required>
                </div>
                <div>
                    <label>Description</label>
                    <input style="color: red" type="text" name="description" value="{{$data->description}}" required>
                </div>
                <div>
                    
                    <input type="submit" value="Save" >
                </div>
            </form>

        </div>

    </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.adminscript')
  </body>
</html>