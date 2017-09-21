<?php

/* ConciergerieBundle:Prestataire:commandesService.html.twig */
class __TwigTemplate_2275ebdcaf1ae5396e61a2750b70332f14f324b150cf620690a1fa07fe449957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Prestataire:index.html.twig", "ConciergerieBundle:Prestataire:commandesService.html.twig", 1);
        $this->blocks = array(
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle:Prestataire:index.html.twig";
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
    <h2>Suivi des commandes pour le service : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "libelle", array()), "html", null, true);
        echo "</h2>
  </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  <section class=\"container catalogue\">

    <h2>Commandes en attente de validation :</h2>
      ";
        // line 14
        if (twig_test_empty((isset($context["commandesEnAttente"]) ? $context["commandesEnAttente"] : null))) {
            // line 15
            echo "      <p>Aucune commande en attente pour ce service</p>
      ";
        } else {
            // line 17
            echo "      <table class=\"table table-bordered\">
        <tr>
          <td>N° de commande :</td>
          <td>Client : </td>
          <td>Commande passée le : </td>
          <td>Compléments : </td>
          <td>Action : </td>
        </tr>

        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandesEnAttente"]) ? $context["commandesEnAttente"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 27
                echo "          <tr>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d M Y à H:i"), "html", null, true);
                echo "</td>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "complements", array()), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_validerCommande", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-success\" value=\"Valider commande\"></a> </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "      </table>

      ";
        }
        // line 38
        echo "

    <h2>Commandes en attente de règlement :</h2>
      ";
        // line 41
        if (twig_test_empty((isset($context["commandesNonRegle"]) ? $context["commandesNonRegle"] : null))) {
            // line 42
            echo "      <p>Aucune commande en attente de règlement pour ce service</p>
      ";
        } else {
            // line 44
            echo "      <table class=\"table table-bordered\">
        <tr>
          <td>N° de commande :</td>
          <td>Client : </td>
          <td>Commande passée le : </td>
        </tr>

        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandesNonRegle"]) ? $context["commandesNonRegle"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 52
                echo "          <tr>
            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d M Y à H:i"), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "      </table>
      ";
        }
        // line 60
        echo "
      <h2>Commandes réglées en attente de livraison</h2>
      ";
        // line 62
        if (twig_test_empty((isset($context["commandesNonLivre"]) ? $context["commandesNonLivre"] : null))) {
            // line 63
            echo "      <p>Aucune commande en attente de livraison pour ce service</p>
      ";
        } else {
            // line 65
            echo "      <div class=\"alert alert-success col-lg-12\">
        <p>Les commandes ci-dessous ont bien été réglées, n'oubliez pas d'entrer en contact avec le client pour procéder à la livraison du service.</p>
      </div>
      <table class=\"table table-bordered\">
        <tr>
          <td>N° de commande :</td>
          <td>Client : </td>
          <td>Numéro de téléphone : </td>
          <td>Adresse mail : </td>

        </tr>

        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandesNonLivre"]) ? $context["commandesNonLivre"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 78
                echo "          <tr>
            <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "telephone", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "user", array()), "email", array()), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "      </table>
      ";
        }
        // line 87
        echo "


  </section>
";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Prestataire:commandesService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 87,  210 => 85,  201 => 82,  197 => 81,  191 => 80,  187 => 79,  184 => 78,  180 => 77,  166 => 65,  162 => 63,  160 => 62,  156 => 60,  152 => 58,  143 => 55,  137 => 54,  133 => 53,  130 => 52,  126 => 51,  117 => 44,  113 => 42,  111 => 41,  106 => 38,  101 => 35,  92 => 32,  88 => 31,  84 => 30,  78 => 29,  74 => 28,  71 => 27,  67 => 26,  56 => 17,  52 => 15,  50 => 14,  45 => 11,  42 => 10,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Prestataire:commandesService.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Prestataire/commandesService.html.twig");
    }
}
