        <h3>Formulario AJAX de Prueba</h3>
        <hr><div id="resultado" class="alert alert-danger" style="display: none;"></div>
      <?php echo form_open('form/post');?> 

        <div class="form-group">
          <label>Name:</label>
          <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <strong>Email:</strong>
          <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <strong>Message:</strong>
          <textarea class="form-control" name="message" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-block btn-submit">Submit</button>
        </div>
      </form>
   
<script type="text/javascript">
$(document).ready(function() {
  $(".btn-submit").click(function(e){
      e.preventDefault();
      var name = $("input[name='name']").val();
      var email = $("input[name='email']").val();
      var message = $("textarea[name='message']").val();
      $.ajax({
          url: $(this).closest('form').attr('action'),
          type:$(this).closest('form').attr('method'),
          dataType: "json",
          data: {name:name, email:email, message:message},
          success: function(data) {
              if($.isEmptyObject(data.error)){
                $("#resultado").removeClass("alert-danger").addClass("alert-success");
                $(".alert-success").css('display','block');
                $(".alert-success").html(data.success);
              }else{
                $(".alert-danger").css('display','block');
                $(".alert-danger").html(data.error);
              }
          }
      });
  }); 
});
</script>