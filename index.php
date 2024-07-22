<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="includes/icons/fruit.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Service Personnel</title>
    <link rel="stylesheet" href="build/css/demo.css">
    <link rel="stylesheet" href="build/css/intlTelInput.css">
    <link rel="stylesheet" href="assets/style.css">

    <style>
.checkbox-container {
  display: flex;
  align-items: center;
}
.checkbox-container input[type="checkbox"] {
  margin-right: 10px;  /* Adjust margin as needed */
}
</style>
</head>

<body>
    <header>
        <nav class="navbar">

            <a href="#" class="logo"><img src="includes/icons/fruit.png" alt="">PhilTech</a>
            <button class="menu-toggle" aria-label="Toggle menu">
                <span class="menu-icon"></span>
            </button>
            <ul class="nav-links">
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#" class="cta">Let's Work Together</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="job-posting">
            <h1>National Service Personnel (Junior Software Developer)</h1>
            <p style="color: rgb(181, 171, 182)">Posted by PhilTech / 9, July 2024</p>
            <h2>About PhilTech</h2>
            <p>PhilTech is a dynamic start-up that aims to revolutionize the global job market. We connect talented IT
                professionals with companies in need of their skills, offering a unique opportunity for individuals to
                establish themselves in the modern working world. At PhilTech, we strive for excellence and surround
                ourselves only with the best.</p>
            <h2>Job Description</h2>
            <p>We are seeking motivated and talented National Service Personnel to join our Developers Team. This is a
                fantastic opportunity to gain hands-on experience in a fast-paced, innovative environment. You will work
                closely with our experienced software developers and contribute to real projects that impact our clients
                globally. </p>

            <h2>Dynamic Roles & Responsibilities </h2>
            <ul class="bulleted">
                <li>Work on real-world projects under the guidance of experienced professionals.</li>
                <li>Assist in developing, testing, and deploying software applications.</li>
                <li>Collaborate with the tech team to troubleshoot and resolve technical issues.</li>
                <li>Participate in code reviews and provide constructive feedback.</li>
                <li>Research and implement new technologies to improve our products and services.</li>
                <li>Maintain accurate documentation of software development processes.</li>
                <li>Participate in team meetings and brainstorming sessions.</li>
                <!-- More items -->
            </ul>

            <h2>Your Toolkit</h2>
            <ul class="bulleted">
                <li>Bachelor’s degree in Computer Science, Information Technology, or a related field.</li>
                <li>Basic knowledge of programming languages such as Python, JavaScript, or C#. </li>
                <li>Familiarity with web development frameworks (e.g., React, Angular) and databases (e.g., MySQL,
                    MongoDB).</li>
                <li>Strong problem-solving skills and a keen eye for detail.</li>
                <li>Excellent communication and teamwork abilities. </li>
                <li>Eagerness to learn and adapt in a dynamic startup environment.</li>
                <li>Ability to show demonstrative skills</li>
                <!-- More items -->
            </ul>

            <h2>Our Commitment to You:</h2>
            <ul class="bulleted">
            <li>Training and skill development is an integral part to support continuous learning.</li>
            <li>Wellbeing budget for physical and mental health support.</li>
            <li>Comprehensive medical insurance for accessible healthcare. </li>
            <li>99% remote work model. </li>
            <li>Amazing work culture encouraging personal and professional growth.</li>
                <!-- More items -->
            </ul>

            <p>Are you ready to make a difference in the startup scene? Perfect! 
                We’re searching for someone with your passion and drive. 
                Let’s get to know each other and see how you can fit into the Remotown family. 
                Drop us your application—let’s start this adventure together! </p>
        </section>

        <aside class="application-form">
            <h2>Apply for this position</h2>
            <form action="#" id="form" method="POST">
                <div class="input-control">
                    <label for="first-name">First Name<span>*</span></label>
                    <input type="text" id="first-name" name="first-name">
                    <div class="error"></div>
                </div>


                <div class="input-control">
                    <label for="last-name">Last Name<span>*</span></label>
                    <input type="text" id="last-name" name="last-name">
                    <div class="error"></div>
                </div>

                <div class="input-control">
                    <label for="email">Email<span>*</span></label>
                    <input type="email" id="email" name="email">
                    <div class="error"></div>
                </div>

                <div class="input-control">
                    <label for="whatsapp">What's your Whatsapp Number?<span>*</span></label>
                    <input type="tel" id="phone" name="phone">
                    <div class="error"></div>
                </div>

                <div class="input-control">
                    <label for="experience">How many years of experience do you have in the position applied?
                        <span>*</span></label>
                    <input type="number" id="experience" name="experience">
                    <div class="error"></div>
                </div>

                <div class="input-control">
                    <label for="seniority"> What is your seniority level?<span>*</span></label>
                    <select id="seniority" name="seniority">
                        <option value="junior">Junior</option>
                        <option value="senior">Senior</option>
                        <option value="lead">Lead</option>
                        <!-- More options -->
                    </select>
                    <div class="error"></div>
                </div>


                <div class="input-control">
                    <label for="tech-skill">Let us know your strongest tech skill. (only name one)<span>*</span></label>
                    <select id="tech-skill" name="tech-skill">
                        <option value="react">React</option>
                        <option value="vuejs">Vue.js</option>
                        <option value="angular">Angular</option>
                        <option value="laravel">Laravel</option>
                        <option value="django">Django</option>
                        <option value="java">Java</option>
                        <option value="nodejs">Node.js</option>
                        <option value="aspnet">ASP.NET</option>

                        <!-- More options -->
                    </select>
                    <div class="error"></div>
                </div>

                <label for="portfolio">Do you have a portfolio site like Github or Behance etc?</label>
                <input type="url" id="portfolio" name="portfolio">

                <div class="input-control">
                    <label for="cv">Upload Your CV / Resume here<span>*</span></label>
                    <input type="file" for="cv" class="filll" id="cv" name="cv" accept=".pdf, .doc, .docx">
                    <small>Maximum allowed file size is 5 MB.</small>
                    <small>Accept types pdf, doc, docx</small>
                    <div class="error"></div>
                </div>

                <label for="agree" class="checkbox-container">
  <input type="checkbox" id="agree" name="agree">
  <span>I agree to the terms and conditions</span>
</label>

                <button type="submit" name="save">Submit</button>
            </form>
        </aside>
    </main>

    <footer>
        <div class="footer-content">
            <div class="contact-info">
                <p>Address: Wenniba, North Campus, Gusss Hall 3.</p>
                <p>Mobile: +233553497824</p>
            </div>
            <div class="links">
                <p>Important Links</p>
                <a href="#">FAQ</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; PhilTech - 2023</p>
        </div>
    </footer>
   
    <script src="build/js/intlTelInput.js"></script>
    <script src="assets/func.js"></script>
    <script src="assets/formValidation.js"></script>
    
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input,{});
    </script>

</body>

</html>
