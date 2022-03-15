<div class="card-body">
    {if $images}
    <div id="slideshow{$instanceid}" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner" role="listbox">
            {foreach from=$images item=image key=k name=images}

            <div class="{if $dwoo.foreach.images.first}carousel-item active{else}carousel-item{/if}">
                <img src="{$image.source}" alt="{$image.title}" title="{$image.title}" class="mx-auto d-block">

                {if $showdescription && $image.title}
                <div class="carousel-caption" id="description_{$instanceid}_{$k}">
                    {$image.title|clean_html|safe}
                </div>
                {/if}
            </div>
            {/foreach}
        </div>

        <a class="carousel-control-prev carousel-control" href="#slideshow{$instanceid}" role="button" data-slide="prev" title="{str tag=previous}">
            <span class="icon icon-angle-left icon-lg" role="presentation" aria-hidden="true"></span>
            <span class="sr-only">{str tag=previous}</span>
        </a>
        <a class="carousel-control-next carousel-control" href="#slideshow{$instanceid}" role="button" data-slide="next" title="{str tag=next}">
            <span class="icon icon-angle-right icon-lg" role="presentation" aria-hidden="true"></span>
            <span class="sr-only">{str tag=next}</span>
        </a>
    </div>
    {else}
      {str tag=noimagesfound section=artefact.file}
    {/if}
</div>

{$comments|safe}
