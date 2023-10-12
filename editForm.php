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
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="edition.php" method="post">
            <input type="hidden" name="index" value="<?php echo $index ?>">
            <label for="title">Title :</label>
            <input type="text" name="title" value="<?php echo $book['title'] ?>" placeholder="Type Title" required>
            <label for="author">Author :</label>
            <input type="text" name="authorName" value="<?php echo $book['author'] ?>" placeholder="Type Author name" required>
            <label for="available">Available :</label>
            <input type="text" name="available" value="<?php echo $book['available'] ?>" placeholder="Type true/false" required>
            <label for="pages">Pages :</label>
            <input type="text" name="pages" value="<?php echo $book['pages'] ?>" placeholder="Type page number" required>
            <label for="isbn">ISBN :</label>
            <input type="text" name="isbn" value="<?php echo $book['isbn'] ?>" placeholder="Type ISBN" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
