<!--Ajax cdn included -->
<script src="https://ajax.googleapis.com/ajax/libs/jQuery/3.3.1/jQuery.min.js">

</script>

<script type="text/javascript">
    function submitData(action){
        $(document).ready(function(){
            var data={
                action:action,
                id:$("#user_Id").val(),
                name:$("#user_name").val(),
                email:$("user_email").val(),
                password:$("#user_password").val(),
                phone:$("#user_phone").val(),
                email:$("user_address").val(),                                     
            }
        $.ajax({
            url:'function.php',
            type:'post',
            data:data,
            success:function(response){
                alert(response);
            }
        });
        });
    }
     
</script>