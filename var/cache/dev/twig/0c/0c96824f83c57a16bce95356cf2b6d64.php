<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_b94f905cc481160448cd8371c8c5519c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "Symfony Maniac</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link rel=\"manifest\" href=\"site.webmanifest\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"img/favicon.ico\">

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/progressbar_barfiller.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/gijgo.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animated-headline.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/themify-icons.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
    
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 29
        yield "
       
    </head>
    <body>
        
        <!-- Header Start -->
        <div class=\"header-area header-transparent\">
            <div class=\"main-header \">
                <div class=\"header-bottom  header-sticky\">
                    <div class=\"container-fluid\">
                        <div class=\"row align-items-center\">
                            <!-- Logo -->
                            <div class=\"col-xl-2 col-lg-2\">
                                <div class=\"logo\">
                                    <a href=\"index.html\"><img src=\"img/logo/LogoMyUniLife.png\" width=\"150\" height=\"150\" alt=\"\"></a>
                                </div>
                            </div>
                            <div class=\"col-xl-10 col-lg-10\">
                                <div class=\"menu-wrapper d-flex align-items-center justify-content-end\">
                                    <!-- Main-menu -->
                                    <div class=\"main-menu d-none d-lg-block\">
                                        <nav>
                                            <ul id=\"navigation\">                                                                                          
                                                <li class=\"active\" ><a href=\"index.html\">Home</a></li>
                                                <li><a href=\"courses.html\">Services</a></li>
                                                <li><a href=\"about.html\">About</a></li>
                                                <li><a href=\"#\">Blog</a>
                                                    <ul class=\"submenu\">
                                                        <li><a href=\"blog.html\">Blog</a></li>
                                                        <li><a href=\"blog_details.html\">Blog Details</a></li>
                                                        <li><a href=\"elements.html\">Element</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href=\"contact.html\">Contact</a></li>
                                                <!-- Button -->
                                                <li class=\"button-header margin-left \"><a href=\"#\" class=\"btn\">Join</a></li>
                                                <li class=\"button-header\"><a href=\"login.html\" class=\"btn btn3\">Log in</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class=\"col-12\">
                                <div class=\"mobile_menu d-block d-lg-none\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        ";
        // line 81
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 82
        yield "        <!-- ? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"img/logo/loder.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <main>
        <!--? slider Area Start-->
        <section class=\"slider-area \">
            <div class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height d-flex align-items-center\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-lg-7 col-md-12\">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.2s\">MyUniLife<br> platform</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"0.4s\">Votre allié pour une vie étudiante organisée et épanouie</p>
                                    <a href=\"#\" class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.7s\">Join for Free</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        
        <!-- Courses area start -->
        <div class=\"courses-area section-padding40 fix\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"section-tittle text-center mb-55\">
                            <h2>Nos services</h2>
                        </div>
                    </div>
                </div>
                <div class=\"courses-actives\">
                    <!-- Single -->
                    <div class=\"properties pb-20\">
                        <div class=\"properties__card\">
                            <div class=\"properties__img overlay1\">
                                <a href=\"#\"><img src=\"img/gallery/featured1.png\" alt=\"\"></a>
                            </div>
                            <div class=\"properties__caption\">
                               
                                <h3>TimeMaster</h3>
                                <p>TimeMaster aide les étudiants à organiser leur emploi du temps en ajoutant et priorisant leurs tâches. Ce module inclut des rappels, un suivi de progression, et des alertes pour les échéances, garantissant une gestion du temps simple et efficace.
                                </p>
                                
                                <a href=\"#\" class=\"border-btn border-btn2\">Commencer</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class=\"properties pb-20\">
                        <div class=\"properties__card\">
                            <div class=\"properties__img overlay1\">
                                <a href=\"#\"><img src=\"img/gallery/featured2.png\" alt=\"\"></a>
                            </div>
                            <div class=\"properties__caption\">
                               
                                <h3>FunZone</h3>
                                <p>FunZone aide les étudiants à organiser leur emploi du temps en ajoutant et priorisant leurs tâches. Ce module inclut des rappels, un suivi de progression, et des alertes pour les échéances, garantissant une gestion du temps simple et efficace.
                                
                                <a href=\"#\" class=\"border-btn border-btn2\">Commencer</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class=\"properties pb-20\">
                        <div class=\"properties__card\">
                            <div class=\"properties__img overlay1\">
                                <a href=\"#\"><img src=\"img/gallery/featured3.png\" alt=\"\"></a>
                            </div>
                            <div class=\"properties__caption\">
                               
                                <h3>BrainBoost </h3>
                                <p>BrainBoost aide les étudiants à organiser leur emploi du temps en ajoutant et priorisant leurs tâches. Ce module inclut des rappels, un suivi de progression, et des alertes pour les échéances, garantissant une gestion du temps simple et efficace.
                                </p>
                               
                                <a href=\"#\" class=\"border-btn border-btn2\">Commencere</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class=\"properties pb-20\">
                        <div class=\"properties__card\">
                            <div class=\"properties__img overlay1\">
                                <a href=\"#\"><img src=\"img/gallery/featured2.png\" alt=\"\"></a>
                            </div>
                            <div class=\"properties__caption\">
                               
                                <h3>FinancePro</h3>
                                <p>FinancePro aide les étudiants à organiser leur emploi du temps en ajoutant et priorisant leurs tâches. Ce module inclut des rappels, un suivi de progression, et des alertes pour les échéances, garantissant une gestion du temps simple et efficace.
                                </p>
                                
                                <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\" class=\"border-btn border-btn2\">Commencer</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!--? About Area-1 Start -->
        <section class=\"about-area1 fix pt-10\">
            <div class=\"support-wrapper align-items-center\">
                <div class=\"left-content1\">
                    <div class=\"about-icon\">
                        <img src=\"img/icon/about.svg\" alt=\"\">
                    </div>
                    <!-- section tittle -->
                    <div class=\"section-tittle section-tittle2 mb-55\">
                        <div class=\"front-text\">
                            <h2 class=\"\">Learn new skills online with top educators</h2>
                            <p>The automated process all your website tasks. Discover tools and 
                                techniques to engage effectively with vulnerable children and young 
                            people.</p>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Techniques to engage effectively with vulnerable children and young people.</p>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Join millions of people from around the world  learning together.</p>
                        </div>
                    </div>

                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Join millions of people from around the world learning together. Online learning is as easy and natural.</p>
                        </div>
                    </div>
                </div>
                <div class=\"right-content1\">
                    <!-- img -->
                    <div class=\"right-img\">
                        <img src=\"img/gallery/about.png\" alt=\"\">

                        <div class=\"video-icon\" >
                            <a class=\"popup-video btn-icon\" href=\"https://www.youtube.com/watch?v=up68UAfH0d0\"><i class=\"fas fa-play\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? top subjects Area Start -->
        <div class=\"topic-area section-padding40\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"section-tittle text-center mb-55\">
                            <h2>Explore top subjects</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic1.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic2.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic3.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic4.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic5.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic6.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic7.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic8.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-12\">
                        <div class=\"section-tittle text-center mt-20\">
                            <a href=\"courses.html\" class=\"border-btn\">View More Subjects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top subjects End -->
        <!--? About Area-3 Start -->
        <section class=\"about-area3 fix\">
            <div class=\"support-wrapper align-items-center\">
                <div class=\"right-content3\">
                    <!-- img -->
                    <div class=\"right-img\">
                        <img src=\"img/gallery/about3.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"left-content3\">
                    <!-- section tittle -->
                    <div class=\"section-tittle section-tittle2 mb-20\">
                        <div class=\"front-text\">
                            <h2 class=\"\">Learner outcomes on courses you will take</h2>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Techniques to engage effectively with vulnerable children and young people.</p>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Join millions of people from around the world
                            learning together.</p>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Join millions of people from around the world learning together.
                            Online learning is as easy and natural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Team -->
        <section class=\"team-area section-padding40 fix\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"section-tittle text-center mb-55\">
                            <h2>Community experts</h2>
                        </div>
                    </div>
                </div>
                <div class=\"team-active\">
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team1.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. Urela</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team2.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. Uttom</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team3.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. Shakil</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team4.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. Arafat</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team3.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. saiful</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? About Area-2 Start -->
        <section class=\"about-area2 fix pb-padding\">
            <div class=\"support-wrapper align-items-center\">
                <div class=\"right-content2\">
                    <!-- img -->
                    <div class=\"right-img\">
                        <img src=\"img/gallery/about2.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"left-content2\">
                    <!-- section tittle -->
                    <div class=\"section-tittle section-tittle2 mb-20\">
                        <div class=\"front-text\">
                            <h2 class=\"\">Take the next step
                                toward your personal
                                and professional goals
                            with us.</h2>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
                            <a href=\"#\" class=\"btn\">Join now for Free</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
          <footer>
     <div class=\"footer-wrappper footer-bg\">
        <!-- Footer Start-->
        <div class=\"footer-area footer-padding\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-xl-4 col-lg-5 col-md-4 col-sm-6\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"single-footer-caption mb-30\">
                                <!-- logo -->
                                <div class=\"footer-logo mb-25\">
                                    <a href=\"index.html\"><src=\"img/logo/LogoMyUniLife.png\" alt=\"\"></a>
                                </div>
                                <div class=\"footer-tittle\">
                                    <div class=\"footer-pera\">
                                        <p>The automated process starts as soon as your clothes go into the machine.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class=\"footer-social\">
                                    <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"https://bit.ly/sai4ull\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Our solutions</h4>
                                <ul>
                                    <li><a href=\"#\">Design & creatives</a></li>
                                    <li><a href=\"#\">Telecommunication</a></li>
                                    <li><a href=\"#\">Restaurant</a></li>
                                    <li><a href=\"#\">Programing</a></li>
                                    <li><a href=\"#\">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-4 col-md-4 col-sm-6\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href=\"#\">Design & creatives</a></li>
                                    <li><a href=\"#\">Telecommunication</a></li>
                                    <li><a href=\"#\">Restaurant</a></li>
                                    <li><a href=\"#\">Programing</a></li>
                                    <li><a href=\"#\">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href=\"#\">Design & creatives</a></li>
                                    <li><a href=\"#\">Telecommunication</a></li>
                                    <li><a href=\"#\">Restaurant</a></li>
                                    <li><a href=\"#\">Programing</a></li>
                                    <li><a href=\"#\">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class=\"footer-bottom-area\">
            <div class=\"container\">
                <div class=\"footer-border\">
                    <div class=\"row d-flex align-items-center\">
                        <div class=\"col-xl-12 \">
                            <div class=\"footer-copy-right text-center\">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
      </div>
  </footer> 
        <!-- JS here -->
<script src=\"";
        // line 598
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        yield "\"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src=\"";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 601
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        yield "\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src=\"";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        yield "\"></script>
<!-- One Page, Animated-HeadLin -->
<script src=\"";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/animated.headline.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        yield "\"></script>

<!-- Date Picker -->
<script src=\"";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gijgo.min.js"), "html", null, true);
        yield "\"></script>
<!-- Nice-select, sticky -->
<script src=\"";
        // line 617
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        yield "\"></script>
<!-- Progress -->
<script src=\"";
        // line 620
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.barfiller.js"), "html", null, true);
        yield "\"></script>

<!-- counter , waypoint,Hover Direction -->
<script src=\"";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/hover-direction-snake.min.js"), "html", null, true);
        yield "\"></script>

<!-- contact js -->
<script src=\"";
        // line 629
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 630
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 633
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        yield "\"></script>

<!-- Jquery Plugins, main Jquery -->\t
<script src=\"";
        // line 636
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 637
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
 ";
        // line 638
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 641
        yield "
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 638
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 639
        yield "            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  915 => 639,  902 => 638,  880 => 81,  869 => 28,  856 => 27,  834 => 5,  821 => 641,  819 => 638,  815 => 637,  811 => 636,  805 => 633,  801 => 632,  797 => 631,  793 => 630,  789 => 629,  783 => 626,  779 => 625,  775 => 624,  771 => 623,  765 => 620,  760 => 618,  756 => 617,  751 => 615,  745 => 612,  741 => 611,  737 => 610,  732 => 608,  728 => 607,  722 => 604,  717 => 602,  713 => 601,  709 => 600,  704 => 598,  294 => 191,  183 => 82,  181 => 81,  127 => 29,  125 => 27,  120 => 25,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}Symfony Maniac</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link rel=\"manifest\" href=\"site.webmanifest\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"img/favicon.ico\">

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/slicknav.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/progressbar_barfiller.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/gijgo.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/animate.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/animated-headline.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/fontawesome-all.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/themify-icons.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/slick.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/nice-select.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    
        {% block stylesheets %}
        {% endblock %}

       
    </head>
    <body>
        
        <!-- Header Start -->
        <div class=\"header-area header-transparent\">
            <div class=\"main-header \">
                <div class=\"header-bottom  header-sticky\">
                    <div class=\"container-fluid\">
                        <div class=\"row align-items-center\">
                            <!-- Logo -->
                            <div class=\"col-xl-2 col-lg-2\">
                                <div class=\"logo\">
                                    <a href=\"index.html\"><img src=\"img/logo/LogoMyUniLife.png\" width=\"150\" height=\"150\" alt=\"\"></a>
                                </div>
                            </div>
                            <div class=\"col-xl-10 col-lg-10\">
                                <div class=\"menu-wrapper d-flex align-items-center justify-content-end\">
                                    <!-- Main-menu -->
                                    <div class=\"main-menu d-none d-lg-block\">
                                        <nav>
                                            <ul id=\"navigation\">                                                                                          
                                                <li class=\"active\" ><a href=\"index.html\">Home</a></li>
                                                <li><a href=\"courses.html\">Services</a></li>
                                                <li><a href=\"about.html\">About</a></li>
                                                <li><a href=\"#\">Blog</a>
                                                    <ul class=\"submenu\">
                                                        <li><a href=\"blog.html\">Blog</a></li>
                                                        <li><a href=\"blog_details.html\">Blog Details</a></li>
                                                        <li><a href=\"elements.html\">Element</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href=\"contact.html\">Contact</a></li>
                                                <!-- Button -->
                                                <li class=\"button-header margin-left \"><a href=\"#\" class=\"btn\">Join</a></li>
                                                <li class=\"button-header\"><a href=\"login.html\" class=\"btn btn3\">Log in</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class=\"col-12\">
                                <div class=\"mobile_menu d-block d-lg-none\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
        {% block body %}{% endblock %}
        <!-- ? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"img/logo/loder.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <main>
        <!--? slider Area Start-->
        <section class=\"slider-area \">
            <div class=\"slider-active\">
                <!-- Single Slider -->
                <div class=\"single-slider slider-height d-flex align-items-center\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-lg-7 col-md-12\">
                                <div class=\"hero__caption\">
                                    <h1 data-animation=\"fadeInLeft\" data-delay=\"0.2s\">MyUniLife<br> platform</h1>
                                    <p data-animation=\"fadeInLeft\" data-delay=\"0.4s\">Votre allié pour une vie étudiante organisée et épanouie</p>
                                    <a href=\"#\" class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.7s\">Join for Free</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        
        <!-- Courses area start -->
        <div class=\"courses-area section-padding40 fix\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"section-tittle text-center mb-55\">
                            <h2>Nos services</h2>
                        </div>
                    </div>
                </div>
                <div class=\"courses-actives\">
                    <!-- Single -->
                    <div class=\"properties pb-20\">
                        <div class=\"properties__card\">
                            <div class=\"properties__img overlay1\">
                                <a href=\"#\"><img src=\"img/gallery/featured1.png\" alt=\"\"></a>
                            </div>
                            <div class=\"properties__caption\">
                               
                                <h3>TimeMaster</h3>
                                <p>TimeMaster aide les étudiants à organiser leur emploi du temps en ajoutant et priorisant leurs tâches. Ce module inclut des rappels, un suivi de progression, et des alertes pour les échéances, garantissant une gestion du temps simple et efficace.
                                </p>
                                
                                <a href=\"#\" class=\"border-btn border-btn2\">Commencer</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class=\"properties pb-20\">
                        <div class=\"properties__card\">
                            <div class=\"properties__img overlay1\">
                                <a href=\"#\"><img src=\"img/gallery/featured2.png\" alt=\"\"></a>
                            </div>
                            <div class=\"properties__caption\">
                               
                                <h3>FunZone</h3>
                                <p>FunZone aide les étudiants à organiser leur emploi du temps en ajoutant et priorisant leurs tâches. Ce module inclut des rappels, un suivi de progression, et des alertes pour les échéances, garantissant une gestion du temps simple et efficace.
                                
                                <a href=\"#\" class=\"border-btn border-btn2\">Commencer</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class=\"properties pb-20\">
                        <div class=\"properties__card\">
                            <div class=\"properties__img overlay1\">
                                <a href=\"#\"><img src=\"img/gallery/featured3.png\" alt=\"\"></a>
                            </div>
                            <div class=\"properties__caption\">
                               
                                <h3>BrainBoost </h3>
                                <p>BrainBoost aide les étudiants à organiser leur emploi du temps en ajoutant et priorisant leurs tâches. Ce module inclut des rappels, un suivi de progression, et des alertes pour les échéances, garantissant une gestion du temps simple et efficace.
                                </p>
                               
                                <a href=\"#\" class=\"border-btn border-btn2\">Commencere</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class=\"properties pb-20\">
                        <div class=\"properties__card\">
                            <div class=\"properties__img overlay1\">
                                <a href=\"#\"><img src=\"img/gallery/featured2.png\" alt=\"\"></a>
                            </div>
                            <div class=\"properties__caption\">
                               
                                <h3>FinancePro</h3>
                                <p>FinancePro aide les étudiants à organiser leur emploi du temps en ajoutant et priorisant leurs tâches. Ce module inclut des rappels, un suivi de progression, et des alertes pour les échéances, garantissant une gestion du temps simple et efficace.
                                </p>
                                
                                <a href=\"{{ path('app_depense_index') }}\" class=\"border-btn border-btn2\">Commencer</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!--? About Area-1 Start -->
        <section class=\"about-area1 fix pt-10\">
            <div class=\"support-wrapper align-items-center\">
                <div class=\"left-content1\">
                    <div class=\"about-icon\">
                        <img src=\"img/icon/about.svg\" alt=\"\">
                    </div>
                    <!-- section tittle -->
                    <div class=\"section-tittle section-tittle2 mb-55\">
                        <div class=\"front-text\">
                            <h2 class=\"\">Learn new skills online with top educators</h2>
                            <p>The automated process all your website tasks. Discover tools and 
                                techniques to engage effectively with vulnerable children and young 
                            people.</p>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Techniques to engage effectively with vulnerable children and young people.</p>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Join millions of people from around the world  learning together.</p>
                        </div>
                    </div>

                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Join millions of people from around the world learning together. Online learning is as easy and natural.</p>
                        </div>
                    </div>
                </div>
                <div class=\"right-content1\">
                    <!-- img -->
                    <div class=\"right-img\">
                        <img src=\"img/gallery/about.png\" alt=\"\">

                        <div class=\"video-icon\" >
                            <a class=\"popup-video btn-icon\" href=\"https://www.youtube.com/watch?v=up68UAfH0d0\"><i class=\"fas fa-play\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? top subjects Area Start -->
        <div class=\"topic-area section-padding40\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"section-tittle text-center mb-55\">
                            <h2>Explore top subjects</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic1.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic2.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic3.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic4.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic5.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic6.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic7.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-topic text-center mb-30\">
                            <div class=\"topic-img\">
                                <img src=\"img/gallery/topic8.png\" alt=\"\">
                                <div class=\"topic-content-box\">
                                    <div class=\"topic-content\">
                                        <h3><a href=\"#\">Programing</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-12\">
                        <div class=\"section-tittle text-center mt-20\">
                            <a href=\"courses.html\" class=\"border-btn\">View More Subjects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top subjects End -->
        <!--? About Area-3 Start -->
        <section class=\"about-area3 fix\">
            <div class=\"support-wrapper align-items-center\">
                <div class=\"right-content3\">
                    <!-- img -->
                    <div class=\"right-img\">
                        <img src=\"img/gallery/about3.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"left-content3\">
                    <!-- section tittle -->
                    <div class=\"section-tittle section-tittle2 mb-20\">
                        <div class=\"front-text\">
                            <h2 class=\"\">Learner outcomes on courses you will take</h2>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Techniques to engage effectively with vulnerable children and young people.</p>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Join millions of people from around the world
                            learning together.</p>
                        </div>
                    </div>
                    <div class=\"single-features\">
                        <div class=\"features-icon\">
                            <img src=\"img/icon/right-icon.svg\" alt=\"\">
                        </div>
                        <div class=\"features-caption\">
                            <p>Join millions of people from around the world learning together.
                            Online learning is as easy and natural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Team -->
        <section class=\"team-area section-padding40 fix\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-7 col-lg-8\">
                        <div class=\"section-tittle text-center mb-55\">
                            <h2>Community experts</h2>
                        </div>
                    </div>
                </div>
                <div class=\"team-active\">
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team1.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. Urela</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team2.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. Uttom</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team3.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. Shakil</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team4.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. Arafat</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class=\"single-cat text-center\">
                        <div class=\"cat-icon\">
                            <img src=\"img/gallery/team3.png\" alt=\"\">
                        </div>
                        <div class=\"cat-cap\">
                            <h5><a href=\"services.html\">Mr. saiful</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? About Area-2 Start -->
        <section class=\"about-area2 fix pb-padding\">
            <div class=\"support-wrapper align-items-center\">
                <div class=\"right-content2\">
                    <!-- img -->
                    <div class=\"right-img\">
                        <img src=\"img/gallery/about2.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"left-content2\">
                    <!-- section tittle -->
                    <div class=\"section-tittle section-tittle2 mb-20\">
                        <div class=\"front-text\">
                            <h2 class=\"\">Take the next step
                                toward your personal
                                and professional goals
                            with us.</h2>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
                            <a href=\"#\" class=\"btn\">Join now for Free</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
          <footer>
     <div class=\"footer-wrappper footer-bg\">
        <!-- Footer Start-->
        <div class=\"footer-area footer-padding\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-xl-4 col-lg-5 col-md-4 col-sm-6\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"single-footer-caption mb-30\">
                                <!-- logo -->
                                <div class=\"footer-logo mb-25\">
                                    <a href=\"index.html\"><src=\"img/logo/LogoMyUniLife.png\" alt=\"\"></a>
                                </div>
                                <div class=\"footer-tittle\">
                                    <div class=\"footer-pera\">
                                        <p>The automated process starts as soon as your clothes go into the machine.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class=\"footer-social\">
                                    <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"https://bit.ly/sai4ull\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-5\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Our solutions</h4>
                                <ul>
                                    <li><a href=\"#\">Design & creatives</a></li>
                                    <li><a href=\"#\">Telecommunication</a></li>
                                    <li><a href=\"#\">Restaurant</a></li>
                                    <li><a href=\"#\">Programing</a></li>
                                    <li><a href=\"#\">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-4 col-md-4 col-sm-6\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href=\"#\">Design & creatives</a></li>
                                    <li><a href=\"#\">Telecommunication</a></li>
                                    <li><a href=\"#\">Restaurant</a></li>
                                    <li><a href=\"#\">Programing</a></li>
                                    <li><a href=\"#\">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                        <div class=\"single-footer-caption mb-50\">
                            <div class=\"footer-tittle\">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href=\"#\">Design & creatives</a></li>
                                    <li><a href=\"#\">Telecommunication</a></li>
                                    <li><a href=\"#\">Restaurant</a></li>
                                    <li><a href=\"#\">Programing</a></li>
                                    <li><a href=\"#\">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class=\"footer-bottom-area\">
            <div class=\"container\">
                <div class=\"footer-border\">
                    <div class=\"row d-flex align-items-center\">
                        <div class=\"col-xl-12 \">
                            <div class=\"footer-copy-right text-center\">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
      </div>
  </footer> 
        <!-- JS here -->
<script src=\"{{asset('js/vendor/modernizr-3.5.0.min.js')}}\"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src=\"{{asset('js/vendor/jquery-1.12.4.min.js')}}\"></script>
<script src=\"{{asset('js/popper.min.js')}}\"></script>
<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
<!-- Jquery Mobile Menu -->
<script src=\"{{asset('js/jquery.slicknav.min.js')}}\"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
<script src=\"{{asset('js/slick.min.js')}}\"></script>
<!-- One Page, Animated-HeadLin -->
<script src=\"{{asset('js/wow.min.js')}}\"></script>
<script src=\"{{asset('js/animated.headline.js')}}\"></script>
<script src=\"{{asset('js/jquery.magnific-popup.js')}}\"></script>

<!-- Date Picker -->
<script src=\"{{asset('js/gijgo.min.js')}}\"></script>
<!-- Nice-select, sticky -->
<script src=\"{{asset('js/jquery.nice-select.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.sticky.js')}}\"></script>
<!-- Progress -->
<script src=\"{{asset('js/jquery.barfiller.js')}}\"></script>

<!-- counter , waypoint,Hover Direction -->
<script src=\"{{asset('js/jquery.counterup.min.js')}}\"></script>
<script src=\"{{asset('js/waypoints.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.countdown.min.js')}}\"></script>
<script src=\"{{asset('js/hover-direction-snake.min.js')}}\"></script>

<!-- contact js -->
<script src=\"{{asset('js/contact.js')}}\"></script>
<script src=\"{{asset('js/jquery.form.js')}}\"></script>
<script src=\"{{asset('js/jquery.validate.min.js')}}\"></script>
<script src=\"{{asset('js/mail-script.js')}}\"></script>
<script src=\"{{asset('js/jquery.ajaxchimp.min.js')}}\"></script>

<!-- Jquery Plugins, main Jquery -->\t
<script src=\"{{asset('js/plugins.js')}}\"></script>
<script src=\"{{asset('js/main.js')}}\"></script>
 {% block javascripts %}
            
        {% endblock %}

    </body>
</html>", "base.html.twig", "C:\\Users\\USER\\ProjetMyUniLife\\templates\\base.html.twig");
    }
}
