{extends file="parent:frontend/index/index.tpl"}

{block name='frontend_index_content'}
    <h1> I'm just the {$currentAction}-action</h1>

    <a href="{url controller='ControllerDemo' action=$nextAction}">
        {s name="GoToNextPage"}{/s} 
    </a>
{/block}