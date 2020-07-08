<html>
    <head>
        <title>
            file
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <style>
            .title{
                text-align: center;
                font-family: Calibri;
                font-size: 23px;

            }
        </style>
    </head>
    <body>
    @if(count($errors)> 0 )
        <div class="alert alert-danger">
            Upload Validation Error <br> <br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
        <img src="images/{{ Session::get('path') }}" width="300px">
        @endif
         <form method="post" enctype="multipart/form-data"  action="{{url('/uploadfile')}}">
             {{
                csrf_field()
             }}

             <div class="form-group">
                 <table class="table">

                     <tr>
                         <td class="title" colspan="3" width="100%">
                             Some Details
                         </td>
                     </tr>
                     <tr>
                         <td colspan="3">
                             <input type="hidden" for="id" name="id" ><br>

                             <label for="title" name="title">Title :</label>
                             <input type="text" for="title" name="title"  required><br>

                             <label for="description" name="description">Description :</label>
                             <input type="text" for="description" name="description"  required><br>

                             {{--<label for="path" name="path">Path :</label>--}}
                             {{--<input type="text" for="path" name="path"  required><br>--}}

                             <label for="package_id" name="package_id">Package ID :</label>
                             {{--<input type="text" for="package_id" name="package_id" list="ll" required><br>--}}

                             <select name="package_id" required>
                                 <option disabled selected value="">Select package</option>
                                 <option value="1" >1- Wedding</option>
                                 <option value="2">2- Sessions</option>
                                 <option value="3">3- Others</option>
                             </select>
                         </td>
                     </tr>
                     <tr>
                         <td width="50%" align="right"><lable>Select File For Upload</lable></td>
                         <td width="50%"> <input type="file" name="select_file"  /></td>

                     </tr>
                     <tr>
                         <td wdith="40%" align="right" ></td>
                         <td width="30%"><span class="text-muted"> jpeg, jpg, png, gif</span></td>
                         <td width="30%"><input type="submit" name="upload" class="bnt btn-primary" value="Upload"></td>
                     </tr>
                 </table>
             </div>
         </form>

    </body>
</html>
