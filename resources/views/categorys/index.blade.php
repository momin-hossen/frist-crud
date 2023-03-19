<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mt-5">Categorys List</h1><hr>
      <div class=" mt-5">
        <a href="{{ url('categorys/create') }}" class="btn btn-primary">Create Category</a>
    </div>
    
    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Status</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categorys as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->price }}</td>
              <td>{{ $category->status }}</td>
              <td>{{ $category->description }}</td>
              <td>
                <a href="" class="btn btn-sm btn-primary">Edit</a>
                <a href="{{ url('categorys/delete').'/'.$category->id }}" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>