<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Mental Health Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="container" style="width: 90%; max-width: 1200px; margin: 0 auto; padding: 40px;">
            <h1 style="text-align: center; margin-bottom: 30px;">Contact Us</h1>
            
            <section class="contact-info" style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">
                <div class="address" style="flex: 1;">
                    <h2 style="margin-bottom: 15px;">Our Location</h2>
                    <address style="line-height: 1.6;">
                        Mental Health Care<br>
                        <br>
                        23 Carolina Park Road<br>
                        Australia
                    </address>
                </div>
                <div class="contact-details" style="flex: 1;">
                    <h2 style="margin-bottom: 15px;">Get in Touch</h2>
                    <p style="line-height: 1.6;">
                        Phone: (02) 6113 1510<br>
                        Email: <a href="mailto:[Your Email Address]">mentalhealth@gamil.com</a>
                    </p>
                    <p style="line-height: 1.6;">
                        We're here to help. Feel free to reach out with any questions or concerns.
                    </p>
                </div>
            </section>

            <section class="contact-form" style="margin-top: 40px; background-color: #f5f5f5; padding: 30px; border-radius: 10px;">
                <h2 style="text-align: center; margin-bottom: 20px;">Send Us a Message</h2>
                <form id="contact-form">
                    <input type="text" id="name" name="name" placeholder="Your Name" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; box-sizing: border-box;" required><br>
                    <input type="email" id="email" name="email" placeholder="Your Email" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; box-sizing: border-box;" required><br>
                    <textarea id="message" name="message" placeholder="Your Message" rows="5" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; box-sizing: border-box;" required></textarea><br>
                    <button type="submit" style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
                </form>
            </section>

            <section class="map" style="margin-top: 40px;">
                <h2 style="text-align: center; margin-bottom: 20px;">Find Us</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965335.445392565!2d133.775136!3d-25.274398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076782c291%3A0x5382676891d44f15!2sAustralia!5e0!3m2!1sen!2sus!4v1686034554419!5m2!1sen!2sus" 
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        // JavaScript to handle form submission (similar to services.php)
    </script>
</body>
</html>
