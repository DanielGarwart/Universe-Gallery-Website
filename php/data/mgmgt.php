<html>

<!-- TODO: Improve design -->

<head>
    <title>Insert</title>
    <link href = "forms/form.css" rel = "stylesheet">
</head>

<body>
    <h1>Insert New Data!</h1>

    <form action="?upt=1" method="POST">
        <select name = "insert" required>
            <option value="planet">Planet</option>
            <option value="galaxy">Galaxy</option>
        </select>
        <button>Submit!</button>
    </form>
    
    <?php require_once 'logic.php'; ?>
</body>
</html>