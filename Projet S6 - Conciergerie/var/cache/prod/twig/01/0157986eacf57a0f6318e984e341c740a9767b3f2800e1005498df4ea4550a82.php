<?php

/* @Conciergerie/Salarie/monEntreprise.html.twig */
class __TwigTemplate_2a953a94b92ba32e93bdd8ef143fe233e632fbc24acc96fc37aec9d2c92b6c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Salarie:index.html.twig", "@Conciergerie/Salarie/monEntreprise.html.twig", 1);
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
    <h2>Mon entreprise </h2>
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <section class=\"container\">
    ";
        // line 12
        if ((null === $this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()))) {
            // line 13
            echo "    <h3>Oups...Vous ne semblez être affilié à aucune entreprise pour le moment.</h3>
    <p>Si vous venez de créer ce compte, n'oubliez pas de prévenir la personne de votre responsable des ressources humaines de votre entreprise pour que celle-ci puisse vous ajouter à sa liste sur le site.</p>

    ";
        } else {
            // line 17
            echo "      <h2>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "user", array()), "username", array()))), "html", null, true);
            echo " </h2>
      <p><b>Responsable : </b> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "responsable", array()), "html", null, true);
            echo "</p>
      <p><b>Téléphone : </b> +33";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "telephone", array()), "html", null, true);
            echo "</p>
      <p><b>Adresse email : </b> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "user", array()), "email", array()), "html", null, true);
            echo "</p>
      <p><b>Adresse postale : </b> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "adresse", array()), "num", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "adresse", array()), "rue", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "adresse", array()), "codePostal", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "adresse", array()), "ville", array()), "html", null, true);
            echo "</p>
      <p><b>Site internet : </b> <a href=\"http://";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "site", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "site", array()), "html", null, true);
            echo "</a></p>

      <h3>Liste des abonnements de l'entreprise : </h3>
      ";
            // line 25
            if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "abonnements", array()))) {
                // line 26
                echo "      <p>Votre entreprise n'est pour l'instant abonnée à aucun bouquet.</p>
      ";
            } else {
                // line 28
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["salarie"]) ? $context["salarie"] : null), "entreprise", array()), "abonnements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
                    // line 29
                    echo "            <p><b>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abonnement"], "bouquet", array()), "libelle", array()), "html", null, true);
                    echo " :</b>
              ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["abonnement"], "bouquet", array()), "typesService", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                        // line 31
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
                        echo "
                ";
                        // line 32
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo ",";
                        }
                        // line 33
                        echo "              ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo ".
            </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "      ";
            }
            // line 37
            echo "    ";
        }
        // line 38
        echo "



  </section>

";
    }

    public function getTemplateName()
    {
        return "@Conciergerie/Salarie/monEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 38,  155 => 37,  152 => 36,  131 => 33,  127 => 32,  122 => 31,  105 => 30,  100 => 29,  95 => 28,  91 => 26,  89 => 25,  81 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  54 => 17,  48 => 13,  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Conciergerie/Salarie/monEntreprise.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle\\Resources\\views\\Salarie\\monEntreprise.html.twig");
    }
}
