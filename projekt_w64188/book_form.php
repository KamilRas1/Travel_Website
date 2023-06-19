<?php
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    if (!$connection) {
        die("Nie udało się połączyć z bazą danych: " . mysqli_connect_error());
    }

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $adres = $_POST['adres'];
        $lokalizacja = $_POST['lokalizacja'];
        $osoby = $_POST['osoby'];
        $przylot = $_POST['przylot'];
        $wylot = $_POST['wylot'];

        $stmt = $connection->prepare("INSERT INTO book_form (name, email, telefon, adres, lokalizacja, osoby, przylot, wylot) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $name, $email, $telefon, $adres, $lokalizacja, $osoby, $przylot, $wylot);

        if ($stmt->execute()) {
            header('Location: book.php');
            exit();
        } else {
            echo "Błąd: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo 'Coś poszło nie tak, spróbuj ponownie';
    }

    mysqli_close($connection);
?>
