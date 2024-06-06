<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
    <section class="hero">
            <div class="HeroContainer">
                <h1>Your Mental Well-being Matters</h1>
                <p>Find support, guidance, and resources on your journey to mental wellness.</p>
                <a href="service.php" class="btn">Request for Services</a> 
            </div>
        </section>

        <section class="key-topics">
    <div class="container">
        <h2>Key Topics</h2>
        <div class="topic-grid"> 
            <div class="topic">
                <h3>Anxiety</h3>
                <p>Understanding and managing anxiety disorders.</p>
            </div>
            <div class="topic">
                <h3>Depression</h3>
                <p>Coping strategies and treatment options for depression.</p>
            </div>
            <div class="topic">
                <h3>Stress</h3>
                <p>Techniques for reducing stress and building resilience.</p>
            </div>
            <div class="topic">  <h3>PTSD (Post-Traumatic Stress Disorder)</h3>
                <p>Information on PTSD symptoms, causes, and treatment.</p>
            </div>
            <div class="topic">  <h3>Self-Esteem</h3>
                <p>Building self-esteem and self-worth.</p>
            </div>
            <div class="topic">  <h3>Relationships</h3>
                <p>Maintaining healthy relationships and communication.</p>
            </div>
        </div>
    </div>
</section>



   
        <section class="faq" style="background-color: #f5f5f5; padding: 40px;  border-radius: 10px;">
    <div class="container" style="width: 90%; max-width: 1200px; margin: 0 auto;">
        <h2 style="text-align: center; margin-bottom: 30px;">Mental Health FAQs</h2>

        <div class="faq-item" style="margin-bottom: 20px;">
            <h3 style="margin-bottom: 10px; font-size: 1.2rem;">What is Mental Health?</h3>
            <p style="line-height: 1.6;">Mental health refers to our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make choices.</p>
        </div>

        <div class="faq-item" style="margin-bottom: 20px;">
            <h3 style="margin-bottom: 10px; font-size: 1.2rem;">Common Mental Health Issues</h3>
            <p style="line-height: 1.6;">
                Some common mental health disorders include:
                <ul style="list-style: disc; padding-left: 20px;">
                    <li>Anxiety disorders (e.g., generalized anxiety, social anxiety, panic disorder)</li>
                    <li>Mood disorders (e.g., depression, bipolar disorder)</li>
                    <li>Trauma-related disorders (e.g., post-traumatic stress disorder)</li>
                    <li>Eating disorders (e.g., anorexia nervosa, bulimia nervosa)</li>
                    <li>Attention deficit hyperactivity disorder (ADHD)</li>
                </ul>
            </p>
        </div>

        <div class="faq-item">
            <h3 style="margin-bottom: 10px; font-size: 1.2rem;">Signs and Symptoms</h3>
            <p style="line-height: 1.6;">
                Mental health conditions often have a variety of signs and symptoms. Some common ones include:
                <ul style="list-style: disc; padding-left: 20px;">
                    <li>Persistent sadness or feeling down</li>
                    <li>Excessive worrying or fear</li>
                    <li>Extreme mood changes</li>
                    <li>Withdrawal from friends and activities</li>
                    <li>Significant tiredness, low energy or problems sleeping</li>
                    <li>Major changes in eating habits</li>
                    <li>Difficulty concentrating</li>
                    <li>Feeling overwhelmed or unable to cope</li>
                    <li>Suicidal thinking or harming yourself</li>
                </ul>
            </p>
            <p style="line-height: 1.6;">
                If you're concerned about your mental health, it's important to talk to a doctor or mental health professional.
            </p>
        </div>
    </div>
</section>


        </main>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script> 
</body>
</html>
