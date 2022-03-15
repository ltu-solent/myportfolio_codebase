{if $user->deleted}
<div class="peoplelistinfo">
    <h2 class="list-group-item-heading text-inline">{display_name $user}</h2>
</div>
{else}
<div class="peoplelistinfo" id="{$type}_{$user->id}">
    <div class="profile usericon-heading flex-row">
        <span class="user-icon user-icon-30 float-left" role="presentation" aria-hidden="true">
            <img src="{profile_icon_url user=$user maxwidth=30 maxheight=30}" alt="{str tag=profileimagetext arg1=$user|display_default_name}">
        </span>
        <h2 class="list-group-item-heading text-inline flex-title">
            <a href="{profile_url($user)}">{$user->display_name}</a>
        </h2>
    </div>
    {if $user->introduction}
    <div class="detail push-left-for-usericon">{$user->introduction|str_shorten_html:140:true|safe}</div>
    {/if}
</div>
{/if}
