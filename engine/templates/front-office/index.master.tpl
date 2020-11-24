<header>
    <a href="./?panier">Votre panier</a>
</header>

<main>

{if $page === ""}
{foreach from=$produits item=produit}
        <button>Ajouter au panier: {$produit.id}</button>
{/foreach}
{elseif $page === "panier"}
    {include file="./panier.tpl"}
{/if}
</main>