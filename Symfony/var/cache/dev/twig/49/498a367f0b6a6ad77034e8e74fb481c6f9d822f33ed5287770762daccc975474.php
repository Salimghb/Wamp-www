<?php

/* SalimPlateformeBundle:Advert:index.html.twig */
class __TwigTemplate_f15b7c8df0b9a8830b464c49c294efe662d5d9c0ff840278e8a7f3eb13279960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'salimplateforme_body' => array($this, 'block_salimplateforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SalimPlateformeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf6c6806713738082f6b2860dcc66a3a290707fbd0dae2b92d485dcb8a317270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6c6806713738082f6b2860dcc66a3a290707fbd0dae2b92d485dcb8a317270->enter($__internal_bf6c6806713738082f6b2860dcc66a3a290707fbd0dae2b92d485dcb8a317270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $__internal_f398b672f2cb35a1c1b12c6e2a6560ff119091cc5c7074f4ea69e368d52f930b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f398b672f2cb35a1c1b12c6e2a6560ff119091cc5c7074f4ea69e368d52f930b->enter($__internal_f398b672f2cb35a1c1b12c6e2a6560ff119091cc5c7074f4ea69e368d52f930b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf6c6806713738082f6b2860dcc66a3a290707fbd0dae2b92d485dcb8a317270->leave($__internal_bf6c6806713738082f6b2860dcc66a3a290707fbd0dae2b92d485dcb8a317270_prof);

        
        $__internal_f398b672f2cb35a1c1b12c6e2a6560ff119091cc5c7074f4ea69e368d52f930b->leave($__internal_f398b672f2cb35a1c1b12c6e2a6560ff119091cc5c7074f4ea69e368d52f930b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12a2053502d27476899170da2798ead123ebda400ba8ad6de60e7a7b97baac3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a2053502d27476899170da2798ead123ebda400ba8ad6de60e7a7b97baac3c->enter($__internal_12a2053502d27476899170da2798ead123ebda400ba8ad6de60e7a7b97baac3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13a8be1bf643149c685a2e03671917657316f1652a82401b955c6dd15650274d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a8be1bf643149c685a2e03671917657316f1652a82401b955c6dd15650274d->enter($__internal_13a8be1bf643149c685a2e03671917657316f1652a82401b955c6dd15650274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_13a8be1bf643149c685a2e03671917657316f1652a82401b955c6dd15650274d->leave($__internal_13a8be1bf643149c685a2e03671917657316f1652a82401b955c6dd15650274d_prof);

        
        $__internal_12a2053502d27476899170da2798ead123ebda400ba8ad6de60e7a7b97baac3c->leave($__internal_12a2053502d27476899170da2798ead123ebda400ba8ad6de60e7a7b97baac3c_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_a987110817ccfeddac5b0ee7de136de5a477522a49c51dda0a0e005b1fc79381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a987110817ccfeddac5b0ee7de136de5a477522a49c51dda0a0e005b1fc79381->enter($__internal_a987110817ccfeddac5b0ee7de136de5a477522a49c51dda0a0e005b1fc79381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_1b2665182724054cf7079dbe0ff1a319006ecaa970659bd422db8f79160ca5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2665182724054cf7079dbe0ff1a319006ecaa970659bd422db8f79160ca5fb->enter($__internal_1b2665182724054cf7079dbe0ff1a319006ecaa970659bd422db8f79160ca5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "\t<h2>Liste des annonces</h2>
\t<ul>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 11
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t\tpar ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo ".

\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "\t\t\t<li>Aucune annonce n'est disponible pour le moment!</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</ul>
\t<ul class=\"pagination\">
\t\t";
        // line 25
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "\t\t\t<li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>

";
        
        $__internal_1b2665182724054cf7079dbe0ff1a319006ecaa970659bd422db8f79160ca5fb->leave($__internal_1b2665182724054cf7079dbe0ff1a319006ecaa970659bd422db8f79160ca5fb_prof);

        
        $__internal_a987110817ccfeddac5b0ee7de136de5a477522a49c51dda0a0e005b1fc79381->leave($__internal_a987110817ccfeddac5b0ee7de136de5a477522a49c51dda0a0e005b1fc79381_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  129 => 27,  122 => 26,  117 => 25,  113 => 22,  106 => 20,  97 => 16,  93 => 15,  88 => 13,  84 => 12,  81 => 11,  76 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SalimPlateformeBundle::layout.html.twig\" %}

{% block title %}
\tAccueil - {{parent()}}
{% endblock %}

{% block salimplateforme_body %}
\t<h2>Liste des annonces</h2>
\t<ul>
\t\t{% for advert in listAdverts %}
\t\t\t<li>
\t\t\t\t<a href=\"{{path('oc_platform_view',{'id':advert.id})}}\">
\t\t\t\t\t{{advert.title}}
\t\t\t\t</a>
\t\t\t\tpar {{advert.author}},
\t\t\t\tle {{advert.date|date('d/m/Y')}}.

\t\t\t</li>
\t\t{% else %}
\t\t\t<li>Aucune annonce n'est disponible pour le moment!</li>
\t\t{% endfor %}
\t</ul>
\t<ul class=\"pagination\">
\t\t{# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
\t\t{% for p in range(1, nbPages) %}
\t\t\t<li{% if p == page %} class=\"active\"{% endif %}>
\t\t\t<a href=\"{{ path('oc_platform_home', {'page': p}) }}\">{{ p }}</a>
\t\t</li>
\t{% endfor %}
</ul>

{% endblock %}", "SalimPlateformeBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/index.html.twig");
    }
}
