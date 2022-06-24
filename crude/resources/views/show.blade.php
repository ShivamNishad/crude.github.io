<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<table class="table table-borderd shadow text-center table-striped">
<tr>
    <th>Post Id</th>
    <th>Post Title</th>
    <th>Post Author</th>
    <th>Post Subject</th>
    <th>Phone</th>
    <th>Post Delete</th>
    <th>Post Edit</th>
</tr>
@foreach($posts as $post)
<tr>
<td>{{$post->id}}</td>
<td>{{$post->post_title}}</td>
<td>{{$post->post_title}}</td>
<td>{{$post->post_subject}}</td>
<td>{{$post->phone}}</td>
<td><a href="/delete/{{$post->id}}" class="btn btn-danger">delete</a></td>
<td><a href="/edit/{{$post->id}}" class="btn btn-success">Edit</a></td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
