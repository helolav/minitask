<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit task</title>
</head>

<body>

    <a href="/">back</a>

    @foreach($task as $t)
    <form action="/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $t->task_id }}"> <br />
        Name
        <input type="text" name="name" require="required"  value="{{ $t->task_name }}">
        <br>
        To Do
        <textarea name="todo" require="required" >{{ $t->task_due }}</textarea>
        <br>
        Date
        <input type="date" name="date" maxlength="8" require="required"   value="{{ $t->task_date }}">
        <br>
        <input type="submit" value="save">
    </form>
    @endforeach
</body>

</html>