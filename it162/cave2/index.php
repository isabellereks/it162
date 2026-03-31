<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Home page of our Wine Website';
        $body = 'home';
        break;
    case 'about.php' :
        $title = 'About Cave B Estate Winery';
        $body = 'about';
        break;
    case 'wines.php' :
        $title = 'Our Wines';
        $body = 'wines';
        break;
    case 'contact.php' :
        $title = 'Contact Us';
        $body = 'contact';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Cave B Estate Winery</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>">

    <?php include 'includes/header.php'; ?>

    <div id="wrapper">

        <?php include 'includes/nav.php'; ?>

        <?php include 'includes/hero.php'; ?>

        <div class="row">
            <main>
                <h3>Our Story</h3>
                <p>Nestled in the heart of Washington's wine country, Cave B Estate Winery offers an unforgettable experience combining world-class wines with breathtaking views of the Columbia River Gorge. Our estate vineyards produce exceptional wines that reflect the unique terroir of our region.</p>
                <p>Founded with a passion for winemaking and a deep respect for the land, we invite you to discover the art behind every bottle we craft.</p>
            </main>
            <aside>
                <h3>Visit Us</h3>
                <p>Open daily for tastings and tours. Our knowledgeable staff will guide you through our award-winning collection of reds, whites, and specialty wines.</p>
                <p>Located just minutes from the Gorge Amphitheatre, Cave B is the perfect destination for wine lovers and adventure seekers alike.</p>
            </aside>
        </div>

        <div class="row thirds-row">
            <div class="third">
                <h3>Headline Three</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a href="#">Read more...</a>
            </div>
            <div class="third">
                <h3>Headline Three</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                <a href="#">Read more...</a>
            </div>
            <div class="third">
                <h3>Headline Three</h3>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                <a href="#">Read more...</a>
            </div>
        </div>

    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
        (function() {
            var toggle = document.querySelector('.mobile-toggle');
            var nav = document.querySelector('nav ul');
            if (toggle) {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    nav.classList.toggle('active');
                });
            }
        })();
    </script>

</body>
</html>
