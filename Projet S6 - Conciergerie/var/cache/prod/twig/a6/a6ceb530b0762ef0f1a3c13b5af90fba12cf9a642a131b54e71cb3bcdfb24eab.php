<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f41d0b59d3cf71cf3f1fde106a4bfcee79bc72f1024d050c5d6a7598d7b7a431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'user_info' => array($this, 'block_user_info'),
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_user_info($context, array $blocks = array())
    {
    }

    // line 5
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container-fluid TitrePage\">
  <h2>Inscription ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : null), "html", null, true);
        echo "</h2>
</div>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 14
        echo twig_include($this->env, $context, "UserBundle:Registration:register_content.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 13,  52 => 12,  49 => 11,  42 => 7,  39 => 6,  36 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\groupe19\\src\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
