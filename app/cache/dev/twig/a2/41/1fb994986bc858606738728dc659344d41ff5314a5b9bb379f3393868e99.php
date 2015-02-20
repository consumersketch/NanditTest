<?php

/* default/index.html.twig */
class __TwigTemplate_a2411fb994986bc858606738728dc659344d41ff5314a5b9bb379f3393868e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        // line 5
        echo "\t<form id=\"ajaxform\" action=\"/product_invoice\">
\t\t<select id=\"client_id\" name=\"client_id\">
\t\t\t<option value=\"\">---Select Client---</option>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 9
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientId", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</select>
  \t\t<input type=\"button\" id=\"submit\" value=\"Submit\">
\t</form> 
<div id=\"result\">

\t";
        // line 17
        echo "\t<table border=\"1\">
\t\t<tr>
\t\t\t<td>Client Id</td>
\t\t\t<td>Invoice Num</td>
\t\t\t<td>Invoice Date</td>
\t\t\t<td>Qty</td>
\t\t\t<td>Price</td>
\t\t</tr>
\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientInvoicesArray"]) ? $context["clientInvoicesArray"] : $this->getContext($context, "clientInvoicesArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["invoiveData"]) {
            // line 26
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["invoiveData"]);
            foreach ($context['_seq'] as $context["_key"] => $context["singleinvoive"]) {
                // line 27
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["singleinvoive"], "client_id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["singleinvoive"], "invoice_num", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["singleinvoive"], "invoice_date", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["singleinvoive"], "qty", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["singleinvoive"], "price", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singleinvoive'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoiveData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  115 => 35,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  87 => 27,  82 => 26,  78 => 25,  68 => 17,  61 => 11,  50 => 9,  46 => 8,  41 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
