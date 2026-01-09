<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - [Nama Anda]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header & Navigation -->
    @include('layout.header')

    <!-- Home Section -->
    <section id="home">
        <div class="container">
            <div class="home-content">
                <div class="intro-text">
                    <h1>Halo, Saya <span>Rahmat Sito Pambudi</span></h1>
                    <div class="title">Full Stack Developer & UI/UX Designer <br> & Designer</div>
                    <p>Saya seorang pengembang perangkat lunak dengan pengalaman 1+ tahun dalam membangun web desktop dan mobile yang skalabel dan responsif. Passion saya adalah menciptakan solusi digital yang inovatif dan user-friendly.</p>
                    <a href="javascript:void(0)" class="btn" id="downloadCV">
                        <i class="fas fa-download"></i> Download CV
                    </a>
                </div>
                <div class="profile-img">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Profile Picture">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Mari Berkenalan!</h3>
                    <p>Saya seorang profesional teknologi dengan latar belakang di bidang Rekayasa Perangkat Lunak (RPL). Saya memiliki pengalaman dalam berbagai teknologi frontend dan backend, serta prinsip-prinsip desain UI/UX.</p>
                    <p>Saya sangat tertarik dengan perkembangan teknologi terkini seperti AI, cloud computing, dan teknologi web modern. Saya senang belajar hal baru dan selalu mencari cara untuk meningkatkan keterampilan saya.</p>
                    
                    <div class="personal-info">
                        <div class="info-item">
                            <i class="fas fa-user"></i>
                            <span>Rahmat Sito Pambudi</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <span>rahmatsito801@gmail.com</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <span>+62 898 9514 802</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Tangerang, Indonesia</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-graduation-cap"></i>
                            <span>SMK Nusantara 1</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-briefcase"></i>
                            <span>1+ Tahun Pengalaman</span>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="About Me">
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <div class="section-title">
                <h2>Skills</h2>
            </div>
            <div class="skills-container">
                <div class="skill-category">
                    <h3><i class="fas fa-code"></i> Frontend Development</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>CSS</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Framework</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3><i class="fas fa-server"></i> Backend Development</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>PHP</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Laravel Framework</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>MySQL</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>MongoDB</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3><i class="fas fa-paint-brush"></i> UI/UX Design</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Figma</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Canva</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- <div class="skill-item">
                        <div class="skill-name">
                            <span>User Research</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Prototyping</span>
                            <span>88%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 88%"></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <div class="container">
            <div class="section-title">
                <h2>Projects</h2>
            </div>
            <div class="projects-container">
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="E-commerce Platform">
                    </div>
                    <div class="project-info">
                        <h3>E-commerce Platform</h3>
                        <p>Platform e-commerce lengkap dengan sistem pembayaran, manajemen produk, dan dashboard admin. Dibangun menggunakan React.js dan Node.js.</p>
                        <div class="project-tags">
                            <span>React.js</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                            <span>Stripe API</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="project-link">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="javascript:void(0)" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-img">
                        <img src="img/website_cms.png" alt="Task Management App">
                    </div>
                    <div class="project-info">
                        <h3>Company Management System</h3>
                        <p>Website Company Management System. Yang bisa digunakan untuk mengelola data perusahaan secara efisien.</p>
                        <div class="project-tags">
                            <span>Laravel Framewrk</span>
                            <span>MySQL</span>
                            <span>Canva</span>
                            <span>HTML</span>
                            <span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="project-link">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="javascript:void(0)" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Health & Fitness Tracker">
                    </div>
                    <div class="project-info">
                        <h3>Health & Fitness Tracker</h3>
                        <p>Aplikasi pelacak kesehatan dengan integrasi wearable devices, analisis data, dan rekomendasi personal. Dibangun dengan React Native dan Python.</p>
                        <div class="project-tags">
                            <span>React Native</span>
                            <span>Python</span>
                            <span>GraphQL</span>
                            <span>Machine Learning</span>
                        </div>
                        <div class="project-links">
                            <a href="javascript:void(0)" class="project-link">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="javascript:void(0)" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layout.footer')

    <script src="js/style.js"></script>
</body>
</html>