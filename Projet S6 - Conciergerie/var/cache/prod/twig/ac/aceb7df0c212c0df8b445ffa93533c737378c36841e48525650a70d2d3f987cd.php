<?php

/* @Conciergerie/Admin/index.html.twig */
class __TwigTemplate_5634f0fccda8a3386f89bebe65b67d551e76069c02c47f2687aeaf3d744f36f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle::layout.html.twig", "@Conciergerie/Admin/index.html.twig", 1);
        $this->blocks = array(
            'redirectHome' => array($this, 'block_redirectHome'),
            'navbar' => array($this, 'block_navbar'),
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_redirectHome($context, array $blocks = array())
    {
        // line 5
        echo "  \"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin");
        echo "\"
";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "
  <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_entreprises");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Entreprises</button></a>


  <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_prestataires");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Prestataires</button></a>


  <a href=\" ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commentaires");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Commentaires</button></a>


  <a href=\" ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_abonnements");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Abonnements</button></a>


  <a href=\" ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commandes");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Commandes</button></a>


  <a href=\" ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_bouquets");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Bouquets</button></a>

";
    }

    // line 31
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 32
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Espace Administrateur</h2>
  </div>
";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "

  <section class=\"container catalogue\">

    <div class=\"row\">

      <h3>Les dernières commandes</h3>

      ";
        // line 47
        if (twig_test_empty((isset($context["listeCommandes"]) ? $context["listeCommandes"] : null))) {
            // line 48
            echo "        <h4>Aucune commande disponible</h4>
      ";
        } else {
            // line 50
            echo "
        <table class=\"table table-bordered\">

          <tr>
            <th>ID Commande</th>
            <th>Service commandé</th>
            <th>Client</th>
            <th>Montant</th>
            <th>Date</th>
            <th>Supprimer</th>
          </tr>

          ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCommandes"]) ? $context["listeCommandes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 63
                echo "
            <tr>
              <td><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commande", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</a></td>
              <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "libelle", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 67
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "prenom", array()))) . " ") . twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "salarie", array()), "nom", array())))), "html", null, true);
                echo "</td>
              <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "tarif", array()), "html", null, true);
                echo "€</td>
              <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
              <td><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteCommande", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Supprimer\"></a></td>
            </tr>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
        </table>
        <p>
          <a href=\" ";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commandes");
            echo " \"><button type=\"button\" class=\"btn btn-info\">Liste complète des commandes</button></a>
        </p>
      ";
        }
        // line 80
        echo "
    </div>


    <div class=\"row\">

      <h3>Les derniers abonnements</h3>

      ";
        // line 88
        if (twig_test_empty((isset($context["listeAbonnements"]) ? $context["listeAbonnements"] : null))) {
            // line 89
            echo "        <h4>Aucun abonnement disponible</h4>
      ";
        } else {
            // line 91
            echo "
        <table class=\"table table-bordered\">

          <tr>
            <th>ID Abonnement</th>
            <th>ID Entreprise cliente</th>
            <th>Bouquet</th>
            <th>Début</th>
            <th>Durée</th>
            <th>Supprimer</th>
          </tr>

          ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeAbonnements"]) ? $context["listeAbonnements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
                // line 104
                echo "
            <tr>
              <td><a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_abonnement", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "id", array()), "html", null, true);
                echo "</a> </td>
              <td><a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_entreprise", array("id" => $this->getAttribute($this->getAttribute($context["abonnement"], "entreprise", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["abonnement"], "entreprise", array()), "user", array()), "username", array()))), "html", null, true);
                echo "</a></td>
              <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["abonnement"], "bouquet", array()), "libelle", array()))), "html", null, true);
                echo "</td>
              <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["abonnement"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo "</td>
              <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "dureeAbo", array()), "html", null, true);
                echo " mois</td>
              <td><a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteAbonnement", array("id" => $this->getAttribute($context["abonnement"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Supprimer\"></a></td>
            </tr>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "
        </table>
        <p>
          <a href=\" ";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_abonnements");
            echo " \"><button type=\"button\" class=\"btn btn-info\">Liste complète des abonnements</button></a>
        </p>
      ";
        }
        // line 121
        echo "
    </div>


    <div class=\"row\">

      <h3>
        Les derniers commentaires
      </h3>

      ";
        // line 131
        if (twig_test_empty((isset($context["listeCommentaires"]) ? $context["listeCommentaires"] : null))) {
            // line 132
            echo "        <h4>Aucun commentaire disponible</h4>
      ";
        } else {
            // line 134
            echo "
        <table class=\"table table-bordered\">

          <tr>
            <th>ID Commentaire</th>
            <th>ID Prestataire</th>
            <th>Service commenté</th>
            <th>Client</th>
            <th>Date et heure</th>
            <th>Valider</th>
            <th>Supprimer</th>
          </tr>

          ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCommentaires"]) ? $context["listeCommentaires"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 148
                echo "
            <tr>
              <td><a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commentaire", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "id", array()), "html", null, true);
                echo "</a> </td>
              <td><a href=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_entreprise", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["commentaire"], "service", array()), "prestataire", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commentaire"], "service", array()), "prestataire", array()), "id", array()), "html", null, true);
                echo "</a></td>
              <td>";
                // line 152
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "service", array()), "libelle", array()))), "html", null, true);
                echo "</td>
              <td>";
                // line 153
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "prenom", array()))) . " ") . twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "nom", array())))), "html", null, true);
                echo "</td>
              <td>";
                // line 154
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "d/m/Y à h:m:s "), "html", null, true);
                echo "</td>
              <td><a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_validerCommentaire", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-success\" value=\"Valider\"></a> </td>
              <td><a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteCommentaire", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Supprimer\"></a> </td>
            </tr>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "
        </table>
        <p>
          <a href=\" ";
            // line 163
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commentaires");
            echo " \"><button type=\"button\" class=\"btn btn-info\">Liste complète des commentaires</button></a>
        </p>
      ";
        }
        // line 166
        echo "
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 166,  345 => 163,  340 => 160,  330 => 156,  326 => 155,  322 => 154,  318 => 153,  314 => 152,  308 => 151,  302 => 150,  298 => 148,  294 => 147,  279 => 134,  275 => 132,  273 => 131,  261 => 121,  255 => 118,  250 => 115,  240 => 111,  236 => 110,  232 => 109,  228 => 108,  222 => 107,  216 => 106,  212 => 104,  208 => 103,  194 => 91,  190 => 89,  188 => 88,  178 => 80,  172 => 77,  167 => 74,  157 => 70,  153 => 69,  149 => 68,  145 => 67,  141 => 66,  135 => 65,  131 => 63,  127 => 62,  113 => 50,  109 => 48,  107 => 47,  97 => 39,  94 => 38,  87 => 32,  84 => 31,  77 => 26,  71 => 23,  65 => 20,  59 => 17,  53 => 14,  47 => 11,  44 => 10,  41 => 9,  34 => 5,  31 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Admin/index.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\index.html.twig");
    }
}
