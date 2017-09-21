<?php

/* ConciergerieBundle:Salarie:commenterService.html.twig */
class __TwigTemplate_5dae9d18d07c9d3b747385fe10482f7589c40fc37a4e7f11b1902e882c1a009b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Salarie:index.html.twig", "ConciergerieBundle:Salarie:commenterService.html.twig", 1);
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
    <h2>Détails du service : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "libelle", array()), "html", null, true);
        echo "</h2>
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <section class=\"container\">

    <h3> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "libelle", array()), "html", null, true);
        echo "</h3>
    <p><b>Catégorie : </b> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "type", array()), "libelle", array()), "html", null, true);
        echo "</p>
    <p><b>Prestataire : </b> ";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
        echo "</p>
    <p><b>Description : </b> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "description", array()), "html", null, true);
        echo "</p>
    <p><b>Tarif : </b> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "tarif", array()), "html", null, true);
        echo "€</p>

    <h3>Avis laissés pour ce service :</h3>
    ";
        // line 20
        if (twig_test_empty($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "commentaires", array()))) {
            // line 21
            echo "    <p>Aucun avis n'a été déposé pour le moment</p>
    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "commentaires", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 24
                echo "          <p> <b><i>\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
                echo " \"</i></b>  </p>
          <p><b> - ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "nom", array()), "html", null, true);
                echo "</b> , ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "d/m/Y H:i"), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    <h3>Déposer un avis : </h3>

    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_commenterService", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "id", array())))));
        echo "

    <div class=\"input-group col-xs-8\">
      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez un titre pour votre avis"), "label" => "Titre :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "500 caractèes max"), "label" => "Description :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      <div class=\"alert alert-warning\">
        Cet avis sera soumis à la vérification de nos équipes. Vous serez alerté par mail lors de sa mise en ligne.
      </div>
      <input type=\"submit\" class=\"btn btn-success sub-btn\" value=\"Envoyer\" />
    </div>

    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Salarie:commenterService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  121 => 38,  114 => 34,  108 => 31,  103 => 28,  100 => 27,  88 => 25,  83 => 24,  78 => 23,  74 => 21,  72 => 20,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  45 => 10,  42 => 9,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Salarie:commenterService.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Salarie/commenterService.html.twig");
    }
}
