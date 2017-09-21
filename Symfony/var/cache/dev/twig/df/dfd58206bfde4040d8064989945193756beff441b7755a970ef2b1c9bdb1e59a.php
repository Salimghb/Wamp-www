<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e0bfdb580122853f0c093e0ea8c0588d47a395d8407bf38e328e615b90ae81f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_883b56e5c76277f9ffc9b3595d2173cc1cff264fcebfd6c1335528e6ee0d0f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883b56e5c76277f9ffc9b3595d2173cc1cff264fcebfd6c1335528e6ee0d0f82->enter($__internal_883b56e5c76277f9ffc9b3595d2173cc1cff264fcebfd6c1335528e6ee0d0f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_be98963bfe492e9c6755508b98540359723e9d06544fe1d9db966e69640a558c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be98963bfe492e9c6755508b98540359723e9d06544fe1d9db966e69640a558c->enter($__internal_be98963bfe492e9c6755508b98540359723e9d06544fe1d9db966e69640a558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883b56e5c76277f9ffc9b3595d2173cc1cff264fcebfd6c1335528e6ee0d0f82->leave($__internal_883b56e5c76277f9ffc9b3595d2173cc1cff264fcebfd6c1335528e6ee0d0f82_prof);

        
        $__internal_be98963bfe492e9c6755508b98540359723e9d06544fe1d9db966e69640a558c->leave($__internal_be98963bfe492e9c6755508b98540359723e9d06544fe1d9db966e69640a558c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f59f62aaeb7c5304494b253591360ebe53ed45b39259739d445cd3722961105f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59f62aaeb7c5304494b253591360ebe53ed45b39259739d445cd3722961105f->enter($__internal_f59f62aaeb7c5304494b253591360ebe53ed45b39259739d445cd3722961105f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0565d88277a26ee914a3ae353503fa6888711dd379546783a36851b3533b04e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0565d88277a26ee914a3ae353503fa6888711dd379546783a36851b3533b04e6->enter($__internal_0565d88277a26ee914a3ae353503fa6888711dd379546783a36851b3533b04e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0565d88277a26ee914a3ae353503fa6888711dd379546783a36851b3533b04e6->leave($__internal_0565d88277a26ee914a3ae353503fa6888711dd379546783a36851b3533b04e6_prof);

        
        $__internal_f59f62aaeb7c5304494b253591360ebe53ed45b39259739d445cd3722961105f->leave($__internal_f59f62aaeb7c5304494b253591360ebe53ed45b39259739d445cd3722961105f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f8ae9fd89873c8d9f5d2975534e43d0afe01b84e1a3ca65a9e69681892f461d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8ae9fd89873c8d9f5d2975534e43d0afe01b84e1a3ca65a9e69681892f461d->enter($__internal_5f8ae9fd89873c8d9f5d2975534e43d0afe01b84e1a3ca65a9e69681892f461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0488b2cdcdc1670bc732f6c390165db9e71ca2b4ae66e486b45e87ebe023f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0488b2cdcdc1670bc732f6c390165db9e71ca2b4ae66e486b45e87ebe023f9c->enter($__internal_d0488b2cdcdc1670bc732f6c390165db9e71ca2b4ae66e486b45e87ebe023f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0488b2cdcdc1670bc732f6c390165db9e71ca2b4ae66e486b45e87ebe023f9c->leave($__internal_d0488b2cdcdc1670bc732f6c390165db9e71ca2b4ae66e486b45e87ebe023f9c_prof);

        
        $__internal_5f8ae9fd89873c8d9f5d2975534e43d0afe01b84e1a3ca65a9e69681892f461d->leave($__internal_5f8ae9fd89873c8d9f5d2975534e43d0afe01b84e1a3ca65a9e69681892f461d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_715424222b0f8174f027a100e081fabd502aa37907886b8def30259f16cb3598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715424222b0f8174f027a100e081fabd502aa37907886b8def30259f16cb3598->enter($__internal_715424222b0f8174f027a100e081fabd502aa37907886b8def30259f16cb3598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_badb5a2d8f8cc81fbab041b82a7ec736cea24c75605b44dee28e80dbcf411539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badb5a2d8f8cc81fbab041b82a7ec736cea24c75605b44dee28e80dbcf411539->enter($__internal_badb5a2d8f8cc81fbab041b82a7ec736cea24c75605b44dee28e80dbcf411539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_badb5a2d8f8cc81fbab041b82a7ec736cea24c75605b44dee28e80dbcf411539->leave($__internal_badb5a2d8f8cc81fbab041b82a7ec736cea24c75605b44dee28e80dbcf411539_prof);

        
        $__internal_715424222b0f8174f027a100e081fabd502aa37907886b8def30259f16cb3598->leave($__internal_715424222b0f8174f027a100e081fabd502aa37907886b8def30259f16cb3598_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
