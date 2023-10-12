<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="additon.php" method="post">
        <label for="title">Title : </label>
        <input type="text" name="title" placeholder="Type Title"required>
        <br>
        <label for="author">Author : </label>
        <input type="text" name="authorName" placeholder="Type Author name" required>
        <br>
        <label for="available">Available : </label>
        <input type="text" name="available" placeholder="Type true/falsse"required>
        <br>
        <label for="pages">Pages : </label>
        <input type="text" name="pages" placeholder="Type page number" required>
        <br>
        <label for="isbn">ISBN : </label>
        <input type="text" name="isbn" placeholder="Type ISBN" required>
        <br>
        <input type="submit" value="Submit">
        <br>

    </form>

</body>
</html>