<?php

/* SalimPlateformeBundle:Advert:form.html.twig */
class __TwigTemplate_7f5521d09926f6037c15533fea84d993143bdd613432d785e4ad2f1657c570db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00e7e3581200e6232afb9109ce19be6fac2e0842a65418a7f02f3bc0f56e7e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e7e3581200e6232afb9109ce19be6fac2e0842a65418a7f02f3bc0f56e7e17->enter($__internal_00e7e3581200e6232afb9109ce19be6fac2e0842a65418a7f02f3bc0f56e7e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:form.html.twig"));

        $__internal_433355637ada75c504466a986115f0d6b68fb1fcc4adb18dc8e1d999658a7dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433355637ada75c504466a986115f0d6b68fb1fcc4adb18dc8e1d999658a7dad->enter($__internal_433355637ada75c504466a986115f0d6b68fb1fcc4adb18dc8e1d999658a7dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'annonce</h3>

<div class=\"well\">
\t";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>

";
        
        $__internal_00e7e3581200e6232afb9109ce19be6fac2e0842a65418a7f02f3bc0f56e7e17->leave($__internal_00e7e3581200e6232afb9109ce19be6fac2e0842a65418a7f02f3bc0f56e7e17_prof);

        
        $__internal_433355637ada75c504466a986115f0d6b68fb1fcc4adb18dc8e1d999658a7dad->leave($__internal_433355637ada75c504466a986115f0d6b68fb1fcc4adb18dc8e1d999658a7dad_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Formulaire d'annonce</h3>

<div class=\"well\">
\t{{form(form)}}
</div>

", "SalimPlateformeBundle:Advert:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle/Resources/views/Advert/form.html.twig");
    }
}
