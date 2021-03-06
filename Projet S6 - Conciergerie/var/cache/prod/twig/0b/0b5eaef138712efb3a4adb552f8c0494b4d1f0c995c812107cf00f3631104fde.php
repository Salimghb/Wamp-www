<?php

/* @Conciergerie/Admin/listePrestataires.html.twig */
class __TwigTemplate_4318f809e2ff543c9556c36e8a96fed380b0407f67227665cdd106bf41505f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "@Conciergerie/Admin/listePrestataires.html.twig", 1);
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

      <h3>Liste des prestataires</h3>

      ";
        // line 11
        if (twig_test_empty((isset($context["listePrestataires"]) ? $context["listePrestataires"] : null))) {
            // line 12
            echo "        <br>
        <h4>Aucune prestataire disponible</h4>
      ";
        } else {
            // line 15
            echo "
        <table class=\"table table-bordered\">

          <tr>
            <th>ID Prestataire</th>
            <th>Nom / Raison Sociale</th>
            <th>SIRET</th>
            <th>Numéro de téléphone</th>
            <th>Site web</th>
            <th>Supprimer</th>
          </tr>

          ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listePrestataires"]) ? $context["listePrestataires"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prestataire"]) {
                // line 28
                echo "
            <tr>
              <td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_prestataire", array("id" => $this->getAttribute($context["prestataire"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["prestataire"], "id", array()), "html", null, true);
                echo "</a> </td>
              <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["prestataire"], "user", array()), "username", array()))), "html", null, true);
                echo "</td>
              <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["prestataire"], "siret", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 33
                echo twig_escape_filter($this->env, ("+33" . $this->getAttribute($context["prestataire"], "telephone", array())), "html", null, true);
                echo "</td>
              <td><a href=\"http://";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["prestataire"], "site", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["prestataire"], "site", array()), "html", null, true);
                echo "</a></td>
              <td><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deletePrestataire", array("id" => $this->getAttribute($context["prestataire"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Supprimer\"></a></td>
            </tr>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestataire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
        </table>

      ";
        }
        // line 43
        echo "
    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Admin/listePrestataires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  103 => 39,  93 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  69 => 30,  65 => 28,  61 => 27,  47 => 15,  42 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Admin/listePrestataires.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\listePrestataires.html.twig");
    }
}
