{{ $slot }}
<form action={{ route('site.matricula') }} method="post">
    @csrf
    <input name="nome" type="text"  placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <input name="cpf" type="text" placeholder="Cpf" class="{{ $classe }}">
    <br>
    <select name="curso" class="{{ $classe }}">
        <option value="">Curso</option>
        <option value="1">Inglês</option>
        <option value="2">Espanhol</option>
        <option value="3">Mandarim</option>
    </select>
    <br>
    <button type="submit" class="{{ $classe }}">Matricular</button>
</form>
