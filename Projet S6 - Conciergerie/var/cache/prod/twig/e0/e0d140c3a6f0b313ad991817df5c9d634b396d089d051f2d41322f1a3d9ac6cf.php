<?php

/* @Conciergerie/Admin/listeBouquets.html.twig */
class __TwigTemplate_c600ea5a833f75dbc9e81187d208f683d6367f12d09e01cb8b4e002d105d6ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Admin:index.html.twig", "@Conciergerie/Admin/listeBouquets.html.twig", 1);
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

      <h3>Liste des bouquets</h3>

      ";
        // line 11
        if (twig_test_empty((isset($context["listeBouquets"]) ? $context["listeBouquets"] : null))) {
            // line 12
            echo "        <br>
        <h4>Aucun bouquet disponible</h4>
      ";
        } else {
            // line 15
            echo "
        <table class=\"table table-bordered\">

          <tr>
            <th>ID Bouquet</th>
            <th>Libellé</th>
            <th>Tarif</th>
            <th>Supprimer</th>
          </tr>

          ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeBouquets"]) ? $context["listeBouquets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["bouquet"]) {
                // line 26
                echo "
            <tr>
              <td><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_bouquet", array("id" => $this->getAttribute($context["bouquet"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bouquet"], "id", array()), "html", null, true);
                echo "</a> </td>
              <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["bouquet"], "libelle", array()))), "html", null, true);
                echo "</td>
              <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["bouquet"], "tarif", array()), "html", null, true);
                echo "€</td>
              <td><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_deleteBouquet", array("id" => $this->getAttribute($context["bouquet"], "id", array()))), "html", null, true);
                echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Supprimer\"></a></td>
            </tr>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bouquet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
        </table>

      ";
        }
        // line 39
        echo "      <br>
      <p>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_admin_addBouquet");
        echo "\"><input type=\"button\" class=\"btn btn-success\" value=\"Ajouter un bouquet\"></a>
      </p>

    </div>

  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Admin/listeBouquets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  97 => 39,  91 => 35,  81 => 31,  77 => 30,  73 => 29,  67 => 28,  63 => 26,  59 => 25,  47 => 15,  42 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Admin/listeBouquets.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Admin\\listeBouquets.html.twig");
    }
}
