<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    .message {
        text-align: center;
        font-size: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<?php
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $leader = $_POST['leader'];
    $improvements = $_POST['improvements'];

    $email = htmlspecialchars($email);
    $name = htmlspecialchars($name);
    $class = htmlspecialchars($class);
    $subject = htmlspecialchars($subject);
    $leader = htmlspecialchars($leader);
    $improvements = htmlspecialchars($improvements);

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the email already exists in the database
        $check_query = $conn->prepare("SELECT * FROM responses WHERE email = :email");
        $check_query->bindParam(':email', $email);
        $check_query->execute();
        $count = $check_query->rowCount();

        if ($count > 0) {
            echo "Սխալ: Էլ. հասցեն արդեն գրանցված է։";
        } else {
            $sql = "INSERT INTO responses (email, name, class, subject, leader, improvements) 
                    VALUES (:email, :name, :class, :subject, :leader, :improvements)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':class', $class);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':leader', $leader);
            $stmt->bindParam(':improvements', $improvements);

            if ($stmt->execute()) {
                echo "<div class="">Հարցումը հաջողությամբ ուղարկվեց!</div>";
            } else {
                echo "Սխալ: " . $sql . "<br>" . $conn->errorInfo()[2];
            }
        }
    } catch(PDOException $e) {
        echo "Միացումը չստացվեց․․․: " . $e->getMessage();
    }

    $conn = null;
}
?>
