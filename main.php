<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php include 'test.php'; ?>
    </head>
    <body>

        <?php $dataset = getAPICall("https://jsonplaceholder.typicode.com/posts/") ?>

        <header>
            <nav id="navigation">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                </ul>
            </nav>
        </header>

        <div id="contents">
            <?php foreach($dataset as $post) { ?>
                <div>
                    <p> <?php echo $post -> title ?> </p>
                    <p> <?php echo $post -> body ?> </p>
                </div>
            <?php } ?>
        </div>
        
        <footer>
        </footer>
    </body>
</html>




