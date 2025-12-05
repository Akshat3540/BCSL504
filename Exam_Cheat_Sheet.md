# Exam Cheat Sheet: BCSL504

## 1. The Universal HTML Skeleton (Memorize ONE, use for ALL)
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exam Program</title>
    <!-- CSS GOES HERE -->
    <style>
        body { font-family: Arial; padding: 20px; text-align: center; }
        .container { border: 1px solid #ccc; padding: 20px; box-shadow: 0 0 10px #ddd; max-width: 600px; margin: auto; }
        input, button { padding: 10px; margin: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <!-- YOUR PROGRAM CONTENT HERE -->
    </div>
</body>
</html>
```

---

## 2. Program-Specific Cheat Codes

### Lab 01: HTML Tags
*   **Tags**: `<marquee>`, `<h1>`, `<p>`, `<b>`, `<i>`, `<hr>`, `<br>`
*   **Keys**: Just list them out. Don't overthink it.

### Lab 02: Time Table
*   **Tags**: `<table>`, `<tr>` (row), `<th>` (header), `<td>` (cell)
*   **Attributes**: `border="1"`, `rowspan="2"` (vertical merge), `colspan="3"` (horizontal merge).
*   **Logic**: Draw the table on paper first!

### Lab 03: Text Styles (The "3-3-3" Rule)
*   **The 9 Selectors**:
    1.  **3 Basics**: `h2` (Tag), `.class`, `#id`
    2.  **3 Relations**: `div p` (Descendant), `div > span` (Child), `h2 + p` (Next Door)
    3.  **3 Specials**: `:hover` (Action), `[attr]` (Attribute), `::first-letter` (Part)
*   **The "Combo" HTML (Memorize this)**:
    ```html
    <div id="main-content">
        <h3>Hover Me</h3>
        <h2 class="highlight">Title</h2>
        <p lang="en">Text</p>
        <hr> <!-- Line -->
        <time datetime="2025">Time: 2025</time> | <a href="#">Link</a>
        <br><img src="image1.png" alt="img" width="50">
        <article class="special"><p>Special Indent</p></article>
        <div><span>Child Span</span></div>
    </div>
    ```

### Lab 04: Registration Form
*   **Tags**: `<form>`, `<input>`, `<select>`, `<textarea>`
*   **Types**: `text`, `password`, `radio` (name="same"), `checkbox`, `date`, `submit`.

### Lab 05: Valid Semantic HTML
*   **Tags**: `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>`, `<figure>`
*   **Layout**: Set `main { display: flex; }` to put article and aside next to each other.

### Lab 06: Calculator
*   **UI**: Grid of buttons.
*   **JS Logic (Easy Way)**: 
    ```javascript
    let screen = document.getElementById('display');
    // For buttons: onclick="screen.value += '1'"
    // For equals: onclick="screen.value = eval(screen.value)"
    ```

### Lab 07: JSON & CSV
*   **JS Logic**:
    *   `JSON.parse(str)` -> String to Object
    *   `JSON.stringify(obj)` -> Object to String
    *   `str.split(',')` -> CSV to Array

### Lab 08a: Visitor Counter (PHP)
*   **File I/O**:
    ```php
    $count = (int)file_get_contents('count.txt');
    $count++;
    file_put_contents('count.txt', $count);
    echo $count;
    ```

### Lab 08b: Student Sort (PHP & SQL)
*   **Conn**: `$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");`
*   **Fetch**: `$rows = $pdo->query("SELECT * FROM students")->fetchAll();`
*   **Sort**:
    ```php
    // Selection Sort
    for($i=0; $i<count($rows); $i++) {
        for($j=$i+1; $j<count($rows); $j++) {
            if($rows[$j]['gpa'] > $rows[$i]['gpa']) {
                 // Swap
                 $temp = $rows[$i]; $rows[$i] = $rows[$j]; $rows[$j] = $temp;
            }
        }
    }
    ```

### Lab 09: jQuery Animation
*   **Setup**: `<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>`
*   **Code**:
    ```javascript
    $('#btn').click(() => {
        $('#box').append('Text');
        $('#box').animate({ width: '200px', height: '200px' });
    });
    ```

### Lab 10: AJAX (Mock)
*   **Logic**: Use `setTimeout` to fake a server delay.
    ```javascript
    function loadData() {
        setTimeout(() => {
            document.getElementById('result').innerText = "Data Loaded!";
        }, 1000);
    }
    ```
