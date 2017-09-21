<?php

/* ConciergerieBundle:Admin:listeCommentaires.html.twig */
class __TwigTemplate_df96b83c755aa43c543ba480224f206be0f815e932a16b056a13fab7f3b73f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "ConciergerieBundle:Admin:listeCommentaires.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConciergerieBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  <section class=\"container catalogue\">

    <div class=\"row\">

      <h3>
        Les derniers commentaires
      </h3>

      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "CommSuppr"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "
        ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "CommValid"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "
        ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
      ";
        // line 25
        if (twig_test_empty((isset($context["listeCommentaires"]) ? $context["listeCommentaires"] : null))) {
            // line 26
            echo "        <br>
        <h4>Aucun commentaire disponible</h4>
      ";
        } else {
            // line 29
            echo "
        <table class=\"table table-bordered\">

          <tr>
            <th>ID Commentaire</th>
            <th>ID Prestataire</th>
            <th>Service commenté</th>
            <th>Client</th>
            <th>Date et heure</th>
            <th>Valider</th>
            <th>Supprimer</th>
          </tr>

          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCommentaires"]) ? $context["listeCommentaires"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 43
                echo "
            <tr>
              <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_commentaire", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "id", array()), "html", null, true);
                echo "</a> </td>
              <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_prestataire", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["commentaire"], "service", array()), "prestataire", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["commentaire"], "service", array()), "prestataire", array()), "user", array()), "username", array()))), "html", null, true);
                echo "</a></td>
              <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "service", array()), "libelle", array()))), "html", null, true);
                echo "</td>
              <td>";
                // line 48
                echo twig_escape_filter($this->env, ((twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "prenom", array()))) . " ") . twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "salarie", array()), "nom", array())))), "html", null, true);
                echo "</td>
              <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "À h:m:s le d/m/Y"), "html", null, true);
                echo "</td>
              <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_validerCommentaire", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-success\" value=\"Valider\"></a></td>
              <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteCommentaire", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Supprimer\"></a></td>
            </tr>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
        </table>

      ";
        }
        // line 59
        echo "
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Admin:listeCommentaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 59,  148 => 55,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  116 => 46,  110 => 45,  106 => 43,  102 => 42,  87 => 29,  82 => 26,  80 => 25,  77 => 24,  68 => 21,  65 => 20,  61 => 19,  58 => 18,  49 => 15,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Admin:listeCommentaires.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Admin/listeCommentaires.html.twig");
    }
}
