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
        <div class="text-header">
            <h1>
                All User
            </h1>
        </div>
        <div style="position: absolute;
        top: 40%;
        left: 55%;
        transform: translate(-50%,-50%);
        ">
            <table  style="border: 10px;background-color:#1d50be; border-radius:1em; height:160px;">
                <tr style="text-align:center;height:50px; ">
                    <th style="border-bottom: 1px solid #464c59; ">
                        Name
                    </th>
                    <th style="border-bottom: 1px solid #464c59; ">
                        Email
                    </th>
                    <th style="border-bottom: 1px solid #464c59; ">
                        Action
                    </th>
                </tr>
                @foreach($data as $data)
                <tr style="text-align:center; border-radius:20px;">
                    <td style="">
                       {{$data->name}} 
                    </td>
                    <td style="">
                        {{$data->email}}
                    </td>
                    @if($data->usertype=="0")
                    <td style="">
                        <a style="color: black;text-decoration:none;" href="{{url('/deleteuser',$data->id)}}">Delete</a>
                    </td>
                    @else
                    <td style="">
                        <a>Not Allowed</a>
                    </td>
                    @endif

                </tr>
                @endforeach
            </table>
        </div>
    </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <style>
        table {
        table-layout: fixed;
        border-collapse: collapse;
        width: 100%;
        text-align: left;
        overflow: hidden;
        }
        table tr:not(:last-child){
            border-bottom: 1px solid #464c59;
        }
        td{
            padding-right: 25px; padding: .6em 1em;
        }
        tr:hover{
            background-color: #00000047;
        }
        .text-header {
            position: absolute;
            left: 50%;
            top: 2%;
        }
    </style>
    @include('admin.adminscript')
  </body>
</html>