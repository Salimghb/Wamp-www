<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2e59b65b6a2c8a544cb6ab4a15ca5a32f7d2d794291c62547b2e0c8903afcc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e59b65b6a2c8a544cb6ab4a15ca5a32f7d2d794291c62547b2e0c8903afcc49->enter($__internal_2e59b65b6a2c8a544cb6ab4a15ca5a32f7d2d794291c62547b2e0c8903afcc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_668cdabbe8f1de3135dd95b9440b320145090f4a0af37ff6614f79114360bb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668cdabbe8f1de3135dd95b9440b320145090f4a0af37ff6614f79114360bb37->enter($__internal_668cdabbe8f1de3135dd95b9440b320145090f4a0af37ff6614f79114360bb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e59b65b6a2c8a544cb6ab4a15ca5a32f7d2d794291c62547b2e0c8903afcc49->leave($__internal_2e59b65b6a2c8a544cb6ab4a15ca5a32f7d2d794291c62547b2e0c8903afcc49_prof);

        
        $__internal_668cdabbe8f1de3135dd95b9440b320145090f4a0af37ff6614f79114360bb37->leave($__internal_668cdabbe8f1de3135dd95b9440b320145090f4a0af37ff6614f79114360bb37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de86b5af2f38b3c0122231ca9f9f03bae134a3513adb14680433140a0e7a4334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de86b5af2f38b3c0122231ca9f9f03bae134a3513adb14680433140a0e7a4334->enter($__internal_de86b5af2f38b3c0122231ca9f9f03bae134a3513adb14680433140a0e7a4334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6714b161dec19089e9762065dcb0cd80d790e465f18dd0016476cdaf679e0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6714b161dec19089e9762065dcb0cd80d790e465f18dd0016476cdaf679e0b8->enter($__internal_d6714b161dec19089e9762065dcb0cd80d790e465f18dd0016476cdaf679e0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d6714b161dec19089e9762065dcb0cd80d790e465f18dd0016476cdaf679e0b8->leave($__internal_d6714b161dec19089e9762065dcb0cd80d790e465f18dd0016476cdaf679e0b8_prof);

        
        $__internal_de86b5af2f38b3c0122231ca9f9f03bae134a3513adb14680433140a0e7a4334->leave($__internal_de86b5af2f38b3c0122231ca9f9f03bae134a3513adb14680433140a0e7a4334_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_450b548e17666bd06e4e3a644106e4c195f9378ced8e4111a45c2f1da71cc4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450b548e17666bd06e4e3a644106e4c195f9378ced8e4111a45c2f1da71cc4fe->enter($__internal_450b548e17666bd06e4e3a644106e4c195f9378ced8e4111a45c2f1da71cc4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_872cc905d67d7784cd8968ca857a236bd2974bde53cc016120f0a9acf3e12461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872cc905d67d7784cd8968ca857a236bd2974bde53cc016120f0a9acf3e12461->enter($__internal_872cc905d67d7784cd8968ca857a236bd2974bde53cc016120f0a9acf3e12461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_872cc905d67d7784cd8968ca857a236bd2974bde53cc016120f0a9acf3e12461->leave($__internal_872cc905d67d7784cd8968ca857a236bd2974bde53cc016120f0a9acf3e12461_prof);

        
        $__internal_450b548e17666bd06e4e3a644106e4c195f9378ced8e4111a45c2f1da71cc4fe->leave($__internal_450b548e17666bd06e4e3a644106e4c195f9378ced8e4111a45c2f1da71cc4fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b3284b81f93958b212f652be1245b7e1db792d8c75f37901430318beb57bcf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3284b81f93958b212f652be1245b7e1db792d8c75f37901430318beb57bcf4->enter($__internal_6b3284b81f93958b212f652be1245b7e1db792d8c75f37901430318beb57bcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cab92074a76cf4f9e37be9f6a2407b350c239e5762ad02b47efb471d089ac63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab92074a76cf4f9e37be9f6a2407b350c239e5762ad02b47efb471d089ac63b->enter($__internal_cab92074a76cf4f9e37be9f6a2407b350c239e5762ad02b47efb471d089ac63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cab92074a76cf4f9e37be9f6a2407b350c239e5762ad02b47efb471d089ac63b->leave($__internal_cab92074a76cf4f9e37be9f6a2407b350c239e5762ad02b47efb471d089ac63b_prof);

        
        $__internal_6b3284b81f93958b212f652be1245b7e1db792d8c75f37901430318beb57bcf4->leave($__internal_6b3284b81f93958b212f652be1245b7e1db792d8c75f37901430318beb57bcf4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
