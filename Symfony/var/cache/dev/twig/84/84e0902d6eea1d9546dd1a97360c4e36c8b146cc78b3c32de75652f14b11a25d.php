<?php

/* SalimPlateformeBundle:Advert:delete.html.twig */
class __TwigTemplate_76b05716b86ed8e33a174abb7d56f26a1678d60647ef156f8719570e0d7dd90a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SalimPlateformeBundle::layout.html.twig", "SalimPlateformeBundle:Advert:delete.html.twig", 1);
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
        $__internal_df62300ac16955912fada364f2409463f430f841ecf6420489e8e8b4426552bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df62300ac16955912fada364f2409463f430f841ecf6420489e8e8b4426552bd->enter($__internal_df62300ac16955912fada364f2409463f430f841ecf6420489e8e8b4426552bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:delete.html.twig"));

        $__internal_cfb0ffa96bb125c44a31ad264d47c700bf0df4fac745f134f6d790336d0244e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb0ffa96bb125c44a31ad264d47c700bf0df4fac745f134f6d790336d0244e7->enter($__internal_cfb0ffa96bb125c44a31ad264d47c700bf0df4fac745f134f6d790336d0244e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df62300ac16955912fada364f2409463f430f841ecf6420489e8e8b4426552bd->leave($__internal_df62300ac16955912fada364f2409463f430f841ecf6420489e8e8b4426552bd_prof);

        
        $__internal_cfb0ffa96bb125c44a31ad264d47c700bf0df4fac745f134f6d790336d0244e7->leave($__internal_cfb0ffa96bb125c44a31ad264d47c700bf0df4fac745f134f6d790336d0244e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_698955b40007318a17d5a7e07fa0590389239ac5f7cfd8bf87f919b00431d502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698955b40007318a17d5a7e07fa0590389239ac5f7cfd8bf87f919b00431d502->enter($__internal_698955b40007318a17d5a7e07fa0590389239ac5f7cfd8bf87f919b00431d502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10cc03a707c7184c72e59d01ae14106d36c6b897026f8cafc5e1ca660270f1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cc03a707c7184c72e59d01ae14106d36c6b897026f8cafc5e1ca660270f1db->enter($__internal_10cc03a707c7184c72e59d01ae14106d36c6b897026f8cafc5e1ca660270f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tSuppression d'annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_10cc03a707c7184c72e59d01ae14106d36c6b897026f8cafc5e1ca660270f1db->leave($__internal_10cc03a707c7184c72e59d01ae14106d36c6b897026f8cafc5e1ca660270f1db_prof);

        
        $__internal_698955b40007318a17d5a7e07fa0590389239ac5f7cfd8bf87f919b00431d502->leave($__internal_698955b40007318a17d5a7e07fa0590389239ac5f7cfd8bf87f919b00431d502_prof);

    }

    // line 7
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_7bd6b0805f7da905262df5891729c9682712b93c00da5ecc1082f5d6cc6c28da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd6b0805f7da905262df5891729c9682712b93c00da5ecc1082f5d6cc6c28da->enter($__internal_7bd6b0805f7da905262df5891729c9682712b93c00da5ecc1082f5d6cc6c28da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_c8157f1353da1eeb50f14a419542eceffdebf86812b4057d92c3661bc81c2693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8157f1353da1eeb50f14a419542eceffdebf86812b4057d92c3661bc81c2693->enter($__internal_c8157f1353da1eeb50f14a419542eceffdebf86812b4057d92c3661bc81c2693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 8
        echo "
\t<h2>Supprimer une annonce</h2>

\t<p>
\t\tEtes-vous certain de vouloir supprimer l'annonce \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
\t</p>

\t";
        // line 16
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t\t";
        // line 22
        echo "\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
\t\t";
        // line 24
        echo "\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>

";
        
        $__internal_c8157f1353da1eeb50f14a419542eceffdebf86812b4057d92c3661bc81c2693->leave($__internal_c8157f1353da1eeb50f14a419542eceffdebf86812b4057d92c3661bc81c2693_prof);

        
        $__internal_7bd6b0805f7da905262df5891729c9682712b93c00da5ecc1082f5d6cc6c28da->leave($__internal_7bd6b0805f7da905262df5891729c9682712b93c00da5ecc1082f5d6cc6c28da_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 22,  89 => 17,  84 => 16,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\tSuppression d'annonce - {{ parent() }}
{% endblock %}

{% block salimplateforme_body %}

\t<h2>Supprimer une annonce</h2>

\t<p>
\t\tEtes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
\t</p>

\t{# On met l'id de l'annonce dans la route de l'action du formulaire #}
\t<form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
\t\t<a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t\t{# Ici j'ai écrit le bouton de soumission à la main #}
\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
\t\t{# Ceci va générer le champ CSRF #}
\t\t{{ form_rest(form) }}
\t</form>

{% endblock %}


", "SalimPlateformeBundle:Advert:delete.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/delete.html.twig");
    }
}
