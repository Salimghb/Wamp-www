<?php

/* @Conciergerie/Prestataire/servicesPrestataire.html.twig */
class __TwigTemplate_ed9ace2808d5faabb48dcdfe3035e57380d14d23dbc8c5f1ebd70fae918216fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Prestataire:index.html.twig", "@Conciergerie/Prestataire/servicesPrestataire.html.twig", 1);
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

    // line 3
    public function block_TitrePage($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"container-fluid TitrePage\">
    <h2>Livraison de courses</h2>
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <section class=\"container\">

    <h3>Faites livrer vos courses à domicile !</h3>

    <img class=\"img-responsive\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/livraisonservice.jpg"), "html", null, true);
        echo "\" alt=\"\">

    <p>
      Un imprévu ce soir, vous devez rester plus longtemps que prévu au travail ? <b>Faites confiance à nos prestataires</b> et confiez leur la <b>livraison de vos courses à domicile</b> ! 
      <br>
      Pour un <b>tarif moyen de 10€</b> vous trouverez en quelques clics des <b>prestataires fiables</b> disponibles <b>dans votre ville.</b> Passez simplement commande puis fixez les modalités avec le prestataire. <b>Celui-ci s'engage à vous répondre dans les 24h !</b>
    </p>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Prestataire/servicesPrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Prestataire/servicesPrestataire.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Prestataire\\servicesPrestataire.html.twig");
    }
}
