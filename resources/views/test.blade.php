<!DOCTYPE html>
<html>
<head>
	<title>show data</title>
</head>
<body>

<h2>welcome {{$name}}! And You're {{$age}} years old!</h2>
@php
  $a=6;
  @endphp
  @if($a==5)
    it's five
    @elseif($a==6)
     it's six
     @else
       not found
       @endif

       @for($i=1;$i<=10;$i++)
       {{$i}}<br>
       @endfor

       @php
       $a=2;
       @endphp
       @switch($a)
       @case (1)
       it's one
       @break
       @case(2)
       it's tow
       @break
       @default
          it's three
          @endswitch
</body>
</html>