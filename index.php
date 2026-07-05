

<?php
// index.php - PHP Test File

date_default_timezone_set("Asia/Kolkata");

$message = "Welcome to PHP!";
$serverTime = date("Y-m-d H:i:s");
$phpVersion = phpversion();

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Test Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
            max-width: 700px;
            margin: auto;
        }
        h1 {
            color: #007bff;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?php echo $message; ?></h1>

	<h1>Hello Radhe Krishna...!</h1>
	<p>Good Morninig....!</p>
    <p>This page confirms that PHP is running correctly.</p>

    <table>
        <tr>
            <td><strong>Server Time</strong></td>
            <td><?php echo $serverTime; ?></td>
        </tr>
        <tr>
            <td><strong>PHP Version</strong></td>
            <td><?php echo $phpVersion; ?></td>
        </tr>
        <tr>
            <td><strong>Server Software</strong></td>
            <td><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></td>
        </tr>
        <tr>
            <td><strong>Client IP</strong></td>
            <td><?php echo $_SERVER['REMOTE_ADDR'] ?? 'Unknown'; ?></td>
        </tr>
        <tr>
            <td><strong>Request Method</strong></td>
            <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
        </tr>
    </table>

    <h2>Simple Loop Example</h2>

    <ul>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>Item $i</li>";
        }
        ?>
    </ul>

</div>

</body>
</html>