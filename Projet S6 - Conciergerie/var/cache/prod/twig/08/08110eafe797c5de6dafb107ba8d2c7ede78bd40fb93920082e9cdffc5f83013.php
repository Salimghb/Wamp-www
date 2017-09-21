<?php

/* ConciergerieBundle:Offline:index.html.twig */
class __TwigTemplate_b642a1f131fbd5b95cb8c3dd785fc4d0073de3583c01d75c58a148ab9ee32e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle::layout.html.twig", "ConciergerieBundle:Offline:index.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
  <section class=\"container-fluid corps\">
    <div class=\"row\">

      <div class=\"hidden-xs col-sm-4\">
        <img class=\" img_intro\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/conciergeriebureau.jpg"), "html", null, true);
        echo "\" alt=\"services\">
      </div>

      <div class=\"col-sm-8 col-xs-12\">
        <h1>Conciergerie d'Entreprise : Simplifiez vous la vie !</h1>
        <br>
        <p>
          <b>Vous êtes prestataire ?</b> Proposez vos services en quelques clics et rejoignez nos prestataires partenaires, vous serez avertis à chaque nouvelle commande et serez rémunéré immédiatement après chaque validation de commande. <br> <br>
          <b>Vous êtes dirigeant d'une entreprise ?</b> Offrez à vos salariés l'accès à une large gamme de services en vous abonnant à un bouquet personnalisé !  <br><br>
          <b>Vous êtes salarié d'une entreprise abonnée</b> Consultez la liste des services proposés par nos prestataires et passez commande dès que vous le souhaitez ! <br><br>
        </p>
      </div>

    </div>
  </section>

  <section class=\"container certification\">
    <div class=\"row\">

      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 bloc_certif\">
        <h3>Prestations fiables</h3>
        <p>Les avis laissés par les salariés aux prestataires sont importants et permettent d'avoir la garantie d'un service de qualité</p>
      </div>

      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 bloc_certif\">
        <h3>Paiement en ligne sécurisé</h3>
        <p>Profitez d'un mode de paiement en ligne 3D secure fiable pour vos commandes de services.</p>
      </div>

      <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 bloc_certif\">
        <h3>Service client disponible 7/7J</h3>
        <p>Pour toute question ou requête à nos équipes, notre service client s'engage à vous fournir une réponse sous 24h.</p>
      </div>

    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Offline:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Offline:index.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Offline/index.html.twig");
    }
}
