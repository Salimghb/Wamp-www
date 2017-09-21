<?php

/* ConciergerieBundle:Entreprise:abonnements.html.twig */
class __TwigTemplate_e40c592b67003fefe6baf934cfdfa8b8f7919a5d6866fecceaead91e27ada163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Entreprise:index.html.twig", "ConciergerieBundle:Entreprise:abonnements.html.twig", 1);
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
    <h2>Bienvenue sur votre espace Entreprise</h2>
  </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
  <section class=\"container catalogue\">

    <div class=\"row\">

      <h3>Les dernières commandes</h3>

      ";
        // line 18
        if (twig_test_empty((isset($context["listeAbo"]) ? $context["listeAbo"] : null))) {
            // line 19
            echo "        <h4>Votre entreprise n'est abonnée à aucun bouquet</h4>
      ";
        } else {
            // line 21
            echo "
        <table class=\"table table-bordered\">

          <tr>
            <th>ID Abonnement</th>
            <th>Bouquet</th>
            <th>Début</th>
            <th>Durée</th>
            <th>Supprimer</th>
          </tr>

          ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeAbo"]) ? $context["listeAbo"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
                // line 33
                echo "
            <tr>
              <td><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_viewAbo", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "id", array()), "html", null, true);
                echo "</a> </td>
              <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["abonnement"], "bouquet", array()), "libelle", array()))), "html", null, true);
                echo "</td>
              <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["abonnement"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "</td>
              <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "dureeAbo", array()), "html", null, true);
                echo " mois</td>
              <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_deleteAbo", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Se désabonner\"></a></td>
            </tr>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
        </table>

      ";
        }
        // line 47
        echo "
    </div>

    <br>

    <div>
      <a href=\" ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_addAbo");
        echo " \"><button type=\"button\" class=\"btn btn-success\">Ajouter un abonnement</button></a>
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Entreprise:abonnements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 53,  112 => 47,  106 => 43,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  78 => 35,  74 => 33,  70 => 32,  57 => 21,  53 => 19,  51 => 18,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Entreprise:abonnements.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Entreprise/abonnements.html.twig");
    }
}
