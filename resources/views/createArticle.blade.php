@extends('templates/createArticle_layout')
@section('content')
  
  <div class="container_article">
    <section>
      <h1>Criar novo artigo</h1>
    </section>
    <hr>
    <form method="POST" action="{{ route('form_criar_artigo')}}">
        @csrf
        <div>
          <div>
            <label for="select_category">Selecione a categoria do artigo:</label>
            <select name="select_category" id="select_category" required>
              <option value="">Selecionar:</option>
              @foreach ($category as $categoria)
                  <option value="{{ $categoria->id }}" {{ old('select_category') == $categoria->id ? 'selected' : '' }}>
                      {{ $categoria->nome_categoria }}
                  </option>
              @endforeach
            </select>
            @error('select_category')
                @foreach($errors->get('select_category') as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @enderror
          </div>
          <div>
            <label for="seo_title">SEO-Title:</label>
            <input type="text" name="seo_title" id="seo_title" required value="{{ old('seo_title') }}">
            @error('seo_title')
                @foreach($errors->get('seo_title') as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @enderror
          </div>
          <div>
            <label for="seo_description">SEO-Descrição:</label>
            <input type="text" name="seo_description" id="seo_description" required value="{{ old('seo_description') }}">
            @error('seo_description')
                @foreach($errors->get('seo_description') as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @enderror
          </div>
          <div>
            <label for="seo_keys">SEO-Palavras chave:</label>
            <input type="text" name="seo_keys" id="seo_keys" required value="{{ old('seo_keys') }}">
            @error('seo_keys')
                @foreach($errors->get('seo_keys') as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @enderror
          </div>
        </div>
        <div>
          <textarea  id="myeditorinstance" name="text_article"  placeholder="Inicie seu artigo...">{{ old('text_article') }}</textarea>
          @error('text_article')
              @foreach($errors->get('text_article') as $error)
                  <div>{{ $error }}</div>
              @endforeach
          @enderror
        </div>
        <button type="submit">Enviar dados do formulário</button>
    </form>

    @if(session('success'))
    <div id="popup" style="display: block; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #8fd35f; padding: 20px; border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); z-index: 9999;">
      <h3>Artigo criado com sucesso!</h3>
      <button onclick="fecharPopup()">Fechar</button>
    </div>
  @endif

  </div>
  
  {{-- TyniMCE para o editor de texto --}}
  <script src="https://cdn.tiny.cloud/1/b95zb2o46fge5ju62t26ul2tn9x4hy891c0etb2dvl5htr4p/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });



  </script>

@endsection

@section('scripts')
<script>
    function fecharPopup() {
    document.getElementById('popup').style.display = 'none';
  }
</script>
@endsection
