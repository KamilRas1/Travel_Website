<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O nas</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    


<section class="header">
    <a href="home.php" class="logo">Tanie Podróżowanie</a>

    <nav class="navbar">
            <a href="home.php">Strona główna</a>
            <a href="about.php">O nas</a>
            <a href="package.php">Pakiet</a>
            <a href="book.php">Zarezerwuj</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
    

</section>


<div class="heading" style="background:url(zdjecia/header-bg-3.jpg) no-repeat">
    <h1>Zarezerwuj</h1>
</div>

<section class="booking">

    <h1 class="heading-title">Zarezerwuj podróż!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Dane :</span>
                <input type="text" placeholder="Podaj swoję imie i nazwisko" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="Podaj email" name="email">
            </div>
            <div class="inputBox">
                <span>Numer telefonu :</span>
                <input type="number" placeholder="Podaj swój numer " name="telefon">
            </div>
            <div class="inputBox">
                <span>Adres :</span>
                <input type="text" placeholder="Wprowadź adres" name="adres">
            </div> 
            <div class="inputBox">
                <span>Dokąd</span>
                <input type="text" placeholder="Dokąd chcesz jechać?" name="lokalizacja">
            </div> 
            <div class="inputBox">
                <span>Ile osób :</span>
                <input type="number" placeholder="Ilość osób" name="osoby">
            </div>
            <div class="inputBox">
                <span>przylot :</span>
                <input type="date" name="przylot">
            </div>
            <div class="inputBox">
                <span>Wylot :</span>
                <input type="date" name="wylot">
            </div>
        </div>
       <input type="submit" value="wyślij" class="btn" name="send">
</form>

</section>











<section class="footer"> 

    <div class="box-container">


        <div class="box">
            <h3>Przejdź do</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Strona główna</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> O nas</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> Pakiet</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> Zarezerwuj</a>
        </div>

        <div class="box">
            <h3>Dodatkowo</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> Zadaj pytanie</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Więcej o nas</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Polityka prywatności</a>
            <a href="#"> <i class="fas fa-angle-right"></i> Regulamin</a>
        </div>

        <div class="box">
            <h3>Kontakt</h3>
            <a href="#"> <i class="fas fa-phone"></i> +48 111 222 333</a>
            <a href="#"> <i class="fas fa-phone"></i> +48 111 333 444</a>
            <a href="#"> <i class="fas fa-envelope"></i> kontakt@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i>  Rzeszów</a>
        </div>


        <div class="box">
            <h3>Śledź nas</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
        </div>

    </div>


    <div class="credit"> Wykonał <span> Kamil Raś w64188</span> </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>
</body>
</html>