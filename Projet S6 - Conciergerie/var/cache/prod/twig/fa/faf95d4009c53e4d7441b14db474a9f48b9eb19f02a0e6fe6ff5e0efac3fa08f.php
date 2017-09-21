<?php

/* ConciergerieBundle:Prestataire:listeService.html.twig */
class __TwigTemplate_d31b0862a16817123ec54129e7d165c4d2675c66174474d861ca13bd64f330e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Prestataire:index.html.twig", "ConciergerieBundle:Prestataire:listeService.html.twig", 1);
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
        echo "<div class=\"container-fluid TitrePage\">
  <h2>Prestataire : Mes services proposés</h2>
</div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<section class=\"container catalogue\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "<div class=\"alert alert-success\">
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
        if (twig_test_empty((isset($context["listeServices"]) ? $context["listeServices"] : null))) {
            // line 18
            echo "  <p>Vous n'avez pas encore proposé de service. <br>
    Souhaitez vous vous en ajouter un ?</p>
  <div class=\"input-group\">
    <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_addService");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Proposer un nouveau service </button></a>
  </div>

  ";
        } else {
            // line 25
            echo "
  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeServices"]) ? $context["listeServices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 27
                echo "  <div class=\"service col-lg-3 col-md-4 col-sm-6 col-xs-6\">
    <h3>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
                echo "</h3>
    <p><b>Tarif : </b> ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "tarif", array()), "html", null, true);
                echo " €</p>
    <p><b>Popularité : </b> <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_commentaires", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "nbCommentaires", array()), "html", null, true);
                echo " avis déposés</a> </p>
    <!-- Affichage des commandes en attente de validation pour ce service -->

      ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["service"], "commandes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                    // line 34
                    echo "        ";
                    if (($this->getAttribute($this->getAttribute($context["commande"], "etat", array()), "id", array()) == 1)) {
                        // line 35
                        echo "          ";
                        $context["nbcommandes"] = ((isset($context["nbcommandes"]) ? $context["nbcommandes"] : null) + 1);
                        // line 36
                        echo "        ";
                    }
                    // line 37
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "      ";
                if (((isset($context["nbcommandes"]) ? $context["nbcommandes"] : null) == 0)) {
                    // line 39
                    echo "        <p>Aucune commande pour ce service</p>
      ";
                } else {
                    // line 41
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_commandes", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
                    echo "\">
          <p>";
                    // line 42
                    echo twig_escape_filter($this->env, (isset($context["nbcommandes"]) ? $context["nbcommandes"] : null), "html", null, true);
                    echo " commande(s) en attente de validation.</p>
        </a>
      ";
                }
                // line 45
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_commandes", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
                echo "\">
      <button type=\"button\" class=\"btn btn-success\">Consulter détail</button>
    </a>
    <!-- Redirection vers la page de consultation / modification des services -->
    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_service", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-primary\">Modifier service</button></a>

  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 54
        echo "

</section>
";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Prestataire:listeService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  146 => 49,  138 => 45,  132 => 42,  127 => 41,  123 => 39,  120 => 38,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  101 => 33,  93 => 30,  89 => 29,  85 => 28,  82 => 27,  78 => 26,  75 => 25,  68 => 21,  63 => 18,  61 => 17,  52 => 14,  49 => 13,  45 => 12,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Prestataire:listeService.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Prestataire/listeService.html.twig");
    }
}
