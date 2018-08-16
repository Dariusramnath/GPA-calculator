<!DOCTYPE html>
<html>
<body>

<form method=POST action={{ route('gpa.calc') }}>
{{ csrf_field() }}
@for ($i = 1; $i < $num_courses+1 ; $i++)
    Course {{$i}} GPA: <input type="number" step='0.1' name="GPA_{{$i}}" value=""><br>
    Course {{$i}} Credit:  <input type="number" name="credit_{{$i}}" value=""><br><br>
@endfor
<input type="submit" value="Calculate">
</form>

<p>Click the "Calcute" button to get GPA</p>

</body>
</html>