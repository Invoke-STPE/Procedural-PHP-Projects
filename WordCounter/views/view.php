<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Word Counter</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                height: 100vh;
                justify-content: center;
            }

            form {
                max-width: 65ch;
            }

            .center {
                margin-inline: auto;
            }
        </style>
    </head>
    <body>
        <div class="center">
            <h1>Word Counter</h1>
            <form class="center" action="index.php" method="post">
                <input type="text" name="word" />
                <button type="submit">Count sentence</button>
            </form>
        </div>
    </body>
</html>
