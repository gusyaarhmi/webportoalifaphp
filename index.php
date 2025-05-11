<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Portfolio</title>
</head>
<body>

    <header>
        <div class="container">
            <img src="assets/Alifa.png" alt="Profile Picture" class="logopic"> 
            <p class="teks-logo">Alifa Rahmi</p>
        </div>

             <!-- Tombol hamburger (muncul di mobile) -->
        <button class="menu-toggle" aria-label="Toggle Menu">
            &#9776; Menu <!-- Simbol hamburger -->
        </button>

        <nav class="nav-links">
            <button class="close-menu">&times;</button>
            <ul>
                <li><a href="#skills">My Skill</a></li>
                <li><a href="#my-project">My Project</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <div class="content">
            <h1>Hi, I'm Alifa.</h1>
            <p class="desc">a creative designer focusing on graphic design, UI/UX, and web development. I believe that good design can convey a message more powerfully and create a memorable experience.</p>
            <div class="button-container">
            <div class="buttons">
                <a href="#my-project" class="btn">My Project</a>
                <a href="mailto:237006014@student.unsil.ac.id"><img src="assets/email.png" alt="Email"></a>
                <a href="https://www.instagram.com/alifarhmii_?igsh=MWpjbW95eW1vNXU2MA=="><img src="assets/instagram.png" alt="Instagram"></a>
            </div>        
                 <a href="assets/CV.pdf" class="download" download>
                    <img src="assets/download.png" alt="Download CV">Download CV
                </a>
            </div>    
        </div>    
        <div class="profile">
            <img src="assets/Alifa.png" alt="Profile Picture" class="profile-pic">
        </div>
    </section>

    <section id="juduldua">
        <h2>Get to Know Me Better</h2>
        <div class="about-container">
        <div class="about-content">
            <img src="assets/Alifa.png" alt="Profile Picture">
            <div class="about-text">
                <p>
                    My name is Alifa Gustia Rahmi. I am a designer who is passionate about creating engaging and 
                    functional visuals. With experience in graphic design, UI/UX, and web development, I continue 
                    to hone my skills to deliver the best results.
                </p>
                <p>📚 Education: Master of Arts in Design, National University of Singapore (NUS)</p>
                <p>💼 Experience: 4 years as a freelance designer</p>
                <p>❤️ Interests: Digital design, photography, and technology.</p>
            </div>
        </div>
        </div>
    </section>

    <section id="skills">
        <div class="skill-container">
            <h2>My Skill</h2>
            <p>I have the skills to help you turn your ideas into reality. Here are some of my key skills:</p>
    
            <div class="skill-item">
                <div class="skill-text">🎨 Graphic Design (Adobe Illustrator, Photoshop)</div>
                <div class="progress-bar-container">
                    <div class="progress-bar"><div class="progress-bar-fill" style="width: 82%;"></div></div>
                </div>
                <div class="skill-percent">82%</div>
            </div>
    
            <div class="skill-item">
                <div class="skill-text">✏️ UI/UX Design (Figma, Adobe XD)</div>
                <div class="progress-bar-container">
                    <div class="progress-bar"><div class="progress-bar-fill" style="width: 95%;"></div></div>
                </div>
                <div class="skill-percent">95%</div>
            </div>
    
            <div class="skill-item">
                <div class="skill-text">💻 Web Development (HTML, CSS, JavaScript)</div>
                <div class="progress-bar-container">
                    <div class="progress-bar"><div class="progress-bar-fill" style="width: 80%;"></div></div>
                </div>
                <div class="skill-percent">80%</div>
            </div>
    
            <div class="skill-item">
                <div class="skill-text">✍ Content Writing</div>
                <div class="progress-bar-container">
                    <div class="progress-bar"><div class="progress-bar-fill" style="width: 80%;"></div></div>
                </div>
                <div class="skill-percent">80%</div>
            </div>
        </div>
    </section>
    

    <section id="why-hire-me">
        <h2>Why hire me?</h2>
        <div class="qualities">
            <div class="quality">
                <img src="assets/2.png" alt="Creative and Detailed">
                <p>Creative and Detailed</p>
            </div>
            <div class="quality">
                <img src="assets/5.png" alt="On time">
                <p>On time</p>
            </div>
            <div class="quality">
                <img src="assets/4.png" alt="Responsive and Communicative">
                <p>Responsive and Communicative</p>
            </div>
            <div class="quality">
                <img src="assets/3.png" alt="Results Oriented">
                <p>Results Oriented</p>
            </div>
        </div>
    </section>

    <section id="my-project">
        <h2>My Project</h2>
        <div class="project-container">
            <div class="project-card">
                <img src="assets/LadangKu.png" alt="UI/UX Mobile App LadangKu">
                <p>UI/UX Mobile App LadangKu</p>
            </div>
            <div class="project-card">
                <img src="assets/Outventure.png" alt="UI/UX Website Outventure">
                <p>UI/UX Website Outventure</p>
            </div>
            <div class="project-card">
                <img src="assets/Kenzi.png" alt="UI/UX Website Outventure">
                <p>UI/UX Website Kenzi Attire</p>
            </div>
            <div class="project-card">
                <img src="assets/Mr. CleansZ.png" alt="UI/UX Website Outventure">
                <p>UI/UX Website Mr. CleansZ</p>
            </div>
        </div>
    </section>    

    <section id="testimoni">
        <h2>Testimoni Client</h2>
        <div class="testimoni-container">
            <div class="testimoni-card">
                <img src="assets/Amel.jpg" alt="Amellia">
                <p>"“Desain yang dibuat sangat profesional dan sesuai keinginan saya. Proses pengerjaannya juga cepat!” 
                    "</p>
                <span>- Amellia</span>
            </div>
            <div class="testimoni-card">
                <img src="assets/Oci.jpg" alt="Rossi">
                <p>“Saya terkesan dengan detail dan kreativitas desainnya. Sangat direkomendasikan!” </p>
                <span>- Rossi</span>
            </div>
            <div class="testimoni-card">
                <img src="assets/Hilma.jpg" alt="Hilma">
                <p>“Proyek selesai lebih cepat dari yang saya harapkan dengan kualitas yang luar biasa.” </p>
                <span>- Hilma</span>
            </div>
            <div class="testimoni-card">
                <img src="assets/Aura.jpg" alt="Aura">
                <p>"Kolaborasi yang menyenangkan! Desainnya bagus dan fungsional. Komunikasinya pun sangat ramah!"</p>
                <span>- Aura</span>
            </div>
            <div class="testimoni-card">
                <img src="assets/Zahra.jpg" alt="Zahra">
                <p>"Sangat komunikatif dan open-minded terhadap revisi. Proses pengerjaan juga cepat tanpa mengurangi kualitas"</p>
                <span>- Zahra</span>
            </div>
            <div class="testimoni-card">
                <img src="assets/Selvi.jpg" alt="Selvi">
                <p>"Bekerja dengan Alifa adalah keputusan terbaik! Desain yang dihasilkan sangat memukau dan modern"</p>
                <span>- Selvi</span>
            </div>
        </div>
    </section>
    
    <section id="contact">
        <h2>Interested working with me?</h2>
        
        <div class="form-container">
            <form action="process.php" method="POST">
    <div class="input-group">
        <div class="form-group">
            <input type="text" id="nama" name="name" placeholder="Name" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="tel" id="telepon" name="phone" placeholder="Phone" required>
        </div>
        <div class="message-group">
            <textarea id="pesan" name="message" placeholder="Message" required></textarea>
            <div class="sendbt-container">
                <button type="submit" class="send-button">Send</button>
            </div>
        </div>
    </div>
</form>
        </div>  

            <div class="map-container">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2327858508506!2d108.22009059999999!3d-7.327731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5724259ce2f3%3A0xf1f701ba6e8abc42!2sHZ%20Mustofa%20Tasikmalaya!5e0!3m2!1sen!2sid!4v1740795116659!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </section>

    <section id="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="assets/Alifa.png" alt="Profile" class="footer-logo">
                <span class="footer-name">Alifa Rahmi</span>
            </div>
            
            <div class="footer-nav-container">
                <h4>Navigation:</h4>
                <ul>
                    <li><a href="#juduldua">Get to Know Me Better</a></li>
                    <li><a href="#skills">My Skill</a></li>
                    <li><a href="#why-hire-me">Why hire me?</a></li>
                </ul>
            </div>
    
            <div class="footer-project">
                <ul>
                    <li><a href="#my-project">My Project</a></li>
                    <li><a href="#testimoni">Testimonial Client</a></li>
                    <li><a href="#contact">Interested working with me?</a></li>
                </ul>
            </div>
    
            <div class="footer-quick">
                <h4>Quick Link:</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    
        <div class="footer-contact">
            <div class="contact-item">
                <img src="assets/maps.png" alt="Maps"></a>
                <span>Tasikmalaya, Indonesia</span>
            </div>
            <div class="contact-item">
                <img src="assets/tlp.png" alt="Telephone">
                <span>082267650947</span>
            </div>
            <div class="contact-item">
                <img src="assets/email.png" alt="Email">
                <span>alifarahmi@gmail.com</span>
            </div>
        </div>
    
        <div class="footer-social">
            <a href="https://www.linkedin.com/in/alifa-gustia-rahmi-804654270"><img src="assets/linkedin.png" alt="Linkedin"></a>
            <a href="https://www.facebook.com/alifa.gustiarahmi"><img src="assets/facebook.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/alifarhmii_?igsh=MWpjbW95eW1vNXU2MA=="><img src="assets/instagram.png" alt="Instagram"></a>
            <a href="https://youtube.com/@alifagustiarahmi4494?si=a1oVj8TnIdJQwP8v"><img src="assets/youtube.png" alt="Youtube"></a>
        </div>

        <div class="footer-bottom">
            <p>© 2025 Alifa Rahmi. All rights reserved</p>
        </div>
    </section>

    <script src="script.js"></script>

</body>
</html>
