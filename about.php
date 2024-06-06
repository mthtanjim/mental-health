<!DOCTYPE html>
<html>
<head>
    <title>About Us - Mental Health Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="container" style="width: 90%; max-width: 1200px; margin: 0 auto; padding: 20px;"> 
            <h1 style="text-align: center; margin-bottom: 30px;">About Us</h1>
            <section class="intro" style="background-color: #f5f5f5; padding: 30px; border-radius: 10px; margin-bottom: 40px; text-align: center;">
                <h1 style="font-size: 2.5rem; margin-bottom: 10px;">Your Path to Mental Wellness Starts Here</h1>
                <p style="line-height: 1.6;">Discover a supportive community, expert guidance, and the tools you need to thrive.</p>
            </section>

            <section class="about-section" style="display: flex; flex-wrap: wrap; gap: 20px;">
                <div class="content" style="flex: 2; padding-right: 20px;">
             
                    <h2 style="margin-top: 30px; margin-bottom: 15px;">Our Approach</h2>
                    <p style="line-height: 1.6;">
                        We believe in a holistic approach to mental well-being, focusing on providing accurate information, fostering connection, and promoting evidence-based practices. We strive to create a safe and inclusive environment where everyone feels heard and supported.
                    </p>
                </div>
                <div class="image" style="flex: 1;">
                    <!-- <img src="images/team-photo.jpg" alt="Our Team" style="width: 100%; height: auto; border-radius: 5px;">  -->
                </div>
            </section>
            <section class="about-section">
                <div class="content" style="flex: 2; padding-right: 20px;">
                    <h2 style="margin-bottom: 15px;">Our Mission</h2>
                    <p style="line-height: 1.6;">we are dedicated to promoting mental well-being and providing a safe, supportive space for individuals seeking information and resources. Our mission is to empower people to take charge of their mental health and create positive change in their lives.</p>

                    <h2 style="margin-top: 30px; margin-bottom: 15px;">Our Team</h2>
                    <p style="line-height: 1.6;">We have a team of experienced and compassionate mental health professionals who are committed to helping you on your journey to healing and growth.</p>
                </div>
                <div class="image" style="flex: 1;">
                    <!-- <img src="images/team-photo.jpg" alt="Our Team" style="width: 100%; height: auto; border-radius: 5px;">  -->
                </div>
            </section>

            <section class="values-section" style="margin-top: 40px;">
                <h2 style="text-align: center; margin-bottom: 20px;">Our Values</h2>
                <div class="value-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                    <div class="value" style="border: 1px solid #ddd; padding: 20px;">
                        <h3>Compassion</h3>
                        <p style="line-height: 1.6;">We approach every individual with empathy and understanding, recognizing the unique challenges they face.</p>
                    </div>
                    <div class="value" style="border: 1px solid #ddd; padding: 20px;">
                        <h3>Expertise</h3>
                        <p style="line-height: 1.6;">Our team is comprised of qualified professionals with the knowledge and skills to provide effective support.</p>
                    </div>
                    <div class="value" style="border: 1px solid #ddd; padding: 20px;">
                        <h3>Empowerment</h3>
                        <p style="line-height: 1.6;">We believe in empowering individuals to take control of their mental health and make informed decisions.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
