{include file='common/header.tpl'}

<div class="row">
    <form>
        <label for="search_input">Search:</label>
        <input type="text" id="search_input">
    </form>
</div>


<div class="row">
    <table class="table table-hover">
        <thead>
        <tr>

            {foreach from=$fields item=field}
                <th>{$field}</th>
            {/foreach}

        </tr>
        </thead>
        <tbody id="tableBody">

        </tbody>
    </table>
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src= {$BASE_URL}javascript/search/{$jsPage}></script>


{include file='common/footer.tpl'}