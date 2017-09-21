<?php

/* ConciergerieBundle:Entreprise:viewAbo.html.twig */
class __TwigTemplate_d35de6f3f6d7ced8c319ecc9a22ae3dbb15b617e1268589b4c32b16d75add75a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Entreprise:index.html.twig", "ConciergerieBundle:Entreprise:viewAbo.html.twig", 1);
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

    // line 3
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Bienvenue sur votre espace Entreprise</h2>
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  <section class=\"container catalogue\">
    <div class=\"row\">
      <h2>Abonnement au bouquet ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "id", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "libelle", array()))), "html", null, true);
        echo "</h2>
    </div>

    <div class=\"row\">

      <p><b>Tarif mensuel :</b> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "tarif", array()), "html", null, true);
        echo "€</p>
      <p><b>Abonné depuis le :</b> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo "</p>
      <p><b>Durée prévisionnelle de l'abonnement :</b> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "dureeAbo", array()), "html", null, true);
        echo " mois</p>
      <p><b>Types de service inclus :</b><br>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bouquet"]) ? $context["bouquet"] : null), "typesService", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 22
            echo "          - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo " <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </p>

      <p>

        <a href=\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_deleteAbo", array("id" => $this->getAttribute((isset($context["abonnement"]) ? $context["abonnement"] : null), "id", array()))), "html", null, true);
        echo " \"><button type=\"button\" class=\"btn btn-danger\">Supprimer l'abonnement</button></a>

        <a href=\" ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_listeAbo");
        echo " \"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste des abonnements</button></a>

      </p>

    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Entreprise:viewAbo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  88 => 28,  82 => 24,  73 => 22,  69 => 21,  64 => 19,  60 => 18,  56 => 17,  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Entreprise:viewAbo.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Entreprise/viewAbo.html.twig");
    }
}
