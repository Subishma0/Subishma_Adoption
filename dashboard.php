<style>
    @import url('dog.jpg');
:root {
     --primary-color:#f2726a;
     --white-color: #fff;
}
* {
     padding: 0;
     margin: 0;
     box-sizing: border-box;
}
body {
    height: 100vh;
    background:linear-gradient(45deg, #00853e, #50c878);
    display: flex;
    align-items: center;
    justify-content: center;    
    font-family: "Poppins";
}
.card {
    height: 400px;
    width: 300px;
    border-radius: 15px;
    background-color:  #242628;
    text-align: center;
    overflow: hidden;
}

.card__img {
    height: 116px;
    width: 116px;
    border-radius: 50%;
    background-color: white;
    margin: 0 auto 15px;
    border: 4px solid var(--primary-color);
    overflow: hidden;
    transition: 0.4s;
    transform: translateY(25px);
}

.card__img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position:70% 0%;
}
.card__img:hover {
    width: 100%;
    height: 100%;
    border: none;
    transform: unset;
    border-radius: unset;
}

.card__name {
    font-weight: 600;
    color: var(--white-color);
    margin-top: 45px;
}

.card__job {
    color: var(--primary-color);
}
.card__link {
    margin: 20px;
}

.card__link a{
    color: var(--white-color);
    text-decoration: none;
    font-size: 1.5rem;
    margin: 25px 16px;
}
.card__link i {
    transition: 0.3s;
}

.card__link i:hover {
    color: var(--primary-color);
}

.card__btn-contact {
    margin: 18px;
    background-color: transparent;
    color: var(--white-color);
    padding: 12px 23px;
    border: 1px solid  var(--primary-color);
    font-size: 0.9rem;
    border-radius: 10px;
    transition: 0.3s;
    cursor: pointer;
}

.card__btn-contact:hover {
    background-color: var(--primary-color);
    
}
    </style>
<?php include("database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>OUR BREEDS</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="card">
        <div class="card__img">
            <img src="dog.jpg" alt="nhan">
        </div>
        <div class="card__name">
            <h2>User Name</h2>
        </div>
        <div class="card__job">
            <span><b>Subishma Khadka</b></span>
        </div>
        <div class="card__link">
            <a href="#"><img src="facebook.png"/></a>
               
            </a>
            <a href="#"><img src="Twitter.png"/></a>
               
            </a>
            <a href="#">
                <i class='bx bxl-tiktok' ></i>
            </a>
            <a href="#">
                <i class='bx bxl-github' ></i>
            </a>
        </div>
        <div class="card__btn">
            <button class="card__btn-contact">Contact me</button>
        </div>
    </div>
</body>
<script src="./assets/js/html.js"></script>
</html>
</body>