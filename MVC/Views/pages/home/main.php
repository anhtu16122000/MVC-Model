<Form action="#" method="POST">
    <input name="username" id="name" type="text" placeholder="Input username"/>
    <div id="isDuplicate"></div>
    <button type="submit"  name="test"> Submit</button>
    <?php
?>
<script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script>
</Form>