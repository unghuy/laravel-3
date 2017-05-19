<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Articles</title>
  </head>
  <body>
      <div class="title">
          {!! Form::label('title', 'Title: ') !!}
          {!! Form::text('title')!!}
      </div>

      <div class="">
          {!! Form::label('content', 'Content: ') !!}
          {!! Form::textArea('content') !!}
      </div>

      {!! Form::submit($submitButtonText)!!}
  </body>
</html>
