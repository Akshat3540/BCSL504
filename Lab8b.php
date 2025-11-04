<!-- b. Develop a PHP program (with HTML/CSS) to sort the student records which are stored in the database using selection sort. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record Sorter</title>
    <style>
        .container {max-width: 800px; margin: auto; padding: 20px; box-shadow: 0 0 10px;}
        table {width: 100%; border-collapse: collapse; text-align: center;}
        th, td {padding: 10px; border: 1px solid #ddd;}
        th {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <div class="container">
        <center><h1>Student Records</h1></center>
        <?php 
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=student_records", 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $pdo->query("SELECT * FROM students");
                $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

                usort($students, fn($a, $b) => $a['gpa'] <=> $b['gpa']);

                echo "<table>";
                echo "<tr><th>ID</th><th>Name</th><th>GPA</th></tr>";
                foreach ($students as $student) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($student['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($student['gpa']) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";

            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        ?>
    </div>
</body>
</html>
