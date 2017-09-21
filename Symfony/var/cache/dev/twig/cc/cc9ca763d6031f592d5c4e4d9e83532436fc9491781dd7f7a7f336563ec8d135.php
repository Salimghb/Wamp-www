<?php

/* SalimPlateformeBundle:Advert:add.html.twig */
class __TwigTemplate_b1ecd4ddb158d629dfb26f41ff45ff51217a68c308d68f48472c23c85505f257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:add.html.twig", 1);
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
        $__internal_b471079880c9c9c7948cd2311145eee8a10b7ab2cee769ccaa2a5487d3aff2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b471079880c9c9c7948cd2311145eee8a10b7ab2cee769ccaa2a5487d3aff2b3->enter($__internal_b471079880c9c9c7948cd2311145eee8a10b7ab2cee769ccaa2a5487d3aff2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $__internal_b51c2b222c27049b604cbc6ec36aa1feed74d582a60f011eb84cfa923bc58c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51c2b222c27049b604cbc6ec36aa1feed74d582a60f011eb84cfa923bc58c30->enter($__internal_b51c2b222c27049b604cbc6ec36aa1feed74d582a60f011eb84cfa923bc58c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b471079880c9c9c7948cd2311145eee8a10b7ab2cee769ccaa2a5487d3aff2b3->leave($__internal_b471079880c9c9c7948cd2311145eee8a10b7ab2cee769ccaa2a5487d3aff2b3_prof);

        
        $__internal_b51c2b222c27049b604cbc6ec36aa1feed74d582a60f011eb84cfa923bc58c30->leave($__internal_b51c2b222c27049b604cbc6ec36aa1feed74d582a60f011eb84cfa923bc58c30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39a1a723d0fe1ed71a6b587bfd479ba90ef5c510b880ecf1cbdfb072a32a325b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a1a723d0fe1ed71a6b587bfd479ba90ef5c510b880ecf1cbdfb072a32a325b->enter($__internal_39a1a723d0fe1ed71a6b587bfd479ba90ef5c510b880ecf1cbdfb072a32a325b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28805f63ed02e164475e805deab7e5d16c30e2d9258b5e974c6782c2e584485b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28805f63ed02e164475e805deab7e5d16c30e2d9258b5e974c6782c2e584485b->enter($__internal_28805f63ed02e164475e805deab7e5d16c30e2d9258b5e974c6782c2e584485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_28805f63ed02e164475e805deab7e5d16c30e2d9258b5e974c6782c2e584485b->leave($__internal_28805f63ed02e164475e805deab7e5d16c30e2d9258b5e974c6782c2e584485b_prof);

        
        $__internal_39a1a723d0fe1ed71a6b587bfd479ba90ef5c510b880ecf1cbdfb072a32a325b->leave($__internal_39a1a723d0fe1ed71a6b587bfd479ba90ef5c510b880ecf1cbdfb072a32a325b_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_e64578423e5a8fff42b139210cd83aba882525ee3867f2e3b103346e8b8f64e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64578423e5a8fff42b139210cd83aba882525ee3867f2e3b103346e8b8f64e8->enter($__internal_e64578423e5a8fff42b139210cd83aba882525ee3867f2e3b103346e8b8f64e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_091e89347c24358aa64a86c7bbdb342a460ae8d0b9322bfc87bf7ffa219dfc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091e89347c24358aa64a86c7bbdb342a460ae8d0b9322bfc87bf7ffa219dfc6a->enter($__internal_091e89347c24358aa64a86c7bbdb342a460ae8d0b9322bfc87bf7ffa219dfc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "
\t<h2>Ajouter une annonce</h2>

\t";
        // line 11
        echo twig_include($this->env, $context, "SalimPlateformeBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tAttention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire.
\t</p>

\t<p>
\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'accueil

\t\t</a>
\t</p>

";
        
        $__internal_091e89347c24358aa64a86c7bbdb342a460ae8d0b9322bfc87bf7ffa219dfc6a->leave($__internal_091e89347c24358aa64a86c7bbdb342a460ae8d0b9322bfc87bf7ffa219dfc6a_prof);

        
        $__internal_e64578423e5a8fff42b139210cd83aba882525ee3867f2e3b103346e8b8f64e8->leave($__internal_e64578423e5a8fff42b139210cd83aba882525ee3867f2e3b103346e8b8f64e8_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SalimPlateformeBundle::layout.html.twig' %}

{% block title %}
\tAjouter une annonce - {{parent()}}
{% endblock %}

{% block salimplateforme_body %}

\t<h2>Ajouter une annonce</h2>

\t{{ include(\"SalimPlateformeBundle:Advert:form.html.twig\") }}

\t<p>
\t\tAttention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire.
\t</p>

\t<p>
\t\t<a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">

\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'accueil

\t\t</a>
\t</p>

{% endblock %}", "SalimPlateformeBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/add.html.twig");
    }
}
