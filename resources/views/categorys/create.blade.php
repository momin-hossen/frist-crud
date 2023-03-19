<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="text-center mt-5">Create New Category</h2><hr>
      <a href="{{ url('categorys/index') }}" class="btn btn-primary">View Categorys</a>

      <form action="{{ url('categorys/store') }}" class="mt-5" method="POST">
        @csrf

        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="name">
        </div>
        <div class="mb-3">
          <input type="text" name="price" class="form-control" placeholder="price">
        </div>
        <div class="mb-3 ">
          <select class="form-control" name="status" id="">
            <option value="1">Active</option>
            <option value="0">Deative</option>
          </select>
        </div>
        <div class="mb-3">
          <textarea name="description" id="" class="form-control" placeholder="description"></textarea>
        </div>
        <div class="mb-3">
          <button class="btn btn-info" type="submit">Save</button>
        </div>
      </form>
    </div>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>