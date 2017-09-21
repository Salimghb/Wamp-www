<?php

/* ConciergerieBundle:Salarie:commandePay.html.twig */
class __TwigTemplate_3ba0c9023c4530afb4ff873e0a8d19aa250fe166babc91be2ac1c3a9d23679fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Salarie:index.html.twig", "ConciergerieBundle:Salarie:commandePay.html.twig", 1);
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
    <h2>Règlement de la commande : ";
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
    <div class=\"alert alert-info\">
      <p>Le prestataire a validé votre commande. Il s'engage donc à vous livrer le service convenu dès que vous aurez réglé cette commande.</p>
    </div>
    <h3> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "libelle", array()), "html", null, true);
        echo "</h3>
    <p><b>Catégorie : </b> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "type", array()), "libelle", array()), "html", null, true);
        echo "</p>
    <p><b>Prestataire : </b> ";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
        echo "</p>
    <p><b>Description : </b> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "description", array()), "html", null, true);
        echo "</p>
    <p><b>Tarif : </b> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "tarif", array()), "html", null, true);
        echo "€</p>
    <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_confirmPay", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <div class=\"input-group col-xs-8\">
        <label>Choix du mode de paiement : </label>
        <select class=\"form-control\" name=\"modePaiement\">
          <option value=\"CB Visa\">Carte de paiement VISA</option>
          <option value=\"CB MasterCard\">Carte de paiement VISA</option>
          <option value=\"Paypal\">Paiement électronique par Paypal</option>
          <option value=\"Cheque\">Chèque emploi service</option>
        </select>
      </div>
      <p class=\"alert alert-warning\">Si vous choisissez de régler par chèque emploi service, vous vous engagez à régler ce service auprès du prestataire avant toute livraison du service. <br>Celui-ci se réserve le droit, en cas de refus de paiement, de ne pas délivrer la prestation voulue</p>

      <input type=\"checkbox\" required> J'accepte les conditions générales d'utilisation. <br>

      <input type=\"submit\" class=\"btn btn-success\" value=\"Règlement de la commande\">

      <a href=\"";
        // line 36
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
        return "ConciergerieBundle:Salarie:commandePay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  45 => 10,  42 => 9,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Salarie:commandePay.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Salarie/commandePay.html.twig");
    }
}
