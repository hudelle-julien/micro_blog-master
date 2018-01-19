{include file='includes/header.tpl'}

{if $pseudo neq ""}
<div class="row">              
	<form method="post" action="message.php">
		<div class="col-sm-10">  
			<div class="form-group">
				<textarea id="message" name="message" class="form-control" placeholder="Message">{if isset($smarty.get.id) && $smarty.get.id ne ''}{$contenu}{/if}</textarea>
				<input type="hidden" id="id" name="id" value="{if isset($smarty.get.id) && !empty($smarty.get.id)}{$id}{/if}"/>		
			</div>
		</div>

		<div class="col-sm-2">
			<button type="submit"  class="btn btn-success btn-lg">Envoyer</button>
		</div>   

	</form>
</div>
<div class="row apercu hidden" id="apercu" >              
    <form>
        <div class="col-sm-10">  
            <div class="form-group">            
               <p id="apercuexpreg" name="apercuexpreg" class="form-control"></p>
               <input type="hidden" id="apercu1" name="apercu1" value="{$getID}" />
            </div>
        </div>
                       
    </form>
</div>
{/if}

{$u=0}
{foreach from=$list_contenu item=contenu}

{capture assign=var}{$u++}{/capture}
<div style="display:flex;flex-direction:row">
    <blockquote>
        {$contenu.contenu}s
        <br/>
        {$contenu.date}
        <br/>
        {$contenu.pseudo}
        <br/>
        <!-- If the user's pseudo is the same as the message's author, he can update or delete the said message -->
        {if $pseudo eq $contenu.pseudo}
            <a role="button" class="btn btn-info btn-default " href="index.php?id={$contenu.idMessage}">Modifier</a>
            <a role="button" class="btn btn-danger btn-default" href="delete_message.php?id={$contenu.idMessage}">Supprimer</a>
        {/if}
    </blockquote>
</div>

{/foreach}

{if $nbreMessages != 0}
<!-- Pagination div -->
<div class="col-md-offset-4">
	<nav aria-label="Page navigation">
		<ul class="pagination pagination-lg ">

			<!-- If the page isn't the first one, displays previous page button -->
			{if isset($smarty.get.page) && $smarty.get.page neq 1}
			<li>
				<a href="index.php?page={$smarty.get.page-1}{if isset($smarty.get.contenu)}&amp;contenu={$smarty.get.contenu}{/if}" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>
			{/if}

			{for $i=0 to $nbrePages-1}
			<li>
                <a href="index.php?page={$i+1}{if isset($smarty.get.contenu)}&amp;contenu={$smarty.get.contenu}{/if}">{$i+1}</a>
            </li>
			{/for}

			<!-- If the page isn't the last one, displays next page button -->
			{if !isset($smarty.get.page) or $smarty.get.page < $nbrePages}
			     {if $nbreMessages > $mpp}
			        	  <li>
                        <a href="index.php?page={if isset($smarty.get.page) && $smarty.get.page!=1}{$smarty.get.page+1}{else}{2}{/if}{if isset($smarty.get.contenu)}&amp;contenu={$smarty.get.contenu}{/if}" aria-label="Next">
		                      <span aria-hidden="true">&raquo;</span>
	                   </a>
                    </li>
                {/if}
            {/if}
        </ul>
    </nav>
</div>
{/if}



{include file='includes/footer.tpl'}

