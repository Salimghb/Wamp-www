<?php

/* ConciergerieBundle:Salarie:monCompte.html.twig */
class __TwigTemplate_c3992e70b4d252281de040cfe40d22bc6225f09d4018c2116f78176f5fbf6093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ConciergerieBundle:Salarie:index.html.twig", "ConciergerieBundle:Salarie:monCompte.html.twig", 1);
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
    <h2>Salarie : Mon compte</h2>
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
<section class=\"container catalogue\">
  <h2>Modification des informations</h2>

  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "  <div class=\"alert alert-success\">
    ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  <!-- Début du formulaire d'édition de compte Salarie -->

  ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conciergerie_ECSalarie_monCompte"), "attr" => array("class" => "Bloc_Inscription container")));
        echo "


  <div class=\"input-group col-xs-8\">
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez votre adresse mail"), "label" => "Adresse mail :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Votre identifiant de connexion"), "label" => "Nom d'utilisateur :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez votre mot de passe (6 caractères minimum)"), "label" => "Nouveau mot de passe :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Confirmez votre mot de passe"), "label" => "Confirmation mot de passe :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "nom", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "ex: DURAND"), "label" => "Nom :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "prenom", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "ex: Jason"), "label" => "Prénom :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    <label>Adresse personnelle :</label>
    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "num", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro de la rue (ex : 219)")));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "rue", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la rue (ex : Rue du Pressoir Neuf)")));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "ville", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Ville (ex : Ouvrouer-Les-Champs)")));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "codePostal", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Code Postal (ex : 45192)")));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "numAppart", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro appartement ou batiment(ex : 12)")));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "etage", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro étage (ex : 2)")));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "complements", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Informations complémentaires (ex : Sonette sur la gauche)")));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    <label for=\"basic-url\">Sexe :</label>
    <p>
      ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 0, array(), "array"), 'errors');
        echo "
      ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 0, array(), "array"), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 0, array(), "array"), 'label');
        echo "
      ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 1, array(), "array"), 'errors');
        echo "
      ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 1, array(), "array"), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 1, array(), "array"), 'label');
        echo "
    </p>
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "telephone", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez votre numéro de téléphone"), "label" => "Numéro de téléphone :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "dateNaissance", array()), 'row', array("label" => "Date de naissance:"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    <input type=\"submit\" class=\"btn btn-primary sub-btn\" value=\"Valider les changements\" />
  </div>

  ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</section>


";
    }

    public function getTemplateName()
    {
        return "ConciergerieBundle:Salarie:monCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 99,  200 => 92,  193 => 88,  183 => 83,  179 => 82,  173 => 81,  169 => 80,  160 => 74,  153 => 70,  146 => 66,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  110 => 45,  103 => 41,  96 => 37,  89 => 33,  82 => 29,  75 => 25,  68 => 21,  64 => 19,  55 => 16,  52 => 15,  48 => 14,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ConciergerieBundle:Salarie:monCompte.html.twig", "C:\\wamp64\\www\\groupe19\\src\\ConciergerieBundle/Resources/views/Salarie/monCompte.html.twig");
    }
}
