<?php

/* ConciergerieBundle:Entreprise:index.html.twig */
class __TwigTemplate_71d654bc52c69b4bb804c771e9400df30a23b9c6cf8d069ef01e1927ad13af7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle::layout.html.twig", "ConciergerieBundle:Entreprise:index.html.twig", 1);
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

    // line 3
    public function block_redirectHome($context, array $blocks = array())
    {
        // line 4
        echo "  \"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise");
        echo "\"
";
    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
        // line 8
        echo "
  <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_services");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Nos services</button></a>


  <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Nos bouquets</button></a>


  <a href=\" ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_listeAbo");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Mes abonnements</button></a>


  <a href=\" ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_listeSalaries");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Mes salariés</button></a>


  <a href=\" ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_monCompte");
        echo " \"><button type=\"button\" class=\"btn btn-default\">Mon compte</button></a>

";
    }

    // line 25
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 26
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Bienvenue sur votre espace Entreprise</h2>
  </div>
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "  <section class=\"container catalogue\">

    <div class=\"row\">
      <h2>Découvrez nos nouveaux bouquets !</h2>
    </div>

    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "MajInfo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "      <p>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    <div class=\"row\">

      ";
        // line 44
        if (twig_test_empty((isset($context["listePropositions"]) ? $context["listePropositions"] : null))) {
            // line 45
            echo "
        Aucun bouquet n'est disponible pour le moment!

      ";
        } else {
            // line 49
            echo "
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listePropositions"]) ? $context["listePropositions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["bouquet"]) {
                // line 51
                echo "
          <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-6\">

            <h3>Bouquet ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["bouquet"], "id", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["bouquet"], "libelle", array()))), "html", null, true);
                echo "</h3>
            <p><b>Tarif mensuel :</b> ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["bouquet"], "tarif", array()), "html", null, true);
                echo "€</p>
            <p>

              <b>Types de service inclus :</b><br>
              ";
                // line 59
                if (twig_test_empty($this->getAttribute($context["bouquet"], "typesService", array()))) {
                    // line 60
                    echo "                Aucun type de service inclus!
              ";
                } else {
                    // line 62
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bouquet"], "typesService", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                        // line 63
                        echo "                  - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
                        echo " <br>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "              ";
                }
                // line 66
                echo "
            </p>

            <a href=\" ";
                // line 69
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_addAbo");
                echo " \"><button type=\"button\" class=\"btn btn-success\">S'abonner</button></a>
            
          </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bouquet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
      ";
        }
        // line 76
        echo "
    </div>
    
  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Entreprise:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 76,  189 => 74,  178 => 69,  173 => 66,  170 => 65,  161 => 63,  156 => 62,  152 => 60,  150 => 59,  143 => 55,  137 => 54,  132 => 51,  128 => 50,  125 => 49,  119 => 45,  117 => 44,  112 => 41,  103 => 39,  99 => 38,  91 => 32,  88 => 31,  81 => 26,  78 => 25,  71 => 21,  65 => 18,  59 => 15,  53 => 12,  47 => 9,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Entreprise:index.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Entreprise/index.html.twig");
    }
}
