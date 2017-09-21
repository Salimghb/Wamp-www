<?php

/* ConciergerieBundle:Salarie:commandeService.html.twig */
class __TwigTemplate_8864e758e9ad35b707310b0aeab1e5a1a71dd8895416e97174b7cfa747922f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Salarie:index.html.twig", "ConciergerieBundle:Salarie:commandeService.html.twig", 1);
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
    <h2>Confirmation de commande</h2>
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <section class=\"container\">
    <div class=\"alert alert-warning\">
      <p>En confirmant une commande, vous informez le prestataire de votre intérêt pour son service. <br>
        Celui-ci sera notifié et pourra valider votre commande dès qu'il sera disponible pour vous délivrer sa prestation. <br>
        Vous serez informé de sa confirmation et pourrez depuis l'onglet \"mes commandes\" régler le service en question
        pour pouvoir ensuite entrer en contact avec le prestataire et convenir ensemble des modalités de livraison du service.
      </p>
    </div>
    <h3> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "libelle", array()), "html", null, true);
        echo "</h3>
    <p><b>Catégorie : </b> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "type", array()), "libelle", array()), "html", null, true);
        echo "</p>
    <p><b>Prestataire : </b> ";
        // line 21
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
        echo "</p>
    <p><b>Description : </b> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "description", array()), "html", null, true);
        echo "</p>
    <p><b>Tarif : </b> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "tarif", array()), "html", null, true);
        echo "€</p>
    <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_ConfirmCommande", array("id" => $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <div class=\"input-group col-xs-8\">
        <label>Informations complémentaires : </label>
        <textarea class=\"form-control\" name=\"complements\" rows=\"3\" cols=\"80\" placeholder=\"Vous souhaitez obtenir une information spécifique à propos du service ? Vos horaires sont particuliers et vous voulez prévenir le prestataire ? Précisez toute information utile à la commande dans ce bloc.\"></textarea>
      </div>
      <br>
      <input type=\"submit\" class=\"btn btn-success\" value=\"Confirmer la commande du service\">

      <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie");
        echo "\">
        <input type=\"button\" class=\"btn btn-warning\" value=\"Retour à la liste des services\">
      </a>
    </form>

      <br>




  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Salarie:commandeService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Salarie:commandeService.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Salarie/commandeService.html.twig");
    }
}
