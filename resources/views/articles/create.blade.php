<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Articles API-JSON</title>
  </head>
  <body>
      {{ Form::open([ 'route' => 'articles.store', 'id' => 'articles-form' ]) }}
          @include('articles.form', [ 'submitButtonText' => 'Add Article'])
      {{ Form::close() }}
  </body>
</html>
