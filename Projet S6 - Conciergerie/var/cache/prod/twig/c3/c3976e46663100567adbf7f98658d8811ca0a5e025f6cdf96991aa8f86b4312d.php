<?php

/* ConciergerieBundle:Entreprise:addAbo.html.twig */
class __TwigTemplate_e5351b338df25fc2408e4a2eb81da49e567c389560d58584df682681bdd22f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Entreprise:index.html.twig", "ConciergerieBundle:Entreprise:addAbo.html.twig", 1);
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
    <h2>Espace d'abonnement aux bouquets</h2>
  </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  <section class=\"container catalogue\">
    <div class=\"row\">
      <h2>Abonnement</h2>
    </div>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "BlockAboSupp"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "      <p>Action impossible : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_addAbo"), "attr" => array("class" => "")));
        echo "

    <div class=\"input-group col-xs-8\">
      ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bouquet", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Bouquet souhaité :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dureeAbo", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Durée de l'abonnement"), "label" => "Nombre de mois d'abonnement :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateDebut", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Début de l'abonnement :"));
        echo "
    </div>

    <p></p>
    <p>

      <input type=\"submit\" class=\"btn btn-success sub-btn\" value=\"Valider\" />

      <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECEntreprise_listeAbo");
        echo "\" class=\"btn btn-warning\">

        Retour à la liste des abonnements

      </a>

    </p>
    

    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Entreprise:addAbo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 47,  95 => 38,  84 => 30,  77 => 26,  70 => 22,  64 => 19,  61 => 18,  52 => 16,  48 => 15,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Entreprise:addAbo.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Entreprise/addAbo.html.twig");
    }
}
