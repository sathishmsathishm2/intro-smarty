{extends file="layout.tpl"}

{block name=body}

    <h1>welcome to About Page</h1>
    <ul class="list-group">
    {foreach $cars as $car}
        <li class="list-group-item">{$car}</li>
    {/foreach}
    </ul>
    {include file="loop.tpl"}

{/block}

