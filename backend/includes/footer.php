<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!-- VENTANA MODAL CONTACTO-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!-- FORMULARIO -->
        <form action="mail.php" method="POST">
		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control" name="email">
		  </div>
		  <div class="form-group">
		    <label>Nombre completo</label>
		    <input type="text" class="form-control" name="nombre">
		  </div>
		  <br>
		  <textarea cols="35" rows="8" name="mensaje"></textarea>
		  <br>
		  <button type="submit" value="Enviar mensaje" class="btn btn-primary">Submit</button>
		</form>
		<!-- TERMINA FORMULARIO -->
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>	


<!-- TERMINA MODAL CONTACTO-->


</body>

</html>