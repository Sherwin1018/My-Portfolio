<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container nav-inner">
            <div class="logo">
                <svg class="logo-icon" viewBox="0 0 64 64" aria-hidden="true">
                    <defs>
                        <linearGradient id="wdLogoGrad" x1="8" y1="8" x2="56" y2="56" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#1fd997"/>
                            <stop offset="100%" stop-color="#57c9ff"/>
                        </linearGradient>
                    </defs>
                    <path d="M32 6 10 14v17c0 13 9.2 24.9 22 28 12.8-3.1 22-15 22-28V14L32 6Z" fill="url(#wdLogoGrad)"/>
                    <path d="M20 24h5l3 12 3.2-9.1h3.6L38 36l3-12h5l-5.6 19h-4.6l-2.8-7.6-2.8 7.6h-4.6L20 24Z" fill="#091413"/>
                </svg>
                <span class="brand-name"><span class="brand-win">WIN</span><span class="brand-dev">DEV</span></span>
            </div>
            <button class="menu-btn" id="menuBtn" aria-label="Toggle menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <nav class="nav-links" id="navLinks">
                <a href="#hero">Home</a>
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#skills">Skills</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="hero" class="hero">
            <div class="container hero-grid">
                <div>
                    <span class="eyebrow">Web & Mobile Developer Portfolio</span>
                    <h1>Hi, I'm Sherwin C. Españo. I build clean and modern web and mobile experiences.</h1>
                    <p class="lead">I design and develop user-focused websites and applications that are fast, responsive, and easy to maintain. Explore my projects and skills below.</p>
                    <div class="btn-group">
                        <a class="btn btn-primary" href="#projects">View Projects</a>
                        <a class="btn btn-secondary" href="#contact">Contact Me</a>
                    </div>
                </div>
                <aside class="hero-card profile-wrap">
                    <img class="profile-photo" src="{{ asset('images/profile.jpg') }}" alt="Profile photo">
                    <p class="hero-role">Web Developer | Frontend & Backend | Mobile Developer</p>
                </aside>
            </div>
        </section>

        <section id="about">
            <div class="container about-layout">
                <div class="about-photo-wrap">
                    <div class="about-photo-frame">
                        <img class="about-photo" src="{{ asset('images/profile1.png') }}" alt="About profile photo">
                    </div>
                </div>
                <div class="about-content">
                    <h2>About <span>Me</span></h2>
                    <p class="about-intro">I'm <strong>Sherwin C. Españo</strong>, a web and mobile developer focused on building clean, practical, and user-friendly digital experiences.</p>
                    <div class="about-growth">
                        <p><strong>Currently learning:</strong> Advanced Flutter, Laravel, React, and learning API integration.</p>
                        <p><strong>Open to:</strong> Web or mobile developer internships, junior developer roles, and learning collaboration with experts.</p>
                    </div>

                    <ul class="about-list">
                        <li><strong>Birthday:</strong> May 18, 2004</li>
                        <li><strong>Phone:</strong> 09635067030</li>
                        <li><strong>City:</strong> Davao City</li>
                        <li><strong>Age:</strong> 21</li>
                        <li><strong>Course:</strong> Bachelor of Science in Information Technology</li>
                        <li><strong>Email:</strong> espanosherwin10@gmail.com</li>
                    </ul>

                    <h3 class="about-subtitle">Hobbies & Interests</h3>
                    <div class="interest-grid">
                        <div class="interest-item"><span class="interest-icon" aria-hidden="true">♪</span>Music</div>
                        <div class="interest-item"><span class="interest-icon" aria-hidden="true">&lt;/&gt;</span>Coding</div>
                        <div class="interest-item"><span class="interest-icon" aria-hidden="true">📚</span>Reading Manga</div>
                        <div class="interest-item"><span class="interest-icon" aria-hidden="true">🏀</span>Sports</div>
                        <div class="interest-item"><span class="interest-icon" aria-hidden="true">🎮</span>Mobile Gaming</div>
                        <div class="interest-item"><span class="interest-icon" aria-hidden="true">📷</span>Photography</div>
                    </div>

                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container">
                <div class="section-head section-head-split">
                    <h2>Projects</h2>
                    <button class="cert-btn" id="openCertModal" type="button">Certificates</button>
                </div>
                <div class="projects-carousel" id="projectsCarousel">
                    <button class="carousel-btn prev" type="button" aria-label="Previous project">&#10094;</button>
                    <div class="carousel-stage">
                        <article class="carousel-slide card">
                            <img class="project-image" src="{{ asset('images/bookfi.png') }}" alt="BookFi project screenshot">
                            <h3>BookFi</h3>
                            <p>A book finder platform that helps users quickly search titles, view availability, and access curated recommendations.</p>
                            <div class="pill-row">
                                <span class="pill"><i class="tech-icon devicon-java-plain colored" aria-hidden="true"></i>Java</span>
                                <span class="pill"><i class="tech-icon devicon-mysql-original colored" aria-hidden="true"></i>MySQL</span>
                            </div>
                        </article>
                        <article class="carousel-slide card">
                            <img class="project-image" src="{{ asset('images/bookms.png') }}" alt="BookMS project screenshot">
                            <h3>Book Management System</h3>
                            <p>A book management system for organizing catalog records, borrowing workflows, and inventory updates efficiently.</p>
                            <div class="pill-row">
                                <span class="pill"><i class="tech-icon devicon-laravel-original colored" aria-hidden="true"></i>Laravel</span>
                                <span class="pill"><i class="tech-icon devicon-css3-plain colored" aria-hidden="true"></i>CSS</span>
                                <span class="pill"><i class="tech-icon devicon-mysql-original colored" aria-hidden="true"></i>MySQL</span>
                            </div>
                        </article>
                        <article class="carousel-slide card">
                            <img class="project-image" src="{{ asset('images/erms.png') }}" alt="ERMS project screenshot">
                            <h3>Employee Record Management System</h3>
                            <p>An event records management system built to centralize event data, attendee tracking, and report generation.</p>
                            <div class="pill-row">
                                <span class="pill"><i class="tech-icon devicon-php-plain colored" aria-hidden="true"></i>PHP</span>
                                <span class="pill"><i class="tech-icon devicon-css3-plain colored" aria-hidden="true"></i>CSS</span>
                                <span class="pill"><i class="tech-icon devicon-mysql-original colored" aria-hidden="true"></i>MySQL</span>
                            </div>
                        </article>
                        <article class="carousel-slide card">
                            <img class="project-image" src="{{ asset('images/fms.png') }}" alt="FMS project screenshot">
                            <h3>FireGuard</h3>
                            <p>A safety monitoring system that detects smoke, fire, carbon monoxide, and gas, sends alerts and notifications, and records true active alerts for real-time response tracking.</p>
                            <div class="pill-row">
                                <span class="pill"><i class="tech-icon devicon-react-original colored" aria-hidden="true"></i>React</span>
                                <span class="pill"><i class="tech-icon devicon-vitejs-plain colored" aria-hidden="true"></i>Vite</span>
                                <span class="pill"><i class="tech-icon devicon-firebase-plain colored" aria-hidden="true"></i>Firebase</span>
                            </div>
                        </article>
                        <article class="carousel-slide card">
                            <img class="project-image" src="{{ asset('images/ims.png') }}" alt="IMS project screenshot">
                            <h3>Inventory Management System</h3>
                            <p>An inventory management system for tracking stock levels, movement logs, and low-item alerts in real time.</p>
                            <div class="pill-row">
                                <span class="pill"><i class="tech-icon devicon-php-plain colored" aria-hidden="true"></i>PHP</span>
                                <span class="pill"><i class="tech-icon devicon-css3-plain colored" aria-hidden="true"></i>CSS</span>
                                <span class="pill"><i class="tech-icon devicon-mysql-original colored" aria-hidden="true"></i>MySQL</span>
                            </div>
                        </article>
                        <article class="carousel-slide card">
                            <img class="project-image" src="{{ asset('images/savour.png') }}" alt="SavourRamen website screenshot">
                            <h3>SavourRamen Website</h3>
                            <p>A modern restaurant website showcasing ramen menu highlights, brand story, and a smooth ordering-focused user experience.</p>
                            <div class="pill-row">
                                <span class="pill"><i class="tech-icon devicon-html5-plain colored" aria-hidden="true"></i>HTML</span>
                                <span class="pill"><i class="tech-icon devicon-css3-plain colored" aria-hidden="true"></i>CSS</span>
                                <span class="pill"><i class="tech-icon devicon-javascript-plain colored" aria-hidden="true"></i>JavaScript</span>
                            </div>
                        </article>
                        <article class="carousel-slide card">
                            <img class="project-image" src="{{ asset('images/mobileapp.png') }}" alt="Portfolio Project mobile app screenshot">
                            <h3>Portfolio Project</h3>
                            <p>A mobile app that consists of my initial portfolio contents, built and run using Flutter and Firebase.</p>
                            <div class="pill-row">
                                <span class="pill"><i class="tech-icon devicon-flutter-plain colored" aria-hidden="true"></i>Flutter</span>
                                <span class="pill"><i class="tech-icon devicon-firebase-plain colored" aria-hidden="true"></i>Firebase</span>
                            </div>
                        </article>
                    </div>
                    <button class="carousel-btn next" type="button" aria-label="Next project">&#10095;</button>
                    <div class="carousel-dots" aria-label="Project pagination">
                        <button type="button" class="dot" aria-label="Go to project 1"></button>
                        <button type="button" class="dot" aria-label="Go to project 2"></button>
                        <button type="button" class="dot" aria-label="Go to project 3"></button>
                        <button type="button" class="dot" aria-label="Go to project 4"></button>
                        <button type="button" class="dot" aria-label="Go to project 5"></button>
                        <button type="button" class="dot" aria-label="Go to project 6"></button>
                        <button type="button" class="dot" aria-label="Go to project 7"></button>
                    </div>
                </div>
            </div>
        </section>

        <div class="cert-modal" id="certModal" aria-hidden="true">
            <div class="cert-backdrop" data-close-cert></div>
            <div class="cert-panel" role="dialog" aria-modal="true" aria-labelledby="certModalTitle">
                <div class="cert-panel-head">
                    <h3 id="certModalTitle">Certificates</h3>
                    <button class="cert-close" id="closeCertModal" type="button" aria-label="Close certificates">&times;</button>
                </div>
                <div class="cert-grid">
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/asd1.png') }}" alt="ASD 1 certificate">
                        <h4>Advanced Seminar Day 1 Certificate</h4>
                        <p>Participation and achievement certificate for Advanced Seminar learning and practical competency training.</p>
                    </article>
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/asd2.png') }}" alt="ASD 2 certificate">
                        <h4>Advanced Seminar Day 2 Certificate</h4>
                        <p>Advanced Seminar certificate focused on applying learned concepts through project-based activities.</p>
                    </article>
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/cse.png') }}" alt="CSE certificate">
                        <h4>CyberSecurity Essentials Certificate</h4>
                        <p>Certification validating technical knowledge and practical understanding in CyberSecurity Essentials-related training.</p>
                    </article>
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/cseh.png') }}" alt="CSEH certificate">
                        <h4>CyberSecurity Ethical Hacking Certificate</h4>
                        <p>Recognition of completion for CyberSecurity Ethical Hacking coursework covering security-focused digital competencies.</p>
                    </article>
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/dict.png') }}" alt="DICT certificate">
                        <h4>DICT Level 1 Certificate</h4>
                        <p>Certificate from DICT training sessions focused on digital literacy and ICT skill development.</p>
                    </article>
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/itpt.png') }}" alt="ITPT certificate">
                        <h4>Introduction To Packet Tracer Certificate</h4>
                        <p>Introduction To Packet Tracer certificate demonstrating applied technical proficiency and consistent task completion.</p>
                    </article>
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/jcsp.png') }}" alt="JCSP certificate">
                        <h4>Junior CyberSecurity Career Path Certificate</h4>
                        <p>Certification for Junior CyberSecurity Career Path participation emphasizing collaborative project experience and discipline.</p>
                    </article>
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/techno.png') }}" alt="Techno certificate">
                        <h4>Technopreneurship Certificate</h4>
                        <p>Technopreneurship certificate awarded for demonstrated engagement in innovation and technical skills.</p>
                    </article>
                    <article class="cert-card">
                        <img src="{{ asset('images/cert/tnc2.png') }}" alt="TNC 2 certificate">
                        <h4>TESDA NCII Certificate</h4>
                        <p>TESDA NCII completion certificate highlighting progress in ICT competencies and practical execution.</p>
                    </article>
                </div>
            </div>
        </div>

        <div class="cert-image-modal" id="certImageModal" aria-hidden="true">
            <div class="cert-image-backdrop" data-close-cert-image></div>
            <div class="cert-image-panel" role="dialog" aria-modal="true" aria-labelledby="certImageTitle">
                <div class="cert-image-head">
                    <h4 id="certImageTitle"></h4>
                    <button class="cert-image-close" id="closeCertImageModal" type="button" aria-label="Close certificate preview">&times;</button>
                </div>
                <img id="certImagePreview" src="" alt="Certificate preview">
            </div>
        </div>

        <section id="skills">
            <div class="container">
                <div class="section-head">
                    <h2>SKILLS</h2>
                </div>
                <div class="skill-bars">
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-javascript-plain colored" aria-hidden="true"></i>JavaScript</span><span>50%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="50"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: SavourRamen Website</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-php-plain colored" aria-hidden="true"></i>PHP</span><span>95%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="95"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: ERMS, IMS</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-java-plain colored" aria-hidden="true"></i>Java</span><span>70%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="70"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: BookFi</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-css3-plain colored" aria-hidden="true"></i>CSS</span><span>90%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="90"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: SavourRamen Website, BookMS</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-html5-plain colored" aria-hidden="true"></i>HTML</span><span>95%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="95"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: SavourRamen Website</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-mysql-original colored" aria-hidden="true"></i>MySQL</span><span>95%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="95"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: BookMS, ERMS, IMS</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-laravel-original colored" aria-hidden="true"></i>Laravel</span><span>88%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="88"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: BookMS Portfolio Build</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-react-original colored" aria-hidden="true"></i>React</span><span>84%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="84"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: FireGuard</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-vitejs-plain colored" aria-hidden="true"></i>Vite</span><span>50%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="50"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: FireGuard</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-firebase-plain colored" aria-hidden="true"></i>Firebase</span><span>80%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="80"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: FireGuard, Portfolio Project</span></div>
                    </div>
                    <div class="skill-row">
                        <div class="skill-meta"><span class="skill-name"><i class="skill-icon devicon-flutter-plain colored" aria-hidden="true"></i>Flutter</span><span>85%</span></div>
                        <div class="skill-track"><div class="skill-fill" data-level="85"></div></div>
                        <div class="skill-proof"><span class="proof-badge">Used in: Portfolio Project (Mobile App)</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="section-head">
                    <h2>Contact</h2>
                </div>

                @if (session('contact_success'))
                    <p class="form-alert success">{{ session('contact_success') }}</p>
                @endif

                @if (session('contact_error'))
                    <p class="form-alert error">{{ session('contact_error') }}</p>
                @endif

                @if ($errors->any())
                    <p class="form-alert error">Please complete all required fields correctly.</p>
                @endif

                <form class="contact-form" method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="contact-left">
                        <input type="text" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" required>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
                        <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                    </div>

                    <div class="contact-right">
                        <textarea name="message" placeholder="Your Message" required>{{ old('message') }}</textarea>
                        <button class="contact-submit" type="submit">Send Message</button>
                    </div>
                </form>
                <div class="contact-trust">
                    <h3>Connect with me</h3>
                    <div class="trust-links">
                        <a href="https://github.com/Sherwin1018/" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                            <i class="bi bi-github" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/sherwin-espa%C3%B1o-b2313634a/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/yo.choyeii" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/espanosherwin18/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="{{ asset('files/Sherwin-Espano-CV.pdf') }}" target="_blank" rel="noopener noreferrer" aria-label="Download CV PDF">
                            <i class="bi bi-file-earmark-person-fill" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-inner">
            <div class="footer-brand">
                <strong>WINDEV</strong>
                <p>Building clean web and mobile experiences.</p>
            </div>
            <div class="footer-copy">
                &copy; <span id="year"></span> WINDEV. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('menuBtn');
        const navLinks = document.getElementById('navLinks');

        menuBtn.addEventListener('click', function () {
            menuBtn.classList.toggle('open');
            navLinks.classList.toggle('open');
        });

        navLinks.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menuBtn.classList.remove('open');
                navLinks.classList.remove('open');
            });
        });

        const navItems = Array.from(navLinks.querySelectorAll('a[href^="#"]'));
        const observedSections = navItems
            .map(function (item) { return document.querySelector(item.getAttribute('href')); })
            .filter(Boolean);
        const sectionVisibility = new Map();

        function setActiveNavLink(activeId) {
            navItems.forEach(function (item) {
                const targetId = item.getAttribute('href').replace('#', '');
                item.classList.toggle('active', Boolean(activeId) && targetId === activeId);
            });
        }

        if ('IntersectionObserver' in window && observedSections.length) {
            const sectionObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    sectionVisibility.set(entry.target.id, entry.isIntersecting ? entry.intersectionRatio : 0);
                });

                let currentId = '';
                let highestRatio = 0;
                sectionVisibility.forEach(function (ratio, id) {
                    if (ratio > highestRatio) {
                        highestRatio = ratio;
                        currentId = id;
                    }
                });

                setActiveNavLink(currentId || '');
            }, {
                threshold: [0, 0.2, 0.35, 0.55, 0.75],
                rootMargin: '-15% 0px -45% 0px'
            });

            observedSections.forEach(function (section) {
                sectionVisibility.set(section.id, 0);
                sectionObserver.observe(section);
            });
        }

        const certModal = document.getElementById('certModal');
        const openCertModal = document.getElementById('openCertModal');
        const closeCertModal = document.getElementById('closeCertModal');
        const certImageModal = document.getElementById('certImageModal');
        const closeCertImageModal = document.getElementById('closeCertImageModal');
        const certImagePreview = document.getElementById('certImagePreview');
        const certImageTitle = document.getElementById('certImageTitle');

        function showCertModal() {
            certModal.classList.add('open');
            certModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function hideCertModal() {
            certModal.classList.remove('open');
            certModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        if (openCertModal && certModal) {
            openCertModal.addEventListener('click', showCertModal);
        }

        if (closeCertModal && certModal) {
            closeCertModal.addEventListener('click', hideCertModal);
        }

        if (certModal) {
            certModal.addEventListener('click', function (event) {
                if (event.target.hasAttribute('data-close-cert')) {
                    hideCertModal();
                }
            });
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && certModal && certModal.classList.contains('open')) {
                hideCertModal();
            }
        });

        function showCertImageModal(src, title) {
            if (!certImageModal || !certImagePreview) return;
            certImagePreview.src = src;
            certImagePreview.alt = title || 'Certificate preview';
            if (certImageTitle) certImageTitle.textContent = title || 'Certificate';
            certImageModal.classList.add('open');
            certImageModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function hideCertImageModal() {
            if (!certImageModal || !certImagePreview) return;
            certImageModal.classList.remove('open');
            certImageModal.setAttribute('aria-hidden', 'true');
            certImagePreview.src = '';
            document.body.style.overflow = certModal && certModal.classList.contains('open') ? 'hidden' : '';
        }

        document.querySelectorAll('.cert-card').forEach(function (card) {
            const image = card.querySelector('img');
            const title = card.querySelector('h4');
            if (!image) return;

            const action = document.createElement('button');
            action.type = 'button';
            action.className = 'cert-view-btn';
            action.textContent = 'View full image';
            action.addEventListener('click', function () {
                showCertImageModal(image.src, title ? title.textContent : 'Certificate');
            });

            card.appendChild(action);
        });

        if (closeCertImageModal) {
            closeCertImageModal.addEventListener('click', hideCertImageModal);
        }

        if (certImageModal) {
            certImageModal.addEventListener('click', function (event) {
                if (event.target.hasAttribute('data-close-cert-image')) {
                    hideCertImageModal();
                }
            });
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && certImageModal && certImageModal.classList.contains('open')) {
                hideCertImageModal();
            }
        });

        let revealObserver = null;

        function initScrollAnimations() {
            const revealGroups = [
                ['.hero-grid > div', 'reveal-left'],
                ['.hero-grid > aside', 'reveal-right'],
                ['#about .about-photo-wrap', 'reveal-left'],
                ['#about .about-content', 'reveal-right'],
                ['#projects .section-head', 'reveal-left'],
                ['#projects .projects-carousel', 'reveal-zoom'],
                ['#skills .section-head', 'reveal-left'],
                ['#skills .skill-bars', 'reveal-right'],
                ['#contact .section-head', 'reveal-left'],
                ['#contact .form-alert', 'reveal-zoom'],
                ['#contact .contact-form', 'reveal-right'],
                ['footer .container', 'reveal-zoom']
            ];

            const revealElements = new Set();
            revealGroups.forEach(function (group) {
                const selector = group[0];
                const variant = group[1];
                document.querySelectorAll(selector).forEach(function (el) {
                    el.classList.add('scroll-reveal');
                    if (variant) el.classList.add(variant);
                    revealElements.add(el);
                });
            });

            document.querySelectorAll('section').forEach(function (section) {
                const staggerTargets = Array.from(section.querySelectorAll('.card, .interest-item, .skill-row, .carousel-slide, .pill'));
                staggerTargets.forEach(function (el, index) {
                    if (!el.classList.contains('scroll-reveal')) {
                        el.classList.add('scroll-reveal');
                    }
                    el.style.setProperty('--reveal-delay', (index % 8) * 65 + 'ms');
                    revealElements.add(el);
                });
            });

            if (!('IntersectionObserver' in window)) {
                revealElements.forEach(function (el) { el.classList.add('is-visible'); });
                return;
            }

            if (revealObserver) {
                revealObserver.disconnect();
            }

            revealObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    } else {
                        entry.target.classList.remove('is-visible');
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

            revealElements.forEach(function (el) {
                el.classList.remove('is-visible');
                revealObserver.observe(el);
            });
        }

        const carousel = document.getElementById('projectsCarousel');
        const slides = Array.from(carousel.querySelectorAll('.carousel-slide'));
        const stage = carousel.querySelector('.carousel-stage');
        const dots = Array.from(carousel.querySelectorAll('.dot'));
        const prevBtn = carousel.querySelector('.carousel-btn.prev');
        const nextBtn = carousel.querySelector('.carousel-btn.next');
        const totalSlides = slides.length;
        let currentSlide = 0;
        let autoPlayTimer = null;
        let touchStartX = 0;
        let touchEndX = 0;

        function getCircularOffset(index, active, length) {
            let offset = index - active;
            if (offset > length / 2) offset -= length;
            if (offset < -length / 2) offset += length;
            return offset;
        }

        function renderCarousel() {
            slides.forEach(function (slide, index) {
                const offset = getCircularOffset(index, currentSlide, totalSlides);
                slide.style.setProperty('--offset', offset);
                slide.classList.remove('is-active', 'is-side');

                if (offset === 0) {
                    slide.classList.add('is-active');
                } else if (Math.abs(offset) === 1) {
                    slide.classList.add('is-side');
                }
            });

            dots.forEach(function (dot, index) {
                dot.classList.toggle('active', index === currentSlide);
            });

            requestAnimationFrame(function () {
                const activeSlide = slides[currentSlide];
                if (activeSlide && stage) {
                    stage.style.height = (activeSlide.offsetHeight + 8) + 'px';
                }
            });
        }

        function goToSlide(index) {
            currentSlide = (index + totalSlides) % totalSlides;
            renderCarousel();
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        function startAutoplay() {
            stopAutoplay();
            autoPlayTimer = setInterval(nextSlide, 4500);
        }

        function stopAutoplay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        prevBtn.addEventListener('click', function () {
            prevSlide();
            startAutoplay();
        });

        nextBtn.addEventListener('click', function () {
            nextSlide();
            startAutoplay();
        });

        dots.forEach(function (dot, index) {
            dot.addEventListener('click', function () {
                goToSlide(index);
                startAutoplay();
            });
        });

        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);
        carousel.addEventListener('focusin', stopAutoplay);
        carousel.addEventListener('focusout', startAutoplay);

        carousel.addEventListener('touchstart', function (event) {
            touchStartX = event.changedTouches[0].clientX;
        }, { passive: true });

        carousel.addEventListener('touchend', function (event) {
            touchEndX = event.changedTouches[0].clientX;
            const swipeDistance = touchEndX - touchStartX;

            if (Math.abs(swipeDistance) > 50) {
                if (swipeDistance < 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
                startAutoplay();
            }
        }, { passive: true });

        window.addEventListener('resize', renderCarousel);

        const skillsSection = document.getElementById('skills');
        const skillFills = Array.from(document.querySelectorAll('#skills .skill-fill'));

        function animateSkillBars() {
            skillFills.forEach(function (fill) {
                const targetLevel = fill.dataset.level || '0';
                fill.style.width = targetLevel + '%';
                fill.classList.add('animated');
            });
        }

        if ('IntersectionObserver' in window) {
            const skillObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        animateSkillBars();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.35 });

            if (skillsSection) {
                skillObserver.observe(skillsSection);
            }
        } else {
            animateSkillBars();
        }

        initScrollAnimations();
        renderCarousel();
        startAutoplay();

        window.addEventListener('pageshow', function () {
            initScrollAnimations();
        });

        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>
