<?php

/* ConciergerieBundle:Entreprise:deleteAbo.html.twig */
class __TwigTemplate_0d889b9157854fca99749c230e0cd046e5fb7464d8116bf67aba2e40dcbe5ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Entreprise:index.html.twig", "ConciergerieBundle:Entreprise:deleteAbo.html.twig", 1);
        $this->blocks = array(
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle:Entreprise:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Espace d'abonnement aux bouquets</h2>
  </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  <section class=\"container catalogue\">
    <div class=\"row\">
      <h2>Supprimer un abonnement</h2>
    </div>
    
    <p>
      Etes-vous certain de vouloir supprimer l'abonnement au bouquet \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "bouquet", array()), "libelle", array()), "html", null, true);
        echo "\" ?
    </p>

    <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_deleteAbo", array("id" => $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

      <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_viewAbo", array("id" => $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">

        Retour à l'abonnement

      </a>

      
      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    </form>

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Entreprise:deleteAbo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 31,  63 => 24,  56 => 20,  50 => 17,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Entreprise:deleteAbo.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Entreprise/deleteAbo.html.twig");
    }
}
