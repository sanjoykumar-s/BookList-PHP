<?php
$json = file_get_contents('books.json');
$books = json_decode($json, true);
$index = $_GET['index'];
$book = $books[$index];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="edition.php" method="post">
        <input type="hidden" name="index" value="<?php echo $index ?>">
        <label for="title">Title : </label>
        <input type="text" name="title" value="<?php echo $book['title']?>" placeholder="Type Title"required>
        <br>
        <label for="author">Author : </label>
        <input type="text" name="authorName" value="<?php echo $book['author']?>" placeholder="Type Author name" required>
        <br>
        <label for="available">Available : </label>
        <input type="text" name="available" value="<?php echo $book['available']?>" placeholder="Type true/falsse"required>
        <br>
        <label for="pages">Pages : </label>
        <input type="text" name="pages" value="<?php echo $book['pages']?>" placeholder="Type page number" required>
        <br>
        <label for="isbn">ISBN : </label>
        <input type="text" name="isbn" value="<?php echo $book['isbn']?>" placeholder="Type ISBN" required>
        <br>
        <input type="submit" value="Submit">
        <br>

    </form>

</body>
</html>