<!DOCTYPE html>
<html>
<head>
	<title>show data</title>
</head>
<body>
	@foreach($students as $student)
	   {{$student["name"]}}<br>
	   @endforeach
</body>
</html>