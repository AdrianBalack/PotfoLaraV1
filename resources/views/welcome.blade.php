<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adrien Brhu</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <body>
    <div class="wrapper">
        <header class="header">
            <div class="header-content">
                <h1 class="name">Adrien Brhu</h1>
                <p class="tagline">Full Stack Developer</p>
            </div>
        </header>

        <nav class="main-nav">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <main class="main-content">
            <section id="about" class="section">
                <h2 class="section-title">About</h2>
                <div class="section-content">
                    <p>
                        I'm a passionate Full Stack Developer specializing in PHP and Laravel, 
                        with expertise in creating robust web applications using modern technologies. 
                        My approach combines technical excellence with creative problem-solving.
                    </p>
                </div>
            </section>

            <section id="skills" class="section">
                <h2 class="section-title">Skills</h2>
                <div class="skills-grid">
                    <div class="skill-category">
                        <h3>Backend</h3>
                        <ul>
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>Symfony</li>
                            <li>API Development</li>
                        </ul>
                    </div>
                    <div class="skill-category">
                        <h3>Frontend</h3>
                        <ul>
                            <li>JavaScript</li>
                            <li>React.js</li>
                            <li>Vue.js</li>
                            <li>Next.js</li>
                        </ul>
                    </div>
                    <div class="skill-category">
                        <h3>Database</h3>
                        <ul>
                            <li>MySQL</li>
                            <li>PostgreSQL</li>
                            <li>Database Design</li>
                        </ul>
                    </div>
                    <div class="skill-category">
                        <h3>Tools</h3>
                        <ul>
                            <li>Git</li>
                            <li>Docker</li>
                            <li>CI/CD</li>
                            <li>Agile Methodologies</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="projects" class="section">
                <h2 class="section-title">Projects</h2>
                <div class="projects-grid">
                    <div class="project">
                        <h3>Collaborative Task Manager</h3>
                        <p>Web application for team project management using Laravel and Vue.js</p>
                        <div class="project-tags">
                            <span>Laravel</span>
                            <span>Vue.js</span>
                        </div>
                    </div>
                    <div class="project">
                        <h3>E-commerce Platform</h3>
                        <p>Scalable online sales platform with Laravel backend and React.js frontend</p>
                        <div class="project-tags">
                            <span>Laravel</span>
                            <span>React.js</span>
                        </div>
                    </div>
                    <div class="project">
                        <h3>Content Management API</h3>
                        <p>Robust API for news content management with Next.js admin interface</p>
                        <div class="project-tags">
                            <span>Laravel</span>
                            <span>Next.js</span>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="section">
                <h2 class="section-title">Get in Touch</h2>
                <div class="contact-links">
                    <a href="mailto:adrien.brhu@example.com" class="contact-link">Email</a>
                    <a href="https://github.com/AdrianBalack" target="_blank" class="contact-link">GitHub</a>
                    <a href="https://linkedin.com/in/adrienbrhu" target="_blank" class="contact-link">LinkedIn</a>
                </div>
            </section>
        </main>

        <footer class="footer">
            <p>&copy; 2024 Adrien Brhu. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
