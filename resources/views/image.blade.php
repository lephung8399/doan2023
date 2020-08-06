<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 6 Upload Image Using Dropzone Tutorial</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>


</head>
<body>
<div class="container">
    <h2>Laravel 6 Upload Image Using Dropzone Tutorial</h2><br/>
    <form method="post" action="{{url('dropzone/store')}}" enctype="multipart/form-data"
          class="dropzone" id="dropzone">
        @csrf
        <button type="submit">UPLOAD</button>
    </form>
</div>
<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 10,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                return false;
            }
        };
</script>
</body>
</html>
