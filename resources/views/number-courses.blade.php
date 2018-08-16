<!DOCTYPE html>
<html>
<body>

<form method=POST action={{ route('calc.courses') }}>
{{ csrf_field() }}
Number of Courses: <input type="number" name="number_courses" value="5"><br>
<input type="submit" value="submit">
</form>

<p>Click the "Submit" button to submit number of courses</p>

</body>
</html>