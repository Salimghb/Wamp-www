<?php

/* ConciergerieBundle:Admin:deleteCommande.html.twig */
class __TwigTemplate_f0d3c7f3cf6d46fe5e07114eac936240a33ab85219d74ed89156c4180b8b01c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "ConciergerieBundle:Admin:deleteCommande.html.twig", 1);
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
      <h2>Supprimer une commande</h2>
    </div>
    
    <p>
      Etes-vous certain de vouloir supprimer la commande \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "id", array()), "html", null, true);
        echo "\" ?
    </p>

    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

      <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">

        Retour aux informations de la commande

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
        return "ConciergerieBundle:Admin:deleteCommande.html.twig";
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
        return new Twig_Source("", "ConciergerieBundle:Admin:deleteCommande.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Admin/deleteCommande.html.twig");
    }
}
