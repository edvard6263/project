<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Հետազոտական աշխատանք հարցում</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to bottom,white,rgb(239, 227, 176),rgb(239, 227, 176),rgb(239, 227, 176),rgb(239, 227, 176),white);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    
}

.form-container {
    background: silver;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    opacity: 1;
    transition: opacity 0.5s ease-out;
}


h2 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
}

input, select {
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    margin-top: 15px;
    padding: 10px;  
    background: #00820b;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}
button:nth-of-type(2) {
    margin-top: 15px;
    padding: 10px;  
    background: silver;
    color: silver;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background: #22dc01;
}
button:nth-of-type(2):hover {
    background: silver;

}



textarea::-webkit-resizer {
  display: none; /* Скрываем оригинальный значок */
}
input::placeholder {
    color: red;
}

@media only screen and (max-width: 600px) {
    .form-container {
        width: 80%;
        margin: 0 auto;
    }

    input, select {
        width: 90%;
    }

    button {
        width: 95%;
    }
}
    </style>
    <div class="form-container">
        <h2>Հարցում</h2>
        <form action="submit.php" method="post">
            <label>Էլ․ հասցե:</label>
            <input placeholder="*" type="email" name="email" required>

            <label>Անուն, ազգանուն:</label>
            <input placeholder="*" type="text" name="name" required>

            <label>Դասարան:</label>
            <input placeholder="*" type="text" name="class" required>

            <label>Ձեր հետազոտական աշխատանքի թեման։</label>
            <input placeholder="*" type="text" name="subject" required>
            
            <label>Ո՞վ է ձեր հետազոտական աշխատանքի ղեկավարը։</label>
            <input placeholder="*" type="text" name="leader" required>

           
            <label>Ե՞րբ եք ուզում հանձնել հետազոտական աշխատանքը։ Մանրամասներ։</label>
            <input placeholder="*" class="area" name="improvements"></input>

            <button type="submit">Ուղարկել</button>
            <button onclick="window.location.href='logins.php';">Տեսնել արդյունքները</button>
        </form>
    </div>
    <style>
        <?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Հետազոտական աշխատանք հարցում</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, white, rgb(239, 227, 176), rgb(239, 227, 176), rgb(239, 227, 176), rgb(239, 227, 176), white);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: silver;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            opacity: 1;
            transition: opacity 0.5s ease-out;
        }

        h2 {
            text-align: center;
            font-size: 36px;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;  
            }
        }

    </style>
</body>
</html>
