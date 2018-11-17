<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Nuevo producto</h1>
    <form class="" action="{{ route('product.store') }}" method="post">
      {!! csrf_field() !!}
      <input type="text" name="name" value="">
      <input type="text" name="price" value="">
      @foreach ($category as $cat)
        <input type="checkbox" name="category_id[]" value="{{ $cat->id }}">{{ $cat->title }}
      @endforeach
      <button type="submit" class="btn btn-large btn-block btn-default">guardar</button>
    </form>

  </body>
</html>
