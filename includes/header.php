<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro Web Development</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    nav ul {
        list-style: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 10px;
    }

    a {
        text-decoration: none;
        color: blue;
    }

    a:hover {
        text-decoration: underline;
    }

    article {
        margin-bottom: 20px;
    }
</style>
</head>
<body>

   <header> 
       <h1>My Blog </h1>
     </header>
   
       <nav>
         <ul>
            <!-- Need to use /~darjim10/ because of Elvis user dirtories -->
          <li><a href="/~darjim10/">Home</a></li>

        <?php if (Auth::isLoggedIn()): ?>
        <!-- Need to use /~darjim10/ because of Elvis user dirtories -->
        <li><a href="/~darjim10/admin/">Admin</a></li>
       <!-- Need to use /~darjim10/ because of Elvis user dirtories -->
        <li><a href="/~darjim10/logout.php">Log Out</a></li>

        <?php else: ?>
         <!-- Need to use /~darjim10/ because of Elvis user dirtories -->
          <li><a href="/~darjim10/login.php">Log In</a></li> 

        <?php endif; ?>

        </ul>
      </nav>
<main>
