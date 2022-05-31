<html lang="en">
<!--
    This is the head of the HTML document. It is linking to the Bootstrap CSS file and setting the 
    title of the page. 
-->

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Search</title>
</head>

<body>
    <div class="text-center">
        <!-- Print a line of message that says "Search demo for English words". -->
        <h2>Search demo for English words</h2>
        <!-- Displaying the image of Bears searching. -->
        <img alt="Bears searching" class="img-fluid w-25" src="https://64.media.tumblr.com/9ffec1adab1c3844181eb087a51c8201/tumblr_o631994HlL1vnqmpbo1_500.gifv">

        <!-- This is the form that the user will use to search for a query. -->
        <form action="" class="mt-4" method="get">
            <input autocomplete="off" autofocus class="form-control form-control-lg mb-4 mx-auto w-50" name="word" placeholder="Word" type="search">
            <button class="btn btn-light" type="submit">Search</button>
        </form>

    </div>

    <?php
    // Including the RHCajipe_search.inc file. 
    // `RHCajipe_search.inc` contains the code that checks whether the word is in the file `words.txt`.

    // This line makes the code in this file reusable, clean, and easy to read.
    include("/var/task/user/api/RHCajipe_search.php");

    ?>
</body>

</html>