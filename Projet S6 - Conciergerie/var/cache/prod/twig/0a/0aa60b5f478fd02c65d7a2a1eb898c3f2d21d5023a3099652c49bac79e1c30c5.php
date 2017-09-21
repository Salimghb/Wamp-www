<?php

/* @Conciergerie/Admin/deleteAbonnement.html.twig */
class __TwigTemplate_ea01c859a40fd80c1d60a92f773e9cfad7d93ecf844c2b5ec3ac897bac4e038a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "@Conciergerie/Admin/deleteAbonnement.html.twig", 1);
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
      <h2>Supprimer un abonnement</h2>
    </div>
    
    <p>
      Etes-vous certain de vouloir supprimer l'abonnement \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "id", array()), "html", null, true);
        echo "\" ?
    </p>

    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteAbonnement", array("id" => $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

      <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_abonnement", array("id" => $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">

        Retour aux informations de l'abonnement

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
        return "@Conciergerie/Admin/deleteAbonnement.html.twig";
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
        return new Twig_Source("", "@Conciergerie/Admin/deleteAbonnement.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\deleteAbonnement.html.twig");
    }
}
