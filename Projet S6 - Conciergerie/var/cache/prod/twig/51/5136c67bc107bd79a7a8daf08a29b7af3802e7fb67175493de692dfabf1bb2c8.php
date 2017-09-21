<?php

/* @Conciergerie/Admin/viewCommentaire.html.twig */
class __TwigTemplate_e075de3abdbc914b96be1ddadb73f6204a0b308811ccf397410e5b491481919d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "
  <section class=\"container catalogue\">

    <div class=\"row\">

      <h3>Détails du commentaire ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "id", array()), "html", null, true);
        echo "</h3>

      <p><b>Service concerné : </b>";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "service", array()), "libelle", array()))), "html", null, true);
        echo "</p>
      <p><b>Prestataire concerné : </b><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_prestataire", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "service", array()), "prestataire", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "service", array()), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
        echo "</a></p>
      <p><b>Auteur : </b>";
        // line 11
        echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "salarie", array()), "prenom", array()))) . " ") . twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "salarie", array()), "nom", array())))), "html", null, true);
        echo "</p>
      <p><b>Publié le ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</b> à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "date", array()), "H:i:s"), "html", null, true);
        echo "</p>
      <p><b>Titre :</b> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "titre", array()), "html", null, true);
        echo "</p>
      <p><b>Contenu :</b> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "contenu", array()), "html", null, true);
        echo "</p>
      <p>

        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_validerCommentaire", array("id" => $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "id", array()))), "html", null, true);
        echo "\"><input type=\"button\" class=\"btn btn-success\" value=\"Valider\"></a>

        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteCommentaire", array("id" => $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : null), "id", array()))), "html", null, true);
        echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Supprimer\"></a>

        <a href=\" ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commentaires");
        echo " \"><button type=\"button\" class=\"btn btn-warning\">Retour à la liste des commentaires</button></a>

      </p>

    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Admin/viewCommentaire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  73 => 19,  68 => 17,  62 => 14,  58 => 13,  52 => 12,  48 => 11,  42 => 10,  38 => 9,  33 => 7,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Admin/viewCommentaire.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\viewCommentaire.html.twig");
    }
}
