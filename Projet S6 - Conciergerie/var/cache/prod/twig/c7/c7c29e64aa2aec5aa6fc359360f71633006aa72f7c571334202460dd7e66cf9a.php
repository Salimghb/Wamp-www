<?php

/* @Conciergerie/Prestataire/addService.html.twig */
class __TwigTemplate_139d2a7acf7372ad04fed598600ef9acccbc97bdd0bdad98ae8e18c3f998f028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Prestataire:index.html.twig", "@Conciergerie/Prestataire/addService.html.twig", 1);
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
    <h2>Prestataire : Proposer un nouveau service</h2>
  </div>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  <section class=\"container catalogue\">

    <!-- Début du formulaire d'ajout de services -->
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECPrestataire_addService"), "attr" => array("class" => "")));
        echo "

    <div class=\"input-group col-xs-8\">
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelle", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez un titre pour votre service"), "label" => "Titre du service :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'row', array("attr" => array("class" => "form-control"), "label" => "Type de service :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Présentez votre service en quelques lignes...(500 caractères max)"), "label" => "Description du service :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tarif", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez le prix en € de votre service"), "label" => "Tarif :"));
        echo "
    </div>

    <div class=\"input-group col-xs-8\">
      <div class=\"alert alert-warning\">
        Ce service sera soumis à la vérification de nos équipes. Vous serez alerté par mail lors de sa mise en ligne.
      </div>
      <input type=\"submit\" class=\"btn btn-success sub-btn\" value=\"Ajouter\" />
    </div>

    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

  </section>
";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Prestataire/addService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 39,  74 => 29,  67 => 25,  60 => 21,  53 => 17,  47 => 14,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Prestataire/addService.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Prestataire\\addService.html.twig");
    }
}
