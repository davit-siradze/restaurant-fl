<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
    <head>
    @include('admin.admincss')
    </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbar')
        

        <div style="position: relative; top:60px; right:-150px;">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Title</label>
                    <input style="color: red" type="text" name="title" placeholder="Write a title" required>
                </div>
                <div>
                    <label>Price</label>
                    <input style="color: red" type="num" name="price" placeholder="price" required>
                </div>
                <div>
                    <label>Image</label>
                    <input style="color: red" type="file" name="image" required>
                </div>
                <div>
                    <label>Description</label>
                    <input style="color: red" type="text" name="description" placeholder="Description" required>
                </div>
                <div>
                    
                    <input type="submit" value="Save" >
                </div>
            </form>

            <div>
                <table bgcolor="black">
                    <tr>
                        <th style="padding: 30px;">Food Name</th>
                        <th style="padding: 30px;">Price</th>
                        <th style="padding: 30px;">Descriptiom</th>
                        <th style="padding: 30px;">Image</th>
                        <th style="padding: 30px;">Action</th>
                        <th style="padding: 30px;">Action #2</th>
                    </tr>
                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img height="200" width="200" src="/foodimage/{{$data->image}}" alt=""></td>
                        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>

                    </tr>
                    @endforeach
                </table>
            </div>
            
        </div>

    </div>
    <style>
        label {
            display: flex;
        }
        input
        {
            background: rgba(255,255,255,0.1);
            border: none;
            font-size: 16px;
            height: auto;
            margin: 0;
            outline: 0;
            padding: 15px;
            width: 50%;
            background-color: #e8eeef;
            color: #8a97a0;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 30px;
        }
    </style>


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.adminscript')
  </body>
</html>