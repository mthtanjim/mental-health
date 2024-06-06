<!DOCTYPE html>
<html>
<head>
    <title>Our Services - Mental Health Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <style>
        /* Basic Page Styling */
        body { font-family: sans-serif; line-height: 1.6; margin: 0; }
        .container { width: 90%; max-width: 1200px; margin: 0 auto; padding: 20px; }
        h1, h2 { text-align: center; }
        .service { border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; }
        .service h3 { margin-top: 0; }

        /* Responsive Grid Layout */
        .service-grid { 
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            .service-grid { grid-template-columns: 1fr; } 
        }

        /* Form Styles */
        .service-form {
            display: none; /* Initially hide the form */
            width: 80%;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .service-form label {
            display: block;
            margin-bottom: 5px;
        }

        .service-form input[type="text"],
        .service-form input[type="email"],
        .service-form input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        .service-form button[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="container">
            <h1>Our Services</h1>


            <div class="service-grid">
                <div class="service">
                    <h3>Individual Therapy</h3>
                    <p>Personalized counseling to address specific mental health concerns.</p>
                    
                    <button class="request-service-btn">Request for Service</button>

                </div>
                <div class="service">
                    <h3>Group Therapy</h3>
                    <p>Supportive group setting to share experiences and learn coping skills.</p>

                    <button class="request-service-btn">Request for Service</button>

                </div>
                <div class="service">
                    <h3>Family Therapy</h3>
                    <p>Strengthening family relationships and communication to improve overall well-being.</p>
                    <button class="request-service-btn">Request for Service</button>
                </div>
                <div class="service">
                    <h3>Couples Counseling</h3>
                    <p>Resolving conflicts and improving intimacy in romantic relationships.</p>
                    <button class="request-service-btn">Request for Service</button>
                </div>
                <div class="service">
                    <h3>Stress Management Workshops</h3>
                    <p>Learn practical techniques to manage stress and improve mental health.</p>
                    <button class="request-service-btn">Request for Service</button>
                </div>
                <div class="service">
                    <h3>Support Groups</h3>
                    <p>Connect with others who are experiencing similar challenges.</p>
                    <button class="request-service-btn">Request for Service</button>
                </div>
            </div>

        <!-- form submit  -->
        
        <div id="request-form" style="display: none;"> 
            <h2>Request Form</h2>
            <form id="service-request-form">
                <input type="text" id="name" name="name" placeholder="Your Name" required><br>
                <input type="email" id="email" name="email" placeholder="Your Email" required><br>
                <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required><br>
                <textarea id="address" name="address" placeholder="Your Address"></textarea><br>
                <button class="formSubmitBtn" type="submit">Submit</button>
            </form>
        </div>

        <div id="confirmation-message" style="display: none;">
            <h2>Thank You!</h2>
            <p>Your data has been submitted. We will contact you soon.</p>
        </div>
        <!-- form submit  -->


        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="script.js"></script> 
</body>
</html>
