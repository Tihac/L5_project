<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingredients</title>
</head>

<body>
{!! Form::open(array('action'=>'IngredientsController@save')) !!}
{!! Form::label('name', 'Ingredient name: ') !!}
{!! Form::text('name') !!} 
{!! Form::submit('Submit ingredients') !!}
{!! Form::close() !!}

{{Session::get('message')}}
</body>
</html>