<?php

/* @Conciergerie/Admin/deleteBouquet.html.twig */
class __TwigTemplate_f236dcc7960b7df87bb4855acd57a007c7eb9952b6755d1c2758760947c0aaed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "@Conciergerie/Admin/deleteBouquet.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <section class=\"container catalogue\">
    <div class=\"row\">
      <h2>Supprimer un bouquet</h2>
    </div>
    
    <p>
      Etes-vous certain de vouloir supprimer le bouquet \"";
        // line 11
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "libelle", array()))), "html", null, true);
        echo "\" ?
    </p>

    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteBouquet", array("id" => $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

      <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_bouquet", array("id" => $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">

        Retour aux informations du bouquet

      </a>

      ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    </form>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Admin/deleteBouquet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  52 => 18,  45 => 14,  39 => 11,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Admin/deleteBouquet.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\deleteBouquet.html.twig");
    }
}
