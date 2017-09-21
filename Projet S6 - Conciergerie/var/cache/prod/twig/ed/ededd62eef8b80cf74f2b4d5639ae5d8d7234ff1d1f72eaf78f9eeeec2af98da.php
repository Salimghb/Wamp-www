<?php

/* ConciergerieBundle:Salarie:listeCommandes.html.twig */
class __TwigTemplate_2895e5756ff62e43d7d023221f3e5efa231ec6459f1c28bdd83ee99e05dd94fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Salarie:index.html.twig", "ConciergerieBundle:Salarie:listeCommandes.html.twig", 1);
        $this->blocks = array(
            'TitrePage' => array($this, 'block_TitrePage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle:Salarie:index.html.twig";
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
    <h2>Suivi de vos commandes :</h2>
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  <section class=\"container\">

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "    <div class=\"alert alert-success\">
      ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    <h2>Commandes en attente de validation du prestataire :</h2>
    ";
        // line 19
        if (twig_test_empty((isset($context["commandesNonValide"]) ? $context["commandesNonValide"] : null))) {
            // line 20
            echo "      <p class=\"alert alert-warning\">Aucune commande en attente de validation.</p>
    ";
        } else {
            // line 22
            echo "      <table class=\"table table-bordered\">
        <tr>
          <td>N° de commande : </td>
          <td>Service : </td>
          <td>Prestataire : </td>
          <td>Tarif : </td>
        </tr>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandesNonValide"]) ? $context["commandesNonValide"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 30
                echo "          <tr>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "libelle", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "service", array()), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
                echo "</td>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "tarif", array()), "html", null, true);
                echo " €</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      </table>
    ";
        }
        // line 39
        echo "
    <h2>Commandes en attente de règlement :</h2>
    ";
        // line 41
        if (twig_test_empty((isset($context["commandesNonRegle"]) ? $context["commandesNonRegle"] : null))) {
            // line 42
            echo "      <p class=\"alert alert-warning\">Aucune commande en attente de règlement.</p>
    ";
        } else {
            // line 44
            echo "      <p class=\"alert alert-info\">Pensez à régler vos commandes rapidement une fois celles-ci validées. <br>Vous pourrez ensuite entrer en contact avec le prestataire et convenir ensemble des modalités de livraison du service.</p>
      <table class=\"table table-bordered\">
        <tr>
          <td>N° de commande : </td>
          <td>Service : </td>
          <td>Prestataire : </td>
          <td>Tarif : </td>
          <td>Action : </td>
        </tr>
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandesNonRegle"]) ? $context["commandesNonRegle"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 54
                echo "          <tr>
            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "libelle", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "service", array()), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
                echo "</td>
            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "tarif", array()), "html", null, true);
                echo " €</td>
            <td><a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_commandePay", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-success\" value=\"Payer\"></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      </table>
    ";
        }
        // line 64
        echo "
    <h2>Commandes en attente de livraison :</h2>
    ";
        // line 66
        if (twig_test_empty((isset($context["commandesNonLivre"]) ? $context["commandesNonLivre"] : null))) {
            // line 67
            echo "      <p class=\"alert alert-warning\">Aucune commande en attente de livraison.</p>
    ";
        } else {
            // line 69
            echo "      <p class=\"alert alert-success\">Les commandes ci-dessous sont en attente de livraison. N'oubliez pas de confirmer la livraison dès que celle-ci a eu lieu.<br>Prenez contact par mail ou téléphone avec le prestataire pour convenir ensemble des modalités de livraison du service.</p>
      <table class=\"table table-bordered\">
        <tr>
          <td>N° de commande : </td>
          <td>Service : </td>
          <td>Tarif : </td>
          <td>Prestataire : </td>
          <td>Téléphone : </td>
          <td>Adresse mail : </td>
          <td>Action : </td>

        </tr>
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandesNonLivre"]) ? $context["commandesNonLivre"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 82
                echo "          <tr>
            <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "libelle", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "tarif", array()), "html", null, true);
                echo " €</td>
            <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "service", array()), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
                echo "</td>
            <td>+33";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "service", array()), "prestataire", array()), "telephone", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "service", array()), "prestataire", array()), "user", array()), "email", array()), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_confirmLivraison", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-success\" value=\"Confirmer livraison\"></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      </table>
    ";
        }
        // line 94
        echo "
    <h2>Commandes délivrées (avis non déposé)  :</h2>
    ";
        // line 96
        if (twig_test_empty((isset($context["commandesNonCommente"]) ? $context["commandesNonCommente"] : null))) {
            // line 97
            echo "      <p class=\"alert alert-warning\">Vous n'avez pas d'avis à déposer sur vos commandes.</p>
    ";
        } else {
            // line 99
            echo "    <p class=\"alert alert-success\">N'oubliez pas de déposer un avis pour les services qui vous ont été délivrés. <br> Les avis nous permettent d'améliorer la qualité des services proposés sur ce site.</p>
      <table class=\"table table-bordered\">
        <tr>
          <td>N° de commande : </td>
          <td>Service : </td>
          <td>Prestataire : </td>
          <td>Tarif : </td>
          <td>Action : </td>
        </tr>
        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandesNonCommente"]) ? $context["commandesNonCommente"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 109
                echo "          <tr>
            <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "libelle", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "service", array()), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
                echo "</td>
            <td>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "tarif", array()), "html", null, true);
                echo " €</td>
            <td><a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_commenterService", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Déposer un avis\"></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "      </table>
    ";
        }
        // line 119
        echo "

    <h2>Commandes validées et avis déposé :</h2>
    ";
        // line 122
        if (twig_test_empty((isset($context["commandesValide"]) ? $context["commandesValide"] : null))) {
            // line 123
            echo "      <p class=\"alert alert-warning\">Vous n'avez pas encore de commande validée et commentée.</p>
    ";
        } else {
            // line 125
            echo "      <table class=\"table table-bordered\">
        <tr>
          <td>N° de commande : </td>
          <td>Service : </td>
          <td>Prestataire : </td>
          <td>Tarif : </td>
        </tr>
        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandesValide"]) ? $context["commandesValide"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 133
                echo "          <tr>
            <td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "libelle", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 136
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["commande"], "service", array()), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
                echo "</td>
            <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "service", array()), "tarif", array()), "html", null, true);
                echo " €</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "      </table>
    ";
        }
        // line 142
        echo "



  </section>
";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Salarie:listeCommandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 142,  343 => 140,  334 => 137,  330 => 136,  326 => 135,  322 => 134,  319 => 133,  315 => 132,  306 => 125,  302 => 123,  300 => 122,  295 => 119,  291 => 117,  282 => 114,  278 => 113,  274 => 112,  270 => 111,  266 => 110,  263 => 109,  259 => 108,  248 => 99,  244 => 97,  242 => 96,  238 => 94,  234 => 92,  225 => 89,  221 => 88,  217 => 87,  213 => 86,  209 => 85,  205 => 84,  201 => 83,  198 => 82,  194 => 81,  180 => 69,  176 => 67,  174 => 66,  170 => 64,  166 => 62,  157 => 59,  153 => 58,  149 => 57,  145 => 56,  141 => 55,  138 => 54,  134 => 53,  123 => 44,  119 => 42,  117 => 41,  113 => 39,  109 => 37,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  85 => 30,  81 => 29,  72 => 22,  68 => 20,  66 => 19,  62 => 17,  53 => 14,  50 => 13,  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Salarie:listeCommandes.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Salarie/listeCommandes.html.twig");
    }
}
