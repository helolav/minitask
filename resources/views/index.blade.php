<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini task</title>
</head>

<body>
    <h1>what ur new task today?</h1>

    <form action="/store" method="post">
        {{csrf_field()}}
        <input type="text" name="name" require="required" placeholder="name">
        <input type="text" name="todo" require="required" placeholder="todo"></textarea>
        <input type="date" name="date" maxlength="8" require="required">
        <input type="submit" value="save">
    </form>

    <br>
    <br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>To do</th>
            <th>date</th>
            <th>Opsi</th>
        </tr>
        @foreach($task as $t)
        <tr>
            <td>{{ $t->task_name }}</td>
            <td>{{ $t->task_due }}</td>
            <td>{{ $t->task_date }}</td>
            <td>
                <a href="/edit/{{ $t->task_id }}">Edit</a>
                |
                <a href="/delete/{{ $t->task_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>


</body>

</html>