<?php
include 'db.php';

if(isset($_GET['id'])) {
    $email = $_GET['id'];

    // Delete the record with the specified email from the database
    $sql = "DELETE FROM responses WHERE email = '$email'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    header('Location: logins.php'); // Redirect back to the logins.php page
}

// Fetch login records from the database
$sql = "SELECT email, name, class, subject, leader, improvements FROM responses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Login Records</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Էլ․ հասցե</th><th>Անուն, Ազգանուն</th><th>Դասարան</th><th>Առարկա</th><th>Ղեկավար</th><th>Ժամկետ</th><th>Ջնջել</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["email"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["class"] . "</td>
                <td>" . $row["subject"] . "</td>
                <td>" . $row["leader"] . "</td>
                <td>" . $row["improvements"] . "</td>
                <td><a href='logins.php?id=" . $row["email"] . "' style='color:red;'>❌</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>

<style>

body{
    width: 99%;
    height: 97vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    
    background: linear-gradient(to bottom,white,rgb(231, 226, 202),rgb(235, 226, 187),rgb(228, 220, 186),rgb(223, 217, 192),white);
}


h2 {
    color: #333;
    font-size: 24px;
    text-align: center;
    position: relative;
    opacity: 0;
    animation: popUp 0.5s forwards;
  }

  @keyframes popUp{
    0% {
      transform: scale(0.5);
      opacity: 0;
    }
    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            padding: 7px;
            background-color:rgb(204, 189, 161);
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            border-bottom: 2px solid #ddd;
        }

        tr {
            background-color: #f9f9f9;
        }

        /* Hover effect for rows */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Alternating row colors */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        /* Adding border to the table */
        table, th {
            border: 1px solid #ddd;
        }
</style>



