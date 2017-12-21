{!! Form::open(['route' => 'books.store']) !!}

  <div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title') !!}
  </div>
  <div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description') !!}
  </div>

{!! Form::submit('Add Book') !!}
{!! Form::close() !!}
