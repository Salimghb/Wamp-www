<?php

/* ConciergerieBundle:Admin:viewBouquet.html.twig */
class __TwigTemplate_fe1fec63c7f0a05c8d3d725189d32251ab4f0d1afceeb28257a291b79bb0190c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "ConciergerieBundle:Admin:viewBouquet.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  <section class=\"container catalogue\">

    <div class=\"row\">

      <h3>Détails du bouquet ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "id", array()), "html", null, true);
        echo "</h3>
      
      <p><b>Libelle : </b>";
        // line 11
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "libelle", array()))), "html", null, true);
        echo "</p>
      <p><b>Tarif mensuel : </b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "tarif", array()), "html", null, true);
        echo "€</p>
      <p><b>Types de service inclus : </b><br>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "typesService", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 15
            echo "          - ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["type"], "libelle", array()))), "html", null, true);
            echo "<br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </p>
      <p><b>Entreprises abonnées : </b><br>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "abonnements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            echo "<br>
          - <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_entreprise", array("id" => $this->getAttribute($this->getAttribute($context["abonnement"], "entreprise", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abonnement"], "entreprise", array()), "user", array()), "username", array()))), "html", null, true);
            echo "</a><br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </p>
      <p>
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteBouquet", array("id" => $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-danger\">Supprimer le bouquet</button></a>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_bouquets");
        echo "\"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste des bouquets</button></a>
      </p>
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Admin:viewBouquet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  89 => 24,  85 => 22,  75 => 20,  69 => 19,  65 => 17,  56 => 15,  52 => 14,  47 => 12,  43 => 11,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Admin:viewBouquet.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Admin/viewBouquet.html.twig");
    }
}
