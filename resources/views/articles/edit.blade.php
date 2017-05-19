<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Articles API-JSON</title>
  </head>
  <body>
      {{ Form::model($article, [ 'method' => 'PATCH', 'route' => ['articles.update', $article => id], 'id' => 'articles-form' ]) }}
          @include('articles.form', ['submitButtonText' => 'Edit Article'])
      {{ Form::close() }}
  </body>
</html>
