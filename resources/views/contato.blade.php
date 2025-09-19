<h1>Enviar email</h1>
<form action="/teste" method="post">
    @csrf
    <label for="mensagem">Mensagem:</label><br>
    <input type="text" id="mensagem" name="mensagem"><br><br>
    <input type="submit" value="Enviar">
</form>