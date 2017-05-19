<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show Articles API-JSON</title>
  </head>
  <body>
      <article class="article">
          <h1>{{ $article->title }}</h1>
          <div>{{ $article->content }}</div>
      </article>
      {!! link_to_route('articles.index', 'Articles') !!}
  </body>
</html>
