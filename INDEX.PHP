<!DOCTYPE html>
<html>

<head>
    <title>CONTACT US!</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>CONTACT US</h2>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form id="contact-form" method="post" action="contact.php" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">First name <span class="blue">*</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Your first name." value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Last name <span class="blue">*</span></label>
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Your last name." value="">
                            <p class="comments"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">E-mail <span class="blue">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Your E-mail." value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone number <span class="blue">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Your number." value="">
                            <p class="comments"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="message">Message <span class="blue">*</span></label>
                            <textarea name="message" id="message" class="form-control" placeholder="Your message." rows="4"></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <p class="blue">*These informations are requested*</p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="butten" value="Send">
                        </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>