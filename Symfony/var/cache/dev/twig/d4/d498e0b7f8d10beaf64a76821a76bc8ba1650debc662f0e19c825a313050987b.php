<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caeb5b21f1b74d0f3a3a3c5eac5fc5e25440677b1920e7e03f64045fd943ea8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caeb5b21f1b74d0f3a3a3c5eac5fc5e25440677b1920e7e03f64045fd943ea8e->enter($__internal_caeb5b21f1b74d0f3a3a3c5eac5fc5e25440677b1920e7e03f64045fd943ea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_55b45f5bb12cf973cdbd34a17ba03b442230a87965feb6b2255427d2daf073a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b45f5bb12cf973cdbd34a17ba03b442230a87965feb6b2255427d2daf073a3->enter($__internal_55b45f5bb12cf973cdbd34a17ba03b442230a87965feb6b2255427d2daf073a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caeb5b21f1b74d0f3a3a3c5eac5fc5e25440677b1920e7e03f64045fd943ea8e->leave($__internal_caeb5b21f1b74d0f3a3a3c5eac5fc5e25440677b1920e7e03f64045fd943ea8e_prof);

        
        $__internal_55b45f5bb12cf973cdbd34a17ba03b442230a87965feb6b2255427d2daf073a3->leave($__internal_55b45f5bb12cf973cdbd34a17ba03b442230a87965feb6b2255427d2daf073a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c2fdb457c295bf92d6cdbc8e56cafde41bf1697cb48b72cfc3483e46361aca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2fdb457c295bf92d6cdbc8e56cafde41bf1697cb48b72cfc3483e46361aca2->enter($__internal_5c2fdb457c295bf92d6cdbc8e56cafde41bf1697cb48b72cfc3483e46361aca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c0103f99f5574d7673ac3c7b328dc00af79f7cc0267278a3d60567dcfd7f46ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0103f99f5574d7673ac3c7b328dc00af79f7cc0267278a3d60567dcfd7f46ec->enter($__internal_c0103f99f5574d7673ac3c7b328dc00af79f7cc0267278a3d60567dcfd7f46ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c0103f99f5574d7673ac3c7b328dc00af79f7cc0267278a3d60567dcfd7f46ec->leave($__internal_c0103f99f5574d7673ac3c7b328dc00af79f7cc0267278a3d60567dcfd7f46ec_prof);

        
        $__internal_5c2fdb457c295bf92d6cdbc8e56cafde41bf1697cb48b72cfc3483e46361aca2->leave($__internal_5c2fdb457c295bf92d6cdbc8e56cafde41bf1697cb48b72cfc3483e46361aca2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ac0596811b09b7084445dde15b6964080570d46e4e77977728fcef96617464f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac0596811b09b7084445dde15b6964080570d46e4e77977728fcef96617464f->enter($__internal_4ac0596811b09b7084445dde15b6964080570d46e4e77977728fcef96617464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8191253852945ddc4130cb9d8838765c4c245fc2cbaa4e0cb5d31e84b7cfa5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8191253852945ddc4130cb9d8838765c4c245fc2cbaa4e0cb5d31e84b7cfa5de->enter($__internal_8191253852945ddc4130cb9d8838765c4c245fc2cbaa4e0cb5d31e84b7cfa5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8191253852945ddc4130cb9d8838765c4c245fc2cbaa4e0cb5d31e84b7cfa5de->leave($__internal_8191253852945ddc4130cb9d8838765c4c245fc2cbaa4e0cb5d31e84b7cfa5de_prof);

        
        $__internal_4ac0596811b09b7084445dde15b6964080570d46e4e77977728fcef96617464f->leave($__internal_4ac0596811b09b7084445dde15b6964080570d46e4e77977728fcef96617464f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e2db2e22df28e747951b4df7017a1ebf900edf9bff0bed6f33f7e51eafec5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2db2e22df28e747951b4df7017a1ebf900edf9bff0bed6f33f7e51eafec5f1->enter($__internal_1e2db2e22df28e747951b4df7017a1ebf900edf9bff0bed6f33f7e51eafec5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3f3b071d3976f3380778f5aa2f20b239e52d0eaf184b1d2feace5b14d5b1c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f3b071d3976f3380778f5aa2f20b239e52d0eaf184b1d2feace5b14d5b1c62->enter($__internal_c3f3b071d3976f3380778f5aa2f20b239e52d0eaf184b1d2feace5b14d5b1c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c3f3b071d3976f3380778f5aa2f20b239e52d0eaf184b1d2feace5b14d5b1c62->leave($__internal_c3f3b071d3976f3380778f5aa2f20b239e52d0eaf184b1d2feace5b14d5b1c62_prof);

        
        $__internal_1e2db2e22df28e747951b4df7017a1ebf900edf9bff0bed6f33f7e51eafec5f1->leave($__internal_1e2db2e22df28e747951b4df7017a1ebf900edf9bff0bed6f33f7e51eafec5f1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
