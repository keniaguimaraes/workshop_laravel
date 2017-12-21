<a href="/books/create">Create Book</a>
<table>
  <thead>
    <tr><td>ID</td><td>Title</td><td>Description</td></tr>    
  </thead>
  <tbody>
    @foreach ($books as $book)
      <tr>
        <td>{{book->id}}</td>
        <td>{{book->title}}</td>
        <td>{{book->description}}</td>
      </tr>
    @endforeach
  </tbody>
</table>