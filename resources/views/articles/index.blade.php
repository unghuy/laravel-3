<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Article Example API-JSON</title>
  </head>
  <body>
      <h1>Articles</h1>
      {{ link_to_route('articles.create', 'New Article') }}

      <table border="1">
          <tr>
              <td>Edit</td>
              <td>Delete</td>
              <td>Title</td>
              <td>Content</td>
          </tr>

          @foreach($articles as $article)
              <tr>
                  <td>{!! link_to_route('articles.edit', 'Edit', $article->id) !!}</td>
                  <td>
                      {!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id]]) !!}
                          <button type="submit">Delete</button>
                        {!! Form::close() !!}
                  </td>
                  <td>{!! link_to_route('articles.show', $article->title, $article->id) !!}</td>
                  <td>{!! link_to_route('articles.show', $article->content, $article->id)!!}</td>
              </tr>
          @endforeach
      </table>
  </body>
</html>
