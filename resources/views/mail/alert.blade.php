<!DOCTYPE html>
<html>
<head>
	<title>Alert</title>
</head>
<body>
@if($value->type == 'text')
	The website <a href="{{$value->url}}">{{$value->url}}</a> contains {{$value->value}} in {{$value->css_rule}}.
@else
	The value <a href="{{$value->url}}">{{$value->url}}</a> has dropped to {{$historic->value}}.
@endif
</body>
</html>