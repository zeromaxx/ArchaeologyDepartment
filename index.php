<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Of Archaeology</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <section>
        <form action="./overview.php" method="POST">
            <h2>Καταγραφή στοιχείων ευρήματος</h2>
            <label for="category">Κατηγορία Ευρήματος</label>
            <input required type="text" name="category">
            <label for="title">Tίτλος Ευρήματος</label>
            <input required type="text" name="title">
            <label for="date">Εκτιμούμενη χρονολογία</label>
            <input required type="datetime" name="date">
            <label for="site">Αρχαιολογικός Χώρος</label>
            <input required type="text" name="site">
            <label for="description">Περιγραφή</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            <label for="height">Ύψος</label>
            <input required type="number" name="height">
            <label for="length">Μήκος</label>
            <input required type="number" name="length">
            <label for="name">Όνομα</label>
            <input required type="text" name="name">
            <label for="lastname">Επώνυμο</label>
            <input required type="text" name="lastname">
            <label for="ephorate">Αρμόδια Εφορεία Αρχαιοτήτων</label>
            <input required type="text" name="ephorate">
            <input name="submit" class="submitButton" value="Καταχώρηση" type="submit"></input>
        </form>
        <h3>AM 1084492</h3>
        <div class="overlay"></div>
    </section>


</body>

</html>
