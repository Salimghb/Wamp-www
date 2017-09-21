<?php

/* SalimPlateformeBundle::layout.html.twig */
class __TwigTemplate_0fd741f34acd0149305e6f52f824989b1fc49e609abb3ba85df9e60ea4b2c13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SalimPlateformeBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'salimplateforme_body' => array($this, 'block_salimplateforme_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68f61e7601264b87626379ddb2404bacc9f417f7ba66ad36de426e5bbf3b9c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f61e7601264b87626379ddb2404bacc9f417f7ba66ad36de426e5bbf3b9c5f->enter($__internal_68f61e7601264b87626379ddb2404bacc9f417f7ba66ad36de426e5bbf3b9c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $__internal_0e8766d8943464ef93c6d6bcf8db2e20eb7689ed1ace721a3957c7e563c4546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8766d8943464ef93c6d6bcf8db2e20eb7689ed1ace721a3957c7e563c4546e->enter($__internal_0e8766d8943464ef93c6d6bcf8db2e20eb7689ed1ace721a3957c7e563c4546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f61e7601264b87626379ddb2404bacc9f417f7ba66ad36de426e5bbf3b9c5f->leave($__internal_68f61e7601264b87626379ddb2404bacc9f417f7ba66ad36de426e5bbf3b9c5f_prof);

        
        $__internal_0e8766d8943464ef93c6d6bcf8db2e20eb7689ed1ace721a3957c7e563c4546e->leave($__internal_0e8766d8943464ef93c6d6bcf8db2e20eb7689ed1ace721a3957c7e563c4546e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d57ebd86c322944467dc45ebf804f17e9bae397fedef636c0b56bceac06490e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d57ebd86c322944467dc45ebf804f17e9bae397fedef636c0b56bceac06490e->enter($__internal_5d57ebd86c322944467dc45ebf804f17e9bae397fedef636c0b56bceac06490e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8054575f252f36cf52c68fcc55e35be1cc336e89a6fba753ce4e239030153916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8054575f252f36cf52c68fcc55e35be1cc336e89a6fba753ce4e239030153916->enter($__internal_8054575f252f36cf52c68fcc55e35be1cc336e89a6fba753ce4e239030153916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8054575f252f36cf52c68fcc55e35be1cc336e89a6fba753ce4e239030153916->leave($__internal_8054575f252f36cf52c68fcc55e35be1cc336e89a6fba753ce4e239030153916_prof);

        
        $__internal_5d57ebd86c322944467dc45ebf804f17e9bae397fedef636c0b56bceac06490e->leave($__internal_5d57ebd86c322944467dc45ebf804f17e9bae397fedef636c0b56bceac06490e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_704bef1d0b0bd3ce9ae8a8ba199fc5008532871d34d2f2ff6196fd643a7fecfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704bef1d0b0bd3ce9ae8a8ba199fc5008532871d34d2f2ff6196fd643a7fecfd->enter($__internal_704bef1d0b0bd3ce9ae8a8ba199fc5008532871d34d2f2ff6196fd643a7fecfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d1c98070ed5ceafb8bd5a9ba982cc6ec79672c159893dfbda41e63ae9d9edb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1c98070ed5ceafb8bd5a9ba982cc6ec79672c159893dfbda41e63ae9d9edb4->enter($__internal_1d1c98070ed5ceafb8bd5a9ba982cc6ec79672c159893dfbda41e63ae9d9edb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t";
        // line 10
        echo "\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 14
        $this->displayBlock('salimplateforme_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_1d1c98070ed5ceafb8bd5a9ba982cc6ec79672c159893dfbda41e63ae9d9edb4->leave($__internal_1d1c98070ed5ceafb8bd5a9ba982cc6ec79672c159893dfbda41e63ae9d9edb4_prof);

        
        $__internal_704bef1d0b0bd3ce9ae8a8ba199fc5008532871d34d2f2ff6196fd643a7fecfd->leave($__internal_704bef1d0b0bd3ce9ae8a8ba199fc5008532871d34d2f2ff6196fd643a7fecfd_prof);

    }

    // line 14
    public function block_salimplateforme_body($context, array $blocks = array())
    {
        $__internal_b706ccf37048c861eca8a9234332ed0de9ac5eff6efebd47fc2ce46a0649d73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b706ccf37048c861eca8a9234332ed0de9ac5eff6efebd47fc2ce46a0649d73b->enter($__internal_b706ccf37048c861eca8a9234332ed0de9ac5eff6efebd47fc2ce46a0649d73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        $__internal_9c6d16199951d6967b4db0adbb49a2e30571b306b4c6388b710238a41cdfce1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6d16199951d6967b4db0adbb49a2e30571b306b4c6388b710238a41cdfce1e->enter($__internal_9c6d16199951d6967b4db0adbb49a2e30571b306b4c6388b710238a41cdfce1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "salimplateforme_body"));

        // line 15
        echo "\t\t";
        // line 16
        echo "\t";
        
        $__internal_9c6d16199951d6967b4db0adbb49a2e30571b306b4c6388b710238a41cdfce1e->leave($__internal_9c6d16199951d6967b4db0adbb49a2e30571b306b4c6388b710238a41cdfce1e_prof);

        
        $__internal_b706ccf37048c861eca8a9234332ed0de9ac5eff6efebd47fc2ce46a0649d73b->leave($__internal_b706ccf37048c861eca8a9234332ed0de9ac5eff6efebd47fc2ce46a0649d73b_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 16,  104 => 15,  95 => 14,  84 => 17,  82 => 14,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layout.html.twig' %}

{% block title %}
\tAnnonces - {{ parent() }}
{% endblock %}

{% block body %}

\t{# Titre commun à toutes les pages du bundle #}
\t<h1>Annonces</h1>

\t<hr>

\t{% block salimplateforme_body %}
\t\t{# Bloc que les vues du bundle pourront remplir #}
\t{% endblock %}

{% endblock %}

", "SalimPlateformeBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/layout.html.twig");
    }
}
