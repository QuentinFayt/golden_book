<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/golden_book.css" rel="stylesheet">
    <title>Message editing</title>
</head>

<body>
    <nav>
        <ul>
            <Li><a href="index.php">Read last messages</a></Li>
            <Li><a href="form.php">Send a message</a></Li>
            <Li><a href="editing.php">Edit messages</a></Li>
        </ul>
    </nav>
    <header>
        <h1>Edit messages</h1>
    </header>
    <main>
        <table class="admin">
            <!-- Title : first row table -->
            <tr class="adminMain">
                <th>Id</th>
                <th>Pseudo</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date-Time</th>
                <th>
                    <!-- Delete with a button that will send a request like DELETE FROM `messages` WHERE id = X
                    x will be the message we want to erase-->
                </th>
            </tr>
            <!-- will get the informations from the DB by a request like SELECT * FROM `messages` ORDER BY `id` DESC that will order it from the newer to the older-->
            <!-- On va boucler sur chaque nouvelle ligne pour chaque message présent dans la base de données plutôt que d'afficher en dur X messages -->
            <!-- Content rows -->
            <tr>
                <th>1</th>
                <th>Quentin</th>
                <th>quentin.fayt.p@gmail.com</th>
                <th>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur qui consequuntur autem molestiae veritatis hic reprehenderit, dolor magnam et esse iure vel quisquam error quas eum sunt pariatur dicta assumenda?</th><!-- First message in index.php -->
                <th>2021-09-08 11:19:20</th>
                <th><button>Delete</button></th>
            </tr>
            <tr>
                <th>2</th>
                <th>Camille</th>
                <th>camille.fay@gmail.com</th>
                <th>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum itaque pariatur, est porro incidunt eligendi quo numquam expedita odio cumque beatae excepturi nesciunt voluptatibus placeat, omnis repellendus aspernatur architecto explicabo!</th> <!-- Second message in index.php -->
                <th>22021-09-08 11:32:52</th>
                <th><button>Delete</button></th>
            </tr>
        </table>
    </main>
    <footer>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M</p>
    </footer>
</body>

</html>