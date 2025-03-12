<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Messages</title>
    </head>
    <body>
        <table>
            <tr>
                <th>E-mail</th>
                <th>Name</th>
                <th>Message</th>
            </tr>
            <?php foreach ($messages as $message): ?>
            <tr>
                <td><?= $message['email'] ?> </td>
                <td><?= $message['name'] ?> </td>
                <td><?= $message['message'] ?> </td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>
