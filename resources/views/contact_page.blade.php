<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('portfolio.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="contact">
        <div class="about-info">
            <div class="container">
            <div style="color: white; cursor: pointer;" class="about">Contact</div>
        </div>
        <div class="contact-row">
            <div class="contact-left-col">
                <img src="https://pbs.twimg.com/media/D1opvJsXQAEFJo_.jpg:large" alt="">
            </div>
            <div class="contact-right-col">
                <form>
                    <h2 style="cursor: pointer;">Contact me</h2>
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="E-mail"><br>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea><br>
                    <button class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <footer id="footer">
    <div class="social">
        <ul>
        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    </footer>

    <script src="portfolio.js"></script>
</body>
</html>