<?php

/* @Conciergerie/Admin/viewAbonnement.html.twig */
class __TwigTemplate_00b908d73df6f318f08a174c1bdd9781a011966234fa64ffdd690ce18c2eb69f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "@Conciergerie/Admin/viewAbonnement.html.twig", 1);
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

      <h3>Détails de l'abonnement ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "id", array()), "html", null, true);
        echo "</h3>

      <p><b>Entreprise abonnée : </b><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_entreprise", array("id" => $this->getAttribute($this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "entreprise", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "entreprise", array()), "user", array()), "username", array()))), "html", null, true);
        echo "</a></p>
      <p><b>Bouquet : </b><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_bouquet", array("id" => $this->getAttribute($this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "bouquet", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "bouquet", array()), "libelle", array()))), "html", null, true);
        echo "</a></p>
      <p><b>Début : </b>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p><b>Durée : </b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "dureeAbo", array()), "html", null, true);
        echo " mois</p>
      <p><b>Types de service inclus : </b><br>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "bouquet", array()), "typesService", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 17
            echo "          - ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["type"], "libelle", array()))), "html", null, true);
            echo "<br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </p>
      <p>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteAbonnement", array("id" => $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-danger\">Supprimer l'abonnement</button></a>

        <a href=\" ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_abonnements");
        echo " \"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste des abonnements</button></a>
      </p>
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Admin/viewAbonnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  81 => 21,  77 => 19,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  49 => 12,  43 => 11,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Admin/viewAbonnement.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\viewAbonnement.html.twig");
    }
}
