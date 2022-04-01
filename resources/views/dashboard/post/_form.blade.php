
    <div class="form-group">
      <label for="title">Titulo</label>
      <input type="text" name = "title"class="form-control" id="title" value="{{ old('title') }}">
    </div>
  
  
      <div class="form-group">
        <label for="url_clean"> Url Limpia:</label>
        <input type="text" name= "url_clean"class="form-control" id="url_clean" value ="{{ old('url_clean') }}">
      
      </div>
  
      <div class="form-group">
        <label for="content">Contenido: </label>
        <textarea name = "content"class="form-control"> {{old('content') }}</textarea>
      </div>
     
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  