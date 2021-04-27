<html>
    <head>
        <meta charset="utf-8" />
        <title>Lista de Contatos</title>
        <link rel="stylesheet" href="contatos.css" type="text/css" />
    </head>

    <body>
        <h1>Lista de Contatos</h1>
        <form>
            <fieldset>
                <legend>Nova contato</legend>

                <label>
                    Nome:
                    <textarea name="nome"></textarea>
                </label>

                <label>
                    Telefone:
                    <input type="text" name="telefone" placeholder="(99) 99999-9999"/>
                </label>

                <label>
                    E-mail:
                    <textarea name="email" placeholder="name@example.com"></textarea>
                </label> 
                
                <label>
                    Data de nascimento:
                    <input type="date" name='nascimento'>
                </label>

                <label>
                    Descrição:
                    <textarea name="descricao"></textarea>
                </label>
            
                <label>
                    Contato favorito:
                    <input type="checkbox" name="favorito" value="sim" />
                </label>
                <input type="submit" value="Cadastrar" />            
        </form>

        <table>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Data de nascimento</th>
                <th>Descrição</th>
                <th>Contato favorito?</th>
            </tr>

            <?php foreach ($lista_contatos as $contato) : ?>
                <tr>
                    <td><?php echo $contato['nome']; ?> </td>
                    <td><?php echo $contato['telefone']; ?> </td>
                    <td><?php echo $contato['email']; ?> </td>
                    <td><?php echo $contato['nascimento']; ?> </td>
                    <td><?php echo $contato['descricao']; ?> </td>
                    <td><?php echo $contato['favorito']; ?> </td>

                </tr>

            <?php endforeach; ?>
            
        </table>

    </body>
</html>         