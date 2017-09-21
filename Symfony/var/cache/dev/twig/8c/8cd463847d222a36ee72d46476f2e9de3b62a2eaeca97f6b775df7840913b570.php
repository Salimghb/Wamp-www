<?php

/* ::layout.html.twig */
class __TwigTemplate_aca7b31c86e5ce5ac8ca6c271ae7b7e8c16e9a0cbac542daecde434708ebc760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9417331337c66d4467988db895d685cccc886b2b8d3d74f09c3baa844f661bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9417331337c66d4467988db895d685cccc886b2b8d3d74f09c3baa844f661bb8->enter($__internal_9417331337c66d4467988db895d685cccc886b2b8d3d74f09c3baa844f661bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_b3814e1f1f17e9d1d865883554f1684f852bc3a3c471758f9d50f7e02f8c4d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3814e1f1f17e9d1d865883554f1684f852bc3a3c471758f9d50f7e02f8c4d67->enter($__internal_b3814e1f1f17e9d1d865883554f1684f852bc3a3c471758f9d50f7e02f8c4d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1>Ma plateforme d'annonces</h1>
\t\t\t<p>
\t\t\t\tCe projet est propulsé par Symfony grace aux cours d'OpenClassroom
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony\" class=\"btn btn-primary btn-lg\">
\t\t\t\t\tLien OpenClassroom
\t\t\t\t</a>

\t\t\t</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SalimPlateformeBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "\t\t\t</div>
\t\t</div>
\t\t<hr>

\t\t<footer>
\t\t\t<p>
\t\t\t\tThe sky is the limit ! ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.
\t\t\t</p>
\t\t</footer>



\t</div>
\t";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
</body>
</html>";
        
        $__internal_9417331337c66d4467988db895d685cccc886b2b8d3d74f09c3baa844f661bb8->leave($__internal_9417331337c66d4467988db895d685cccc886b2b8d3d74f09c3baa844f661bb8_prof);

        
        $__internal_b3814e1f1f17e9d1d865883554f1684f852bc3a3c471758f9d50f7e02f8c4d67->leave($__internal_b3814e1f1f17e9d1d865883554f1684f852bc3a3c471758f9d50f7e02f8c4d67_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e3194a1304582199737eece2de91546e6885ccadabdd2023735ec8a31e1efaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3194a1304582199737eece2de91546e6885ccadabdd2023735ec8a31e1efaa->enter($__internal_6e3194a1304582199737eece2de91546e6885ccadabdd2023735ec8a31e1efaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b6838c3864ea1f2b14875a0178e82b74727377043588a47fc44197ee764fed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6838c3864ea1f2b14875a0178e82b74727377043588a47fc44197ee764fed8->enter($__internal_3b6838c3864ea1f2b14875a0178e82b74727377043588a47fc44197ee764fed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Plateforme de Salim";
        
        $__internal_3b6838c3864ea1f2b14875a0178e82b74727377043588a47fc44197ee764fed8->leave($__internal_3b6838c3864ea1f2b14875a0178e82b74727377043588a47fc44197ee764fed8_prof);

        
        $__internal_6e3194a1304582199737eece2de91546e6885ccadabdd2023735ec8a31e1efaa->leave($__internal_6e3194a1304582199737eece2de91546e6885ccadabdd2023735ec8a31e1efaa_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d1e43ee41d2816221e119d0e394f12940ab0a73e682a759ae361c4492f9621c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1e43ee41d2816221e119d0e394f12940ab0a73e682a759ae361c4492f9621c->enter($__internal_8d1e43ee41d2816221e119d0e394f12940ab0a73e682a759ae361c4492f9621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_27c08c4b0c4e147e2ec73158711360db3f4a27c13071a5f7264b36bff061b739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c08c4b0c4e147e2ec73158711360db3f4a27c13071a5f7264b36bff061b739->enter($__internal_27c08c4b0c4e147e2ec73158711360db3f4a27c13071a5f7264b36bff061b739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_27c08c4b0c4e147e2ec73158711360db3f4a27c13071a5f7264b36bff061b739->leave($__internal_27c08c4b0c4e147e2ec73158711360db3f4a27c13071a5f7264b36bff061b739_prof);

        
        $__internal_8d1e43ee41d2816221e119d0e394f12940ab0a73e682a759ae361c4492f9621c->leave($__internal_8d1e43ee41d2816221e119d0e394f12940ab0a73e682a759ae361c4492f9621c_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6b1cebb2f5f2e3f21bfe997ce6e43ad21eaf1c120e100b20ada3749f0c652b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b1cebb2f5f2e3f21bfe997ce6e43ad21eaf1c120e100b20ada3749f0c652b7->enter($__internal_d6b1cebb2f5f2e3f21bfe997ce6e43ad21eaf1c120e100b20ada3749f0c652b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_250908ad3cb6d42d99675ccd83056c10cb5d3296e510bf917227306079b32994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250908ad3cb6d42d99675ccd83056c10cb5d3296e510bf917227306079b32994->enter($__internal_250908ad3cb6d42d99675ccd83056c10cb5d3296e510bf917227306079b32994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "\t\t\t\t";
        
        $__internal_250908ad3cb6d42d99675ccd83056c10cb5d3296e510bf917227306079b32994->leave($__internal_250908ad3cb6d42d99675ccd83056c10cb5d3296e510bf917227306079b32994_prof);

        
        $__internal_d6b1cebb2f5f2e3f21bfe997ce6e43ad21eaf1c120e100b20ada3749f0c652b7->leave($__internal_d6b1cebb2f5f2e3f21bfe997ce6e43ad21eaf1c120e100b20ada3749f0c652b7_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_136370e725fb14e7bb5fff0666e17dc9a9297a8397bbbdcfb9d1a6d44f5a3774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136370e725fb14e7bb5fff0666e17dc9a9297a8397bbbdcfb9d1a6d44f5a3774->enter($__internal_136370e725fb14e7bb5fff0666e17dc9a9297a8397bbbdcfb9d1a6d44f5a3774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ef3ef8db42613302ab7be8d2274f08d36fa2a7d613705e0a2ca97692245acd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef3ef8db42613302ab7be8d2274f08d36fa2a7d613705e0a2ca97692245acd0->enter($__internal_8ef3ef8db42613302ab7be8d2274f08d36fa2a7d613705e0a2ca97692245acd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t\t";
        // line 60
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_8ef3ef8db42613302ab7be8d2274f08d36fa2a7d613705e0a2ca97692245acd0->leave($__internal_8ef3ef8db42613302ab7be8d2274f08d36fa2a7d613705e0a2ca97692245acd0_prof);

        
        $__internal_136370e725fb14e7bb5fff0666e17dc9a9297a8397bbbdcfb9d1a6d44f5a3774->leave($__internal_136370e725fb14e7bb5fff0666e17dc9a9297a8397bbbdcfb9d1a6d44f5a3774_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 60,  187 => 59,  178 => 58,  168 => 44,  159 => 43,  148 => 11,  146 => 10,  137 => 9,  119 => 7,  107 => 63,  105 => 58,  95 => 51,  87 => 45,  85 => 43,  79 => 40,  72 => 36,  66 => 33,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}Plateforme de Salim{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>
<body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1>Ma plateforme d'annonces</h1>
\t\t\t<p>
\t\t\t\tCe projet est propulsé par Symfony grace aux cours d'OpenClassroom
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony\" class=\"btn btn-primary btn-lg\">
\t\t\t\t\tLien OpenClassroom
\t\t\t\t</a>

\t\t\t</p>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('oc_platform_home')}}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('oc_platform_add')}}\">Ajouter une annonce</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t{{ render(controller(\"SalimPlateformeBundle:Advert:menu\", {'limit': 3})) }}
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t{% block body %}
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>
\t\t<hr>

\t\t<footer>
\t\t\t<p>
\t\t\t\tThe sky is the limit ! {{'now'|date(\"Y\")}} and beyond.
\t\t\t</p>
\t\t</footer>



\t</div>
\t{% block javascripts %}
\t\t{#Fonctionnalités Javascript BootStrap#}
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t{% endblock %}

</body>
</html>", "::layout.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/layout.html.twig");
    }
}
