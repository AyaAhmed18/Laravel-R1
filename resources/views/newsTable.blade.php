<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Published</th>
        <th>Edit</th>

      </tr>
    </thead>
    <tbody>
    @foreach($showTable as $news)
      <tr>
        <td>{{ $news->title}}</td>
        <td>{{ $news->content}}</td>
        <td>@if($news->published)
        YES
        @else
        NO
        @endif

        </td>
        <td><a href="editNews/{{ $news->id}}">Edit</a></td>
      </tr>
   @endforeach  
     
    </tbody>
  </table>
</div>

</body>
</html>
