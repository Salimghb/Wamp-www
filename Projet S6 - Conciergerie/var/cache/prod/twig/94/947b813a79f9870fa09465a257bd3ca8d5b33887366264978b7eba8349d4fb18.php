<?php

/* @Conciergerie/Prestataire/viewService.html.twig */
class __TwigTemplate_a5fbe3bec10f8f260cfac34632d05bf7313aa4920187d3bd3ee129bb373407c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Prestataire:index.html.twig", "@Conciergerie/Prestataire/viewService.html.twig", 1);
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
  <h2>Votre service : ";
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
  <h2>Modification du service :</h2>
  ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_service", array("id" => $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "id", array()))), "attr" => array("class" => "")));
        echo "

  <div class=\"input-group col-xs-8\">
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelle", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez un titre pour votre service"), "label" => "Titre du service :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Type de service :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Présentez votre service en quelques lignes...(500 caractères max)"), "label" => "Description du service :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tarif", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez le prix en € de votre service"), "label" => "Tarif (en €) :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">

    <input type=\"submit\" class=\"btn btn-success sub-btn\" value=\"Valider la modification\" />
  </div>

  ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

  <h2>Commentaires reçus pour ce service : </h2>

  ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "commentaires", array()))) {
            // line 41
            echo "    <p>Vous n'avez pas encore reçu d'avis pour ce service !</p>
  ";
        } else {
            // line 43
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "commentaires", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 44
                echo "          ";
                if (($this->getAttribute($context["commentaire"], "published", array()) == true)) {
                    // line 45
                    echo "            <p><b>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "prenom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "nom", array()), "html", null, true);
                    echo " : </b>
              ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
                    echo "
            </p>
          ";
                }
                // line 49
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "  ";
        }
        // line 52
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Prestataire/viewService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  128 => 51,  121 => 49,  115 => 46,  108 => 45,  105 => 44,  100 => 43,  96 => 41,  94 => 40,  87 => 36,  76 => 28,  69 => 24,  62 => 20,  55 => 16,  49 => 13,  45 => 11,  42 => 10,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Prestataire/viewService.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Prestataire\\viewService.html.twig");
    }
}
