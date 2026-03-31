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

        <div class="row">
            <main>
                <h3>About Cave B</h3>
                <img src="images/vineyard.jpg" alt="Cave B Vineyard" class="about-image">
                <p>Cave B Estate Winery has been a cornerstone of Washington's wine country since its founding. Our estate vineyards span over 30 acres of pristine land overlooking the Columbia River Gorge, producing grapes of exceptional quality.</p>
                <p>Our winemakers combine traditional techniques with modern innovation to create wines that capture the essence of our unique terroir. From our bold Cabernet Sauvignons to our crisp Chardonnays, every bottle tells a story of dedication and passion.</p>
            </main>
            <aside>
                <h3>Our Mission</h3>
                <p>At Cave B, we believe that great wine starts in the vineyard. We are committed to sustainable farming practices and meticulous attention to detail at every stage of the winemaking process.</p>
                <p>We strive to create memorable experiences for our visitors, offering guided tours, tastings, and events that celebrate the beauty and bounty of wine country.</p>
            </aside>
        </div>

        <div class="row">
            <div class="col8">
                <div class="quarter">
                    <h4>Award 1</h4>
                    <p>Gold Medal, Washington Wine Awards 2025</p>
                </div>
                <div class="quarter">
                    <h4>Award 2</h4>
                    <p>Best Estate Winery, Pacific Northwest 2024</p>
                </div>
                <div class="quarter">
                    <h4>Award 3</h4>
                    <p>Double Gold, Seattle Wine Competition 2025</p>
                </div>
                <div class="quarter">
                    <h4>Award 4</h4>
                    <p>Best Tasting Room Experience 2024</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col8-2">
                <p>Cave B Estate Winery continues to push the boundaries of winemaking in the Pacific Northwest. Our commitment to excellence has earned us recognition from critics and wine enthusiasts around the world. Visit us today and discover what makes Cave B truly special.</p>
            </div>
            <div class="col8-2">
                <p>Plan your visit to our tasting room, open daily from 11am to 6pm. We offer a variety of tasting experiences, from casual walk-ins to private reserve tastings. Groups of six or more are encouraged to make a reservation.</p>
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
