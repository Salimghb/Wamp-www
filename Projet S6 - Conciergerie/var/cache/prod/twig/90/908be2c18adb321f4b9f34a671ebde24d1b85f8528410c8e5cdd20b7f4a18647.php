<?php

/* @Conciergerie/Prestataire/commentairesService.html.twig */
class __TwigTemplate_11eba431abcd40b84815362fa00f8dc428b83d0d338bf8395ee1f6442995df89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Prestataire:index.html.twig", "@Conciergerie/Prestataire/commentairesService.html.twig", 1);
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
  <h2>Avis déposés pour le service : ";
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
        echo "<section class=\"container catalogue\">

  ";
        // line 13
        if (twig_test_empty((isset($context["commentaires"]) ? $context["commentaires"] : null))) {
            // line 14
            echo "    <h3>Vous n'avez pas encore reçu d'avis pour ce service !</h3>
  ";
        } else {
            // line 16
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 17
                echo "          ";
                if (($this->getAttribute($context["commentaire"], "published", array()) == true)) {
                    // line 18
                    echo "
              <p> <b><i>\" ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
                    echo " \"</i></b>  </p>
              <p><b> - ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "prenom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "nom", array()), "html", null, true);
                    echo "</b> , ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "d/m/Y H:i"), "html", null, true);
                    echo "</p>
          ";
                } else {
                    // line 22
                    echo "
            <p class=\"alert alert-warning\">Vous avez des commentaires en cours de modération.Ceux-ci seront publiés très prochainement si ils ne comportent pas de propos injurieux ou contrevenants à nos CGV.</p>



          ";
                }
                // line 28
                echo "

      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "  ";
        }
        // line 32
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Prestataire/commentairesService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  95 => 31,  87 => 28,  79 => 22,  70 => 20,  66 => 19,  63 => 18,  60 => 17,  55 => 16,  51 => 14,  49 => 13,  45 => 11,  42 => 10,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Prestataire/commentairesService.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Prestataire\\commentairesService.html.twig");
    }
}
