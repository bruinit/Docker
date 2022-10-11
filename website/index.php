<!DOCTYPE html>
<html lang="en">
<head>
<title>Project 1 - Test Page</title>
<style>
    .success {
        color: green;
    }
    .error{
        color: red;
    }
    .status{
        display: inline-grid;
        grid-template-columns: auto auto;
        column-gap: 1rem;
        align-items: center;
    }
</style>
</head>
<body>
    <h1>Welcome to project 1</h1>

    <p>Here you can implement the functionality needed for project 1</p>
    <p>The table below indicates the status of the dependencies that are neede to run project 1</p>
    <h3>Status:</h3>
    <div class="status">
        <span>Apache</span><span class="success">Working &#128526</span>
        <span>PHP</span><span class="success">Working &#128526</span>
        <span>Database</span>
        <?php
            try{
                $username = "prj1_user";
                $password = "prj1_password";
                $db = new PDO("pgsql:host=db;port=5432;dbname=prj1", $username, $password);
                print('<span class="success">Working &#128526</span>');
            }catch(PDOException $e){
                print('<span class="error">Not working &#128557</span>');
                print('<span>Error message</span>');
                print('<pre class="error">' . $e->getMessage() . '</pre>');
            }
        ?>
    </div>

</body>
</html>