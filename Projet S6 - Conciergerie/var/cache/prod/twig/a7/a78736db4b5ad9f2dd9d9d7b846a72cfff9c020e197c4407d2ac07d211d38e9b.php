<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_7225c6eb398740d77d8f0f18e569106ed2688532a12f06fac6dbf9ca57e6c5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register", array("role" => (isset($context["role"]) ? $context["role"] : null))), "attr" => array("class" => "Bloc_Inscription container")));
        echo "

<!-- **************************************************************************** -->

<!-- Partie Fixe du formulaire qui hydrate les attributs de l'utilisateur -->
  <div class=\"input-group col-xs-8\">
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez votre adresse mail"), "label" => "Adresse mail :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Votre identifiant de connexion"), "label" => "Nom d'utilisateur :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez votre mot de passe (6 caractères minimum)"), "label" => "Mot de passe :"));
        echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Confirmez votre mot de passe"), "label" => "Confirmation mot de passe :"));
        echo "
  </div>
  <!-- ************************************************************************************ -->

  <!-- Partie du formulaire qui hydrate les attributs d'entreprise quand celui-ci s'enregistre en tant que tel -->
  ";
        // line 27
        if (((isset($context["role"]) ? $context["role"] : null) == "Entreprise")) {
            // line 28
            echo "  <div class=\"input-group col-xs-8\">
    ";
            // line 29
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "siret", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez les 10 chiffres de votre N° de SIRET"), "label" => "Numéro de SIRET :"));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "responsable", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom et prénom du responsable"), "label" => "NOM et Prénom du responsable :"));
            echo "
  </div>


  <div class=\"input-group col-xs-8\">
    <label>Adresse de l'entreprise :</label>
    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "num", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro de la rue (ex : 219)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "rue", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la rue (ex : Rue du Pressoir Neuf)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "ville", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Ville (ex : Ouvrouer-Les-Champs)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "codePostal", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Code Postal (ex : 45192)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "numAppart", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro appartement ou batiment(ex : 12)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 59
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "etage", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro étage (ex : 2)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "adresse", array()), "complements", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Informations complémentaires (ex : Sonette sur la gauche)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 67
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "telephone", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone du responsable"), "label" => "Numéro de téléphone :"));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 71
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "entreprise", array()), "site", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "URL du site de l'entreprise"), "label" => "Site internet :"));
            echo "
  </div>
  <!-- ************************************************************************************* -->

  <!-- Partie qui hydrate les attributs de prestataire quand celui-ci s'enregistre en tant que tel -->
  ";
        } elseif ((        // line 76
(isset($context["role"]) ? $context["role"] : null) == "Prestataire")) {
            // line 77
            echo "  <div class=\"input-group col-xs-8\">
    ";
            // line 78
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "siret", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Entrez les 10 chiffres de votre N° de SIRET"), "label" => "Numéro de SIRET :"));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 82
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "responsable", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom et prénom du responsable"), "label" => "NOM et Prénom du responsable :"));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    <label>Adresse du prestataire :</label>
    ";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "num", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro de la rue (ex : 219)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 91
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "rue", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la rue (ex : Rue du Pressoir Neuf)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "ville", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Ville (ex : Ouvrouer-Les-Champs)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "codePostal", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Code Postal (ex : 45192)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "numAppart", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro appartement ou batiment(ex : 12)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 107
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "etage", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro étage (ex : 2)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 111
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "adresse", array()), "complements", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Informations complémentaires (ex : Sonette sur la gauche)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 115
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "telephone", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone du responsable"), "label" => "Numéro de téléphone :"));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prestataire", array()), "site", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "URL du site de l'entreprise"), "label" => "Site internet :"));
            echo "
  </div>
  <!-- ************************************************************************************************* -->

  <!-- Partie qui hydrate les attributs de salarié quand celui-ci s'enregistre en tant que tel -->
  ";
        } elseif ((        // line 124
(isset($context["role"]) ? $context["role"] : null) == "Salarie")) {
            // line 125
            echo "  <div class=\"input-group col-xs-8\">
    ";
            // line 126
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "nom", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "ex: DURAND"), "label" => "Nom :"));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 130
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "prenom", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "ex: Jason"), "label" => "Prénom :"));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    <label>Adresse personnelle :</label>
    ";
            // line 135
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "num", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro de la rue (ex : 219)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "rue", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la rue (ex : Rue du Pressoir Neuf)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 143
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "ville", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Ville (ex : Ouvrouer-Les-Champs)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 147
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "codePostal", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Code Postal (ex : 45192)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "numAppart", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro appartement ou batiment(ex : 12)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 155
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "etage", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Numéro étage (ex : 2)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "adresse", array()), "complements", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Informations complémentaires (ex : Sonette sur la gauche)")));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    <label for=\"basic-url\">Sexe :</label>
    <p>
      ";
            // line 165
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 0, array(), "array"), 'errors');
            echo "
      ";
            // line 166
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 0, array(), "array"), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 0, array(), "array"), 'label');
            echo "
      ";
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 1, array(), "array"), 'errors');
            echo "
      ";
            // line 168
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 1, array(), "array"), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "sexe", array()), 1, array(), "array"), 'label');
            echo "
    </p>
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 173
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "telephone", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Saisissez votre numéro de téléphone"), "label" => "Numéro de téléphone :"));
            echo "
  </div>

  <div class=\"input-group col-xs-8\">
    ";
            // line 177
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salarie", array()), "dateNaissance", array()), 'row', array("label" => "Date de naissance:"));
            echo "
  </div>

  ";
        }
        // line 181
        echo "  <!-- ******************************************************************************* -->


  <div class=\"input-group col-xs-8\">
    <input type=\"submit\" class=\"btn btn-primary sub-btn\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
  </div>

";
        // line 188
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 188,  345 => 185,  339 => 181,  332 => 177,  325 => 173,  315 => 168,  311 => 167,  305 => 166,  301 => 165,  292 => 159,  285 => 155,  278 => 151,  271 => 147,  264 => 143,  257 => 139,  250 => 135,  242 => 130,  235 => 126,  232 => 125,  230 => 124,  222 => 119,  215 => 115,  208 => 111,  201 => 107,  194 => 103,  187 => 99,  180 => 95,  173 => 91,  166 => 87,  158 => 82,  151 => 78,  148 => 77,  146 => 76,  138 => 71,  131 => 67,  124 => 63,  117 => 59,  110 => 55,  103 => 51,  96 => 47,  89 => 43,  82 => 39,  73 => 33,  66 => 29,  63 => 28,  61 => 27,  53 => 22,  46 => 18,  39 => 14,  32 => 10,  23 => 4,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\groupe19\\src\\UserBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
