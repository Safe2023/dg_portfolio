@extends('layout.header')
@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="company-badge mb-4">
                        <i class="bi bi-gear-fill me-2"></i>
                        Travailler pour votre réussite
                    </div>

                    <h1 class="mb-4">
                        Saturnine Médessè Michozounnou <br>
                        <span class="accent-text" style="font-size:30px;">Economiste, experte en gestion <br> et évaluation de projets</span>
                    </h1>
                    @if (session('success'))<div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if (session('error'))<div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    <div class="hero-buttons">
                        <a type="button" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary me-0 me-sm-2 mx-1 text-uppercase fw-bold">Prendre un rdv</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/photo1.jpg" alt="Hero Image" class="img-fluid">

                    <div class="customers-badge bg-light rounded shadow">
                        <h3 class="display-5 fw-bold text-primary">
                            15+ <span class="text-dark">Ans</span>
                        </h3>
                        <p class="text-muted mb-0">D'expérience dans les services aux entreprises</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item text-center">
                    <div class="stat-icon mb-2 text-primary fs-1">
                        <i class="bi bi-bar-chart-line"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="fw-bold">15+ Ans</h4>
                        <p class="mb-0">Expérience en économie et projets</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item text-center">
                    <div class="stat-icon mb-2 text-success fs-1">
                        <i class="bi bi-journal-check"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="fw-bold">100+ Projets</h4>
                        <p class="mb-0">Évalués et accompagnés avec succès</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item text-center">
                    <div class="stat-icon mb-2 text-warning fs-1">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="fw-bold">20 Partenaires</h4>
                        <p class="mb-0">Collaborations nationales & régionales</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item text-center">
                    <div class="stat-icon mb-2 text-danger fs-1">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <div class="stat-content">
                        <h4 class="fw-bold">4 Distinctions</h4>
                        <p class="mb-0">Prix et reconnaissances professionnelles</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>
<!-- MODAL FORMULAIRE RDV -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Prendre un rendez-vous</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('rdv_email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date du rendez-vous</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>

                    <div class="modal-footer px-0">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
<!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                <div class="image-wrapper">
                    <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                        <img src="assets/img/DG_AU.jpg" alt="Business Meeting" class="img-fluid main-image rounded-4">
                    </div>
                    <div class="experience-badge floating">
                        <h3>15+ <span>Ans</span></h3>
                        <p>D'expériences dans les services aux entreprises</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                <span class="about-meta">À propos de moi</span>
                <h2 class="about-title">Une expertise au service du développement</h2>
                <p class="about-description" style="text-align: justify">
                    Je suis Saturnine Médessè Michozounnou, économiste et experte en gestion et évaluation de projets avec plus de 15 ans d’expérience dans le secteur du développement. Actuellement, je suis co-fondatrice et Directrice Générale de ACCES Universel , une agence africaine de développement durable spécialisée dans le management de projets. Mon rôle consiste à coordonner, avec divers partenaires, des initiatives stratégiques visant à résoudre les grandes équations liées au développement en matière d’accès aux ressources essentielles, afin d'améliorer les conditions de vie en Afrique.

                    Avec une formation en économie appliquée et en gestion de projets internationaux, j’ai eu l’opportunité de travailler sur des projets majeurs touchant à la santé publique, à la lutte contre la pauvreté et au développement communautaire, notamment avec des organisations comme Cuso International et Plan International Bénin . A cela, s'ajoute mes capacités en recherche opérationnelle, collecte, analyse et traitement de données pour avoir longtemps travaillé avec #CEFORP (Centre de Formation et de Recherche en matière de Population) et le #CRAD (Centre de Recherche et d’Appui-conseils pour le Développement) , deux structures de grandes renommée en réalisation d'études.

                    Ce qui me passionne avant tout, c’est de contribuer au développement durable en Afrique tout en renforçant les capacités des acteurs locaux. Je m’engage à mettre mes compétences au service des ONG et des institutions, qu’elles soient publiques ou privées, en les accompagnant dans l’élaboration de leurs stratégies et la mise en œuvre de projets à impact réel pour les communautés. Je suis convaincue qu'ensemble, nous pouvons bâtir un avenir meilleur.

                    Merci à tous de me suivre, et n’hésitez pas à entrer en contact avec moi si vous souhaitez échanger ou collaborer sur des sujets liés au développement et à la gestion de projets, et au suivi évaluation.
                </p>
            </div>

        </div>

    </div>

</section><!-- /About Section -->

<!-- Features Section -->
<section id="expertises" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Mes domaines d’expertise</h2>
        <p>Des compétences solides pour accompagner les projets, depuis leur conception jusqu’à leur évaluation, avec rigueur et efficacité.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="d-flex justify-content-center">
            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                        <h4>Évaluation de projets</h4>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                        <h4>Gestion stratégique</h4>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                        <h4>Analyse économique</h4>
                    </a>
                </li>

            </ul>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

            <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Évaluation et suivi de projets</h3>
                        <p class="fst-italic">
                            J’accompagne les organisations dans l’évaluation rigoureuse de leurs projets pour en mesurer l’efficacité, la pertinence et la durabilité.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Analyse d’impact basée sur des indicateurs mesurables et fiables.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Élaboration de rapports d’évaluation clairs et exploitables.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Recommandations stratégiques pour l’amélioration continue et la bonne gouvernance.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-illustration-1.webp" alt="Illustration Évaluation de projet" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Gestion stratégique des projets</h3>
                        <p class="fst-italic">
                            Je conçois et mets en œuvre des stratégies efficaces pour maximiser la performance des projets et assurer l’atteinte des résultats visés.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Définition des orientations stratégiques adaptées aux objectifs de développement.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Analyse des risques, opportunités et environnement opérationnel.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Planification stratégique, budgétisation et allocation optimale des ressources.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Appui à la prise de décision éclairée et à l’amélioration continue des performances.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/vo1.avif" alt="Illustration gestion stratégique" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- End tab content item -->

            <div class="tab-pane fade" id="features-tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Analyse économique et évaluation d’impact</h3>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Évaluation des coûts, des bénéfices et de la rentabilité des projets.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Études d’impact économique à court, moyen et long terme.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Analyse des externalités, des effets redistributifs et des indicateurs de performance économique.</span></li>
                        </ul>
                        <p class="fst-italic">
                            J’utilise des outils rigoureux pour appuyer les décisions d’investissement, d’orientation ou d’ajustement des projets de développement.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-illustration-3.webp" alt="Illustration analyse économique" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- End tab content item -->

        </div>

    </div>

</section><!-- /Features Section -->

<!-- Features Cards Section -->
<section id="features-cards" class="features-cards section">
    <div class="container">
        <div class="row gy-4">

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="feature-box orange">
                    <i class="bi bi-award"></i>
                    <h4>Expertise sectorielle</h4>
                    <p>Des analyses pointues adaptées à chaque secteur pour mieux orienter les décisions stratégiques et opérationnelles.</p>
                </div>
            </div><!-- End Feature Box -->

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="feature-box blue">
                    <i class="bi bi-patch-check"></i>
                    <h4>Évaluation rigoureuse</h4>
                    <p>Des outils fiables pour mesurer la performance, l'impact et la rentabilité des projets de développement.</p>
                </div>
            </div><!-- End Feature Box -->

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="feature-box green">
                    <i class="bi bi-sunrise"></i>
                    <h4>Approche durable</h4>
                    <p>Une vision à long terme intégrant durabilité, inclusion et résilience pour un impact réel et mesurable.</p>
                </div>
            </div><!-- End Feature Box -->

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="feature-box red">
                    <i class="bi bi-shield-check"></i>
                    <h4>Fiabilité & confidentialité</h4>
                    <p>Des données sécurisées, une éthique professionnelle stricte et un accompagnement sur mesure à chaque étape.</p>
                </div>
            </div><!-- End Feature Box -->

        </div>
    </div>
</section>
<!-- /Features Cards Section -->


<!-- Services Section -->
<section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Mes Services</h2>
        <p>Découvrez les solutions que je mets à votre disposition pour répondre à vos besoins avec efficacité et professionnalisme.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-activity"></i>
                    </div>
                    <div>
                        <h3>Études & Conseils</h3>
                        <p>Je réalise des études approfondies et vous accompagne avec des conseils personnalisés pour vos projets stratégiques.</p>
                    </div>
                </div>
            </div><!-- End Service Card -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                    <div>
                        <h3>Gestion de Projets</h3>
                        <p>De la conception à la mise en œuvre, j’assure une gestion rigoureuse de vos projets pour garantir leur succès.</p>
                    </div>
                </div>
            </div><!-- End Service Card -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-easel"></i>
                    </div>
                    <div>
                        <h3>Formations Professionnelles</h3>
                        <p>J’offre des formations adaptées aux besoins du marché pour renforcer les compétences de vos équipes.</p>
                    </div>
                </div>
            </div><!-- End Service Card -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-clipboard-data"></i>
                    </div>
                    <div>
                        <h3>Suivi & Évaluation</h3>
                        <p>J’assure le suivi des performances et j’évalue l’impact de vos actions pour une meilleure prise de décision.</p>
                    </div>
                </div>
            </div><!-- End Service Card -->

        </div>

    </div>

</section>
<!-- /Services Section -->

<!-- Faq Section -->
<section class="faq-9 faq section light-background" id="faq">

    <div class="container">
        <div class="row">

            <div class="col-lg-5" data-aos="fade-up">
                <h2 class="faq-title">Vous avez une question ? Consultez ma FAQ</h2>
                <p class="faq-description">Trouvez rapidement des réponses aux questions les plus fréquentes concernant mes services et mon expertise.</p>

                <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                    <!-- SVG unchanged -->
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                <div class="faq-container">

                    <div class="faq-item faq-active">
                        <h3>Quels sont les délais moyens de réalisation de vos projets ?</h3>
                        <div class="faq-content">
                            <p>Mes délais varient selon la complexité du projet. En général, je définis un planning clair dès le lancement, avec des jalons intermédiaires pour un suivi rigoureux.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Proposez-vous un accompagnement après la livraison ?</h3>
                        <div class="faq-content">
                            <p>Oui, j’assure une maintenance gratuite pendant 3 mois après la livraison pour garantir le bon fonctionnement de mes solutions.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Comment se déroule le processus de validation du projet ?</h3>
                        <div class="faq-content">
                            <p>Le projet est validé en plusieurs étapes, incluant des revues régulières avec le client afin d’assurer que chaque exigence est bien prise en compte.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Quels types de services offrez-vous en gestion de projet ?</h3>
                        <div class="faq-content">
                            <p>Je propose la planification, le suivi, la coordination des équipes ainsi que l’évaluation des risques pour garantir la réussite de votre projet.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Vos solutions sont-elles personnalisables selon nos besoins ?</h3>
                        <div class="faq-content">
                            <p>Absolument, j’adapte mes services et solutions pour qu’ils correspondent parfaitement aux objectifs et spécificités de votre organisation.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Quels sont vos engagements en matière de sécurité des données ?</h3>
                        <div class="faq-content">
                            <p>Je respecte les normes les plus strictes de sécurité et confidentialité, avec des sauvegardes régulières et une infrastructure sécurisée pour protéger vos informations.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>
            </div>

        </div>
    </div>
</section><!-- /Faq Section -->

<!-- Contact Section -->
<section id="contact" class="contact section light-background">

    <!-- Titre de la section -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Vous avez une question ? N’hésitez pas à me contacter, je suis à votre écoute.</p>
    </div><!-- Fin Titre -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
            <!-- Infos de contact -->
            <div class="col-lg-5">
                <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                    <h3>Informations</h3>
                    <p>Je suis disponible pour répondre à toutes vos demandes et vous accompagner dans vos projets.</p>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="content">
                            <h4>Adresse</h4>
                            <p>Cotonou, Benin</p>
                        </div>
                    </div>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="content">
                            <h4>Téléphone</h4>
                            <p>+229 0197 138 3025</p>
                        </div>
                    </div>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>Email</h4>
                            <p>mksaturnine@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="col-lg-7">
                <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                    <h3>Contactez-moi</h3>
                    <p>Remplissez ce formulaire et je vous répondrai dans les plus brefs délais.</p>

                    <form action="{{ route('envoiedemail') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="nom_prenom" class="form-control" placeholder="Nom & Prénom" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="votre@email.com" required>
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="sujet" placeholder="Sujet du message" required>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Votre message ici..." required></textarea>
                            </div>

                            <div class="col-12 text-center">
                                @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <div class="loading">Envoi en cours...</div>
                                <div class="sent-message">Votre message a bien été envoyé. Merci !</div>
                                <button type="submit" class="me-0 me-sm-2 mx-1 text-uppercase fw-bold cscc">Envoyer votre message</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

</section>
<!-- /Contact Section -->

@endsection
