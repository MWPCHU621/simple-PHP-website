<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php include 'functions.php'; ?>
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

        <div id="getAPICall">
            
            <?php foreach($dataset as $post) { ?>
                <div>
                    <p> <?php echo $post -> title ?> </p>
                    <p> <?php echo $post -> body ?> </p>
                </div>
            <?php } ?>
        </div>

        <div id="postAPICall">
            <?php 
            
            $data = array(
                "id" => 2000,
                "title" => "test POST API Call",
                "body" => "This tests to see if the POST function works.",
                "userId" => 500
            );
            $dataStr = json_encode($data);

            $post = postAPICall("https://jsonplaceholder.typicode.com/posts/", $dataStr);
            $response = json_decode($post, true);

            ?>

            <?php print_r($response);?>

        </div>
        
        <footer>
        </footer>
    </body>
</html>