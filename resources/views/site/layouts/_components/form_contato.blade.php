@props([
'classe' => 'borda-branca'
])
{{ $slot }}
<form method="POST" action="{{ route('site.contato') }}">
  @csrf
  <input name="nome" type="text" placeholder="Nome" value="{{ old('nome') }}" class="{{ $classe }} @error('nome') borda-vermelha @enderror">
  @error('nome')
  <small class="text-danger">{{ $message }}</small>
  @enderror
  <br>
  <input name="telefone" type="text" placeholder="Telefone" value="{{ old('telefone') }}" class="{{ $classe }} @error('telefone') borda-vermelha @enderror">
  @error('telefone')
  <small class="text-danger">{{ $message }}</small>
  @enderror
  <br>
  <input name="email" type="text" placeholder="E-mail" value="{{ old('email') }}" class="{{ $classe }} @error('email') borda-vermelha @enderror">
  @error('email')
  <small class="text-danger">{{ $message }}</small>
  @enderror
  <br>
  <select name="motivo_contato" class="{{ $classe }} @error('motivo_contato') borda-vermelha @enderror">
    <option value="">Qual o motivo do contato?</option>
    <option value="1" {{ old('motivo_contato')==1 ? 'selected' : '' }}>Dúvida</option>
    <option value="2" {{ old('motivo_contato')==2 ? 'selected' : '' }}>Elogio</option>
    <option value="3" {{ old('motivo_contato')==3 ? 'selected' : '' }}>Reclamação</option>
  </select>
  @error('motivo_contato')
  <small class="text-danger">{{ $message }}</small>
  @enderror
  <br>
  <textarea name="mensagem" placeholder="Escreva sua mensagem aqui" class="{{ $classe }} @error('mensagem') borda-vermelha @enderror">{{ old('mensagem') }}</textarea>
  @error('mensagem')
  <small class="text-danger">{{ $message }}</small>
  @enderror
  <br>
  <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>