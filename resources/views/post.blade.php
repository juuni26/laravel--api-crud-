<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    <div class="container  ">
    <h3> Create new card</h3>   

    <form method="post" action="create/post">
        @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan judul" name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan deskripsi" name="description">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
  </div>
  <input type="submit" class="btn btn-success">
    <a href="/blog" class="btn btn-danger"> Back</a>
</form>


    </div>
</body>

</html>